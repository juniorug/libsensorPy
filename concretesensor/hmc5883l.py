'''
Created on 18/03/2015

@author: Junior Mascarenhas
'''
from abstractclass.magnetometerSensor import MagnetometerSensor
from utils.pycomms import PyComms

class HMC5883L(MagnetometerSensor):

    ADDRESS = 0x1E # this device only has one address
    DEFAULT_ADDRESS = 0x1E

    RA_CONFIG_A = 0x00
    RA_CONFIG_B = 0x01
    RA_MODE = 0x02
    RA_DATAX_H = 0x03
    RA_DATAX_L = 0x04
    RA_DATAZ_H = 0x05
    RA_DATAZ_L = 0x06
    RA_DATAY_H = 0x07
    RA_DATAY_L = 0x08
    RA_STATUS = 0x09
    RA_ID_A = 0x0A
    RA_ID_B = 0x0B
    RA_ID_C = 0x0C

    CRA_AVERAGE_BIT = 6
    CRA_AVERAGE_LENGTH = 2
    CRA_RATE_BIT = 4
    CRA_RATE_LENGTH = 3
    CRA_BIAS_BIT = 1
    CRA_BIAS_LENGTH = 2

    AVERAGING_1 = 0x00
    AVERAGING_2 = 0x01
    AVERAGING_4 = 0x02
    AVERAGING_8 = 0x03

    RATE_0P75 = 0x00
    RATE_1P5 = 0x01
    RATE_3 = 0x02
    RATE_7P5 = 0x03
    RATE_15 = 0x04
    RATE_30 = 0x05
    RATE_75 = 0x06

    BIAS_NORMAL = 0x00
    BIAS_POSITIVE = 0x01
    BIAS_NEGATIVE = 0x02

    CRB_GAIN_BIT = 7
    CRB_GAIN_LENGTH = 3

    GAIN_1370 = 0x00
    GAIN_1090 = 0x01
    GAIN_820 = 0x02
    GAIN_660 = 0x03
    GAIN_440 = 0x04
    GAIN_390 = 0x05
    GAIN_330 = 0x06
    GAIN_220 = 0x07

    MODEREG_BIT = 1
    MODEREG_LENGTH = 2

    MODE_CONTINUOUS = 0x00
    MODE_SINGLE = 0x01
    MODE_IDLE = 0x02

    STATUS_LOCK_BIT = 1
    STATUS_READY_BIT = 0

    def __init__(self, address = DEFAULT_ADDRESS):
        MagnetometerSensor.__init__(self)
        self.setup(address)

    def setup(self, address = DEFAULT_ADDRESS):
        self.__i2c = PyComms(address)
        self.__address = address
        self.__mode = 0
        # write CONFIG_A register
        self.__i2c.write8(self.RA_CONFIG_A,
            (self.AVERAGING_8 << (self.CRA_AVERAGE_BIT - self.CRA_AVERAGE_LENGTH + 1)) |
            (self.RATE_15     << (self.CRA_RATE_BIT - self.CRA_RATE_LENGTH + 1)) |
            (self.BIAS_NORMAL << (self.CRA_BIAS_BIT - self.CRA_BIAS_LENGTH + 1)))

        # write CONFIG_B register
        self.__setGain(self.GAIN_1090);

        # write MODE register
        self.__setMode(self.MODE_SINGLE);

    def changeSetup(self):
        """changes GPIO setup ."""
        pass

    def __setGain(self, value):
        self.__i2c.write8(self.RA_CONFIG_B, value << (self.CRB_GAIN_BIT - self.CRB_GAIN_LENGTH + 1))

    def __setMode(self, newMode):
        # use this method to guarantee that bits 7-2 are set to zero, which is a
        # requirement specified in the datasheet
        self.__i2c.write8(self.RA_MODE, self.__mode << (self.MODEREG_BIT - self.MODEREG_LENGTH + 1))
        self.__mode = newMode # track to tell if we have to clear bit 7 after a read

    def getMagnetic(self):
        packet = self.__i2c.readBytesListS(self.RA_DATAX_H, 6)
        if (self.__mode == self.MODE_SINGLE):
            self.__i2c.write8(self.RA_MODE, self.MODE_SINGLE << (self.MODEREG_BIT - self.MODEREG_LENGTH + 1))

        data = {
            'x' : ((packet[0] << 8) | packet[1]),
            'y' : ((packet[4] << 8) | packet[5]),
            'z' : ((packet[2] << 8) | packet[3])}

        return data


