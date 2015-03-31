'''
Created on 16/03/2015

@author: Junior Mascarenhas
'''
import abc
from sensor import Sensor

class MagnetometerSensor(Sensor):

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
    def getMagnetic(self):
        """Retrieve data from the input source and return an object."""
        pass
