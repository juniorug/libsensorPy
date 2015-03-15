'''
Created on 11/02/2015

@author: zeus
'''

from abstractclass.abstractSensorFactory import AbstractSensorFactory
from abstractclass.ultrasonicSensor import UltrasonicSensor
from concretesensor.hcsr04 import HCSR04

class UltrasonicSensorFactory(AbstractSensorFactory):
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
            ''' assert 0, "Bad sensor creation: " + type '''
            ''' retornando HCSR04 por default, por enquanto'''
            return HCSR04()
    
    def createEvent(sensorType):     
        pass
