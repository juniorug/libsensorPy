'''
Created on 11/02/2015

@author: zeus
'''

from concretefactory.ultrasonicSensorFactory import UltrasonicSensorFactory

if __name__ == '__main__':

    hcsr04 = UltrasonicSensorFactory.createSensor("HCSR04")
    print ("Distance in cm:" + hcsr04.distance_in_cm() + " cm")
    print ("Distance in inches:" + hcsr04.distance_in_inches() + " in")

