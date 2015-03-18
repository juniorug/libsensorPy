'''
Created on 16/03/2015

@author: zeus
'''

from abstractclass.abstractSensorFactory import AbstractSensorFactory
from concretesensor.lsm303dMagnetometer import LSM303DMagnetometer
from concretesensor.hmc5883l import HMC5883L

class MagnetometerSensorFactory(AbstractSensorFactory):
    '''
    classdocs
    '''


    def __init__(self):
        '''
        Constructor
        '''

    @staticmethod
    def createSensor(sensorType):
        if (sensorType == "LSM303DMagnetometer"):
            return LSM303DMagnetometer()
        elif (sensorType == "HMC5883L"):
            return HMC5883L()
        else:
            assert 0, "Bad sensor creation: " + sensorType

    @staticmethod
    def createEvent(sensorType):
        pass
