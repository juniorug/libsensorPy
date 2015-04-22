
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>libsensorPy.extension.hcsr04ExtensionExample</title>
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
        <a href="libsensorPy.extension-module.php">Package&nbsp;extension</a> ::
        Module&nbsp;hcsr04ExtensionExample
      </span>
    </td>
    <td>
      <table cellpadding="0" cellspacing="0">
        <!-- hide/show private -->
        <tr><td align="right"><span class="options">[<a href="javascript:void(0);" class="privatelink"
    onclick="toggle_private();">hide&nbsp;private</a>]</span></td></tr>
        <tr><td align="right"><span class="options"
            >[<a href="frames.php" target="_top">frames</a
            >]&nbsp;|&nbsp;<a href="libsensorPy.extension.hcsr04ExtensionExample-pysrc.php"
            target="_top">no&nbsp;frames</a>]</span></td></tr>
      </table>
    </td>
  </tr>
</table>
<h1 class="epydoc">Source Code for <a href="libsensorPy.extension.hcsr04ExtensionExample-module.php">Module libsensorPy.extension.hcsr04ExtensionExample</a></h1>
<pre class="py-src">
<a name="L1"></a><tt class="py-lineno"> 1</tt>  <tt class="py-line"><tt class="py-docstring">'''</tt> </tt>
<a name="L2"></a><tt class="py-lineno"> 2</tt>  <tt class="py-line"><tt class="py-docstring">Created on 11/02/2015</tt> </tt>
<a name="L3"></a><tt class="py-lineno"> 3</tt>  <tt class="py-line"><tt class="py-docstring"></tt> </tt>
<a name="L4"></a><tt class="py-lineno"> 4</tt>  <tt class="py-line"><tt class="py-docstring">@author: Junior Mascarenhas</tt> </tt>
<a name="L5"></a><tt class="py-lineno"> 5</tt>  <tt class="py-line"><tt class="py-docstring">'''</tt> </tt>
<a name="L6"></a><tt class="py-lineno"> 6</tt>  <tt class="py-line"> </tt>
<a name="L7"></a><tt class="py-lineno"> 7</tt>  <tt class="py-line"><tt class="py-keyword">from</tt> <tt id="link-0" class="py-name" targets="Module libsensorPy.extension.extendedUltrasonicSensorFactory=libsensorPy.extension.extendedUltrasonicSensorFactory-module.php"><a title="libsensorPy.extension.extendedUltrasonicSensorFactory" class="py-name" href="#" onclick="return doclink('link-0', 'extendedUltrasonicSensorFactory', 'link-0');">extendedUltrasonicSensorFactory</a></tt> <tt class="py-keyword">import</tt> <tt id="link-1" class="py-name" targets="Class libsensorPy.extension.extendedUltrasonicSensorFactory.ExtendedUltrasonicSensorFactory=libsensorPy.extension.extendedUltrasonicSensorFactory.ExtendedUltrasonicSensorFactory-class.php"><a title="libsensorPy.extension.extendedUltrasonicSensorFactory.ExtendedUltrasonicSensorFactory" class="py-name" href="#" onclick="return doclink('link-1', 'ExtendedUltrasonicSensorFactory', 'link-1');">ExtendedUltrasonicSensorFactory</a></tt> </tt>
<a name="L8"></a><tt class="py-lineno"> 8</tt>  <tt class="py-line"> </tt>
<a name="L9"></a><tt class="py-lineno"> 9</tt>  <tt class="py-line"><tt class="py-keyword">if</tt> <tt class="py-name">__name__</tt> <tt class="py-op">==</tt> <tt class="py-string">'__main__'</tt><tt class="py-op">:</tt> </tt>
<a name="L10"></a><tt class="py-lineno">10</tt>  <tt class="py-line"> </tt>
<a name="L11"></a><tt class="py-lineno">11</tt>  <tt class="py-line">    <tt id="link-2" class="py-name" targets="Module libsensorPy.extension.hcsr04=libsensorPy.extension.hcsr04-module.php"><a title="libsensorPy.extension.hcsr04" class="py-name" href="#" onclick="return doclink('link-2', 'hcsr04', 'link-2');">hcsr04</a></tt> <tt class="py-op">=</tt> <tt id="link-3" class="py-name"><a title="libsensorPy.extension.extendedUltrasonicSensorFactory.ExtendedUltrasonicSensorFactory" class="py-name" href="#" onclick="return doclink('link-3', 'ExtendedUltrasonicSensorFactory', 'link-1');">ExtendedUltrasonicSensorFactory</a></tt><tt class="py-op">.</tt><tt id="link-4" class="py-name" targets="Method libsensorPy.abstractclass.abstractSensorFactory.AbstractSensorFactory.createSensor()=libsensorPy.abstractclass.abstractSensorFactory.AbstractSensorFactory-class.php#createSensor,Static Method libsensorPy.concretefactory.accelerometerSensorFactory.AccelerometerSensorFactory.createSensor()=libsensorPy.concretefactory.accelerometerSensorFactory.AccelerometerSensorFactory-class.php#createSensor,Static Method libsensorPy.concretefactory.altitudeSensorFactory.AltitudeSensorFactory.createSensor()=libsensorPy.concretefactory.altitudeSensorFactory.AltitudeSensorFactory-class.php#createSensor,Static Method libsensorPy.concretefactory.compositeSensorFactory.CompositeSensorFactory.createSensor()=libsensorPy.concretefactory.compositeSensorFactory.CompositeSensorFactory-class.php#createSensor,Static Method libsensorPy.concretefactory.humiditySensorFactory.HumididtySensorFactory.createSensor()=libsensorPy.concretefactory.humiditySensorFactory.HumididtySensorFactory-class.php#createSensor,Static Method libsensorPy.concretefactory.lightSensorFactory.LightSensorFactory.createSensor()=libsensorPy.concretefactory.lightSensorFactory.LightSensorFactory-class.php#createSensor,Static Method libsensorPy.concretefactory.magnetometerSensorFactory.MagnetometerSensorFactory.createSensor()=libsensorPy.concretefactory.magnetometerSensorFactory.MagnetometerSensorFactory-class.php#createSensor,Static Method libsensorPy.concretefactory.motionSensorFactory.MotionSensorFactory.createSensor()=libsensorPy.concretefactory.motionSensorFactory.MotionSensorFactory-class.php#createSensor,Static Method libsensorPy.concretefactory.pressureSensorFactory.PressureSensorFactory.createSensor()=libsensorPy.concretefactory.pressureSensorFactory.PressureSensorFactory-class.php#createSensor,Static Method libsensorPy.concretefactory.temperatureSensorFactory.TemperatureSensorFactory.createSensor()=libsensorPy.concretefactory.temperatureSensorFactory.TemperatureSensorFactory-class.php#createSensor,Static Method libsensorPy.concretefactory.ultrasonicSensorFactory.UltrasonicSensorFactory.createSensor()=libsensorPy.concretefactory.ultrasonicSensorFactory.UltrasonicSensorFactory-class.php#createSensor,Static Method libsensorPy.extension.extendedUltrasonicSensorFactory.ExtendedUltrasonicSensorFactory.createSensor()=libsensorPy.extension.extendedUltrasonicSensorFactory.ExtendedUltrasonicSensorFactory-class.php#createSensor"><a title="libsensorPy.abstractclass.abstractSensorFactory.AbstractSensorFactory.createSensor
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
libsensorPy.extension.extendedUltrasonicSensorFactory.ExtendedUltrasonicSensorFactory.createSensor" class="py-name" href="#" onclick="return doclink('link-4', 'createSensor', 'link-4');">createSensor</a></tt><tt class="py-op">(</tt><tt class="py-string">"HCSR04"</tt><tt class="py-op">)</tt> </tt>
<a name="L12"></a><tt class="py-lineno">12</tt>  <tt class="py-line">    <tt class="py-keyword">print</tt> <tt class="py-op">(</tt><tt class="py-string">"Distance in cm: "</tt> <tt class="py-op">+</tt> <tt class="py-name">str</tt><tt class="py-op">(</tt><tt id="link-5" class="py-name"><a title="libsensorPy.extension.hcsr04" class="py-name" href="#" onclick="return doclink('link-5', 'hcsr04', 'link-2');">hcsr04</a></tt><tt class="py-op">.</tt><tt id="link-6" class="py-name" targets="Method libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor.distance_in_cm()=libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor-class.php#distance_in_cm,Method libsensorPy.concretesensor.hysrf05.HYSRF05.distance_in_cm()=libsensorPy.concretesensor.hysrf05.HYSRF05-class.php#distance_in_cm,Method libsensorPy.concretesensor.parallaxPing.ParallaxPing.distance_in_cm()=libsensorPy.concretesensor.parallaxPing.ParallaxPing-class.php#distance_in_cm,Method libsensorPy.concretesensor.srf04.SRF04.distance_in_cm()=libsensorPy.concretesensor.srf04.SRF04-class.php#distance_in_cm,Method libsensorPy.concretesensor.srf05.SRF05.distance_in_cm()=libsensorPy.concretesensor.srf05.SRF05-class.php#distance_in_cm,Method libsensorPy.concretesensor.urm37.URM37.distance_in_cm()=libsensorPy.concretesensor.urm37.URM37-class.php#distance_in_cm,Method libsensorPy.extension.hcsr04.HCSR04.distance_in_cm()=libsensorPy.extension.hcsr04.HCSR04-class.php#distance_in_cm"><a title="libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor.distance_in_cm
libsensorPy.concretesensor.hysrf05.HYSRF05.distance_in_cm
libsensorPy.concretesensor.parallaxPing.ParallaxPing.distance_in_cm
libsensorPy.concretesensor.srf04.SRF04.distance_in_cm
libsensorPy.concretesensor.srf05.SRF05.distance_in_cm
libsensorPy.concretesensor.urm37.URM37.distance_in_cm
libsensorPy.extension.hcsr04.HCSR04.distance_in_cm" class="py-name" href="#" onclick="return doclink('link-6', 'distance_in_cm', 'link-6');">distance_in_cm</a></tt><tt class="py-op">(</tt><tt class="py-op">)</tt><tt class="py-op">)</tt> <tt class="py-op">+</tt> <tt class="py-string">" cm"</tt><tt class="py-op">)</tt> </tt>
<a name="L13"></a><tt class="py-lineno">13</tt>  <tt class="py-line">    <tt class="py-keyword">print</tt> <tt class="py-op">(</tt><tt class="py-string">"Distance in inches: "</tt> <tt class="py-op">+</tt> <tt class="py-name">str</tt><tt class="py-op">(</tt><tt id="link-7" class="py-name"><a title="libsensorPy.extension.hcsr04" class="py-name" href="#" onclick="return doclink('link-7', 'hcsr04', 'link-2');">hcsr04</a></tt><tt class="py-op">.</tt><tt id="link-8" class="py-name" targets="Method libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor.distance_in_inches()=libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor-class.php#distance_in_inches"><a title="libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor.distance_in_inches" class="py-name" href="#" onclick="return doclink('link-8', 'distance_in_inches', 'link-8');">distance_in_inches</a></tt><tt class="py-op">(</tt><tt class="py-op">)</tt><tt class="py-op">)</tt> <tt class="py-op">+</tt> <tt class="py-string">" in"</tt><tt class="py-op">)</tt> </tt>
<a name="L14"></a><tt class="py-lineno">14</tt>  <tt class="py-line"> </tt><script type="text/javascript">
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
