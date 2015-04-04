'''
Created on 17/03/2015

@author: Junior Mascarenhas
based on earlyer version from
the one written by Limor Fried, Kevin Townsend and Mikey Sklar
SEE License_Adafruit.txt included in this package
'''
import time

# Custom Imports
from utils.pycomms import PyComms
from abstractclass.temperatureSensor import TemperatureSensor

class BMP085Temperature(TemperatureSensor):

    # Operating Modes
    __ULTRALOWPOWER = 0
    __STANDARD = 1
    __HIGHRES = 2
    __ULTRAHIGHRES = 3

    # BMP085 Registers
    __CAL_AC1 = 0xAA  
    __CAL_AC2 = 0xAC  
    __CAL_AC3 = 0xAE  
    __CAL_AC4 = 0xB0  
    __CAL_AC5 = 0xB2  
    __CAL_AC6 = 0xB4  
    __CAL_B1 = 0xB6  
    __CAL_B2 = 0xB8  
    __CAL_MB = 0xBA  
    __CAL_MC = 0xBC  
    __CAL_MD = 0xBE  
    __CONTROL = 0xF4
    __TEMPDATA = 0xF6
    __PRESSUREDATA = 0xF6
    __READTEMPCMD = 0x2E
    __READPRESSURECMD = 0x34

    # Private Fields
    __cal_AC1 = 0
    __cal_AC2 = 0
    __cal_AC3 = 0
    __cal_AC4 = 0
    __cal_AC5 = 0
    __cal_AC6 = 0
    __cal_B1 = 0
    __cal_B2 = 0
    __cal_MB = 0
    __cal_MC = 0
    __cal_MD = 0

    def __init__(self, address = 0x77, mode = 3):
        TemperatureSensor.__init__(self)
        self.setup(address, mode)

    def setup(self,address = 0x77, mode = 3):
        self.__i2c = PyComms(address)
        self.__address = address
        # Make sure the specified mode is in the appropriate range
        if ((mode < 0) | (mode > 3)):
            self.__mode = self.__STANDARD
        else:
            self.__mode = mode
        # Read the calibration data
        self.__readCalibrationData()

    def changeSetup(self):
        """changes GPIO setup ."""
        pass

    def __readCalibrationData(self):
        # Reads the calibration data from the IC
        self.__cal_AC1 = self.__i2c.readS16(self.__CAL_AC1)   # INT16
        self.__cal_AC2 = self.__i2c.readS16(self.__CAL_AC2)   # INT16
        self.__cal_AC3 = self.__i2c.readS16(self.__CAL_AC3)   # INT16
        self.__cal_AC4 = self.__i2c.readU16(self.__CAL_AC4)   # UINT16
        self.__cal_AC5 = self.__i2c.readU16(self.__CAL_AC5)   # UINT16
        self.__cal_AC6 = self.__i2c.readU16(self.__CAL_AC6)   # UINT16
        self.__cal_B1 = self.__i2c.readS16(self.__CAL_B1)     # INT16
        self.__cal_B2 = self.__i2c.readS16(self.__CAL_B2)     # INT16
        self.__cal_MB = self.__i2c.readS16(self.__CAL_MB)     # INT16
        self.__cal_MC = self.__i2c.readS16(self.__CAL_MC)     # INT16
        self.__cal_MD = self.__i2c.readS16(self.__CAL_MD)     # INT16

    def __readRawTemp(self):
        # Reads the raw (uncompensated) temperature from the sensor
        self.__i2c.write8(self.__CONTROL, self.__READTEMPCMD)
        time.sleep(0.005)  # Wait 5ms
        raw = self.__i2c.readU16(self.__TEMPDATA)
        
        return raw

    def getTemperature(self):
        # Gets the compensated temperature in degrees celcius
        UT = 0
        X1 = 0
        X2 = 0
        B5 = 0
        temp = 0.0

        # Read raw temp before aligning it with the calibration values
        UT = self.__readRawTemp()
        X1 = ((UT - self.__cal_AC6) * self.__cal_AC5) >> 15
        X2 = (self.__cal_MC << 11) / (X1 + self.__cal_MD)
        B5 = X1 + X2
        temp = ((B5 + 8) >> 4) / 10.0
        
        return temp