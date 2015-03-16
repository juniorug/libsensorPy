'''
Created on 16/03/2015

@author: zeus
'''

from abstractclass.abstractSensorFactory import AbstractSensorFactory
from concretesensor.adxl345 import ADXL345

class AccelerometerSensorFactory(AbstractSensorFactory):
    '''
    classdocs
    '''


    def __init__(self):
        '''
        Constructor
        '''
    @staticmethod
    def createSensor(sensorType):
        if (sensorType == "ADXL345"):
            return ADXL345()
        else:
            ''' assert 0, "Bad sensor creation: " + type '''
            ''' retornando dht11 por default, por enquanto'''
            return ADXL345()

    @staticmethod
    def createEvent(sensorType):
        pass
