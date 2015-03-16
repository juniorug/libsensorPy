'''
Created on 16/03/2015

@author: zeus
'''

from abstractclass.abstractSensorFactory import AbstractSensorFactory
from compositesensor.dht11Composite import DHT11Composite

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
        else:
            ''' assert 0, "Bad sensor creation: " + type '''
            ''' retornando HCSR04 por default, por enquanto'''
            return DHT11Composite()

    @staticmethod
    def createEvent(sensorType):     
        pass