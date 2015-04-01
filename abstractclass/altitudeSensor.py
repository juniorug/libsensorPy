'''
Created on 17/03/2015

@author: Junior Mascarenhas
'''
import abc
from sensor import Sensor

class AltitudeSensor(Sensor):
    '''
    classdocs
    '''
    __metaclass__ = abc.ABCMeta
    _SEA_LEVEL_PRESSURE = 101325  # sea level pressure in kPa

    def __init__(self):
        '''
        Constructor
        '''
        Sensor.__init__(self)

    @abc.abstractmethod
    def setup(self):
        pass

    @abc.abstractmethod
    def getAltitude(self):
        ''' Get the altitude value in meters'''
        pass

    def getAltitudeInCm(self):
        ''' Get the altitude value in centimeters'''
        return self.getAltitude() * 100
