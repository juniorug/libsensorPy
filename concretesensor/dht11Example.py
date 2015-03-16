'''
Created on 11/02/2015

@author: zeus
'''

from concretesensor.dht11Temperature import DHT11Temperature

if __name__ == '__main__':
    dht11 = DHT11Temperature()
    dht11.getTemperature()
    dht11._getHumidity()