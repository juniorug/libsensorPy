'''
Created on 11/02/2015

@author: zeus
'''

from abstractclass.abstractSensorFactory import AbstractSensorFactory
#from abstractclass.temperatureSensor import TemperatureSensor

class TemperatureSensorFactory(AbstractSensorFactory):
    '''
    classdocs
    '''


    def __init__(self):
        '''
        Constructor
        '''
     
    def createSensor(self, sensorType):
        return TemperatureSensor.getSensor(sensorType)
        
    def createEvent(self, sensorType):     
        pass
