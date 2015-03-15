'''
Created on 11/02/2015

@author: zeus
'''

from abstractclass.abstractSensorFactory import AbstractSensorFactory
from concretesensor.dht11 import DHT11

class TemperatureSensorFactory(AbstractSensorFactory):
    '''
    classdocs
    '''


    def __init__(self):
        '''
        Constructor
        '''
    @staticmethod
    def createSensor(sensorType):
        if (sensorType == "DHT11"):
            return DHT11()
        elif(sensorType == "DHT22"):
            return DHT11()
        else:
            ''' assert 0, "Bad sensor creation: " + type '''
            ''' retornando dht11 por default, por enquanto'''
            return DHT11()

    @staticmethod
    def createEvent(sensorType):
        pass
