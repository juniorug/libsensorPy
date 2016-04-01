'''
Created on 16/03/2015

@author: Junior Mascarenhas
'''

from concretefactory.humiditySensorFactory import HumiditySensorFactory

if __name__ == '__main__':

    dht11 = HumiditySensorFactory.createSensor("DHT11Humidity")
    print ("Humidity: " + dht11.getHumidity() + "%")
