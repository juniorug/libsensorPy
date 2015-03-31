'''
Created on 17/03/2015

@author: Junior Mascarenhas
'''

from concretefactory.pressureSensorFactory import PressureSensorFactory

if __name__ == '__main__':

    bmp = PressureSensorFactory.createSensor("BMP085PressureSensorFactory")
    print ("Pressure:    %.2f hPa" % (bmp.getPressure()/ 100.0))
