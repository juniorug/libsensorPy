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
        self._observer_list = []
        
    def attach(self, observer):
        """Registers an observer with temperatureSensor if the observer is not
        already registered."""
        if observer not in self._observer_list:
            self._observer_list.append(observer)
            observer.register_event(self)
        else:
            raise Exception("ERROR: Observer already subscribed to this event!")


    def detach(self, observer):
        """Removes an observer from WeatherData if the observer is currently
        subscribed to WeatherData."""
        if observer in self._observer_list:
            observer.remove_event()
            self._observer_list.remove(observer)
        else:
            raise Exception("ERROR: Observer currently not subscribed to this event!")

    def notify_observers(self):
        """Notifies subscribed observers of change in WeatherData data."""
        for observer in self._observer_list:
            observer.update()
