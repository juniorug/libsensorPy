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
        """Setup the GPIO."""
        pass

    @abc.abstractmethod
    def changeSetup(self):
        """Changes GPIO setup ."""
        pass

    def __del__(self):
        """ We're no longer using the GPIO, so tell software we're done."""
        GPIO.cleanup()