'''
Created on 01/04/2015

@author: Junior Mascarenhas
'''
from abstractclass.eventObserver import EventObserver

class CurrentConditionDisplay(EventObserver):
    """Returns the current temperature and humidity."""

    def __init__(self,temperatureEvent):
        EventObserver.__init__(self)
        self.temperatureEvent = temperatureEvent
        self.current_temperature = self.temperatureEvent.getTemperature()


    def update(self):
        self.last_temperature = self.current_temperature
        self.current_temperature = self.temperatureEvent.getTemperature()
        self.display()

    def display(self):
        print "Current conditions: %.1f F degrees " %(self.current_temperature)
