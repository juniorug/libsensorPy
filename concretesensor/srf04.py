'''
Created on 17/03/2015

@author: Junior
'''
import RPi.GPIO as GPIO
import serial
import time
from abstractclass.ultrasonicSensor import UltrasonicSensor

class SRF04(UltrasonicSensor):
    '''
    classdocs
    '''

    def __init__(self,trigger=3,echo=2):
        '''
        Constructor
        '''
        UltrasonicSensor.__init__(self)
        self.__distance = ""
        self.trigger = trigger
        self.echo = echo
        self.setup()

    def setup(self):
        GPIO.setmode(GPIO.BCM)
        GPIO.setwarnings(False)
        GPIO.setup(self.trigger,GPIO.OUT)
        GPIO.setup(self.echo,GPIO.IN)
        try:
            ser = serial.Serial('/dev/ttyAMA0', 9600, timeout=1)
            ser.open()
        except:
            print "no device connected"
            exit(0)

    def measure(self):

        GPIO.output(self.trigger, GPIO.HIGH)
        time.sleep(0.00001)
        GPIO.output(self.trigger, GPIO.LOW)

        # read the incoming pulse
        GPIO.setup(self.echo, GPIO.IN,pull_up_down=GPIO.PUD_UP)
        while (GPIO.input(self.echo) == 0):
            signaloff = time.time()
        while (GPIO.input(self.echo) == 1):
            signalon = time.time()

        self.__distance = (signalon - signaloff) * 17000
        # return the distance of an object in front of the sensor in cm
        return self.__distance

































