'''
Created on 16/03/2015

@author: zeus
'''
import abc
from abstractclass.temperatureSensor import TemperatureSensor
from abstractclass.humiditySensor import HumiditySensor
from concretesensor.dht11Temperature import DHT11Temperature
from concretesensor.dht11Humidity import DHT11Humididty

class DHT11Composite(TemperatureSensor,HumiditySensor):
    '''
    classdocs
    '''
    __metaclass__ = abc.ABCMeta
    
      
    def __init__(self):
        '''
        Constructor
        '''
        TemperatureSensor.__init__(self)
        HumiditySensor.__init__(self)
        self.__dht11Temp = DHT11Temperature()
        self.__dht11Hum = DHT11Humididty()
        
    @staticmethod
    def getSensor(sensorType):
        pass

    def getTemperature(self):
        """Retrieve data from the input source and return an object."""
        return self.__dht11Temp.getTemperature()


    def getTemperatureInFahrenheit(self):
        """Retrieve data from the input source and return an object."""
        return self.__dht11Temp.getTemperatureInFahrenheit()


    def getTemperatureInKelvin(self):
        """Retrieve data from the input source and return an object."""
        return self.__dht11Temp.getTemperatureInKelvin()

    def getHumidity(self):
        """Retrieve data from the input source and return an object."""
        return self.__dht11Hum.getHumidity()

    def add(self,sensor):
        if ( isinstance(sensor, DHT11Temperature)):
            self.__dht11Temp = sensor
        elif ( isinstance(sensor, DHT11Humididty)):
            self.__dht11Hum = sensor
        else:
            assert 0, "Bad sensor creation. "
