
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>libsensorPy.concretesensor.dht11Temperature.DHT11Temperature</title>
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
        <a href="libsensorPy.concretesensor.dht11Temperature-module.php">Module&nbsp;dht11Temperature</a> ::
        Class&nbsp;DHT11Temperature
      </span>
    </td>
    <td>
      <table cellpadding="0" cellspacing="0">
        <!-- hide/show private -->
        <tr><td align="right"><span class="options">[<a href="javascript:void(0);" class="privatelink"
    onclick="toggle_private();">hide&nbsp;private</a>]</span></td></tr>
        <tr><td align="right"><span class="options"
            >[<a href="frames.php" target="_top">frames</a
            >]&nbsp;|&nbsp;<a href="libsensorPy.concretesensor.dht11Temperature.DHT11Temperature-class.php"
            target="_top">no&nbsp;frames</a>]</span></td></tr>
      </table>
    </td>
  </tr>
</table>
<!-- ==================== CLASS DESCRIPTION ==================== -->
<h1 class="epydoc">Class DHT11Temperature</h1><p class="nomargin-top"><span class="codelink"><a href="libsensorPy.concretesensor.dht11Temperature-pysrc.php#DHT11Temperature">source&nbsp;code</a></span></p>
<center>
<center>  <map id="uml_class_diagram_for_libsenso_43" name="uml_class_diagram_for_libsenso_43">
<area shape="rect" id="node99" href="libsensorPy.concretesensor.dht11Temperature.DHT11Temperature-class.php#__init__" title="Constructor" alt="" coords="104,225,241,244"/>
<area shape="rect" id="node99" href="libsensorPy.concretesensor.dht11Temperature.DHT11Temperature-class.php#setup" title="Setup the board and GPIO" alt="" coords="104,244,241,263"/>
<area shape="rect" id="node99" href="libsensorPy.concretesensor.dht11Temperature.DHT11Temperature-class.php#changeSetup" title="Returns: &#160;void" alt="" coords="104,263,241,281"/>
<area shape="rect" id="node99" href="libsensorPy.concretesensor.dht11Temperature.DHT11Temperature-class.php#getTemperature" title="Gets the temperature from the sensor" alt="" coords="104,281,241,300"/>
<area shape="rect" id="node1" href="libsensorPy.concretesensor.dht11Temperature.DHT11Temperature-class.php" title="classdocs" alt="" coords="92,193,252,306"/>
<area shape="rect" id="node100" href="libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.php#__metaclass__" title="libsensorPy.abstractclass.temperatureSensor.TemperatureSensor.__metaclass__" alt="" coords="17,108,329,127"/>
<area shape="rect" id="node100" href="libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.php#getTemperatureInFahrenheit" title="Return the temperature in Fahrenheit." alt="" coords="17,129,329,148"/>
<area shape="rect" id="node100" href="libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.php#getTemperatureInKelvin" title="Return the temperature in Kelvin." alt="" coords="17,148,329,167"/>
<area shape="rect" id="node2" href="libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.php" title="classdocs" alt="" coords="5,83,341,173"/>
<area shape="rect" id="node101" href="libsensorPy.abstractclass.sensor.Sensor-class.php#__del__" title="We&#39;re no longer using the GPIO, so tell software we&#39;re done." alt="" coords="89,39,257,57"/>
<area shape="rect" id="node3" href="libsensorPy.abstractclass.sensor.Sensor-class.php" title="classdocs" alt="" coords="77,6,269,63"/>
</map>
  <img src="<?=$siteUrl?>/img/uml/uml_class_diagram_for_libsenso_43.gif" alt='' usemap="#uml_class_diagram_for_libsenso_43" ismap="ismap" class="graph-without-title" />
</center>
</center>
<hr />
<p>classdocs</p>

<!-- ==================== INSTANCE METHODS ==================== -->
<a name="section-InstanceMethods"></a>
<table class="summary" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr bgcolor="#70b0f0" class="table-header">
  <td colspan="2" class="table-header">
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
      <tr valign="top">
        <td align="left"><span class="table-header">Instance Methods</span></td>
        <td align="right" valign="top"
         ><span class="options">[<a href="#section-InstanceMethods"
         class="privatelink" onclick="toggle_private();"
         >hide private</a>]</span></td>
      </tr>
    </table>
  </td>
</tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
      <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td><span class="summary-sig"><a href="libsensorPy.concretesensor.dht11Temperature.DHT11Temperature-class.php#__init__" class="summary-sig-name">__init__</a>(<span class="summary-sig-arg">self</span>)</span><br />
      Constructor</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concretesensor.dht11Temperature-pysrc.php#DHT11Temperature.__init__">source&nbsp;code</a></span>
            
          </td>
        </tr>
      </table>
      
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
      <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td><span class="summary-sig"><a href="libsensorPy.concretesensor.dht11Temperature.DHT11Temperature-class.php#setup" class="summary-sig-name">setup</a>(<span class="summary-sig-arg">self</span>)</span><br />
      Setup the board and GPIO</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concretesensor.dht11Temperature-pysrc.php#DHT11Temperature.setup">source&nbsp;code</a></span>
            
          </td>
        </tr>
      </table>
      
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
      <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td><span class="summary-sig"><a href="libsensorPy.concretesensor.dht11Temperature.DHT11Temperature-class.php#changeSetup" class="summary-sig-name">changeSetup</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">pin</span>)</span><br />
      Returns:
      void</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concretesensor.dht11Temperature-pysrc.php#DHT11Temperature.changeSetup">source&nbsp;code</a></span>
            
          </td>
        </tr>
      </table>
      
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
      <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td><span class="summary-sig"><a href="libsensorPy.concretesensor.dht11Temperature.DHT11Temperature-class.php#__checkValidData" class="summary-sig-name" onclick="show_private();">__checkValidData</a>(<span class="summary-sig-arg">self</span>)</span><br />
      Check if data is valid.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concretesensor.dht11Temperature-pysrc.php#DHT11Temperature.__checkValidData">source&nbsp;code</a></span>
            
          </td>
        </tr>
      </table>
      
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
      <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td><span class="summary-sig"><a href="libsensorPy.concretesensor.dht11Temperature.DHT11Temperature-class.php#__getValidData" class="summary-sig-name" onclick="show_private();">__getValidData</a>(<span class="summary-sig-arg">self</span>)</span><br />
      Reads sensor data until its send a valid data.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concretesensor.dht11Temperature-pysrc.php#DHT11Temperature.__getValidData">source&nbsp;code</a></span>
            
          </td>
        </tr>
      </table>
      
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">float</span>
    </td><td class="summary">
      <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td><span class="summary-sig"><a href="libsensorPy.concretesensor.dht11Temperature.DHT11Temperature-class.php#getTemperature" class="summary-sig-name">getTemperature</a>(<span class="summary-sig-arg">self</span>)</span><br />
      Gets the temperature from the sensor</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concretesensor.dht11Temperature-pysrc.php#DHT11Temperature.getTemperature">source&nbsp;code</a></span>
            
          </td>
        </tr>
      </table>
      
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
      <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td><span class="summary-sig"><a href="libsensorPy.concretesensor.dht11Temperature.DHT11Temperature-class.php#__readData" class="summary-sig-name" onclick="show_private();">__readData</a>(<span class="summary-sig-arg">self</span>)</span><br />
      Read sensor's raw data.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concretesensor.dht11Temperature-pysrc.php#DHT11Temperature.__readData">source&nbsp;code</a></span>
            
          </td>
        </tr>
      </table>
      
    </td>
  </tr>
  <tr>
    <td colspan="2" class="summary">
    <p class="indent-wrapped-lines"><b>Inherited from <code><a href="libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.php">abstractclass.temperatureSensor.TemperatureSensor</a></code></b>:
      <code><a href="libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.php#getTemperatureInFahrenheit">getTemperatureInFahrenheit</a></code>,
      <code><a href="libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.php#getTemperatureInKelvin">getTemperatureInKelvin</a></code>
      </p>
    <div class="private">    <p class="indent-wrapped-lines"><b>Inherited from <code><a href="libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.php">abstractclass.temperatureSensor.TemperatureSensor</a></code></b> (private):
      <code><a href="libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.php#_bin2dec" onclick="show_private();">_bin2dec</a></code>
      </p></div>
    <p class="indent-wrapped-lines"><b>Inherited from <code><a href="libsensorPy.abstractclass.sensor.Sensor-class.php">abstractclass.sensor.Sensor</a></code></b>:
      <code><a href="libsensorPy.abstractclass.sensor.Sensor-class.php#__del__">__del__</a></code>
      </p>
    <p class="indent-wrapped-lines"><b>Inherited from <code>object</code></b>:
      <code>__delattr__</code>,
      <code>__format__</code>,
      <code>__getattribute__</code>,
      <code>__hash__</code>,
      <code>__new__</code>,
      <code>__reduce__</code>,
      <code>__reduce_ex__</code>,
      <code>__repr__</code>,
      <code>__setattr__</code>,
      <code>__sizeof__</code>,
      <code>__str__</code>,
      <code>__subclasshook__</code>
      </p>
    </td>
  </tr>
</table>
<!-- ==================== CLASS VARIABLES ==================== -->
<a name="section-ClassVariables"></a>
<table class="summary" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr bgcolor="#70b0f0" class="table-header">
  <td colspan="2" class="table-header">
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
      <tr valign="top">
        <td align="left"><span class="table-header">Class Variables</span></td>
        <td align="right" valign="top"
         ><span class="options">[<a href="#section-ClassVariables"
         class="privatelink" onclick="toggle_private();"
         >hide private</a>]</span></td>
      </tr>
    </table>
  </td>
