'''
Created on 18/03/2015

@author: Junior Mascarenhas
'''

from concretefactory.ultrasonicSensorFactory import UltrasonicSensorFactory

if __name__ == '__main__':

    urm37 = UltrasonicSensorFactory.createSensor("URM37")
    print ("Distance in cm:" + urm37.distance_in_cm() + " cm")
    print ("Distance in inches:" + urm37.distance_in_inches() + " in")
