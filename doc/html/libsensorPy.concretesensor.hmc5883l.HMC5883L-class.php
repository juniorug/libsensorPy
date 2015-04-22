
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>libsensorPy.concretesensor.hmc5883l.HMC5883L</title>
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
        <a href="libsensorPy.concretesensor.hmc5883l-module.php">Module&nbsp;hmc5883l</a> ::
        Class&nbsp;HMC5883L
      </span>
    </td>
    <td>
      <table cellpadding="0" cellspacing="0">
        <!-- hide/show private -->
        <tr><td align="right"><span class="options">[<a href="javascript:void(0);" class="privatelink"
    onclick="toggle_private();">hide&nbsp;private</a>]</span></td></tr>
        <tr><td align="right"><span class="options"
            >[<a href="frames.php" target="_top">frames</a
            >]&nbsp;|&nbsp;<a href="libsensorPy.concretesensor.hmc5883l.HMC5883L-class.php"
            target="_top">no&nbsp;frames</a>]</span></td></tr>
      </table>
    </td>
  </tr>
</table>
<!-- ==================== CLASS DESCRIPTION ==================== -->
<h1 class="epydoc">Class HMC5883L</h1><p class="nomargin-top"><span class="codelink"><a href="libsensorPy.concretesensor.hmc5883l-pysrc.php#HMC5883L">source&nbsp;code</a></span></p>
<center>
<center>  <map id="uml_class_diagram_for_libsenso_46" name="uml_class_diagram_for_libsenso_46">
<area shape="rect" id="node108" href="libsensorPy.concretesensor.hmc5883l.HMC5883L-class.php#ADDRESS" title="libsensorPy.concretesensor.hmc5883l.HMC5883L.ADDRESS" alt="" coords="47,185,324,204"/>
<area shape="rect" id="node108" href="libsensorPy.concretesensor.hmc5883l.HMC5883L-class.php#DEFAULT_ADDRESS" title="libsensorPy.concretesensor.hmc5883l.HMC5883L.DEFAULT_ADDRESS" alt="" coords="47,204,324,223"/>
<area shape="rect" id="node108" href="libsensorPy.concretesensor.hmc5883l.HMC5883L-class.php#RA_CONFIG_A" title="libsensorPy.concretesensor.hmc5883l.HMC5883L.RA_CONFIG_A" alt="" coords="47,223,324,241"/>
<area shape="rect" id="node108" href="libsensorPy.concretesensor.hmc5883l.HMC5883L-class.php#RA_CONFIG_B" title="libsensorPy.concretesensor.hmc5883l.HMC5883L.RA_CONFIG_B" alt="" coords="47,241,324,260"/>
<area shape="rect" id="node108" href="libsensorPy.concretesensor.hmc5883l.HMC5883L-class.php#RA_MODE" title="libsensorPy.concretesensor.hmc5883l.HMC5883L.RA_MODE" alt="" coords="47,260,324,279"/>
<area shape="rect" id="node108" href="libsensorPy.concretesensor.hmc5883l.HMC5883L-class.php#RA_DATAX_H" title="libsensorPy.concretesensor.hmc5883l.HMC5883L.RA_DATAX_H" alt="" coords="47,279,324,297"/>
<area shape="rect" id="node108" href="libsensorPy.concretesensor.hmc5883l.HMC5883L-class.php#RA_DATAX_L" title="libsensorPy.concretesensor.hmc5883l.HMC5883L.RA_DATAX_L" alt="" coords="47,297,324,316"/>
<area shape="rect" id="node108" href="libsensorPy.concretesensor.hmc5883l.HMC5883L-class.php#RA_DATAZ_H" title="libsensorPy.concretesensor.hmc5883l.HMC5883L.RA_DATAZ_H" alt="" coords="47,316,324,335"/>
<area shape="rect" id="node108" href="libsensorPy.concretesensor.hmc5883l.HMC5883L-class.php#RA_DATAZ_L" title="libsensorPy.concretesensor.hmc5883l.HMC5883L.RA_DATAZ_L" alt="" coords="47,335,324,353"/>
<area shape="rect" id="node108" href="libsensorPy.concretesensor.hmc5883l.HMC5883L-class.php#RA_DATAY_H" title="libsensorPy.concretesensor.hmc5883l.HMC5883L.RA_DATAY_H" alt="" coords="47,353,324,372"/>
<area shape="rect" id="node108" href="libsensorPy.concretesensor.hmc5883l.HMC5883L-class.php#RA_DATAY_L" title="libsensorPy.concretesensor.hmc5883l.HMC5883L.RA_DATAY_L" alt="" coords="47,372,324,391"/>
<area shape="rect" id="node108" href="libsensorPy.concretesensor.hmc5883l.HMC5883L-class.php#RA_STATUS" title="libsensorPy.concretesensor.hmc5883l.HMC5883L.RA_STATUS" alt="" coords="47,391,324,409"/>
<area shape="rect" id="node108" href="libsensorPy.concretesensor.hmc5883l.HMC5883L-class.php#RA_ID_A" title="libsensorPy.concretesensor.hmc5883l.HMC5883L.RA_ID_A" alt="" coords="47,409,324,428"/>
<area shape="rect" id="node108" href="libsensorPy.concretesensor.hmc5883l.HMC5883L-class.php#STATUS_READY_BIT" title="libsensorPy.concretesensor.hmc5883l.HMC5883L.STATUS_READY_BIT" alt="" coords="47,447,324,465"/>
<area shape="rect" id="node108" href="libsensorPy.concretesensor.hmc5883l.HMC5883L-class.php#__init__" title="Constructor" alt="" coords="47,468,324,487"/>
<area shape="rect" id="node108" href="libsensorPy.concretesensor.hmc5883l.HMC5883L-class.php#setup" title="Setup the GPIO." alt="" coords="47,487,324,505"/>
<area shape="rect" id="node108" href="libsensorPy.concretesensor.hmc5883l.HMC5883L-class.php#changeSetup" title="changes GPIO setup ." alt="" coords="47,505,324,524"/>
<area shape="rect" id="node108" href="libsensorPy.concretesensor.hmc5883l.HMC5883L-class.php#getMagnetic" title="Returns the magnetic value read." alt="" coords="47,524,324,543"/>
<area shape="rect" id="node1" href="libsensorPy.concretesensor.hmc5883l.HMC5883L-class.php" title="libsensorPy.concretesensor.hmc5883l.HMC5883L" alt="" coords="35,161,336,549"/>
<area shape="rect" id="node109" href="libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor-class.php#__metaclass__" title="libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor.__metaclass__" alt="" coords="17,108,353,127"/>
<area shape="rect" id="node2" href="libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor-class.php" title="classdocs" alt="" coords="5,83,365,141"/>
<area shape="rect" id="node110" href="libsensorPy.abstractclass.sensor.Sensor-class.php#__del__" title="We&#39;re no longer using the GPIO, so tell software we&#39;re done." alt="" coords="101,39,269,57"/>
<area shape="rect" id="node3" href="libsensorPy.abstractclass.sensor.Sensor-class.php" title="classdocs" alt="" coords="89,6,281,63"/>
</map>
  <img src="<?=$siteUrl?>/img/uml/uml_class_diagram_for_libsenso_46.gif" alt='' usemap="#uml_class_diagram_for_libsenso_46" ismap="ismap" class="graph-without-title" />
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
          <td><span class="summary-sig"><a href="libsensorPy.concretesensor.hmc5883l.HMC5883L-class.php#__init__" class="summary-sig-name">__init__</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">address</span>=<span class="summary-sig-default">DEFAULT_ADDRESS</span>)</span><br />
      Constructor</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concretesensor.hmc5883l-pysrc.php#HMC5883L.__init__">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="libsensorPy.concretesensor.hmc5883l.HMC5883L-class.php#setup" class="summary-sig-name">setup</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">address</span>=<span class="summary-sig-default">DEFAULT_ADDRESS</span>)</span><br />
      Setup the GPIO.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concretesensor.hmc5883l-pysrc.php#HMC5883L.setup">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="libsensorPy.concretesensor.hmc5883l.HMC5883L-class.php#changeSetup" class="summary-sig-name">changeSetup</a>(<span class="summary-sig-arg">self</span>)</span><br />
      changes GPIO setup .</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concretesensor.hmc5883l-pysrc.php#HMC5883L.changeSetup">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="libsensorPy.concretesensor.hmc5883l.HMC5883L-class.php#__setGain" class="summary-sig-name" onclick="show_private();">__setGain</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">value</span>)</span><br />
      Sets the gain</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concretesensor.hmc5883l-pysrc.php#HMC5883L.__setGain">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="libsensorPy.concretesensor.hmc5883l.HMC5883L-class.php#__setMode" class="summary-sig-name" onclick="show_private();">__setMode</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">newMode</span>)</span><br />
      Use this method to guarantee that bits 7-2 are set to zero, which is 
      a requirement specified in the datasheet.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concretesensor.hmc5883l-pysrc.php#HMC5883L.__setMode">source&nbsp;code</a></span>
            
          </td>
        </tr>
      </table>
      
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">float[]</span>
    </td><td class="summary">
      <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td><span class="summary-sig"><a href="libsensorPy.concretesensor.hmc5883l.HMC5883L-class.php#getMagnetic" class="summary-sig-name">getMagnetic</a>(<span class="summary-sig-arg">self</span>)</span><br />
      Returns the magnetic value read.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concretesensor.hmc5883l-pysrc.php#HMC5883L.getMagnetic">source&nbsp;code</a></span>
            
          </td>
        </tr>
      </table>
      
    </td>
  </tr>
  <tr>
    <td colspan="2" class="summary">
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
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="ADDRESS"></a><span class="summary-name">ADDRESS</span> = <code title="0x1E">0x1E</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="DEFAULT_ADDRESS"></a><span class="summary-name">DEFAULT_ADDRESS</span> = <code title="0x1E">0x1E</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="RA_CONFIG_A"></a><span class="summary-name">RA_CONFIG_A</span> = <code title="0x00">0x00</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="RA_CONFIG_B"></a><span class="summary-name">RA_CONFIG_B</span> = <code title="0x01">0x01</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="RA_MODE"></a><span class="summary-name">RA_MODE</span> = <code title="0x02">0x02</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="RA_DATAX_H"></a><span class="summary-name">RA_DATAX_H</span> = <code title="0x03">0x03</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="RA_DATAX_L"></a><span class="summary-name">RA_DATAX_L</span> = <code title="0x04">0x04</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="RA_DATAZ_H"></a><span class="summary-name">RA_DATAZ_H</span> = <code title="0x05">0x05</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="RA_DATAZ_L"></a><span class="summary-name">RA_DATAZ_L</span> = <code title="0x06">0x06</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="RA_DATAY_H"></a><span class="summary-name">RA_DATAY_H</span> = <code title="0x07">0x07</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="RA_DATAY_L"></a><span class="summary-name">RA_DATAY_L</span> = <code title="0x08">0x08</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="RA_STATUS"></a><span class="summary-name">RA_STATUS</span> = <code title="0x09">0x09</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="RA_ID_A"></a><span class="summary-name">RA_ID_A</span> = <code title="0x0A">0x0A</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="RA_ID_B"></a><span class="summary-name">RA_ID_B</span> = <code title="0x0B">0x0B</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="RA_ID_C"></a><span class="summary-name">RA_ID_C</span> = <code title="0x0C">0x0C</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="CRA_AVERAGE_BIT"></a><span class="summary-name">CRA_AVERAGE_BIT</span> = <code title="6">6</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="CRA_AVERAGE_LENGTH"></a><span class="summary-name">CRA_AVERAGE_LENGTH</span> = <code title="2">2</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="CRA_RATE_BIT"></a><span class="summary-name">CRA_RATE_BIT</span> = <code title="4">4</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="CRA_RATE_LENGTH"></a><span class="summary-name">CRA_RATE_LENGTH</span> = <code title="3">3</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="CRA_BIAS_BIT"></a><span class="summary-name">CRA_BIAS_BIT</span> = <code title="1">1</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="CRA_BIAS_LENGTH"></a><span class="summary-name">CRA_BIAS_LENGTH</span> = <code title="2">2</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="AVERAGING_1"></a><span class="summary-name">AVERAGING_1</span> = <code title="0x00">0x00</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="AVERAGING_2"></a><span class="summary-name">AVERAGING_2</span> = <code title="0x01">0x01</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="AVERAGING_4"></a><span class="summary-name">AVERAGING_4</span> = <code title="0x02">0x02</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="AVERAGING_8"></a><span class="summary-name">AVERAGING_8</span> = <code title="0x03">0x03</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="RATE_0P75"></a><span class="summary-name">RATE_0P75</span> = <code title="0x00">0x00</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="RATE_1P5"></a><span class="summary-name">RATE_1P5</span> = <code title="0x01">0x01</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="RATE_3"></a><span class="summary-name">RATE_3</span> = <code title="0x02">0x02</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="RATE_7P5"></a><span class="summary-name">RATE_7P5</span> = <code title="0x03">0x03</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="RATE_15"></a><span class="summary-name">RATE_15</span> = <code title="0x04">0x04</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="RATE_30"></a><span class="summary-name">RATE_30</span> = <code title="0x05">0x05</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="RATE_75"></a><span class="summary-name">RATE_75</span> = <code title="0x06">0x06</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="BIAS_NORMAL"></a><span class="summary-name">BIAS_NORMAL</span> = <code title="0x00">0x00</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="BIAS_POSITIVE"></a><span class="summary-name">BIAS_POSITIVE</span> = <code title="0x01">0x01</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="BIAS_NEGATIVE"></a><span class="summary-name">BIAS_NEGATIVE</span> = <code title="0x02">0x02</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="CRB_GAIN_BIT"></a><span class="summary-name">CRB_GAIN_BIT</span> = <code title="7">7</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="CRB_GAIN_LENGTH"></a><span class="summary-name">CRB_GAIN_LENGTH</span> = <code title="3">3</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="GAIN_1370"></a><span class="summary-name">GAIN_1370</span> = <code title="0x00">0x00</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="GAIN_1090"></a><span class="summary-name">GAIN_1090</span> = <code title="0x01">0x01</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="GAIN_820"></a><span class="summary-name">GAIN_820</span> = <code title="0x02">0x02</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="GAIN_660"></a><span class="summary-name">GAIN_660</span> = <code title="0x03">0x03</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="GAIN_440"></a><span class="summary-name">GAIN_440</span> = <code title="0x04">0x04</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="GAIN_390"></a><span class="summary-name">GAIN_390</span> = <code title="0x05">0x05</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="GAIN_330"></a><span class="summary-name">GAIN_330</span> = <code title="0x06">0x06</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="GAIN_220"></a><span class="summary-name">GAIN_220</span> = <code title="0x07">0x07</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="MODEREG_BIT"></a><span class="summary-name">MODEREG_BIT</span> = <code title="1">1</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="MODEREG_LENGTH"></a><span class="summary-name">MODEREG_LENGTH</span> = <code title="2">2</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="MODE_CONTINUOUS"></a><span class="summary-name">MODE_CONTINUOUS</span> = <code title="0x00">0x00</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="MODE_SINGLE"></a><span class="summary-name">MODE_SINGLE</span> = <code title="0x01">0x01</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="MODE_IDLE"></a><span class="summary-name">MODE_IDLE</span> = <code title="0x02">0x02</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="STATUS_LOCK_BIT"></a><span class="summary-name">STATUS_LOCK_BIT</span> = <code title="1">1</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="STATUS_READY_BIT"></a><span class="summary-name">STATUS_READY_BIT</span> = <code title="0">0</code>
    </td>
  </tr>
  <tr>
    <td colspan="2" class="summary">
    <p class="indent-wrapped-lines"><b>Inherited from <code><a href="libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor-class.php">abstractclass.magnetometerSensor.MagnetometerSensor</a></code></b>:
      <code><a href="libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor-class.php#__metaclass__">__metaclass__</a></code>
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
        <span class="sig-arg">address</span>=<span class="sig-default">DEFAULT_ADDRESS</span>)</span>
    <br /><em class="fname">(Constructor)</em>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.concretesensor.hmc5883l-pysrc.php#HMC5883L.__init__">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Constructor</p>
  <dl class="fields">
    <dt>Parameters:</dt>
    <dd><ul class="nomargin-top">
        <li><strong class="pname"><code>address</code></strong> (int16) - The register's address to be read</li>
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
        <span class="sig-arg">address</span>=<span class="sig-default">DEFAULT_ADDRESS</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.concretesensor.hmc5883l-pysrc.php#HMC5883L.setup">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Setup the GPIO.</p>
  <dl class="fields">
    <dt>Parameters:</dt>
    <dd><ul class="nomargin-top">
        <li><strong class="pname"><code>address</code></strong> (int16) - The register's address to be read</li>
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
    ><span class="codelink"><a href="libsensorPy.concretesensor.hmc5883l-pysrc.php#HMC5883L.changeSetup">source&nbsp;code</a></span>&nbsp;
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
<a name="__setGain"></a>
<div class="private">
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">__setGain</span>(<span class="sig-arg">self</span>,
        <span class="sig-arg">value</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.concretesensor.hmc5883l-pysrc.php#HMC5883L.__setGain">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Sets the gain</p>
  <dl class="fields">
    <dt>Parameters:</dt>
    <dd><ul class="nomargin-top">
        <li><strong class="pname"><code>value</code></strong> (float) - Gain value.</li>
    </ul></dd>
  </dl>
</td></tr></table>
</div>
<a name="__setMode"></a>
<div class="private">
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">__setMode</span>(<span class="sig-arg">self</span>,
        <span class="sig-arg">newMode</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.concretesensor.hmc5883l-pysrc.php#HMC5883L.__setMode">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Use this method to guarantee that bits 7-2 are set to zero, which is a
  requirement specified in the datasheet.</p>
  <dl class="fields">
    <dt>Parameters:</dt>
    <dd><ul class="nomargin-top">
        <li><strong class="pname"><code>newMode</code></strong> (int8) - The use mode</li>
    </ul></dd>
  </dl>
</td></tr></table>
</div>
<a name="getMagnetic"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">getMagnetic</span>(<span class="sig-arg">self</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.concretesensor.hmc5883l-pysrc.php#HMC5883L.getMagnetic">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Returns the magnetic value read.</p>
  <dl class="fields">
    <dt>Returns: float[]</dt>
        <dd>The magnetic read</dd>
    <dt>Overrides:
        <a href="libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor-class.php#getMagnetic">abstractclass.magnetometerSensor.MagnetometerSensor.getMagnetic</a>
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
