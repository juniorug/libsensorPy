'''
Created on 17/03/2015

@author: Junior Mascarenhas
'''
import RPi.GPIO as GPIO
import serial
import time
from abstractclass.ultrasonicSensor import UltrasonicSensor

class SRF04(UltrasonicSensor):
    '''
    classdocs
    '''

    def __init__(self, trigger = 18, echo = 27):
        '''
        Constructor
        '''
        UltrasonicSensor.__init__(self)
        self.__trigger = trigger
        self.__echo = echo
        self.setup()

    def setup(self):
        GPIO.setmode(GPIO.BCM)
        GPIO.setwarnings(False)
        GPIO.setup(self.__trigger,GPIO.OUT)
        GPIO.setup(self.__echo,GPIO.IN)
        self.__distance = ""
        try:
            ser = serial.Serial('/dev/ttyAMA0', 9600, timeout=1)
            ser.open()
        except:
            print "no device connected"
            exit(0)

    def changeSetup(self, trigger, echo):
        self.__trigger = trigger
        self.__echo = echo

    def distance_in_cm(self):

        GPIO.output(self.__trigger, GPIO.HIGH)
        time.sleep(0.00001)
        GPIO.output(self.__trigger, GPIO.LOW)

        GPIO.setup(self.__echo, GPIO.IN,pull_up_down=GPIO.PUD_UP)
        while (GPIO.input(self.__echo) == 0):
            signaloff = time.time()
        while (GPIO.input(self.__echo) == 1):
            signalon = time.time()

        self.__distance = (signalon - signaloff) * 17000
        # return the distance of an object in front of the sensor in cm
        return self.__distance

































