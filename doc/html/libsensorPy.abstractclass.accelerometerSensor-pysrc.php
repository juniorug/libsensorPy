<?xml version="1.0" encoding="ascii"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>libsensorPy.abstractclass.accelerometerSensor</title>
  <link rel="stylesheet" href="<?=$siteUrl?>/css/epydoc.css" type="text/css" />
  <script type="text/javascript" src"<?=$siteUrl?>/js/epydoc.js"></script>
</head>

<body bgcolor="white" text="black" link="blue" vlink="#204080"
      alink="#204080">
<!-- ==================== NAVIGATION BAR ==================== -->
<table class="navbar" border="0" width="100%" cellpadding="0"
       bgcolor="#a0c0ff" cellspacing="0">
  <tr valign="middle">
  <!-- Home link -->
      <th>&nbsp;&nbsp;&nbsp;<a
        href="libsensorPy-module.html">Home</a>&nbsp;&nbsp;&nbsp;</th>

  <!-- Tree link -->
      <th>&nbsp;&nbsp;&nbsp;<a
        href="module-tree.html">Trees</a>&nbsp;&nbsp;&nbsp;</th>

  <!-- Index link -->
      <th>&nbsp;&nbsp;&nbsp;<a
        href="identifier-index.html">Indices</a>&nbsp;&nbsp;&nbsp;</th>

  <!-- Help link -->
      <th>&nbsp;&nbsp;&nbsp;<a
        href="help.html">Help</a>&nbsp;&nbsp;&nbsp;</th>

  <!-- Project homepage -->
      <th class="navbar" align="right" width="100%">
        <table border="0" cellpadding="0" cellspacing="0">
          <tr><th class="navbar" align="center"
            >libsensorPy</th>
          </tr></table></th>
  </tr>
</table>
<table width="100%" cellpadding="0" cellspacing="0">
  <tr valign="top">
    <td width="100%">
      <span class="breadcrumbs">
        <a href="libsensorPy-module.html">Package&nbsp;libsensorPy</a> ::
        <a href="libsensorPy.abstractclass-module.html">Package&nbsp;abstractclass</a> ::
        Module&nbsp;accelerometerSensor
      </span>
    </td>
    <td>
      <table cellpadding="0" cellspacing="0">
        <!-- hide/show private -->
        <tr><td align="right"><span class="options">[<a href="javascript:void(0);" class="privatelink"
    onclick="toggle_private();">hide&nbsp;private</a>]</span></td></tr>
        <tr><td align="right"><span class="options"
            >[<a href="frames.html" target="_top">frames</a
            >]&nbsp;|&nbsp;<a href="libsensorPy.abstractclass.accelerometerSensor-pysrc.html"
            target="_top">no&nbsp;frames</a>]</span></td></tr>
      </table>
    </td>
  </tr>
