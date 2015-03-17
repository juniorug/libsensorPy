'''
Created on 11/02/2015

@author: zeus
'''

from abstractclass.abstractSensorFactory import AbstractSensorFactory
from concretesensor.hcsr04 import HCSR04
from concretesensor.parallaxPing import ParallaxPing
from concretesensor.srf04 import SRF04
from concretesensor.srf05 import SRF05

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
    	elif (sensorType == "ParallaxPing"):
        	return ParallaxPing()
    	elif (sensorType == "SRF04"):
            	return SRF04()
    	elif (sensorType == "SRF05"):
        	return SRF05()
        else:
            	assert 0, "Bad sensor creation: " + sensorType 

    @staticmethod
    def createEvent(sensorType):     
        pass
