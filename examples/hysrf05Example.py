'''
Created on 11/02/2015

@author: Junior Mascarenhas
'''

from concretefactory.ultrasonicSensorFactory import UltrasonicSensorFactory

if __name__ == '__main__':

    hysrf05 = UltrasonicSensorFactory.createSensor("HYSRF05")
    print ("Distance in cm: " + str(hysrf05.distance_in_cm()) + " cm")
    print ("Distance in inches: " + str(hysrf05.distance_in_inches()) + " in")

