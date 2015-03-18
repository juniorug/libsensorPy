'''
Created on 18/03/2015

@author: zeus
'''

from concretefactory.ultrasonicSensorFactory import UltrasonicSensorFactory

if __name__ == '__main__':

    srf05 = UltrasonicSensorFactory.createSensor("SRF05")
    print ("Distance in cm:" + srf05.distance_in_cm() + " cm")
    print ("Distance in inches:" + srf05.distance_in_inches() + " in")

