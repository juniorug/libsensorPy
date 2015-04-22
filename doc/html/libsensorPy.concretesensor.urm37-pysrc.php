
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>libsensorPy.concretesensor.urm37</title>
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
        <a href="libsensorPy.concretesensor-module.php">Package&nbsp;concretesensor</a> ::
        Module&nbsp;urm37
      </span>
    </td>
    <td>
      <table cellpadding="0" cellspacing="0">
        <!-- hide/show private -->
        <tr><td align="right"><span class="options">[<a href="javascript:void(0);" class="privatelink"
    onclick="toggle_private();">hide&nbsp;private</a>]</span></td></tr>
        <tr><td align="right"><span class="options"
            >[<a href="frames.php" target="_top">frames</a
            >]&nbsp;|&nbsp;<a href="libsensorPy.concretesensor.urm37-pysrc.php"
            target="_top">no&nbsp;frames</a>]</span></td></tr>
      </table>
    </td>
  </tr>
</table>
<h1 class="epydoc">Source Code for <a href="libsensorPy.concretesensor.urm37-module.php">Module libsensorPy.concretesensor.urm37</a></h1>
<pre class="py-src">
<a name="L1"></a><tt class="py-lineno"> 1</tt>  <tt class="py-line"><tt class="py-docstring">'''</tt> </tt>
<a name="L2"></a><tt class="py-lineno"> 2</tt>  <tt class="py-line"><tt class="py-docstring">Created on 17/03/2015</tt> </tt>
<a name="L3"></a><tt class="py-lineno"> 3</tt>  <tt class="py-line"><tt class="py-docstring"></tt> </tt>
<a name="L4"></a><tt class="py-lineno"> 4</tt>  <tt class="py-line"><tt class="py-docstring">@author: Junior Mascarenhas</tt> </tt>
<a name="L5"></a><tt class="py-lineno"> 5</tt>  <tt class="py-line"><tt class="py-docstring">'''</tt> </tt>
<a name="L6"></a><tt class="py-lineno"> 6</tt>  <tt class="py-line"><tt class="py-keyword">import</tt> <tt class="py-name">RPi</tt><tt class="py-op">.</tt><tt class="py-name">GPIO</tt> <tt class="py-keyword">as</tt> <tt class="py-name">GPIO</tt> </tt>
<a name="L7"></a><tt class="py-lineno"> 7</tt>  <tt class="py-line"><tt class="py-keyword">import</tt> <tt class="py-name">serial</tt> </tt>
<a name="L8"></a><tt class="py-lineno"> 8</tt>  <tt class="py-line"><tt class="py-keyword">import</tt> <tt class="py-name">time</tt> </tt>
<a name="L9"></a><tt class="py-lineno"> 9</tt>  <tt class="py-line"><tt class="py-keyword">from</tt> <tt id="link-0" class="py-name" targets="Package libsensorPy.abstractclass=libsensorPy.abstractclass-module.php"><a title="libsensorPy.abstractclass" class="py-name" href="#" onclick="return doclink('link-0', 'abstractclass', 'link-0');">abstractclass</a></tt><tt class="py-op">.</tt><tt id="link-1" class="py-name" targets="Module libsensorPy.abstractclass.ultrasonicSensor=libsensorPy.abstractclass.ultrasonicSensor-module.php"><a title="libsensorPy.abstractclass.ultrasonicSensor" class="py-name" href="#" onclick="return doclink('link-1', 'ultrasonicSensor', 'link-1');">ultrasonicSensor</a></tt> <tt class="py-keyword">import</tt> <tt id="link-2" class="py-name" targets="Class libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor=libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor-class.php"><a title="libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor" class="py-name" href="#" onclick="return doclink('link-2', 'UltrasonicSensor', 'link-2');">UltrasonicSensor</a></tt> </tt>
<a name="L10"></a><tt class="py-lineno">10</tt>  <tt class="py-line"> </tt>
<a name="URM37"></a><div id="URM37-def"><a name="L11"></a><tt class="py-lineno">11</tt> <a class="py-toggle" href="#" id="URM37-toggle" onclick="return toggle('URM37');">-</a><tt class="py-line"><tt class="py-keyword">class</tt> <a class="py-def-name" href="libsensorPy.concretesensor.urm37.URM37-class.php">URM37</a><tt class="py-op">(</tt><tt class="py-base-class">UltrasonicSensor</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="URM37-collapsed" style="display:none;" pad="++" indent="++++"></div><div id="URM37-expanded"><a name="L12"></a><tt class="py-lineno">12</tt>  <tt class="py-line">    <tt class="py-docstring">'''</tt> </tt>
<a name="L13"></a><tt class="py-lineno">13</tt>  <tt class="py-line"><tt class="py-docstring">    classdocs</tt> </tt>
<a name="L14"></a><tt class="py-lineno">14</tt>  <tt class="py-line"><tt class="py-docstring">    '''</tt> </tt>
<a name="L15"></a><tt class="py-lineno">15</tt>  <tt class="py-line"> </tt>
<a name="URM37.__init__"></a><div id="URM37.__init__-def"><a name="L16"></a><tt class="py-lineno">16</tt> <a class="py-toggle" href="#" id="URM37.__init__-toggle" onclick="return toggle('URM37.__init__');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.concretesensor.urm37.URM37-class.php#__init__">__init__</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">,</tt><tt class="py-param">trigger</tt><tt class="py-op">=</tt><tt class="py-number">18</tt><tt class="py-op">,</tt><tt class="py-param">echo</tt><tt class="py-op">=</tt><tt class="py-number">27</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="URM37.__init__-collapsed" style="display:none;" pad="++" indent="++++++++"></div><div id="URM37.__init__-expanded"><a name="L17"></a><tt class="py-lineno">17</tt>  <tt class="py-line">        <tt class="py-docstring">'''</tt> </tt>
<a name="L18"></a><tt class="py-lineno">18</tt>  <tt class="py-line"><tt class="py-docstring">        Constructor</tt> </tt>
<a name="L19"></a><tt class="py-lineno">19</tt>  <tt class="py-line"><tt class="py-docstring">        '''</tt> </tt>
<a name="L20"></a><tt class="py-lineno">20</tt>  <tt class="py-line">        <tt id="link-3" class="py-name"><a title="libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor" class="py-name" href="#" onclick="return doclink('link-3', 'UltrasonicSensor', 'link-2');">UltrasonicSensor</a></tt><tt class="py-op">.</tt><tt id="link-4" class="py-name" targets="Method libsensorPy.abstractclass.abstractActuatorFactory.AbstractActuatorFactory.__init__()=libsensorPy.abstractclass.abstractActuatorFactory.AbstractActuatorFactory-class.php#__init__,Method libsensorPy.abstractclass.abstractEvent.AbstractEvent.__init__()=libsensorPy.abstractclass.abstractEvent.AbstractEvent-class.php#__init__,Method libsensorPy.abstractclass.abstractSensorFactory.AbstractSensorFactory.__init__()=libsensorPy.abstractclass.abstractSensorFactory.AbstractSensorFactory-class.php#__init__,Method libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.__init__()=libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor-class.php#__init__,Method libsensorPy.abstractclass.actuator.Actuator.__init__()=libsensorPy.abstractclass.actuator.Actuator-class.php#__init__,Method libsensorPy.abstractclass.altitudeSensor.AltitudeSensor.__init__()=libsensorPy.abstractclass.altitudeSensor.AltitudeSensor-class.php#__init__,Method libsensorPy.abstractclass.dcMotorActuator.DCMotorActuator.__init__()=libsensorPy.abstractclass.dcMotorActuator.DCMotorActuator-class.php#__init__,Method libsensorPy.abstractclass.eventObserver.EventObserver.__init__()=libsensorPy.abstractclass.eventObserver.EventObserver-class.php#__init__,Method libsensorPy.abstractclass.humiditySensor.HumiditySensor.__init__()=libsensorPy.abstractclass.humiditySensor.HumiditySensor-class.php#__init__,Method libsensorPy.abstractclass.lightSensor.LightSensor.__init__()=libsensorPy.abstractclass.lightSensor.LightSensor-class.php#__init__,Method libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor.__init__()=libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor-class.php#__init__,Method libsensorPy.abstractclass.motionSensor.MotionSensor.__init__()=libsensorPy.abstractclass.motionSensor.MotionSensor-class.php#__init__,Method libsensorPy.abstractclass.motorActuator.MotorActuator.__init__()=libsensorPy.abstractclass.motorActuator.MotorActuator-class.php#__init__,Method libsensorPy.abstractclass.pressureSensor.PressureSensor.__init__()=libsensorPy.abstractclass.pressureSensor.PressureSensor-class.php#__init__,Method libsensorPy.abstractclass.sensor.Sensor.__init__()=libsensorPy.abstractclass.sensor.Sensor-class.php#__init__,Method libsensorPy.abstractclass.servoMotorActuator.ServoMotorActuator.__init__()=libsensorPy.abstractclass.servoMotorActuator.ServoMotorActuator-class.php#__init__,Method libsensorPy.abstractclass.stepperMotorActuator.StepperMotorActuator.__init__()=libsensorPy.abstractclass.stepperMotorActuator.StepperMotorActuator-class.php#__init__,Method libsensorPy.abstractclass.temperatureSensor.TemperatureSensor.__init__()=libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.php#__init__,Method libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor.__init__()=libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor-class.php#__init__,Method libsensorPy.compositesensor.bmp085Composite.BMP085Composite.__init__()=libsensorPy.compositesensor.bmp085Composite.BMP085Composite-class.php#__init__,Method libsensorPy.compositesensor.dht11Composite.DHT11Composite.__init__()=libsensorPy.compositesensor.dht11Composite.DHT11Composite-class.php#__init__,Method libsensorPy.compositesensor.dht22Composite.DHT22Composite.__init__()=libsensorPy.compositesensor.dht22Composite.DHT22Composite-class.php#__init__,Method libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite.__init__()=libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite-class.php#__init__,Method libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48.__init__()=libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48-class.php#__init__,Method libsensorPy.concreteevent.temperatureEvent.TemperatureEvent.__init__()=libsensorPy.concreteevent.temperatureEvent.TemperatureEvent-class.php#__init__,Method libsensorPy.concretefactory.accelerometerSensorFactory.AccelerometerSensorFactory.__init__()=libsensorPy.concretefactory.accelerometerSensorFactory.AccelerometerSensorFactory-class.php#__init__,Method libsensorPy.concretefactory.altitudeSensorFactory.AltitudeSensorFactory.__init__()=libsensorPy.concretefactory.altitudeSensorFactory.AltitudeSensorFactory-class.php#__init__,Method libsensorPy.concretefactory.compositeSensorFactory.CompositeSensorFactory.__init__()=libsensorPy.concretefactory.compositeSensorFactory.CompositeSensorFactory-class.php#__init__,Method libsensorPy.concretefactory.humiditySensorFactory.HumididtySensorFactory.__init__()=libsensorPy.concretefactory.humiditySensorFactory.HumididtySensorFactory-class.php#__init__,Method libsensorPy.concretefactory.lightSensorFactory.LightSensorFactory.__init__()=libsensorPy.concretefactory.lightSensorFactory.LightSensorFactory-class.php#__init__,Method libsensorPy.concretefactory.magnetometerSensorFactory.MagnetometerSensorFactory.__init__()=libsensorPy.concretefactory.magnetometerSensorFactory.MagnetometerSensorFactory-class.php#__init__,Method libsensorPy.concretefactory.motionSensorFactory.MotionSensorFactory.__init__()=libsensorPy.concretefactory.motionSensorFactory.MotionSensorFactory-class.php#__init__,Method libsensorPy.concretefactory.pressureSensorFactory.PressureSensorFactory.__init__()=libsensorPy.concretefactory.pressureSensorFactory.PressureSensorFactory-class.php#__init__,Method libsensorPy.concretefactory.stepperMotorActuatorFactory.StepperMotorActuatorFactory.__init__()=libsensorPy.concretefactory.stepperMotorActuatorFactory.StepperMotorActuatorFactory-class.php#__init__,Method libsensorPy.concretefactory.temperatureSensorFactory.TemperatureSensorFactory.__init__()=libsensorPy.concretefactory.temperatureSensorFactory.TemperatureSensorFactory-class.php#__init__,Method libsensorPy.concretefactory.ultrasonicSensorFactory.UltrasonicSensorFactory.__init__()=libsensorPy.concretefactory.ultrasonicSensorFactory.UltrasonicSensorFactory-class.php#__init__,Method libsensorPy.concreteobserver.currentConditionDisplay.CurrentConditionDisplay.__init__()=libsensorPy.concreteobserver.currentConditionDisplay.CurrentConditionDisplay-class.php#__init__,Method libsensorPy.concretesensor.adxl345.ADXL345.__init__()=libsensorPy.concretesensor.adxl345.ADXL345-class.php#__init__,Method libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude.__init__()=libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude-class.php#__init__,Method libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure.__init__()=libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure-class.php#__init__,Method libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature.__init__()=libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature-class.php#__init__,Method libsensorPy.concretesensor.dht11Humidity.DHT11Humidity.__init__()=libsensorPy.concretesensor.dht11Humidity.DHT11Humidity-class.php#__init__,Method libsensorPy.concretesensor.dht11Temperature.DHT11Temperature.__init__()=libsensorPy.concretesensor.dht11Temperature.DHT11Temperature-class.php#__init__,Method libsensorPy.concretesensor.dht22Humidity.DHT22Humidity.__init__()=libsensorPy.concretesensor.dht22Humidity.DHT22Humidity-class.php#__init__,Method libsensorPy.concretesensor.dht22Temperature.DHT22Temperature.__init__()=libsensorPy.concretesensor.dht22Temperature.DHT22Temperature-class.php#__init__,Method libsensorPy.concretesensor.hmc5883l.HMC5883L.__init__()=libsensorPy.concretesensor.hmc5883l.HMC5883L-class.php#__init__,Method libsensorPy.concretesensor.hysrf05.HYSRF05.__init__()=libsensorPy.concretesensor.hysrf05.HYSRF05-class.php#__init__,Method libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer.__init__()=libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer-class.php#__init__,Method libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer.__init__()=libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer-class.php#__init__,Method libsensorPy.concretesensor.parallaxPing.ParallaxPing.__init__()=libsensorPy.concretesensor.parallaxPing.ParallaxPing-class.php#__init__,Method libsensorPy.concretesensor.pir.PIR.__init__()=libsensorPy.concretesensor.pir.PIR-class.php#__init__,Method libsensorPy.concretesensor.srf04.SRF04.__init__()=libsensorPy.concretesensor.srf04.SRF04-class.php#__init__,Method libsensorPy.concretesensor.srf05.SRF05.__init__()=libsensorPy.concretesensor.srf05.SRF05-class.php#__init__,Method libsensorPy.concretesensor.tcs34725.TCS34725.__init__()=libsensorPy.concretesensor.tcs34725.TCS34725-class.php#__init__,Method libsensorPy.concretesensor.urm37.URM37.__init__()=libsensorPy.concretesensor.urm37.URM37-class.php#__init__,Method libsensorPy.extension.extendedUltrasonicSensorFactory.ExtendedUltrasonicSensorFactory.__init__()=libsensorPy.extension.extendedUltrasonicSensorFactory.ExtendedUltrasonicSensorFactory-class.php#__init__,Method libsensorPy.extension.hcsr04.HCSR04.__init__()=libsensorPy.extension.hcsr04.HCSR04-class.php#__init__,Method libsensorPy.utils.pycomms.PyComms.__init__()=libsensorPy.utils.pycomms.PyComms-class.php#__init__"><a title="libsensorPy.abstractclass.abstractActuatorFactory.AbstractActuatorFactory.__init__
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
libsensorPy.utils.pycomms.PyComms.__init__" class="py-name" href="#" onclick="return doclink('link-4', '__init__', 'link-4');">__init__</a></tt><tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">)</tt> </tt>
<a name="L21"></a><tt class="py-lineno">21</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt id="link-5" class="py-name" targets="Method libsensorPy.concretesensor.dht22Humidity.DHT22Humidity.__trigger()=libsensorPy.concretesensor.dht22Humidity.DHT22Humidity-class.php#__trigger,Method libsensorPy.concretesensor.dht22Temperature.DHT22Temperature.__trigger()=libsensorPy.concretesensor.dht22Temperature.DHT22Temperature-class.php#__trigger"><a title="libsensorPy.concretesensor.dht22Humidity.DHT22Humidity.__trigger
libsensorPy.concretesensor.dht22Temperature.DHT22Temperature.__trigger" class="py-name" href="#" onclick="return doclink('link-5', '__trigger', 'link-5');">__trigger</a></tt> <tt class="py-op">=</tt> <tt class="py-name">trigger</tt> </tt>
<a name="L22"></a><tt class="py-lineno">22</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__echo</tt> <tt class="py-op">=</tt> <tt class="py-name">echo</tt> </tt>
<a name="L23"></a><tt class="py-lineno">23</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt id="link-6" class="py-name" targets="Method libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.setup()=libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor-class.php#setup,Method libsensorPy.abstractclass.actuator.Actuator.setup()=libsensorPy.abstractclass.actuator.Actuator-class.php#setup,Method libsensorPy.abstractclass.altitudeSensor.AltitudeSensor.setup()=libsensorPy.abstractclass.altitudeSensor.AltitudeSensor-class.php#setup,Method libsensorPy.abstractclass.humiditySensor.HumiditySensor.setup()=libsensorPy.abstractclass.humiditySensor.HumiditySensor-class.php#setup,Method libsensorPy.abstractclass.lightSensor.LightSensor.setup()=libsensorPy.abstractclass.lightSensor.LightSensor-class.php#setup,Method libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor.setup()=libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor-class.php#setup,Method libsensorPy.abstractclass.motionSensor.MotionSensor.setup()=libsensorPy.abstractclass.motionSensor.MotionSensor-class.php#setup,Method libsensorPy.abstractclass.motorActuator.MotorActuator.setup()=libsensorPy.abstractclass.motorActuator.MotorActuator-class.php#setup,Method libsensorPy.abstractclass.pressureSensor.PressureSensor.setup()=libsensorPy.abstractclass.pressureSensor.PressureSensor-class.php#setup,Method libsensorPy.abstractclass.sensor.Sensor.setup()=libsensorPy.abstractclass.sensor.Sensor-class.php#setup,Method libsensorPy.abstractclass.temperatureSensor.TemperatureSensor.setup()=libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.php#setup,Method libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor.setup()=libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor-class.php#setup,Method libsensorPy.compositesensor.bmp085Composite.BMP085Composite.setup()=libsensorPy.compositesensor.bmp085Composite.BMP085Composite-class.php#setup,Method libsensorPy.compositesensor.dht11Composite.DHT11Composite.setup()=libsensorPy.compositesensor.dht11Composite.DHT11Composite-class.php#setup,Method libsensorPy.compositesensor.dht22Composite.DHT22Composite.setup()=libsensorPy.compositesensor.dht22Composite.DHT22Composite-class.php#setup,Method libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite.setup()=libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite-class.php#setup,Method libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48.setup()=libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48-class.php#setup,Method libsensorPy.concretesensor.adxl345.ADXL345.setup()=libsensorPy.concretesensor.adxl345.ADXL345-class.php#setup,Method libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude.setup()=libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude-class.php#setup,Method libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure.setup()=libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure-class.php#setup,Method libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature.setup()=libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature-class.php#setup,Method libsensorPy.concretesensor.dht11Humidity.DHT11Humidity.setup()=libsensorPy.concretesensor.dht11Humidity.DHT11Humidity-class.php#setup,Method libsensorPy.concretesensor.dht11Temperature.DHT11Temperature.setup()=libsensorPy.concretesensor.dht11Temperature.DHT11Temperature-class.php#setup,Method libsensorPy.concretesensor.dht22Humidity.DHT22Humidity.setup()=libsensorPy.concretesensor.dht22Humidity.DHT22Humidity-class.php#setup,Method libsensorPy.concretesensor.dht22Temperature.DHT22Temperature.setup()=libsensorPy.concretesensor.dht22Temperature.DHT22Temperature-class.php#setup,Method libsensorPy.concretesensor.hmc5883l.HMC5883L.setup()=libsensorPy.concretesensor.hmc5883l.HMC5883L-class.php#setup,Method libsensorPy.concretesensor.hysrf05.HYSRF05.setup()=libsensorPy.concretesensor.hysrf05.HYSRF05-class.php#setup,Method libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer.setup()=libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer-class.php#setup,Method libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer.setup()=libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer-class.php#setup,Method libsensorPy.concretesensor.parallaxPing.ParallaxPing.setup()=libsensorPy.concretesensor.parallaxPing.ParallaxPing-class.php#setup,Method libsensorPy.concretesensor.pir.PIR.setup()=libsensorPy.concretesensor.pir.PIR-class.php#setup,Method libsensorPy.concretesensor.srf04.SRF04.setup()=libsensorPy.concretesensor.srf04.SRF04-class.php#setup,Method libsensorPy.concretesensor.srf05.SRF05.setup()=libsensorPy.concretesensor.srf05.SRF05-class.php#setup,Method libsensorPy.concretesensor.tcs34725.TCS34725.setup()=libsensorPy.concretesensor.tcs34725.TCS34725-class.php#setup,Method libsensorPy.concretesensor.urm37.URM37.setup()=libsensorPy.concretesensor.urm37.URM37-class.php#setup,Method libsensorPy.extension.hcsr04.HCSR04.setup()=libsensorPy.extension.hcsr04.HCSR04-class.php#setup,Module libsensorPy.setup=libsensorPy.setup-module.php"><a title="libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.setup
libsensorPy.abstractclass.actuator.Actuator.setup
libsensorPy.abstractclass.altitudeSensor.AltitudeSensor.setup
libsensorPy.abstractclass.humiditySensor.HumiditySensor.setup
libsensorPy.abstractclass.lightSensor.LightSensor.setup
libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor.setup
libsensorPy.abstractclass.motionSensor.MotionSensor.setup
libsensorPy.abstractclass.motorActuator.MotorActuator.setup
libsensorPy.abstractclass.pressureSensor.PressureSensor.setup
libsensorPy.abstractclass.sensor.Sensor.setup
libsensorPy.abstractclass.temperatureSensor.TemperatureSensor.setup
libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor.setup
libsensorPy.compositesensor.bmp085Composite.BMP085Composite.setup
libsensorPy.compositesensor.dht11Composite.DHT11Composite.setup
libsensorPy.compositesensor.dht22Composite.DHT22Composite.setup
libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite.setup
libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48.setup
libsensorPy.concretesensor.adxl345.ADXL345.setup
libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude.setup
libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure.setup
libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature.setup
libsensorPy.concretesensor.dht11Humidity.DHT11Humidity.setup
libsensorPy.concretesensor.dht11Temperature.DHT11Temperature.setup
libsensorPy.concretesensor.dht22Humidity.DHT22Humidity.setup
libsensorPy.concretesensor.dht22Temperature.DHT22Temperature.setup
libsensorPy.concretesensor.hmc5883l.HMC5883L.setup
libsensorPy.concretesensor.hysrf05.HYSRF05.setup
libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer.setup
libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer.setup
libsensorPy.concretesensor.parallaxPing.ParallaxPing.setup
libsensorPy.concretesensor.pir.PIR.setup
libsensorPy.concretesensor.srf04.SRF04.setup
libsensorPy.concretesensor.srf05.SRF05.setup
libsensorPy.concretesensor.tcs34725.TCS34725.setup
libsensorPy.concretesensor.urm37.URM37.setup
libsensorPy.extension.hcsr04.HCSR04.setup
libsensorPy.setup" class="py-name" href="#" onclick="return doclink('link-6', 'setup', 'link-6');">setup</a></tt><tt class="py-op">(</tt><tt class="py-op">)</tt> </tt>
</div><a name="L24"></a><tt class="py-lineno">24</tt>  <tt class="py-line"> </tt>
<a name="URM37.setup"></a><div id="URM37.setup-def"><a name="L25"></a><tt class="py-lineno">25</tt> <a class="py-toggle" href="#" id="URM37.setup-toggle" onclick="return toggle('URM37.setup');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.concretesensor.urm37.URM37-class.php#setup">setup</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="URM37.setup-collapsed" style="display:none;" pad="++" indent="++++++++"></div><div id="URM37.setup-expanded"><a name="L26"></a><tt class="py-lineno">26</tt>  <tt class="py-line">        <tt class="py-docstring">"""</tt> </tt>
<a name="L27"></a><tt class="py-lineno">27</tt>  <tt class="py-line"><tt class="py-docstring">        Setup the board and GPIO  </tt> </tt>
<a name="L28"></a><tt class="py-lineno">28</tt>  <tt class="py-line"><tt class="py-docstring">        @return: void</tt> </tt>
<a name="L29"></a><tt class="py-lineno">29</tt>  <tt class="py-line"><tt class="py-docstring">        """</tt> </tt>
<a name="L30"></a><tt class="py-lineno">30</tt>  <tt class="py-line">        <tt class="py-name">GPIO</tt><tt class="py-op">.</tt><tt class="py-name">setmode</tt><tt class="py-op">(</tt><tt class="py-name">GPIO</tt><tt class="py-op">.</tt><tt class="py-name">BCM</tt><tt class="py-op">)</tt> </tt>
<a name="L31"></a><tt class="py-lineno">31</tt>  <tt class="py-line">        <tt class="py-name">GPIO</tt><tt class="py-op">.</tt><tt class="py-name">setwarnings</tt><tt class="py-op">(</tt><tt class="py-name">False</tt><tt class="py-op">)</tt> </tt>
<a name="L32"></a><tt class="py-lineno">32</tt>  <tt class="py-line">        <tt class="py-name">GPIO</tt><tt class="py-op">.</tt><tt id="link-7" class="py-name"><a title="libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.setup
libsensorPy.abstractclass.actuator.Actuator.setup
libsensorPy.abstractclass.altitudeSensor.AltitudeSensor.setup
libsensorPy.abstractclass.humiditySensor.HumiditySensor.setup
libsensorPy.abstractclass.lightSensor.LightSensor.setup
libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor.setup
libsensorPy.abstractclass.motionSensor.MotionSensor.setup
libsensorPy.abstractclass.motorActuator.MotorActuator.setup
libsensorPy.abstractclass.pressureSensor.PressureSensor.setup
libsensorPy.abstractclass.sensor.Sensor.setup
libsensorPy.abstractclass.temperatureSensor.TemperatureSensor.setup
libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor.setup
libsensorPy.compositesensor.bmp085Composite.BMP085Composite.setup
libsensorPy.compositesensor.dht11Composite.DHT11Composite.setup
libsensorPy.compositesensor.dht22Composite.DHT22Composite.setup
libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite.setup
libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48.setup
libsensorPy.concretesensor.adxl345.ADXL345.setup
libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude.setup
libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure.setup
libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature.setup
libsensorPy.concretesensor.dht11Humidity.DHT11Humidity.setup
libsensorPy.concretesensor.dht11Temperature.DHT11Temperature.setup
libsensorPy.concretesensor.dht22Humidity.DHT22Humidity.setup
libsensorPy.concretesensor.dht22Temperature.DHT22Temperature.setup
libsensorPy.concretesensor.hmc5883l.HMC5883L.setup
libsensorPy.concretesensor.hysrf05.HYSRF05.setup
libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer.setup
libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer.setup
libsensorPy.concretesensor.parallaxPing.ParallaxPing.setup
libsensorPy.concretesensor.pir.PIR.setup
libsensorPy.concretesensor.srf04.SRF04.setup
libsensorPy.concretesensor.srf05.SRF05.setup
libsensorPy.concretesensor.tcs34725.TCS34725.setup
libsensorPy.concretesensor.urm37.URM37.setup
libsensorPy.extension.hcsr04.HCSR04.setup
libsensorPy.setup" class="py-name" href="#" onclick="return doclink('link-7', 'setup', 'link-6');">setup</a></tt><tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">.</tt><tt id="link-8" class="py-name"><a title="libsensorPy.concretesensor.dht22Humidity.DHT22Humidity.__trigger
libsensorPy.concretesensor.dht22Temperature.DHT22Temperature.__trigger" class="py-name" href="#" onclick="return doclink('link-8', '__trigger', 'link-5');">__trigger</a></tt><tt class="py-op">,</tt><tt class="py-name">GPIO</tt><tt class="py-op">.</tt><tt class="py-name">OUT</tt><tt class="py-op">)</tt> </tt>
<a name="L33"></a><tt class="py-lineno">33</tt>  <tt class="py-line">        <tt class="py-name">GPIO</tt><tt class="py-op">.</tt><tt id="link-9" class="py-name"><a title="libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.setup
libsensorPy.abstractclass.actuator.Actuator.setup
libsensorPy.abstractclass.altitudeSensor.AltitudeSensor.setup
libsensorPy.abstractclass.humiditySensor.HumiditySensor.setup
libsensorPy.abstractclass.lightSensor.LightSensor.setup
libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor.setup
libsensorPy.abstractclass.motionSensor.MotionSensor.setup
libsensorPy.abstractclass.motorActuator.MotorActuator.setup
libsensorPy.abstractclass.pressureSensor.PressureSensor.setup
libsensorPy.abstractclass.sensor.Sensor.setup
libsensorPy.abstractclass.temperatureSensor.TemperatureSensor.setup
libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor.setup
libsensorPy.compositesensor.bmp085Composite.BMP085Composite.setup
libsensorPy.compositesensor.dht11Composite.DHT11Composite.setup
libsensorPy.compositesensor.dht22Composite.DHT22Composite.setup
libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite.setup
libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48.setup
libsensorPy.concretesensor.adxl345.ADXL345.setup
libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude.setup
libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure.setup
libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature.setup
libsensorPy.concretesensor.dht11Humidity.DHT11Humidity.setup
libsensorPy.concretesensor.dht11Temperature.DHT11Temperature.setup
libsensorPy.concretesensor.dht22Humidity.DHT22Humidity.setup
libsensorPy.concretesensor.dht22Temperature.DHT22Temperature.setup
libsensorPy.concretesensor.hmc5883l.HMC5883L.setup
libsensorPy.concretesensor.hysrf05.HYSRF05.setup
libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer.setup
libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer.setup
libsensorPy.concretesensor.parallaxPing.ParallaxPing.setup
libsensorPy.concretesensor.pir.PIR.setup
libsensorPy.concretesensor.srf04.SRF04.setup
libsensorPy.concretesensor.srf05.SRF05.setup
libsensorPy.concretesensor.tcs34725.TCS34725.setup
libsensorPy.concretesensor.urm37.URM37.setup
libsensorPy.extension.hcsr04.HCSR04.setup
libsensorPy.setup" class="py-name" href="#" onclick="return doclink('link-9', 'setup', 'link-6');">setup</a></tt><tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__echo</tt><tt class="py-op">,</tt><tt class="py-name">GPIO</tt><tt class="py-op">.</tt><tt class="py-name">IN</tt><tt class="py-op">)</tt> </tt>
<a name="L34"></a><tt class="py-lineno">34</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__distance</tt> <tt class="py-op">=</tt> <tt class="py-string">""</tt> </tt>
<a name="L35"></a><tt class="py-lineno">35</tt>  <tt class="py-line">        <tt class="py-keyword">try</tt><tt class="py-op">:</tt> </tt>
<a name="L36"></a><tt class="py-lineno">36</tt>  <tt class="py-line">            <tt class="py-name">ser</tt> <tt class="py-op">=</tt> <tt class="py-name">serial</tt><tt class="py-op">.</tt><tt class="py-name">Serial</tt><tt class="py-op">(</tt><tt class="py-string">'/dev/ttyAMA0'</tt><tt class="py-op">,</tt> <tt class="py-number">9600</tt><tt class="py-op">,</tt> <tt class="py-name">timeout</tt><tt class="py-op">=</tt><tt class="py-number">1</tt><tt class="py-op">)</tt> </tt>
<a name="L37"></a><tt class="py-lineno">37</tt>  <tt class="py-line">            <tt class="py-name">ser</tt><tt class="py-op">.</tt><tt class="py-name">open</tt><tt class="py-op">(</tt><tt class="py-op">)</tt> </tt>
<a name="L38"></a><tt class="py-lineno">38</tt>  <tt class="py-line">        <tt class="py-keyword">except</tt><tt class="py-op">:</tt> </tt>
<a name="L39"></a><tt class="py-lineno">39</tt>  <tt class="py-line">            <tt class="py-keyword">print</tt> <tt class="py-op">(</tt><tt class="py-string">"no device connected"</tt><tt class="py-op">)</tt> </tt>
<a name="L40"></a><tt class="py-lineno">40</tt>  <tt class="py-line">            <tt class="py-name">exit</tt><tt class="py-op">(</tt><tt class="py-number">0</tt><tt class="py-op">)</tt> </tt>
</div><a name="L41"></a><tt class="py-lineno">41</tt>  <tt class="py-line"> </tt>
<a name="URM37.changeSetup"></a><div id="URM37.changeSetup-def"><a name="L42"></a><tt class="py-lineno">42</tt> <a class="py-toggle" href="#" id="URM37.changeSetup-toggle" onclick="return toggle('URM37.changeSetup');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.concretesensor.urm37.URM37-class.php#changeSetup">changeSetup</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">,</tt> <tt class="py-param">trigger</tt><tt class="py-op">,</tt> <tt class="py-param">echo</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="URM37.changeSetup-collapsed" style="display:none;" pad="++" indent="++++++++"></div><div id="URM37.changeSetup-expanded"><a name="L43"></a><tt class="py-lineno">43</tt>  <tt class="py-line">        <tt class="py-docstring">"""</tt> </tt>
<a name="L44"></a><tt class="py-lineno">44</tt>  <tt class="py-line"><tt class="py-docstring">        @param trigger: The GPIO pin used to trigger the sensor.</tt> </tt>
<a name="L45"></a><tt class="py-lineno">45</tt>  <tt class="py-line"><tt class="py-docstring">        @param echo: The GPIO pin used to read data from the sensor.</tt> </tt>
<a name="L46"></a><tt class="py-lineno">46</tt>  <tt class="py-line"><tt class="py-docstring">        @return: void</tt> </tt>
<a name="L47"></a><tt class="py-lineno">47</tt>  <tt class="py-line"><tt class="py-docstring">        """</tt> </tt>
<a name="L48"></a><tt class="py-lineno">48</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt id="link-10" class="py-name"><a title="libsensorPy.concretesensor.dht22Humidity.DHT22Humidity.__trigger
libsensorPy.concretesensor.dht22Temperature.DHT22Temperature.__trigger" class="py-name" href="#" onclick="return doclink('link-10', '__trigger', 'link-5');">__trigger</a></tt> <tt class="py-op">=</tt> <tt class="py-name">trigger</tt> </tt>
<a name="L49"></a><tt class="py-lineno">49</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__echo</tt> <tt class="py-op">=</tt> <tt class="py-name">echo</tt> </tt>
</div><a name="L50"></a><tt class="py-lineno">50</tt>  <tt class="py-line"> </tt>
<a name="URM37.distance_in_cm"></a><div id="URM37.distance_in_cm-def"><a name="L51"></a><tt class="py-lineno">51</tt> <a class="py-toggle" href="#" id="URM37.distance_in_cm-toggle" onclick="return toggle('URM37.distance_in_cm');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.concretesensor.urm37.URM37-class.php#distance_in_cm">distance_in_cm</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="URM37.distance_in_cm-collapsed" style="display:none;" pad="++" indent="++++++++"></div><div id="URM37.distance_in_cm-expanded"><a name="L52"></a><tt class="py-lineno">52</tt>  <tt class="py-line">        <tt class="py-docstring">"""</tt> </tt>
<a name="L53"></a><tt class="py-lineno">53</tt>  <tt class="py-line"><tt class="py-docstring">        Gets the distance from the sensor.</tt> </tt>
<a name="L54"></a><tt class="py-lineno">54</tt>  <tt class="py-line"><tt class="py-docstring">        @return: The distance in cm.</tt> </tt>
<a name="L55"></a><tt class="py-lineno">55</tt>  <tt class="py-line"><tt class="py-docstring">        @rtype: float</tt> </tt>
<a name="L56"></a><tt class="py-lineno">56</tt>  <tt class="py-line"><tt class="py-docstring">        """</tt> </tt>
<a name="L57"></a><tt class="py-lineno">57</tt>  <tt class="py-line">        <tt class="py-name">GPIO</tt><tt class="py-op">.</tt><tt class="py-name">output</tt><tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">.</tt><tt id="link-11" class="py-name"><a title="libsensorPy.concretesensor.dht22Humidity.DHT22Humidity.__trigger
libsensorPy.concretesensor.dht22Temperature.DHT22Temperature.__trigger" class="py-name" href="#" onclick="return doclink('link-11', '__trigger', 'link-5');">__trigger</a></tt><tt class="py-op">,</tt> <tt class="py-name">GPIO</tt><tt class="py-op">.</tt><tt class="py-name">HIGH</tt><tt class="py-op">)</tt> </tt>
<a name="L58"></a><tt class="py-lineno">58</tt>  <tt class="py-line">        <tt class="py-name">time</tt><tt class="py-op">.</tt><tt class="py-name">sleep</tt><tt class="py-op">(</tt><tt class="py-number">0.00001</tt><tt class="py-op">)</tt> </tt>
<a name="L59"></a><tt class="py-lineno">59</tt>  <tt class="py-line">        <tt class="py-name">GPIO</tt><tt class="py-op">.</tt><tt class="py-name">output</tt><tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">.</tt><tt id="link-12" class="py-name"><a title="libsensorPy.concretesensor.dht22Humidity.DHT22Humidity.__trigger
libsensorPy.concretesensor.dht22Temperature.DHT22Temperature.__trigger" class="py-name" href="#" onclick="return doclink('link-12', '__trigger', 'link-5');">__trigger</a></tt><tt class="py-op">,</tt> <tt class="py-name">GPIO</tt><tt class="py-op">.</tt><tt class="py-name">LOW</tt><tt class="py-op">)</tt> </tt>
<a name="L60"></a><tt class="py-lineno">60</tt>  <tt class="py-line"> </tt>
<a name="L61"></a><tt class="py-lineno">61</tt>  <tt class="py-line">        <tt class="py-name">GPIO</tt><tt class="py-op">.</tt><tt id="link-13" class="py-name"><a title="libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.setup
libsensorPy.abstractclass.actuator.Actuator.setup
libsensorPy.abstractclass.altitudeSensor.AltitudeSensor.setup
libsensorPy.abstractclass.humiditySensor.HumiditySensor.setup
libsensorPy.abstractclass.lightSensor.LightSensor.setup
libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor.setup
libsensorPy.abstractclass.motionSensor.MotionSensor.setup
libsensorPy.abstractclass.motorActuator.MotorActuator.setup
libsensorPy.abstractclass.pressureSensor.PressureSensor.setup
libsensorPy.abstractclass.sensor.Sensor.setup
libsensorPy.abstractclass.temperatureSensor.TemperatureSensor.setup
libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor.setup
libsensorPy.compositesensor.bmp085Composite.BMP085Composite.setup
libsensorPy.compositesensor.dht11Composite.DHT11Composite.setup
libsensorPy.compositesensor.dht22Composite.DHT22Composite.setup
libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite.setup
libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48.setup
libsensorPy.concretesensor.adxl345.ADXL345.setup
libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude.setup
libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure.setup
libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature.setup
libsensorPy.concretesensor.dht11Humidity.DHT11Humidity.setup
libsensorPy.concretesensor.dht11Temperature.DHT11Temperature.setup
libsensorPy.concretesensor.dht22Humidity.DHT22Humidity.setup
libsensorPy.concretesensor.dht22Temperature.DHT22Temperature.setup
libsensorPy.concretesensor.hmc5883l.HMC5883L.setup
libsensorPy.concretesensor.hysrf05.HYSRF05.setup
libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer.setup
libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer.setup
libsensorPy.concretesensor.parallaxPing.ParallaxPing.setup
libsensorPy.concretesensor.pir.PIR.setup
libsensorPy.concretesensor.srf04.SRF04.setup
libsensorPy.concretesensor.srf05.SRF05.setup
libsensorPy.concretesensor.tcs34725.TCS34725.setup
libsensorPy.concretesensor.urm37.URM37.setup
libsensorPy.extension.hcsr04.HCSR04.setup
libsensorPy.setup" class="py-name" href="#" onclick="return doclink('link-13', 'setup', 'link-6');">setup</a></tt><tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__echo</tt><tt class="py-op">,</tt> <tt class="py-name">GPIO</tt><tt class="py-op">.</tt><tt class="py-name">IN</tt><tt class="py-op">,</tt><tt class="py-name">pull_up_down</tt><tt class="py-op">=</tt><tt class="py-name">GPIO</tt><tt class="py-op">.</tt><tt class="py-name">PUD_UP</tt><tt class="py-op">)</tt> </tt>
<a name="L62"></a><tt class="py-lineno">62</tt>  <tt class="py-line">        <tt class="py-keyword">while</tt> <tt class="py-op">(</tt><tt class="py-name">GPIO</tt><tt class="py-op">.</tt><tt class="py-name">input</tt><tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__echo</tt><tt class="py-op">)</tt> <tt class="py-op">==</tt> <tt class="py-number">0</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
<a name="L63"></a><tt class="py-lineno">63</tt>  <tt class="py-line">            <tt class="py-name">signaloff</tt> <tt class="py-op">=</tt> <tt class="py-name">time</tt><tt class="py-op">.</tt><tt class="py-name">time</tt><tt class="py-op">(</tt><tt class="py-op">)</tt> </tt>
<a name="L64"></a><tt class="py-lineno">64</tt>  <tt class="py-line">        <tt class="py-keyword">while</tt> <tt class="py-op">(</tt><tt class="py-name">GPIO</tt><tt class="py-op">.</tt><tt class="py-name">input</tt><tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__echo</tt><tt class="py-op">)</tt> <tt class="py-op">==</tt> <tt class="py-number">1</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
<a name="L65"></a><tt class="py-lineno">65</tt>  <tt class="py-line">            <tt class="py-name">signalon</tt> <tt class="py-op">=</tt> <tt class="py-name">time</tt><tt class="py-op">.</tt><tt class="py-name">time</tt><tt class="py-op">(</tt><tt class="py-op">)</tt> </tt>
<a name="L66"></a><tt class="py-lineno">66</tt>  <tt class="py-line"> </tt>
<a name="L67"></a><tt class="py-lineno">67</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__distance</tt> <tt class="py-op">=</tt> <tt class="py-op">(</tt><tt class="py-name">signalon</tt> <tt class="py-op">-</tt> <tt class="py-name">signaloff</tt><tt class="py-op">)</tt> <tt class="py-op">*</tt> <tt class="py-number">17000</tt> </tt>
<a name="L68"></a><tt class="py-lineno">68</tt>  <tt class="py-line">        <tt class="py-comment"># return the distance of an object in front of the sensor in cm</tt> </tt>
<a name="L69"></a><tt class="py-lineno">69</tt>  <tt class="py-line">        <tt class="py-keyword">return</tt> <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__distance</tt> </tt>
</div></div><a name="L70"></a><tt class="py-lineno">70</tt>  <tt class="py-line"> </tt><script type="text/javascript">
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
