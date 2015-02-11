'''
Created on 11/02/2015

@author: zeus
'''


from abstractclass.AbstractSensorFactory import AbstractSensorFactory
from abstractclass.ultrasonicSensor  import UltrasonicSensor

class UltrasonicSensorFactory(AbstractSensorFactory):
    '''
    classdocs
    '''


    def __init__(self, params):
        '''
        Constructor
        '''
     
    def createSensor(self, sensorType):
        return UltrasonicSensor.getSensor(sensorType)  
    
    def createEvent(self, sensorType):     
        return 