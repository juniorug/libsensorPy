'''
Created on 18/03/2015

@author: Junior Mascarenhas
'''
from concretefactory.magnetometerSensorFactory import MagnetometerSensorFactory

if __name__ == '__main__':

    hmc5883l = MagnetometerSensorFactory.createSensor("HMC5883L")
    magnetic = hmc5883l.getMagnetic()
    print ("   x = %.3fG" % ( magnetic['x'] ))
    print ("   y = %.3fG" % ( magnetic['y'] ))
    print ("   z = %.3fG" % ( magnetic['z'] ))