'''
Created on 16/03/2015

@author: Junior
'''
from concretefactory.accelerometerSensorFactory import AccelerometerSensorFactory

adxl345 = AccelerometerSensorFactory.createSensor("ADXL345")
axes = adxl345.getAxes(True)
print ("ADXL345 on address 0x%x:" % (adxl345.address))
print ("   x = %.3fG" % ( axes['x'] ))
print ("   y = %.3fG" % ( axes['y'] ))
print ("   z = %.3fG" % ( axes['z'] ))