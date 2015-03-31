'''
Created on 08/02/2015

@author: Junior Mascarenhas
'''
import abc
from abstractclass.sensor import Sensor

class UltrasonicSensor(Sensor):
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
    def distance_in_cm(sensor):
        """Return the distance in cm."""
        pass

    def distance_in_inches(self):
        """Return the distance in inches."""
        return (self.distance_in_cm() * 0.3937)

    def _bin2dec(self,string_num):
        return str(int(string_num, 2))