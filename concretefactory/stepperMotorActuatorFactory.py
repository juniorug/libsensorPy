'''
Created on 11/02/2015

@author: Junior Mascarenhas
'''

from abstractclass.abstractActuatorFactory import AbstractActuatorFactory
from concreteactuator.stepper28BJY48 import Stepper28BJY48

class StepperMotorActuatorFactory(AbstractActuatorFactory):
    '''
    classdocs
    '''

    def __init__(self):
        '''
        Constructor
        '''

    @staticmethod
    def createActuator(actuatorType):
        if (actuatorType == "Stepper28BJY48"):
            return Stepper28BJY48()
        else:
            assert 0, "Bad Actuator creation: " + actuatorType

    @staticmethod
    def createEvent(actuatorType):
        pass

