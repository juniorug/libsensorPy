'''
Created on 10/02/2015

@author: zeus
'''
import abc
from sensor import Sensor

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
        pass
            
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
