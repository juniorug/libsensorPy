'''
Created on 11/02/2015

@author: zeus
'''

from concreteFactory import TemperatureSensorFactory

'''from concretesensor.dht11 import DHT11'''

if __name__ == '__main__':
    
    dht11 = TemperatureSensorFactory.createSensor("DHT11")            
    print (dht11.getTemperature())