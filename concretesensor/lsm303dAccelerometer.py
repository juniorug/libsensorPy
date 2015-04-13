'''
Created on 16/03/2015

@author: Junior Mascarenhas
'''
from smbus import SMBus
from abstractclass.accelerometerSensor import AccelerometerSensor

class LSM303DAccelerometer(AccelerometerSensor):

    LSM = 0x1d
    LSM_WHOAMI = 0b1001001 #Device self-id

    #Control register addresses -- from LSM303D datasheet

    CTRL_0 = 0x1F #General settings
    CTRL_1 = 0x20 #Turns on accelerometer and configures data rate
    CTRL_2 = 0x21 #Self test accelerometer, anti-aliasing accel filter
    CTRL_3 = 0x22 #Interrupts
    CTRL_4 = 0x23 #Interrupts
    CTRL_5 = 0x24 #Turns on temperature sensor
    CTRL_6 = 0x25 #Magnetic resolution selection, data rate config
    CTRL_7 = 0x26 #Turns on magnetometer and adjusts mode

    #Registers holding twos-complemented MSB and LSB of magnetometer readings -- from LSM303D datasheet
    MAG_X_LSB = 0x08 # x
    MAG_X_MSB = 0x09
    MAG_Y_LSB = 0x0A # y
    MAG_Y_MSB = 0x0B
    MAG_Z_LSB = 0x0C # z
    MAG_Z_MSB = 0x0D

    #Registers holding twos-complemented MSB and LSB of magnetometer readings -- from LSM303D datasheet
    ACC_X_LSB = 0x28 # x
    ACC_X_MSB = 0x29
    ACC_Y_LSB = 0x2A # y
    ACC_Y_MSB = 0x2B
    ACC_Z_LSB = 0x2C # z
    ACC_Z_MSB = 0x2D

    #Registers holding 12-bit right justified, twos-complemented temperature data -- from LSM303D datasheet
    TEMP_MSB = 0x05
    TEMP_LSB = 0x06

    def __init__(self):
        '''
        Constructor
        '''
        AccelerometerSensor.__init__(self)
        self.setup()

    def setup(self):
        """
        Setup the board and GPIO  
        @return: void
        """
        self.__busNum = 0
        try:
            self.__b = SMBus(self.__busNum)
        except:
            print ("no device connected")
            exit(0)

        self.__detect(self)
        self.__configure(self)

    def changeSetup(self):
        """changes GPIO setup ."""
        pass

    def __twos_comp_combine(msb, lsb):
        """
        @param msb: Most significant bit
        @type msb: int8
        @param lsb: Last significant bit
        @type lsb: int8
        """
        
        twos_comp = 256 * msb + lsb
        if twos_comp >= 32768:
            return twos_comp - 65536
        else:
            return twos_comp

    def __detect(self):
        """ Detects if a LSM303D is connected."""
        if (self.__b.read_byte_data(self.LSM, 0x0f) == self.LSM_WHOAMI):
            print ('LSM303D detected successfully.')
        else:
            print ('No LSM303D detected on bus '+ str(self.__busNum)+'.')

    def __configure(self):
        """Configure the board to read data. """
        self.__b.write_byte_data(self.LSM, self.CTRL_1, 0b1010111) # enable accelerometer, 50 hz sampling
        self.__b.write_byte_data(self.LSM, self.CTRL_2, 0x00) #set +/- 2g full scale
        self.__b.write_byte_data(self.LSM, self.CTRL_5, 0b01100100) #high resolution mode, thermometer off, 6.25hz ODR
        self.__b.write_byte_data(self.LSM, self.CTRL_6, 0b00100000) # set +/- 4 gauss full scale
        self.__b.write_byte_data(self.LSM, self.CTRL_7, 0x00) #get magnetometer out of low power mode

    def getAxes(self):
        """Get the axes.
        @return: the axes read
        @rtype: float[]
        """
        x = self.__twos_comp_combine(self.__b.read_byte_data(self.LSM, self.ACC_X_MSB), self.__b.read_byte_data(self.LSM, self.ACC_X_LSB))
        y = self.__twos_comp_combine(self.__b.read_byte_data(self.LSM, self.ACC_Y_MSB), self.__b.read_byte_data(self.LSM, self.ACC_Y_LSB))
        z = self.__twos_comp_combine(self.__b.read_byte_data(self.LSM, self.ACC_Z_MSB), self.__b.read_byte_data(self.LSM, self.ACC_Z_LSB))
        return {"x": x, "y": y, "z": z}

