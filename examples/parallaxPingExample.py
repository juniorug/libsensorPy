'''
Created on 18/03/2015

@author: Junior Mascarenhas
'''

from concretefactory.ultrasonicSensorFactory import UltrasonicSensorFactory

if __name__ == '__main__':

    ping = UltrasonicSensorFactory.createSensor("ParallaxPing")
    print ("Distance in cm:" + ping.distance_in_cm() + " cm")
    print ("Distance in inches:" + ping.distance_in_inches() + " in")


