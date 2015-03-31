'''
Created on 11/02/2015

@author: Junior Mascarenhas
'''

from extendedUltrasonicSensorFactory import ExtendedUltrasonicSensorFactory

if __name__ == '__main__':

    hcsr04 = ExtendedUltrasonicSensorFactory.createSensor("HCSR04")
    print ("Distance in cm: " + str(hcsr04.distance_in_cm()) + " cm")
    print ("Distance in inches: " + str(hcsr04.distance_in_inches()) + " in")










