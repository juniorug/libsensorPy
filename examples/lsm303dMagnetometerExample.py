'''
Created on 16/03/2015

@author: Junior
'''
from concretefactory.magnetometerSensorFactory import MagnetometerSensorFactory

if __name__ == '__main__':

    lsm303d = MagnetometerSensorFactory.createSensor("LSM303DMagnetometer")
    magnetic = lsm303d.getMagnetic()
    print ("   x = %.3fG" % ( magnetic['x'] ))
    print ("   y = %.3fG" % ( magnetic['y'] ))
    print ("   z = %.3fG" % ( magnetic['z'] ))