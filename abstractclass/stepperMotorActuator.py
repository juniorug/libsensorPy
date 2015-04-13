'''
Created on 01/04/2015

@author: Junior Mascarenhas
'''
import abc
from motorActuator import MotorActuator

class StepperMotorActuator(MotorActuator):
    '''
    classdocs
    '''
    __metaclass__ = abc.ABCMeta

    def __init__(self):
        '''
        Constructor
        '''
        MotorActuator.__init__(self)

    @abc.abstractmethod
    def setStepSequence(self, stepSequence = 8):
        """
        Sets the sequence: 4 or 8 steps
        @param stepSequence: The step sequence
        @type stepSequence: int8
        """
        pass

    @abc.abstractmethod
    def setDirectionAndVelocity(self,stepDir = 2):
        """ Sets the rotation's direction and velocity
        @param stepDir: 1 = clockwise, 2 = fast-clockwise, -1 = anti-clockwise,-2 = fast-anti-clockwise  
        @type direction: int8
        """
        pass
