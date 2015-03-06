'''
Created on 11/02/2015

@author: zeus
'''


from abstractclass import AbstractSensorFactory
from abstractclass  import UltrasonicSensor

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