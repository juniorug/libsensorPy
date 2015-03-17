'''
Created on 16/03/2015

@author: Junior
'''
import RPi.GPIO as GPIO
from abstractclass.humiditySensor import HumiditySensor
import time

class DHT22Humidity(HumiditySensor):
    '''
    classdocs
    '''
    
    
    def __init__(self):
        '''
        Constructor
        '''
        HumiditySensor.__init__(self)
        self.__data = []
        self.__crc = ""
        self.__humidity = "" 
        self.__temperature = ""
        self.setup()
    
    def setup(self):
        GPIO.setmode(GPIO.BCM)
    
    def __checkValidData(self):
        pass
    
    def getHumidity(self):
        pass

    def __readData(self):
        pass