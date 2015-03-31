'''
Created on 16/03/2015

@author: Junior Mascarenhas
'''

from concretefactory.compositeSensorFactory import CompositeSensorFactory

if __name__ == '__main__':

    lsm303d = CompositeSensorFactory.createSensor("LSM303DComposite")
    magnetic = lsm303d.getMagnetic()
    print ("   x = %.3fG" % ( magnetic['x'] ))
    print ("   y = %.3fG" % ( magnetic['y'] ))
    print ("   z = %.3fG" % ( magnetic['z'] ))

    axes = lsm303d.getAxes(True)
    print ("   x = %.3fG" % ( axes['x'] ))
    print ("   y = %.3fG" % ( axes['y'] ))
    print ("   z = %.3fG" % ( axes['z'] ))