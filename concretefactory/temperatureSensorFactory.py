'''
Created on 11/02/2015

@author: zeus
'''

from abstractclass.abstractSensorFactory import AbstractSensorFactory
from concretesensor.dht11Temperature import DHT11Temperature
from concretesensor.dht22Temperature import DHT22Temperature

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
        if (sensorType == "DHT11Temperature"):
            return DHT11Temperature()
        elif(sensorType == "DHT22"):
            return DHT22Temperature()
        else:
            assert 0, "Bad sensor creation: " + sensorType

    @staticmethod
    def createEvent(sensorType):
        pass
