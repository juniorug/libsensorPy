'''
Created on 10/02/2015

@author: zeus
'''
import abc
from sensor import Sensor

class HumiditySensor(Sensor):
    '''
    classdocs
    '''
    __metaclass__ = abc.ABCMeta


    def __init__(self):
        '''
        Constructor
        '''
        Sensor.__init__(self)

    @abc.abstractmethod
    def setup(self):
        pass

    @abc.abstractmethod
    def getHumidity(self):
        """Retrieve data from the input source and return an object."""
        pass

    def _bin2dec(self,string_num):
        return str(int(string_num, 2))