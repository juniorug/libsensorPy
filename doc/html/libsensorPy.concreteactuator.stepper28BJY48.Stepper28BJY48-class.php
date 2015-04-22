
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48</title>
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
        <a href="libsensorPy.concreteactuator-module.php">Package&nbsp;concreteactuator</a> ::
        <a href="libsensorPy.concreteactuator.stepper28BJY48-module.php">Module&nbsp;stepper28BJY48</a> ::
        Class&nbsp;Stepper28BJY48
      </span>
    </td>
    <td>
      <table cellpadding="0" cellspacing="0">
        <!-- hide/show private -->
        <tr><td align="right"><span class="options">[<a href="javascript:void(0);" class="privatelink"
    onclick="toggle_private();">hide&nbsp;private</a>]</span></td></tr>
        <tr><td align="right"><span class="options"
            >[<a href="frames.php" target="_top">frames</a
            >]&nbsp;|&nbsp;<a href="libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48-class.php"
            target="_top">no&nbsp;frames</a>]</span></td></tr>
      </table>
    </td>
  </tr>
</table>
<!-- ==================== CLASS DESCRIPTION ==================== -->
<h1 class="epydoc">Class Stepper28BJY48</h1><p class="nomargin-top"><span class="codelink"><a href="libsensorPy.concreteactuator.stepper28BJY48-pysrc.php#Stepper28BJY48">source&nbsp;code</a></span></p>
<center>
<center>  <map id="uml_class_diagram_for_libsenso_24" name="uml_class_diagram_for_libsenso_24">
<area shape="rect" id="node54" href="libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48-class.php#FOUR_STEP_SEQUENCE" title="libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48.FOUR_STEP_SEQUENCE" alt="" coords="57,263,317,281"/>
<area shape="rect" id="node54" href="libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48-class.php#EIGHT_STEP_SEQUENCE" title="libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48.EIGHT_STEP_SEQUENCE" alt="" coords="57,281,317,300"/>
<area shape="rect" id="node54" href="libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48-class.php#CLOCKWISE" title="libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48.CLOCKWISE" alt="" coords="57,300,317,319"/>
<area shape="rect" id="node54" href="libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48-class.php#FASTER_CLOCKWISE" title="libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48.FASTER_CLOCKWISE" alt="" coords="57,319,317,337"/>
<area shape="rect" id="node54" href="libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48-class.php#ANTI_CLOCKWISE" title="libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48.ANTI_CLOCKWISE" alt="" coords="57,337,317,356"/>
<area shape="rect" id="node54" href="libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48-class.php#FASTER_ANTI_CLOCKWISE" title="libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48.FASTER_ANTI_CLOCKWISE" alt="" coords="57,356,317,375"/>
<area shape="rect" id="node54" href="libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48-class.php#__init__" title="Constructor" alt="" coords="57,377,317,396"/>
<area shape="rect" id="node54" href="libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48-class.php#setup" title="Setup the Actuator" alt="" coords="57,396,317,415"/>
<area shape="rect" id="node54" href="libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48-class.php#changeSetup" title="Changes the Actuator&#39;s setup" alt="" coords="57,415,317,433"/>
<area shape="rect" id="node54" href="libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48-class.php#setWaitTime" title="Sets the time that the motor wil rotate" alt="" coords="57,433,317,452"/>
<area shape="rect" id="node54" href="libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48-class.php#setStepSequence" title="Sets the sequence: 4 or 8 steps" alt="" coords="57,452,317,471"/>
<area shape="rect" id="node54" href="libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48-class.php#setDirectionAndVelocity" title="Sets the rotation&#39;s direction and velocity" alt="" coords="57,471,317,489"/>
<area shape="rect" id="node54" href="libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48-class.php#rotate" title="Rotates the Motor" alt="" coords="57,489,317,508"/>
<area shape="rect" id="node1" href="libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48-class.php" title="classdocs" alt="" coords="45,238,328,514"/>
<area shape="rect" id="node55" href="libsensorPy.abstractclass.stepperMotorActuator.StepperMotorActuator-class.php#__metaclass__" title="libsensorPy.abstractclass.stepperMotorActuator.StepperMotorActuator.__metaclass__" alt="" coords="17,185,357,204"/>
<area shape="rect" id="node2" href="libsensorPy.abstractclass.stepperMotorActuator.StepperMotorActuator-class.php" title="classdocs" alt="" coords="5,161,368,218"/>
<area shape="rect" id="node57" href="libsensorPy.abstractclass.actuator.Actuator-class.php#__del__" title="We&#39;re no longer using the GPIO, so tell software we&#39;re done" alt="" coords="96,39,280,57"/>
<area shape="rect" id="node3" href="libsensorPy.abstractclass.actuator.Actuator-class.php" title="classdocs" alt="" coords="84,6,292,63"/>
<area shape="rect" id="node56" href="libsensorPy.abstractclass.motorActuator.MotorActuator-class.php#setDirection" title="Sets the rotaction direction." alt="" coords="61,116,313,135"/>
<area shape="rect" id="node4" href="libsensorPy.abstractclass.motorActuator.MotorActuator-class.php" title="classdocs" alt="" coords="49,83,324,141"/>
</map>
  <img src="<?=$siteUrl?>/img/uml/uml_class_diagram_for_libsenso_24.gif" alt='' usemap="#uml_class_diagram_for_libsenso_24" ismap="ismap" class="graph-without-title" />
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
          <td><span class="summary-sig"><a href="libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48-class.php#__init__" class="summary-sig-name">__init__</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">stepDir</span>=<span class="summary-sig-default">2</span>,
        <span class="summary-sig-arg">waitTime</span>=<span class="summary-sig-default">10</span>)</span><br />
      Constructor</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concreteactuator.stepper28BJY48-pysrc.php#Stepper28BJY48.__init__">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48-class.php#setup" class="summary-sig-name">setup</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">stepDir</span>=<span class="summary-sig-default">2</span>,
        <span class="summary-sig-arg">waitTime</span>=<span class="summary-sig-default">10</span>)</span><br />
      Setup the Actuator</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concreteactuator.stepper28BJY48-pysrc.php#Stepper28BJY48.setup">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48-class.php#changeSetup" class="summary-sig-name">changeSetup</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">stepDir</span>=<span class="summary-sig-default">2</span>,
        <span class="summary-sig-arg">waitTime</span>=<span class="summary-sig-default">10</span>)</span><br />
      Changes the Actuator's setup</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concreteactuator.stepper28BJY48-pysrc.php#Stepper28BJY48.changeSetup">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48-class.php#setWaitTime" class="summary-sig-name">setWaitTime</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">waitTime</span>=<span class="summary-sig-default">10</span>)</span><br />
      Sets the time that the motor wil rotate</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concreteactuator.stepper28BJY48-pysrc.php#Stepper28BJY48.setWaitTime">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48-class.php#setStepSequence" class="summary-sig-name">setStepSequence</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">stepSequence</span>=<span class="summary-sig-default">8</span>)</span><br />
      Sets the sequence: 4 or 8 steps</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concreteactuator.stepper28BJY48-pysrc.php#Stepper28BJY48.setStepSequence">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48-class.php#setDirectionAndVelocity" class="summary-sig-name">setDirectionAndVelocity</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">stepDir</span>=<span class="summary-sig-default">2</span>)</span><br />
      Sets the rotation's direction and velocity</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concreteactuator.stepper28BJY48-pysrc.php#Stepper28BJY48.setDirectionAndVelocity">source&nbsp;code</a></span>
            
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
          <td><span class="summary-sig"><a href="libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48-class.php#rotate" class="summary-sig-name">rotate</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">waitTime</span>=<span class="summary-sig-default">10</span>)</span><br />
      Rotates the Motor</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.concreteactuator.stepper28BJY48-pysrc.php#Stepper28BJY48.rotate">source&nbsp;code</a></span>
            
          </td>
        </tr>
      </table>
      
    </td>
  </tr>
  <tr>
    <td colspan="2" class="summary">
    <p class="indent-wrapped-lines"><b>Inherited from <code><a href="libsensorPy.abstractclass.motorActuator.MotorActuator-class.php">abstractclass.motorActuator.MotorActuator</a></code></b>:
      <code><a href="libsensorPy.abstractclass.motorActuator.MotorActuator-class.php#setDirection">setDirection</a></code>
      </p>
    <p class="indent-wrapped-lines"><b>Inherited from <code><a href="libsensorPy.abstractclass.actuator.Actuator-class.php">abstractclass.actuator.Actuator</a></code></b>:
      <code><a href="libsensorPy.abstractclass.actuator.Actuator-class.php#__del__">__del__</a></code>
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
        <a name="FOUR_STEP_SEQUENCE"></a><span class="summary-name">FOUR_STEP_SEQUENCE</span> = <code title="4">4</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="EIGHT_STEP_SEQUENCE"></a><span class="summary-name">EIGHT_STEP_SEQUENCE</span> = <code title="8">8</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="CLOCKWISE"></a><span class="summary-name">CLOCKWISE</span> = <code title="1">1</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="FASTER_CLOCKWISE"></a><span class="summary-name">FASTER_CLOCKWISE</span> = <code title="2">2</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="ANTI_CLOCKWISE"></a><span class="summary-name">ANTI_CLOCKWISE</span> = <code title="-1">-1</code>
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="FASTER_ANTI_CLOCKWISE"></a><span class="summary-name">FASTER_ANTI_CLOCKWISE</span> = <code title="-2">-2</code>
    </td>
  </tr>
  <tr>
    <td colspan="2" class="summary">
    <p class="indent-wrapped-lines"><b>Inherited from <code><a href="libsensorPy.abstractclass.stepperMotorActuator.StepperMotorActuator-class.php">abstractclass.stepperMotorActuator.StepperMotorActuator</a></code></b>:
      <code><a href="libsensorPy.abstractclass.stepperMotorActuator.StepperMotorActuator-class.php#__metaclass__">__metaclass__</a></code>
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
        <span class="sig-arg">stepDir</span>=<span class="sig-default">2</span>,
        <span class="sig-arg">waitTime</span>=<span class="sig-default">10</span>)</span>
    <br /><em class="fname">(Constructor)</em>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.concreteactuator.stepper28BJY48-pysrc.php#Stepper28BJY48.__init__">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Constructor</p>
  <dl class="fields">
    <dt>Parameters:</dt>
    <dd><ul class="nomargin-top">
        <li><strong class="pname"><code>stepDir</code></strong> (int8) - The direction and velocity of rotation</li>
        <li><strong class="pname"><code>waitTime</code></strong> (float) - The time that the motor wil rotate</li>
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
        <span class="sig-arg">stepDir</span>=<span class="sig-default">2</span>,
        <span class="sig-arg">waitTime</span>=<span class="sig-default">10</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.concreteactuator.stepper28BJY48-pysrc.php#Stepper28BJY48.setup">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Setup the Actuator</p>
  <dl class="fields">
    <dt>Parameters:</dt>
    <dd><ul class="nomargin-top">
        <li><strong class="pname"><code>stepDir</code></strong> (int8) - The direction and velocity of rotation</li>
        <li><strong class="pname"><code>waitTime</code></strong> (float) - The time that the motor wil rotate</li>
    </ul></dd>
    <dt>Overrides:
        <a href="libsensorPy.abstractclass.actuator.Actuator-class.php#setup">abstractclass.actuator.Actuator.setup</a>
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
        <span class="sig-arg">stepDir</span>=<span class="sig-default">2</span>,
        <span class="sig-arg">waitTime</span>=<span class="sig-default">10</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.concreteactuator.stepper28BJY48-pysrc.php#Stepper28BJY48.changeSetup">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Changes the Actuator's setup</p>
  <dl class="fields">
    <dt>Parameters:</dt>
    <dd><ul class="nomargin-top">
        <li><strong class="pname"><code>stepDir</code></strong> (int8) - The direction and velocity of rotation</li>
        <li><strong class="pname"><code>waitTime</code></strong> (float) - The time that the motor wil rotate</li>
    </ul></dd>
    <dt>Overrides:
        <a href="libsensorPy.abstractclass.actuator.Actuator-class.php#changeSetup">abstractclass.actuator.Actuator.changeSetup</a>
    </dt>
  </dl>
