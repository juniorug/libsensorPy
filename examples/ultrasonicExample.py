'''
Created on 11/02/2015

@author: zeus
'''

from concreteFactory.ultrasonicSensorFactory import UltrasonicSensorFactory

#if __name__ == '__main__':

fty = UltrasonicSensorFactory("q")

hcsr04 = fty.createSensor("HCSR04")
print (hcsr04.measure(0))
