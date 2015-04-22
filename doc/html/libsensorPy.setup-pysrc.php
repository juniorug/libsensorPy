
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>libsensorPy.setup</title>
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
        Module&nbsp;setup
      </span>
    </td>
    <td>
      <table cellpadding="0" cellspacing="0">
        <!-- hide/show private -->
        <tr><td align="right"><span class="options">[<a href="javascript:void(0);" class="privatelink"
    onclick="toggle_private();">hide&nbsp;private</a>]</span></td></tr>
        <tr><td align="right"><span class="options"
            >[<a href="frames.php" target="_top">frames</a
            >]&nbsp;|&nbsp;<a href="libsensorPy.setup-pysrc.php"
            target="_top">no&nbsp;frames</a>]</span></td></tr>
      </table>
    </td>
  </tr>
</table>
<h1 class="epydoc">Source Code for <a href="libsensorPy.setup-module.php">Module libsensorPy.setup</a></h1>
<pre class="py-src">
<a name="L1"></a><tt class="py-lineno"> 1</tt>  <tt class="py-line"><tt class="py-keyword">import</tt> <tt class="py-name">os</tt> </tt>
<a name="L2"></a><tt class="py-lineno"> 2</tt>  <tt class="py-line"><tt class="py-keyword">from</tt> <tt class="py-name">setuptools</tt> <tt class="py-keyword">import</tt> <tt id="link-0" class="py-name" targets="Method libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.setup()=libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor-class.php#setup,Method libsensorPy.abstractclass.actuator.Actuator.setup()=libsensorPy.abstractclass.actuator.Actuator-class.php#setup,Method libsensorPy.abstractclass.altitudeSensor.AltitudeSensor.setup()=libsensorPy.abstractclass.altitudeSensor.AltitudeSensor-class.php#setup,Method libsensorPy.abstractclass.humiditySensor.HumiditySensor.setup()=libsensorPy.abstractclass.humiditySensor.HumiditySensor-class.php#setup,Method libsensorPy.abstractclass.lightSensor.LightSensor.setup()=libsensorPy.abstractclass.lightSensor.LightSensor-class.php#setup,Method libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor.setup()=libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor-class.php#setup,Method libsensorPy.abstractclass.motionSensor.MotionSensor.setup()=libsensorPy.abstractclass.motionSensor.MotionSensor-class.php#setup,Method libsensorPy.abstractclass.motorActuator.MotorActuator.setup()=libsensorPy.abstractclass.motorActuator.MotorActuator-class.php#setup,Method libsensorPy.abstractclass.pressureSensor.PressureSensor.setup()=libsensorPy.abstractclass.pressureSensor.PressureSensor-class.php#setup,Method libsensorPy.abstractclass.sensor.Sensor.setup()=libsensorPy.abstractclass.sensor.Sensor-class.php#setup,Method libsensorPy.abstractclass.temperatureSensor.TemperatureSensor.setup()=libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.php#setup,Method libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor.setup()=libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor-class.php#setup,Method libsensorPy.compositesensor.bmp085Composite.BMP085Composite.setup()=libsensorPy.compositesensor.bmp085Composite.BMP085Composite-class.php#setup,Method libsensorPy.compositesensor.dht11Composite.DHT11Composite.setup()=libsensorPy.compositesensor.dht11Composite.DHT11Composite-class.php#setup,Method libsensorPy.compositesensor.dht22Composite.DHT22Composite.setup()=libsensorPy.compositesensor.dht22Composite.DHT22Composite-class.php#setup,Method libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite.setup()=libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite-class.php#setup,Method libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48.setup()=libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48-class.php#setup,Method libsensorPy.concretesensor.adxl345.ADXL345.setup()=libsensorPy.concretesensor.adxl345.ADXL345-class.php#setup,Method libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude.setup()=libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude-class.php#setup,Method libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure.setup()=libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure-class.php#setup,Method libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature.setup()=libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature-class.php#setup,Method libsensorPy.concretesensor.dht11Humidity.DHT11Humidity.setup()=libsensorPy.concretesensor.dht11Humidity.DHT11Humidity-class.php#setup,Method libsensorPy.concretesensor.dht11Temperature.DHT11Temperature.setup()=libsensorPy.concretesensor.dht11Temperature.DHT11Temperature-class.php#setup,Method libsensorPy.concretesensor.dht22Humidity.DHT22Humidity.setup()=libsensorPy.concretesensor.dht22Humidity.DHT22Humidity-class.php#setup,Method libsensorPy.concretesensor.dht22Temperature.DHT22Temperature.setup()=libsensorPy.concretesensor.dht22Temperature.DHT22Temperature-class.php#setup,Method libsensorPy.concretesensor.hmc5883l.HMC5883L.setup()=libsensorPy.concretesensor.hmc5883l.HMC5883L-class.php#setup,Method libsensorPy.concretesensor.hysrf05.HYSRF05.setup()=libsensorPy.concretesensor.hysrf05.HYSRF05-class.php#setup,Method libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer.setup()=libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer-class.php#setup,Method libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer.setup()=libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer-class.php#setup,Method libsensorPy.concretesensor.parallaxPing.ParallaxPing.setup()=libsensorPy.concretesensor.parallaxPing.ParallaxPing-class.php#setup,Method libsensorPy.concretesensor.pir.PIR.setup()=libsensorPy.concretesensor.pir.PIR-class.php#setup,Method libsensorPy.concretesensor.srf04.SRF04.setup()=libsensorPy.concretesensor.srf04.SRF04-class.php#setup,Method libsensorPy.concretesensor.srf05.SRF05.setup()=libsensorPy.concretesensor.srf05.SRF05-class.php#setup,Method libsensorPy.concretesensor.tcs34725.TCS34725.setup()=libsensorPy.concretesensor.tcs34725.TCS34725-class.php#setup,Method libsensorPy.concretesensor.urm37.URM37.setup()=libsensorPy.concretesensor.urm37.URM37-class.php#setup,Method libsensorPy.extension.hcsr04.HCSR04.setup()=libsensorPy.extension.hcsr04.HCSR04-class.php#setup,Module libsensorPy.setup=libsensorPy.setup-module.php"><a title="libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.setup
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
libsensorPy.setup" class="py-name" href="#" onclick="return doclink('link-0', 'setup', 'link-0');">setup</a></tt> </tt>
<a name="L3"></a><tt class="py-lineno"> 3</tt>  <tt class="py-line"> </tt>
<a name="L4"></a><tt class="py-lineno"> 4</tt>  <tt class="py-line"><tt class="py-comment"># Utility function to read the README file.</tt> </tt>
<a name="L5"></a><tt class="py-lineno"> 5</tt>  <tt class="py-line"><tt class="py-comment"># Used for the long_description.  It's nice, because now 1) we have a top level</tt> </tt>
<a name="L6"></a><tt class="py-lineno"> 6</tt>  <tt class="py-line"><tt class="py-comment"># README file and 2) it's easier to type in the README file than to put a raw</tt> </tt>
<a name="L7"></a><tt class="py-lineno"> 7</tt>  <tt class="py-line"><tt class="py-comment"># string in below ...</tt> </tt>
<a name="read"></a><div id="read-def"><a name="L8"></a><tt class="py-lineno"> 8</tt> <a class="py-toggle" href="#" id="read-toggle" onclick="return toggle('read');">-</a><tt class="py-line"><tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.setup-module.php#read">read</a><tt class="py-op">(</tt><tt class="py-param">fname</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="read-collapsed" style="display:none;" pad="++" indent="++++"></div><div id="read-expanded"><a name="L9"></a><tt class="py-lineno"> 9</tt>  <tt class="py-line">    <tt class="py-keyword">return</tt> <tt class="py-name">open</tt><tt class="py-op">(</tt><tt class="py-name">os</tt><tt class="py-op">.</tt><tt class="py-name">path</tt><tt class="py-op">.</tt><tt class="py-name">join</tt><tt class="py-op">(</tt><tt class="py-name">os</tt><tt class="py-op">.</tt><tt class="py-name">path</tt><tt class="py-op">.</tt><tt class="py-name">dirname</tt><tt class="py-op">(</tt><tt class="py-name">__file__</tt><tt class="py-op">)</tt><tt class="py-op">,</tt> <tt class="py-name">fname</tt><tt class="py-op">)</tt><tt class="py-op">)</tt><tt class="py-op">.</tt><tt id="link-1" class="py-name" targets="Function libsensorPy.setup.read()=libsensorPy.setup-module.php#read"><a title="libsensorPy.setup.read" class="py-name" href="#" onclick="return doclink('link-1', 'read', 'link-1');">read</a></tt><tt class="py-op">(</tt><tt class="py-op">)</tt> </tt>
</div><a name="L10"></a><tt class="py-lineno">10</tt>  <tt class="py-line"> </tt>
<a name="L11"></a><tt class="py-lineno">11</tt>  <tt class="py-line"><tt id="link-2" class="py-name"><a title="libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.setup
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
libsensorPy.setup" class="py-name" href="#" onclick="return doclink('link-2', 'setup', 'link-0');">setup</a></tt><tt class="py-op">(</tt> </tt>
<a name="L12"></a><tt class="py-lineno">12</tt>  <tt class="py-line">    <tt class="py-name">name</tt> <tt class="py-op">=</tt> <tt class="py-string">"libsensorPy"</tt><tt class="py-op">,</tt> </tt>
<a name="L13"></a><tt class="py-lineno">13</tt>  <tt class="py-line">    <tt class="py-name">version</tt> <tt class="py-op">=</tt> <tt class="py-string">"0.0.4"</tt><tt class="py-op">,</tt> </tt>
<a name="L14"></a><tt class="py-lineno">14</tt>  <tt class="py-line">    <tt class="py-name">author</tt> <tt class="py-op">=</tt> <tt class="py-string">"Junior Mascarenhas"</tt><tt class="py-op">,</tt> </tt>
<a name="L15"></a><tt class="py-lineno">15</tt>  <tt class="py-line">    <tt class="py-name">author_email</tt> <tt class="py-op">=</tt> <tt class="py-string">"juniorug@gmail.com"</tt><tt class="py-op">,</tt> </tt>
<a name="L16"></a><tt class="py-lineno">16</tt>  <tt class="py-line">    <tt class="py-name">description</tt> <tt class="py-op">=</tt> <tt class="py-op">(</tt><tt class="py-string">"An extendable python library to manipulate sensors coupled to the Raspberry Pi"</tt><tt class="py-op">)</tt><tt class="py-op">,</tt> </tt>
<a name="L17"></a><tt class="py-lineno">17</tt>  <tt class="py-line">    <tt class="py-name">license</tt> <tt class="py-op">=</tt> <tt class="py-string">"BSD"</tt><tt class="py-op">,</tt> </tt>
<a name="L18"></a><tt class="py-lineno">18</tt>  <tt class="py-line">    <tt class="py-name">keywords</tt> <tt class="py-op">=</tt> <tt class="py-string">"example documentation tutorial"</tt><tt class="py-op">,</tt> </tt>
<a name="L19"></a><tt class="py-lineno">19</tt>  <tt class="py-line">    <tt class="py-name">url</tt> <tt class="py-op">=</tt> <tt class="py-string">"https://github.com/juniorug/libsensorPy"</tt><tt class="py-op">,</tt> </tt>
<a name="L20"></a><tt class="py-lineno">20</tt>  <tt class="py-line">    <tt class="py-name">packages</tt><tt class="py-op">=</tt><tt class="py-op">[</tt><tt class="py-string">'abstractclass'</tt><tt class="py-op">,</tt> <tt class="py-string">'compositesensor'</tt><tt class="py-op">,</tt> <tt class="py-string">'concreteactuator'</tt><tt class="py-op">,</tt><tt class="py-string">'concreteevent'</tt><tt class="py-op">,</tt><tt class="py-string">'concretefactory'</tt><tt class="py-op">,</tt><tt class="py-string">'concreteobserver'</tt><tt class="py-op">,</tt><tt class="py-string">'concretesensor'</tt><tt class="py-op">,</tt> <tt class="py-string">'examples'</tt><tt class="py-op">,</tt> <tt class="py-string">'extension'</tt><tt class="py-op">,</tt> <tt class="py-string">'utils'</tt><tt class="py-op">]</tt><tt class="py-op">,</tt> </tt>
<a name="L21"></a><tt class="py-lineno">21</tt>  <tt class="py-line">    <tt class="py-name">long_description</tt><tt class="py-op">=</tt><tt id="link-3" class="py-name"><a title="libsensorPy.setup.read" class="py-name" href="#" onclick="return doclink('link-3', 'read', 'link-1');">read</a></tt><tt class="py-op">(</tt><tt class="py-string">'README'</tt><tt class="py-op">)</tt><tt class="py-op">,</tt> </tt>
<a name="L22"></a><tt class="py-lineno">22</tt>  <tt class="py-line">    <tt class="py-name">classifiers</tt><tt class="py-op">=</tt><tt class="py-op">[</tt> </tt>
<a name="L23"></a><tt class="py-lineno">23</tt>  <tt class="py-line">        <tt class="py-string">"Development Status :: 3 - Alpha"</tt><tt class="py-op">,</tt> </tt>
<a name="L24"></a><tt class="py-lineno">24</tt>  <tt class="py-line">        <tt class="py-string">"Topic :: Utilities"</tt><tt class="py-op">,</tt> </tt>
<a name="L25"></a><tt class="py-lineno">25</tt>  <tt class="py-line">        <tt class="py-string">"License :: OSI Approved :: BSD License"</tt><tt class="py-op">,</tt> </tt>
<a name="L26"></a><tt class="py-lineno">26</tt>  <tt class="py-line">    <tt class="py-op">]</tt><tt class="py-op">,</tt> </tt>
<a name="L27"></a><tt class="py-lineno">27</tt>  <tt class="py-line"><tt class="py-op">)</tt> </tt>
<a name="L28"></a><tt class="py-lineno">28</tt>  <tt class="py-line"> </tt><script type="text/javascript">
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
