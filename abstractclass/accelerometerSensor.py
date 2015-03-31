'''
Created on 16/03/2015

@author: Junior Mascarenhas
'''
import abc
from sensor import Sensor

class AccelerometerSensor(Sensor):
    '''
    classdocs
    '''
    __metaclass__ = abc.ABCMeta

    EARTH_GRAVITY_MS2 = 9.80665

    def __init__(self):
        '''
        Constructor
        '''
        Sensor.__init__(self)

    @abc.abstractmethod
    def setup(self):
        pass

    @abc.abstractmethod
    def getAxes(self):
        ''' Get the axes value in G'''
        pass

    def getAxesInMS2(self):
        ''' Get the axes value in m/s2'''
        x = self.getAxes(False)['x'] * self.EARTH_GRAVITY_MS2
        y = self.getAxes(False)['y'] * self.EARTH_GRAVITY_MS2
        z = self.getAxes(False)['z'] * self.EARTH_GRAVITY_MS2
        return {"x": x, "y": y, "z": z}
