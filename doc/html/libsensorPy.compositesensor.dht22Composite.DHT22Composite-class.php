
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>libsensorPy.compositesensor.dht22Composite.DHT22Composite</title>
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
        <a href="libsensorPy.compositesensor.dht22Composite-module.php">Module&nbsp;dht22Composite</a> ::
        Class&nbsp;DHT22Composite
      </span>
    </td>
    <td>
      <table cellpadding="0" cellspacing="0">
        <!-- hide/show private -->
        <tr><td align="right"><span class="options">[<a href="javascript:void(0);" class="privatelink"
    onclick="toggle_private();">hide&nbsp;private</a>]</span></td></tr>
        <tr><td align="right"><span class="options"
            >[<a href="frames.php" target="_top">frames</a
            >]&nbsp;|&nbsp;<a href="libsensorPy.compositesensor.dht22Composite.DHT22Composite-class.php"
            target="_top">no&nbsp;frames</a>]</span></td></tr>
      </table>
    </td>
  </tr>
</table>
<!-- ==================== CLASS DESCRIPTION ==================== -->
<h1 class="epydoc">Class DHT22Composite</h1><p class="nomargin-top"><span class="codelink"><a href="libsensorPy.compositesensor.dht22Composite-pysrc.php#DHT22Composite">source&nbsp;code</a></span></p>
<center>
<center>  <map id="uml_class_diagram_for_libsenso_22" name="uml_class_diagram_for_libsenso_22">
<area shape="rect" id="node46" href="libsensorPy.compositesensor.dht22Composite.DHT22Composite-class.php#__init__" title="Constructor" alt="" coords="245,193,445,212"/>
<area shape="rect" id="node46" href="libsensorPy.compositesensor.dht22Composite.DHT22Composite-class.php#setup" title="Setup the GPIO." alt="" coords="245,212,445,231"/>
<area shape="rect" id="node46" href="libsensorPy.compositesensor.dht22Composite.DHT22Composite-class.php#changeSetup" title="Changes GPIO setup" alt="" coords="245,231,445,249"/>
<area shape="rect" id="node46" href="libsensorPy.compositesensor.dht22Composite.DHT22Composite-class.php#getTemperature" title="&quot;Return the temperature in Celsius measured from the sensor." alt="" coords="245,249,445,268"/>
<area shape="rect" id="node46" href="libsensorPy.compositesensor.dht22Composite.DHT22Composite-class.php#getTemperatureInFahrenheit" title="Return the temperature in Fahrenheit measured from the sensor." alt="" coords="245,268,445,287"/>
<area shape="rect" id="node46" href="libsensorPy.compositesensor.dht22Composite.DHT22Composite-class.php#getTemperatureInKelvin" title="Return the temperature in Kelvin measured from the sensor." alt="" coords="245,287,445,305"/>
<area shape="rect" id="node46" href="libsensorPy.compositesensor.dht22Composite.DHT22Composite-class.php#getHumidity" title="Return the humidity measured from the sensor." alt="" coords="245,305,445,324"/>
<area shape="rect" id="node46" href="libsensorPy.compositesensor.dht22Composite.DHT22Composite-class.php#add" title="Add a basic sensor to the composite" alt="" coords="245,324,445,343"/>
<area shape="rect" id="node1" href="libsensorPy.compositesensor.dht22Composite.DHT22Composite-class.php" title="classdocs" alt="" coords="233,161,457,349"/>
<area shape="rect" id="node47" href="libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.php#__metaclass__" title="libsensorPy.abstractclass.temperatureSensor.TemperatureSensor.__metaclass__" alt="" coords="17,108,329,127"/>
<area shape="rect" id="node2" href="libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.php" title="classdocs" alt="" coords="5,83,341,141"/>
<area shape="rect" id="node49" href="libsensorPy.abstractclass.sensor.Sensor-class.php#__del__" title="We&#39;re no longer using the GPIO, so tell software we&#39;re done." alt="" coords="261,39,429,57"/>
<area shape="rect" id="node3" href="libsensorPy.abstractclass.sensor.Sensor-class.php" title="classdocs" alt="" coords="249,6,441,63"/>
<area shape="rect" id="node4" href="libsensorPy.abstractclass.humiditySensor.HumiditySensor-class.php" title="classdocs" alt="" coords="371,90,664,134"/>
</map>
  <img src="<?=$siteUrl?>/img/uml/uml_class_diagram_for_libsenso_22.gif" alt='' usemap="#uml_class_diagram_for_libsenso_22" ismap="ismap" class="graph-without-title" />
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
          <td><span class="summary-sig"><a href="libsensorPy.compositesensor.dht22Composite.DHT22Composite-class.php#__init__" class="summary-sig-name">__init__</a>(<span class="summary-sig-arg">self</span>)</span><br />
      Constructor</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.compositesensor.dht22Composite-pysrc.php#DHT22Composite.__init__">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="libsensorPy.compositesensor.dht22Composite.DHT22Composite-class.php#setup" class="summary-sig-name">setup</a>(<span class="summary-sig-arg">self</span>)</span><br />
      Setup the GPIO.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.compositesensor.dht22Composite-pysrc.php#DHT22Composite.setup">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="libsensorPy.compositesensor.dht22Composite.DHT22Composite-class.php#changeSetup" class="summary-sig-name">changeSetup</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">pin</span>)</span><br />
      Changes GPIO setup</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.compositesensor.dht22Composite-pysrc.php#DHT22Composite.changeSetup">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="libsensorPy.compositesensor.dht22Composite.DHT22Composite-class.php#getTemperature" class="summary-sig-name">getTemperature</a>(<span class="summary-sig-arg">self</span>)</span><br />
      &quot;Return the temperature in Celsius measured from the sensor.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.compositesensor.dht22Composite-pysrc.php#DHT22Composite.getTemperature">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="libsensorPy.compositesensor.dht22Composite.DHT22Composite-class.php#getTemperatureInFahrenheit" class="summary-sig-name">getTemperatureInFahrenheit</a>(<span class="summary-sig-arg">self</span>)</span><br />
      Return the temperature in Fahrenheit measured from the sensor.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.compositesensor.dht22Composite-pysrc.php#DHT22Composite.getTemperatureInFahrenheit">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="libsensorPy.compositesensor.dht22Composite.DHT22Composite-class.php#getTemperatureInKelvin" class="summary-sig-name">getTemperatureInKelvin</a>(<span class="summary-sig-arg">self</span>)</span><br />
      Return the temperature in Kelvin measured from the sensor.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.compositesensor.dht22Composite-pysrc.php#DHT22Composite.getTemperatureInKelvin">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="libsensorPy.compositesensor.dht22Composite.DHT22Composite-class.php#getHumidity" class="summary-sig-name">getHumidity</a>(<span class="summary-sig-arg">self</span>)</span><br />
      Return the humidity measured from the sensor.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.compositesensor.dht22Composite-pysrc.php#DHT22Composite.getHumidity">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="libsensorPy.compositesensor.dht22Composite.DHT22Composite-class.php#add" class="summary-sig-name">add</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">sensor</span>)</span><br />
      Add a basic sensor to the composite</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.compositesensor.dht22Composite-pysrc.php#DHT22Composite.add">source&nbsp;code</a></span>
            
          </td>
        </tr>
      </table>
      
    </td>
  </tr>
  <tr>
    <td colspan="2" class="summary">
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
    ><span class="codelink"><a href="libsensorPy.compositesensor.dht22Composite-pysrc.php#DHT22Composite.__init__">source&nbsp;code</a></span>&nbsp;
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
    ><span class="codelink"><a href="libsensorPy.compositesensor.dht22Composite-pysrc.php#DHT22Composite.setup">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Setup the GPIO.</p>
  <dl class="fields">
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
    ><span class="codelink"><a href="libsensorPy.compositesensor.dht22Composite-pysrc.php#DHT22Composite.changeSetup">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Changes GPIO setup</p>
  <dl class="fields">
    <dt>Parameters:</dt>
    <dd><ul class="nomargin-top">
        <li><strong class="pname"><code>pin</code></strong> ()</li>
    </ul></dd>
    <dt>Overrides:
        <a href="libsensorPy.abstractclass.sensor.Sensor-class.php#changeSetup">abstractclass.sensor.Sensor.changeSetup</a>
    </dt>
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
    ><span class="codelink"><a href="libsensorPy.compositesensor.dht22Composite-pysrc.php#DHT22Composite.getTemperature">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>&quot;Return the temperature in Celsius measured from the sensor.</p>
  <dl class="fields">
    <dt>Overrides:
        <a href="libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.php#getTemperature">abstractclass.temperatureSensor.TemperatureSensor.getTemperature</a>
    </dt>
  </dl>
