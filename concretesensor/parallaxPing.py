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
    signal = 8
    pulseduration = 0

    def __init__(self,signal=8):
        '''
        Constructor
        '''
        UltrasonicSensor.__init__(self)
        self.__distance = ""
        self.signal = signal
        self.setup()

    def setup(self):
        GPIO.setmode(GPIO.BCM)
        GPIO.setwarnings(False)
        GPIO.setup(self.signal,GPIO.OUT)
        ser = serial.Serial('/dev/ttyAMA0', 9600, timeout=1)
        ser.open()

    def measure(self):

        #set pin as output so we can send a pulse
        GPIO.setup(self.signal,GPIO.OUT)
        # set output to HIGH
        GPIO.output(self.signal,GPIO.HIGH)
        #delayMicroseconds(5);
        time.sleep(5/1000000.0)
        GPIO.output(self.signal,GPIO.LOW)
        #delayMicroseconds(5);
        time.sleep(5/1000000.0)

        # now send the 5uS pulse out to activate Ping)))
        GPIO.output(self.signal,GPIO.HIGH)
        time.sleep(5/1000000.0)
        GPIO.output(self.signal,GPIO.LOW)

        # now we need to change the digital pin
        # to input to read the incoming pulse
        GPIO.setup(self.signal,pull_up_down=GPIO.PUD_UP)

        #finally, measure the length of the incoming pulse
        GPIO.setup(25, GPIO.IN,pull_up_down=GPIO.PUD_UP)
        while (GPIO.input(self.signal) == 0):
            signaloff = time.time()
        while (GPIO.input(self.signal) == 1):
            signalon = time.time()

        self.__distance = (signalon - signaloff) * 17000
        # return the distance of an object in front of the sensor in cm
        return self.__distance

        # we're no longer using the GPIO, so tell software we're done
        GPIO.cleanup()































