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
        GPIO.setmode(GPIO.BCM)
    
    def __bin2dec(self,string_num):
        pass
    
    def setup(self):
        pass
    
    def __checkValidData(self):
        pass

    def getTemperature(self):
        pass
            
    def getTemperatureInFahrenheit(self):
        pass
            
    def getTemperatureInKelvin(self):
        pass
            
    def __readData(self):
        pass
        
     
        
        
        
