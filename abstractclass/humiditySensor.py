'''
Created on 10/02/2015

@author: zeus
'''
import abc
from sensor import Sensor

class HumiditySensor(Sensor):
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
    def getHumidity(self):
        """Retrieve data from the input source and return an object."""
        pass

