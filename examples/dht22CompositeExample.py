'''
Created on 16/03/2015

@author: zeus
'''

from concretefactory.compositeSensorFactory import CompositeSensorFactory

if __name__ == '__main__':

    dht22 = CompositeSensorFactory.createSensor("DHT22Composite")
    print ("Temperature in Celsius: " + dht22.getTemperature() + u"\u00b0" + "C")
    print ("Temperature in Fahrenheit: " + dht22.getTemperatureInFahrenheit() +"F")
    print ("Temperature in Kelvin: " + dht22.getTemperatureInKelvin() +"K")
    print ("Humidity: " + dht22.getHumidity() + "%")