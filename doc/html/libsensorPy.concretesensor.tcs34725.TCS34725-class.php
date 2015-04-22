
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>libsensorPy.concretesensor.tcs34725.TCS34725</title>
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
        <a href="libsensorPy.concretesensor.tcs34725-module.php">Module&nbsp;tcs34725</a> ::
        Class&nbsp;TCS34725
      </span>
    </td>
    <td>
      <table cellpadding="0" cellspacing="0">
        <!-- hide/show private -->
        <tr><td align="right"><span class="options">[<a href="javascript:void(0);" class="privatelink"
    onclick="toggle_private();">hide&nbsp;private</a>]</span></td></tr>
        <tr><td align="right"><span class="options"
            >[<a href="frames.php" target="_top">frames</a
            >]&nbsp;|&nbsp;<a href="libsensorPy.concretesensor.tcs34725.TCS34725-class.php"
            target="_top">no&nbsp;frames</a>]</span></td></tr>
      </table>
    </td>
  </tr>
</table>
<!-- ==================== CLASS DESCRIPTION ==================== -->
<h1 class="epydoc">Class TCS34725</h1><p class="nomargin-top"><span class="codelink"><a href="libsensorPy.concretesensor.tcs34725-pysrc.php#TCS34725">source&nbsp;code</a></span></p>
<center>
<center>  <map id="uml_class_diagram_for_libsenso_54" name="uml_class_diagram_for_libsenso_54">
<area shape="rect" id="node132" href="libsensorPy.concretesensor.tcs34725.TCS34725-class.php#__init__" title="Constructor" alt="" coords="17,231,475,249"/>
<area shape="rect" id="node132" href="libsensorPy.concretesensor.tcs34725.TCS34725-class.php#setup" title="Setup the GPIO." alt="" coords="17,249,475,268"/>
<area shape="rect" id="node132" href="libsensorPy.concretesensor.tcs34725.TCS34725-class.php#changeSetup" title="changes GPIO setup ." alt="" coords="17,268,475,287"/>
<area shape="rect" id="node132" href="libsensorPy.concretesensor.tcs34725.TCS34725-class.php#disable" title="Desable the GPIO to be readed." alt="" coords="17,287,475,305"/>
<area shape="rect" id="node132" href="libsensorPy.concretesensor.tcs34725.TCS34725-class.php#clearInterrupt" title="Removes the interrupt action" alt="" coords="17,305,475,324"/>
<area shape="rect" id="node132" href="libsensorPy.concretesensor.tcs34725.TCS34725-class.php#setIntLimits" title="Set value limits" alt="" coords="17,324,475,343"/>
<area shape="rect" id="node132" href="libsensorPy.concretesensor.tcs34725.TCS34725-class.php#calculateColorTemperature" title="Converts the raw R/G/B values to color temperature in degrees Kelvin" alt="" coords="17,343,475,361"/>
<area shape="rect" id="node132" href="libsensorPy.concretesensor.tcs34725.TCS34725-class.php#calculateLux" title="Calculate Lux value" alt="" coords="17,361,475,380"/>
<area shape="rect" id="node132" href="libsensorPy.concretesensor.tcs34725.TCS34725-class.php#__del__" title="we&#39;re no longer using the GPIO, so tell software we&#39;re done" alt="" coords="17,380,475,399"/>
<area shape="rect" id="node1" href="libsensorPy.concretesensor.tcs34725.TCS34725-class.php" title="classdocs" alt="" coords="5,198,485,405"/>
<area shape="rect" id="node133" href="libsensorPy.abstractclass.lightSensor.LightSensor-class.php#__metaclass__" title="libsensorPy.abstractclass.lightSensor.LightSensor.__metaclass__" alt="" coords="135,95,357,113"/>
<area shape="rect" id="node133" href="libsensorPy.abstractclass.lightSensor.LightSensor-class.php#getLux" title="Return the light in Lux." alt="" coords="135,116,357,135"/>
<area shape="rect" id="node133" href="libsensorPy.abstractclass.lightSensor.LightSensor-class.php#getColorTemperature" title="Return the color temperature in celsius." alt="" coords="135,135,357,153"/>
<area shape="rect" id="node133" href="libsensorPy.abstractclass.lightSensor.LightSensor-class.php#getColorTemperatureInKelvin" title="Return the temperature in Kelvin." alt="" coords="135,153,357,172"/>
<area shape="rect" id="node2" href="libsensorPy.abstractclass.lightSensor.LightSensor-class.php" title="classdocs" alt="" coords="123,70,368,178"/>
<area shape="rect" id="node3" href="libsensorPy.abstractclass.sensor.Sensor-class.php" title="classdocs" alt="" coords="151,6,343,50"/>
</map>
  <img src="<?=$siteUrl?>/img/uml/uml_class_diagram_for_libsenso_54.gif" alt='' usemap="#uml_class_diagram_for_libsenso_54" ismap="ismap" class="graph-without-title" />
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
          <td><span class="summary-sig"><a href="libsensorPy.concretesensor.tcs34725.TCS34725-class.php#__init__" class="summary-sig-name">__init__</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">address</span>=<span class="summary-sig-default">0x29</span>,
        <span class="summary-sig-arg">debug</span>=<span class="summary-sig-default">False</span>,
        <span class="summary-sig-arg">integrationTime</span>=<span class="summary-sig-default">0xFF</span>,
        <span class="summary-sig-arg">gain</span>=<span class="summary-sig-default">0x01</span>)</span><br />
      Constructor</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concretesensor.tcs34725-pysrc.php#TCS34725.__init__">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="libsensorPy.concretesensor.tcs34725.TCS34725-class.php#setup" class="summary-sig-name">setup</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">address</span>=<span class="summary-sig-default">0x29</span>,
        <span class="summary-sig-arg">debug</span>=<span class="summary-sig-default">False</span>,
        <span class="summary-sig-arg">integrationTime</span>=<span class="summary-sig-default">0xFF</span>,
        <span class="summary-sig-arg">gain</span>=<span class="summary-sig-default">0x01</span>)</span><br />
      Setup the GPIO.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concretesensor.tcs34725-pysrc.php#TCS34725.setup">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="libsensorPy.concretesensor.tcs34725.TCS34725-class.php#changeSetup" class="summary-sig-name">changeSetup</a>(<span class="summary-sig-arg">self</span>)</span><br />
      changes GPIO setup .</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concretesensor.tcs34725-pysrc.php#TCS34725.changeSetup">source&nbsp;code</a></span>
            
          </td>
        </tr>
      </table>
      
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">int8</span>
    </td><td class="summary">
      <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td><span class="summary-sig"><a href="libsensorPy.concretesensor.tcs34725.TCS34725-class.php#__readU8" class="summary-sig-name" onclick="show_private();">__readU8</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">reg</span>)</span><br />
      Read 8bit register</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concretesensor.tcs34725-pysrc.php#TCS34725.__readU8">source&nbsp;code</a></span>
            
          </td>
        </tr>
      </table>
      
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">int16</span>
    </td><td class="summary">
      <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td><span class="summary-sig"><a href="libsensorPy.concretesensor.tcs34725.TCS34725-class.php#__readU16Rev" class="summary-sig-name" onclick="show_private();">__readU16Rev</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">reg</span>)</span><br />
      Read 16bit register</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concretesensor.tcs34725-pysrc.php#TCS34725.__readU16Rev">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="libsensorPy.concretesensor.tcs34725.TCS34725-class.php#__write8" class="summary-sig-name" onclick="show_private();">__write8</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">reg</span>,
        <span class="summary-sig-arg">value</span>)</span></td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concretesensor.tcs34725-pysrc.php#TCS34725.__write8">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="__enable"></a><span class="summary-sig-name">__enable</span>(<span class="summary-sig-arg">self</span>)</span><br />
      Enables the GPIO to be readed.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concretesensor.tcs34725-pysrc.php#TCS34725.__enable">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="disable"></a><span class="summary-sig-name">disable</span>(<span class="summary-sig-arg">self</span>)</span><br />
      Desable the GPIO to be readed.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concretesensor.tcs34725-pysrc.php#TCS34725.disable">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="libsensorPy.concretesensor.tcs34725.TCS34725-class.php#__setIntegrationTime" class="summary-sig-name" onclick="show_private();">__setIntegrationTime</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">integrationTime</span>)</span><br />
      Sets the integration time for the TC34725</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concretesensor.tcs34725-pysrc.php#TCS34725.__setIntegrationTime">source&nbsp;code</a></span>
            
          </td>
        </tr>
      </table>
      
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">int8</span>
    </td><td class="summary">
      <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td><span class="summary-sig"><a href="libsensorPy.concretesensor.tcs34725.TCS34725-class.php#__getIntegrationTime" class="summary-sig-name" onclick="show_private();">__getIntegrationTime</a>(<span class="summary-sig-arg">self</span>)</span><br />
      Gets the integration time for the TC34725</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concretesensor.tcs34725-pysrc.php#TCS34725.__getIntegrationTime">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="libsensorPy.concretesensor.tcs34725.TCS34725-class.php#__setGain" class="summary-sig-name" onclick="show_private();">__setGain</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">gain</span>)</span><br />
      Adjusts the gain on the TCS34725 (adjusts the sensitivity to light)</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concretesensor.tcs34725-pysrc.php#TCS34725.__setGain">source&nbsp;code</a></span>
            
          </td>
        </tr>
      </table>
      
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">int16</span>
    </td><td class="summary">
      <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td><span class="summary-sig"><a href="libsensorPy.concretesensor.tcs34725.TCS34725-class.php#__getGain" class="summary-sig-name" onclick="show_private();">__getGain</a>(<span class="summary-sig-arg">self</span>)</span><br />
      Gets the he gain on the TCS34725</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concretesensor.tcs34725-pysrc.php#TCS34725.__getGain">source&nbsp;code</a></span>
            
          </td>
        </tr>
      </table>
      
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">float{}</span>
    </td><td class="summary">
      <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td><span class="summary-sig"><a href="libsensorPy.concretesensor.tcs34725.TCS34725-class.php#__getRawData" class="summary-sig-name" onclick="show_private();">__getRawData</a>(<span class="summary-sig-arg">self</span>)</span><br />
      Reads the raw red, green, blue and clear channel values</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concretesensor.tcs34725-pysrc.php#TCS34725.__getRawData">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="libsensorPy.concretesensor.tcs34725.TCS34725-class.php#__setInterrupt" class="summary-sig-name" onclick="show_private();">__setInterrupt</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">int</span>)</span><br />
      Interrupt data read</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concretesensor.tcs34725-pysrc.php#TCS34725.__setInterrupt">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="clearInterrupt"></a><span class="summary-sig-name">clearInterrupt</span>(<span class="summary-sig-arg">self</span>)</span><br />
      Removes the interrupt action</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concretesensor.tcs34725-pysrc.php#TCS34725.clearInterrupt">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="libsensorPy.concretesensor.tcs34725.TCS34725-class.php#setIntLimits" class="summary-sig-name">setIntLimits</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">low</span>,
        <span class="summary-sig-arg">high</span>)</span><br />
      Set value limits</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concretesensor.tcs34725-pysrc.php#TCS34725.setIntLimits">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="libsensorPy.concretesensor.tcs34725.TCS34725-class.php#calculateColorTemperature" class="summary-sig-name">calculateColorTemperature</a>(<span class="summary-sig-arg">self</span>)</span><br />
      Converts the raw R/G/B values to color temperature in degrees Kelvin</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concretesensor.tcs34725-pysrc.php#TCS34725.calculateColorTemperature">source&nbsp;code</a></span>
            
          </td>
        </tr>
      </table>
      
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">long</span>
    </td><td class="summary">
      <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td><span class="summary-sig"><a href="libsensorPy.concretesensor.tcs34725.TCS34725-class.php#calculateLux" class="summary-sig-name">calculateLux</a>(<span class="summary-sig-arg">self</span>)</span><br />
      Calculate Lux value</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concretesensor.tcs34725-pysrc.php#TCS34725.calculateLux">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="libsensorPy.concretesensor.tcs34725.TCS34725-class.php#__del__" class="summary-sig-name">__del__</a>(<span class="summary-sig-arg">self</span>)</span><br />
      we're no longer using the GPIO, so tell software we're done</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concretesensor.tcs34725-pysrc.php#TCS34725.__del__">source&nbsp;code</a></span>
            
          </td>
        </tr>
      </table>
      
    </td>
  </tr>
  <tr>
    <td colspan="2" class="summary">
    <p class="indent-wrapped-lines"><b>Inherited from <code><a href="libsensorPy.abstractclass.lightSensor.LightSensor-class.php">abstractclass.lightSensor.LightSensor</a></code></b>:
      <code><a href="libsensorPy.abstractclass.lightSensor.LightSensor-class.php#getColorTemperature">getColorTemperature</a></code>,
      <code><a href="libsensorPy.abstractclass.lightSensor.LightSensor-class.php#getColorTemperatureInKelvin">getColorTemperatureInKelvin</a></code>,
      <code><a href="libsensorPy.abstractclass.lightSensor.LightSensor-class.php#getLux">getLux</a></code>
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
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__ADDRESS"></a><span class="summary-name">__ADDRESS</span> = <code title="0x29">0x29</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__COMMAND_BIT"></a><span class="summary-name">__COMMAND_BIT</span> = <code title="0x80">0x80</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__ENABLE"></a><span class="summary-name">__ENABLE</span> = <code title="0x00">0x00</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__ENABLE_AIEN"></a><span class="summary-name">__ENABLE_AIEN</span> = <code title="0x10">0x10</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__ENABLE_WEN"></a><span class="summary-name">__ENABLE_WEN</span> = <code title="0x08">0x08</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__ENABLE_AEN"></a><span class="summary-name">__ENABLE_AEN</span> = <code title="0x02">0x02</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__ENABLE_PON"></a><span class="summary-name">__ENABLE_PON</span> = <code title="0x01">0x01</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__ATIME"></a><span class="summary-name">__ATIME</span> = <code title="0x01">0x01</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__WTIME"></a><span class="summary-name">__WTIME</span> = <code title="0x03">0x03</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__WTIME_2_4MS"></a><span class="summary-name">__WTIME_2_4MS</span> = <code title="0xFF">0xFF</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__WTIME_204MS"></a><span class="summary-name">__WTIME_204MS</span> = <code title="0xAB">0xAB</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__WTIME_614MS"></a><span class="summary-name">__WTIME_614MS</span> = <code title="0x00">0x00</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__AILTL"></a><span class="summary-name">__AILTL</span> = <code title="0x04">0x04</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__AILTH"></a><span class="summary-name">__AILTH</span> = <code title="0x05">0x05</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__AIHTL"></a><span class="summary-name">__AIHTL</span> = <code title="0x06">0x06</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__AIHTH"></a><span class="summary-name">__AIHTH</span> = <code title="0x07">0x07</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__PERS"></a><span class="summary-name">__PERS</span> = <code title="0x0C">0x0C</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__PERS_NONE"></a><span class="summary-name">__PERS_NONE</span> = <code title="0b0000">0b0000</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__PERS_1_CYCLE"></a><span class="summary-name">__PERS_1_CYCLE</span> = <code title="0b0001">0b0001</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__PERS_2_CYCLE"></a><span class="summary-name">__PERS_2_CYCLE</span> = <code title="0b0010">0b0010</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__PERS_3_CYCLE"></a><span class="summary-name">__PERS_3_CYCLE</span> = <code title="0b0011">0b0011</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__PERS_5_CYCLE"></a><span class="summary-name">__PERS_5_CYCLE</span> = <code title="0b0100">0b0100</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__PERS_10_CYCLE"></a><span class="summary-name">__PERS_10_CYCLE</span> = <code title="0b0101">0b0101</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__PERS_15_CYCLE"></a><span class="summary-name">__PERS_15_CYCLE</span> = <code title="0b0110">0b0110</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__PERS_20_CYCLE"></a><span class="summary-name">__PERS_20_CYCLE</span> = <code title="0b0111">0b0111</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__PERS_25_CYCLE"></a><span class="summary-name">__PERS_25_CYCLE</span> = <code title="0b1000">0b1000</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__PERS_30_CYCLE"></a><span class="summary-name">__PERS_30_CYCLE</span> = <code title="0b1001">0b1001</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__PERS_35_CYCLE"></a><span class="summary-name">__PERS_35_CYCLE</span> = <code title="0b1010">0b1010</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__PERS_40_CYCLE"></a><span class="summary-name">__PERS_40_CYCLE</span> = <code title="0b1011">0b1011</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__PERS_45_CYCLE"></a><span class="summary-name">__PERS_45_CYCLE</span> = <code title="0b1100">0b1100</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__PERS_50_CYCLE"></a><span class="summary-name">__PERS_50_CYCLE</span> = <code title="0b1101">0b1101</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__PERS_55_CYCLE"></a><span class="summary-name">__PERS_55_CYCLE</span> = <code title="0b1110">0b1110</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__PERS_60_CYCLE"></a><span class="summary-name">__PERS_60_CYCLE</span> = <code title="0b1111">0b1111</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__CONFIG"></a><span class="summary-name">__CONFIG</span> = <code title="0x0D">0x0D</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__CONFIG_WLONG"></a><span class="summary-name">__CONFIG_WLONG</span> = <code title="0x02">0x02</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__CONTROL"></a><span class="summary-name">__CONTROL</span> = <code title="0x0F">0x0F</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__ID"></a><span class="summary-name">__ID</span> = <code title="0x12">0x12</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__STATUS"></a><span class="summary-name">__STATUS</span> = <code title="0x13">0x13</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__STATUS_AINT"></a><span class="summary-name">__STATUS_AINT</span> = <code title="0x10">0x10</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__STATUS_AVALID"></a><span class="summary-name">__STATUS_AVALID</span> = <code title="0x01">0x01</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__CDATAL"></a><span class="summary-name">__CDATAL</span> = <code title="0x14">0x14</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__CDATAH"></a><span class="summary-name">__CDATAH</span> = <code title="0x15">0x15</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__RDATAL"></a><span class="summary-name">__RDATAL</span> = <code title="0x16">0x16</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__RDATAH"></a><span class="summary-name">__RDATAH</span> = <code title="0x17">0x17</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__GDATAL"></a><span class="summary-name">__GDATAL</span> = <code title="0x18">0x18</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__GDATAH"></a><span class="summary-name">__GDATAH</span> = <code title="0x19">0x19</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__BDATAL"></a><span class="summary-name">__BDATAL</span> = <code title="0x1A">0x1A</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__BDATAH"></a><span class="summary-name">__BDATAH</span> = <code title="0x1B">0x1B</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__INTEGRATIONTIME_2_4MS"></a><span class="summary-name">__INTEGRATIONTIME_2_4MS</span> = <code title="0xFF">0xFF</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__INTEGRATIONTIME_24MS"></a><span class="summary-name">__INTEGRATIONTIME_24MS</span> = <code title="0xF6">0xF6</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__INTEGRATIONTIME_50MS"></a><span class="summary-name">__INTEGRATIONTIME_50MS</span> = <code title="0xEB">0xEB</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__INTEGRATIONTIME_101MS"></a><span class="summary-name">__INTEGRATIONTIME_101MS</span> = <code title="0xD5">0xD5</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__INTEGRATIONTIME_154MS"></a><span class="summary-name">__INTEGRATIONTIME_154MS</span> = <code title="0xC0">0xC0</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__INTEGRATIONTIME_700MS"></a><span class="summary-name">__INTEGRATIONTIME_700MS</span> = <code title="0x00">0x00</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__GAIN_1X"></a><span class="summary-name">__GAIN_1X</span> = <code title="0x00">0x00</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__GAIN_4X"></a><span class="summary-name">__GAIN_4X</span> = <code title="0x01">0x01</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__GAIN_16X"></a><span class="summary-name">__GAIN_16X</span> = <code title="0x02">0x02</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__GAIN_60X"></a><span class="summary-name">__GAIN_60X</span> = <code title="0x03">0x03</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a href="libsensorPy.concretesensor.tcs34725.TCS34725-class.php#__integrationTimeDelay" class="summary-name" onclick="show_private();">__integrationTimeDelay</a> = <code title="{0xFF: 0.0024, 0xF6: 0.024, 0xEB: 0.050, 0xD5: 0.101, 0xC0: 0.154, 0x0\
0: 0.700}">{0xFF: 0.0024, 0xF6: 0.024, 0xEB: 0.0<code class="variable-ellipsis">...</code></code>
    </td>
  </tr>
  <tr>
    <td colspan="2" class="summary">
    <p class="indent-wrapped-lines"><b>Inherited from <code><a href="libsensorPy.abstractclass.lightSensor.LightSensor-class.php">abstractclass.lightSensor.LightSensor</a></code></b>:
      <code><a href="libsensorPy.abstractclass.lightSensor.LightSensor-class.php#__metaclass__">__metaclass__</a></code>
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
  <h3 class="epydoc"><span class="sig"><span class="sig-name">__init__</span>(<span class="sig-arg">self</span>,
        <span class="sig-arg">address</span>=<span class="sig-default">0x29</span>,
        <span class="sig-arg">debug</span>=<span class="sig-default">False</span>,
        <span class="sig-arg">integrationTime</span>=<span class="sig-default">0xFF</span>,
        <span class="sig-arg">gain</span>=<span class="sig-default">0x01</span>)</span>
    <br /><em class="fname">(Constructor)</em>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.concretesensor.tcs34725-pysrc.php#TCS34725.__init__">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Constructor</p>
  <dl class="fields">
    <dt>Parameters:</dt>
    <dd><ul class="nomargin-top">
        <li><strong class="pname"><code>address</code></strong> (int16) - The register's address to be read</li>
        <li><strong class="pname"><code>debug</code></strong> (Boolean) - If debug is enabled</li>
        <li><strong class="pname"><code>integrationTime</code></strong> (int16) - Integration time</li>
        <li><strong class="pname"><code>gain</code></strong> (int16) - The sensor's gain</li>
    </ul></dd>
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
  <h3 class="epydoc"><span class="sig"><span class="sig-name">setup</span>(<span class="sig-arg">self</span>,
        <span class="sig-arg">address</span>=<span class="sig-default">0x29</span>,
        <span class="sig-arg">debug</span>=<span class="sig-default">False</span>,
        <span class="sig-arg">integrationTime</span>=<span class="sig-default">0xFF</span>,
        <span class="sig-arg">gain</span>=<span class="sig-default">0x01</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.concretesensor.tcs34725-pysrc.php#TCS34725.setup">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Setup the GPIO.</p>
  <dl class="fields">
    <dt>Parameters:</dt>
    <dd><ul class="nomargin-top">
        <li><strong class="pname"><code>address</code></strong> (int16) - The register's address to be read</li>
        <li><strong class="pname"><code>debug</code></strong> (Boolean) - If debug is enabled</li>
        <li><strong class="pname"><code>integrationTime</code></strong> (int16) - Integration time</li>
        <li><strong class="pname"><code>gain</code></strong> (int16) - The sensor's gain</li>
    </ul></dd>
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
  <h3 class="epydoc"><span class="sig"><span class="sig-name">changeSetup</span>(<span class="sig-arg">self</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.concretesensor.tcs34725-pysrc.php#TCS34725.changeSetup">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>changes GPIO setup .</p>
  <dl class="fields">
    <dt>Overrides:
        <a href="libsensorPy.abstractclass.sensor.Sensor-class.php#changeSetup">abstractclass.sensor.Sensor.changeSetup</a>
    </dt>
  </dl>
</td></tr></table>
</div>
<a name="__readU8"></a>
<div class="private">
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">__readU8</span>(<span class="sig-arg">self</span>,
        <span class="sig-arg">reg</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.concretesensor.tcs34725-pysrc.php#TCS34725.__readU8">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Read 8bit register</p>
  <dl class="fields">
    <dt>Parameters:</dt>
    <dd><ul class="nomargin-top">
        <li><strong class="pname"><code>reg</code></strong> (int16) - the register to be readed</li>
    </ul></dd>
    <dt>Returns: int8</dt>
        <dd>The value read from register</dd>
  </dl>
</td></tr></table>
</div>
<a name="__readU16Rev"></a>
<div class="private">
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">__readU16Rev</span>(<span class="sig-arg">self</span>,
        <span class="sig-arg">reg</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.concretesensor.tcs34725-pysrc.php#TCS34725.__readU16Rev">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Read 16bit register</p>
  <dl class="fields">
    <dt>Parameters:</dt>
    <dd><ul class="nomargin-top">
        <li><strong class="pname"><code>reg</code></strong> (int16) - The register to be readed</li>
    </ul></dd>
    <dt>Returns: int16</dt>
        <dd>The value read from register</dd>
  </dl>
</td></tr></table>
</div>
<a name="__write8"></a>
<div class="private">
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">__write8</span>(<span class="sig-arg">self</span>,
        <span class="sig-arg">reg</span>,
        <span class="sig-arg">value</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.concretesensor.tcs34725-pysrc.php#TCS34725.__write8">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  
  <dl class="fields">
    <dt>Parameters:</dt>
    <dd><ul class="nomargin-top">
        <li><strong class="pname"><code>reg</code></strong> (int16) - The register to be written</li>
        <li><strong class="pname"><code>value</code></strong> (int8) - The value to write in the register</li>
    </ul></dd>
  </dl>
</td></tr></table>
</div>
<a name="__setIntegrationTime"></a>
<div class="private">
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">__setIntegrationTime</span>(<span class="sig-arg">self</span>,
        <span class="sig-arg">integrationTime</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.concretesensor.tcs34725-pysrc.php#TCS34725.__setIntegrationTime">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Sets the integration time for the TC34725</p>
  <dl class="fields">
    <dt>Parameters:</dt>
    <dd><ul class="nomargin-top">
        <li><strong class="pname"><code>integrationTime</code></strong> (int8) - The integration time</li>
    </ul></dd>
  </dl>
</td></tr></table>
</div>
<a name="__getIntegrationTime"></a>
<div class="private">
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">__getIntegrationTime</span>(<span class="sig-arg">self</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.concretesensor.tcs34725-pysrc.php#TCS34725.__getIntegrationTime">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Gets the integration time for the TC34725</p>
  <dl class="fields">
    <dt>Returns: int8</dt>
        <dd>The integration time</dd>
  </dl>
</td></tr></table>
</div>
<a name="__setGain"></a>
<div class="private">
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">__setGain</span>(<span class="sig-arg">self</span>,
        <span class="sig-arg">gain</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.concretesensor.tcs34725-pysrc.php#TCS34725.__setGain">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Adjusts the gain on the TCS34725 (adjusts the sensitivity to 
  light)</p>
  <dl class="fields">
    <dt>Parameters:</dt>
    <dd><ul class="nomargin-top">
        <li><strong class="pname"><code>gain</code></strong> (int16) - The sensor's gain</li>
    </ul></dd>
  </dl>
</td></tr></table>
</div>
<a name="__getGain"></a>
<div class="private">
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">__getGain</span>(<span class="sig-arg">self</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.concretesensor.tcs34725-pysrc.php#TCS34725.__getGain">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Gets the he gain on the TCS34725</p>
  <dl class="fields">
    <dt>Returns: int16</dt>
        <dd>The sensor's gain</dd>
  </dl>
</td></tr></table>
</div>
<a name="__getRawData"></a>
<div class="private">
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">__getRawData</span>(<span class="sig-arg">self</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.concretesensor.tcs34725-pysrc.php#TCS34725.__getRawData">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Reads the raw red, green, blue and clear channel values</p>
  <dl class="fields">
    <dt>Returns: float{}</dt>
        <dd>The sensor's raw data</dd>
  </dl>
</td></tr></table>
</div>
<a name="__setInterrupt"></a>
<div class="private">
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">__setInterrupt</span>(<span class="sig-arg">self</span>,
        <span class="sig-arg">int</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.concretesensor.tcs34725-pysrc.php#TCS34725.__setInterrupt">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Interrupt data read</p>
  <dl class="fields">
    <dt>Parameters:</dt>
    <dd><ul class="nomargin-top">
        <li><strong class="pname"><code>int</code></strong> (int8) - Value to interrupt</li>
    </ul></dd>
  </dl>
</td></tr></table>
</div>
<a name="setIntLimits"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">setIntLimits</span>(<span class="sig-arg">self</span>,
        <span class="sig-arg">low</span>,
        <span class="sig-arg">high</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.concretesensor.tcs34725-pysrc.php#TCS34725.setIntLimits">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Set value limits</p>
  <dl class="fields">
    <dt>Parameters:</dt>
    <dd><ul class="nomargin-top">
        <li><strong class="pname"><code>low</code></strong> (int8) - Low value</li>
        <li><strong class="pname"><code>high</code></strong> (int8) - High value</li>
    </ul></dd>
  </dl>
</td></tr></table>
</div>
<a name="calculateColorTemperature"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">calculateColorTemperature</span>(<span class="sig-arg">self</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.concretesensor.tcs34725-pysrc.php#TCS34725.calculateColorTemperature">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Converts the raw R/G/B values to color temperature in degrees 
  Kelvin</p>
  <dl class="fields">
    <dt>Returns: float</dt>
        <dd>The color's temperature</dd>
  </dl>
</td></tr></table>
</div>
<a name="calculateLux"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">calculateLux</span>(<span class="sig-arg">self</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.concretesensor.tcs34725-pysrc.php#TCS34725.calculateLux">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Calculate Lux value</p>
  <dl class="fields">
    <dt>Returns: long</dt>
        <dd>The Lux value</dd>
  </dl>
</td></tr></table>
</div>
<a name="__del__"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">__del__</span>(<span class="sig-arg">self</span>)</span>
    <br /><em class="fname">(Destructor)</em>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.concretesensor.tcs34725-pysrc.php#TCS34725.__del__">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>we're no longer using the GPIO, so tell software we're done</p>
  <dl class="fields">
    <dt>Overrides:
        <a href="libsensorPy.abstractclass.sensor.Sensor-class.php#__del__">abstractclass.sensor.Sensor.__del__</a>
    </dt>
  </dl>
</td></tr></table>
</div>
<br />
<!-- ==================== CLASS VARIABLE DETAILS ==================== -->
<a name="section-ClassVariableDetails"></a>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr bgcolor="#70b0f0" class="table-header">
  <td colspan="2" class="table-header">
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
      <tr valign="top">
        <td align="left"><span class="table-header">Class Variable Details</span></td>
        <td align="right" valign="top"
         ><span class="options">[<a href="#section-ClassVariableDetails"
         class="privatelink" onclick="toggle_private();"
         >hide private</a>]</span></td>
      </tr>
    </table>
  </td>
</tr>
</table>
<a name="__integrationTimeDelay"></a>
<div class="private">
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <h3 class="epydoc">__integrationTimeDelay</h3>
  
  <dl class="fields">
  </dl>
  <dl class="fields">
    <dt>Value:</dt>
      <dd><table><tr><td><pre class="variable">
{0xFF: 0.0024, 0xF6: 0.024, 0xEB: 0.050, 0xD5: 0.101, 0xC0: 0.154, 0x0<span class="variable-linewrap"><img src="<?=$siteUrl?>/img/crarr.png" alt="\" /></span>
0: 0.700}
</pre></td></tr></table>
</dd>
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
