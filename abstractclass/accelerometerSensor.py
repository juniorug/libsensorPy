'''
Created on 16/03/2015

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
        Sensor.__init__(self)

    @staticmethod
    def getSensor(sensorType):
        pass

    @abc.abstractmethod
    def getAxes(self,gforce = False):
        """Retrieve data from the input source and return an object."""
        pass


