# LibsensorPy
An extendable python library to manipulate sensors coupled to the Raspberry Pi

###### WHAT IS NEEDED BEFORE INSTALL?

1) Configure and enable SPI and I2C ports on raspperry:
 
* $ sudo apt-get install python-smbus
* $ sudo apt-get install i2c-tools

2.1) For Raspbian users, check /etc/modprobe.d/raspi-blacklist.conf and comment "blacklist i2c-bcm2708" and "blacklist spi-bcm2708" by running 

* $ sudo nano /etc/modprobe.d/raspi-blacklist.conf 

And adding a # (if its not there). 

* \# blacklist i2c-bcm2708 

* \# blacklist spi-bcm2708

2.2) For Wheezy or something-other-than-Occidentalis, add the following lines to /etc/modules: 
 
* i2c-dev 
* i2c-bcm2708
* spi-bcm2708

And then reboot.

3) Install pigpio:

* $ wget abyz.co.uk/rpi/pigpio/pigpio.zip
* $ unzip pigpio.zip
* $ cd PIGPIO
* $ sudo make
* $ sudo make install
 
4) Install setuptools:
* sudo apt-get install python-setuptools

##### How to download and install LibsensorPy:
1) Via pip:
* sudo pip install libsensorPy 

2) Via wget:
* $ wget https://pypi.python.org/packages/source/l/libsensorPy/libsensorPy-0.0.4.tar.gz
* $ tar -zxvf libsensorPy-0.0.4.tar.gz
* $ cd libsensorPy-0.0.4/
* $ sudo python setup.py install

