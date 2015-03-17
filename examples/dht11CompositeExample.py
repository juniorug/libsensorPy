'''
Created on 16/03/2015

@author: zeus
'''

from concretefactory.compositeSensorFactory import CompositeSensorFactory

if __name__ == '__main__':

    dht11 = CompositeSensorFactory.createSensor("DHT11Composite")
    print ("Temperature in Celsius: " + dht11.getTemperature() + u"\u00b0" + "C")
    print ("Temperature in Fahrenheit: " + dht11.getTemperatureInFahrenheit() +"F")
    print ("Temperature in Kelvin: " + dht11.getTemperatureInKelvin() +"K")
    print ("Humidity: " + dht11.getHumidity() + "%")
