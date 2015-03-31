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

    def __init__(self):
        '''
        Constructor
        '''
        Sensor.__init__(self)

    @abc.abstractmethod
    def setup(self):
        pass

    @abc.abstractmethod
    def getAltitude(self,seaLevelPressure):
        ''' Get the altitude value'''
        pass

