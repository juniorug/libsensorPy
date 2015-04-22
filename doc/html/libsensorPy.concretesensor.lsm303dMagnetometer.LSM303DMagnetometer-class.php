
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer</title>
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
        <a href="libsensorPy.concretesensor.lsm303dMagnetometer-module.php">Module&nbsp;lsm303dMagnetometer</a> ::
        Class&nbsp;LSM303DMagnetometer
      </span>
    </td>
    <td>
      <table cellpadding="0" cellspacing="0">
        <!-- hide/show private -->
        <tr><td align="right"><span class="options">[<a href="javascript:void(0);" class="privatelink"
    onclick="toggle_private();">hide&nbsp;private</a>]</span></td></tr>
        <tr><td align="right"><span class="options"
            >[<a href="frames.php" target="_top">frames</a
            >]&nbsp;|&nbsp;<a href="libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer-class.php"
            target="_top">no&nbsp;frames</a>]</span></td></tr>
      </table>
    </td>
  </tr>
</table>
<!-- ==================== CLASS DESCRIPTION ==================== -->
<h1 class="epydoc">Class LSM303DMagnetometer</h1><p class="nomargin-top"><span class="codelink"><a href="libsensorPy.concretesensor.lsm303dMagnetometer-pysrc.php#LSM303DMagnetometer">source&nbsp;code</a></span></p>
<center>
<center>  <map id="uml_class_diagram_for_libsenso_49" name="uml_class_diagram_for_libsenso_49">
<area shape="rect" id="node117" href="libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer-class.php#LSM" title="libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer.LSM" alt="" coords="113,185,256,204"/>
<area shape="rect" id="node117" href="libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer-class.php#LSM_WHOAMI" title="libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer.LSM_WHOAMI" alt="" coords="113,204,256,223"/>
<area shape="rect" id="node117" href="libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer-class.php#CTRL_0" title="libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer.CTRL_0" alt="" coords="113,223,256,241"/>
<area shape="rect" id="node117" href="libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer-class.php#CTRL_1" title="libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer.CTRL_1" alt="" coords="113,241,256,260"/>
<area shape="rect" id="node117" href="libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer-class.php#CTRL_2" title="libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer.CTRL_2" alt="" coords="113,260,256,279"/>
<area shape="rect" id="node117" href="libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer-class.php#CTRL_3" title="libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer.CTRL_3" alt="" coords="113,279,256,297"/>
<area shape="rect" id="node117" href="libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer-class.php#CTRL_4" title="libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer.CTRL_4" alt="" coords="113,297,256,316"/>
<area shape="rect" id="node117" href="libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer-class.php#CTRL_5" title="libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer.CTRL_5" alt="" coords="113,316,256,335"/>
<area shape="rect" id="node117" href="libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer-class.php#CTRL_6" title="libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer.CTRL_6" alt="" coords="113,335,256,353"/>
<area shape="rect" id="node117" href="libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer-class.php#CTRL_7" title="libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer.CTRL_7" alt="" coords="113,353,256,372"/>
<area shape="rect" id="node117" href="libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer-class.php#MAG_X_LSB" title="libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer.MAG_X_LSB" alt="" coords="113,372,256,391"/>
<area shape="rect" id="node117" href="libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer-class.php#MAG_X_MSB" title="libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer.MAG_X_MSB" alt="" coords="113,391,256,409"/>
<area shape="rect" id="node117" href="libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer-class.php#MAG_Y_LSB" title="libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer.MAG_Y_LSB" alt="" coords="113,409,256,428"/>
<area shape="rect" id="node117" href="libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer-class.php#TEMP_LSB" title="libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer.TEMP_LSB" alt="" coords="113,447,256,465"/>
<area shape="rect" id="node117" href="libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer-class.php#__init__" title="Constructor" alt="" coords="113,468,256,487"/>
<area shape="rect" id="node117" href="libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer-class.php#setup" title="Setup the board and GPIO" alt="" coords="113,487,256,505"/>
<area shape="rect" id="node117" href="libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer-class.php#changeSetup" title="changes GPIO setup ." alt="" coords="113,505,256,524"/>
<area shape="rect" id="node117" href="libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer-class.php#getMagnetic" title="Returns the magnetic value read." alt="" coords="113,524,256,543"/>
<area shape="rect" id="node1" href="libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer-class.php" title="libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer" alt="" coords="101,161,267,549"/>
<area shape="rect" id="node118" href="libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor-class.php#__metaclass__" title="libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor.__metaclass__" alt="" coords="17,108,353,127"/>
<area shape="rect" id="node2" href="libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor-class.php" title="classdocs" alt="" coords="5,83,365,141"/>
<area shape="rect" id="node119" href="libsensorPy.abstractclass.sensor.Sensor-class.php#__del__" title="We&#39;re no longer using the GPIO, so tell software we&#39;re done." alt="" coords="101,39,269,57"/>
<area shape="rect" id="node3" href="libsensorPy.abstractclass.sensor.Sensor-class.php" title="classdocs" alt="" coords="89,6,281,63"/>
</map>
  <img src="<?=$siteUrl?>/img/uml/uml_class_diagram_for_libsenso_49.gif" alt='' usemap="#uml_class_diagram_for_libsenso_49" ismap="ismap" class="graph-without-title" />
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
          <td><span class="summary-sig"><a href="libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer-class.php#__init__" class="summary-sig-name">__init__</a>(<span class="summary-sig-arg">self</span>)</span><br />
      Constructor</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concretesensor.lsm303dMagnetometer-pysrc.php#LSM303DMagnetometer.__init__">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer-class.php#setup" class="summary-sig-name">setup</a>(<span class="summary-sig-arg">self</span>)</span><br />
      Setup the board and GPIO</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concretesensor.lsm303dMagnetometer-pysrc.php#LSM303DMagnetometer.setup">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer-class.php#changeSetup" class="summary-sig-name">changeSetup</a>(<span class="summary-sig-arg">self</span>)</span><br />
      changes GPIO setup .</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concretesensor.lsm303dMagnetometer-pysrc.php#LSM303DMagnetometer.changeSetup">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer-class.php#__twos_comp_combine" class="summary-sig-name" onclick="show_private();">__twos_comp_combine</a>(<span class="summary-sig-arg">msb</span>,
        <span class="summary-sig-arg">lsb</span>)</span></td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concretesensor.lsm303dMagnetometer-pysrc.php#LSM303DMagnetometer.__twos_comp_combine">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="__detect"></a><span class="summary-sig-name">__detect</span>(<span class="summary-sig-arg">self</span>)</span><br />
      Detects if a LSM303D is connected.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concretesensor.lsm303dMagnetometer-pysrc.php#LSM303DMagnetometer.__detect">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a name="__configure"></a><span class="summary-sig-name">__configure</span>(<span class="summary-sig-arg">self</span>)</span><br />
      Configure the board to read data.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concretesensor.lsm303dMagnetometer-pysrc.php#LSM303DMagnetometer.__configure">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer-class.php#getMagnetic" class="summary-sig-name">getMagnetic</a>(<span class="summary-sig-arg">self</span>)</span><br />
      Returns the magnetic value read.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concretesensor.lsm303dMagnetometer-pysrc.php#LSM303DMagnetometer.getMagnetic">source&nbsp;code</a></span>
            
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
        <a name="LSM"></a><span class="summary-name">LSM</span> = <code title="0x1d">0x1d</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="LSM_WHOAMI"></a><span class="summary-name">LSM_WHOAMI</span> = <code title="0b1001001">0b1001001</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="CTRL_0"></a><span class="summary-name">CTRL_0</span> = <code title="0x1F">0x1F</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="CTRL_1"></a><span class="summary-name">CTRL_1</span> = <code title="0x20">0x20</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="CTRL_2"></a><span class="summary-name">CTRL_2</span> = <code title="0x21">0x21</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="CTRL_3"></a><span class="summary-name">CTRL_3</span> = <code title="0x22">0x22</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="CTRL_4"></a><span class="summary-name">CTRL_4</span> = <code title="0x23">0x23</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="CTRL_5"></a><span class="summary-name">CTRL_5</span> = <code title="0x24">0x24</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="CTRL_6"></a><span class="summary-name">CTRL_6</span> = <code title="0x25">0x25</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="CTRL_7"></a><span class="summary-name">CTRL_7</span> = <code title="0x26">0x26</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="MAG_X_LSB"></a><span class="summary-name">MAG_X_LSB</span> = <code title="0x08">0x08</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="MAG_X_MSB"></a><span class="summary-name">MAG_X_MSB</span> = <code title="0x09">0x09</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="MAG_Y_LSB"></a><span class="summary-name">MAG_Y_LSB</span> = <code title="0x0A">0x0A</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="MAG_Y_MSB"></a><span class="summary-name">MAG_Y_MSB</span> = <code title="0x0B">0x0B</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="MAG_Z_LSB"></a><span class="summary-name">MAG_Z_LSB</span> = <code title="0x0C">0x0C</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="MAG_Z_MSB"></a><span class="summary-name">MAG_Z_MSB</span> = <code title="0x0D">0x0D</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="ACC_X_LSB"></a><span class="summary-name">ACC_X_LSB</span> = <code title="0x28">0x28</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="ACC_X_MSB"></a><span class="summary-name">ACC_X_MSB</span> = <code title="0x29">0x29</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="ACC_Y_LSB"></a><span class="summary-name">ACC_Y_LSB</span> = <code title="0x2A">0x2A</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="ACC_Y_MSB"></a><span class="summary-name">ACC_Y_MSB</span> = <code title="0x2B">0x2B</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="ACC_Z_LSB"></a><span class="summary-name">ACC_Z_LSB</span> = <code title="0x2C">0x2C</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="ACC_Z_MSB"></a><span class="summary-name">ACC_Z_MSB</span> = <code title="0x2D">0x2D</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="TEMP_MSB"></a><span class="summary-name">TEMP_MSB</span> = <code title="0x05">0x05</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="TEMP_LSB"></a><span class="summary-name">TEMP_LSB</span> = <code title="0x06">0x06</code>
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
  <h3 class="epydoc"><span class="sig"><span class="sig-name">__init__</span>(<span class="sig-arg">self</span>)</span>
    <br /><em class="fname">(Constructor)</em>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.concretesensor.lsm303dMagnetometer-pysrc.php#LSM303DMagnetometer.__init__">source&nbsp;code</a></span>&nbsp;
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
    ><span class="codelink"><a href="libsensorPy.concretesensor.lsm303dMagnetometer-pysrc.php#LSM303DMagnetometer.setup">source&nbsp;code</a></span>&nbsp;
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
  <h3 class="epydoc"><span class="sig"><span class="sig-name">changeSetup</span>(<span class="sig-arg">self</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.concretesensor.lsm303dMagnetometer-pysrc.php#LSM303DMagnetometer.changeSetup">source&nbsp;code</a></span>&nbsp;
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
<a name="__twos_comp_combine"></a>
<div class="private">
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">__twos_comp_combine</span>(<span class="sig-arg">msb</span>,
        <span class="sig-arg">lsb</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.concretesensor.lsm303dMagnetometer-pysrc.php#LSM303DMagnetometer.__twos_comp_combine">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  
  <dl class="fields">
    <dt>Parameters:</dt>
    <dd><ul class="nomargin-top">
        <li><strong class="pname"><code>msb</code></strong> (int8) - Most significant bit</li>
        <li><strong class="pname"><code>lsb</code></strong> (int8) - Last significant bit</li>
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
    ><span class="codelink"><a href="libsensorPy.concretesensor.lsm303dMagnetometer-pysrc.php#LSM303DMagnetometer.getMagnetic">source&nbsp;code</a></span>&nbsp;
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
