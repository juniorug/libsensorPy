
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure</title>
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
        <a href="libsensorPy.concretesensor.bmp085Pressure-module.php">Module&nbsp;bmp085Pressure</a> ::
        Class&nbsp;BMP085Pressure
      </span>
    </td>
    <td>
      <table cellpadding="0" cellspacing="0">
        <!-- hide/show private -->
        <tr><td align="right"><span class="options">[<a href="javascript:void(0);" class="privatelink"
    onclick="toggle_private();">hide&nbsp;private</a>]</span></td></tr>
        <tr><td align="right"><span class="options"
            >[<a href="frames.php" target="_top">frames</a
            >]&nbsp;|&nbsp;<a href="libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure-class.php"
            target="_top">no&nbsp;frames</a>]</span></td></tr>
      </table>
    </td>
  </tr>
</table>
<!-- ==================== CLASS DESCRIPTION ==================== -->
<h1 class="epydoc">Class BMP085Pressure</h1><p class="nomargin-top"><span class="codelink"><a href="libsensorPy.concretesensor.bmp085Pressure-pysrc.php#BMP085Pressure">source&nbsp;code</a></span></p>
<center>
<center>  <map id="uml_class_diagram_for_libsenso_40" name="uml_class_diagram_for_libsenso_40">
<area shape="rect" id="node90" href="libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure-class.php#__init__" title="Constructor" alt="" coords="40,263,267,281"/>
<area shape="rect" id="node90" href="libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure-class.php#setup" title="Setup the GPIO." alt="" coords="40,281,267,300"/>
<area shape="rect" id="node90" href="libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure-class.php#changeSetup" title="changes GPIO setup ." alt="" coords="40,300,267,319"/>
<area shape="rect" id="node90" href="libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure-class.php#getPressure" title="Gets the compensated pressure in pascal." alt="" coords="40,319,267,337"/>
<area shape="rect" id="node1" href="libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure-class.php" title="libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure" alt="" coords="28,230,279,343"/>
<area shape="rect" id="node91" href="libsensorPy.abstractclass.pressureSensor.PressureSensor-class.php#__metaclass__" title="libsensorPy.abstractclass.pressureSensor.PressureSensor.__metaclass__" alt="" coords="17,108,289,127"/>
<area shape="rect" id="node91" href="libsensorPy.abstractclass.pressureSensor.PressureSensor-class.php#getPressureInPsi" title="Return the pressure in psi." alt="" coords="17,129,289,148"/>
<area shape="rect" id="node91" href="libsensorPy.abstractclass.pressureSensor.PressureSensor-class.php#getPressureInBar" title="Return the pressure in psi." alt="" coords="17,148,289,167"/>
<area shape="rect" id="node91" href="libsensorPy.abstractclass.pressureSensor.PressureSensor-class.php#getPressureInMmhg" title="Return the pressure in psi." alt="" coords="17,167,289,185"/>
<area shape="rect" id="node91" href="libsensorPy.abstractclass.pressureSensor.PressureSensor-class.php#getPressureInNm2" title="Return the pressure in psi." alt="" coords="17,185,289,204"/>
<area shape="rect" id="node2" href="libsensorPy.abstractclass.pressureSensor.PressureSensor-class.php" title="classdocs" alt="" coords="5,83,301,210"/>
<area shape="rect" id="node92" href="libsensorPy.abstractclass.sensor.Sensor-class.php#__del__" title="We&#39;re no longer using the GPIO, so tell software we&#39;re done." alt="" coords="69,39,237,57"/>
<area shape="rect" id="node3" href="libsensorPy.abstractclass.sensor.Sensor-class.php" title="classdocs" alt="" coords="57,6,249,63"/>
</map>
  <img src="<?=$siteUrl?>/img/uml/uml_class_diagram_for_libsenso_40.gif" alt='' usemap="#uml_class_diagram_for_libsenso_40" ismap="ismap" class="graph-without-title" />
