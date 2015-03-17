'''
Created on 16/03/2015

@author: Junior
'''
import RPi.GPIO as GPIO
from abstractclass.temperatureSensor import TemperatureSensor
import time

class DHT22Temperature(TemperatureSensor):
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
        self.setup()

    def setup(self):
        GPIO.setmode(GPIO.BCM)
    
    def __checkValidData(self):
        pass

    def getTemperature(self):
        pass

    def __readData(self):
        pass
        
     
        
        
        
