'''
Created on 16/03/2015

@author: Junior Mascarenhas
'''

import RPi.GPIO as GPIO
import time
from abstractclass.motionSensor import MotionSensor
class PIR(MotionSensor):
    '''
    classdocs
    '''

    def __init__(self, pin=7):
        '''
        Constructor
        '''
        MotionSensor.__init__(self)
        self.__pin = pin
        self.setup()

    def setup(self):
        GPIO.setmode(GPIO.BCM)
        # Disable any warning message such as GPIO pins in use
        GPIO.setwarnings(False)
        GPIO.setup(self.__pin,GPIO.IN)      # Echo

    def changeSetup(self, pin):
        self.__pin = pin

    def isMotionDetected(self):
        return (GPIO.input(self.pin) == 1)


