'''
Created on 01/04/2015

@author: Junior Mascarenhas
'''
from abstractclass.abstractEvent import AbstractEvent

class TemperatureEvent(AbstractEvent):

    def __init__(self,sensor):
        AbstractEvent.__init__(self,sensor)
        self._observer_list = []
        self.set_measurement()

    def attach(self, observer):
        """Registers an observer with temperatureSensor if the observer is not
        already registered."""
        try:
            if observer not in self._observer_list:
                self._observer_list.append(observer)
                observer.register_event(self)
            else:
                raise ValueError
        except ValueError:
            print "ERROR: Observer already subscribed to this event!"
            raise ValueError

    def detach(self, observer):
        """Removes an observer from WeatherData if the observer is currently
        subscribed to WeatherData."""
        try:
            if observer in self._observer_list:
                observer.remove_event()
                self._observer_list.remove(observer)
            else:
                raise ValueError
        except ValueError:
            print "ERROR: Observer currently not subscribed to Subject!"
            raise ValueError

    def notify_observers(self):
        """Notifies subscribed observers of change in WeatherData data."""
        for observer in self._observer_list:
            observer.update()

    def set_measurement(self):
        """Function used to simulate weather station device and send out new
        data."""
        self.temperature = self._sensor.getTemperature()
        self.notify_observers()


    def getTemperature(self):
        return self.temperature