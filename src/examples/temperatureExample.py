'''
Created on 11/02/2015

@author: zeus
'''

from abstractclass.AbstractSensorFactory import AbstractSensorFactory 
'''from concretesensor.DHT11 import DHT11'''

if __name__ == '__main__':
    
    dht11 = AbstractSensorFactory("temperature","DHT11")            
    print (dht11.getTemperature())