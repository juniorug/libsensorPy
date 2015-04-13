'''
Created on 11/02/2015

@author: Junior Mascarenhas
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
        """Retrieve data from the input source and return a Sensor object.
        @param sensorType: The kind of sensor to be created
        @type sensorType: String
        """
        pass
    
    @abc.abstractmethod
    def createEvent(sensorType):
        """Retrieve data from the input source and return an Event object.
        @param sensorType: The kind of sensor to be used by the event
        @type sensorType: String
        """
        pass     
