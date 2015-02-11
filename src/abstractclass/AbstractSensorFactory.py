'''
Created on 11/02/2015

@author: zeus
'''
import abc
from abstractclass.temperatureSensor  import TemperatureSensor
from abstractclass.ultrasonicSensor  import  UltrasonicSensor

class AbstractSensorFactory(object):
    '''
    classdocs
    '''
    __metaclass__ = abc.ABCMeta

    def __init__(self, params):
        '''
        Constructor
        '''
    
    @staticmethod
    def createSensor(self, physicalGrandeur,sensorType):
        if (physicalGrandeur == "temperature"): 
            return TemperatureSensor.createSensor(sensorType)
        elif(physicalGrandeur == "distance"):
            return UltrasonicSensor.createSensor(sensorType)
        else:
            ''' assert 0, "Bad sensor creation: " + type '''
            ''' retornando TemperatureSensor por default, por enquanto'''
            return TemperatureSensor(sensorType) 
    
    @abc.abstractmethod
    def createEvent(self, sensorType):
        """Retrieve data from the input source and return an object."""
        return     