'''
Created on 17/03/2015

@author: Junior Mascarenhas
'''

from concretefactory.temperatureSensorFactory import TemperatureSensorFactory

if __name__ == '__main__':

    bmp = TemperatureSensorFactory.createSensor("BMP085Temperature")
    print ("Temperature: %.2f C" % bmp.getTemperature())

