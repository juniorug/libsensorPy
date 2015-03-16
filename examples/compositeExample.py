'''
Created on 16/03/2015

@author: zeus
'''

from concretefactory.compositeSensorFactory import CompositeSensorFactory

#if __name__ == '__main__':


dht11 = CompositeSensorFactory.createSensor("DHT11Composite")
print (dht11.getTemperature())
print (dht11.getTemperatureInFahrenheit())
print (dht11.getTemperatureInKelvin())
print (dht11.getHumidity())