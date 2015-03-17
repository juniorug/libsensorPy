'''
Created on 10/02/2015

@author: zeus
'''
import abc
import RPi.GPIO as GPIO

class Sensor(object):
    '''
    classdocs
    '''
    __metaclass__ = abc.ABCMeta

    def __init__(self):
        '''
        Constructor
        '''
     
    @abc.abstractmethod
    def setup(self):
        """Retrieve data from the input source and return an object."""
        pass   

    def __del__(self):
        # we're no longer using the GPIO, so tell software we're done
        print("sensor work finished!")
        GPIO.cleanup()