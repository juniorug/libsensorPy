'''
Created on 11/02/2015

@author: Junior Mascarenhas
'''

from concretefactory.temperatureSensorFactory import TemperatureSensorFactory
from concreteobserver.currentConditionDisplay import CurrentConditionDisplay
if __name__ == '__main__':

    dht11 = TemperatureSensorFactory.createSensor("DHT11Temperature")
    tEvent = TemperatureSensorFactory.createEvent(dht11)
    ccd = CurrentConditionDisplay(tEvent)
    tEvent.attach(ccd)
    print ("Temperature in Celsius: " + dht11.getTemperature() + u"\u00b0" + "C")
    print ("Temperature in Fahrenheit: " + dht11.getTemperatureInFahrenheit() +"F")
    print ("Temperature in Kelvin: " + dht11.getTemperatureInKelvin() +"K")


    ccd.display()
    tEvent.detach(ccd)