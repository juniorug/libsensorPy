
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>libsensorPy.abstractclass.temperatureSensor</title>
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
        href="libsensorPy-module.php">Home</a>&nbsp;&nbsp;&nbsp;</th>

  <!-- Tree link -->
      <th>&nbsp;&nbsp;&nbsp;<a
        href="module-tree.php">Trees</a>&nbsp;&nbsp;&nbsp;</th>

  <!-- Index link -->
      <th>&nbsp;&nbsp;&nbsp;<a
        href="identifier-index.php">Indices</a>&nbsp;&nbsp;&nbsp;</th>

  <!-- Help link -->
      <th>&nbsp;&nbsp;&nbsp;<a
        href="help.php">Help</a>&nbsp;&nbsp;&nbsp;</th>

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
        <a href="libsensorPy-module.php">Package&nbsp;libsensorPy</a> ::
        <a href="libsensorPy.abstractclass-module.php">Package&nbsp;abstractclass</a> ::
        Module&nbsp;temperatureSensor
      </span>
    </td>
    <td>
      <table cellpadding="0" cellspacing="0">
        <!-- hide/show private -->
        <tr><td align="right"><span class="options">[<a href="javascript:void(0);" class="privatelink"
    onclick="toggle_private();">hide&nbsp;private</a>]</span></td></tr>
        <tr><td align="right"><span class="options"
            >[<a href="frames.php" target="_top">frames</a
            >]&nbsp;|&nbsp;<a href="libsensorPy.abstractclass.temperatureSensor-pysrc.php"
            target="_top">no&nbsp;frames</a>]</span></td></tr>
      </table>
    </td>
  </tr>
