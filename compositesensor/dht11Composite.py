'''
Created on 16/03/2015

@author: Junior Mascarenhas
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

    def getTemperature(self):
        """"Return the temperature in Celsius measured from the sensor."""
        return self.__dht11Temp.getTemperature()

    def getTemperatureInFahrenheit(self):
        """Return the temperature in Fahrenheit measured from the sensor."""
        return self.__dht11Temp.getTemperatureInFahrenheit()

    def getTemperatureInKelvin(self):
        """Return the temperature in Kelvin measured from the sensor."""
        return self.__dht11Temp.getTemperatureInKelvin()

    def getHumidity(self):
        """Return the humidity measured from the sensor."""
        return self.__dht11Hum.getHumidity()

    def add(self,sensor):
        if ( isinstance(sensor, DHT11Temperature)):
            self.__dht11Temp = sensor
        elif ( isinstance(sensor, DHT11Humidity)):
            self.__dht11Hum = sensor
        else:
            assert 0, "Bad sensor creation. "