</td></tr></table>
</div>
<a name="getTemperatureInFahrenheit"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">getTemperatureInFahrenheit</span>(<span class="sig-arg">self</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.compositesensor.dht22Composite-pysrc.php#DHT22Composite.getTemperatureInFahrenheit">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Return the temperature in Fahrenheit measured from the sensor.</p>
  <dl class="fields">
    <dt>Overrides:
        <a href="libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.php#getTemperatureInFahrenheit">abstractclass.temperatureSensor.TemperatureSensor.getTemperatureInFahrenheit</a>
    </dt>
  </dl>
</td></tr></table>
</div>
<a name="getTemperatureInKelvin"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">getTemperatureInKelvin</span>(<span class="sig-arg">self</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.compositesensor.dht22Composite-pysrc.php#DHT22Composite.getTemperatureInKelvin">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Return the temperature in Kelvin measured from the sensor.</p>
  <dl class="fields">
    <dt>Overrides:
        <a href="libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.php#getTemperatureInKelvin">abstractclass.temperatureSensor.TemperatureSensor.getTemperatureInKelvin</a>
    </dt>
  </dl>
</td></tr></table>
</div>
<a name="getHumidity"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">getHumidity</span>(<span class="sig-arg">self</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.compositesensor.dht22Composite-pysrc.php#DHT22Composite.getHumidity">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Return the humidity measured from the sensor.</p>
  <dl class="fields">
    <dt>Overrides:
        <a href="libsensorPy.abstractclass.humiditySensor.HumiditySensor-class.php#getHumidity">abstractclass.humiditySensor.HumiditySensor.getHumidity</a>
    </dt>
  </dl>
</td></tr></table>
</div>
<a name="add"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">add</span>(<span class="sig-arg">self</span>,
        <span class="sig-arg">sensor</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.compositesensor.dht22Composite-pysrc.php#DHT22Composite.add">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Add a basic sensor to the composite</p>
  <dl class="fields">
    <dt>Parameters:</dt>
    <dd><ul class="nomargin-top">
        <li><strong class="pname"><code>sensor</code></strong> (Sensor) - The sensor to be added</li>
    </ul></dd>
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
    Generated by Epydoc 3.0.1 on Mon Apr 13 18:16:27 2015
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
