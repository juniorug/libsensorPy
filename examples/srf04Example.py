'''
Created on 18/03/2015

@author: Junior Mascarenhas
'''

from concretefactory.ultrasonicSensorFactory import UltrasonicSensorFactory

if __name__ == '__main__':

    srf04 = UltrasonicSensorFactory.createSensor("SRF04")
    print ("Distance in cm:" + srf04.distance_in_cm() + " cm")
    print ("Distance in inches:" + srf04.distance_in_inches() + " in")

