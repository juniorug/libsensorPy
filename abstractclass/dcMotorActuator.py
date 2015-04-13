'''
Created on 01/04/2015

@author: Junior Mascarenhas
'''
import abc
from motorActuator import MotorActuator

class DCMotorActuator(MotorActuator):
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

    @abc.abstractmethod
    def setDirection(self,direction = 1):
        """ Sets the rotation's direction 
        @param direction: 1 = clockwise, 2 anti-clockwise 
        @type direction: int8
        """
        
        pass

