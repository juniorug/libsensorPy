
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>libsensorPy.compositesensor.lsm303dComposite</title>
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
        <a href="libsensorPy.compositesensor-module.php">Package&nbsp;compositesensor</a> ::
        Module&nbsp;lsm303dComposite
      </span>
    </td>
    <td>
      <table cellpadding="0" cellspacing="0">
        <!-- hide/show private -->
        <tr><td align="right"><span class="options">[<a href="javascript:void(0);" class="privatelink"
    onclick="toggle_private();">hide&nbsp;private</a>]</span></td></tr>
        <tr><td align="right"><span class="options"
            >[<a href="frames.php" target="_top">frames</a
            >]&nbsp;|&nbsp;<a href="libsensorPy.compositesensor.lsm303dComposite-pysrc.php"
            target="_top">no&nbsp;frames</a>]</span></td></tr>
      </table>
    </td>
  </tr>
</table>
<h1 class="epydoc">Source Code for <a href="libsensorPy.compositesensor.lsm303dComposite-module.php">Module libsensorPy.compositesensor.lsm303dComposite</a></h1>
<pre class="py-src">
<a name="L1"></a><tt class="py-lineno"> 1</tt>  <tt class="py-line"><tt class="py-docstring">'''</tt> </tt>
<a name="L2"></a><tt class="py-lineno"> 2</tt>  <tt class="py-line"><tt class="py-docstring">Created on 16/03/2015</tt> </tt>
<a name="L3"></a><tt class="py-lineno"> 3</tt>  <tt class="py-line"><tt class="py-docstring"></tt> </tt>
<a name="L4"></a><tt class="py-lineno"> 4</tt>  <tt class="py-line"><tt class="py-docstring">@author: Junior Mascarenhas</tt> </tt>
<a name="L5"></a><tt class="py-lineno"> 5</tt>  <tt class="py-line"><tt class="py-docstring">'''</tt> </tt>
<a name="L6"></a><tt class="py-lineno"> 6</tt>  <tt class="py-line"><tt class="py-keyword">from</tt> <tt id="link-0" class="py-name" targets="Package libsensorPy.abstractclass=libsensorPy.abstractclass-module.php"><a title="libsensorPy.abstractclass" class="py-name" href="#" onclick="return doclink('link-0', 'abstractclass', 'link-0');">abstractclass</a></tt><tt class="py-op">.</tt><tt id="link-1" class="py-name" targets="Module libsensorPy.abstractclass.accelerometerSensor=libsensorPy.abstractclass.accelerometerSensor-module.php"><a title="libsensorPy.abstractclass.accelerometerSensor" class="py-name" href="#" onclick="return doclink('link-1', 'accelerometerSensor', 'link-1');">accelerometerSensor</a></tt> <tt class="py-keyword">import</tt> <tt id="link-2" class="py-name" targets="Class libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor=libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor-class.php"><a title="libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor" class="py-name" href="#" onclick="return doclink('link-2', 'AccelerometerSensor', 'link-2');">AccelerometerSensor</a></tt> </tt>
<a name="L7"></a><tt class="py-lineno"> 7</tt>  <tt class="py-line"><tt class="py-keyword">from</tt> <tt id="link-3" class="py-name"><a title="libsensorPy.abstractclass" class="py-name" href="#" onclick="return doclink('link-3', 'abstractclass', 'link-0');">abstractclass</a></tt><tt class="py-op">.</tt><tt id="link-4" class="py-name" targets="Module libsensorPy.abstractclass.magnetometerSensor=libsensorPy.abstractclass.magnetometerSensor-module.php"><a title="libsensorPy.abstractclass.magnetometerSensor" class="py-name" href="#" onclick="return doclink('link-4', 'magnetometerSensor', 'link-4');">magnetometerSensor</a></tt> <tt class="py-keyword">import</tt> <tt id="link-5" class="py-name" targets="Class libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor=libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor-class.php"><a title="libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor" class="py-name" href="#" onclick="return doclink('link-5', 'MagnetometerSensor', 'link-5');">MagnetometerSensor</a></tt> </tt>
<a name="L8"></a><tt class="py-lineno"> 8</tt>  <tt class="py-line"><tt class="py-keyword">from</tt> <tt id="link-6" class="py-name" targets="Package libsensorPy.concretesensor=libsensorPy.concretesensor-module.php"><a title="libsensorPy.concretesensor" class="py-name" href="#" onclick="return doclink('link-6', 'concretesensor', 'link-6');">concretesensor</a></tt><tt class="py-op">.</tt><tt id="link-7" class="py-name" targets="Module libsensorPy.concretesensor.lsm303dAccelerometer=libsensorPy.concretesensor.lsm303dAccelerometer-module.php"><a title="libsensorPy.concretesensor.lsm303dAccelerometer" class="py-name" href="#" onclick="return doclink('link-7', 'lsm303dAccelerometer', 'link-7');">lsm303dAccelerometer</a></tt> <tt class="py-keyword">import</tt> <tt id="link-8" class="py-name" targets="Class libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer=libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer-class.php"><a title="libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer" class="py-name" href="#" onclick="return doclink('link-8', 'LSM303DAccelerometer', 'link-8');">LSM303DAccelerometer</a></tt> </tt>
<a name="L9"></a><tt class="py-lineno"> 9</tt>  <tt class="py-line"><tt class="py-keyword">from</tt> <tt id="link-9" class="py-name"><a title="libsensorPy.concretesensor" class="py-name" href="#" onclick="return doclink('link-9', 'concretesensor', 'link-6');">concretesensor</a></tt><tt class="py-op">.</tt><tt id="link-10" class="py-name" targets="Module libsensorPy.concretesensor.lsm303dMagnetometer=libsensorPy.concretesensor.lsm303dMagnetometer-module.php"><a title="libsensorPy.concretesensor.lsm303dMagnetometer" class="py-name" href="#" onclick="return doclink('link-10', 'lsm303dMagnetometer', 'link-10');">lsm303dMagnetometer</a></tt> <tt class="py-keyword">import</tt> <tt id="link-11" class="py-name" targets="Class libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer=libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer-class.php"><a title="libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer" class="py-name" href="#" onclick="return doclink('link-11', 'LSM303DMagnetometer', 'link-11');">LSM303DMagnetometer</a></tt> </tt>
<a name="L10"></a><tt class="py-lineno">10</tt>  <tt class="py-line"> </tt>
<a name="L11"></a><tt class="py-lineno">11</tt>  <tt class="py-line"> </tt>
<a name="L12"></a><tt class="py-lineno">12</tt>  <tt class="py-line"> </tt>
<a name="LSM303DComposite"></a><div id="LSM303DComposite-def"><a name="L13"></a><tt class="py-lineno">13</tt> <a class="py-toggle" href="#" id="LSM303DComposite-toggle" onclick="return toggle('LSM303DComposite');">-</a><tt class="py-line"><tt class="py-keyword">class</tt> <a class="py-def-name" href="libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite-class.php">LSM303DComposite</a><tt class="py-op">(</tt><tt class="py-base-class">AccelerometerSensor</tt><tt class="py-op">,</tt><tt class="py-base-class">MagnetometerSensor</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="LSM303DComposite-collapsed" style="display:none;" pad="++" indent="++++"></div><div id="LSM303DComposite-expanded"><a name="L14"></a><tt class="py-lineno">14</tt>  <tt class="py-line">    <tt class="py-docstring">'''</tt> </tt>
<a name="L15"></a><tt class="py-lineno">15</tt>  <tt class="py-line"><tt class="py-docstring">    classdocs</tt> </tt>
<a name="L16"></a><tt class="py-lineno">16</tt>  <tt class="py-line"><tt class="py-docstring">    '''</tt> </tt>
<a name="L17"></a><tt class="py-lineno">17</tt>  <tt class="py-line"> </tt>
<a name="LSM303DComposite.__init__"></a><div id="LSM303DComposite.__init__-def"><a name="L18"></a><tt class="py-lineno">18</tt> <a class="py-toggle" href="#" id="LSM303DComposite.__init__-toggle" onclick="return toggle('LSM303DComposite.__init__');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite-class.php#__init__">__init__</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="LSM303DComposite.__init__-collapsed" style="display:none;" pad="++" indent="++++++++"></div><div id="LSM303DComposite.__init__-expanded"><a name="L19"></a><tt class="py-lineno">19</tt>  <tt class="py-line">        <tt class="py-docstring">'''</tt> </tt>
<a name="L20"></a><tt class="py-lineno">20</tt>  <tt class="py-line"><tt class="py-docstring">        Constructor</tt> </tt>
<a name="L21"></a><tt class="py-lineno">21</tt>  <tt class="py-line"><tt class="py-docstring">        '''</tt> </tt>
<a name="L22"></a><tt class="py-lineno">22</tt>  <tt class="py-line">        <tt id="link-12" class="py-name"><a title="libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor" class="py-name" href="#" onclick="return doclink('link-12', 'AccelerometerSensor', 'link-2');">AccelerometerSensor</a></tt><tt class="py-op">.</tt><tt id="link-13" class="py-name" targets="Method libsensorPy.abstractclass.abstractActuatorFactory.AbstractActuatorFactory.__init__()=libsensorPy.abstractclass.abstractActuatorFactory.AbstractActuatorFactory-class.php#__init__,Method libsensorPy.abstractclass.abstractEvent.AbstractEvent.__init__()=libsensorPy.abstractclass.abstractEvent.AbstractEvent-class.php#__init__,Method libsensorPy.abstractclass.abstractSensorFactory.AbstractSensorFactory.__init__()=libsensorPy.abstractclass.abstractSensorFactory.AbstractSensorFactory-class.php#__init__,Method libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.__init__()=libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor-class.php#__init__,Method libsensorPy.abstractclass.actuator.Actuator.__init__()=libsensorPy.abstractclass.actuator.Actuator-class.php#__init__,Method libsensorPy.abstractclass.altitudeSensor.AltitudeSensor.__init__()=libsensorPy.abstractclass.altitudeSensor.AltitudeSensor-class.php#__init__,Method libsensorPy.abstractclass.dcMotorActuator.DCMotorActuator.__init__()=libsensorPy.abstractclass.dcMotorActuator.DCMotorActuator-class.php#__init__,Method libsensorPy.abstractclass.eventObserver.EventObserver.__init__()=libsensorPy.abstractclass.eventObserver.EventObserver-class.php#__init__,Method libsensorPy.abstractclass.humiditySensor.HumiditySensor.__init__()=libsensorPy.abstractclass.humiditySensor.HumiditySensor-class.php#__init__,Method libsensorPy.abstractclass.lightSensor.LightSensor.__init__()=libsensorPy.abstractclass.lightSensor.LightSensor-class.php#__init__,Method libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor.__init__()=libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor-class.php#__init__,Method libsensorPy.abstractclass.motionSensor.MotionSensor.__init__()=libsensorPy.abstractclass.motionSensor.MotionSensor-class.php#__init__,Method libsensorPy.abstractclass.motorActuator.MotorActuator.__init__()=libsensorPy.abstractclass.motorActuator.MotorActuator-class.php#__init__,Method libsensorPy.abstractclass.pressureSensor.PressureSensor.__init__()=libsensorPy.abstractclass.pressureSensor.PressureSensor-class.php#__init__,Method libsensorPy.abstractclass.sensor.Sensor.__init__()=libsensorPy.abstractclass.sensor.Sensor-class.php#__init__,Method libsensorPy.abstractclass.servoMotorActuator.ServoMotorActuator.__init__()=libsensorPy.abstractclass.servoMotorActuator.ServoMotorActuator-class.php#__init__,Method libsensorPy.abstractclass.stepperMotorActuator.StepperMotorActuator.__init__()=libsensorPy.abstractclass.stepperMotorActuator.StepperMotorActuator-class.php#__init__,Method libsensorPy.abstractclass.temperatureSensor.TemperatureSensor.__init__()=libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.php#__init__,Method libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor.__init__()=libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor-class.php#__init__,Method libsensorPy.compositesensor.bmp085Composite.BMP085Composite.__init__()=libsensorPy.compositesensor.bmp085Composite.BMP085Composite-class.php#__init__,Method libsensorPy.compositesensor.dht11Composite.DHT11Composite.__init__()=libsensorPy.compositesensor.dht11Composite.DHT11Composite-class.php#__init__,Method libsensorPy.compositesensor.dht22Composite.DHT22Composite.__init__()=libsensorPy.compositesensor.dht22Composite.DHT22Composite-class.php#__init__,Method libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite.__init__()=libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite-class.php#__init__,Method libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48.__init__()=libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48-class.php#__init__,Method libsensorPy.concreteevent.temperatureEvent.TemperatureEvent.__init__()=libsensorPy.concreteevent.temperatureEvent.TemperatureEvent-class.php#__init__,Method libsensorPy.concretefactory.accelerometerSensorFactory.AccelerometerSensorFactory.__init__()=libsensorPy.concretefactory.accelerometerSensorFactory.AccelerometerSensorFactory-class.php#__init__,Method libsensorPy.concretefactory.altitudeSensorFactory.AltitudeSensorFactory.__init__()=libsensorPy.concretefactory.altitudeSensorFactory.AltitudeSensorFactory-class.php#__init__,Method libsensorPy.concretefactory.compositeSensorFactory.CompositeSensorFactory.__init__()=libsensorPy.concretefactory.compositeSensorFactory.CompositeSensorFactory-class.php#__init__,Method libsensorPy.concretefactory.humiditySensorFactory.HumididtySensorFactory.__init__()=libsensorPy.concretefactory.humiditySensorFactory.HumididtySensorFactory-class.php#__init__,Method libsensorPy.concretefactory.lightSensorFactory.LightSensorFactory.__init__()=libsensorPy.concretefactory.lightSensorFactory.LightSensorFactory-class.php#__init__,Method libsensorPy.concretefactory.magnetometerSensorFactory.MagnetometerSensorFactory.__init__()=libsensorPy.concretefactory.magnetometerSensorFactory.MagnetometerSensorFactory-class.php#__init__,Method libsensorPy.concretefactory.motionSensorFactory.MotionSensorFactory.__init__()=libsensorPy.concretefactory.motionSensorFactory.MotionSensorFactory-class.php#__init__,Method libsensorPy.concretefactory.pressureSensorFactory.PressureSensorFactory.__init__()=libsensorPy.concretefactory.pressureSensorFactory.PressureSensorFactory-class.php#__init__,Method libsensorPy.concretefactory.stepperMotorActuatorFactory.StepperMotorActuatorFactory.__init__()=libsensorPy.concretefactory.stepperMotorActuatorFactory.StepperMotorActuatorFactory-class.php#__init__,Method libsensorPy.concretefactory.temperatureSensorFactory.TemperatureSensorFactory.__init__()=libsensorPy.concretefactory.temperatureSensorFactory.TemperatureSensorFactory-class.php#__init__,Method libsensorPy.concretefactory.ultrasonicSensorFactory.UltrasonicSensorFactory.__init__()=libsensorPy.concretefactory.ultrasonicSensorFactory.UltrasonicSensorFactory-class.php#__init__,Method libsensorPy.concreteobserver.currentConditionDisplay.CurrentConditionDisplay.__init__()=libsensorPy.concreteobserver.currentConditionDisplay.CurrentConditionDisplay-class.php#__init__,Method libsensorPy.concretesensor.adxl345.ADXL345.__init__()=libsensorPy.concretesensor.adxl345.ADXL345-class.php#__init__,Method libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude.__init__()=libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude-class.php#__init__,Method libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure.__init__()=libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure-class.php#__init__,Method libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature.__init__()=libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature-class.php#__init__,Method libsensorPy.concretesensor.dht11Humidity.DHT11Humidity.__init__()=libsensorPy.concretesensor.dht11Humidity.DHT11Humidity-class.php#__init__,Method libsensorPy.concretesensor.dht11Temperature.DHT11Temperature.__init__()=libsensorPy.concretesensor.dht11Temperature.DHT11Temperature-class.php#__init__,Method libsensorPy.concretesensor.dht22Humidity.DHT22Humidity.__init__()=libsensorPy.concretesensor.dht22Humidity.DHT22Humidity-class.php#__init__,Method libsensorPy.concretesensor.dht22Temperature.DHT22Temperature.__init__()=libsensorPy.concretesensor.dht22Temperature.DHT22Temperature-class.php#__init__,Method libsensorPy.concretesensor.hmc5883l.HMC5883L.__init__()=libsensorPy.concretesensor.hmc5883l.HMC5883L-class.php#__init__,Method libsensorPy.concretesensor.hysrf05.HYSRF05.__init__()=libsensorPy.concretesensor.hysrf05.HYSRF05-class.php#__init__,Method libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer.__init__()=libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer-class.php#__init__,Method libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer.__init__()=libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer-class.php#__init__,Method libsensorPy.concretesensor.parallaxPing.ParallaxPing.__init__()=libsensorPy.concretesensor.parallaxPing.ParallaxPing-class.php#__init__,Method libsensorPy.concretesensor.pir.PIR.__init__()=libsensorPy.concretesensor.pir.PIR-class.php#__init__,Method libsensorPy.concretesensor.srf04.SRF04.__init__()=libsensorPy.concretesensor.srf04.SRF04-class.php#__init__,Method libsensorPy.concretesensor.srf05.SRF05.__init__()=libsensorPy.concretesensor.srf05.SRF05-class.php#__init__,Method libsensorPy.concretesensor.tcs34725.TCS34725.__init__()=libsensorPy.concretesensor.tcs34725.TCS34725-class.php#__init__,Method libsensorPy.concretesensor.urm37.URM37.__init__()=libsensorPy.concretesensor.urm37.URM37-class.php#__init__,Method libsensorPy.extension.extendedUltrasonicSensorFactory.ExtendedUltrasonicSensorFactory.__init__()=libsensorPy.extension.extendedUltrasonicSensorFactory.ExtendedUltrasonicSensorFactory-class.php#__init__,Method libsensorPy.extension.hcsr04.HCSR04.__init__()=libsensorPy.extension.hcsr04.HCSR04-class.php#__init__,Method libsensorPy.utils.pycomms.PyComms.__init__()=libsensorPy.utils.pycomms.PyComms-class.php#__init__"><a title="libsensorPy.abstractclass.abstractActuatorFactory.AbstractActuatorFactory.__init__
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
libsensorPy.utils.pycomms.PyComms.__init__" class="py-name" href="#" onclick="return doclink('link-13', '__init__', 'link-13');">__init__</a></tt><tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">)</tt> </tt>
<a name="L23"></a><tt class="py-lineno">23</tt>  <tt class="py-line">        <tt id="link-14" class="py-name"><a title="libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor" class="py-name" href="#" onclick="return doclink('link-14', 'MagnetometerSensor', 'link-5');">MagnetometerSensor</a></tt><tt class="py-op">.</tt><tt id="link-15" class="py-name"><a title="libsensorPy.abstractclass.abstractActuatorFactory.AbstractActuatorFactory.__init__
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
libsensorPy.utils.pycomms.PyComms.__init__" class="py-name" href="#" onclick="return doclink('link-15', '__init__', 'link-13');">__init__</a></tt><tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">)</tt> </tt>
<a name="L24"></a><tt class="py-lineno">24</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__lsm303dAcc</tt> <tt class="py-op">=</tt> <tt id="link-16" class="py-name"><a title="libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer" class="py-name" href="#" onclick="return doclink('link-16', 'LSM303DAccelerometer', 'link-8');">LSM303DAccelerometer</a></tt><tt class="py-op">(</tt><tt class="py-op">)</tt> </tt>
<a name="L25"></a><tt class="py-lineno">25</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__lsm303dMag</tt> <tt class="py-op">=</tt> <tt id="link-17" class="py-name"><a title="libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer" class="py-name" href="#" onclick="return doclink('link-17', 'LSM303DMagnetometer', 'link-11');">LSM303DMagnetometer</a></tt><tt class="py-op">(</tt><tt class="py-op">)</tt> </tt>
</div><a name="L26"></a><tt class="py-lineno">26</tt>  <tt class="py-line"> </tt>
<a name="LSM303DComposite.setup"></a><div id="LSM303DComposite.setup-def"><a name="L27"></a><tt class="py-lineno">27</tt> <a class="py-toggle" href="#" id="LSM303DComposite.setup-toggle" onclick="return toggle('LSM303DComposite.setup');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite-class.php#setup">setup</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="LSM303DComposite.setup-collapsed" style="display:none;" pad="++" indent="++++++++"></div><div id="LSM303DComposite.setup-expanded"><a name="L28"></a><tt class="py-lineno">28</tt>  <tt class="py-line">        <tt class="py-docstring">"""Setup the GPIO."""</tt> </tt>
<a name="L29"></a><tt class="py-lineno">29</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__lsm303dAcc</tt><tt class="py-op">.</tt><tt id="link-18" class="py-name" targets="Method libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.setup()=libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor-class.php#setup,Method libsensorPy.abstractclass.actuator.Actuator.setup()=libsensorPy.abstractclass.actuator.Actuator-class.php#setup,Method libsensorPy.abstractclass.altitudeSensor.AltitudeSensor.setup()=libsensorPy.abstractclass.altitudeSensor.AltitudeSensor-class.php#setup,Method libsensorPy.abstractclass.humiditySensor.HumiditySensor.setup()=libsensorPy.abstractclass.humiditySensor.HumiditySensor-class.php#setup,Method libsensorPy.abstractclass.lightSensor.LightSensor.setup()=libsensorPy.abstractclass.lightSensor.LightSensor-class.php#setup,Method libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor.setup()=libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor-class.php#setup,Method libsensorPy.abstractclass.motionSensor.MotionSensor.setup()=libsensorPy.abstractclass.motionSensor.MotionSensor-class.php#setup,Method libsensorPy.abstractclass.motorActuator.MotorActuator.setup()=libsensorPy.abstractclass.motorActuator.MotorActuator-class.php#setup,Method libsensorPy.abstractclass.pressureSensor.PressureSensor.setup()=libsensorPy.abstractclass.pressureSensor.PressureSensor-class.php#setup,Method libsensorPy.abstractclass.sensor.Sensor.setup()=libsensorPy.abstractclass.sensor.Sensor-class.php#setup,Method libsensorPy.abstractclass.temperatureSensor.TemperatureSensor.setup()=libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.php#setup,Method libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor.setup()=libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor-class.php#setup,Method libsensorPy.compositesensor.bmp085Composite.BMP085Composite.setup()=libsensorPy.compositesensor.bmp085Composite.BMP085Composite-class.php#setup,Method libsensorPy.compositesensor.dht11Composite.DHT11Composite.setup()=libsensorPy.compositesensor.dht11Composite.DHT11Composite-class.php#setup,Method libsensorPy.compositesensor.dht22Composite.DHT22Composite.setup()=libsensorPy.compositesensor.dht22Composite.DHT22Composite-class.php#setup,Method libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite.setup()=libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite-class.php#setup,Method libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48.setup()=libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48-class.php#setup,Method libsensorPy.concretesensor.adxl345.ADXL345.setup()=libsensorPy.concretesensor.adxl345.ADXL345-class.php#setup,Method libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude.setup()=libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude-class.php#setup,Method libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure.setup()=libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure-class.php#setup,Method libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature.setup()=libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature-class.php#setup,Method libsensorPy.concretesensor.dht11Humidity.DHT11Humidity.setup()=libsensorPy.concretesensor.dht11Humidity.DHT11Humidity-class.php#setup,Method libsensorPy.concretesensor.dht11Temperature.DHT11Temperature.setup()=libsensorPy.concretesensor.dht11Temperature.DHT11Temperature-class.php#setup,Method libsensorPy.concretesensor.dht22Humidity.DHT22Humidity.setup()=libsensorPy.concretesensor.dht22Humidity.DHT22Humidity-class.php#setup,Method libsensorPy.concretesensor.dht22Temperature.DHT22Temperature.setup()=libsensorPy.concretesensor.dht22Temperature.DHT22Temperature-class.php#setup,Method libsensorPy.concretesensor.hmc5883l.HMC5883L.setup()=libsensorPy.concretesensor.hmc5883l.HMC5883L-class.php#setup,Method libsensorPy.concretesensor.hysrf05.HYSRF05.setup()=libsensorPy.concretesensor.hysrf05.HYSRF05-class.php#setup,Method libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer.setup()=libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer-class.php#setup,Method libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer.setup()=libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer-class.php#setup,Method libsensorPy.concretesensor.parallaxPing.ParallaxPing.setup()=libsensorPy.concretesensor.parallaxPing.ParallaxPing-class.php#setup,Method libsensorPy.concretesensor.pir.PIR.setup()=libsensorPy.concretesensor.pir.PIR-class.php#setup,Method libsensorPy.concretesensor.srf04.SRF04.setup()=libsensorPy.concretesensor.srf04.SRF04-class.php#setup,Method libsensorPy.concretesensor.srf05.SRF05.setup()=libsensorPy.concretesensor.srf05.SRF05-class.php#setup,Method libsensorPy.concretesensor.tcs34725.TCS34725.setup()=libsensorPy.concretesensor.tcs34725.TCS34725-class.php#setup,Method libsensorPy.concretesensor.urm37.URM37.setup()=libsensorPy.concretesensor.urm37.URM37-class.php#setup,Method libsensorPy.extension.hcsr04.HCSR04.setup()=libsensorPy.extension.hcsr04.HCSR04-class.php#setup,Module libsensorPy.setup=libsensorPy.setup-module.php"><a title="libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.setup
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
libsensorPy.setup" class="py-name" href="#" onclick="return doclink('link-18', 'setup', 'link-18');">setup</a></tt><tt class="py-op">(</tt><tt class="py-op">)</tt> </tt>
</div><a name="L30"></a><tt class="py-lineno">30</tt>  <tt class="py-line"> </tt>
<a name="LSM303DComposite.changeSetup"></a><div id="LSM303DComposite.changeSetup-def"><a name="L31"></a><tt class="py-lineno">31</tt> <a class="py-toggle" href="#" id="LSM303DComposite.changeSetup-toggle" onclick="return toggle('LSM303DComposite.changeSetup');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite-class.php#changeSetup">changeSetup</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="LSM303DComposite.changeSetup-collapsed" style="display:none;" pad="++" indent="++++++++"></div><div id="LSM303DComposite.changeSetup-expanded"><a name="L32"></a><tt class="py-lineno">32</tt>  <tt class="py-line">        <tt class="py-docstring">"""Changes GPIO setup ."""</tt> </tt>
<a name="L33"></a><tt class="py-lineno">33</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__lsm303dAcc</tt><tt class="py-op">.</tt><tt id="link-19" class="py-name" targets="Method libsensorPy.abstractclass.actuator.Actuator.changeSetup()=libsensorPy.abstractclass.actuator.Actuator-class.php#changeSetup,Method libsensorPy.abstractclass.sensor.Sensor.changeSetup()=libsensorPy.abstractclass.sensor.Sensor-class.php#changeSetup,Method libsensorPy.compositesensor.bmp085Composite.BMP085Composite.changeSetup()=libsensorPy.compositesensor.bmp085Composite.BMP085Composite-class.php#changeSetup,Method libsensorPy.compositesensor.dht11Composite.DHT11Composite.changeSetup()=libsensorPy.compositesensor.dht11Composite.DHT11Composite-class.php#changeSetup,Method libsensorPy.compositesensor.dht22Composite.DHT22Composite.changeSetup()=libsensorPy.compositesensor.dht22Composite.DHT22Composite-class.php#changeSetup,Method libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite.changeSetup()=libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite-class.php#changeSetup,Method libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48.changeSetup()=libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48-class.php#changeSetup,Method libsensorPy.concretesensor.adxl345.ADXL345.changeSetup()=libsensorPy.concretesensor.adxl345.ADXL345-class.php#changeSetup,Method libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude.changeSetup()=libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude-class.php#changeSetup,Method libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure.changeSetup()=libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure-class.php#changeSetup,Method libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature.changeSetup()=libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature-class.php#changeSetup,Method libsensorPy.concretesensor.dht11Humidity.DHT11Humidity.changeSetup()=libsensorPy.concretesensor.dht11Humidity.DHT11Humidity-class.php#changeSetup,Method libsensorPy.concretesensor.dht11Temperature.DHT11Temperature.changeSetup()=libsensorPy.concretesensor.dht11Temperature.DHT11Temperature-class.php#changeSetup,Method libsensorPy.concretesensor.dht22Humidity.DHT22Humidity.changeSetup()=libsensorPy.concretesensor.dht22Humidity.DHT22Humidity-class.php#changeSetup,Method libsensorPy.concretesensor.dht22Temperature.DHT22Temperature.changeSetup()=libsensorPy.concretesensor.dht22Temperature.DHT22Temperature-class.php#changeSetup,Method libsensorPy.concretesensor.hmc5883l.HMC5883L.changeSetup()=libsensorPy.concretesensor.hmc5883l.HMC5883L-class.php#changeSetup,Method libsensorPy.concretesensor.hysrf05.HYSRF05.changeSetup()=libsensorPy.concretesensor.hysrf05.HYSRF05-class.php#changeSetup,Method libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer.changeSetup()=libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer-class.php#changeSetup,Method libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer.changeSetup()=libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer-class.php#changeSetup,Method libsensorPy.concretesensor.parallaxPing.ParallaxPing.changeSetup()=libsensorPy.concretesensor.parallaxPing.ParallaxPing-class.php#changeSetup,Method libsensorPy.concretesensor.pir.PIR.changeSetup()=libsensorPy.concretesensor.pir.PIR-class.php#changeSetup,Method libsensorPy.concretesensor.srf04.SRF04.changeSetup()=libsensorPy.concretesensor.srf04.SRF04-class.php#changeSetup,Method libsensorPy.concretesensor.srf05.SRF05.changeSetup()=libsensorPy.concretesensor.srf05.SRF05-class.php#changeSetup,Method libsensorPy.concretesensor.tcs34725.TCS34725.changeSetup()=libsensorPy.concretesensor.tcs34725.TCS34725-class.php#changeSetup,Method libsensorPy.concretesensor.urm37.URM37.changeSetup()=libsensorPy.concretesensor.urm37.URM37-class.php#changeSetup,Method libsensorPy.extension.hcsr04.HCSR04.changeSetup()=libsensorPy.extension.hcsr04.HCSR04-class.php#changeSetup"><a title="libsensorPy.abstractclass.actuator.Actuator.changeSetup
libsensorPy.abstractclass.sensor.Sensor.changeSetup
libsensorPy.compositesensor.bmp085Composite.BMP085Composite.changeSetup
libsensorPy.compositesensor.dht11Composite.DHT11Composite.changeSetup
libsensorPy.compositesensor.dht22Composite.DHT22Composite.changeSetup
libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite.changeSetup
libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48.changeSetup
libsensorPy.concretesensor.adxl345.ADXL345.changeSetup
libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude.changeSetup
libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure.changeSetup
libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature.changeSetup
libsensorPy.concretesensor.dht11Humidity.DHT11Humidity.changeSetup
libsensorPy.concretesensor.dht11Temperature.DHT11Temperature.changeSetup
libsensorPy.concretesensor.dht22Humidity.DHT22Humidity.changeSetup
libsensorPy.concretesensor.dht22Temperature.DHT22Temperature.changeSetup
libsensorPy.concretesensor.hmc5883l.HMC5883L.changeSetup
libsensorPy.concretesensor.hysrf05.HYSRF05.changeSetup
libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer.changeSetup
libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer.changeSetup
libsensorPy.concretesensor.parallaxPing.ParallaxPing.changeSetup
libsensorPy.concretesensor.pir.PIR.changeSetup
libsensorPy.concretesensor.srf04.SRF04.changeSetup
libsensorPy.concretesensor.srf05.SRF05.changeSetup
libsensorPy.concretesensor.tcs34725.TCS34725.changeSetup
libsensorPy.concretesensor.urm37.URM37.changeSetup
libsensorPy.extension.hcsr04.HCSR04.changeSetup" class="py-name" href="#" onclick="return doclink('link-19', 'changeSetup', 'link-19');">changeSetup</a></tt><tt class="py-op">(</tt><tt class="py-op">)</tt> </tt>
</div><a name="L34"></a><tt class="py-lineno">34</tt>  <tt class="py-line"> </tt>
<a name="LSM303DComposite.getMagnetic"></a><div id="LSM303DComposite.getMagnetic-def"><a name="L35"></a><tt class="py-lineno">35</tt> <a class="py-toggle" href="#" id="LSM303DComposite.getMagnetic-toggle" onclick="return toggle('LSM303DComposite.getMagnetic');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite-class.php#getMagnetic">getMagnetic</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="LSM303DComposite.getMagnetic-collapsed" style="display:none;" pad="++" indent="++++++++"></div><div id="LSM303DComposite.getMagnetic-expanded"><a name="L36"></a><tt class="py-lineno">36</tt>  <tt class="py-line">        <tt class="py-docstring">"""Return the magnetic measured from the sensor."""</tt> </tt>
<a name="L37"></a><tt class="py-lineno">37</tt>  <tt class="py-line">        <tt class="py-keyword">return</tt> <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__lsm303dMag</tt><tt class="py-op">.</tt><tt id="link-20" class="py-name" targets="Method libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor.getMagnetic()=libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor-class.php#getMagnetic,Method libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite.getMagnetic()=libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite-class.php#getMagnetic,Method libsensorPy.concretesensor.hmc5883l.HMC5883L.getMagnetic()=libsensorPy.concretesensor.hmc5883l.HMC5883L-class.php#getMagnetic,Method libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer.getMagnetic()=libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer-class.php#getMagnetic"><a title="libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor.getMagnetic
libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite.getMagnetic
libsensorPy.concretesensor.hmc5883l.HMC5883L.getMagnetic
libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer.getMagnetic" class="py-name" href="#" onclick="return doclink('link-20', 'getMagnetic', 'link-20');">getMagnetic</a></tt><tt class="py-op">(</tt><tt class="py-op">)</tt> </tt>
</div><a name="L38"></a><tt class="py-lineno">38</tt>  <tt class="py-line"> </tt>
<a name="LSM303DComposite.getAxes"></a><div id="LSM303DComposite.getAxes-def"><a name="L39"></a><tt class="py-lineno">39</tt> <a class="py-toggle" href="#" id="LSM303DComposite.getAxes-toggle" onclick="return toggle('LSM303DComposite.getAxes');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite-class.php#getAxes">getAxes</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="LSM303DComposite.getAxes-collapsed" style="display:none;" pad="++" indent="++++++++"></div><div id="LSM303DComposite.getAxes-expanded"><a name="L40"></a><tt class="py-lineno">40</tt>  <tt class="py-line">        <tt class="py-docstring">"""Return the axes measured from the sensor."""</tt> </tt>
<a name="L41"></a><tt class="py-lineno">41</tt>  <tt class="py-line">        <tt class="py-keyword">return</tt> <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__lsm303dAcc</tt><tt class="py-op">.</tt><tt id="link-21" class="py-name" targets="Method libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.getAxes()=libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor-class.php#getAxes,Method libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite.getAxes()=libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite-class.php#getAxes,Method libsensorPy.concretesensor.adxl345.ADXL345.getAxes()=libsensorPy.concretesensor.adxl345.ADXL345-class.php#getAxes,Method libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer.getAxes()=libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer-class.php#getAxes"><a title="libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.getAxes
libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite.getAxes
libsensorPy.concretesensor.adxl345.ADXL345.getAxes
libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer.getAxes" class="py-name" href="#" onclick="return doclink('link-21', 'getAxes', 'link-21');">getAxes</a></tt><tt class="py-op">(</tt><tt class="py-op">)</tt> </tt>
</div><a name="L42"></a><tt class="py-lineno">42</tt>  <tt class="py-line"> </tt>
<a name="LSM303DComposite.add"></a><div id="LSM303DComposite.add-def"><a name="L43"></a><tt class="py-lineno">43</tt> <a class="py-toggle" href="#" id="LSM303DComposite.add-toggle" onclick="return toggle('LSM303DComposite.add');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite-class.php#add">add</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">,</tt><tt class="py-param">sensor</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="LSM303DComposite.add-collapsed" style="display:none;" pad="++" indent="++++++++"></div><div id="LSM303DComposite.add-expanded"><a name="L44"></a><tt class="py-lineno">44</tt>  <tt class="py-line">        <tt class="py-docstring">"""</tt> </tt>
<a name="L45"></a><tt class="py-lineno">45</tt>  <tt class="py-line"><tt class="py-docstring">        Add a basic sensor to the composite</tt> </tt>
<a name="L46"></a><tt class="py-lineno">46</tt>  <tt class="py-line"><tt class="py-docstring">        @param sensor: The sensor to be added</tt> </tt>
<a name="L47"></a><tt class="py-lineno">47</tt>  <tt class="py-line"><tt class="py-docstring">        @type sensor: Sensor</tt> </tt>
<a name="L48"></a><tt class="py-lineno">48</tt>  <tt class="py-line"><tt class="py-docstring">        """</tt> </tt>
<a name="L49"></a><tt class="py-lineno">49</tt>  <tt class="py-line">         </tt>
<a name="L50"></a><tt class="py-lineno">50</tt>  <tt class="py-line">        <tt class="py-keyword">if</tt> <tt class="py-op">(</tt> <tt class="py-name">isinstance</tt><tt class="py-op">(</tt><tt id="link-22" class="py-name" targets="Module libsensorPy.abstractclass.sensor=libsensorPy.abstractclass.sensor-module.php"><a title="libsensorPy.abstractclass.sensor" class="py-name" href="#" onclick="return doclink('link-22', 'sensor', 'link-22');">sensor</a></tt><tt class="py-op">,</tt> <tt id="link-23" class="py-name"><a title="libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer" class="py-name" href="#" onclick="return doclink('link-23', 'LSM303DAccelerometer', 'link-8');">LSM303DAccelerometer</a></tt><tt class="py-op">)</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
<a name="L51"></a><tt class="py-lineno">51</tt>  <tt class="py-line">            <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__lsm303dAcc</tt> <tt class="py-op">=</tt> <tt id="link-24" class="py-name"><a title="libsensorPy.abstractclass.sensor" class="py-name" href="#" onclick="return doclink('link-24', 'sensor', 'link-22');">sensor</a></tt> </tt>
<a name="L52"></a><tt class="py-lineno">52</tt>  <tt class="py-line">        <tt class="py-keyword">elif</tt> <tt class="py-op">(</tt> <tt class="py-name">isinstance</tt><tt class="py-op">(</tt><tt id="link-25" class="py-name"><a title="libsensorPy.abstractclass.sensor" class="py-name" href="#" onclick="return doclink('link-25', 'sensor', 'link-22');">sensor</a></tt><tt class="py-op">,</tt> <tt id="link-26" class="py-name"><a title="libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer" class="py-name" href="#" onclick="return doclink('link-26', 'LSM303DMagnetometer', 'link-11');">LSM303DMagnetometer</a></tt><tt class="py-op">)</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
<a name="L53"></a><tt class="py-lineno">53</tt>  <tt class="py-line">            <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__lsm303dMag</tt> <tt class="py-op">=</tt> <tt id="link-27" class="py-name"><a title="libsensorPy.abstractclass.sensor" class="py-name" href="#" onclick="return doclink('link-27', 'sensor', 'link-22');">sensor</a></tt> </tt>
<a name="L54"></a><tt class="py-lineno">54</tt>  <tt class="py-line">        <tt class="py-keyword">else</tt><tt class="py-op">:</tt> </tt>
<a name="L55"></a><tt class="py-lineno">55</tt>  <tt class="py-line">            <tt class="py-keyword">assert</tt> <tt class="py-number">0</tt><tt class="py-op">,</tt> <tt class="py-string">"Bad sensor creation. "</tt> </tt>
</div></div><a name="L56"></a><tt class="py-lineno">56</tt>  <tt class="py-line"> </tt><script type="text/javascript">
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
