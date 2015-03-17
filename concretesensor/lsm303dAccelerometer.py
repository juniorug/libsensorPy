'''
Created on 16/03/2015

@author: zeus
'''
from smbus import SMBus
from abstractclass.accelerometerSensor import AccelerometerSensor



class LSM303DAccelerometer(AccelerometerSensor):

    busNum = 1
    b = SMBus(busNum)

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
        self.detect(self)
        self.configure(self)

    def __twos_comp_combine(msb, lsb):
        twos_comp = 256 * msb + lsb
        if twos_comp >= 32768:
            return twos_comp - 65536
        else:
            return twos_comp

    def detect(self):
        if (self.b.read_byte_data(self.LSM, 0x0f) == self.LSM_WHOAMI):
            print 'LSM303D detected successfully.'
        else:
            print 'No LSM303D detected on bus '+ str(self.busNum)+'.'

    def configure(self):
        self.b.write_byte_data(self.LSM, self.CTRL_1, 0b1010111) # enable accelerometer, 50 hz sampling
        self.b.write_byte_data(self.LSM, self.CTRL_2, 0x00) #set +/- 2g full scale
        self.b.write_byte_data(self.LSM, self.CTRL_5, 0b01100100) #high resolution mode, thermometer off, 6.25hz ODR
        self.b.write_byte_data(self.LSM, self.CTRL_6, 0b00100000) # set +/- 4 gauss full scale
        self.b.write_byte_data(self.LSM, self.CTRL_7, 0x00) #get magnetometer out of low power mode

    def __getMagnetic(self):
        x = self.__twos_comp_combine(self.b.read_byte_data(self.LSM, self.MAG_X_MSB), self.b.read_byte_data(self.LSM, self.MAG_X_LSB))
        y = self.__twos_comp_combine(self.b.read_byte_data(self.LSM, self.MAG_Y_MSB), self.b.read_byte_data(self.LSM, self.MAG_Y_LSB))
        z = self.__twos_comp_combine(self.b.read_byte_data(self.LSM, self.MAG_Z_MSB), self.b.read_byte_data(self.LSM, self.MAG_Z_LSB))
        return {"x": x, "y": y, "z": z}


    def getAxes(self, gforce = False):
        x = self.__twos_comp_combine(self.b.read_byte_data(self.LSM, self.ACC_X_MSB), self.b.read_byte_data(self.LSM, self.ACC_X_LSB))
        y = self.__twos_comp_combine(self.b.read_byte_data(self.LSM, self.ACC_Y_MSB), self.b.read_byte_data(self.LSM, self.ACC_Y_LSB))
        z = self.__twos_comp_combine(self.b.read_byte_data(self.LSM, self.ACC_Z_MSB), self.b.read_byte_data(self.LSM, self.ACC_Z_LSB))
        return {"x": x, "y": y, "z": z}

