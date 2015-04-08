'''
Created on 11/02/2015

@author: Junior Mascarenhas
'''
import abc

class AbstractActuatorFactory(object):
    '''
    classdocs
    '''
    __metaclass__ = abc.ABCMeta

    def __init__(self):
        '''
        Constructor
        '''

    @abc.abstractmethod
    def createActuator(actuatorType):
        """Retrieve data from the input source and return a actuator object."""
        pass

    @abc.abstractmethod
    def createEvent(actuatorType):
        """Retrieve data from the input source and return an Event object."""
        pass

