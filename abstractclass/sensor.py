'''
Created on 10/02/2015

@author: zeus
'''
import abc

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
