'''
Created on 11/02/2015

@author: zeus
'''
import abc

class AbstractSensorFactory(object):
    '''
    classdocs
    '''
    __metaclass__ = abc.ABCMeta

    def __init__(self, params):
        '''
        Constructor
        '''
        
    @abc.abstractmethod
    def createSensor(self, sensorType):
        """Retrieve data from the input source and return an object."""
        pass
    
    @abc.abstractmethod
    def createEvent(self, sensorType):
        """Retrieve data from the input source and return an object."""
        pass     
