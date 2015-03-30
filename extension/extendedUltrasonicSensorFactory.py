'''
Created on 29/03/2015

@author: zeus
'''

from abstractclass.abstractSensorFactory import AbstractSensorFactory
from concretefactory.ultrasonicSensorFactory import UltrasonicSensorFactory
from hcsr04 import HCSR04

class ExtendedUltrasonicSensorFactory(UltrasonicSensorFactory):
    '''
    classdocs
    '''

    def __init__(self):
        '''
        Constructor
        '''
    @staticmethod
    def createSensor(sensorType):
        if (sensorType == "HCSR04"):
                return HCSR04()
        else:
                return super(sensorType)









