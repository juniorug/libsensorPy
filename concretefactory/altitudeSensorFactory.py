'''
Created on 17/03/2015

@author: Junior Mascarenhas
'''

from abstractclass.abstractSensorFactory import AbstractSensorFactory
from concretesensor.bmp085Altitude import BMP085Altitude

class AltitudeSensorFactory(AbstractSensorFactory):
    '''
    classdocs
    '''

    def __init__(self):
        '''
        Constructor
        '''
    @staticmethod
    def createSensor(sensorType):
        if (sensorType == "BMP085Altitude"):
            return BMP085Altitude()
        else:
            assert 0, "Bad sensor creation: " + sensorType

    @staticmethod
    def createEvent(sensorType):
        pass
