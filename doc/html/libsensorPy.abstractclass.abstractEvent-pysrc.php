
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>libsensorPy.abstractclass.abstractEvent</title>
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
        Module&nbsp;abstractEvent
      </span>
    </td>
    <td>
      <table cellpadding="0" cellspacing="0">
        <!-- hide/show private -->
        <tr><td align="right"><span class="options">[<a href="javascript:void(0);" class="privatelink"
    onclick="toggle_private();">hide&nbsp;private</a>]</span></td></tr>
        <tr><td align="right"><span class="options"
            >[<a href="frames.php" target="_top">frames</a
            >]&nbsp;|&nbsp;<a href="libsensorPy.abstractclass.abstractEvent-pysrc.php"
            target="_top">no&nbsp;frames</a>]</span></td></tr>
      </table>
    </td>
  </tr>
</table>
<h1 class="epydoc">Source Code for <a href="libsensorPy.abstractclass.abstractEvent-module.php">Module libsensorPy.abstractclass.abstractEvent</a></h1>
<pre class="py-src">
<a name="L1"></a><tt class="py-lineno"> 1</tt>  <tt class="py-line"><tt class="py-docstring">'''</tt> </tt>
<a name="L2"></a><tt class="py-lineno"> 2</tt>  <tt class="py-line"><tt class="py-docstring">Created on 01/04/2015</tt> </tt>
<a name="L3"></a><tt class="py-lineno"> 3</tt>  <tt class="py-line"><tt class="py-docstring"></tt> </tt>
<a name="L4"></a><tt class="py-lineno"> 4</tt>  <tt class="py-line"><tt class="py-docstring">@author: Junior Mascarenhas</tt> </tt>
<a name="L5"></a><tt class="py-lineno"> 5</tt>  <tt class="py-line"><tt class="py-docstring">'''</tt> </tt>
<a name="L6"></a><tt class="py-lineno"> 6</tt>  <tt class="py-line"><tt class="py-keyword">import</tt> <tt class="py-name">abc</tt> </tt>
<a name="L7"></a><tt class="py-lineno"> 7</tt>  <tt class="py-line"> </tt>
<a name="AbstractEvent"></a><div id="AbstractEvent-def"><a name="L8"></a><tt class="py-lineno"> 8</tt> <a class="py-toggle" href="#" id="AbstractEvent-toggle" onclick="return toggle('AbstractEvent');">-</a><tt class="py-line"><tt class="py-keyword">class</tt> <a class="py-def-name" href="libsensorPy.abstractclass.abstractEvent.AbstractEvent-class.php">AbstractEvent</a><tt class="py-op">(</tt><tt class="py-base-class">object</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="AbstractEvent-collapsed" style="display:none;" pad="++" indent="++++"></div><div id="AbstractEvent-expanded"><a name="L9"></a><tt class="py-lineno"> 9</tt>  <tt class="py-line">    <tt class="py-docstring">'''</tt> </tt>
<a name="L10"></a><tt class="py-lineno">10</tt>  <tt class="py-line"><tt class="py-docstring">    classdocs</tt> </tt>
<a name="L11"></a><tt class="py-lineno">11</tt>  <tt class="py-line"><tt class="py-docstring">    '''</tt> </tt>
<a name="L12"></a><tt class="py-lineno">12</tt>  <tt class="py-line">    <tt id="link-0" class="py-name" targets="Variable libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.__metaclass__=libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor-class.php#__metaclass__,Variable libsensorPy.abstractclass.actuator.Actuator.__metaclass__=libsensorPy.abstractclass.actuator.Actuator-class.php#__metaclass__,Variable libsensorPy.abstractclass.altitudeSensor.AltitudeSensor.__metaclass__=libsensorPy.abstractclass.altitudeSensor.AltitudeSensor-class.php#__metaclass__,Variable libsensorPy.abstractclass.dcMotorActuator.DCMotorActuator.__metaclass__=libsensorPy.abstractclass.dcMotorActuator.DCMotorActuator-class.php#__metaclass__,Variable libsensorPy.abstractclass.humiditySensor.HumiditySensor.__metaclass__=libsensorPy.abstractclass.humiditySensor.HumiditySensor-class.php#__metaclass__,Variable libsensorPy.abstractclass.lightSensor.LightSensor.__metaclass__=libsensorPy.abstractclass.lightSensor.LightSensor-class.php#__metaclass__,Variable libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor.__metaclass__=libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor-class.php#__metaclass__,Variable libsensorPy.abstractclass.motionSensor.MotionSensor.__metaclass__=libsensorPy.abstractclass.motionSensor.MotionSensor-class.php#__metaclass__,Variable libsensorPy.abstractclass.motorActuator.MotorActuator.__metaclass__=libsensorPy.abstractclass.motorActuator.MotorActuator-class.php#__metaclass__,Variable libsensorPy.abstractclass.pressureSensor.PressureSensor.__metaclass__=libsensorPy.abstractclass.pressureSensor.PressureSensor-class.php#__metaclass__,Variable libsensorPy.abstractclass.sensor.Sensor.__metaclass__=libsensorPy.abstractclass.sensor.Sensor-class.php#__metaclass__,Variable libsensorPy.abstractclass.servoMotorActuator.ServoMotorActuator.__metaclass__=libsensorPy.abstractclass.servoMotorActuator.ServoMotorActuator-class.php#__metaclass__,Variable libsensorPy.abstractclass.stepperMotorActuator.StepperMotorActuator.__metaclass__=libsensorPy.abstractclass.stepperMotorActuator.StepperMotorActuator-class.php#__metaclass__,Variable libsensorPy.abstractclass.temperatureSensor.TemperatureSensor.__metaclass__=libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.php#__metaclass__,Variable libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor.__metaclass__=libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor-class.php#__metaclass__"><a title="libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.__metaclass__
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
libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor.__metaclass__" class="py-name" href="#" onclick="return doclink('link-0', '__metaclass__', 'link-0');">__metaclass__</a></tt> <tt class="py-op">=</tt> <tt class="py-name">abc</tt><tt class="py-op">.</tt><tt id="link-1" class="py-name" targets="Class abc.ABCMeta=abc.ABCMeta-class.php"><a title="abc.ABCMeta" class="py-name" href="#" onclick="return doclink('link-1', 'ABCMeta', 'link-1');">ABCMeta</a></tt> </tt>
<a name="L13"></a><tt class="py-lineno">13</tt>  <tt class="py-line"> </tt>
<a name="AbstractEvent.__init__"></a><div id="AbstractEvent.__init__-def"><a name="L14"></a><tt class="py-lineno">14</tt> <a class="py-toggle" href="#" id="AbstractEvent.__init__-toggle" onclick="return toggle('AbstractEvent.__init__');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.abstractclass.abstractEvent.AbstractEvent-class.php#__init__">__init__</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">,</tt> <tt class="py-param">sensor</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="AbstractEvent.__init__-collapsed" style="display:none;" pad="++" indent="++++++++"></div><div id="AbstractEvent.__init__-expanded"><a name="L15"></a><tt class="py-lineno">15</tt>  <tt class="py-line">        <tt class="py-docstring">"""</tt> </tt>
<a name="L16"></a><tt class="py-lineno">16</tt>  <tt class="py-line"><tt class="py-docstring">        @param sensor: The sensor who will rise an event</tt> </tt>
<a name="L17"></a><tt class="py-lineno">17</tt>  <tt class="py-line"><tt class="py-docstring">        @type sensor: Sensor</tt> </tt>
<a name="L18"></a><tt class="py-lineno">18</tt>  <tt class="py-line"><tt class="py-docstring">        """</tt> </tt>
<a name="L19"></a><tt class="py-lineno">19</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">_sensor</tt> <tt class="py-op">=</tt> <tt id="link-2" class="py-name" targets="Module libsensorPy.abstractclass.sensor=libsensorPy.abstractclass.sensor-module.php"><a title="libsensorPy.abstractclass.sensor" class="py-name" href="#" onclick="return doclink('link-2', 'sensor', 'link-2');">sensor</a></tt> </tt>
<a name="L20"></a><tt class="py-lineno">20</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">_observer_list</tt> <tt class="py-op">=</tt> <tt class="py-op">[</tt><tt class="py-op">]</tt> </tt>
</div><a name="L21"></a><tt class="py-lineno">21</tt>  <tt class="py-line">         </tt>
<a name="AbstractEvent.attach"></a><div id="AbstractEvent.attach-def"><a name="L22"></a><tt class="py-lineno">22</tt> <a class="py-toggle" href="#" id="AbstractEvent.attach-toggle" onclick="return toggle('AbstractEvent.attach');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.abstractclass.abstractEvent.AbstractEvent-class.php#attach">attach</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">,</tt> <tt class="py-param">observer</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="AbstractEvent.attach-collapsed" style="display:none;" pad="++" indent="++++++++"></div><div id="AbstractEvent.attach-expanded"><a name="L23"></a><tt class="py-lineno">23</tt>  <tt class="py-line">        <tt class="py-docstring">"""Registers an observer with temperatureSensor if the observer is not</tt> </tt>
<a name="L24"></a><tt class="py-lineno">24</tt>  <tt class="py-line"><tt class="py-docstring">        already registered.</tt> </tt>
<a name="L25"></a><tt class="py-lineno">25</tt>  <tt class="py-line"><tt class="py-docstring">        @param observer: The observer instance</tt> </tt>
<a name="L26"></a><tt class="py-lineno">26</tt>  <tt class="py-line"><tt class="py-docstring">        @type observer: SensorObserver</tt> </tt>
<a name="L27"></a><tt class="py-lineno">27</tt>  <tt class="py-line"><tt class="py-docstring">        """</tt> </tt>
<a name="L28"></a><tt class="py-lineno">28</tt>  <tt class="py-line">         </tt>
<a name="L29"></a><tt class="py-lineno">29</tt>  <tt class="py-line">        <tt class="py-keyword">if</tt> <tt class="py-name">observer</tt> <tt class="py-keyword">not</tt> <tt class="py-keyword">in</tt> <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">_observer_list</tt><tt class="py-op">:</tt> </tt>
<a name="L30"></a><tt class="py-lineno">30</tt>  <tt class="py-line">            <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">_observer_list</tt><tt class="py-op">.</tt><tt class="py-name">append</tt><tt class="py-op">(</tt><tt class="py-name">observer</tt><tt class="py-op">)</tt> </tt>
<a name="L31"></a><tt class="py-lineno">31</tt>  <tt class="py-line">            <tt class="py-name">observer</tt><tt class="py-op">.</tt><tt id="link-3" class="py-name" targets="Method libsensorPy.abstractclass.eventObserver.EventObserver.register_event()=libsensorPy.abstractclass.eventObserver.EventObserver-class.php#register_event"><a title="libsensorPy.abstractclass.eventObserver.EventObserver.register_event" class="py-name" href="#" onclick="return doclink('link-3', 'register_event', 'link-3');">register_event</a></tt><tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">)</tt> </tt>
<a name="L32"></a><tt class="py-lineno">32</tt>  <tt class="py-line">        <tt class="py-keyword">else</tt><tt class="py-op">:</tt> </tt>
<a name="L33"></a><tt class="py-lineno">33</tt>  <tt class="py-line">            <tt class="py-keyword">raise</tt> <tt class="py-name">Exception</tt><tt class="py-op">(</tt><tt class="py-string">"ERROR: Observer already subscribed to this event!"</tt><tt class="py-op">)</tt> </tt>
</div><a name="L34"></a><tt class="py-lineno">34</tt>  <tt class="py-line"> </tt>
<a name="L35"></a><tt class="py-lineno">35</tt>  <tt class="py-line"> </tt>
<a name="AbstractEvent.detach"></a><div id="AbstractEvent.detach-def"><a name="L36"></a><tt class="py-lineno">36</tt> <a class="py-toggle" href="#" id="AbstractEvent.detach-toggle" onclick="return toggle('AbstractEvent.detach');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.abstractclass.abstractEvent.AbstractEvent-class.php#detach">detach</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">,</tt> <tt class="py-param">observer</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="AbstractEvent.detach-collapsed" style="display:none;" pad="++" indent="++++++++"></div><div id="AbstractEvent.detach-expanded"><a name="L37"></a><tt class="py-lineno">37</tt>  <tt class="py-line">        <tt class="py-docstring">"""Removes an observer from WeatherData if the observer is currently</tt> </tt>
<a name="L38"></a><tt class="py-lineno">38</tt>  <tt class="py-line"><tt class="py-docstring">        subscribed to WeatherData.</tt> </tt>
<a name="L39"></a><tt class="py-lineno">39</tt>  <tt class="py-line"><tt class="py-docstring">        @param observer: The observer instance</tt> </tt>
<a name="L40"></a><tt class="py-lineno">40</tt>  <tt class="py-line"><tt class="py-docstring">        @type observer: SensorObserver</tt> </tt>
<a name="L41"></a><tt class="py-lineno">41</tt>  <tt class="py-line"><tt class="py-docstring">        """</tt> </tt>
<a name="L42"></a><tt class="py-lineno">42</tt>  <tt class="py-line">        <tt class="py-keyword">if</tt> <tt class="py-name">observer</tt> <tt class="py-keyword">in</tt> <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">_observer_list</tt><tt class="py-op">:</tt> </tt>
<a name="L43"></a><tt class="py-lineno">43</tt>  <tt class="py-line">            <tt class="py-name">observer</tt><tt class="py-op">.</tt><tt id="link-4" class="py-name" targets="Method libsensorPy.abstractclass.eventObserver.EventObserver.remove_event()=libsensorPy.abstractclass.eventObserver.EventObserver-class.php#remove_event"><a title="libsensorPy.abstractclass.eventObserver.EventObserver.remove_event" class="py-name" href="#" onclick="return doclink('link-4', 'remove_event', 'link-4');">remove_event</a></tt><tt class="py-op">(</tt><tt class="py-op">)</tt> </tt>
<a name="L44"></a><tt class="py-lineno">44</tt>  <tt class="py-line">            <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">_observer_list</tt><tt class="py-op">.</tt><tt class="py-name">remove</tt><tt class="py-op">(</tt><tt class="py-name">observer</tt><tt class="py-op">)</tt> </tt>
<a name="L45"></a><tt class="py-lineno">45</tt>  <tt class="py-line">        <tt class="py-keyword">else</tt><tt class="py-op">:</tt> </tt>
<a name="L46"></a><tt class="py-lineno">46</tt>  <tt class="py-line">            <tt class="py-keyword">raise</tt> <tt class="py-name">Exception</tt><tt class="py-op">(</tt><tt class="py-string">"ERROR: Observer currently not subscribed to this event!"</tt><tt class="py-op">)</tt> </tt>
</div><a name="L47"></a><tt class="py-lineno">47</tt>  <tt class="py-line"> </tt>
<a name="AbstractEvent.notify_observers"></a><div id="AbstractEvent.notify_observers-def"><a name="L48"></a><tt class="py-lineno">48</tt> <a class="py-toggle" href="#" id="AbstractEvent.notify_observers-toggle" onclick="return toggle('AbstractEvent.notify_observers');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.abstractclass.abstractEvent.AbstractEvent-class.php#notify_observers">notify_observers</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="AbstractEvent.notify_observers-collapsed" style="display:none;" pad="++" indent="++++++++"></div><div id="AbstractEvent.notify_observers-expanded"><a name="L49"></a><tt class="py-lineno">49</tt>  <tt class="py-line">        <tt class="py-docstring">"""Notifies subscribed observers of change in WeatherData data."""</tt> </tt>
<a name="L50"></a><tt class="py-lineno">50</tt>  <tt class="py-line">        <tt class="py-keyword">for</tt> <tt class="py-name">observer</tt> <tt class="py-keyword">in</tt> <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">_observer_list</tt><tt class="py-op">:</tt> </tt>
<a name="L51"></a><tt class="py-lineno">51</tt>  <tt class="py-line">            <tt class="py-name">observer</tt><tt class="py-op">.</tt><tt id="link-5" class="py-name" targets="Method libsensorPy.abstractclass.eventObserver.EventObserver.update()=libsensorPy.abstractclass.eventObserver.EventObserver-class.php#update,Method libsensorPy.concreteobserver.currentConditionDisplay.CurrentConditionDisplay.update()=libsensorPy.concreteobserver.currentConditionDisplay.CurrentConditionDisplay-class.php#update"><a title="libsensorPy.abstractclass.eventObserver.EventObserver.update
libsensorPy.concreteobserver.currentConditionDisplay.CurrentConditionDisplay.update" class="py-name" href="#" onclick="return doclink('link-5', 'update', 'link-5');">update</a></tt><tt class="py-op">(</tt><tt class="py-op">)</tt> </tt>
</div></div><a name="L52"></a><tt class="py-lineno">52</tt>  <tt class="py-line"> </tt><script type="text/javascript">
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
