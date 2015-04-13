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

    def set_measurement(self):
        """Function used to simulate weather station device and send out new
        data."""
        self.temperature = self._sensor.getTemperature()
        self.notify_observers()


    def getTemperature(self):
        """
        Returns the current temperature
        """
        
        return self.temperature