'''
Created on 01/04/2015

@author: Junior Mascarenhas
'''
import abc
from sensor import Sensor

class LightSensor(Sensor):
    '''
    classdocs
    '''
    __metaclass__ = abc.ABCMeta

    def __init__(self):
        '''
        Constructor
        '''
        Sensor.__init__(self)

    @abc.abstractmethod
    def setup(self):
        pass

    @abc.abstractmethod
    def getLux(self):
        """Return the light in Lux."""
        pass

    @abc.abstractmethod
    def getColorTemperature(self):
        """Return the color temperature in celsius."""
        pass

    def getColorTemperatureInKelvin(self):
        """Return the temperature in Kelvin."""
        return str((float(self.getColorTemperature()) + 273.15))

