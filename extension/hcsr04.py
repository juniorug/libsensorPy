'''
Created on 29/03/2015

@author: Junior Mascarenhas
'''
import RPi.GPIO as GPIO
import time
from abstractclass.ultrasonicSensor import UltrasonicSensor

class HCSR04(UltrasonicSensor):
    '''
    classdocs
    '''


    def __init__(self,trigger=18,echo=27):
        '''
        Constructor
        '''
        UltrasonicSensor.__init__(self)
        self.__distance = ""
        self.__trigger = trigger
        self.__echo = echo
        self.setup()
        
    def setup(self):
        GPIO.setmode(GPIO.BCM)
        GPIO.setwarnings(False)

    def changeSetup(self, trigger, echo):
        self.__trigger = trigger
        self.__echo = echo

    def distance_in_cm(self):

        GPIO.setup(self.__trigger,GPIO.OUT)
        GPIO.setup(self.__echo,GPIO.IN)
        GPIO.output(self.__trigger, GPIO.LOW)
        time.sleep(0.3)
        GPIO.output(self.__trigger, True)
        time.sleep(0.00001)
        GPIO.output(self.__trigger, False)

        while (GPIO.input(self.__echo) == 0):
            signaloff = time.time()

        while GPIO.input(self.__echo) == 1:
            signalon = time.time()

        timepassed = signalon - signaloff
        self.__distance = timepassed * 17000
        return self.__distance
