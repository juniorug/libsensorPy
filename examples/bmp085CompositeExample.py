'''
Created on 17/03/2015

@author: zeus
'''

from concretefactory.compositeSensorFactory import CompositeSensorFactory

if __name__ == '__main__':

    bmp = CompositeSensorFactory.createSensor("BMP085Composite")
    temp = bmp.readTemperature()
    pressure = bmp.readPressure()
    altitude = bmp.readAltitude()

    print ("Temperature: %.2f C" % temp)
    print ("Pressure:    %.2f hPa" % (pressure / 100.0))
    print ("Altitude:    %.2f" % altitude)
