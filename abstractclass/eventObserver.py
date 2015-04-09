'''
Created on 11/02/2015

@author: Junior Mascarenhas
'''
import abc

class EventObserver(object):
    '''
    classdocs
    '''
    __metaclass__ = abc.ABCMeta

    def __init__(self,event):
        '''
        Constructor
        '''
        self.__event = event

    @abc.abstractmethod
    def update(self):
        pass

    def register_event(self, event):
        """Observer saves reference to Subject."""
        self.__event = event

    def remove_event(self):
        """Observer replaces Subject reference to None."""
        self.__event  = None
