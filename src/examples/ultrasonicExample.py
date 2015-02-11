'''
Created on 11/02/2015

@author: zeus
'''

from abstractclass.AbstractSensorFactory import AbstractSensorFactory 
from concretesensor.HCSR04 import HCSR04

if __name__ == '__main__':
    
    hcsr04 = AbstractSensorFactory("distance","HCSR04")            
    print (hcsr04.measure(0))