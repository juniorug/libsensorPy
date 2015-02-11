'''
Created on 11/02/2015

@author: zeus
'''

from concreteFactory.TemperatureSensorFactory import TemperatureSensorFactory 
'''from concretesensor.DHT11 import DHT11'''

if __name__ == '__main__':
    
    dht11 = TemperatureSensorFactory.createSensor("DHT11")            
    print (dht11.getTemperature())