</td></tr></table>
</div>
<a name="setWaitTime"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">setWaitTime</span>(<span class="sig-arg">self</span>,
        <span class="sig-arg">waitTime</span>=<span class="sig-default">10</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.concreteactuator.stepper28BJY48-pysrc.php#Stepper28BJY48.setWaitTime">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Sets the time that the motor wil rotate</p>
  <dl class="fields">
    <dt>Parameters:</dt>
    <dd><ul class="nomargin-top">
        <li><strong class="pname"><code>waitTime</code></strong> (float) - The time that the motor wil rotate</li>
    </ul></dd>
  </dl>
</td></tr></table>
</div>
<a name="setStepSequence"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">setStepSequence</span>(<span class="sig-arg">self</span>,
        <span class="sig-arg">stepSequence</span>=<span class="sig-default">8</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.concreteactuator.stepper28BJY48-pysrc.php#Stepper28BJY48.setStepSequence">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Sets the sequence: 4 or 8 steps</p>
  <dl class="fields">
    <dt>Parameters:</dt>
    <dd><ul class="nomargin-top">
        <li><strong class="pname"><code>stepSequence</code></strong> (int8) - The step sequence</li>
    </ul></dd>
    <dt>Overrides:
        <a href="libsensorPy.abstractclass.stepperMotorActuator.StepperMotorActuator-class.php#setStepSequence">abstractclass.stepperMotorActuator.StepperMotorActuator.setStepSequence</a>
    </dt>
  </dl>
