'''
Created on 11/02/2015

@author: Junior Mascarenhas
'''
import abc

class SensorObserver(object):
    '''
    classdocs
    '''
    __metaclass__ = abc.ABCMeta

    def __init__(self,sensor):
        '''
        Constructor
        '''
        self.__sensor = sensor

    @abc.abstractmethod
    def update(self):
        pass