</table>
<h1 class="epydoc">Source Code for <a href="libsensorPy.abstractclass.accelerometerSensor-module.html">Module libsensorPy.abstractclass.accelerometerSensor</a></h1>
<pre class="py-src">
<a name="L1"></a><tt class="py-lineno"> 1</tt>  <tt class="py-line"><tt class="py-docstring">'''</tt> </tt>
<a name="L2"></a><tt class="py-lineno"> 2</tt>  <tt class="py-line"><tt class="py-docstring">Created on 16/03/2015</tt> </tt>
<a name="L3"></a><tt class="py-lineno"> 3</tt>  <tt class="py-line"><tt class="py-docstring"></tt> </tt>
<a name="L4"></a><tt class="py-lineno"> 4</tt>  <tt class="py-line"><tt class="py-docstring">@author: Junior Mascarenhas</tt> </tt>
<a name="L5"></a><tt class="py-lineno"> 5</tt>  <tt class="py-line"><tt class="py-docstring">'''</tt> </tt>
<a name="L6"></a><tt class="py-lineno"> 6</tt>  <tt class="py-line"><tt class="py-keyword">import</tt> <tt class="py-name">abc</tt> </tt>
<a name="L7"></a><tt class="py-lineno"> 7</tt>  <tt class="py-line"><tt class="py-keyword">from</tt> <tt id="link-0" class="py-name" targets="Module libsensorPy.abstractclass.sensor=libsensorPy.abstractclass.sensor-module.html"><a title="libsensorPy.abstractclass.sensor" class="py-name" href="#" onclick="return doclink('link-0', 'sensor', 'link-0');">sensor</a></tt> <tt class="py-keyword">import</tt> <tt id="link-1" class="py-name" targets="Class libsensorPy.abstractclass.sensor.Sensor=libsensorPy.abstractclass.sensor.Sensor-class.html"><a title="libsensorPy.abstractclass.sensor.Sensor" class="py-name" href="#" onclick="return doclink('link-1', 'Sensor', 'link-1');">Sensor</a></tt> </tt>
<a name="AccelerometerSensor"></a><div id="AccelerometerSensor-def"><a name="L8"></a><tt class="py-lineno"> 8</tt>  <tt class="py-line"> </tt>
<a name="L9"></a><tt class="py-lineno"> 9</tt> <a class="py-toggle" href="#" id="AccelerometerSensor-toggle" onclick="return toggle('AccelerometerSensor');">-</a><tt class="py-line"><tt class="py-keyword">class</tt> <a class="py-def-name" href="libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor-class.html">AccelerometerSensor</a><tt class="py-op">(</tt><tt class="py-base-class">Sensor</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="AccelerometerSensor-collapsed" style="display:none;" pad="++" indent="++++"></div><div id="AccelerometerSensor-expanded"><a name="L10"></a><tt class="py-lineno">10</tt>  <tt class="py-line">    <tt class="py-docstring">'''</tt> </tt>
<a name="L11"></a><tt class="py-lineno">11</tt>  <tt class="py-line"><tt class="py-docstring">    classdocs</tt> </tt>
<a name="L12"></a><tt class="py-lineno">12</tt>  <tt class="py-line"><tt class="py-docstring">    '''</tt> </tt>
<a name="L13"></a><tt class="py-lineno">13</tt>  <tt class="py-line">    <tt id="link-2" class="py-name" targets="Variable libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.__metaclass__=libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor-class.html#__metaclass__,Variable libsensorPy.abstractclass.actuator.Actuator.__metaclass__=libsensorPy.abstractclass.actuator.Actuator-class.html#__metaclass__,Variable libsensorPy.abstractclass.altitudeSensor.AltitudeSensor.__metaclass__=libsensorPy.abstractclass.altitudeSensor.AltitudeSensor-class.html#__metaclass__,Variable libsensorPy.abstractclass.dcMotorActuator.DCMotorActuator.__metaclass__=libsensorPy.abstractclass.dcMotorActuator.DCMotorActuator-class.html#__metaclass__,Variable libsensorPy.abstractclass.humiditySensor.HumiditySensor.__metaclass__=libsensorPy.abstractclass.humiditySensor.HumiditySensor-class.html#__metaclass__,Variable libsensorPy.abstractclass.lightSensor.LightSensor.__metaclass__=libsensorPy.abstractclass.lightSensor.LightSensor-class.html#__metaclass__,Variable libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor.__metaclass__=libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor-class.html#__metaclass__,Variable libsensorPy.abstractclass.motionSensor.MotionSensor.__metaclass__=libsensorPy.abstractclass.motionSensor.MotionSensor-class.html#__metaclass__,Variable libsensorPy.abstractclass.motorActuator.MotorActuator.__metaclass__=libsensorPy.abstractclass.motorActuator.MotorActuator-class.html#__metaclass__,Variable libsensorPy.abstractclass.pressureSensor.PressureSensor.__metaclass__=libsensorPy.abstractclass.pressureSensor.PressureSensor-class.html#__metaclass__,Variable libsensorPy.abstractclass.sensor.Sensor.__metaclass__=libsensorPy.abstractclass.sensor.Sensor-class.html#__metaclass__,Variable libsensorPy.abstractclass.servoMotorActuator.ServoMotorActuator.__metaclass__=libsensorPy.abstractclass.servoMotorActuator.ServoMotorActuator-class.html#__metaclass__,Variable libsensorPy.abstractclass.stepperMotorActuator.StepperMotorActuator.__metaclass__=libsensorPy.abstractclass.stepperMotorActuator.StepperMotorActuator-class.html#__metaclass__,Variable libsensorPy.abstractclass.temperatureSensor.TemperatureSensor.__metaclass__=libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.html#__metaclass__,Variable libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor.__metaclass__=libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor-class.html#__metaclass__"><a title="libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.__metaclass__
libsensorPy.abstractclass.actuator.Actuator.__metaclass__
libsensorPy.abstractclass.altitudeSensor.AltitudeSensor.__metaclass__
libsensorPy.abstractclass.dcMotorActuator.DCMotorActuator.__metaclass__
libsensorPy.abstractclass.humiditySensor.HumiditySensor.__metaclass__
libsensorPy.abstractclass.lightSensor.LightSensor.__metaclass__
libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor.__metaclass__
libsensorPy.abstractclass.motionSensor.MotionSensor.__metaclass__
libsensorPy.abstractclass.motorActuator.MotorActuator.__metaclass__
libsensorPy.abstractclass.pressureSensor.PressureSensor.__metaclass__
libsensorPy.abstractclass.sensor.Sensor.__metaclass__
libsensorPy.abstractclass.servoMotorActuator.ServoMotorActuator.__metaclass__
libsensorPy.abstractclass.stepperMotorActuator.StepperMotorActuator.__metaclass__
libsensorPy.abstractclass.temperatureSensor.TemperatureSensor.__metaclass__
libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor.__metaclass__" class="py-name" href="#" onclick="return doclink('link-2', '__metaclass__', 'link-2');">__metaclass__</a></tt> <tt class="py-op">=</tt> <tt class="py-name">abc</tt><tt class="py-op">.</tt><tt id="link-3" class="py-name" targets="Class abc.ABCMeta=abc.ABCMeta-class.html"><a title="abc.ABCMeta" class="py-name" href="#" onclick="return doclink('link-3', 'ABCMeta', 'link-3');">ABCMeta</a></tt> </tt>
<a name="L14"></a><tt class="py-lineno">14</tt>  <tt class="py-line"> </tt>
<a name="L15"></a><tt class="py-lineno">15</tt>  <tt class="py-line">    <tt id="link-4" class="py-name" targets="Variable libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.EARTH_GRAVITY_MS2=libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor-class.html#EARTH_GRAVITY_MS2,Variable libsensorPy.concretesensor.adxl345.ADXL345.EARTH_GRAVITY_MS2=libsensorPy.concretesensor.adxl345.ADXL345-class.html#EARTH_GRAVITY_MS2"><a title="libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.EARTH_GRAVITY_MS2
libsensorPy.concretesensor.adxl345.ADXL345.EARTH_GRAVITY_MS2" class="py-name" href="#" onclick="return doclink('link-4', 'EARTH_GRAVITY_MS2', 'link-4');">EARTH_GRAVITY_MS2</a></tt> <tt class="py-op">=</tt> <tt class="py-number">9.80665</tt> </tt>
<a name="L16"></a><tt class="py-lineno">16</tt>  <tt class="py-line"> </tt>
<a name="AccelerometerSensor.__init__"></a><div id="AccelerometerSensor.__init__-def"><a name="L17"></a><tt class="py-lineno">17</tt> <a class="py-toggle" href="#" id="AccelerometerSensor.__init__-toggle" onclick="return toggle('AccelerometerSensor.__init__');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor-class.html#__init__">__init__</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="AccelerometerSensor.__init__-collapsed" style="display:none;" pad="++" indent="++++++++"></div><div id="AccelerometerSensor.__init__-expanded"><a name="L18"></a><tt class="py-lineno">18</tt>  <tt class="py-line">        <tt class="py-docstring">'''</tt> </tt>
<a name="L19"></a><tt class="py-lineno">19</tt>  <tt class="py-line"><tt class="py-docstring">        Constructor</tt> </tt>
<a name="L20"></a><tt class="py-lineno">20</tt>  <tt class="py-line"><tt class="py-docstring">        '''</tt> </tt>
<a name="L21"></a><tt class="py-lineno">21</tt>  <tt class="py-line">        <tt id="link-5" class="py-name"><a title="libsensorPy.abstractclass.sensor.Sensor" class="py-name" href="#" onclick="return doclink('link-5', 'Sensor', 'link-1');">Sensor</a></tt><tt class="py-op">.</tt><tt id="link-6" class="py-name" targets="Method libsensorPy.abstractclass.abstractActuatorFactory.AbstractActuatorFactory.__init__()=libsensorPy.abstractclass.abstractActuatorFactory.AbstractActuatorFactory-class.html#__init__,Method libsensorPy.abstractclass.abstractEvent.AbstractEvent.__init__()=libsensorPy.abstractclass.abstractEvent.AbstractEvent-class.html#__init__,Method libsensorPy.abstractclass.abstractSensorFactory.AbstractSensorFactory.__init__()=libsensorPy.abstractclass.abstractSensorFactory.AbstractSensorFactory-class.html#__init__,Method libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.__init__()=libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor-class.html#__init__,Method libsensorPy.abstractclass.actuator.Actuator.__init__()=libsensorPy.abstractclass.actuator.Actuator-class.html#__init__,Method libsensorPy.abstractclass.altitudeSensor.AltitudeSensor.__init__()=libsensorPy.abstractclass.altitudeSensor.AltitudeSensor-class.html#__init__,Method libsensorPy.abstractclass.dcMotorActuator.DCMotorActuator.__init__()=libsensorPy.abstractclass.dcMotorActuator.DCMotorActuator-class.html#__init__,Method libsensorPy.abstractclass.eventObserver.EventObserver.__init__()=libsensorPy.abstractclass.eventObserver.EventObserver-class.html#__init__,Method libsensorPy.abstractclass.humiditySensor.HumiditySensor.__init__()=libsensorPy.abstractclass.humiditySensor.HumiditySensor-class.html#__init__,Method libsensorPy.abstractclass.lightSensor.LightSensor.__init__()=libsensorPy.abstractclass.lightSensor.LightSensor-class.html#__init__,Method libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor.__init__()=libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor-class.html#__init__,Method libsensorPy.abstractclass.motionSensor.MotionSensor.__init__()=libsensorPy.abstractclass.motionSensor.MotionSensor-class.html#__init__,Method libsensorPy.abstractclass.motorActuator.MotorActuator.__init__()=libsensorPy.abstractclass.motorActuator.MotorActuator-class.html#__init__,Method libsensorPy.abstractclass.pressureSensor.PressureSensor.__init__()=libsensorPy.abstractclass.pressureSensor.PressureSensor-class.html#__init__,Method libsensorPy.abstractclass.sensor.Sensor.__init__()=libsensorPy.abstractclass.sensor.Sensor-class.html#__init__,Method libsensorPy.abstractclass.servoMotorActuator.ServoMotorActuator.__init__()=libsensorPy.abstractclass.servoMotorActuator.ServoMotorActuator-class.html#__init__,Method libsensorPy.abstractclass.stepperMotorActuator.StepperMotorActuator.__init__()=libsensorPy.abstractclass.stepperMotorActuator.StepperMotorActuator-class.html#__init__,Method libsensorPy.abstractclass.temperatureSensor.TemperatureSensor.__init__()=libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.html#__init__,Method libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor.__init__()=libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor-class.html#__init__,Method libsensorPy.compositesensor.bmp085Composite.BMP085Composite.__init__()=libsensorPy.compositesensor.bmp085Composite.BMP085Composite-class.html#__init__,Method libsensorPy.compositesensor.dht11Composite.DHT11Composite.__init__()=libsensorPy.compositesensor.dht11Composite.DHT11Composite-class.html#__init__,Method libsensorPy.compositesensor.dht22Composite.DHT22Composite.__init__()=libsensorPy.compositesensor.dht22Composite.DHT22Composite-class.html#__init__,Method libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite.__init__()=libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite-class.html#__init__,Method libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48.__init__()=libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48-class.html#__init__,Method libsensorPy.concreteevent.temperatureEvent.TemperatureEvent.__init__()=libsensorPy.concreteevent.temperatureEvent.TemperatureEvent-class.html#__init__,Method libsensorPy.concretefactory.accelerometerSensorFactory.AccelerometerSensorFactory.__init__()=libsensorPy.concretefactory.accelerometerSensorFactory.AccelerometerSensorFactory-class.html#__init__,Method libsensorPy.concretefactory.altitudeSensorFactory.AltitudeSensorFactory.__init__()=libsensorPy.concretefactory.altitudeSensorFactory.AltitudeSensorFactory-class.html#__init__,Method libsensorPy.concretefactory.compositeSensorFactory.CompositeSensorFactory.__init__()=libsensorPy.concretefactory.compositeSensorFactory.CompositeSensorFactory-class.html#__init__,Method libsensorPy.concretefactory.humiditySensorFactory.HumididtySensorFactory.__init__()=libsensorPy.concretefactory.humiditySensorFactory.HumididtySensorFactory-class.html#__init__,Method libsensorPy.concretefactory.lightSensorFactory.LightSensorFactory.__init__()=libsensorPy.concretefactory.lightSensorFactory.LightSensorFactory-class.html#__init__,Method libsensorPy.concretefactory.magnetometerSensorFactory.MagnetometerSensorFactory.__init__()=libsensorPy.concretefactory.magnetometerSensorFactory.MagnetometerSensorFactory-class.html#__init__,Method libsensorPy.concretefactory.motionSensorFactory.MotionSensorFactory.__init__()=libsensorPy.concretefactory.motionSensorFactory.MotionSensorFactory-class.html#__init__,Method libsensorPy.concretefactory.pressureSensorFactory.PressureSensorFactory.__init__()=libsensorPy.concretefactory.pressureSensorFactory.PressureSensorFactory-class.html#__init__,Method libsensorPy.concretefactory.stepperMotorActuatorFactory.StepperMotorActuatorFactory.__init__()=libsensorPy.concretefactory.stepperMotorActuatorFactory.StepperMotorActuatorFactory-class.html#__init__,Method libsensorPy.concretefactory.temperatureSensorFactory.TemperatureSensorFactory.__init__()=libsensorPy.concretefactory.temperatureSensorFactory.TemperatureSensorFactory-class.html#__init__,Method libsensorPy.concretefactory.ultrasonicSensorFactory.UltrasonicSensorFactory.__init__()=libsensorPy.concretefactory.ultrasonicSensorFactory.UltrasonicSensorFactory-class.html#__init__,Method libsensorPy.concreteobserver.currentConditionDisplay.CurrentConditionDisplay.__init__()=libsensorPy.concreteobserver.currentConditionDisplay.CurrentConditionDisplay-class.html#__init__,Method libsensorPy.concretesensor.adxl345.ADXL345.__init__()=libsensorPy.concretesensor.adxl345.ADXL345-class.html#__init__,Method libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude.__init__()=libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude-class.html#__init__,Method libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure.__init__()=libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure-class.html#__init__,Method libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature.__init__()=libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature-class.html#__init__,Method libsensorPy.concretesensor.dht11Humidity.DHT11Humidity.__init__()=libsensorPy.concretesensor.dht11Humidity.DHT11Humidity-class.html#__init__,Method libsensorPy.concretesensor.dht11Temperature.DHT11Temperature.__init__()=libsensorPy.concretesensor.dht11Temperature.DHT11Temperature-class.html#__init__,Method libsensorPy.concretesensor.dht22Humidity.DHT22Humidity.__init__()=libsensorPy.concretesensor.dht22Humidity.DHT22Humidity-class.html#__init__,Method libsensorPy.concretesensor.dht22Temperature.DHT22Temperature.__init__()=libsensorPy.concretesensor.dht22Temperature.DHT22Temperature-class.html#__init__,Method libsensorPy.concretesensor.hmc5883l.HMC5883L.__init__()=libsensorPy.concretesensor.hmc5883l.HMC5883L-class.html#__init__,Method libsensorPy.concretesensor.hysrf05.HYSRF05.__init__()=libsensorPy.concretesensor.hysrf05.HYSRF05-class.html#__init__,Method libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer.__init__()=libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer-class.html#__init__,Method libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer.__init__()=libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer-class.html#__init__,Method libsensorPy.concretesensor.parallaxPing.ParallaxPing.__init__()=libsensorPy.concretesensor.parallaxPing.ParallaxPing-class.html#__init__,Method libsensorPy.concretesensor.pir.PIR.__init__()=libsensorPy.concretesensor.pir.PIR-class.html#__init__,Method libsensorPy.concretesensor.srf04.SRF04.__init__()=libsensorPy.concretesensor.srf04.SRF04-class.html#__init__,Method libsensorPy.concretesensor.srf05.SRF05.__init__()=libsensorPy.concretesensor.srf05.SRF05-class.html#__init__,Method libsensorPy.concretesensor.tcs34725.TCS34725.__init__()=libsensorPy.concretesensor.tcs34725.TCS34725-class.html#__init__,Method libsensorPy.concretesensor.urm37.URM37.__init__()=libsensorPy.concretesensor.urm37.URM37-class.html#__init__,Method libsensorPy.extension.extendedUltrasonicSensorFactory.ExtendedUltrasonicSensorFactory.__init__()=libsensorPy.extension.extendedUltrasonicSensorFactory.ExtendedUltrasonicSensorFactory-class.html#__init__,Method libsensorPy.extension.hcsr04.HCSR04.__init__()=libsensorPy.extension.hcsr04.HCSR04-class.html#__init__,Method libsensorPy.utils.pycomms.PyComms.__init__()=libsensorPy.utils.pycomms.PyComms-class.html#__init__"><a title="libsensorPy.abstractclass.abstractActuatorFactory.AbstractActuatorFactory.__init__
libsensorPy.abstractclass.abstractEvent.AbstractEvent.__init__
libsensorPy.abstractclass.abstractSensorFactory.AbstractSensorFactory.__init__
libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.__init__
libsensorPy.abstractclass.actuator.Actuator.__init__
libsensorPy.abstractclass.altitudeSensor.AltitudeSensor.__init__
libsensorPy.abstractclass.dcMotorActuator.DCMotorActuator.__init__
libsensorPy.abstractclass.eventObserver.EventObserver.__init__
libsensorPy.abstractclass.humiditySensor.HumiditySensor.__init__
libsensorPy.abstractclass.lightSensor.LightSensor.__init__
libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor.__init__
libsensorPy.abstractclass.motionSensor.MotionSensor.__init__
libsensorPy.abstractclass.motorActuator.MotorActuator.__init__
libsensorPy.abstractclass.pressureSensor.PressureSensor.__init__
libsensorPy.abstractclass.sensor.Sensor.__init__
libsensorPy.abstractclass.servoMotorActuator.ServoMotorActuator.__init__
libsensorPy.abstractclass.stepperMotorActuator.StepperMotorActuator.__init__
libsensorPy.abstractclass.temperatureSensor.TemperatureSensor.__init__
libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor.__init__
libsensorPy.compositesensor.bmp085Composite.BMP085Composite.__init__
libsensorPy.compositesensor.dht11Composite.DHT11Composite.__init__
libsensorPy.compositesensor.dht22Composite.DHT22Composite.__init__
libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite.__init__
libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48.__init__
libsensorPy.concreteevent.temperatureEvent.TemperatureEvent.__init__
libsensorPy.concretefactory.accelerometerSensorFactory.AccelerometerSensorFactory.__init__
libsensorPy.concretefactory.altitudeSensorFactory.AltitudeSensorFactory.__init__
libsensorPy.concretefactory.compositeSensorFactory.CompositeSensorFactory.__init__
libsensorPy.concretefactory.humiditySensorFactory.HumididtySensorFactory.__init__
libsensorPy.concretefactory.lightSensorFactory.LightSensorFactory.__init__
libsensorPy.concretefactory.magnetometerSensorFactory.MagnetometerSensorFactory.__init__
libsensorPy.concretefactory.motionSensorFactory.MotionSensorFactory.__init__
libsensorPy.concretefactory.pressureSensorFactory.PressureSensorFactory.__init__
libsensorPy.concretefactory.stepperMotorActuatorFactory.StepperMotorActuatorFactory.__init__
libsensorPy.concretefactory.temperatureSensorFactory.TemperatureSensorFactory.__init__
libsensorPy.concretefactory.ultrasonicSensorFactory.UltrasonicSensorFactory.__init__
libsensorPy.concreteobserver.currentConditionDisplay.CurrentConditionDisplay.__init__
libsensorPy.concretesensor.adxl345.ADXL345.__init__
libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude.__init__
libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure.__init__
libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature.__init__
libsensorPy.concretesensor.dht11Humidity.DHT11Humidity.__init__
libsensorPy.concretesensor.dht11Temperature.DHT11Temperature.__init__
libsensorPy.concretesensor.dht22Humidity.DHT22Humidity.__init__
libsensorPy.concretesensor.dht22Temperature.DHT22Temperature.__init__
libsensorPy.concretesensor.hmc5883l.HMC5883L.__init__
libsensorPy.concretesensor.hysrf05.HYSRF05.__init__
libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer.__init__
libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer.__init__
libsensorPy.concretesensor.parallaxPing.ParallaxPing.__init__
libsensorPy.concretesensor.pir.PIR.__init__
libsensorPy.concretesensor.srf04.SRF04.__init__
libsensorPy.concretesensor.srf05.SRF05.__init__
libsensorPy.concretesensor.tcs34725.TCS34725.__init__
libsensorPy.concretesensor.urm37.URM37.__init__
libsensorPy.extension.extendedUltrasonicSensorFactory.ExtendedUltrasonicSensorFactory.__init__
libsensorPy.extension.hcsr04.HCSR04.__init__
libsensorPy.utils.pycomms.PyComms.__init__" class="py-name" href="#" onclick="return doclink('link-6', '__init__', 'link-6');">__init__</a></tt><tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">)</tt> </tt>
</div><a name="L22"></a><tt class="py-lineno">22</tt>  <tt class="py-line"> </tt>
<a name="L23"></a><tt class="py-lineno">23</tt>  <tt class="py-line">    <tt class="py-decorator">@</tt><tt class="py-decorator">abc</tt><tt class="py-op">.</tt><tt class="py-name">abstractmethod</tt> </tt>
<a name="AccelerometerSensor.setup"></a><div id="AccelerometerSensor.setup-def"><a name="L24"></a><tt class="py-lineno">24</tt> <a class="py-toggle" href="#" id="AccelerometerSensor.setup-toggle" onclick="return toggle('AccelerometerSensor.setup');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor-class.html#setup">setup</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="AccelerometerSensor.setup-collapsed" style="display:none;" pad="++" indent="++++++++"></div><div id="AccelerometerSensor.setup-expanded"><a name="L25"></a><tt class="py-lineno">25</tt>  <tt class="py-line">        <tt class="py-keyword">pass</tt> </tt>
</div><a name="L26"></a><tt class="py-lineno">26</tt>  <tt class="py-line"> </tt>
<a name="L27"></a><tt class="py-lineno">27</tt>  <tt class="py-line">    <tt class="py-decorator">@</tt><tt class="py-decorator">abc</tt><tt class="py-op">.</tt><tt class="py-name">abstractmethod</tt> </tt>
<a name="AccelerometerSensor.getAxes"></a><div id="AccelerometerSensor.getAxes-def"><a name="L28"></a><tt class="py-lineno">28</tt> <a class="py-toggle" href="#" id="AccelerometerSensor.getAxes-toggle" onclick="return toggle('AccelerometerSensor.getAxes');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor-class.html#getAxes">getAxes</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="AccelerometerSensor.getAxes-collapsed" style="display:none;" pad="++" indent="++++++++"></div><div id="AccelerometerSensor.getAxes-expanded"><a name="L29"></a><tt class="py-lineno">29</tt>  <tt class="py-line">        <tt class="py-docstring">''' Get the axes value in G'''</tt> </tt>
<a name="L30"></a><tt class="py-lineno">30</tt>  <tt class="py-line">        <tt class="py-keyword">pass</tt> </tt>
</div><a name="L31"></a><tt class="py-lineno">31</tt>  <tt class="py-line"> </tt>
<a name="AccelerometerSensor.getAxesInMS2"></a><div id="AccelerometerSensor.getAxesInMS2-def"><a name="L32"></a><tt class="py-lineno">32</tt> <a class="py-toggle" href="#" id="AccelerometerSensor.getAxesInMS2-toggle" onclick="return toggle('AccelerometerSensor.getAxesInMS2');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor-class.html#getAxesInMS2">getAxesInMS2</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="AccelerometerSensor.getAxesInMS2-collapsed" style="display:none;" pad="++" indent="++++++++"></div><div id="AccelerometerSensor.getAxesInMS2-expanded"><a name="L33"></a><tt class="py-lineno">33</tt>  <tt class="py-line">        <tt class="py-docstring">''' Get the axes value in m/s2'''</tt> </tt>
<a name="L34"></a><tt class="py-lineno">34</tt>  <tt class="py-line">        <tt class="py-name">x</tt> <tt class="py-op">=</tt> <tt class="py-name">self</tt><tt class="py-op">.</tt><tt id="link-7" class="py-name" targets="Method libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.getAxes()=libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor-class.html#getAxes,Method libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite.getAxes()=libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite-class.html#getAxes,Method libsensorPy.concretesensor.adxl345.ADXL345.getAxes()=libsensorPy.concretesensor.adxl345.ADXL345-class.html#getAxes,Method libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer.getAxes()=libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer-class.html#getAxes"><a title="libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.getAxes
libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite.getAxes
libsensorPy.concretesensor.adxl345.ADXL345.getAxes
libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer.getAxes" class="py-name" href="#" onclick="return doclink('link-7', 'getAxes', 'link-7');">getAxes</a></tt><tt class="py-op">(</tt><tt class="py-name">False</tt><tt class="py-op">)</tt><tt class="py-op">[</tt><tt class="py-string">'x'</tt><tt class="py-op">]</tt> <tt class="py-op">*</tt> <tt class="py-name">self</tt><tt class="py-op">.</tt><tt id="link-8" class="py-name"><a title="libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.EARTH_GRAVITY_MS2
libsensorPy.concretesensor.adxl345.ADXL345.EARTH_GRAVITY_MS2" class="py-name" href="#" onclick="return doclink('link-8', 'EARTH_GRAVITY_MS2', 'link-4');">EARTH_GRAVITY_MS2</a></tt> </tt>
<a name="L35"></a><tt class="py-lineno">35</tt>  <tt class="py-line">        <tt class="py-name">y</tt> <tt class="py-op">=</tt> <tt class="py-name">self</tt><tt class="py-op">.</tt><tt id="link-9" class="py-name"><a title="libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.getAxes
libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite.getAxes
libsensorPy.concretesensor.adxl345.ADXL345.getAxes
libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer.getAxes" class="py-name" href="#" onclick="return doclink('link-9', 'getAxes', 'link-7');">getAxes</a></tt><tt class="py-op">(</tt><tt class="py-name">False</tt><tt class="py-op">)</tt><tt class="py-op">[</tt><tt class="py-string">'y'</tt><tt class="py-op">]</tt> <tt class="py-op">*</tt> <tt class="py-name">self</tt><tt class="py-op">.</tt><tt id="link-10" class="py-name"><a title="libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.EARTH_GRAVITY_MS2
libsensorPy.concretesensor.adxl345.ADXL345.EARTH_GRAVITY_MS2" class="py-name" href="#" onclick="return doclink('link-10', 'EARTH_GRAVITY_MS2', 'link-4');">EARTH_GRAVITY_MS2</a></tt> </tt>
<a name="L36"></a><tt class="py-lineno">36</tt>  <tt class="py-line">        <tt class="py-name">z</tt> <tt class="py-op">=</tt> <tt class="py-name">self</tt><tt class="py-op">.</tt><tt id="link-11" class="py-name"><a title="libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.getAxes
libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite.getAxes
libsensorPy.concretesensor.adxl345.ADXL345.getAxes
libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer.getAxes" class="py-name" href="#" onclick="return doclink('link-11', 'getAxes', 'link-7');">getAxes</a></tt><tt class="py-op">(</tt><tt class="py-name">False</tt><tt class="py-op">)</tt><tt class="py-op">[</tt><tt class="py-string">'z'</tt><tt class="py-op">]</tt> <tt class="py-op">*</tt> <tt class="py-name">self</tt><tt class="py-op">.</tt><tt id="link-12" class="py-name"><a title="libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.EARTH_GRAVITY_MS2
libsensorPy.concretesensor.adxl345.ADXL345.EARTH_GRAVITY_MS2" class="py-name" href="#" onclick="return doclink('link-12', 'EARTH_GRAVITY_MS2', 'link-4');">EARTH_GRAVITY_MS2</a></tt> </tt>
<a name="L37"></a><tt class="py-lineno">37</tt>  <tt class="py-line">        <tt class="py-keyword">return</tt> <tt class="py-op">{</tt><tt class="py-string">"x"</tt><tt class="py-op">:</tt> <tt class="py-name">x</tt><tt class="py-op">,</tt> <tt class="py-string">"y"</tt><tt class="py-op">:</tt> <tt class="py-name">y</tt><tt class="py-op">,</tt> <tt class="py-string">"z"</tt><tt class="py-op">:</tt> <tt class="py-name">z</tt><tt class="py-op">}</tt> </tt>
</div></div><a name="L38"></a><tt class="py-lineno">38</tt>  <tt class="py-line"> </tt><script type="text/javascript">
<!--
expandto(location.href);
// -->
</script>
</pre>
<br />
<!-- ==================== NAVIGATION BAR ==================== -->
<table class="navbar" border="0" width="100%" cellpadding="0"
       bgcolor="#a0c0ff" cellspacing="0">
  <tr valign="middle">
  <!-- Home link -->
      <th>&nbsp;&nbsp;&nbsp;<a
        href="libsensorPy-module.html">Home</a>&nbsp;&nbsp;&nbsp;</th>

  <!-- Tree link -->
      <th>&nbsp;&nbsp;&nbsp;<a
        href="module-tree.html">Trees</a>&nbsp;&nbsp;&nbsp;</th>

  <!-- Index link -->
      <th>&nbsp;&nbsp;&nbsp;<a
        href="identifier-index.html">Indices</a>&nbsp;&nbsp;&nbsp;</th>

  <!-- Help link -->
      <th>&nbsp;&nbsp;&nbsp;<a
        href="help.html">Help</a>&nbsp;&nbsp;&nbsp;</th>

  <!-- Project homepage -->
      <th class="navbar" align="right" width="100%">
        <table border="0" cellpadding="0" cellspacing="0">
          <tr><th class="navbar" align="center"
            >libsensorPy</th>
          </tr></table></th>
  </tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" width="100%%">
  <tr>
    <td align="left" class="footer">
    Generated by Epydoc 3.0.1 on Mon Apr 13 18:16:29 2015
    </td>
    <td align="right" class="footer">
      <a target="mainFrame" href="http://epydoc.sourceforge.net"
        >http://epydoc.sourceforge.net</a>
    </td>
  </tr>
</table>

<script type="text/javascript">
  <!--
  // Private objects are initially displayed (because if
  // javascript is turned off then we want them to be
  // visible); but by default, we want to hide them.  So hide
  // them unless we have a cookie that says to show them.
  checkCookie();
  // -->
</script>
</body>
</html>
