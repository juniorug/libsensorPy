'''
Created on 17/03/2015

@author: Junior
'''
import RPi.GPIO as GPIO
import serial
import time
from abstractclass.ultrasonicSensor import UltrasonicSensor

class ParallaxPing(UltrasonicSensor):
    '''
    classdocs
    '''

    def __init__(self,signal=8):
        '''
        Constructor
        '''
        UltrasonicSensor.__init__(self)
        self.__distance = ""
        self.__signal = signal
        self.setup()

    def setup(self):
        GPIO.setmode(GPIO.BCM)
        GPIO.setwarnings(False)
        GPIO.setup(self.__signal,GPIO.OUT)
        try:
            ser = serial.Serial('/dev/ttyAMA0', 9600, timeout=1)
            ser.open()
        except:
            print "no device connected"
            exit(0)



    def measure(self):

        #set pin as output so we can send a pulse
        GPIO.setup(self.__signal,GPIO.OUT)
        # set output to HIGH
        GPIO.output(self.__signal,GPIO.HIGH)
        #delayMicroseconds(5);
        time.sleep(5/1000000.0)
        GPIO.output(self.__signal,GPIO.LOW)
        #delayMicroseconds(5);
        time.sleep(5/1000000.0)

        # now send the 5uS pulse out to activate Ping)))
        GPIO.output(self.__signal,GPIO.HIGH)
        time.sleep(5/1000000.0)
        GPIO.output(self.__signal,GPIO.LOW)

        # now we need to change the digital pin
        # to input to read the incoming pulse
        GPIO.setup(self.__signal,pull_up_down=GPIO.PUD_UP)

        #finally, measure the length of the incoming pulse
        GPIO.setup(25, GPIO.IN,pull_up_down=GPIO.PUD_UP)
        while (GPIO.input(self.__signal) == 0):
            signaloff = time.time()
        while (GPIO.input(self.__signal) == 1):
            signalon = time.time()

        self.__distance = (signalon - signaloff) * 17000
        # return the distance of an object in front of the sensor in cm
        return self.__distance
































