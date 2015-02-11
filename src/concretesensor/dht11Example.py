'''
Created on 11/02/2015

@author: zeus
'''

from concretesensor.DHT11 import DHT11

if __name__ == '__main__':
    dht11 = DHT11()
    dht11.getTemperature()
    dht11.getHumidity() 