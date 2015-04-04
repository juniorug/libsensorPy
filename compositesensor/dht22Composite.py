'''
Created on 18/03/2015

@author: Junior Mascarenhas
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
        """Setup the GPIO."""
        self.__dht22Temp.setup()

    def changeSetup(self,pin):
        """changes GPIO setup ."""
        self.__dht22Temp.changeSetup(self,pin)

    def getTemperature(self):
        """"Return the temperature in Celsius measured from the sensor."""
        return self.__dht122Temp.getTemperature()

    def getTemperatureInFahrenheit(self):
        """Return the temperature in Fahrenheit measured from the sensor."""
        return self.__dht22Temp.getTemperatureInFahrenheit()

    def getTemperatureInKelvin(self):
        """Return the temperature in Kelvin measured from the sensor."""
        return self.__dht22Temp.getTemperatureInKelvin()

    def getHumidity(self):
        """Return the humidity measured from the sensor."""
        return self.__dht22Hum.getHumidity()

    def add(self,sensor):
        if ( isinstance(sensor, DHT22Temperature)):
            self.__dht22Temp = sensor
        elif ( isinstance(sensor, DHT22Humidity)):
            self.__dht22Hum = sensor
        else:
            assert 0, "Bad sensor creation. "

