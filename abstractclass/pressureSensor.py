'''
Created on 17/03/2015

@author: Junior Mascarenhas
'''
import abc
from sensor import Sensor

class PressureSensor(Sensor):
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
    def getPressure(self):
        """Return the pressure in hPa."""
        pass

    def getPressureInPsi(self):
        """Return the pressure in psi."""
        return self.getPressure() * 0.014503773773

    def getPressureInBar(self):
        """Return the pressure in psi."""
        return self.getPressure() * 0.001

    def getPressureInMmhg(self):
        """Return the pressure in psi."""
        return self.getPressure() * 0.7500637554192

    def getPressureInNm2(self):
        """Return the pressure in psi."""
        return self.getPressure() * 100