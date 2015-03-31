'''
Created on 10/02/2015

@author: Junior Mascarenhas
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
        Sensor.__init__(self)

    @abc.abstractmethod
    def setup(self):
        pass
            
    @abc.abstractmethod
    def getTemperature(self):
        """Return the temperature in Celsius."""
        pass

    def getTemperatureInFahrenheit(self):
        """Return the temperature in Fahrenheit."""
        return str((float(self.getTemperature()) * 9 /5.0 ) + 32)

    def getTemperatureInKelvin(self):
        """Return the temperature in Kelvin."""
        return str((float(self.getTemperature()) + 273.15))

    def _bin2dec(self,string_num):
        return str(int(string_num, 2))