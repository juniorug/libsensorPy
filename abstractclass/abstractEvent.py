'''
Created on 01/04/2015

@author: Junior Mascarenhas
'''
import abc

class AbstractEvent(object):
    '''
    classdocs
    '''
    __metaclass__ = abc.ABCMeta

    def __init__(self,sensor):
        '''
        Constructor
        '''
        self._sensor = sensor
        
    @abc.abstractmethod
    def attach(self,observer):
        """Registers an observer with Subject."""
        pass

    @abc.abstractmethod
    def detach(self,observer):
        """Removes an observer from Subject."""
        pass

    @abc.abstractmethod
    def notify_observers(self):
        """Notifies observers that Subject data has changed."""
        pass
