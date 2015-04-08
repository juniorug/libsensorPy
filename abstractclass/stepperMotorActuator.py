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
        pass

    @abc.abstractmethod
    def setDirectionAndVelocity(self,stepDir = 2):
        pass
