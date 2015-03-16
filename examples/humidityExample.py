'''
Created on 16/03/2015

@author: zeus
'''

from concretefactory.humiditySensorFactory import HumididtySensorFactory

dht11 = HumididtySensorFactory.createSensor("DHT11Humididty")
print (dht11.getHumidity())
