'''
Created on 16/03/2015

@author: Junior Mascarenhas
'''

from abstractclass.abstractSensorFactory import AbstractSensorFactory
from concretesensor.dht11Humidity import DHT11Humidity
from concretesensor.dht22Humidity import DHT22Humidity

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
            return DHT11Humidity()
        elif (sensorType == "DHT22Humididty"):
            return DHT22Humidity()
        else:
            assert 0, "Bad sensor creation: " + sensorType

    @staticmethod
    def createEvent(sensorType):
        pass