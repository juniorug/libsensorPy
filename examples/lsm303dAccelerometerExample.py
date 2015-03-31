'''
Created on 16/03/2015

@author: Junior Mascarenhas
'''
from concretefactory.accelerometerSensorFactory import AccelerometerSensorFactory

if __name__ == '__main__':

    lsm303d = AccelerometerSensorFactory.createSensor("LSM303DAccelerometer")
    axes = lsm303d.getAxes(True)
    print ("   x = %.3fG" % ( axes['x'] ))
    print ("   y = %.3fG" % ( axes['y'] ))
    print ("   z = %.3fG" % ( axes['z'] ))