'''
Created on 10/02/2015

@author: zeus
'''
import abc
from abstractclass import Sensor
from concretesensor import DHT11

class TemperatureSensor(Sensor):
    '''
    classdocs
    '''
    __metaclass__ = abc.ABCMeta

    def __init__(self, params):
        '''
        Constructor
        '''
        
    @staticmethod
    def getSensor(self,sensorType):
        #return eval(type + "()")
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
        return    
    
    @abc.abstractmethod
    def getTemperatureInFahrenheit(self):
        """Retrieve data from the input source and return an object."""
        return 
    
    @abc.abstractmethod
    def getTemperatureInKelvin(self):
        """Retrieve data from the input source and return an object."""
        return