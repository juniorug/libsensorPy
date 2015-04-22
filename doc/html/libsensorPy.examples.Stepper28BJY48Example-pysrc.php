
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>libsensorPy.examples.Stepper28BJY48Example</title>
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
        <a href="libsensorPy.examples-module.php">Package&nbsp;examples</a> ::
        Module&nbsp;Stepper28BJY48Example
      </span>
    </td>
    <td>
      <table cellpadding="0" cellspacing="0">
        <!-- hide/show private -->
        <tr><td align="right"><span class="options">[<a href="javascript:void(0);" class="privatelink"
    onclick="toggle_private();">hide&nbsp;private</a>]</span></td></tr>
        <tr><td align="right"><span class="options"
            >[<a href="frames.php" target="_top">frames</a
            >]&nbsp;|&nbsp;<a href="libsensorPy.examples.Stepper28BJY48Example-pysrc.php"
            target="_top">no&nbsp;frames</a>]</span></td></tr>
      </table>
    </td>
  </tr>
</table>
<h1 class="epydoc">Source Code for <a href="libsensorPy.examples.Stepper28BJY48Example-module.php">Module libsensorPy.examples.Stepper28BJY48Example</a></h1>
<pre class="py-src">
<a name="L1"></a><tt class="py-lineno"> 1</tt>  <tt class="py-line"><tt class="py-docstring">'''</tt> </tt>
<a name="L2"></a><tt class="py-lineno"> 2</tt>  <tt class="py-line"><tt class="py-docstring">Created on 01/04/2015</tt> </tt>
<a name="L3"></a><tt class="py-lineno"> 3</tt>  <tt class="py-line"><tt class="py-docstring"></tt> </tt>
<a name="L4"></a><tt class="py-lineno"> 4</tt>  <tt class="py-line"><tt class="py-docstring">@author: Junior Mascarenhas</tt> </tt>
<a name="L5"></a><tt class="py-lineno"> 5</tt>  <tt class="py-line"><tt class="py-docstring">'''</tt> </tt>
<a name="L6"></a><tt class="py-lineno"> 6</tt>  <tt class="py-line"> </tt>
<a name="L7"></a><tt class="py-lineno"> 7</tt>  <tt class="py-line"><tt class="py-keyword">from</tt> <tt id="link-0" class="py-name" targets="Package libsensorPy.concretefactory=libsensorPy.concretefactory-module.php"><a title="libsensorPy.concretefactory" class="py-name" href="#" onclick="return doclink('link-0', 'concretefactory', 'link-0');">concretefactory</a></tt><tt class="py-op">.</tt><tt id="link-1" class="py-name" targets="Module libsensorPy.concretefactory.stepperMotorActuatorFactory=libsensorPy.concretefactory.stepperMotorActuatorFactory-module.php"><a title="libsensorPy.concretefactory.stepperMotorActuatorFactory" class="py-name" href="#" onclick="return doclink('link-1', 'stepperMotorActuatorFactory', 'link-1');">stepperMotorActuatorFactory</a></tt> <tt class="py-keyword">import</tt> <tt id="link-2" class="py-name" targets="Class libsensorPy.concretefactory.stepperMotorActuatorFactory.StepperMotorActuatorFactory=libsensorPy.concretefactory.stepperMotorActuatorFactory.StepperMotorActuatorFactory-class.php"><a title="libsensorPy.concretefactory.stepperMotorActuatorFactory.StepperMotorActuatorFactory" class="py-name" href="#" onclick="return doclink('link-2', 'StepperMotorActuatorFactory', 'link-2');">StepperMotorActuatorFactory</a></tt> </tt>
<a name="L8"></a><tt class="py-lineno"> 8</tt>  <tt class="py-line"> </tt>
<a name="L9"></a><tt class="py-lineno"> 9</tt>  <tt class="py-line"><tt class="py-keyword">if</tt> <tt class="py-name">__name__</tt> <tt class="py-op">==</tt> <tt class="py-string">'__main__'</tt><tt class="py-op">:</tt> </tt>
<a name="L10"></a><tt class="py-lineno">10</tt>  <tt class="py-line"> </tt>
<a name="L11"></a><tt class="py-lineno">11</tt>  <tt class="py-line">    <tt class="py-name">stepper28bjy48</tt> <tt class="py-op">=</tt> <tt id="link-3" class="py-name"><a title="libsensorPy.concretefactory.stepperMotorActuatorFactory.StepperMotorActuatorFactory" class="py-name" href="#" onclick="return doclink('link-3', 'StepperMotorActuatorFactory', 'link-2');">StepperMotorActuatorFactory</a></tt><tt class="py-op">.</tt><tt id="link-4" class="py-name" targets="Method libsensorPy.abstractclass.abstractActuatorFactory.AbstractActuatorFactory.createActuator()=libsensorPy.abstractclass.abstractActuatorFactory.AbstractActuatorFactory-class.php#createActuator,Static Method libsensorPy.concretefactory.stepperMotorActuatorFactory.StepperMotorActuatorFactory.createActuator()=libsensorPy.concretefactory.stepperMotorActuatorFactory.StepperMotorActuatorFactory-class.php#createActuator"><a title="libsensorPy.abstractclass.abstractActuatorFactory.AbstractActuatorFactory.createActuator
libsensorPy.concretefactory.stepperMotorActuatorFactory.StepperMotorActuatorFactory.createActuator" class="py-name" href="#" onclick="return doclink('link-4', 'createActuator', 'link-4');">createActuator</a></tt><tt class="py-op">(</tt><tt class="py-string">"Stepper28BJY48"</tt><tt class="py-op">)</tt> </tt>
<a name="L12"></a><tt class="py-lineno">12</tt>  <tt class="py-line">    <tt class="py-name">stepper28bjy48</tt><tt class="py-op">.</tt><tt id="link-5" class="py-name" targets="Method libsensorPy.abstractclass.dcMotorActuator.DCMotorActuator.setStepSequence()=libsensorPy.abstractclass.dcMotorActuator.DCMotorActuator-class.php#setStepSequence,Method libsensorPy.abstractclass.stepperMotorActuator.StepperMotorActuator.setStepSequence()=libsensorPy.abstractclass.stepperMotorActuator.StepperMotorActuator-class.php#setStepSequence,Method libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48.setStepSequence()=libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48-class.php#setStepSequence"><a title="libsensorPy.abstractclass.dcMotorActuator.DCMotorActuator.setStepSequence
libsensorPy.abstractclass.stepperMotorActuator.StepperMotorActuator.setStepSequence
libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48.setStepSequence" class="py-name" href="#" onclick="return doclink('link-5', 'setStepSequence', 'link-5');">setStepSequence</a></tt><tt class="py-op">(</tt><tt class="py-name">stepper28bjy48</tt><tt class="py-op">.</tt><tt id="link-6" class="py-name" targets="Variable libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48.EIGHT_STEP_SEQUENCE=libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48-class.php#EIGHT_STEP_SEQUENCE"><a title="libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48.EIGHT_STEP_SEQUENCE" class="py-name" href="#" onclick="return doclink('link-6', 'EIGHT_STEP_SEQUENCE', 'link-6');">EIGHT_STEP_SEQUENCE</a></tt><tt class="py-op">)</tt> </tt>
<a name="L13"></a><tt class="py-lineno">13</tt>  <tt class="py-line">    <tt class="py-name">stepper28bjy48</tt><tt class="py-op">.</tt><tt id="link-7" class="py-name" targets="Method libsensorPy.abstractclass.stepperMotorActuator.StepperMotorActuator.setDirectionAndVelocity()=libsensorPy.abstractclass.stepperMotorActuator.StepperMotorActuator-class.php#setDirectionAndVelocity,Method libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48.setDirectionAndVelocity()=libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48-class.php#setDirectionAndVelocity"><a title="libsensorPy.abstractclass.stepperMotorActuator.StepperMotorActuator.setDirectionAndVelocity
libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48.setDirectionAndVelocity" class="py-name" href="#" onclick="return doclink('link-7', 'setDirectionAndVelocity', 'link-7');">setDirectionAndVelocity</a></tt><tt class="py-op">(</tt><tt class="py-name">stepper28bjy48</tt><tt class="py-op">.</tt><tt id="link-8" class="py-name" targets="Variable libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48.FASTER_CLOCKWISE=libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48-class.php#FASTER_CLOCKWISE"><a title="libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48.FASTER_CLOCKWISE" class="py-name" href="#" onclick="return doclink('link-8', 'FASTER_CLOCKWISE', 'link-8');">FASTER_CLOCKWISE</a></tt><tt class="py-op">)</tt> </tt>
<a name="L14"></a><tt class="py-lineno">14</tt>  <tt class="py-line">    <tt class="py-name">stepper28bjy48</tt><tt class="py-op">.</tt><tt id="link-9" class="py-name" targets="Method libsensorPy.abstractclass.motorActuator.MotorActuator.rotate()=libsensorPy.abstractclass.motorActuator.MotorActuator-class.php#rotate,Method libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48.rotate()=libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48-class.php#rotate"><a title="libsensorPy.abstractclass.motorActuator.MotorActuator.rotate
libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48.rotate" class="py-name" href="#" onclick="return doclink('link-9', 'rotate', 'link-9');">rotate</a></tt><tt class="py-op">(</tt><tt class="py-number">20</tt><tt class="py-op">)</tt> </tt>
<a name="L15"></a><tt class="py-lineno">15</tt>  <tt class="py-line"> </tt><script type="text/javascript">
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
