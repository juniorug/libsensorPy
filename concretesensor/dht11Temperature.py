'''
Created on 30/01/2015

@author: Junior Mascarenhas
'''
import RPi.GPIO as GPIO
from abstractclass.temperatureSensor import TemperatureSensor
import time

class DHT11Temperature(TemperatureSensor):
    '''
    classdocs
    '''

    def __init__(self):
        '''
        Constructor
        '''
        TemperatureSensor.__init__(self)
        self.setup()


    def setup(self):
        """
        Setup the board and GPIO  
        @return: void
        """
        GPIO.setmode(GPIO.BCM)
        GPIO.setwarnings(False)
        self.__pin = 23
        self.__data = []
        self.__crc = ""
        self.__humidity = ""
        self.__temperature = ""

    ##
    # @param pin: the GPIO pin used to wire the sensor
    # @return: void
    def changeSetup(self, pin):
        """
        @param pin: the GPIO pin used to wire the sensor.
        @return: void
        """
        self.__pin = pin

    def __checkValidData(self):
        """
        Check if data is valid.
        @return: Boolean
        """
        return (int(self.__humidity) + int(self.__temperature) - int(self.__crc) == 0)

    def __getValidData(self):
        """
        Reads sensor data until its send a valid data.
        @return: void
        """
        
        dataRead = False
        while not (dataRead):
            dataRead = self.__readData()
            if (dataRead):
                dataRead = self.__checkValidData()
            if not (dataRead):
                time.sleep(0.5)

    def getTemperature(self):
        """
        Gets the temperature from the sensor
        @return: The temperature read
        @rtype: float
        """
        self.__getValidData()
        return self.__temperature

    def __readData(self):
        """
        Read sensor's raw data.
        @return: Boolean
        """
        self.__data = []
        GPIO.setmode(GPIO.BCM)
        GPIO.setup(self.__pin,GPIO.OUT)
        GPIO.output(self.__pin,GPIO.HIGH)
        time.sleep(0.025)
        GPIO.output(self.__pin,GPIO.LOW)
        time.sleep(0.02)

        GPIO.setup(self.__pin, GPIO.IN, pull_up_down=GPIO.PUD_UP)

        for i in range(0,500):
            self.__data.append(GPIO.input(23))

        bit_count = 0
        tmp = 0
        count = 0
        humidityBit = ""
        temperatureBit = ""
        crc = ""

        try:
            while self.__data[count] == 1:
                tmp = 1
                count = count + 1

            for i in range(0, 32):
                bit_count = 0

                while self.__data[count] == 0:
                    tmp = 1
                    count = count + 1

                while self.__data[count] == 1:
                    bit_count = bit_count + 1
                    count = count + 1

                if bit_count > 3:
                    if i>=0 and i<8:
                        humidityBit = humidityBit + "1"
                    if i>=16 and i<24:
                        temperatureBit = temperatureBit + "1"
                else:
                    if i>=0 and i<8:
                        humidityBit = humidityBit + "0"
                    if i>=16 and i<24:
                        temperatureBit = temperatureBit + "0"

        except:
            return False

        try:
            for i in range(0, 8):
                bit_count = 0

                while self.__data[count] == 0:
                    tmp = 1
                    count = count + 1

                while self.__data[count] == 1:
                    bit_count = bit_count + 1
                    count = count + 1

                if bit_count > 3:
                    crc = crc + "1"    
                else:
                    crc = crc + "0"
        except:
            return False
            
        self.__humidity = self._bin2dec(humidityBit)
        self.__temperature = self._bin2dec(temperatureBit)
        self.__crc = self._bin2dec(crc)
        return True

