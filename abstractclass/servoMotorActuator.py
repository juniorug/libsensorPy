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
        pass

    @abc.abstractmethod
    def setAngle(self,angle = 2.5):
        pass
