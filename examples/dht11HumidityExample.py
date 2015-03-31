'''
Created on 16/03/2015

@author: Junior Mascarenhas
'''

from concretefactory.humiditySensorFactory import HumididtySensorFactory

if __name__ == '__main__':

    dht11 = HumididtySensorFactory.createSensor("DHT11Humididty")
    print ("Humidity: " + dht11.getHumidity() + "%")