</center>
</center>
<hr />
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
          <td><span class="summary-sig"><a href="libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure-class.php#__init__" class="summary-sig-name">__init__</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">address</span>=<span class="summary-sig-default">0x77</span>,
        <span class="summary-sig-arg">mode</span>=<span class="summary-sig-default">3</span>)</span><br />
      Constructor</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concretesensor.bmp085Pressure-pysrc.php#BMP085Pressure.__init__">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure-class.php#setup" class="summary-sig-name">setup</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">address</span>=<span class="summary-sig-default">0x77</span>,
        <span class="summary-sig-arg">mode</span>=<span class="summary-sig-default">3</span>)</span><br />
      Setup the GPIO.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concretesensor.bmp085Pressure-pysrc.php#BMP085Pressure.setup">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure-class.php#changeSetup" class="summary-sig-name">changeSetup</a>(<span class="summary-sig-arg">self</span>)</span><br />
      changes GPIO setup .</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concretesensor.bmp085Pressure-pysrc.php#BMP085Pressure.changeSetup">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="__readCalibrationData"></a><span class="summary-sig-name">__readCalibrationData</span>(<span class="summary-sig-arg">self</span>)</span><br />
      Reads the calibration data from the IC.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concretesensor.bmp085Pressure-pysrc.php#BMP085Pressure.__readCalibrationData">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="__readRawTemp"></a><span class="summary-sig-name">__readRawTemp</span>(<span class="summary-sig-arg">self</span>)</span><br />
      Reads the raw (uncompensated) temperature from the sensor.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concretesensor.bmp085Pressure-pysrc.php#BMP085Pressure.__readRawTemp">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="__readRawPressure"></a><span class="summary-sig-name">__readRawPressure</span>(<span class="summary-sig-arg">self</span>)</span><br />
      Reads the raw (uncompensated) pressure level from the sensor.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concretesensor.bmp085Pressure-pysrc.php#BMP085Pressure.__readRawPressure">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure-class.php#getPressure" class="summary-sig-name">getPressure</a>(<span class="summary-sig-arg">self</span>)</span><br />
      Gets the compensated pressure in pascal.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concretesensor.bmp085Pressure-pysrc.php#BMP085Pressure.getPressure">source&nbsp;code</a></span>
            
          </td>
        </tr>
      </table>
      
    </td>
  </tr>
  <tr>
    <td colspan="2" class="summary">
    <p class="indent-wrapped-lines"><b>Inherited from <code><a href="libsensorPy.abstractclass.pressureSensor.PressureSensor-class.php">abstractclass.pressureSensor.PressureSensor</a></code></b>:
      <code><a href="libsensorPy.abstractclass.pressureSensor.PressureSensor-class.php#getPressureInBar">getPressureInBar</a></code>,
      <code><a href="libsensorPy.abstractclass.pressureSensor.PressureSensor-class.php#getPressureInMmhg">getPressureInMmhg</a></code>,
      <code><a href="libsensorPy.abstractclass.pressureSensor.PressureSensor-class.php#getPressureInNm2">getPressureInNm2</a></code>,
      <code><a href="libsensorPy.abstractclass.pressureSensor.PressureSensor-class.php#getPressureInPsi">getPressureInPsi</a></code>
      </p>
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
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__ULTRALOWPOWER"></a><span class="summary-name">__ULTRALOWPOWER</span> = <code title="0">0</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__STANDARD"></a><span class="summary-name">__STANDARD</span> = <code title="1">1</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__HIGHRES"></a><span class="summary-name">__HIGHRES</span> = <code title="2">2</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__ULTRAHIGHRES"></a><span class="summary-name">__ULTRAHIGHRES</span> = <code title="3">3</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__CAL_AC1"></a><span class="summary-name">__CAL_AC1</span> = <code title="0xAA">0xAA</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__CAL_AC2"></a><span class="summary-name">__CAL_AC2</span> = <code title="0xAC">0xAC</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__CAL_AC3"></a><span class="summary-name">__CAL_AC3</span> = <code title="0xAE">0xAE</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__CAL_AC4"></a><span class="summary-name">__CAL_AC4</span> = <code title="0xB0">0xB0</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__CAL_AC5"></a><span class="summary-name">__CAL_AC5</span> = <code title="0xB2">0xB2</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__CAL_AC6"></a><span class="summary-name">__CAL_AC6</span> = <code title="0xB4">0xB4</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__CAL_B1"></a><span class="summary-name">__CAL_B1</span> = <code title="0xB6">0xB6</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__CAL_B2"></a><span class="summary-name">__CAL_B2</span> = <code title="0xB8">0xB8</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__CAL_MB"></a><span class="summary-name">__CAL_MB</span> = <code title="0xBA">0xBA</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__CAL_MC"></a><span class="summary-name">__CAL_MC</span> = <code title="0xBC">0xBC</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__CAL_MD"></a><span class="summary-name">__CAL_MD</span> = <code title="0xBE">0xBE</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__CONTROL"></a><span class="summary-name">__CONTROL</span> = <code title="0xF4">0xF4</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__TEMPDATA"></a><span class="summary-name">__TEMPDATA</span> = <code title="0xF6">0xF6</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__PRESSUREDATA"></a><span class="summary-name">__PRESSUREDATA</span> = <code title="0xF6">0xF6</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__READTEMPCMD"></a><span class="summary-name">__READTEMPCMD</span> = <code title="0x2E">0x2E</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__READPRESSURECMD"></a><span class="summary-name">__READPRESSURECMD</span> = <code title="0x34">0x34</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__cal_AC1"></a><span class="summary-name">__cal_AC1</span> = <code title="0">0</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__cal_AC2"></a><span class="summary-name">__cal_AC2</span> = <code title="0">0</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__cal_AC3"></a><span class="summary-name">__cal_AC3</span> = <code title="0">0</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__cal_AC4"></a><span class="summary-name">__cal_AC4</span> = <code title="0">0</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__cal_AC5"></a><span class="summary-name">__cal_AC5</span> = <code title="0">0</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__cal_AC6"></a><span class="summary-name">__cal_AC6</span> = <code title="0">0</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__cal_B1"></a><span class="summary-name">__cal_B1</span> = <code title="0">0</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__cal_B2"></a><span class="summary-name">__cal_B2</span> = <code title="0">0</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__cal_MB"></a><span class="summary-name">__cal_MB</span> = <code title="0">0</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__cal_MC"></a><span class="summary-name">__cal_MC</span> = <code title="0">0</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__cal_MD"></a><span class="summary-name">__cal_MD</span> = <code title="0">0</code>
    </td>
  </tr>
  <tr>
    <td colspan="2" class="summary">
    <p class="indent-wrapped-lines"><b>Inherited from <code><a href="libsensorPy.abstractclass.pressureSensor.PressureSensor-class.php">abstractclass.pressureSensor.PressureSensor</a></code></b>:
      <code><a href="libsensorPy.abstractclass.pressureSensor.PressureSensor-class.php#__metaclass__">__metaclass__</a></code>
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
        <span class="sig-arg">address</span>=<span class="sig-default">0x77</span>,
        <span class="sig-arg">mode</span>=<span class="sig-default">3</span>)</span>
    <br /><em class="fname">(Constructor)</em>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.concretesensor.bmp085Pressure-pysrc.php#BMP085Pressure.__init__">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Constructor</p>
  <dl class="fields">
    <dt>Parameters:</dt>
    <dd><ul class="nomargin-top">
        <li><strong class="pname"><code>address</code></strong> (int16) - The register's address to be read</li>
        <li><strong class="pname"><code>mode</code></strong> (int8) - The operating mode</li>
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
        <span class="sig-arg">address</span>=<span class="sig-default">0x77</span>,
        <span class="sig-arg">mode</span>=<span class="sig-default">3</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.concretesensor.bmp085Pressure-pysrc.php#BMP085Pressure.setup">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Setup the GPIO.</p>
  <dl class="fields">
    <dt>Parameters:</dt>
    <dd><ul class="nomargin-top">
        <li><strong class="pname"><code>address</code></strong> (int16) - The register's address to be read</li>
        <li><strong class="pname"><code>mode</code></strong> (int8) - The operating mode</li>
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
    ><span class="codelink"><a href="libsensorPy.concretesensor.bmp085Pressure-pysrc.php#BMP085Pressure.changeSetup">source&nbsp;code</a></span>&nbsp;
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
<a name="getPressure"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">getPressure</span>(<span class="sig-arg">self</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.concretesensor.bmp085Pressure-pysrc.php#BMP085Pressure.getPressure">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Gets the compensated pressure in pascal.</p>
  <dl class="fields">
    <dt>Returns: float</dt>
        <dd>The pressure read in kPa</dd>
    <dt>Overrides:
        <a href="libsensorPy.abstractclass.pressureSensor.PressureSensor-class.php#getPressure">abstractclass.pressureSensor.PressureSensor.getPressure</a>
    </dt>
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
