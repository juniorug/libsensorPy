'''
Created on 11/02/2015

@author: zeus
'''


from abstractclass.abstractSensorFactory  import AbstractSensorFactory
#from abstractclass.ultrasonicSensor  import UltrasonicSensor

class UltrasonicSensorFactory(AbstractSensorFactory):
    '''
    classdocs
    '''


    def __init__(self):
        '''
        Constructor
        '''
     
    def createSensor(self, sensorType):
        return UltrasonicSensor.getSensor(sensorType)  
    
    def createEvent(self, sensorType):     
        pass
