'''
Created on 18/03/2015

@author: Junior Mascarenhas
'''
from abstractclass.magnetometerSensor import MagnetometerSensor
from utils.pycomms import PyComms

class HMC5883L(MagnetometerSensor):

    HMC5883L_ADDRESS = 0x1E # this device only has one address
    HMC5883L_DEFAULT_ADDRESS = 0x1E

    HMC5883L_RA_CONFIG_A = 0x00
    HMC5883L_RA_CONFIG_B = 0x01
    HMC5883L_RA_MODE = 0x02
    HMC5883L_RA_DATAX_H = 0x03
    HMC5883L_RA_DATAX_L = 0x04
    HMC5883L_RA_DATAZ_H = 0x05
    HMC5883L_RA_DATAZ_L = 0x06
    HMC5883L_RA_DATAY_H = 0x07
    HMC5883L_RA_DATAY_L = 0x08
    HMC5883L_RA_STATUS = 0x09
    HMC5883L_RA_ID_A = 0x0A
    HMC5883L_RA_ID_B = 0x0B
    HMC5883L_RA_ID_C = 0x0C

    HMC5883L_CRA_AVERAGE_BIT = 6
    HMC5883L_CRA_AVERAGE_LENGTH = 2
    HMC5883L_CRA_RATE_BIT = 4
    HMC5883L_CRA_RATE_LENGTH = 3
    HMC5883L_CRA_BIAS_BIT = 1
    HMC5883L_CRA_BIAS_LENGTH = 2

    HMC5883L_AVERAGING_1 = 0x00
    HMC5883L_AVERAGING_2 = 0x01
    HMC5883L_AVERAGING_4 = 0x02
    HMC5883L_AVERAGING_8 = 0x03

    HMC5883L_RATE_0P75 = 0x00
    HMC5883L_RATE_1P5 = 0x01
    HMC5883L_RATE_3 = 0x02
    HMC5883L_RATE_7P5 = 0x03
    HMC5883L_RATE_15 = 0x04
    HMC5883L_RATE_30 = 0x05
    HMC5883L_RATE_75 = 0x06

    HMC5883L_BIAS_NORMAL = 0x00
    HMC5883L_BIAS_POSITIVE = 0x01
    HMC5883L_BIAS_NEGATIVE = 0x02

    HMC5883L_CRB_GAIN_BIT = 7
    HMC5883L_CRB_GAIN_LENGTH = 3

    HMC5883L_GAIN_1370 = 0x00
    HMC5883L_GAIN_1090 = 0x01
    HMC5883L_GAIN_820 = 0x02
    HMC5883L_GAIN_660 = 0x03
    HMC5883L_GAIN_440 = 0x04
    HMC5883L_GAIN_390 = 0x05
    HMC5883L_GAIN_330 = 0x06
    HMC5883L_GAIN_220 = 0x07

    HMC5883L_MODEREG_BIT = 1
    HMC5883L_MODEREG_LENGTH = 2

    HMC5883L_MODE_CONTINUOUS = 0x00
    HMC5883L_MODE_SINGLE = 0x01
    HMC5883L_MODE_IDLE = 0x02

    HMC5883L_STATUS_LOCK_BIT = 1
    HMC5883L_STATUS_READY_BIT = 0

    def __init__(self, address = HMC5883L_DEFAULT_ADDRESS):
        MagnetometerSensor.__init__(self)
        self.setup(address)

    def setup(self, address = HMC5883L_DEFAULT_ADDRESS):
        self.__i2c = PyComms(address)
        self.__address = address
        self.__mode = 0
        # write CONFIG_A register
        self.__i2c.write8(self.HMC5883L_RA_CONFIG_A,
            (self.HMC5883L_AVERAGING_8 << (self.HMC5883L_CRA_AVERAGE_BIT - self.HMC5883L_CRA_AVERAGE_LENGTH + 1)) |
            (self.HMC5883L_RATE_15     << (self.HMC5883L_CRA_RATE_BIT - self.HMC5883L_CRA_RATE_LENGTH + 1)) |
            (self.HMC5883L_BIAS_NORMAL << (self.HMC5883L_CRA_BIAS_BIT - self.HMC5883L_CRA_BIAS_LENGTH + 1)))

        # write CONFIG_B register
        self.__setGain(self.HMC5883L_GAIN_1090);

        # write MODE register
        self.__setMode(self.HMC5883L_MODE_SINGLE);

    def __setGain(self, value):
        self.__i2c.write8(self.HMC5883L_RA_CONFIG_B, value << (self.HMC5883L_CRB_GAIN_BIT - self.HMC5883L_CRB_GAIN_LENGTH + 1))

    def __setMode(self, newMode):
        # use this method to guarantee that bits 7-2 are set to zero, which is a
        # requirement specified in the datasheet
        self.__i2c.write8(self.HMC5883L_RA_MODE, self.__mode << (self.HMC5883L_MODEREG_BIT - self.HMC5883L_MODEREG_LENGTH + 1))
        self.__mode = newMode # track to tell if we have to clear bit 7 after a read

    def getMagnetic(self):
        packet = self.__i2c.readBytesListS(self.HMC5883L_RA_DATAX_H, 6)
        if (self.__mode == self.HMC5883L_MODE_SINGLE):
            self.__i2c.write8(self.HMC5883L_RA_MODE, self.HMC5883L_MODE_SINGLE << (self.HMC5883L_MODEREG_BIT - self.HMC5883L_MODEREG_LENGTH + 1))

        data = {
            'x' : ((packet[0] << 8) | packet[1]),
            'y' : ((packet[4] << 8) | packet[5]),
            'z' : ((packet[2] << 8) | packet[3])}

        return data


