'''
Created on 22/02/2015

@author: Junior Mascarenhas
'''

from concretefactory.temperatureSensorFactory import TemperatureSensorFactory

if __name__ == '__main__':

    dht22 = TemperatureSensorFactory.createSensor("DHT22Temperature")
    print ("Temperature in Celsius: " + dht22.getTemperature() + u"\u00b0" + "C")
    print ("Temperature in Fahrenheit: " + dht22.getTemperatureInFahrenheit() +"F")
    print ("Temperature in Kelvin: " + dht22.getTemperatureInKelvin() +"K")
