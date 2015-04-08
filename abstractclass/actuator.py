'''
Created on 01/04/2015

@author: zeus
'''
import abc
import RPi.GPIO as GPIO

class Actuator(object):
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
        """changes GPIO setup ."""
        pass

    def __del__(self):
        # we're no longer using the GPIO, so tell software we're done
        GPIO.cleanup()