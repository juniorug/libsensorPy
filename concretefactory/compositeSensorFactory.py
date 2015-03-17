'''
Created on 16/03/2015

@author: zeus
'''

from abstractclass.abstractSensorFactory import AbstractSensorFactory
from compositesensor.dht11Composite import DHT11Composite
from compositesensor.lsm303dComposite import LSM303DComposite

class CompositeSensorFactory(AbstractSensorFactory):
    '''
    classdocs
    '''


    def __init__(self):
        '''
        Constructor
        '''
    @staticmethod
    def createSensor(sensorType): 
	if (sensorType == "DHT11Composite"):
            return DHT11Composite()
        elif (sensorType == "LSM303DComposite"):
            return LSM303DComposite()
        else:
            assert 0, "Bad sensor creation: " + sensorType

    @staticmethod
    def createEvent(sensorType):     
        pass