</td></tr></table>
</div>
<a name="setDirectionAndVelocity"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">setDirectionAndVelocity</span>(<span class="sig-arg">self</span>,
        <span class="sig-arg">stepDir</span>=<span class="sig-default">2</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.concreteactuator.stepper28BJY48-pysrc.php#Stepper28BJY48.setDirectionAndVelocity">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Sets the rotation's direction and velocity</p>
  <dl class="fields">
    <dt>Parameters:</dt>
    <dd><ul class="nomargin-top">
        <li><strong class="pname"><code>stepDir</code></strong> (int8) - 1 = clockwise, 2 = fast-clockwise, -1 = anti-clockwise,-2 = 
          fast-anti-clockwise</li>
    </ul></dd>
    <dt>Overrides:
        <a href="libsensorPy.abstractclass.stepperMotorActuator.StepperMotorActuator-class.php#setDirectionAndVelocity">abstractclass.stepperMotorActuator.StepperMotorActuator.setDirectionAndVelocity</a>
    </dt>
  </dl>
</td></tr></table>
</div>
<a name="rotate"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">rotate</span>(<span class="sig-arg">self</span>,
        <span class="sig-arg">waitTime</span>=<span class="sig-default">10</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.concreteactuator.stepper28BJY48-pysrc.php#Stepper28BJY48.rotate">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Rotates the Motor</p>
  <dl class="fields">
    <dt>Parameters:</dt>
    <dd><ul class="nomargin-top">
        <li><strong class="pname"><code>waitTime</code></strong> (float) - The time that the motor wil rotate</li>
    </ul></dd>
    <dt>Overrides:
        <a href="libsensorPy.abstractclass.motorActuator.MotorActuator-class.php#rotate">abstractclass.motorActuator.MotorActuator.rotate</a>
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
