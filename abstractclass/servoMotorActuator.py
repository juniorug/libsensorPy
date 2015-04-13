'''
Created on 01/04/2015

@author: Junior Mascarenhas
'''
import abc
from motorActuator import MotorActuator

class ServoMotorActuator(MotorActuator):
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
    def setDirection(self,stepDir = 2):
        """
        Sets the rotation's direction.
        @param stepDir: The direction
        @type stepDir: int8
        """
        pass

    @abc.abstractmethod
    def setAngle(self,angle = 2.5):
        """
        Sets the angle to be rotated
        @param angle: The angle to be rotated
        @type angle: float
        """
        pass