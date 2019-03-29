'''
Created on 04/02/2015

@author: Junior Mascarenhas
'''
import RPi.GPIO as GPIO
import time
from abstractclass.ultrasonicSensor import UltrasonicSensor

class HYSRF05(UltrasonicSensor):
    '''
    classdocs
    '''

    def __init__(self,trigger=18,echo=27):
        '''
        Constructor
        '''
        UltrasonicSensor.__init__(self)
        self.__trigger = trigger
        self.__echo = echo
        self.setup()
        
    def setup(self):
        """
        Setup the board and GPIO  
        @return: void
        """
        GPIO.setmode(GPIO.BCM)
        GPIO.setwarnings(False) 
        GPIO.setup(self.__trigger,GPIO.OUT)
        GPIO.setup(self.__echo,GPIO.IN)
        self.__distance = ""

    def changeSetup(self, trigger, echo):
        """
        @param trigger: The GPIO pin used to trigger the sensor.
        @param echo: The GPIO pin used to read data from the sensor.
        @return: void
        """
        self.__trigger = trigger
        self.__echo = echo

    def distance_in_cm(self):
        """
        Gets the distance from the sensor.
        @return: The distance in cm.
        @rtype: float
        """
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

        # return the distance of an object in front of the sensor in cm
        return self.__distance

            
            
            
            
