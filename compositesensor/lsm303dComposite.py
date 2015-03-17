'''
Created on 16/03/2015

@author: zeus
'''
from abstractclass.accelerometerSensor import AccelerometerSensor
from abstractclass.magnetometerSensor import MagnetometerSensor
from concretesensor.lsm303dAccelerometer import LSM303DAccelerometer
from concretesensor.lsm303dMagnetometer import LSM303DMagnetometer



class LSM303DComposite(AccelerometerSensor,MagnetometerSensor):
    '''
    classdocs
    '''

    def __init__(self):
        '''
        Constructor
        '''
        AccelerometerSensor.__init__(self)
        MagnetometerSensor.__init__(self)
        self.__lsm303dAcc = LSM303DAccelerometer()
        self.__lsm303dMag = LSM303DMagnetometer()

    def setup(self):
        pass

    def getMagnetic(self):
        """Retrieve data from the input source and return an object."""
        return self.__lsm303dMag.getMagnetic()


    def getAxes(self):
        """Retrieve data from the input source and return an object."""
        return self.__lsm303dAcc.getAxes()


    def add(self,sensor):
        if ( isinstance(sensor, LSM303DAccelerometer)):
            self.__lsm303dAcc = sensor
        elif ( isinstance(sensor, LSM303DMagnetometer)):
            self.__lsm303dMag = sensor
        else:
            assert 0, "Bad sensor creation. "
