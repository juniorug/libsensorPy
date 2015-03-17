'''
Created on 16/03/2015

@author: zeus
'''
from abstractclass.humiditySensor import HumiditySensor
from abstractclass.temperatureSensor import TemperatureSensor
from concretesensor.dht11Humidity import DHT11Humidity
from concretesensor.dht11Temperature import DHT11Temperature

class DHT11Composite(TemperatureSensor,HumiditySensor):
    '''
    classdocs
    '''
    
      
    def __init__(self):
        '''
        Constructor
        '''
        TemperatureSensor.__init__(self)
        HumiditySensor.__init__(self)
        self.__dht11Temp = DHT11Temperature()
        self.__dht11Hum = DHT11Humidity()

    def setup(self):
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
        elif ( isinstance(sensor, DHT11Humidity)):
            self.__dht11Hum = sensor
        else:
            assert 0, "Bad sensor creation. "
