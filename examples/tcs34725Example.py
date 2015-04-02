'''
Created on 16/03/2015

@author: Junior Mascarenhas
'''

from concretefactory.lightSensorFactory import LightSensorFactory

if __name__ == '__main__':

    tcs34725 = LightSensorFactory.createSensor("TCS34725")
    colorTemp = tcs34725.calculateColorTemperature()
    if colorTemp is None:
        print 'Too dark to determine color temperature!'
    else:
        print "Color Temperature: %.3f C" % colorTemp

    print "Luminosity: %%.3f lux" %  tcs34725.calculateLux()