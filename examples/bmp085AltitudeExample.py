'''
Created on 17/03/2015

@author: Junior Mascarenhas
'''

from concretefactory.altitudeSensorFactory import AltitudeSensorFactory

if __name__ == '__main__':

    bmp = AltitudeSensorFactory.createSensor("BMP085Altitude")
    print ("Altitude:    %.2f" % bmp.getAltitude())

