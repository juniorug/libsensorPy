'''
Created on 18/03/2015

@author: zeus
'''

from concretefactory.motionSensorFactory import MotionSensorFactory
import time

if __name__ == '__main__':

    pir = MotionSensorFactory.createSensor("PIR")
    while (True):
        if (pir.isMotionDetected() == True):
            print ("Motion Detected:")
        # Wait for 10 milliseconds
        time.sleep(0.01)