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

    def __init__(self):
        '''
        Constructor
        '''
        
    @abc.abstractmethod
    def createSensor(sensorType):
        """Retrieve data from the input source and return an object."""
        pass
    
    @abc.abstractmethod
    def createEvent(sensorType):
        """Retrieve data from the input source and return an object."""
        pass     
