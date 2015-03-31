'''
Created on 18/03/2015

@author: Junior Mascarenhas
'''

from abstractclass.abstractSensorFactory import AbstractSensorFactory
from concretesensor.pir import PIR

class MotionSensorFactory(AbstractSensorFactory):
    '''
    classdocs
    '''

    def __init__(self):
        '''
        Constructor
        '''

    @staticmethod
    def createSensor(sensorType):
        if (sensorType == "PIR"):
            return PIR()
        else:
            assert 0, "Bad sensor creation: " + sensorType

    @staticmethod
    def createEvent(sensorType):
        pass
