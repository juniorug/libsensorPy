'''
Created on 10/02/2015

@author: zeus
'''
import abc
from sensor import Sensor
from concretesensor.dht11 import DHT11

class TemperatureSensor(Sensor):
    '''
    classdocs
    '''
    __metaclass__ = abc.ABCMeta


    def __init__(self):
        '''
        Constructor
        '''
        
    @staticmethod
    def getSensor(sensorType):
        if (sensorType == "DHT11"): 
            return DHT11()
        elif(sensorType == "DHT22"):
            return DHT11()
        else:
            ''' assert 0, "Bad sensor creation: " + type '''
            ''' retornando dht11 por default, por enquanto'''
            return DHT11()
            
    @abc.abstractmethod
    def getTemperature(self):
        """Retrieve data from the input source and return an object."""
        pass
    
    @abc.abstractmethod
    def getTemperatureInFahrenheit(self):
        """Retrieve data from the input source and return an object."""
        pass
    
    @abc.abstractmethod
    def getTemperatureInKelvin(self):
        """Retrieve data from the input source and return an object."""
        pass
