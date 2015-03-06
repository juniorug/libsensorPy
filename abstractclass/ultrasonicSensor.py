'''
Created on 08/02/2015

@author: zeus
'''
import abc
from sensor import Sensor
from concretesensor import HCSR04

class UltrasonicSensor(Sensor):
    '''
    classdocs
    '''
    __metaclass__ = abc.ABCMeta
    
      
    def __init__(self, params):
        '''
        Constructor
        '''
        
    @staticmethod
    def getSensor(self,sensorType):
        #return eval(type + "()")
        if (sensorType == "HCSR04"): 
            return HCSR04()
        else:
            ''' assert 0, "Bad sensor creation: " + type '''
            ''' retornando HCSR04 por default, por enquanto'''    
            return HCSR04()
        
    @abc.abstractmethod
    def measure(self,sensor):
        """Retrieve data from the input source and return an object."""
        return        
        