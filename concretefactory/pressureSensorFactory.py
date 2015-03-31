'''
Created on 17/03/2015

@author: Junior Mascarenhas
'''

from abstractclass.abstractSensorFactory import AbstractSensorFactory
from concretesensor.bmp085Pressure import BMP085Pressure

class PressureSensorFactory(AbstractSensorFactory):
    '''
    classdocs
    '''

    def __init__(self):
        '''
        Constructor
        '''
    @staticmethod
    def createSensor(sensorType):
        if (sensorType == "BMP085Pressure"):
            return BMP085Pressure()
        else:
            assert 0, "Bad sensor creation: " + sensorType

    @staticmethod
    def createEvent(sensorType):
        pass