</table>
<h1 class="epydoc">Source Code for <a href="libsensorPy.abstractclass.temperatureSensor-module.php">Module libsensorPy.abstractclass.temperatureSensor</a></h1>
<pre class="py-src">
<a name="L1"></a><tt class="py-lineno"> 1</tt>  <tt class="py-line"><tt class="py-docstring">'''</tt> </tt>
<a name="L2"></a><tt class="py-lineno"> 2</tt>  <tt class="py-line"><tt class="py-docstring">Created on 10/02/2015</tt> </tt>
<a name="L3"></a><tt class="py-lineno"> 3</tt>  <tt class="py-line"><tt class="py-docstring"></tt> </tt>
<a name="L4"></a><tt class="py-lineno"> 4</tt>  <tt class="py-line"><tt class="py-docstring">@author: Junior Mascarenhas</tt> </tt>
<a name="L5"></a><tt class="py-lineno"> 5</tt>  <tt class="py-line"><tt class="py-docstring">'''</tt> </tt>
<a name="L6"></a><tt class="py-lineno"> 6</tt>  <tt class="py-line"><tt class="py-keyword">import</tt> <tt class="py-name">abc</tt> </tt>
<a name="L7"></a><tt class="py-lineno"> 7</tt>  <tt class="py-line"><tt class="py-keyword">from</tt> <tt id="link-0" class="py-name" targets="Module libsensorPy.abstractclass.sensor=libsensorPy.abstractclass.sensor-module.php"><a title="libsensorPy.abstractclass.sensor" class="py-name" href="#" onclick="return doclink('link-0', 'sensor', 'link-0');">sensor</a></tt> <tt class="py-keyword">import</tt> <tt id="link-1" class="py-name" targets="Class libsensorPy.abstractclass.sensor.Sensor=libsensorPy.abstractclass.sensor.Sensor-class.php"><a title="libsensorPy.abstractclass.sensor.Sensor" class="py-name" href="#" onclick="return doclink('link-1', 'Sensor', 'link-1');">Sensor</a></tt> </tt>
<a name="TemperatureSensor"></a><div id="TemperatureSensor-def"><a name="L8"></a><tt class="py-lineno"> 8</tt>  <tt class="py-line"> </tt>
<a name="L9"></a><tt class="py-lineno"> 9</tt> <a class="py-toggle" href="#" id="TemperatureSensor-toggle" onclick="return toggle('TemperatureSensor');">-</a><tt class="py-line"><tt class="py-keyword">class</tt> <a class="py-def-name" href="libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.php">TemperatureSensor</a><tt class="py-op">(</tt><tt class="py-base-class">Sensor</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="TemperatureSensor-collapsed" style="display:none;" pad="++" indent="++++"></div><div id="TemperatureSensor-expanded"><a name="L10"></a><tt class="py-lineno">10</tt>  <tt class="py-line">    <tt class="py-docstring">'''</tt> </tt>
<a name="L11"></a><tt class="py-lineno">11</tt>  <tt class="py-line"><tt class="py-docstring">    classdocs</tt> </tt>
<a name="L12"></a><tt class="py-lineno">12</tt>  <tt class="py-line"><tt class="py-docstring">    '''</tt> </tt>
<a name="L13"></a><tt class="py-lineno">13</tt>  <tt class="py-line">    <tt id="link-2" class="py-name" targets="Variable libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.__metaclass__=libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor-class.php#__metaclass__,Variable libsensorPy.abstractclass.actuator.Actuator.__metaclass__=libsensorPy.abstractclass.actuator.Actuator-class.php#__metaclass__,Variable libsensorPy.abstractclass.altitudeSensor.AltitudeSensor.__metaclass__=libsensorPy.abstractclass.altitudeSensor.AltitudeSensor-class.php#__metaclass__,Variable libsensorPy.abstractclass.dcMotorActuator.DCMotorActuator.__metaclass__=libsensorPy.abstractclass.dcMotorActuator.DCMotorActuator-class.php#__metaclass__,Variable libsensorPy.abstractclass.humiditySensor.HumiditySensor.__metaclass__=libsensorPy.abstractclass.humiditySensor.HumiditySensor-class.php#__metaclass__,Variable libsensorPy.abstractclass.lightSensor.LightSensor.__metaclass__=libsensorPy.abstractclass.lightSensor.LightSensor-class.php#__metaclass__,Variable libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor.__metaclass__=libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor-class.php#__metaclass__,Variable libsensorPy.abstractclass.motionSensor.MotionSensor.__metaclass__=libsensorPy.abstractclass.motionSensor.MotionSensor-class.php#__metaclass__,Variable libsensorPy.abstractclass.motorActuator.MotorActuator.__metaclass__=libsensorPy.abstractclass.motorActuator.MotorActuator-class.php#__metaclass__,Variable libsensorPy.abstractclass.pressureSensor.PressureSensor.__metaclass__=libsensorPy.abstractclass.pressureSensor.PressureSensor-class.php#__metaclass__,Variable libsensorPy.abstractclass.sensor.Sensor.__metaclass__=libsensorPy.abstractclass.sensor.Sensor-class.php#__metaclass__,Variable libsensorPy.abstractclass.servoMotorActuator.ServoMotorActuator.__metaclass__=libsensorPy.abstractclass.servoMotorActuator.ServoMotorActuator-class.php#__metaclass__,Variable libsensorPy.abstractclass.stepperMotorActuator.StepperMotorActuator.__metaclass__=libsensorPy.abstractclass.stepperMotorActuator.StepperMotorActuator-class.php#__metaclass__,Variable libsensorPy.abstractclass.temperatureSensor.TemperatureSensor.__metaclass__=libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.php#__metaclass__,Variable libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor.__metaclass__=libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor-class.php#__metaclass__"><a title="libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.__metaclass__
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
libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor.__metaclass__" class="py-name" href="#" onclick="return doclink('link-2', '__metaclass__', 'link-2');">__metaclass__</a></tt> <tt class="py-op">=</tt> <tt class="py-name">abc</tt><tt class="py-op">.</tt><tt id="link-3" class="py-name" targets="Class abc.ABCMeta=abc.ABCMeta-class.php"><a title="abc.ABCMeta" class="py-name" href="#" onclick="return doclink('link-3', 'ABCMeta', 'link-3');">ABCMeta</a></tt> </tt>
<a name="L14"></a><tt class="py-lineno">14</tt>  <tt class="py-line"> </tt>
<a name="TemperatureSensor.__init__"></a><div id="TemperatureSensor.__init__-def"><a name="L15"></a><tt class="py-lineno">15</tt> <a class="py-toggle" href="#" id="TemperatureSensor.__init__-toggle" onclick="return toggle('TemperatureSensor.__init__');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.php#__init__">__init__</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="TemperatureSensor.__init__-collapsed" style="display:none;" pad="++" indent="++++++++"></div><div id="TemperatureSensor.__init__-expanded"><a name="L16"></a><tt class="py-lineno">16</tt>  <tt class="py-line">        <tt class="py-docstring">'''</tt> </tt>
<a name="L17"></a><tt class="py-lineno">17</tt>  <tt class="py-line"><tt class="py-docstring">        Constructor</tt> </tt>
<a name="L18"></a><tt class="py-lineno">18</tt>  <tt class="py-line"><tt class="py-docstring">        '''</tt> </tt>
<a name="L19"></a><tt class="py-lineno">19</tt>  <tt class="py-line">        <tt id="link-4" class="py-name"><a title="libsensorPy.abstractclass.sensor.Sensor" class="py-name" href="#" onclick="return doclink('link-4', 'Sensor', 'link-1');">Sensor</a></tt><tt class="py-op">.</tt><tt id="link-5" class="py-name" targets="Method libsensorPy.abstractclass.abstractActuatorFactory.AbstractActuatorFactory.__init__()=libsensorPy.abstractclass.abstractActuatorFactory.AbstractActuatorFactory-class.php#__init__,Method libsensorPy.abstractclass.abstractEvent.AbstractEvent.__init__()=libsensorPy.abstractclass.abstractEvent.AbstractEvent-class.php#__init__,Method libsensorPy.abstractclass.abstractSensorFactory.AbstractSensorFactory.__init__()=libsensorPy.abstractclass.abstractSensorFactory.AbstractSensorFactory-class.php#__init__,Method libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.__init__()=libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor-class.php#__init__,Method libsensorPy.abstractclass.actuator.Actuator.__init__()=libsensorPy.abstractclass.actuator.Actuator-class.php#__init__,Method libsensorPy.abstractclass.altitudeSensor.AltitudeSensor.__init__()=libsensorPy.abstractclass.altitudeSensor.AltitudeSensor-class.php#__init__,Method libsensorPy.abstractclass.dcMotorActuator.DCMotorActuator.__init__()=libsensorPy.abstractclass.dcMotorActuator.DCMotorActuator-class.php#__init__,Method libsensorPy.abstractclass.eventObserver.EventObserver.__init__()=libsensorPy.abstractclass.eventObserver.EventObserver-class.php#__init__,Method libsensorPy.abstractclass.humiditySensor.HumiditySensor.__init__()=libsensorPy.abstractclass.humiditySensor.HumiditySensor-class.php#__init__,Method libsensorPy.abstractclass.lightSensor.LightSensor.__init__()=libsensorPy.abstractclass.lightSensor.LightSensor-class.php#__init__,Method libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor.__init__()=libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor-class.php#__init__,Method libsensorPy.abstractclass.motionSensor.MotionSensor.__init__()=libsensorPy.abstractclass.motionSensor.MotionSensor-class.php#__init__,Method libsensorPy.abstractclass.motorActuator.MotorActuator.__init__()=libsensorPy.abstractclass.motorActuator.MotorActuator-class.php#__init__,Method libsensorPy.abstractclass.pressureSensor.PressureSensor.__init__()=libsensorPy.abstractclass.pressureSensor.PressureSensor-class.php#__init__,Method libsensorPy.abstractclass.sensor.Sensor.__init__()=libsensorPy.abstractclass.sensor.Sensor-class.php#__init__,Method libsensorPy.abstractclass.servoMotorActuator.ServoMotorActuator.__init__()=libsensorPy.abstractclass.servoMotorActuator.ServoMotorActuator-class.php#__init__,Method libsensorPy.abstractclass.stepperMotorActuator.StepperMotorActuator.__init__()=libsensorPy.abstractclass.stepperMotorActuator.StepperMotorActuator-class.php#__init__,Method libsensorPy.abstractclass.temperatureSensor.TemperatureSensor.__init__()=libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.php#__init__,Method libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor.__init__()=libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor-class.php#__init__,Method libsensorPy.compositesensor.bmp085Composite.BMP085Composite.__init__()=libsensorPy.compositesensor.bmp085Composite.BMP085Composite-class.php#__init__,Method libsensorPy.compositesensor.dht11Composite.DHT11Composite.__init__()=libsensorPy.compositesensor.dht11Composite.DHT11Composite-class.php#__init__,Method libsensorPy.compositesensor.dht22Composite.DHT22Composite.__init__()=libsensorPy.compositesensor.dht22Composite.DHT22Composite-class.php#__init__,Method libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite.__init__()=libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite-class.php#__init__,Method libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48.__init__()=libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48-class.php#__init__,Method libsensorPy.concreteevent.temperatureEvent.TemperatureEvent.__init__()=libsensorPy.concreteevent.temperatureEvent.TemperatureEvent-class.php#__init__,Method libsensorPy.concretefactory.accelerometerSensorFactory.AccelerometerSensorFactory.__init__()=libsensorPy.concretefactory.accelerometerSensorFactory.AccelerometerSensorFactory-class.php#__init__,Method libsensorPy.concretefactory.altitudeSensorFactory.AltitudeSensorFactory.__init__()=libsensorPy.concretefactory.altitudeSensorFactory.AltitudeSensorFactory-class.php#__init__,Method libsensorPy.concretefactory.compositeSensorFactory.CompositeSensorFactory.__init__()=libsensorPy.concretefactory.compositeSensorFactory.CompositeSensorFactory-class.php#__init__,Method libsensorPy.concretefactory.humiditySensorFactory.HumididtySensorFactory.__init__()=libsensorPy.concretefactory.humiditySensorFactory.HumididtySensorFactory-class.php#__init__,Method libsensorPy.concretefactory.lightSensorFactory.LightSensorFactory.__init__()=libsensorPy.concretefactory.lightSensorFactory.LightSensorFactory-class.php#__init__,Method libsensorPy.concretefactory.magnetometerSensorFactory.MagnetometerSensorFactory.__init__()=libsensorPy.concretefactory.magnetometerSensorFactory.MagnetometerSensorFactory-class.php#__init__,Method libsensorPy.concretefactory.motionSensorFactory.MotionSensorFactory.__init__()=libsensorPy.concretefactory.motionSensorFactory.MotionSensorFactory-class.php#__init__,Method libsensorPy.concretefactory.pressureSensorFactory.PressureSensorFactory.__init__()=libsensorPy.concretefactory.pressureSensorFactory.PressureSensorFactory-class.php#__init__,Method libsensorPy.concretefactory.stepperMotorActuatorFactory.StepperMotorActuatorFactory.__init__()=libsensorPy.concretefactory.stepperMotorActuatorFactory.StepperMotorActuatorFactory-class.php#__init__,Method libsensorPy.concretefactory.temperatureSensorFactory.TemperatureSensorFactory.__init__()=libsensorPy.concretefactory.temperatureSensorFactory.TemperatureSensorFactory-class.php#__init__,Method libsensorPy.concretefactory.ultrasonicSensorFactory.UltrasonicSensorFactory.__init__()=libsensorPy.concretefactory.ultrasonicSensorFactory.UltrasonicSensorFactory-class.php#__init__,Method libsensorPy.concreteobserver.currentConditionDisplay.CurrentConditionDisplay.__init__()=libsensorPy.concreteobserver.currentConditionDisplay.CurrentConditionDisplay-class.php#__init__,Method libsensorPy.concretesensor.adxl345.ADXL345.__init__()=libsensorPy.concretesensor.adxl345.ADXL345-class.php#__init__,Method libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude.__init__()=libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude-class.php#__init__,Method libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure.__init__()=libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure-class.php#__init__,Method libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature.__init__()=libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature-class.php#__init__,Method libsensorPy.concretesensor.dht11Humidity.DHT11Humidity.__init__()=libsensorPy.concretesensor.dht11Humidity.DHT11Humidity-class.php#__init__,Method libsensorPy.concretesensor.dht11Temperature.DHT11Temperature.__init__()=libsensorPy.concretesensor.dht11Temperature.DHT11Temperature-class.php#__init__,Method libsensorPy.concretesensor.dht22Humidity.DHT22Humidity.__init__()=libsensorPy.concretesensor.dht22Humidity.DHT22Humidity-class.php#__init__,Method libsensorPy.concretesensor.dht22Temperature.DHT22Temperature.__init__()=libsensorPy.concretesensor.dht22Temperature.DHT22Temperature-class.php#__init__,Method libsensorPy.concretesensor.hmc5883l.HMC5883L.__init__()=libsensorPy.concretesensor.hmc5883l.HMC5883L-class.php#__init__,Method libsensorPy.concretesensor.hysrf05.HYSRF05.__init__()=libsensorPy.concretesensor.hysrf05.HYSRF05-class.php#__init__,Method libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer.__init__()=libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer-class.php#__init__,Method libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer.__init__()=libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer-class.php#__init__,Method libsensorPy.concretesensor.parallaxPing.ParallaxPing.__init__()=libsensorPy.concretesensor.parallaxPing.ParallaxPing-class.php#__init__,Method libsensorPy.concretesensor.pir.PIR.__init__()=libsensorPy.concretesensor.pir.PIR-class.php#__init__,Method libsensorPy.concretesensor.srf04.SRF04.__init__()=libsensorPy.concretesensor.srf04.SRF04-class.php#__init__,Method libsensorPy.concretesensor.srf05.SRF05.__init__()=libsensorPy.concretesensor.srf05.SRF05-class.php#__init__,Method libsensorPy.concretesensor.tcs34725.TCS34725.__init__()=libsensorPy.concretesensor.tcs34725.TCS34725-class.php#__init__,Method libsensorPy.concretesensor.urm37.URM37.__init__()=libsensorPy.concretesensor.urm37.URM37-class.php#__init__,Method libsensorPy.extension.extendedUltrasonicSensorFactory.ExtendedUltrasonicSensorFactory.__init__()=libsensorPy.extension.extendedUltrasonicSensorFactory.ExtendedUltrasonicSensorFactory-class.php#__init__,Method libsensorPy.extension.hcsr04.HCSR04.__init__()=libsensorPy.extension.hcsr04.HCSR04-class.php#__init__,Method libsensorPy.utils.pycomms.PyComms.__init__()=libsensorPy.utils.pycomms.PyComms-class.php#__init__"><a title="libsensorPy.abstractclass.abstractActuatorFactory.AbstractActuatorFactory.__init__
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
libsensorPy.utils.pycomms.PyComms.__init__" class="py-name" href="#" onclick="return doclink('link-5', '__init__', 'link-5');">__init__</a></tt><tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">)</tt> </tt>
</div><a name="L20"></a><tt class="py-lineno">20</tt>  <tt class="py-line"> </tt>
<a name="L21"></a><tt class="py-lineno">21</tt>  <tt class="py-line">    <tt class="py-decorator">@</tt><tt class="py-decorator">abc</tt><tt class="py-op">.</tt><tt class="py-name">abstractmethod</tt> </tt>
<a name="TemperatureSensor.setup"></a><div id="TemperatureSensor.setup-def"><a name="L22"></a><tt class="py-lineno">22</tt> <a class="py-toggle" href="#" id="TemperatureSensor.setup-toggle" onclick="return toggle('TemperatureSensor.setup');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.php#setup">setup</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="TemperatureSensor.setup-collapsed" style="display:none;" pad="++" indent="++++++++"></div><div id="TemperatureSensor.setup-expanded"><a name="L23"></a><tt class="py-lineno">23</tt>  <tt class="py-line">        <tt class="py-keyword">pass</tt> </tt>
</div><a name="L24"></a><tt class="py-lineno">24</tt>  <tt class="py-line">             </tt>
<a name="L25"></a><tt class="py-lineno">25</tt>  <tt class="py-line">    <tt class="py-decorator">@</tt><tt class="py-decorator">abc</tt><tt class="py-op">.</tt><tt class="py-name">abstractmethod</tt> </tt>
<a name="TemperatureSensor.getTemperature"></a><div id="TemperatureSensor.getTemperature-def"><a name="L26"></a><tt class="py-lineno">26</tt> <a class="py-toggle" href="#" id="TemperatureSensor.getTemperature-toggle" onclick="return toggle('TemperatureSensor.getTemperature');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.php#getTemperature">getTemperature</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="TemperatureSensor.getTemperature-collapsed" style="display:none;" pad="++" indent="++++++++"></div><div id="TemperatureSensor.getTemperature-expanded"><a name="L27"></a><tt class="py-lineno">27</tt>  <tt class="py-line">        <tt class="py-docstring">"""Return the temperature in Celsius."""</tt> </tt>
<a name="L28"></a><tt class="py-lineno">28</tt>  <tt class="py-line">        <tt class="py-keyword">pass</tt> </tt>
</div><a name="L29"></a><tt class="py-lineno">29</tt>  <tt class="py-line"> </tt>
<a name="TemperatureSensor.getTemperatureInFahrenheit"></a><div id="TemperatureSensor.getTemperatureInFahrenheit-def"><a name="L30"></a><tt class="py-lineno">30</tt> <a class="py-toggle" href="#" id="TemperatureSensor.getTemperatureInFahrenheit-toggle" onclick="return toggle('TemperatureSensor.getTemperatureInFahrenheit');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.php#getTemperatureInFahrenheit">getTemperatureInFahrenheit</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="TemperatureSensor.getTemperatureInFahrenheit-collapsed" style="display:none;" pad="++" indent="++++++++"></div><div id="TemperatureSensor.getTemperatureInFahrenheit-expanded"><a name="L31"></a><tt class="py-lineno">31</tt>  <tt class="py-line">        <tt class="py-docstring">"""Return the temperature in Fahrenheit."""</tt> </tt>
<a name="L32"></a><tt class="py-lineno">32</tt>  <tt class="py-line">        <tt class="py-keyword">return</tt> <tt class="py-name">str</tt><tt class="py-op">(</tt><tt class="py-op">(</tt><tt class="py-name">float</tt><tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">.</tt><tt id="link-6" class="py-name" targets="Method libsensorPy.abstractclass.temperatureSensor.TemperatureSensor.getTemperature()=libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.php#getTemperature,Method libsensorPy.compositesensor.bmp085Composite.BMP085Composite.getTemperature()=libsensorPy.compositesensor.bmp085Composite.BMP085Composite-class.php#getTemperature,Method libsensorPy.compositesensor.dht11Composite.DHT11Composite.getTemperature()=libsensorPy.compositesensor.dht11Composite.DHT11Composite-class.php#getTemperature,Method libsensorPy.compositesensor.dht22Composite.DHT22Composite.getTemperature()=libsensorPy.compositesensor.dht22Composite.DHT22Composite-class.php#getTemperature,Method libsensorPy.concreteevent.temperatureEvent.TemperatureEvent.getTemperature()=libsensorPy.concreteevent.temperatureEvent.TemperatureEvent-class.php#getTemperature,Method libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature.getTemperature()=libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature-class.php#getTemperature,Method libsensorPy.concretesensor.dht11Temperature.DHT11Temperature.getTemperature()=libsensorPy.concretesensor.dht11Temperature.DHT11Temperature-class.php#getTemperature,Method libsensorPy.concretesensor.dht22Temperature.DHT22Temperature.getTemperature()=libsensorPy.concretesensor.dht22Temperature.DHT22Temperature-class.php#getTemperature"><a title="libsensorPy.abstractclass.temperatureSensor.TemperatureSensor.getTemperature
libsensorPy.compositesensor.bmp085Composite.BMP085Composite.getTemperature
libsensorPy.compositesensor.dht11Composite.DHT11Composite.getTemperature
libsensorPy.compositesensor.dht22Composite.DHT22Composite.getTemperature
libsensorPy.concreteevent.temperatureEvent.TemperatureEvent.getTemperature
libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature.getTemperature
libsensorPy.concretesensor.dht11Temperature.DHT11Temperature.getTemperature
libsensorPy.concretesensor.dht22Temperature.DHT22Temperature.getTemperature" class="py-name" href="#" onclick="return doclink('link-6', 'getTemperature', 'link-6');">getTemperature</a></tt><tt class="py-op">(</tt><tt class="py-op">)</tt><tt class="py-op">)</tt> <tt class="py-op">*</tt> <tt class="py-number">9</tt> <tt class="py-op">/</tt><tt class="py-number">5.0</tt> <tt class="py-op">)</tt> <tt class="py-op">+</tt> <tt class="py-number">32</tt><tt class="py-op">)</tt> </tt>
</div><a name="L33"></a><tt class="py-lineno">33</tt>  <tt class="py-line"> </tt>
<a name="TemperatureSensor.getTemperatureInKelvin"></a><div id="TemperatureSensor.getTemperatureInKelvin-def"><a name="L34"></a><tt class="py-lineno">34</tt> <a class="py-toggle" href="#" id="TemperatureSensor.getTemperatureInKelvin-toggle" onclick="return toggle('TemperatureSensor.getTemperatureInKelvin');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.php#getTemperatureInKelvin">getTemperatureInKelvin</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="TemperatureSensor.getTemperatureInKelvin-collapsed" style="display:none;" pad="++" indent="++++++++"></div><div id="TemperatureSensor.getTemperatureInKelvin-expanded"><a name="L35"></a><tt class="py-lineno">35</tt>  <tt class="py-line">        <tt class="py-docstring">"""Return the temperature in Kelvin."""</tt> </tt>
<a name="L36"></a><tt class="py-lineno">36</tt>  <tt class="py-line">        <tt class="py-keyword">return</tt> <tt class="py-name">str</tt><tt class="py-op">(</tt><tt class="py-op">(</tt><tt class="py-name">float</tt><tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">.</tt><tt id="link-7" class="py-name"><a title="libsensorPy.abstractclass.temperatureSensor.TemperatureSensor.getTemperature
libsensorPy.compositesensor.bmp085Composite.BMP085Composite.getTemperature
libsensorPy.compositesensor.dht11Composite.DHT11Composite.getTemperature
libsensorPy.compositesensor.dht22Composite.DHT22Composite.getTemperature
libsensorPy.concreteevent.temperatureEvent.TemperatureEvent.getTemperature
libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature.getTemperature
libsensorPy.concretesensor.dht11Temperature.DHT11Temperature.getTemperature
libsensorPy.concretesensor.dht22Temperature.DHT22Temperature.getTemperature" class="py-name" href="#" onclick="return doclink('link-7', 'getTemperature', 'link-6');">getTemperature</a></tt><tt class="py-op">(</tt><tt class="py-op">)</tt><tt class="py-op">)</tt> <tt class="py-op">+</tt> <tt class="py-number">273.15</tt><tt class="py-op">)</tt><tt class="py-op">)</tt> </tt>
</div><a name="L37"></a><tt class="py-lineno">37</tt>  <tt class="py-line"> </tt>
<a name="TemperatureSensor._bin2dec"></a><div id="TemperatureSensor._bin2dec-def"><a name="L38"></a><tt class="py-lineno">38</tt> <a class="py-toggle" href="#" id="TemperatureSensor._bin2dec-toggle" onclick="return toggle('TemperatureSensor._bin2dec');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.php#_bin2dec">_bin2dec</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">,</tt><tt class="py-param">string_num</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="TemperatureSensor._bin2dec-collapsed" style="display:none;" pad="++" indent="++++++++"></div><div id="TemperatureSensor._bin2dec-expanded"><a name="L39"></a><tt class="py-lineno">39</tt>  <tt class="py-line">        <tt class="py-keyword">return</tt> <tt class="py-name">str</tt><tt class="py-op">(</tt><tt class="py-name">int</tt><tt class="py-op">(</tt><tt class="py-name">string_num</tt><tt class="py-op">,</tt> <tt class="py-number">2</tt><tt class="py-op">)</tt><tt class="py-op">)</tt> </tt>
</div></div><a name="L40"></a><tt class="py-lineno">40</tt>  <tt class="py-line"> </tt><script type="text/javascript">
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
        href="libsensorPy-module.php">Home</a>&nbsp;&nbsp;&nbsp;</th>

  <!-- Tree link -->
      <th>&nbsp;&nbsp;&nbsp;<a
        href="module-tree.php">Trees</a>&nbsp;&nbsp;&nbsp;</th>

  <!-- Index link -->
      <th>&nbsp;&nbsp;&nbsp;<a
        href="identifier-index.php">Indices</a>&nbsp;&nbsp;&nbsp;</th>

  <!-- Help link -->
      <th>&nbsp;&nbsp;&nbsp;<a
        href="help.php">Help</a>&nbsp;&nbsp;&nbsp;</th>

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
