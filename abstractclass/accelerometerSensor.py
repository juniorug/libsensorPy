'''
Created on 10/02/2015

@author: zeus
'''
import abc
from sensor import Sensor

class AccelerometerSensor(Sensor):
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
    def getAxes(self,gforce = False):
        """Retrieve data from the input source and return an object."""
        pass

    @abc.abstractmethod
    def setSensitivity(self,range_flag):
        """Retrieve data from the input source and return an object."""
        pass


