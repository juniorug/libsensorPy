'''
Created on 16/03/2015

@author: Junior Mascarenhas
'''

from abstractclass.abstractSensorFactory import AbstractSensorFactory
from compositesensor.dht11Composite import DHT11Composite
from compositesensor.lsm303dComposite import LSM303DComposite
from  compositesensor.bmp085Composite import BMP085Composite

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
        elif (sensorType == "BMP085Composite"):
            return BMP085Composite()
        else:
            assert 0, "Bad sensor creation: " + sensorType

    @staticmethod
    def createEvent(sensorType):     
        pass