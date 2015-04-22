
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>libsensorPy.concretefactory.stepperMotorActuatorFactory</title>
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
        <a href="libsensorPy.concretefactory-module.php">Package&nbsp;concretefactory</a> ::
        Module&nbsp;stepperMotorActuatorFactory
      </span>
    </td>
    <td>
      <table cellpadding="0" cellspacing="0">
        <!-- hide/show private -->
        <tr><td align="right"><span class="options">[<a href="javascript:void(0);" class="privatelink"
    onclick="toggle_private();">hide&nbsp;private</a>]</span></td></tr>
        <tr><td align="right"><span class="options"
            >[<a href="frames.php" target="_top">frames</a
            >]&nbsp;|&nbsp;<a href="libsensorPy.concretefactory.stepperMotorActuatorFactory-pysrc.php"
            target="_top">no&nbsp;frames</a>]</span></td></tr>
      </table>
    </td>
  </tr>
</table>
<h1 class="epydoc">Source Code for <a href="libsensorPy.concretefactory.stepperMotorActuatorFactory-module.php">Module libsensorPy.concretefactory.stepperMotorActuatorFactory</a></h1>
<pre class="py-src">
<a name="L1"></a><tt class="py-lineno"> 1</tt>  <tt class="py-line"><tt class="py-docstring">'''</tt> </tt>
<a name="L2"></a><tt class="py-lineno"> 2</tt>  <tt class="py-line"><tt class="py-docstring">Created on 11/02/2015</tt> </tt>
<a name="L3"></a><tt class="py-lineno"> 3</tt>  <tt class="py-line"><tt class="py-docstring"></tt> </tt>
<a name="L4"></a><tt class="py-lineno"> 4</tt>  <tt class="py-line"><tt class="py-docstring">@author: Junior Mascarenhas</tt> </tt>
<a name="L5"></a><tt class="py-lineno"> 5</tt>  <tt class="py-line"><tt class="py-docstring">'''</tt> </tt>
<a name="L6"></a><tt class="py-lineno"> 6</tt>  <tt class="py-line"> </tt>
<a name="L7"></a><tt class="py-lineno"> 7</tt>  <tt class="py-line"><tt class="py-keyword">from</tt> <tt id="link-0" class="py-name" targets="Package libsensorPy.abstractclass=libsensorPy.abstractclass-module.php"><a title="libsensorPy.abstractclass" class="py-name" href="#" onclick="return doclink('link-0', 'abstractclass', 'link-0');">abstractclass</a></tt><tt class="py-op">.</tt><tt id="link-1" class="py-name" targets="Module libsensorPy.abstractclass.abstractActuatorFactory=libsensorPy.abstractclass.abstractActuatorFactory-module.php"><a title="libsensorPy.abstractclass.abstractActuatorFactory" class="py-name" href="#" onclick="return doclink('link-1', 'abstractActuatorFactory', 'link-1');">abstractActuatorFactory</a></tt> <tt class="py-keyword">import</tt> <tt id="link-2" class="py-name" targets="Class libsensorPy.abstractclass.abstractActuatorFactory.AbstractActuatorFactory=libsensorPy.abstractclass.abstractActuatorFactory.AbstractActuatorFactory-class.php"><a title="libsensorPy.abstractclass.abstractActuatorFactory.AbstractActuatorFactory" class="py-name" href="#" onclick="return doclink('link-2', 'AbstractActuatorFactory', 'link-2');">AbstractActuatorFactory</a></tt> </tt>
<a name="L8"></a><tt class="py-lineno"> 8</tt>  <tt class="py-line"><tt class="py-keyword">from</tt> <tt id="link-3" class="py-name" targets="Package libsensorPy.concreteactuator=libsensorPy.concreteactuator-module.php"><a title="libsensorPy.concreteactuator" class="py-name" href="#" onclick="return doclink('link-3', 'concreteactuator', 'link-3');">concreteactuator</a></tt><tt class="py-op">.</tt><tt id="link-4" class="py-name" targets="Module libsensorPy.concreteactuator.stepper28BJY48=libsensorPy.concreteactuator.stepper28BJY48-module.php"><a title="libsensorPy.concreteactuator.stepper28BJY48" class="py-name" href="#" onclick="return doclink('link-4', 'stepper28BJY48', 'link-4');">stepper28BJY48</a></tt> <tt class="py-keyword">import</tt> <tt id="link-5" class="py-name" targets="Class libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48=libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48-class.php"><a title="libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48" class="py-name" href="#" onclick="return doclink('link-5', 'Stepper28BJY48', 'link-5');">Stepper28BJY48</a></tt> </tt>
<a name="StepperMotorActuatorFactory"></a><div id="StepperMotorActuatorFactory-def"><a name="L9"></a><tt class="py-lineno"> 9</tt>  <tt class="py-line"> </tt>
<a name="L10"></a><tt class="py-lineno">10</tt> <a class="py-toggle" href="#" id="StepperMotorActuatorFactory-toggle" onclick="return toggle('StepperMotorActuatorFactory');">-</a><tt class="py-line"><tt class="py-keyword">class</tt> <a class="py-def-name" href="libsensorPy.concretefactory.stepperMotorActuatorFactory.StepperMotorActuatorFactory-class.php">StepperMotorActuatorFactory</a><tt class="py-op">(</tt><tt class="py-base-class">AbstractActuatorFactory</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="StepperMotorActuatorFactory-collapsed" style="display:none;" pad="++" indent="++++"></div><div id="StepperMotorActuatorFactory-expanded"><a name="L11"></a><tt class="py-lineno">11</tt>  <tt class="py-line">    <tt class="py-docstring">'''</tt> </tt>
<a name="L12"></a><tt class="py-lineno">12</tt>  <tt class="py-line"><tt class="py-docstring">    classdocs</tt> </tt>
<a name="L13"></a><tt class="py-lineno">13</tt>  <tt class="py-line"><tt class="py-docstring">    '''</tt> </tt>
<a name="L14"></a><tt class="py-lineno">14</tt>  <tt class="py-line"> </tt>
<a name="StepperMotorActuatorFactory.__init__"></a><div id="StepperMotorActuatorFactory.__init__-def"><a name="L15"></a><tt class="py-lineno">15</tt> <a class="py-toggle" href="#" id="StepperMotorActuatorFactory.__init__-toggle" onclick="return toggle('StepperMotorActuatorFactory.__init__');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.concretefactory.stepperMotorActuatorFactory.StepperMotorActuatorFactory-class.php#__init__">__init__</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="StepperMotorActuatorFactory.__init__-collapsed" style="display:none;" pad="++" indent="++++++++"></div><div id="StepperMotorActuatorFactory.__init__-expanded"><a name="L16"></a><tt class="py-lineno">16</tt>  <tt class="py-line">        <tt class="py-docstring">'''</tt> </tt>
<a name="L17"></a><tt class="py-lineno">17</tt>  <tt class="py-line"><tt class="py-docstring">        Constructor</tt> </tt>
<a name="L18"></a><tt class="py-lineno">18</tt>  <tt class="py-line"><tt class="py-docstring">        '''</tt> </tt>
</div><a name="L19"></a><tt class="py-lineno">19</tt>  <tt class="py-line"> </tt>
<a name="L20"></a><tt class="py-lineno">20</tt>  <tt class="py-line">    <tt class="py-decorator">@</tt><tt class="py-decorator">staticmethod</tt> </tt>
<a name="StepperMotorActuatorFactory.createActuator"></a><div id="StepperMotorActuatorFactory.createActuator-def"><a name="L21"></a><tt class="py-lineno">21</tt> <a class="py-toggle" href="#" id="StepperMotorActuatorFactory.createActuator-toggle" onclick="return toggle('StepperMotorActuatorFactory.createActuator');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.concretefactory.stepperMotorActuatorFactory.StepperMotorActuatorFactory-class.php#createActuator">createActuator</a><tt class="py-op">(</tt><tt class="py-param">actuatorType</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="StepperMotorActuatorFactory.createActuator-collapsed" style="display:none;" pad="++" indent="++++++++"></div><div id="StepperMotorActuatorFactory.createActuator-expanded"><a name="L22"></a><tt class="py-lineno">22</tt>  <tt class="py-line">        <tt class="py-keyword">if</tt> <tt class="py-op">(</tt><tt class="py-name">actuatorType</tt> <tt class="py-op">==</tt> <tt class="py-string">"Stepper28BJY48"</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
<a name="L23"></a><tt class="py-lineno">23</tt>  <tt class="py-line">            <tt class="py-keyword">return</tt> <tt id="link-6" class="py-name"><a title="libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48" class="py-name" href="#" onclick="return doclink('link-6', 'Stepper28BJY48', 'link-5');">Stepper28BJY48</a></tt><tt class="py-op">(</tt><tt class="py-op">)</tt> </tt>
<a name="L24"></a><tt class="py-lineno">24</tt>  <tt class="py-line">        <tt class="py-keyword">else</tt><tt class="py-op">:</tt> </tt>
<a name="L25"></a><tt class="py-lineno">25</tt>  <tt class="py-line">            <tt class="py-keyword">assert</tt> <tt class="py-number">0</tt><tt class="py-op">,</tt> <tt class="py-string">"Bad Actuator creation: "</tt> <tt class="py-op">+</tt> <tt class="py-name">actuatorType</tt> </tt>
</div><a name="L26"></a><tt class="py-lineno">26</tt>  <tt class="py-line"> </tt>
<a name="L27"></a><tt class="py-lineno">27</tt>  <tt class="py-line">    <tt class="py-decorator">@</tt><tt class="py-decorator">staticmethod</tt> </tt>
<a name="StepperMotorActuatorFactory.createEvent"></a><div id="StepperMotorActuatorFactory.createEvent-def"><a name="L28"></a><tt class="py-lineno">28</tt> <a class="py-toggle" href="#" id="StepperMotorActuatorFactory.createEvent-toggle" onclick="return toggle('StepperMotorActuatorFactory.createEvent');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.concretefactory.stepperMotorActuatorFactory.StepperMotorActuatorFactory-class.php#createEvent">createEvent</a><tt class="py-op">(</tt><tt class="py-param">actuatorType</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="StepperMotorActuatorFactory.createEvent-collapsed" style="display:none;" pad="++" indent="++++++++"></div><div id="StepperMotorActuatorFactory.createEvent-expanded"><a name="L29"></a><tt class="py-lineno">29</tt>  <tt class="py-line">        <tt class="py-keyword">pass</tt> </tt>
</div></div><a name="L30"></a><tt class="py-lineno">30</tt>  <tt class="py-line"> </tt><script type="text/javascript">
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
