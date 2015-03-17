'''
Created on 16/03/2015

@author: zeus
'''

from abstractclass.abstractSensorFactory import AbstractSensorFactory
from concretesensor.adxl345 import ADXL345
from concretesensor.lsm303dAccelerometer import LSM303DAccelerometer

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
        elif (sensorType == "LSM303DAccelerometer"):
            return LSM303DAccelerometer()
        else:
            assert 0, "Bad sensor creation: " + sensorType

    @staticmethod
    def createEvent(sensorType):
        pass
