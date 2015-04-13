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
        """
        Setup the board and GPIO  
        @return: void
        """
        GPIO.setmode(GPIO.BCM)
        # Disable any warning message such as GPIO pins in use
        GPIO.setwarnings(False)
        GPIO.setup(self.__pin,GPIO.IN)      # Echo

    def changeSetup(self, pin):
        """
        @param pin: the GPIO pin used to wire the sensor.
        @return: void
        """
        self.__pin = pin

    def isMotionDetected(self):
        """
        Return if motion is detected or not
        @return: Motion detected = 1, not detected = 0
        @rtype: Boolean
        """
        
        return (GPIO.input(self.pin) == 1)


