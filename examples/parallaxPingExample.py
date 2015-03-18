'''
Created on 18/03/2015

@author: zeus
'''

from concretefactory.ultrasonicSensorFactory import UltrasonicSensorFactory

if __name__ == '__main__':

    ping = UltrasonicSensorFactory.createSensor("ParallaxPing")
    print (ping.measure())


