'''
Created on 16/03/2015

@author: zeus
'''

from abstractclass.abstractSensorFactory import AbstractSensorFactory
from concretesensor.dht11Humidity import DHT11Humididty

class HumididtySensorFactory(AbstractSensorFactory):
    '''
    classdocs
    '''


    def __init__(self):
        '''
        Constructor
        '''
    @staticmethod
    def createSensor(sensorType):
        if (sensorType == "DHT11Humididty"):
            return DHT11Humididty()
        else:
            ''' assert 0, "Bad sensor creation: " + type '''
            ''' retornando dht11 por default, por enquanto'''
            return DHT11Humididty()

    @staticmethod
    def createEvent(sensorType):
        pass

