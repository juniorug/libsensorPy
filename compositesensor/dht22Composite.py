'''
Created on 18/03/2015

@author: zeus
'''
from abstractclass.humiditySensor import HumiditySensor
from abstractclass.temperatureSensor import TemperatureSensor
from concretesensor.dht22Humidity import DHT22Humidity
from concretesensor.dht22Temperature import DHT22Temperature

class DHT22Composite(TemperatureSensor,HumiditySensor):
    '''
    classdocs
    '''
    
      
    def __init__(self):
        '''
        Constructor
        '''
        TemperatureSensor.__init__(self)
        HumiditySensor.__init__(self)
        self.__dht22Temp = DHT22Temperature()
        self.__dht22Hum = DHT22Humidity()

    def setup(self):
        pass

    def getTemperature(self):
        """Retrieve data from the input source and return an object."""
        return self.__dht22Temp.getTemperature()


    def getTemperatureInFahrenheit(self):
        """Retrieve data from the input source and return an object."""
        return self.__dht22Temp.getTemperatureInFahrenheit()


    def getTemperatureInKelvin(self):
        """Retrieve data from the input source and return an object."""
        return self.__dht22Temp.getTemperatureInKelvin()

    def getHumidity(self):
        """Retrieve data from the input source and return an object."""
        return self.__dht22Hum.getHumidity()

    def add(self,sensor):
        if ( isinstance(sensor, DHT22Temperature)):
            self.__dht22Temp = sensor
        elif ( isinstance(sensor, DHT22Humidity)):
            self.__dht22Hum = sensor
        else:
            assert 0, "Bad sensor creation. "