</tr>
  <tr>
    <td colspan="2" class="summary">
    <p class="indent-wrapped-lines"><b>Inherited from <code><a href="libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.php">abstractclass.temperatureSensor.TemperatureSensor</a></code></b>:
      <code><a href="libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.php#__metaclass__">__metaclass__</a></code>
      </p>
    </td>
  </tr>
</table>
<!-- ==================== PROPERTIES ==================== -->
<a name="section-Properties"></a>
<table class="summary" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr bgcolor="#70b0f0" class="table-header">
  <td colspan="2" class="table-header">
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
      <tr valign="top">
        <td align="left"><span class="table-header">Properties</span></td>
        <td align="right" valign="top"
         ><span class="options">[<a href="#section-Properties"
         class="privatelink" onclick="toggle_private();"
         >hide private</a>]</span></td>
      </tr>
    </table>
  </td>
</tr>
  <tr>
    <td colspan="2" class="summary">
    <p class="indent-wrapped-lines"><b>Inherited from <code>object</code></b>:
      <code>__class__</code>
      </p>
    </td>
  </tr>
</table>
<!-- ==================== METHOD DETAILS ==================== -->
<a name="section-MethodDetails"></a>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr bgcolor="#70b0f0" class="table-header">
  <td colspan="2" class="table-header">
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
      <tr valign="top">
        <td align="left"><span class="table-header">Method Details</span></td>
        <td align="right" valign="top"
         ><span class="options">[<a href="#section-MethodDetails"
         class="privatelink" onclick="toggle_private();"
         >hide private</a>]</span></td>
      </tr>
    </table>
  </td>
</tr>
</table>
<a name="__init__"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">__init__</span>(<span class="sig-arg">self</span>)</span>
    <br /><em class="fname">(Constructor)</em>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.concretesensor.dht11Temperature-pysrc.php#DHT11Temperature.__init__">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Constructor</p>
  <dl class="fields">
    <dt>Overrides:
        object.__init__
    </dt>
  </dl>
</td></tr></table>
</div>
<a name="setup"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">setup</span>(<span class="sig-arg">self</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.concretesensor.dht11Temperature-pysrc.php#DHT11Temperature.setup">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Setup the board and GPIO</p>
  <dl class="fields">
    <dt>Returns:</dt>
        <dd>void</dd>
    <dt>Overrides:
        <a href="libsensorPy.abstractclass.sensor.Sensor-class.php#setup">abstractclass.sensor.Sensor.setup</a>
    </dt>
  </dl>
</td></tr></table>
</div>
<a name="changeSetup"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">changeSetup</span>(<span class="sig-arg">self</span>,
        <span class="sig-arg">pin</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.concretesensor.dht11Temperature-pysrc.php#DHT11Temperature.changeSetup">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Changes GPIO setup .</p>
  <dl class="fields">
    <dt>Parameters:</dt>
    <dd><ul class="nomargin-top">
        <li><strong class="pname"><code>pin</code></strong> - the GPIO pin used to wire the sensor.</li>
    </ul></dd>
    <dt>Returns:</dt>
        <dd>void</dd>
    <dt>Overrides:
        <a href="libsensorPy.abstractclass.sensor.Sensor-class.php#changeSetup">abstractclass.sensor.Sensor.changeSetup</a>
    </dt>
  </dl>
</td></tr></table>
</div>
<a name="__checkValidData"></a>
<div class="private">
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">__checkValidData</span>(<span class="sig-arg">self</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.concretesensor.dht11Temperature-pysrc.php#DHT11Temperature.__checkValidData">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Check if data is valid.</p>
  <dl class="fields">
    <dt>Returns:</dt>
        <dd>Boolean</dd>
  </dl>
</td></tr></table>
</div>
<a name="__getValidData"></a>
<div class="private">
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">__getValidData</span>(<span class="sig-arg">self</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.concretesensor.dht11Temperature-pysrc.php#DHT11Temperature.__getValidData">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Reads sensor data until its send a valid data.</p>
  <dl class="fields">
    <dt>Returns:</dt>
        <dd>void</dd>
  </dl>
</td></tr></table>
</div>
<a name="getTemperature"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">getTemperature</span>(<span class="sig-arg">self</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.concretesensor.dht11Temperature-pysrc.php#DHT11Temperature.getTemperature">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Gets the temperature from the sensor</p>
  <dl class="fields">
    <dt>Returns: float</dt>
        <dd>The temperature read</dd>
    <dt>Overrides:
        <a href="libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.php#getTemperature">abstractclass.temperatureSensor.TemperatureSensor.getTemperature</a>
    </dt>
  </dl>
</td></tr></table>
</div>
<a name="__readData"></a>
<div class="private">
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">__readData</span>(<span class="sig-arg">self</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.concretesensor.dht11Temperature-pysrc.php#DHT11Temperature.__readData">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Read sensor's raw data.</p>
  <dl class="fields">
    <dt>Returns:</dt>
        <dd>Boolean</dd>
  </dl>
</td></tr></table>
</div>
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
    Generated by Epydoc 3.0.1 on Mon Apr 13 18:16:28 2015
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
