'''
Created on 18/03/2015

@author: zeus
'''

from concretefactory.ultrasonicSensorFactory import UltrasonicSensorFactory

if __name__ == '__main__':

    srf04 = UltrasonicSensorFactory.createSensor("SRF04")
    print (srf04.measure())

