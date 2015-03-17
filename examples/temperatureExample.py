'''
Created on 11/02/2015

@author: zeus
'''

from concretefactory.temperatureSensorFactory import TemperatureSensorFactory

if __name__ == '__main__':

    dht11 = TemperatureSensorFactory.createSensor("DHT11Temperature")
    print (dht11.getTemperature())