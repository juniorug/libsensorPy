'''
Created on 16/03/2015

@author: Junior Mascarenhas
'''

from concretefactory.humiditySensorFactory import HumididtySensorFactory

if __name__ == '__main__':

    dht22 = HumididtySensorFactory.createSensor("DHT22Humididty")
    print ("Humidity: " + dht22.getHumidity() + "%")
