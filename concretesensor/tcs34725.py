'''
Created on 17/03/2015

@author: Junior Mascarenhas
based on earlyer version from
the one written by Limor Fried, Kevin Townsend and Mikey Sklar
SEE License_Adafruit.txt included in this package
'''

import time
from utils.pycomms import PyComms
from abstractclass.lightSensor import LightSensor

class TCS34725(LightSensor):
    '''
    classdocs
    '''

    __ADDRESS= 0x29
    __COMMAND_BIT = 0x80
    __ENABLE = 0x00
    __ENABLE_AIEN = 0x10 # RGBC Interrupt Enable
    __ENABLE_WEN = 0x08 # Wait enable - Writing 1 activates the wait timer
    __ENABLE_AEN = 0x02 # RGBC Enable - Writing 1 actives the ADC, 0 disables it
    __ENABLE_PON = 0x01 # Power on - Writing 1 activates the internal oscillator, 0 disables it
    __ATIME = 0x01 # Integration time
    __WTIME = 0x03 # Wait time (if ENABLE_WEN is asserted)
    __WTIME_2_4MS = 0xFF # WLONG0 = 2.4ms   WLONG1 = 0.029s
    __WTIME_204MS = 0xAB # WLONG0 = 204ms   WLONG1 = 2.45s
    __WTIME_614MS = 0x00 # WLONG0 = 614ms   WLONG1 = 7.4s
    __AILTL = 0x04 # Clear channel lower interrupt threshold
    __AILTH = 0x05
    __AIHTL = 0x06 # Clear channel upper interrupt threshold
    __AIHTH = 0x07
    __PERS = 0x0C # Persistence register - basic SW filtering mechanism for interrupts
    __PERS_NONE = 0b0000 # Every RGBC cycle generates an interrupt
    __PERS_1_CYCLE = 0b0001 # 1 clean channel value outside threshold range generates an interrupt
    __PERS_2_CYCLE = 0b0010 # 2 clean channel values outside threshold range generates an interrupt
    __PERS_3_CYCLE = 0b0011 # 3 clean channel values outside threshold range generates an interrupt
    __PERS_5_CYCLE = 0b0100 # 5 clean channel values outside threshold range generates an interrupt
    __PERS_10_CYCLE = 0b0101 # 10 clean channel values outside threshold range generates an interrupt
    __PERS_15_CYCLE = 0b0110 # 15 clean channel values outside threshold range generates an interrupt
    __PERS_20_CYCLE = 0b0111 # 20 clean channel values outside threshold range generates an interrupt
    __PERS_25_CYCLE = 0b1000 # 25 clean channel values outside threshold range generates an interrupt
    __PERS_30_CYCLE = 0b1001 # 30 clean channel values outside threshold range generates an interrupt
    __PERS_35_CYCLE = 0b1010 # 35 clean channel values outside threshold range generates an interrupt
    __PERS_40_CYCLE = 0b1011 # 40 clean channel values outside threshold range generates an interrupt
    __PERS_45_CYCLE = 0b1100 # 45 clean channel values outside threshold range generates an interrupt
    __PERS_50_CYCLE = 0b1101 # 50 clean channel values outside threshold range generates an interrupt
    __PERS_55_CYCLE = 0b1110 # 55 clean channel values outside threshold range generates an interrupt
    __PERS_60_CYCLE = 0b1111 # 60 clean channel values outside threshold range generates an interrupt
    __CONFIG = 0x0D
    __CONFIG_WLONG = 0x02 # Choose between short and long (12x) wait times via WTIME
    __CONTROL = 0x0F # Set the gain level for the sensor
    __ID = 0x12 # 0x44 = TCS34721/TCS34725, 0x4D = TCS34723/TCS34727
    __STATUS = 0x13
    __STATUS_AINT = 0x10 # RGBC Clean channel interrupt
    __STATUS_AVALID = 0x01 # Indicates that the RGBC channels have completed an integration cycle

    __CDATAL = 0x14 # Clear channel data
    __CDATAH = 0x15
    __RDATAL = 0x16 # Red channel data
    __RDATAH = 0x17
    __GDATAL = 0x18 # Green channel data
    __GDATAH = 0x19
    __BDATAL = 0x1A # Blue channel data
    __BDATAH = 0x1B

    __INTEGRATIONTIME_2_4MS = 0xFF   #  2.4ms - 1 cycle    - Max Count: 1024
    __INTEGRATIONTIME_24MS = 0xF6   # 24ms  - 10 cycles  - Max Count: 10240
    __INTEGRATIONTIME_50MS = 0xEB   #  50ms  - 20 cycles  - Max Count: 20480
    __INTEGRATIONTIME_101MS = 0xD5   #  101ms - 42 cycles  - Max Count: 43008
    __INTEGRATIONTIME_154MS = 0xC0   #  154ms - 64 cycles  - Max Count: 65535
    __INTEGRATIONTIME_700MS = 0x00   #  700ms - 256 cycles - Max Count: 65535

    __GAIN_1X = 0x00   #  No gain
    __GAIN_4X = 0x01   #  2x gain
    __GAIN_16X = 0x02   #  16x gain
    __GAIN_60X = 0x03   #  60x gain

    __integrationTimeDelay = {
        0xFF: 0.0024,  # 2.4ms - 1 cycle    - Max Count: 1024
        0xF6: 0.024,   # 24ms  - 10 cycles  - Max Count: 10240
        0xEB: 0.050,   # 50ms  - 20 cycles  - Max Count: 20480
        0xD5: 0.101,   # 101ms - 42 cycles  - Max Count: 43008
        0xC0: 0.154,   # 154ms - 64 cycles  - Max Count: 65535
        0x00: 0.700    # 700ms - 256 cycles - Max Count: 65535
    }


    def __init__(self, address=0x29, debug=False, integrationTime=0xFF, gain=0x01):
        LightSensor.__init__(self)
        self.__i2c = PyComms(address)
        self.setup(address, debug, integrationTime, gain)

    def setup(self, address=0x29, debug=False, integrationTime=0xFF, gain=0x01):
        self.__address = address
        self.__debug = debug
        self.__integrationTime = integrationTime
        result = self.__readU8(self.__ID)
        if (result != 0x44):
            return -1

        # Set default integration time and gain
        self.__setIntegrationTime(integrationTime)
        self.__setGain(gain)

        # Note: by default, the device is in power down mode on bootup
        self.__enable()
        self.__setInterrupt(False)
        time.sleep(1)

    def __readU8(self, reg):
        return self.__i2c.readU8(self.__COMMAND_BIT | reg)

    def __readU16Rev(self, reg):
        return self.__i2c.readU16(self.__COMMAND_BIT | reg)

    def __write8(self, reg, value):
        self.__i2c.write8(self.__COMMAND_BIT | reg, value & 0xff)

    def __enable(self):
        self.__write8(self.__ENABLE, self.__ENABLE_PON)
        time.sleep(0.01)
        self.__write8(self.__ENABLE, (self.__ENABLE_PON | self.__ENABLE_AEN))

    def disable(self):
        reg = self.__readU8(self.__ENABLE)
        self.__write8(self.__ENABLE, (reg & ~(self.__ENABLE_PON | self.__ENABLE_AEN)))

    def __setIntegrationTime(self, integrationTime):
        "Sets the integration time for the TC34725"
        self.__integrationTime = integrationTime
        self.__write8(self.__ATIME, integrationTime)

    def __getIntegrationTime(self):
        return self.__readU8(self.__ATIME)

    def __setGain(self, gain):
        "Adjusts the gain on the TCS34725 (adjusts the sensitivity to light)"
        self.__write8(self.__CONTROL, gain)

    def __getGain(self):
        return self.__readU8(self.__CONTROL)

    def __getRawData(self):
        "Reads the raw red, green, blue and clear channel values"

        color = {}

        color["r"] = self.__readU16Rev(self.__RDATAL)
        color["b"] = self.__readU16Rev(self.__BDATAL)
        color["g"] = self.__readU16Rev(self.__GDATAL)
        color["c"] = self.__readU16Rev(self.__CDATAL)

        # Set a delay for the integration time
        delay = self.__integrationTimeDelay.get(self.__integrationTime)
        time.sleep(delay)

        return color

    def __setInterrupt(self, int):
        r = self.__readU8(self.__ENABLE)

        if (int):
            r |= self.__ENABLE_AIEN
        else:
            r &= ~self.__ENABLE_AIEN

        self.__write8(self.__ENABLE, r)

    def clearInterrupt(self):
        self.__i2c.write8(0x66, 0 & 0xff)

    def setIntLimits(self, low, high):
        self.__i2c.write8(0x04, low & 0xFF)
        self.__i2c.write8(0x05, low >> 8)
        self.__i2c.write8(0x06, high & 0xFF)
        self.__i2c.write8(0x07, high >> 8)

    def calculateColorTemperature(self):
        "Converts the raw R/G/B values to color temperature in degrees Kelvin"
        rgb = self.__getRawData()

        X = (-0.14282 * rgb['r']) + (1.54924 * rgb['g']) + (-0.95641 * rgb['b'])
        Y = (-0.32466 * rgb['r']) + (1.57837 * rgb['g']) + (-0.73191 * rgb['b'])
        Z = (-0.68202 * rgb['r']) + (0.77073 * rgb['g']) + ( 0.56332 * rgb['b'])

        # Check for divide by 0 (total darkness) and return None.
        if (X + Y + Z) == 0:
            return None

        xc = (X) / (X + Y + Z)
        yc = (Y) / (X + Y + Z)

        if (0.1858 - yc) == 0:
            return None

        # 3. Use McCamy's formula to determine the CCT
        n = (xc - 0.3320) / (0.1858 - yc)

        # Calculate the final CCT
        cct = (449.0 * (n ** 3.0)) + (3525.0 *(n ** 2.0)) + (6823.3 * n) + 5520.33

        return (float(cct) - 273.15)

    def calculateLux(self):
        rgb = self.__getRawData()

        illuminance = (-0.32466 * rgb['r']) + (1.57837 * rgb['g']) + (-0.73191 * rgb['b'])

        return long(illuminance)

    def __del__(self):
        # we're no longer using the GPIO, so tell software we're done
        self.__setInterrupt(True)
        time.sleep(1)
        self.__disable()
        LightSensor.__del__(self)