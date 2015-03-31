'''
Created on 11/02/2015

@author: Junior Mascarenhas
'''

from abstractclass.abstractSensorFactory import AbstractSensorFactory
from concretesensor.hysrf05 import HYSRF05
from concretesensor.parallaxPing import ParallaxPing
from concretesensor.srf04 import SRF04
from concretesensor.srf05 import SRF05
from concretesensor.urm37 import URM37

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
	if (sensorType == "HYSRF05"):
		return HYSRF05()
    	elif (sensorType == "ParallaxPing"):
        	return ParallaxPing()
    	elif (sensorType == "SRF04"):
            	return SRF04()
    	elif (sensorType == "SRF05"):
        	return SRF05()
        elif (sensorType == "URM37"):
            return URM37()
        else:
            	assert 0, "Bad sensor creation: " + sensorType 

    @staticmethod
    def createEvent(sensorType):
        pass
