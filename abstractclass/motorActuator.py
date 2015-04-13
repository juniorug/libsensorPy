'''
Created on 01/04/2015

@author: Junior Mascarenhas
'''
import abc
from actuator import Actuator

class MotorActuator(Actuator):
    '''
    classdocs
    '''
    __metaclass__ = abc.ABCMeta

    def __init__(self):
        '''
        Constructor
        '''
        Actuator.__init__(self)

    @abc.abstractmethod
    def setup(self):
        pass

    @abc.abstractmethod
    def rotate(self):
        """Rotate the motor."""
        pass

    @abc.abstractmethod
    def setDirection(self):
        """Sets the rotaction direction."""
        pass
