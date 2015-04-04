'''
Created on 16/03/2015

@author: Junior Mascarenhas
based on earlyer version from
the one written by Jonathan Williamson
SEE License_Pimoroni.txt included in this package
'''

import smbus
from abstractclass.accelerometerSensor import AccelerometerSensor

# select the correct i2c bus for this revision of Raspberry Pi
revision = ([l[12:-1] for l in open('/proc/cpuinfo','r').readlines() if l[:8]=="Revision"]+['0000'])[0]

class ADXL345(AccelerometerSensor):

    address = None
    # ADXL345 constants
    EARTH_GRAVITY_MS2 = 9.80665
    SCALE_MULTIPLIER = 0.004

    DATA_FORMAT = 0x31
    BW_RATE = 0x2C
    POWER_CTL = 0x2D

    BW_RATE_1600HZ = 0x0F
    BW_RATE_800HZ = 0x0E
    BW_RATE_400HZ = 0x0D
    BW_RATE_200HZ = 0x0C
    BW_RATE_100HZ = 0x0B
    BW_RATE_50HZ = 0x0A
    BW_RATE_25HZ = 0x09

    RANGE_2G = 0x00
    RANGE_4G = 0x01
    RANGE_8G = 0x02
    RANGE_16G = 0x03

    MEASURE = 0x08
    AXES_DATA = 0x32

    def __init__(self, address = 0x53):
        AccelerometerSensor.__init__(self)
        self.address = address
        self.setup()

    def setup(self):
        self.__revision = ([l[12:-1] for l in open('/proc/cpuinfo','r').readlines() if l[:8]=="Revision"]+['0000'])[0]
        try:
            self.__bus = smbus.SMBus(1 if int(self.__revision, 16) >= 4 else 0)
        except:
            print "no device connected"
            exit(0)
        self.__setBandwidthRate(ADXL345.BW_RATE_100HZ)
        self.setSensitivity(ADXL345.RANGE_2G)
        self.__enableMeasurement()

    def changeSetup(self):
        """changes GPIO setup ."""
        pass

    def __enableMeasurement(self):
        self.__bus.write_byte_data(ADXL345.address, ADXL345.POWER_CTL, ADXL345.MEASURE)

    def __setBandwidthRate(self, rate_flag):
        self.__bus.write_byte_data(ADXL345.address, ADXL345.BW_RATE, rate_flag)

    # set the measurement range for 10-bit readings
    def setSensitivity(self, range_flag = RANGE_2G):
        value = self.__bus.read_byte_data(ADXL345.address, ADXL345.DATA_FORMAT)

        value &= ~0x0F;
        value |= range_flag;
        value |= 0x08;

        self.__bus.write_byte_data(ADXL345.address, ADXL345.DATA_FORMAT, value)

    def getAxes(self):
        bytes = self.__bus.read_i2c_block_data(ADXL345.address, ADXL345.AXES_DATA, 6)

        x = bytes[0] | (bytes[1] << 8)
        if(x & (1 << 16 - 1)):
            x = x - (1<<16)

        y = bytes[2] | (bytes[3] << 8)
        if(y & (1 << 16 - 1)):
            y = y - (1<<16)

        z = bytes[4] | (bytes[5] << 8)
        if(z & (1 << 16 - 1)):
            z = z - (1<<16)

        x = x * ADXL345.SCALE_MULTIPLIER
        y = y * ADXL345.SCALE_MULTIPLIER
        z = z * ADXL345.SCALE_MULTIPLIER

        x = round(x, 4)
        y = round(y, 4)
        z = round(z, 4)

        return {"x": x, "y": y, "z": z}
