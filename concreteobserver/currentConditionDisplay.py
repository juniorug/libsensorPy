'''
Created on 01/04/2015

@author: Junior Mascarenhas
'''
from abstractclass.eventObserver import EventObserver

class CurrentConditionDisplay(EventObserver):
    """Returns the current temperature and humidity."""

    def __init__(self,temperatureEvent):
        """
        @param temperatureEvent: The event to be observed
        @type temperatureEvent: TemperatureEvent
        """
        
        EventObserver.__init__(self,temperatureEvent)
        self.current_temperature = self._event.getTemperature()

    def update(self):
        """
        Update the observer based on one event.
        """
        
        self.last_temperature = self.current_temperature
        self.current_temperature = self._event.getTemperature()
        self.display()

    def display(self):
        """
        Display the current temperature
        """
        
        print "Current conditions: %.1f F degrees " %(self.current_temperature)
