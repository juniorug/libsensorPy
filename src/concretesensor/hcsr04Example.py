'''
Created on 11/02/2015

@author: zeus
'''
from concretesensor.HCSR04 import HCSR04

if __name__ == '__main__':
    HCSR04 = HCSR04()            
    print (HCSR04.measure(0))