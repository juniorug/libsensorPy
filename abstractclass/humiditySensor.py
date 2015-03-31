'''
Created on 10/02/2015

@author: Junior Mascarenhas
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
        ''' Get the humidity value'''
        pass

    def _bin2dec(self,string_num):
        ''' Convert the value to String'''
        return str(int(string_num, 2))