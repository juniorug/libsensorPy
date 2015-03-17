'''
Created on 30/01/2015

@author: Junior
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
        self.__data = []
        self.__crc = ""
        self.__humidity = "" 
        self.__temperature = ""
        GPIO.setmode(GPIO.BCM)
    
    def __bin2dec(self,string_num):
        return str(int(string_num, 2))     
    
    def setup(self):
        GPIO.setmode(GPIO.BCM)
    
    def __checkValidData(self):
        return (int(self.__humidity) + int(self.__temperature) - int(self.__crc) == 0)

    def getTemperature(self):
        self.__readData()
        if (self.__checkValidData()):
            #print ("Temperature in Celsius: " + self.__temperature +"C")
            return self.__temperature
        else: 
            return ("No valid data readed")
            
    def getTemperatureInFahrenheit(self):

        dataRead = False

        while not (dataRead):
            dataRead = self.__readData()
            if (dataRead):
                print "data read OK"
                dataRead = self.__checkValidData()
            if not (dataRead):
                "data read not ok or not a valid data"
                time.sleep(1)
        print "wohhh data ok now"
        return str((float(self.__temperature) * 9 /5.0 ) + 32)

            
    def getTemperatureInKelvin(self):
        self.__readData()
        if (self.__checkValidData()):
            #print ("Temperature in Kelvin: " + self.__temperature)
            return str((float(self.__temperature) + 273.15))
        else: 
            return ("No valid data readed")          
            
    def __readData(self):
        self.__data = []
        GPIO.setmode(GPIO.BCM)
        GPIO.setup(23,GPIO.OUT)
        GPIO.output(23,GPIO.HIGH)
        time.sleep(0.025)
        GPIO.output(23,GPIO.LOW)
        time.sleep(0.02)

        GPIO.setup(23, GPIO.IN, pull_up_down=GPIO.PUD_UP)

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
            
        self.__humidity = self.__bin2dec(humidityBit)
        self.__temperature = self.__bin2dec(temperatureBit)
        self.__crc = self.__bin2dec(crc)
        return True
        
     
        
        
        
