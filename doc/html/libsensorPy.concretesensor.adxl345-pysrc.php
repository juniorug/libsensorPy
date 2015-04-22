
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>libsensorPy.concretesensor.adxl345</title>
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
        Module&nbsp;adxl345
      </span>
    </td>
    <td>
      <table cellpadding="0" cellspacing="0">
        <!-- hide/show private -->
        <tr><td align="right"><span class="options">[<a href="javascript:void(0);" class="privatelink"
    onclick="toggle_private();">hide&nbsp;private</a>]</span></td></tr>
        <tr><td align="right"><span class="options"
            >[<a href="frames.php" target="_top">frames</a
            >]&nbsp;|&nbsp;<a href="libsensorPy.concretesensor.adxl345-pysrc.php"
            target="_top">no&nbsp;frames</a>]</span></td></tr>
      </table>
    </td>
  </tr>
</table>
<h1 class="epydoc">Source Code for <a href="libsensorPy.concretesensor.adxl345-module.php">Module libsensorPy.concretesensor.adxl345</a></h1>
<pre class="py-src">
<a name="L1"></a><tt class="py-lineno">  1</tt>  <tt class="py-line"><tt class="py-docstring">'''</tt> </tt>
<a name="L2"></a><tt class="py-lineno">  2</tt>  <tt class="py-line"><tt class="py-docstring">Created on 16/03/2015</tt> </tt>
<a name="L3"></a><tt class="py-lineno">  3</tt>  <tt class="py-line"><tt class="py-docstring"></tt> </tt>
<a name="L4"></a><tt class="py-lineno">  4</tt>  <tt class="py-line"><tt class="py-docstring">@author: Junior Mascarenhas</tt> </tt>
<a name="L5"></a><tt class="py-lineno">  5</tt>  <tt class="py-line"><tt class="py-docstring">based on earlyer version from</tt> </tt>
<a name="L6"></a><tt class="py-lineno">  6</tt>  <tt class="py-line"><tt class="py-docstring">the one written by Jonathan Williamson</tt> </tt>
<a name="L7"></a><tt class="py-lineno">  7</tt>  <tt class="py-line"><tt class="py-docstring">SEE License_Pimoroni.txt included in this package</tt> </tt>
<a name="L8"></a><tt class="py-lineno">  8</tt>  <tt class="py-line"><tt class="py-docstring">'''</tt> </tt>
<a name="L9"></a><tt class="py-lineno">  9</tt>  <tt class="py-line"> </tt>
<a name="L10"></a><tt class="py-lineno"> 10</tt>  <tt class="py-line"><tt class="py-keyword">import</tt> <tt class="py-name">smbus</tt> </tt>
<a name="L11"></a><tt class="py-lineno"> 11</tt>  <tt class="py-line"><tt class="py-keyword">from</tt> <tt id="link-0" class="py-name" targets="Package libsensorPy.abstractclass=libsensorPy.abstractclass-module.php"><a title="libsensorPy.abstractclass" class="py-name" href="#" onclick="return doclink('link-0', 'abstractclass', 'link-0');">abstractclass</a></tt><tt class="py-op">.</tt><tt id="link-1" class="py-name" targets="Module libsensorPy.abstractclass.accelerometerSensor=libsensorPy.abstractclass.accelerometerSensor-module.php"><a title="libsensorPy.abstractclass.accelerometerSensor" class="py-name" href="#" onclick="return doclink('link-1', 'accelerometerSensor', 'link-1');">accelerometerSensor</a></tt> <tt class="py-keyword">import</tt> <tt id="link-2" class="py-name" targets="Class libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor=libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor-class.php"><a title="libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor" class="py-name" href="#" onclick="return doclink('link-2', 'AccelerometerSensor', 'link-2');">AccelerometerSensor</a></tt> </tt>
<a name="L12"></a><tt class="py-lineno"> 12</tt>  <tt class="py-line"> </tt>
<a name="L13"></a><tt class="py-lineno"> 13</tt>  <tt class="py-line"> </tt>
<a name="ADXL345"></a><div id="ADXL345-def"><a name="L14"></a><tt class="py-lineno"> 14</tt> <a class="py-toggle" href="#" id="ADXL345-toggle" onclick="return toggle('ADXL345');">-</a><tt class="py-line"><tt class="py-keyword">class</tt> <a class="py-def-name" href="libsensorPy.concretesensor.adxl345.ADXL345-class.php">ADXL345</a><tt class="py-op">(</tt><tt class="py-base-class">AccelerometerSensor</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="ADXL345-collapsed" style="display:none;" pad="+++" indent="++++"></div><div id="ADXL345-expanded"><a name="L15"></a><tt class="py-lineno"> 15</tt>  <tt class="py-line"> </tt>
<a name="L16"></a><tt class="py-lineno"> 16</tt>  <tt class="py-line">    <tt id="link-3" class="py-name" targets="Variable libsensorPy.concretesensor.adxl345.ADXL345.address=libsensorPy.concretesensor.adxl345.ADXL345-class.php#address"><a title="libsensorPy.concretesensor.adxl345.ADXL345.address" class="py-name" href="#" onclick="return doclink('link-3', 'address', 'link-3');">address</a></tt> <tt class="py-op">=</tt> <tt class="py-name">None</tt> </tt>
<a name="L17"></a><tt class="py-lineno"> 17</tt>  <tt class="py-line">    <tt class="py-comment"># select the correct i2c bus for this revision of Raspberry Pi</tt> </tt>
<a name="L18"></a><tt class="py-lineno"> 18</tt>  <tt class="py-line">    <tt class="py-comment">#revision = ([l[12:-1] for l in open('/proc/cpuinfo','r').readlines() if l[:8]=="Revision"]+['0000'])[0]</tt> </tt>
<a name="L19"></a><tt class="py-lineno"> 19</tt>  <tt class="py-line"> </tt>
<a name="L20"></a><tt class="py-lineno"> 20</tt>  <tt class="py-line">    <tt class="py-comment"># ADXL345 constants</tt> </tt>
<a name="L21"></a><tt class="py-lineno"> 21</tt>  <tt class="py-line">    <tt id="link-4" class="py-name" targets="Variable libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.EARTH_GRAVITY_MS2=libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor-class.php#EARTH_GRAVITY_MS2,Variable libsensorPy.concretesensor.adxl345.ADXL345.EARTH_GRAVITY_MS2=libsensorPy.concretesensor.adxl345.ADXL345-class.php#EARTH_GRAVITY_MS2"><a title="libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.EARTH_GRAVITY_MS2
libsensorPy.concretesensor.adxl345.ADXL345.EARTH_GRAVITY_MS2" class="py-name" href="#" onclick="return doclink('link-4', 'EARTH_GRAVITY_MS2', 'link-4');">EARTH_GRAVITY_MS2</a></tt> <tt class="py-op">=</tt> <tt class="py-number">9.80665</tt> </tt>
<a name="L22"></a><tt class="py-lineno"> 22</tt>  <tt class="py-line">    <tt id="link-5" class="py-name" targets="Variable libsensorPy.concretesensor.adxl345.ADXL345.SCALE_MULTIPLIER=libsensorPy.concretesensor.adxl345.ADXL345-class.php#SCALE_MULTIPLIER"><a title="libsensorPy.concretesensor.adxl345.ADXL345.SCALE_MULTIPLIER" class="py-name" href="#" onclick="return doclink('link-5', 'SCALE_MULTIPLIER', 'link-5');">SCALE_MULTIPLIER</a></tt> <tt class="py-op">=</tt> <tt class="py-number">0.004</tt> </tt>
<a name="L23"></a><tt class="py-lineno"> 23</tt>  <tt class="py-line"> </tt>
<a name="L24"></a><tt class="py-lineno"> 24</tt>  <tt class="py-line">    <tt id="link-6" class="py-name" targets="Variable libsensorPy.concretesensor.adxl345.ADXL345.DATA_FORMAT=libsensorPy.concretesensor.adxl345.ADXL345-class.php#DATA_FORMAT"><a title="libsensorPy.concretesensor.adxl345.ADXL345.DATA_FORMAT" class="py-name" href="#" onclick="return doclink('link-6', 'DATA_FORMAT', 'link-6');">DATA_FORMAT</a></tt> <tt class="py-op">=</tt> <tt class="py-number">0x31</tt> </tt>
<a name="L25"></a><tt class="py-lineno"> 25</tt>  <tt class="py-line">    <tt id="link-7" class="py-name" targets="Variable libsensorPy.concretesensor.adxl345.ADXL345.BW_RATE=libsensorPy.concretesensor.adxl345.ADXL345-class.php#BW_RATE"><a title="libsensorPy.concretesensor.adxl345.ADXL345.BW_RATE" class="py-name" href="#" onclick="return doclink('link-7', 'BW_RATE', 'link-7');">BW_RATE</a></tt> <tt class="py-op">=</tt> <tt class="py-number">0x2C</tt> </tt>
<a name="L26"></a><tt class="py-lineno"> 26</tt>  <tt class="py-line">    <tt id="link-8" class="py-name" targets="Variable libsensorPy.concretesensor.adxl345.ADXL345.POWER_CTL=libsensorPy.concretesensor.adxl345.ADXL345-class.php#POWER_CTL"><a title="libsensorPy.concretesensor.adxl345.ADXL345.POWER_CTL" class="py-name" href="#" onclick="return doclink('link-8', 'POWER_CTL', 'link-8');">POWER_CTL</a></tt> <tt class="py-op">=</tt> <tt class="py-number">0x2D</tt> </tt>
<a name="L27"></a><tt class="py-lineno"> 27</tt>  <tt class="py-line"> </tt>
<a name="L28"></a><tt class="py-lineno"> 28</tt>  <tt class="py-line">    <tt id="link-9" class="py-name" targets="Variable libsensorPy.concretesensor.adxl345.ADXL345.BW_RATE_1600HZ=libsensorPy.concretesensor.adxl345.ADXL345-class.php#BW_RATE_1600HZ"><a title="libsensorPy.concretesensor.adxl345.ADXL345.BW_RATE_1600HZ" class="py-name" href="#" onclick="return doclink('link-9', 'BW_RATE_1600HZ', 'link-9');">BW_RATE_1600HZ</a></tt> <tt class="py-op">=</tt> <tt class="py-number">0x0F</tt> </tt>
<a name="L29"></a><tt class="py-lineno"> 29</tt>  <tt class="py-line">    <tt id="link-10" class="py-name" targets="Variable libsensorPy.concretesensor.adxl345.ADXL345.BW_RATE_800HZ=libsensorPy.concretesensor.adxl345.ADXL345-class.php#BW_RATE_800HZ"><a title="libsensorPy.concretesensor.adxl345.ADXL345.BW_RATE_800HZ" class="py-name" href="#" onclick="return doclink('link-10', 'BW_RATE_800HZ', 'link-10');">BW_RATE_800HZ</a></tt> <tt class="py-op">=</tt> <tt class="py-number">0x0E</tt> </tt>
<a name="L30"></a><tt class="py-lineno"> 30</tt>  <tt class="py-line">    <tt id="link-11" class="py-name" targets="Variable libsensorPy.concretesensor.adxl345.ADXL345.BW_RATE_400HZ=libsensorPy.concretesensor.adxl345.ADXL345-class.php#BW_RATE_400HZ"><a title="libsensorPy.concretesensor.adxl345.ADXL345.BW_RATE_400HZ" class="py-name" href="#" onclick="return doclink('link-11', 'BW_RATE_400HZ', 'link-11');">BW_RATE_400HZ</a></tt> <tt class="py-op">=</tt> <tt class="py-number">0x0D</tt> </tt>
<a name="L31"></a><tt class="py-lineno"> 31</tt>  <tt class="py-line">    <tt id="link-12" class="py-name" targets="Variable libsensorPy.concretesensor.adxl345.ADXL345.BW_RATE_200HZ=libsensorPy.concretesensor.adxl345.ADXL345-class.php#BW_RATE_200HZ"><a title="libsensorPy.concretesensor.adxl345.ADXL345.BW_RATE_200HZ" class="py-name" href="#" onclick="return doclink('link-12', 'BW_RATE_200HZ', 'link-12');">BW_RATE_200HZ</a></tt> <tt class="py-op">=</tt> <tt class="py-number">0x0C</tt> </tt>
<a name="L32"></a><tt class="py-lineno"> 32</tt>  <tt class="py-line">    <tt id="link-13" class="py-name" targets="Variable libsensorPy.concretesensor.adxl345.ADXL345.BW_RATE_100HZ=libsensorPy.concretesensor.adxl345.ADXL345-class.php#BW_RATE_100HZ"><a title="libsensorPy.concretesensor.adxl345.ADXL345.BW_RATE_100HZ" class="py-name" href="#" onclick="return doclink('link-13', 'BW_RATE_100HZ', 'link-13');">BW_RATE_100HZ</a></tt> <tt class="py-op">=</tt> <tt class="py-number">0x0B</tt> </tt>
<a name="L33"></a><tt class="py-lineno"> 33</tt>  <tt class="py-line">    <tt id="link-14" class="py-name" targets="Variable libsensorPy.concretesensor.adxl345.ADXL345.BW_RATE_50HZ=libsensorPy.concretesensor.adxl345.ADXL345-class.php#BW_RATE_50HZ"><a title="libsensorPy.concretesensor.adxl345.ADXL345.BW_RATE_50HZ" class="py-name" href="#" onclick="return doclink('link-14', 'BW_RATE_50HZ', 'link-14');">BW_RATE_50HZ</a></tt> <tt class="py-op">=</tt> <tt class="py-number">0x0A</tt> </tt>
<a name="L34"></a><tt class="py-lineno"> 34</tt>  <tt class="py-line">    <tt id="link-15" class="py-name" targets="Variable libsensorPy.concretesensor.adxl345.ADXL345.BW_RATE_25HZ=libsensorPy.concretesensor.adxl345.ADXL345-class.php#BW_RATE_25HZ"><a title="libsensorPy.concretesensor.adxl345.ADXL345.BW_RATE_25HZ" class="py-name" href="#" onclick="return doclink('link-15', 'BW_RATE_25HZ', 'link-15');">BW_RATE_25HZ</a></tt> <tt class="py-op">=</tt> <tt class="py-number">0x09</tt> </tt>
<a name="L35"></a><tt class="py-lineno"> 35</tt>  <tt class="py-line"> </tt>
<a name="L36"></a><tt class="py-lineno"> 36</tt>  <tt class="py-line">    <tt id="link-16" class="py-name" targets="Variable libsensorPy.concretesensor.adxl345.ADXL345.RANGE_2G=libsensorPy.concretesensor.adxl345.ADXL345-class.php#RANGE_2G"><a title="libsensorPy.concretesensor.adxl345.ADXL345.RANGE_2G" class="py-name" href="#" onclick="return doclink('link-16', 'RANGE_2G', 'link-16');">RANGE_2G</a></tt> <tt class="py-op">=</tt> <tt class="py-number">0x00</tt> </tt>
<a name="L37"></a><tt class="py-lineno"> 37</tt>  <tt class="py-line">    <tt id="link-17" class="py-name" targets="Variable libsensorPy.concretesensor.adxl345.ADXL345.RANGE_4G=libsensorPy.concretesensor.adxl345.ADXL345-class.php#RANGE_4G"><a title="libsensorPy.concretesensor.adxl345.ADXL345.RANGE_4G" class="py-name" href="#" onclick="return doclink('link-17', 'RANGE_4G', 'link-17');">RANGE_4G</a></tt> <tt class="py-op">=</tt> <tt class="py-number">0x01</tt> </tt>
<a name="L38"></a><tt class="py-lineno"> 38</tt>  <tt class="py-line">    <tt id="link-18" class="py-name" targets="Variable libsensorPy.concretesensor.adxl345.ADXL345.RANGE_8G=libsensorPy.concretesensor.adxl345.ADXL345-class.php#RANGE_8G"><a title="libsensorPy.concretesensor.adxl345.ADXL345.RANGE_8G" class="py-name" href="#" onclick="return doclink('link-18', 'RANGE_8G', 'link-18');">RANGE_8G</a></tt> <tt class="py-op">=</tt> <tt class="py-number">0x02</tt> </tt>
<a name="L39"></a><tt class="py-lineno"> 39</tt>  <tt class="py-line">    <tt id="link-19" class="py-name" targets="Variable libsensorPy.concretesensor.adxl345.ADXL345.RANGE_16G=libsensorPy.concretesensor.adxl345.ADXL345-class.php#RANGE_16G"><a title="libsensorPy.concretesensor.adxl345.ADXL345.RANGE_16G" class="py-name" href="#" onclick="return doclink('link-19', 'RANGE_16G', 'link-19');">RANGE_16G</a></tt> <tt class="py-op">=</tt> <tt class="py-number">0x03</tt> </tt>
<a name="L40"></a><tt class="py-lineno"> 40</tt>  <tt class="py-line"> </tt>
<a name="L41"></a><tt class="py-lineno"> 41</tt>  <tt class="py-line">    <tt id="link-20" class="py-name" targets="Variable libsensorPy.concretesensor.adxl345.ADXL345.MEASURE=libsensorPy.concretesensor.adxl345.ADXL345-class.php#MEASURE"><a title="libsensorPy.concretesensor.adxl345.ADXL345.MEASURE" class="py-name" href="#" onclick="return doclink('link-20', 'MEASURE', 'link-20');">MEASURE</a></tt> <tt class="py-op">=</tt> <tt class="py-number">0x08</tt> </tt>
<a name="L42"></a><tt class="py-lineno"> 42</tt>  <tt class="py-line">    <tt id="link-21" class="py-name" targets="Variable libsensorPy.concretesensor.adxl345.ADXL345.AXES_DATA=libsensorPy.concretesensor.adxl345.ADXL345-class.php#AXES_DATA"><a title="libsensorPy.concretesensor.adxl345.ADXL345.AXES_DATA" class="py-name" href="#" onclick="return doclink('link-21', 'AXES_DATA', 'link-21');">AXES_DATA</a></tt> <tt class="py-op">=</tt> <tt class="py-number">0x32</tt> </tt>
<a name="L43"></a><tt class="py-lineno"> 43</tt>  <tt class="py-line"> </tt>
<a name="ADXL345.__init__"></a><div id="ADXL345.__init__-def"><a name="L44"></a><tt class="py-lineno"> 44</tt> <a class="py-toggle" href="#" id="ADXL345.__init__-toggle" onclick="return toggle('ADXL345.__init__');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.concretesensor.adxl345.ADXL345-class.php#__init__">__init__</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">,</tt> <tt class="py-param">address</tt> <tt class="py-op">=</tt> <tt class="py-number">0x53</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="ADXL345.__init__-collapsed" style="display:none;" pad="+++" indent="++++++++"></div><div id="ADXL345.__init__-expanded"><a name="L45"></a><tt class="py-lineno"> 45</tt>  <tt class="py-line">        <tt class="py-docstring">"""      </tt> </tt>
<a name="L46"></a><tt class="py-lineno"> 46</tt>  <tt class="py-line"><tt class="py-docstring">        @param address: The register's address to be read</tt> </tt>
<a name="L47"></a><tt class="py-lineno"> 47</tt>  <tt class="py-line"><tt class="py-docstring">        @type address: int16</tt> </tt>
<a name="L48"></a><tt class="py-lineno"> 48</tt>  <tt class="py-line"><tt class="py-docstring">        """</tt> </tt>
<a name="L49"></a><tt class="py-lineno"> 49</tt>  <tt class="py-line">         </tt>
<a name="L50"></a><tt class="py-lineno"> 50</tt>  <tt class="py-line">        <tt id="link-22" class="py-name"><a title="libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor" class="py-name" href="#" onclick="return doclink('link-22', 'AccelerometerSensor', 'link-2');">AccelerometerSensor</a></tt><tt class="py-op">.</tt><tt id="link-23" class="py-name" targets="Method libsensorPy.abstractclass.abstractActuatorFactory.AbstractActuatorFactory.__init__()=libsensorPy.abstractclass.abstractActuatorFactory.AbstractActuatorFactory-class.php#__init__,Method libsensorPy.abstractclass.abstractEvent.AbstractEvent.__init__()=libsensorPy.abstractclass.abstractEvent.AbstractEvent-class.php#__init__,Method libsensorPy.abstractclass.abstractSensorFactory.AbstractSensorFactory.__init__()=libsensorPy.abstractclass.abstractSensorFactory.AbstractSensorFactory-class.php#__init__,Method libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.__init__()=libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor-class.php#__init__,Method libsensorPy.abstractclass.actuator.Actuator.__init__()=libsensorPy.abstractclass.actuator.Actuator-class.php#__init__,Method libsensorPy.abstractclass.altitudeSensor.AltitudeSensor.__init__()=libsensorPy.abstractclass.altitudeSensor.AltitudeSensor-class.php#__init__,Method libsensorPy.abstractclass.dcMotorActuator.DCMotorActuator.__init__()=libsensorPy.abstractclass.dcMotorActuator.DCMotorActuator-class.php#__init__,Method libsensorPy.abstractclass.eventObserver.EventObserver.__init__()=libsensorPy.abstractclass.eventObserver.EventObserver-class.php#__init__,Method libsensorPy.abstractclass.humiditySensor.HumiditySensor.__init__()=libsensorPy.abstractclass.humiditySensor.HumiditySensor-class.php#__init__,Method libsensorPy.abstractclass.lightSensor.LightSensor.__init__()=libsensorPy.abstractclass.lightSensor.LightSensor-class.php#__init__,Method libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor.__init__()=libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor-class.php#__init__,Method libsensorPy.abstractclass.motionSensor.MotionSensor.__init__()=libsensorPy.abstractclass.motionSensor.MotionSensor-class.php#__init__,Method libsensorPy.abstractclass.motorActuator.MotorActuator.__init__()=libsensorPy.abstractclass.motorActuator.MotorActuator-class.php#__init__,Method libsensorPy.abstractclass.pressureSensor.PressureSensor.__init__()=libsensorPy.abstractclass.pressureSensor.PressureSensor-class.php#__init__,Method libsensorPy.abstractclass.sensor.Sensor.__init__()=libsensorPy.abstractclass.sensor.Sensor-class.php#__init__,Method libsensorPy.abstractclass.servoMotorActuator.ServoMotorActuator.__init__()=libsensorPy.abstractclass.servoMotorActuator.ServoMotorActuator-class.php#__init__,Method libsensorPy.abstractclass.stepperMotorActuator.StepperMotorActuator.__init__()=libsensorPy.abstractclass.stepperMotorActuator.StepperMotorActuator-class.php#__init__,Method libsensorPy.abstractclass.temperatureSensor.TemperatureSensor.__init__()=libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.php#__init__,Method libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor.__init__()=libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor-class.php#__init__,Method libsensorPy.compositesensor.bmp085Composite.BMP085Composite.__init__()=libsensorPy.compositesensor.bmp085Composite.BMP085Composite-class.php#__init__,Method libsensorPy.compositesensor.dht11Composite.DHT11Composite.__init__()=libsensorPy.compositesensor.dht11Composite.DHT11Composite-class.php#__init__,Method libsensorPy.compositesensor.dht22Composite.DHT22Composite.__init__()=libsensorPy.compositesensor.dht22Composite.DHT22Composite-class.php#__init__,Method libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite.__init__()=libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite-class.php#__init__,Method libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48.__init__()=libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48-class.php#__init__,Method libsensorPy.concreteevent.temperatureEvent.TemperatureEvent.__init__()=libsensorPy.concreteevent.temperatureEvent.TemperatureEvent-class.php#__init__,Method libsensorPy.concretefactory.accelerometerSensorFactory.AccelerometerSensorFactory.__init__()=libsensorPy.concretefactory.accelerometerSensorFactory.AccelerometerSensorFactory-class.php#__init__,Method libsensorPy.concretefactory.altitudeSensorFactory.AltitudeSensorFactory.__init__()=libsensorPy.concretefactory.altitudeSensorFactory.AltitudeSensorFactory-class.php#__init__,Method libsensorPy.concretefactory.compositeSensorFactory.CompositeSensorFactory.__init__()=libsensorPy.concretefactory.compositeSensorFactory.CompositeSensorFactory-class.php#__init__,Method libsensorPy.concretefactory.humiditySensorFactory.HumididtySensorFactory.__init__()=libsensorPy.concretefactory.humiditySensorFactory.HumididtySensorFactory-class.php#__init__,Method libsensorPy.concretefactory.lightSensorFactory.LightSensorFactory.__init__()=libsensorPy.concretefactory.lightSensorFactory.LightSensorFactory-class.php#__init__,Method libsensorPy.concretefactory.magnetometerSensorFactory.MagnetometerSensorFactory.__init__()=libsensorPy.concretefactory.magnetometerSensorFactory.MagnetometerSensorFactory-class.php#__init__,Method libsensorPy.concretefactory.motionSensorFactory.MotionSensorFactory.__init__()=libsensorPy.concretefactory.motionSensorFactory.MotionSensorFactory-class.php#__init__,Method libsensorPy.concretefactory.pressureSensorFactory.PressureSensorFactory.__init__()=libsensorPy.concretefactory.pressureSensorFactory.PressureSensorFactory-class.php#__init__,Method libsensorPy.concretefactory.stepperMotorActuatorFactory.StepperMotorActuatorFactory.__init__()=libsensorPy.concretefactory.stepperMotorActuatorFactory.StepperMotorActuatorFactory-class.php#__init__,Method libsensorPy.concretefactory.temperatureSensorFactory.TemperatureSensorFactory.__init__()=libsensorPy.concretefactory.temperatureSensorFactory.TemperatureSensorFactory-class.php#__init__,Method libsensorPy.concretefactory.ultrasonicSensorFactory.UltrasonicSensorFactory.__init__()=libsensorPy.concretefactory.ultrasonicSensorFactory.UltrasonicSensorFactory-class.php#__init__,Method libsensorPy.concreteobserver.currentConditionDisplay.CurrentConditionDisplay.__init__()=libsensorPy.concreteobserver.currentConditionDisplay.CurrentConditionDisplay-class.php#__init__,Method libsensorPy.concretesensor.adxl345.ADXL345.__init__()=libsensorPy.concretesensor.adxl345.ADXL345-class.php#__init__,Method libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude.__init__()=libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude-class.php#__init__,Method libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure.__init__()=libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure-class.php#__init__,Method libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature.__init__()=libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature-class.php#__init__,Method libsensorPy.concretesensor.dht11Humidity.DHT11Humidity.__init__()=libsensorPy.concretesensor.dht11Humidity.DHT11Humidity-class.php#__init__,Method libsensorPy.concretesensor.dht11Temperature.DHT11Temperature.__init__()=libsensorPy.concretesensor.dht11Temperature.DHT11Temperature-class.php#__init__,Method libsensorPy.concretesensor.dht22Humidity.DHT22Humidity.__init__()=libsensorPy.concretesensor.dht22Humidity.DHT22Humidity-class.php#__init__,Method libsensorPy.concretesensor.dht22Temperature.DHT22Temperature.__init__()=libsensorPy.concretesensor.dht22Temperature.DHT22Temperature-class.php#__init__,Method libsensorPy.concretesensor.hmc5883l.HMC5883L.__init__()=libsensorPy.concretesensor.hmc5883l.HMC5883L-class.php#__init__,Method libsensorPy.concretesensor.hysrf05.HYSRF05.__init__()=libsensorPy.concretesensor.hysrf05.HYSRF05-class.php#__init__,Method libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer.__init__()=libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer-class.php#__init__,Method libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer.__init__()=libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer-class.php#__init__,Method libsensorPy.concretesensor.parallaxPing.ParallaxPing.__init__()=libsensorPy.concretesensor.parallaxPing.ParallaxPing-class.php#__init__,Method libsensorPy.concretesensor.pir.PIR.__init__()=libsensorPy.concretesensor.pir.PIR-class.php#__init__,Method libsensorPy.concretesensor.srf04.SRF04.__init__()=libsensorPy.concretesensor.srf04.SRF04-class.php#__init__,Method libsensorPy.concretesensor.srf05.SRF05.__init__()=libsensorPy.concretesensor.srf05.SRF05-class.php#__init__,Method libsensorPy.concretesensor.tcs34725.TCS34725.__init__()=libsensorPy.concretesensor.tcs34725.TCS34725-class.php#__init__,Method libsensorPy.concretesensor.urm37.URM37.__init__()=libsensorPy.concretesensor.urm37.URM37-class.php#__init__,Method libsensorPy.extension.extendedUltrasonicSensorFactory.ExtendedUltrasonicSensorFactory.__init__()=libsensorPy.extension.extendedUltrasonicSensorFactory.ExtendedUltrasonicSensorFactory-class.php#__init__,Method libsensorPy.extension.hcsr04.HCSR04.__init__()=libsensorPy.extension.hcsr04.HCSR04-class.php#__init__,Method libsensorPy.utils.pycomms.PyComms.__init__()=libsensorPy.utils.pycomms.PyComms-class.php#__init__"><a title="libsensorPy.abstractclass.abstractActuatorFactory.AbstractActuatorFactory.__init__
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
libsensorPy.utils.pycomms.PyComms.__init__" class="py-name" href="#" onclick="return doclink('link-23', '__init__', 'link-23');">__init__</a></tt><tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">)</tt> </tt>
<a name="L51"></a><tt class="py-lineno"> 51</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt id="link-24" class="py-name"><a title="libsensorPy.concretesensor.adxl345.ADXL345.address" class="py-name" href="#" onclick="return doclink('link-24', 'address', 'link-3');">address</a></tt> <tt class="py-op">=</tt> <tt id="link-25" class="py-name"><a title="libsensorPy.concretesensor.adxl345.ADXL345.address" class="py-name" href="#" onclick="return doclink('link-25', 'address', 'link-3');">address</a></tt> </tt>
<a name="L52"></a><tt class="py-lineno"> 52</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt id="link-26" class="py-name" targets="Method libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.setup()=libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor-class.php#setup,Method libsensorPy.abstractclass.actuator.Actuator.setup()=libsensorPy.abstractclass.actuator.Actuator-class.php#setup,Method libsensorPy.abstractclass.altitudeSensor.AltitudeSensor.setup()=libsensorPy.abstractclass.altitudeSensor.AltitudeSensor-class.php#setup,Method libsensorPy.abstractclass.humiditySensor.HumiditySensor.setup()=libsensorPy.abstractclass.humiditySensor.HumiditySensor-class.php#setup,Method libsensorPy.abstractclass.lightSensor.LightSensor.setup()=libsensorPy.abstractclass.lightSensor.LightSensor-class.php#setup,Method libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor.setup()=libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor-class.php#setup,Method libsensorPy.abstractclass.motionSensor.MotionSensor.setup()=libsensorPy.abstractclass.motionSensor.MotionSensor-class.php#setup,Method libsensorPy.abstractclass.motorActuator.MotorActuator.setup()=libsensorPy.abstractclass.motorActuator.MotorActuator-class.php#setup,Method libsensorPy.abstractclass.pressureSensor.PressureSensor.setup()=libsensorPy.abstractclass.pressureSensor.PressureSensor-class.php#setup,Method libsensorPy.abstractclass.sensor.Sensor.setup()=libsensorPy.abstractclass.sensor.Sensor-class.php#setup,Method libsensorPy.abstractclass.temperatureSensor.TemperatureSensor.setup()=libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.php#setup,Method libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor.setup()=libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor-class.php#setup,Method libsensorPy.compositesensor.bmp085Composite.BMP085Composite.setup()=libsensorPy.compositesensor.bmp085Composite.BMP085Composite-class.php#setup,Method libsensorPy.compositesensor.dht11Composite.DHT11Composite.setup()=libsensorPy.compositesensor.dht11Composite.DHT11Composite-class.php#setup,Method libsensorPy.compositesensor.dht22Composite.DHT22Composite.setup()=libsensorPy.compositesensor.dht22Composite.DHT22Composite-class.php#setup,Method libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite.setup()=libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite-class.php#setup,Method libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48.setup()=libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48-class.php#setup,Method libsensorPy.concretesensor.adxl345.ADXL345.setup()=libsensorPy.concretesensor.adxl345.ADXL345-class.php#setup,Method libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude.setup()=libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude-class.php#setup,Method libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure.setup()=libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure-class.php#setup,Method libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature.setup()=libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature-class.php#setup,Method libsensorPy.concretesensor.dht11Humidity.DHT11Humidity.setup()=libsensorPy.concretesensor.dht11Humidity.DHT11Humidity-class.php#setup,Method libsensorPy.concretesensor.dht11Temperature.DHT11Temperature.setup()=libsensorPy.concretesensor.dht11Temperature.DHT11Temperature-class.php#setup,Method libsensorPy.concretesensor.dht22Humidity.DHT22Humidity.setup()=libsensorPy.concretesensor.dht22Humidity.DHT22Humidity-class.php#setup,Method libsensorPy.concretesensor.dht22Temperature.DHT22Temperature.setup()=libsensorPy.concretesensor.dht22Temperature.DHT22Temperature-class.php#setup,Method libsensorPy.concretesensor.hmc5883l.HMC5883L.setup()=libsensorPy.concretesensor.hmc5883l.HMC5883L-class.php#setup,Method libsensorPy.concretesensor.hysrf05.HYSRF05.setup()=libsensorPy.concretesensor.hysrf05.HYSRF05-class.php#setup,Method libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer.setup()=libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer-class.php#setup,Method libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer.setup()=libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer-class.php#setup,Method libsensorPy.concretesensor.parallaxPing.ParallaxPing.setup()=libsensorPy.concretesensor.parallaxPing.ParallaxPing-class.php#setup,Method libsensorPy.concretesensor.pir.PIR.setup()=libsensorPy.concretesensor.pir.PIR-class.php#setup,Method libsensorPy.concretesensor.srf04.SRF04.setup()=libsensorPy.concretesensor.srf04.SRF04-class.php#setup,Method libsensorPy.concretesensor.srf05.SRF05.setup()=libsensorPy.concretesensor.srf05.SRF05-class.php#setup,Method libsensorPy.concretesensor.tcs34725.TCS34725.setup()=libsensorPy.concretesensor.tcs34725.TCS34725-class.php#setup,Method libsensorPy.concretesensor.urm37.URM37.setup()=libsensorPy.concretesensor.urm37.URM37-class.php#setup,Method libsensorPy.extension.hcsr04.HCSR04.setup()=libsensorPy.extension.hcsr04.HCSR04-class.php#setup,Module libsensorPy.setup=libsensorPy.setup-module.php"><a title="libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.setup
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
libsensorPy.setup" class="py-name" href="#" onclick="return doclink('link-26', 'setup', 'link-26');">setup</a></tt><tt class="py-op">(</tt><tt class="py-op">)</tt> </tt>
</div><a name="L53"></a><tt class="py-lineno"> 53</tt>  <tt class="py-line"> </tt>
<a name="ADXL345.setup"></a><div id="ADXL345.setup-def"><a name="L54"></a><tt class="py-lineno"> 54</tt> <a class="py-toggle" href="#" id="ADXL345.setup-toggle" onclick="return toggle('ADXL345.setup');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.concretesensor.adxl345.ADXL345-class.php#setup">setup</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="ADXL345.setup-collapsed" style="display:none;" pad="+++" indent="++++++++"></div><div id="ADXL345.setup-expanded"><a name="L55"></a><tt class="py-lineno"> 55</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__revision</tt> <tt class="py-op">=</tt> <tt class="py-op">(</tt><tt class="py-op">[</tt><tt class="py-name">l</tt><tt class="py-op">[</tt><tt class="py-number">12</tt><tt class="py-op">:</tt><tt class="py-op">-</tt><tt class="py-number">1</tt><tt class="py-op">]</tt> <tt class="py-keyword">for</tt> <tt class="py-name">l</tt> <tt class="py-keyword">in</tt> <tt class="py-name">open</tt><tt class="py-op">(</tt><tt class="py-string">'/proc/cpuinfo'</tt><tt class="py-op">,</tt><tt class="py-string">'r'</tt><tt class="py-op">)</tt><tt class="py-op">.</tt><tt class="py-name">readlines</tt><tt class="py-op">(</tt><tt class="py-op">)</tt> <tt class="py-keyword">if</tt> <tt class="py-name">l</tt><tt class="py-op">[</tt><tt class="py-op">:</tt><tt class="py-number">8</tt><tt class="py-op">]</tt><tt class="py-op">==</tt><tt class="py-string">"Revision"</tt><tt class="py-op">]</tt><tt class="py-op">+</tt><tt class="py-op">[</tt><tt class="py-string">'0000'</tt><tt class="py-op">]</tt><tt class="py-op">)</tt><tt class="py-op">[</tt><tt class="py-number">0</tt><tt class="py-op">]</tt> </tt>
<a name="L56"></a><tt class="py-lineno"> 56</tt>  <tt class="py-line">        <tt class="py-keyword">try</tt><tt class="py-op">:</tt> </tt>
<a name="L57"></a><tt class="py-lineno"> 57</tt>  <tt class="py-line">            <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__bus</tt> <tt class="py-op">=</tt> <tt class="py-name">smbus</tt><tt class="py-op">.</tt><tt class="py-name">SMBus</tt><tt class="py-op">(</tt><tt class="py-number">1</tt> <tt class="py-keyword">if</tt> <tt class="py-name">int</tt><tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__revision</tt><tt class="py-op">,</tt> <tt class="py-number">16</tt><tt class="py-op">)</tt> <tt class="py-op">&gt;=</tt> <tt class="py-number">4</tt> <tt class="py-keyword">else</tt> <tt class="py-number">0</tt><tt class="py-op">)</tt> </tt>
<a name="L58"></a><tt class="py-lineno"> 58</tt>  <tt class="py-line">        <tt class="py-keyword">except</tt><tt class="py-op">:</tt> </tt>
<a name="L59"></a><tt class="py-lineno"> 59</tt>  <tt class="py-line">            <tt class="py-keyword">print</tt> <tt class="py-op">(</tt><tt class="py-string">"no device connected"</tt><tt class="py-op">)</tt> </tt>
<a name="L60"></a><tt class="py-lineno"> 60</tt>  <tt class="py-line">            <tt class="py-name">exit</tt><tt class="py-op">(</tt><tt class="py-number">0</tt><tt class="py-op">)</tt> </tt>
<a name="L61"></a><tt class="py-lineno"> 61</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt id="link-27" class="py-name" targets="Method libsensorPy.concretesensor.adxl345.ADXL345.__setBandwidthRate()=libsensorPy.concretesensor.adxl345.ADXL345-class.php#__setBandwidthRate"><a title="libsensorPy.concretesensor.adxl345.ADXL345.__setBandwidthRate" class="py-name" href="#" onclick="return doclink('link-27', '__setBandwidthRate', 'link-27');">__setBandwidthRate</a></tt><tt class="py-op">(</tt><tt id="link-28" class="py-name" targets="Class libsensorPy.concretesensor.adxl345.ADXL345=libsensorPy.concretesensor.adxl345.ADXL345-class.php"><a title="libsensorPy.concretesensor.adxl345.ADXL345" class="py-name" href="#" onclick="return doclink('link-28', 'ADXL345', 'link-28');">ADXL345</a></tt><tt class="py-op">.</tt><tt id="link-29" class="py-name"><a title="libsensorPy.concretesensor.adxl345.ADXL345.BW_RATE_100HZ" class="py-name" href="#" onclick="return doclink('link-29', 'BW_RATE_100HZ', 'link-13');">BW_RATE_100HZ</a></tt><tt class="py-op">)</tt> </tt>
<a name="L62"></a><tt class="py-lineno"> 62</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt id="link-30" class="py-name" targets="Method libsensorPy.concretesensor.adxl345.ADXL345.setSensitivity()=libsensorPy.concretesensor.adxl345.ADXL345-class.php#setSensitivity"><a title="libsensorPy.concretesensor.adxl345.ADXL345.setSensitivity" class="py-name" href="#" onclick="return doclink('link-30', 'setSensitivity', 'link-30');">setSensitivity</a></tt><tt class="py-op">(</tt><tt id="link-31" class="py-name"><a title="libsensorPy.concretesensor.adxl345.ADXL345" class="py-name" href="#" onclick="return doclink('link-31', 'ADXL345', 'link-28');">ADXL345</a></tt><tt class="py-op">.</tt><tt id="link-32" class="py-name"><a title="libsensorPy.concretesensor.adxl345.ADXL345.RANGE_2G" class="py-name" href="#" onclick="return doclink('link-32', 'RANGE_2G', 'link-16');">RANGE_2G</a></tt><tt class="py-op">)</tt> </tt>
<a name="L63"></a><tt class="py-lineno"> 63</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt id="link-33" class="py-name" targets="Method libsensorPy.concretesensor.adxl345.ADXL345.__enableMeasurement()=libsensorPy.concretesensor.adxl345.ADXL345-class.php#__enableMeasurement"><a title="libsensorPy.concretesensor.adxl345.ADXL345.__enableMeasurement" class="py-name" href="#" onclick="return doclink('link-33', '__enableMeasurement', 'link-33');">__enableMeasurement</a></tt><tt class="py-op">(</tt><tt class="py-op">)</tt> </tt>
</div><a name="L64"></a><tt class="py-lineno"> 64</tt>  <tt class="py-line"> </tt>
<a name="ADXL345.changeSetup"></a><div id="ADXL345.changeSetup-def"><a name="L65"></a><tt class="py-lineno"> 65</tt> <a class="py-toggle" href="#" id="ADXL345.changeSetup-toggle" onclick="return toggle('ADXL345.changeSetup');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.concretesensor.adxl345.ADXL345-class.php#changeSetup">changeSetup</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="ADXL345.changeSetup-collapsed" style="display:none;" pad="+++" indent="++++++++"></div><div id="ADXL345.changeSetup-expanded"><a name="L66"></a><tt class="py-lineno"> 66</tt>  <tt class="py-line">        <tt class="py-docstring">"""changes GPIO setup."""</tt> </tt>
<a name="L67"></a><tt class="py-lineno"> 67</tt>  <tt class="py-line">        <tt class="py-keyword">pass</tt> </tt>
</div><a name="L68"></a><tt class="py-lineno"> 68</tt>  <tt class="py-line"> </tt>
<a name="ADXL345.__enableMeasurement"></a><div id="ADXL345.__enableMeasurement-def"><a name="L69"></a><tt class="py-lineno"> 69</tt> <a class="py-toggle" href="#" id="ADXL345.__enableMeasurement-toggle" onclick="return toggle('ADXL345.__enableMeasurement');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.concretesensor.adxl345.ADXL345-class.php#__enableMeasurement">__enableMeasurement</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="ADXL345.__enableMeasurement-collapsed" style="display:none;" pad="+++" indent="++++++++"></div><div id="ADXL345.__enableMeasurement-expanded"><a name="L70"></a><tt class="py-lineno"> 70</tt>  <tt class="py-line">        <tt class="py-docstring">""" Enables the measurement from SMBus."""</tt> </tt>
<a name="L71"></a><tt class="py-lineno"> 71</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__bus</tt><tt class="py-op">.</tt><tt class="py-name">write_byte_data</tt><tt class="py-op">(</tt><tt id="link-34" class="py-name"><a title="libsensorPy.concretesensor.adxl345.ADXL345" class="py-name" href="#" onclick="return doclink('link-34', 'ADXL345', 'link-28');">ADXL345</a></tt><tt class="py-op">.</tt><tt id="link-35" class="py-name"><a title="libsensorPy.concretesensor.adxl345.ADXL345.address" class="py-name" href="#" onclick="return doclink('link-35', 'address', 'link-3');">address</a></tt><tt class="py-op">,</tt> <tt id="link-36" class="py-name"><a title="libsensorPy.concretesensor.adxl345.ADXL345" class="py-name" href="#" onclick="return doclink('link-36', 'ADXL345', 'link-28');">ADXL345</a></tt><tt class="py-op">.</tt><tt id="link-37" class="py-name"><a title="libsensorPy.concretesensor.adxl345.ADXL345.POWER_CTL" class="py-name" href="#" onclick="return doclink('link-37', 'POWER_CTL', 'link-8');">POWER_CTL</a></tt><tt class="py-op">,</tt> <tt id="link-38" class="py-name"><a title="libsensorPy.concretesensor.adxl345.ADXL345" class="py-name" href="#" onclick="return doclink('link-38', 'ADXL345', 'link-28');">ADXL345</a></tt><tt class="py-op">.</tt><tt id="link-39" class="py-name"><a title="libsensorPy.concretesensor.adxl345.ADXL345.MEASURE" class="py-name" href="#" onclick="return doclink('link-39', 'MEASURE', 'link-20');">MEASURE</a></tt><tt class="py-op">)</tt> </tt>
</div><a name="L72"></a><tt class="py-lineno"> 72</tt>  <tt class="py-line"> </tt>
<a name="ADXL345.__setBandwidthRate"></a><div id="ADXL345.__setBandwidthRate-def"><a name="L73"></a><tt class="py-lineno"> 73</tt> <a class="py-toggle" href="#" id="ADXL345.__setBandwidthRate-toggle" onclick="return toggle('ADXL345.__setBandwidthRate');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.concretesensor.adxl345.ADXL345-class.php#__setBandwidthRate">__setBandwidthRate</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">,</tt> <tt class="py-param">rate_flag</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="ADXL345.__setBandwidthRate-collapsed" style="display:none;" pad="+++" indent="++++++++"></div><div id="ADXL345.__setBandwidthRate-expanded"><a name="L74"></a><tt class="py-lineno"> 74</tt>  <tt class="py-line">        <tt class="py-docstring">"""</tt> </tt>
<a name="L75"></a><tt class="py-lineno"> 75</tt>  <tt class="py-line"><tt class="py-docstring">        Sets the Bandwidht rate.</tt> </tt>
<a name="L76"></a><tt class="py-lineno"> 76</tt>  <tt class="py-line"><tt class="py-docstring">        @param rate_flag: The rate flag</tt> </tt>
<a name="L77"></a><tt class="py-lineno"> 77</tt>  <tt class="py-line"><tt class="py-docstring">        @type rate_flag: int8</tt> </tt>
<a name="L78"></a><tt class="py-lineno"> 78</tt>  <tt class="py-line"><tt class="py-docstring">        """</tt> </tt>
<a name="L79"></a><tt class="py-lineno"> 79</tt>  <tt class="py-line">         </tt>
<a name="L80"></a><tt class="py-lineno"> 80</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__bus</tt><tt class="py-op">.</tt><tt class="py-name">write_byte_data</tt><tt class="py-op">(</tt><tt id="link-40" class="py-name"><a title="libsensorPy.concretesensor.adxl345.ADXL345" class="py-name" href="#" onclick="return doclink('link-40', 'ADXL345', 'link-28');">ADXL345</a></tt><tt class="py-op">.</tt><tt id="link-41" class="py-name"><a title="libsensorPy.concretesensor.adxl345.ADXL345.address" class="py-name" href="#" onclick="return doclink('link-41', 'address', 'link-3');">address</a></tt><tt class="py-op">,</tt> <tt id="link-42" class="py-name"><a title="libsensorPy.concretesensor.adxl345.ADXL345" class="py-name" href="#" onclick="return doclink('link-42', 'ADXL345', 'link-28');">ADXL345</a></tt><tt class="py-op">.</tt><tt id="link-43" class="py-name"><a title="libsensorPy.concretesensor.adxl345.ADXL345.BW_RATE" class="py-name" href="#" onclick="return doclink('link-43', 'BW_RATE', 'link-7');">BW_RATE</a></tt><tt class="py-op">,</tt> <tt class="py-name">rate_flag</tt><tt class="py-op">)</tt> </tt>
</div><a name="L81"></a><tt class="py-lineno"> 81</tt>  <tt class="py-line"> </tt>
<a name="L82"></a><tt class="py-lineno"> 82</tt>  <tt class="py-line">    <tt class="py-comment"># set the measurement range for 10-bit readings</tt> </tt>
<a name="ADXL345.setSensitivity"></a><div id="ADXL345.setSensitivity-def"><a name="L83"></a><tt class="py-lineno"> 83</tt> <a class="py-toggle" href="#" id="ADXL345.setSensitivity-toggle" onclick="return toggle('ADXL345.setSensitivity');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.concretesensor.adxl345.ADXL345-class.php#setSensitivity">setSensitivity</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">,</tt> <tt class="py-param">range_flag</tt> <tt class="py-op">=</tt> <tt id="link-44" class="py-name"><a title="libsensorPy.concretesensor.adxl345.ADXL345.RANGE_2G" class="py-name" href="#" onclick="return doclink('link-44', 'RANGE_2G', 'link-16');">RANGE_2G</a></tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="ADXL345.setSensitivity-collapsed" style="display:none;" pad="+++" indent="++++++++"></div><div id="ADXL345.setSensitivity-expanded"><a name="L84"></a><tt class="py-lineno"> 84</tt>  <tt class="py-line">        <tt class="py-docstring">"""</tt> </tt>
<a name="L85"></a><tt class="py-lineno"> 85</tt>  <tt class="py-line"><tt class="py-docstring">        Sets the sensivity from the sensor.</tt> </tt>
<a name="L86"></a><tt class="py-lineno"> 86</tt>  <tt class="py-line"><tt class="py-docstring">        @param range_flag: The range flag</tt> </tt>
<a name="L87"></a><tt class="py-lineno"> 87</tt>  <tt class="py-line"><tt class="py-docstring">        @type range_flag: int16</tt> </tt>
<a name="L88"></a><tt class="py-lineno"> 88</tt>  <tt class="py-line"><tt class="py-docstring">        """</tt> </tt>
<a name="L89"></a><tt class="py-lineno"> 89</tt>  <tt class="py-line">        <tt class="py-name">value</tt> <tt class="py-op">=</tt> <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__bus</tt><tt class="py-op">.</tt><tt class="py-name">read_byte_data</tt><tt class="py-op">(</tt><tt id="link-45" class="py-name"><a title="libsensorPy.concretesensor.adxl345.ADXL345" class="py-name" href="#" onclick="return doclink('link-45', 'ADXL345', 'link-28');">ADXL345</a></tt><tt class="py-op">.</tt><tt id="link-46" class="py-name"><a title="libsensorPy.concretesensor.adxl345.ADXL345.address" class="py-name" href="#" onclick="return doclink('link-46', 'address', 'link-3');">address</a></tt><tt class="py-op">,</tt> <tt id="link-47" class="py-name"><a title="libsensorPy.concretesensor.adxl345.ADXL345" class="py-name" href="#" onclick="return doclink('link-47', 'ADXL345', 'link-28');">ADXL345</a></tt><tt class="py-op">.</tt><tt id="link-48" class="py-name"><a title="libsensorPy.concretesensor.adxl345.ADXL345.DATA_FORMAT" class="py-name" href="#" onclick="return doclink('link-48', 'DATA_FORMAT', 'link-6');">DATA_FORMAT</a></tt><tt class="py-op">)</tt> </tt>
<a name="L90"></a><tt class="py-lineno"> 90</tt>  <tt class="py-line"> </tt>
<a name="L91"></a><tt class="py-lineno"> 91</tt>  <tt class="py-line">        <tt class="py-name">value</tt> <tt class="py-op">&amp;=</tt> <tt class="py-op">~</tt><tt class="py-number">0x0F</tt><tt class="py-op">;</tt> </tt>
<a name="L92"></a><tt class="py-lineno"> 92</tt>  <tt class="py-line">        <tt class="py-name">value</tt> <tt class="py-op">|=</tt> <tt class="py-name">range_flag</tt><tt class="py-op">;</tt> </tt>
<a name="L93"></a><tt class="py-lineno"> 93</tt>  <tt class="py-line">        <tt class="py-name">value</tt> <tt class="py-op">|=</tt> <tt class="py-number">0x08</tt><tt class="py-op">;</tt> </tt>
<a name="L94"></a><tt class="py-lineno"> 94</tt>  <tt class="py-line"> </tt>
<a name="L95"></a><tt class="py-lineno"> 95</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__bus</tt><tt class="py-op">.</tt><tt class="py-name">write_byte_data</tt><tt class="py-op">(</tt><tt id="link-49" class="py-name"><a title="libsensorPy.concretesensor.adxl345.ADXL345" class="py-name" href="#" onclick="return doclink('link-49', 'ADXL345', 'link-28');">ADXL345</a></tt><tt class="py-op">.</tt><tt id="link-50" class="py-name"><a title="libsensorPy.concretesensor.adxl345.ADXL345.address" class="py-name" href="#" onclick="return doclink('link-50', 'address', 'link-3');">address</a></tt><tt class="py-op">,</tt> <tt id="link-51" class="py-name"><a title="libsensorPy.concretesensor.adxl345.ADXL345" class="py-name" href="#" onclick="return doclink('link-51', 'ADXL345', 'link-28');">ADXL345</a></tt><tt class="py-op">.</tt><tt id="link-52" class="py-name"><a title="libsensorPy.concretesensor.adxl345.ADXL345.DATA_FORMAT" class="py-name" href="#" onclick="return doclink('link-52', 'DATA_FORMAT', 'link-6');">DATA_FORMAT</a></tt><tt class="py-op">,</tt> <tt class="py-name">value</tt><tt class="py-op">)</tt> </tt>
</div><a name="L96"></a><tt class="py-lineno"> 96</tt>  <tt class="py-line"> </tt>
<a name="ADXL345.getAxes"></a><div id="ADXL345.getAxes-def"><a name="L97"></a><tt class="py-lineno"> 97</tt> <a class="py-toggle" href="#" id="ADXL345.getAxes-toggle" onclick="return toggle('ADXL345.getAxes');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.concretesensor.adxl345.ADXL345-class.php#getAxes">getAxes</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="ADXL345.getAxes-collapsed" style="display:none;" pad="+++" indent="++++++++"></div><div id="ADXL345.getAxes-expanded"><a name="L98"></a><tt class="py-lineno"> 98</tt>  <tt class="py-line">        <tt class="py-docstring">"""Get the axes.</tt> </tt>
<a name="L99"></a><tt class="py-lineno"> 99</tt>  <tt class="py-line"><tt class="py-docstring">        @return: the axes read</tt> </tt>
<a name="L100"></a><tt class="py-lineno">100</tt>  <tt class="py-line"><tt class="py-docstring">        @rtype: float[]</tt> </tt>
<a name="L101"></a><tt class="py-lineno">101</tt>  <tt class="py-line"><tt class="py-docstring">        """</tt> </tt>
<a name="L102"></a><tt class="py-lineno">102</tt>  <tt class="py-line">        <tt class="py-name">bytes</tt> <tt class="py-op">=</tt> <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__bus</tt><tt class="py-op">.</tt><tt class="py-name">read_i2c_block_data</tt><tt class="py-op">(</tt><tt id="link-53" class="py-name"><a title="libsensorPy.concretesensor.adxl345.ADXL345" class="py-name" href="#" onclick="return doclink('link-53', 'ADXL345', 'link-28');">ADXL345</a></tt><tt class="py-op">.</tt><tt id="link-54" class="py-name"><a title="libsensorPy.concretesensor.adxl345.ADXL345.address" class="py-name" href="#" onclick="return doclink('link-54', 'address', 'link-3');">address</a></tt><tt class="py-op">,</tt> <tt id="link-55" class="py-name"><a title="libsensorPy.concretesensor.adxl345.ADXL345" class="py-name" href="#" onclick="return doclink('link-55', 'ADXL345', 'link-28');">ADXL345</a></tt><tt class="py-op">.</tt><tt id="link-56" class="py-name"><a title="libsensorPy.concretesensor.adxl345.ADXL345.AXES_DATA" class="py-name" href="#" onclick="return doclink('link-56', 'AXES_DATA', 'link-21');">AXES_DATA</a></tt><tt class="py-op">,</tt> <tt class="py-number">6</tt><tt class="py-op">)</tt> </tt>
<a name="L103"></a><tt class="py-lineno">103</tt>  <tt class="py-line"> </tt>
<a name="L104"></a><tt class="py-lineno">104</tt>  <tt class="py-line">        <tt class="py-name">x</tt> <tt class="py-op">=</tt> <tt class="py-name">bytes</tt><tt class="py-op">[</tt><tt class="py-number">0</tt><tt class="py-op">]</tt> <tt class="py-op">|</tt> <tt class="py-op">(</tt><tt class="py-name">bytes</tt><tt class="py-op">[</tt><tt class="py-number">1</tt><tt class="py-op">]</tt> <tt class="py-op">&lt;&lt;</tt> <tt class="py-number">8</tt><tt class="py-op">)</tt> </tt>
<a name="L105"></a><tt class="py-lineno">105</tt>  <tt class="py-line">        <tt class="py-keyword">if</tt><tt class="py-op">(</tt><tt class="py-name">x</tt> <tt class="py-op">&amp;</tt> <tt class="py-op">(</tt><tt class="py-number">1</tt> <tt class="py-op">&lt;&lt;</tt> <tt class="py-number">16</tt> <tt class="py-op">-</tt> <tt class="py-number">1</tt><tt class="py-op">)</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
<a name="L106"></a><tt class="py-lineno">106</tt>  <tt class="py-line">            <tt class="py-name">x</tt> <tt class="py-op">=</tt> <tt class="py-name">x</tt> <tt class="py-op">-</tt> <tt class="py-op">(</tt><tt class="py-number">1</tt><tt class="py-op">&lt;&lt;</tt><tt class="py-number">16</tt><tt class="py-op">)</tt> </tt>
<a name="L107"></a><tt class="py-lineno">107</tt>  <tt class="py-line"> </tt>
<a name="L108"></a><tt class="py-lineno">108</tt>  <tt class="py-line">        <tt class="py-name">y</tt> <tt class="py-op">=</tt> <tt class="py-name">bytes</tt><tt class="py-op">[</tt><tt class="py-number">2</tt><tt class="py-op">]</tt> <tt class="py-op">|</tt> <tt class="py-op">(</tt><tt class="py-name">bytes</tt><tt class="py-op">[</tt><tt class="py-number">3</tt><tt class="py-op">]</tt> <tt class="py-op">&lt;&lt;</tt> <tt class="py-number">8</tt><tt class="py-op">)</tt> </tt>
<a name="L109"></a><tt class="py-lineno">109</tt>  <tt class="py-line">        <tt class="py-keyword">if</tt><tt class="py-op">(</tt><tt class="py-name">y</tt> <tt class="py-op">&amp;</tt> <tt class="py-op">(</tt><tt class="py-number">1</tt> <tt class="py-op">&lt;&lt;</tt> <tt class="py-number">16</tt> <tt class="py-op">-</tt> <tt class="py-number">1</tt><tt class="py-op">)</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
<a name="L110"></a><tt class="py-lineno">110</tt>  <tt class="py-line">            <tt class="py-name">y</tt> <tt class="py-op">=</tt> <tt class="py-name">y</tt> <tt class="py-op">-</tt> <tt class="py-op">(</tt><tt class="py-number">1</tt><tt class="py-op">&lt;&lt;</tt><tt class="py-number">16</tt><tt class="py-op">)</tt> </tt>
<a name="L111"></a><tt class="py-lineno">111</tt>  <tt class="py-line"> </tt>
<a name="L112"></a><tt class="py-lineno">112</tt>  <tt class="py-line">        <tt class="py-name">z</tt> <tt class="py-op">=</tt> <tt class="py-name">bytes</tt><tt class="py-op">[</tt><tt class="py-number">4</tt><tt class="py-op">]</tt> <tt class="py-op">|</tt> <tt class="py-op">(</tt><tt class="py-name">bytes</tt><tt class="py-op">[</tt><tt class="py-number">5</tt><tt class="py-op">]</tt> <tt class="py-op">&lt;&lt;</tt> <tt class="py-number">8</tt><tt class="py-op">)</tt> </tt>
<a name="L113"></a><tt class="py-lineno">113</tt>  <tt class="py-line">        <tt class="py-keyword">if</tt><tt class="py-op">(</tt><tt class="py-name">z</tt> <tt class="py-op">&amp;</tt> <tt class="py-op">(</tt><tt class="py-number">1</tt> <tt class="py-op">&lt;&lt;</tt> <tt class="py-number">16</tt> <tt class="py-op">-</tt> <tt class="py-number">1</tt><tt class="py-op">)</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
<a name="L114"></a><tt class="py-lineno">114</tt>  <tt class="py-line">            <tt class="py-name">z</tt> <tt class="py-op">=</tt> <tt class="py-name">z</tt> <tt class="py-op">-</tt> <tt class="py-op">(</tt><tt class="py-number">1</tt><tt class="py-op">&lt;&lt;</tt><tt class="py-number">16</tt><tt class="py-op">)</tt> </tt>
<a name="L115"></a><tt class="py-lineno">115</tt>  <tt class="py-line"> </tt>
<a name="L116"></a><tt class="py-lineno">116</tt>  <tt class="py-line">        <tt class="py-name">x</tt> <tt class="py-op">=</tt> <tt class="py-name">x</tt> <tt class="py-op">*</tt> <tt id="link-57" class="py-name"><a title="libsensorPy.concretesensor.adxl345.ADXL345" class="py-name" href="#" onclick="return doclink('link-57', 'ADXL345', 'link-28');">ADXL345</a></tt><tt class="py-op">.</tt><tt id="link-58" class="py-name"><a title="libsensorPy.concretesensor.adxl345.ADXL345.SCALE_MULTIPLIER" class="py-name" href="#" onclick="return doclink('link-58', 'SCALE_MULTIPLIER', 'link-5');">SCALE_MULTIPLIER</a></tt> </tt>
<a name="L117"></a><tt class="py-lineno">117</tt>  <tt class="py-line">        <tt class="py-name">y</tt> <tt class="py-op">=</tt> <tt class="py-name">y</tt> <tt class="py-op">*</tt> <tt id="link-59" class="py-name"><a title="libsensorPy.concretesensor.adxl345.ADXL345" class="py-name" href="#" onclick="return doclink('link-59', 'ADXL345', 'link-28');">ADXL345</a></tt><tt class="py-op">.</tt><tt id="link-60" class="py-name"><a title="libsensorPy.concretesensor.adxl345.ADXL345.SCALE_MULTIPLIER" class="py-name" href="#" onclick="return doclink('link-60', 'SCALE_MULTIPLIER', 'link-5');">SCALE_MULTIPLIER</a></tt> </tt>
<a name="L118"></a><tt class="py-lineno">118</tt>  <tt class="py-line">        <tt class="py-name">z</tt> <tt class="py-op">=</tt> <tt class="py-name">z</tt> <tt class="py-op">*</tt> <tt id="link-61" class="py-name"><a title="libsensorPy.concretesensor.adxl345.ADXL345" class="py-name" href="#" onclick="return doclink('link-61', 'ADXL345', 'link-28');">ADXL345</a></tt><tt class="py-op">.</tt><tt id="link-62" class="py-name"><a title="libsensorPy.concretesensor.adxl345.ADXL345.SCALE_MULTIPLIER" class="py-name" href="#" onclick="return doclink('link-62', 'SCALE_MULTIPLIER', 'link-5');">SCALE_MULTIPLIER</a></tt> </tt>
<a name="L119"></a><tt class="py-lineno">119</tt>  <tt class="py-line"> </tt>
<a name="L120"></a><tt class="py-lineno">120</tt>  <tt class="py-line">        <tt class="py-name">x</tt> <tt class="py-op">=</tt> <tt class="py-name">round</tt><tt class="py-op">(</tt><tt class="py-name">x</tt><tt class="py-op">,</tt> <tt class="py-number">4</tt><tt class="py-op">)</tt> </tt>
<a name="L121"></a><tt class="py-lineno">121</tt>  <tt class="py-line">        <tt class="py-name">y</tt> <tt class="py-op">=</tt> <tt class="py-name">round</tt><tt class="py-op">(</tt><tt class="py-name">y</tt><tt class="py-op">,</tt> <tt class="py-number">4</tt><tt class="py-op">)</tt> </tt>
<a name="L122"></a><tt class="py-lineno">122</tt>  <tt class="py-line">        <tt class="py-name">z</tt> <tt class="py-op">=</tt> <tt class="py-name">round</tt><tt class="py-op">(</tt><tt class="py-name">z</tt><tt class="py-op">,</tt> <tt class="py-number">4</tt><tt class="py-op">)</tt> </tt>
<a name="L123"></a><tt class="py-lineno">123</tt>  <tt class="py-line"> </tt>
<a name="L124"></a><tt class="py-lineno">124</tt>  <tt class="py-line">        <tt class="py-keyword">return</tt> <tt class="py-op">{</tt><tt class="py-string">"x"</tt><tt class="py-op">:</tt> <tt class="py-name">x</tt><tt class="py-op">,</tt> <tt class="py-string">"y"</tt><tt class="py-op">:</tt> <tt class="py-name">y</tt><tt class="py-op">,</tt> <tt class="py-string">"z"</tt><tt class="py-op">:</tt> <tt class="py-name">z</tt><tt class="py-op">}</tt> </tt>
</div></div><a name="L125"></a><tt class="py-lineno">125</tt>  <tt class="py-line"> </tt><script type="text/javascript">
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
