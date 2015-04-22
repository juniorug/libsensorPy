
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>libsensorPy.examples.adxl345Example</title>
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
        <a href="libsensorPy.examples-module.php">Package&nbsp;examples</a> ::
        Module&nbsp;adxl345Example
      </span>
    </td>
    <td>
      <table cellpadding="0" cellspacing="0">
        <!-- hide/show private -->
        <tr><td align="right"><span class="options">[<a href="javascript:void(0);" class="privatelink"
    onclick="toggle_private();">hide&nbsp;private</a>]</span></td></tr>
        <tr><td align="right"><span class="options"
            >[<a href="frames.php" target="_top">frames</a
            >]&nbsp;|&nbsp;<a href="libsensorPy.examples.adxl345Example-pysrc.php"
            target="_top">no&nbsp;frames</a>]</span></td></tr>
      </table>
    </td>
  </tr>
</table>
<h1 class="epydoc">Source Code for <a href="libsensorPy.examples.adxl345Example-module.php">Module libsensorPy.examples.adxl345Example</a></h1>
<pre class="py-src">
<a name="L1"></a><tt class="py-lineno"> 1</tt>  <tt class="py-line"><tt class="py-docstring">'''</tt> </tt>
<a name="L2"></a><tt class="py-lineno"> 2</tt>  <tt class="py-line"><tt class="py-docstring">Created on 16/03/2015</tt> </tt>
<a name="L3"></a><tt class="py-lineno"> 3</tt>  <tt class="py-line"><tt class="py-docstring"></tt> </tt>
<a name="L4"></a><tt class="py-lineno"> 4</tt>  <tt class="py-line"><tt class="py-docstring">@author: Junior Mascarenhas</tt> </tt>
<a name="L5"></a><tt class="py-lineno"> 5</tt>  <tt class="py-line"><tt class="py-docstring">'''</tt> </tt>
<a name="L6"></a><tt class="py-lineno"> 6</tt>  <tt class="py-line"><tt class="py-keyword">from</tt> <tt id="link-0" class="py-name" targets="Package libsensorPy.concretefactory=libsensorPy.concretefactory-module.php"><a title="libsensorPy.concretefactory" class="py-name" href="#" onclick="return doclink('link-0', 'concretefactory', 'link-0');">concretefactory</a></tt><tt class="py-op">.</tt><tt id="link-1" class="py-name" targets="Module libsensorPy.concretefactory.accelerometerSensorFactory=libsensorPy.concretefactory.accelerometerSensorFactory-module.php"><a title="libsensorPy.concretefactory.accelerometerSensorFactory" class="py-name" href="#" onclick="return doclink('link-1', 'accelerometerSensorFactory', 'link-1');">accelerometerSensorFactory</a></tt> <tt class="py-keyword">import</tt> <tt id="link-2" class="py-name" targets="Class libsensorPy.concretefactory.accelerometerSensorFactory.AccelerometerSensorFactory=libsensorPy.concretefactory.accelerometerSensorFactory.AccelerometerSensorFactory-class.php"><a title="libsensorPy.concretefactory.accelerometerSensorFactory.AccelerometerSensorFactory" class="py-name" href="#" onclick="return doclink('link-2', 'AccelerometerSensorFactory', 'link-2');">AccelerometerSensorFactory</a></tt> </tt>
<a name="L7"></a><tt class="py-lineno"> 7</tt>  <tt class="py-line"> </tt>
<a name="L8"></a><tt class="py-lineno"> 8</tt>  <tt class="py-line"><tt class="py-keyword">if</tt> <tt class="py-name">__name__</tt> <tt class="py-op">==</tt> <tt class="py-string">'__main__'</tt><tt class="py-op">:</tt> </tt>
<a name="L9"></a><tt class="py-lineno"> 9</tt>  <tt class="py-line">    <tt id="link-3" class="py-name" targets="Module libsensorPy.concretesensor.adxl345=libsensorPy.concretesensor.adxl345-module.php"><a title="libsensorPy.concretesensor.adxl345" class="py-name" href="#" onclick="return doclink('link-3', 'adxl345', 'link-3');">adxl345</a></tt> <tt class="py-op">=</tt> <tt id="link-4" class="py-name"><a title="libsensorPy.concretefactory.accelerometerSensorFactory.AccelerometerSensorFactory" class="py-name" href="#" onclick="return doclink('link-4', 'AccelerometerSensorFactory', 'link-2');">AccelerometerSensorFactory</a></tt><tt class="py-op">.</tt><tt id="link-5" class="py-name" targets="Method libsensorPy.abstractclass.abstractSensorFactory.AbstractSensorFactory.createSensor()=libsensorPy.abstractclass.abstractSensorFactory.AbstractSensorFactory-class.php#createSensor,Static Method libsensorPy.concretefactory.accelerometerSensorFactory.AccelerometerSensorFactory.createSensor()=libsensorPy.concretefactory.accelerometerSensorFactory.AccelerometerSensorFactory-class.php#createSensor,Static Method libsensorPy.concretefactory.altitudeSensorFactory.AltitudeSensorFactory.createSensor()=libsensorPy.concretefactory.altitudeSensorFactory.AltitudeSensorFactory-class.php#createSensor,Static Method libsensorPy.concretefactory.compositeSensorFactory.CompositeSensorFactory.createSensor()=libsensorPy.concretefactory.compositeSensorFactory.CompositeSensorFactory-class.php#createSensor,Static Method libsensorPy.concretefactory.humiditySensorFactory.HumididtySensorFactory.createSensor()=libsensorPy.concretefactory.humiditySensorFactory.HumididtySensorFactory-class.php#createSensor,Static Method libsensorPy.concretefactory.lightSensorFactory.LightSensorFactory.createSensor()=libsensorPy.concretefactory.lightSensorFactory.LightSensorFactory-class.php#createSensor,Static Method libsensorPy.concretefactory.magnetometerSensorFactory.MagnetometerSensorFactory.createSensor()=libsensorPy.concretefactory.magnetometerSensorFactory.MagnetometerSensorFactory-class.php#createSensor,Static Method libsensorPy.concretefactory.motionSensorFactory.MotionSensorFactory.createSensor()=libsensorPy.concretefactory.motionSensorFactory.MotionSensorFactory-class.php#createSensor,Static Method libsensorPy.concretefactory.pressureSensorFactory.PressureSensorFactory.createSensor()=libsensorPy.concretefactory.pressureSensorFactory.PressureSensorFactory-class.php#createSensor,Static Method libsensorPy.concretefactory.temperatureSensorFactory.TemperatureSensorFactory.createSensor()=libsensorPy.concretefactory.temperatureSensorFactory.TemperatureSensorFactory-class.php#createSensor,Static Method libsensorPy.concretefactory.ultrasonicSensorFactory.UltrasonicSensorFactory.createSensor()=libsensorPy.concretefactory.ultrasonicSensorFactory.UltrasonicSensorFactory-class.php#createSensor,Static Method libsensorPy.extension.extendedUltrasonicSensorFactory.ExtendedUltrasonicSensorFactory.createSensor()=libsensorPy.extension.extendedUltrasonicSensorFactory.ExtendedUltrasonicSensorFactory-class.php#createSensor"><a title="libsensorPy.abstractclass.abstractSensorFactory.AbstractSensorFactory.createSensor
libsensorPy.concretefactory.accelerometerSensorFactory.AccelerometerSensorFactory.createSensor
libsensorPy.concretefactory.altitudeSensorFactory.AltitudeSensorFactory.createSensor
libsensorPy.concretefactory.compositeSensorFactory.CompositeSensorFactory.createSensor
libsensorPy.concretefactory.humiditySensorFactory.HumididtySensorFactory.createSensor
libsensorPy.concretefactory.lightSensorFactory.LightSensorFactory.createSensor
libsensorPy.concretefactory.magnetometerSensorFactory.MagnetometerSensorFactory.createSensor
libsensorPy.concretefactory.motionSensorFactory.MotionSensorFactory.createSensor
libsensorPy.concretefactory.pressureSensorFactory.PressureSensorFactory.createSensor
libsensorPy.concretefactory.temperatureSensorFactory.TemperatureSensorFactory.createSensor
libsensorPy.concretefactory.ultrasonicSensorFactory.UltrasonicSensorFactory.createSensor
libsensorPy.extension.extendedUltrasonicSensorFactory.ExtendedUltrasonicSensorFactory.createSensor" class="py-name" href="#" onclick="return doclink('link-5', 'createSensor', 'link-5');">createSensor</a></tt><tt class="py-op">(</tt><tt class="py-string">"ADXL345"</tt><tt class="py-op">)</tt> </tt>
<a name="L10"></a><tt class="py-lineno">10</tt>  <tt class="py-line">    <tt class="py-name">axes</tt> <tt class="py-op">=</tt> <tt id="link-6" class="py-name"><a title="libsensorPy.concretesensor.adxl345" class="py-name" href="#" onclick="return doclink('link-6', 'adxl345', 'link-3');">adxl345</a></tt><tt class="py-op">.</tt><tt id="link-7" class="py-name" targets="Method libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.getAxes()=libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor-class.php#getAxes,Method libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite.getAxes()=libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite-class.php#getAxes,Method libsensorPy.concretesensor.adxl345.ADXL345.getAxes()=libsensorPy.concretesensor.adxl345.ADXL345-class.php#getAxes,Method libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer.getAxes()=libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer-class.php#getAxes"><a title="libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.getAxes
libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite.getAxes
libsensorPy.concretesensor.adxl345.ADXL345.getAxes
libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer.getAxes" class="py-name" href="#" onclick="return doclink('link-7', 'getAxes', 'link-7');">getAxes</a></tt><tt class="py-op">(</tt><tt class="py-name">True</tt><tt class="py-op">)</tt> </tt>
<a name="L11"></a><tt class="py-lineno">11</tt>  <tt class="py-line">    <tt class="py-keyword">print</tt> <tt class="py-op">(</tt><tt class="py-string">"ADXL345 on address 0x%x:"</tt> <tt class="py-op">%</tt> <tt class="py-op">(</tt><tt id="link-8" class="py-name"><a title="libsensorPy.concretesensor.adxl345" class="py-name" href="#" onclick="return doclink('link-8', 'adxl345', 'link-3');">adxl345</a></tt><tt class="py-op">.</tt><tt id="link-9" class="py-name" targets="Variable libsensorPy.concretesensor.adxl345.ADXL345.address=libsensorPy.concretesensor.adxl345.ADXL345-class.php#address"><a title="libsensorPy.concretesensor.adxl345.ADXL345.address" class="py-name" href="#" onclick="return doclink('link-9', 'address', 'link-9');">address</a></tt><tt class="py-op">)</tt><tt class="py-op">)</tt> </tt>
<a name="L12"></a><tt class="py-lineno">12</tt>  <tt class="py-line">    <tt class="py-keyword">print</tt> <tt class="py-op">(</tt><tt class="py-string">"   x = %.3fG"</tt> <tt class="py-op">%</tt> <tt class="py-op">(</tt> <tt class="py-name">axes</tt><tt class="py-op">[</tt><tt class="py-string">'x'</tt><tt class="py-op">]</tt> <tt class="py-op">)</tt><tt class="py-op">)</tt> </tt>
<a name="L13"></a><tt class="py-lineno">13</tt>  <tt class="py-line">    <tt class="py-keyword">print</tt> <tt class="py-op">(</tt><tt class="py-string">"   y = %.3fG"</tt> <tt class="py-op">%</tt> <tt class="py-op">(</tt> <tt class="py-name">axes</tt><tt class="py-op">[</tt><tt class="py-string">'y'</tt><tt class="py-op">]</tt> <tt class="py-op">)</tt><tt class="py-op">)</tt> </tt>
<a name="L14"></a><tt class="py-lineno">14</tt>  <tt class="py-line">    <tt class="py-keyword">print</tt> <tt class="py-op">(</tt><tt class="py-string">"   z = %.3fG"</tt> <tt class="py-op">%</tt> <tt class="py-op">(</tt> <tt class="py-name">axes</tt><tt class="py-op">[</tt><tt class="py-string">'z'</tt><tt class="py-op">]</tt> <tt class="py-op">)</tt><tt class="py-op">)</tt> </tt>
<a name="L15"></a><tt class="py-lineno">15</tt>  <tt class="py-line"> </tt><script type="text/javascript">
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
