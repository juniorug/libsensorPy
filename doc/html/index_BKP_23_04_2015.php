<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
    $siteUrl = "http://libsensorpy.com/";
?>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <title>Welcome to libsensorPy!</title>
    
    <link rel="stylesheet" href="<?=$siteUrl?>/css/default.css" type="text/css" />
    <link rel="stylesheet" href="<?=$siteUrl?>/css/pygments.css" type="text/css" />
    
    <script type="text/javascript">
      var DOCUMENTATION_OPTIONS = {
        URL_ROOT:    '',
        VERSION:     '0.0.4',
        COLLAPSE_INDEX: false,
        FILE_SUFFIX: '.html',
        HAS_SOURCE:  true
      };
    </script>
    <script type="text/javascript" src="<?=$siteUrl?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?=$siteUrl?>/js/underscore.js"></script>
    <script type="text/javascript" src="<?=$siteUrl?>/js/doctools.js"></script>
    <script type="text/javascript" src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
    <link rel="top" title="libsensorPy 0.0.4 documentation" href="#" /> 
  </head>
  <body>
    <div class="related">
      <h3>Navigation</h3>
      <ul>
        <li class="right" style="margin-right: 10px">
          <a href="genindex.php" title="General Index"
             accesskey="I">index</a></li>
        <li><a href="#">libsensorPy 0.0.4 documentation</a> &raquo;</li> 
      </ul>
    </div>  

    <div class="document">
      <div class="documentwrapper">
        <div class="bodywrapper">
          <div class="body">
            
  <div class="section" id="welcome-to-libsensorpy-s-documentation">
<h1>Welcome to libsensorPy!<a class="headerlink" href="#welcome-to-libsensorpy-s-documentation" title="Permalink to this headline">¶</a></h1>
<p>LibsensorPy is an extensible open source python library, which allows the user to interact with environment through sensors and actuators coupled to the Raspberry Pi as well as add new sensors/actuators and easy way to practice, thereby strengthening the use of free hardware, aiming to solve problems of a physical nature. With this library the user only need keep focus on implementing their application business logic using the data that the solution delivery already processed, since LibsensorPy provides the abstractions of the main necessary resources for the processing.</p>

<p>LibsensorPy provides a simple abstraction layer between user's application and the actual sensor Hardware, allowing to drop in any comparable sensor with only one or two lines of code to change in the project that uses the library. Its goal is to facilitate the creation of ubiquitous systems using the Raspberry Pi. The tool is implemented in Python and is designed to facilitate the inclusion of new sensors, families and factories of sensors, as well as ease of use by the user, abstracting technical and behaviors specific to that system's type, using design patterns and following the SOLID principles.</p>

<p>The library's differential is the use of Abstract Factory pattern, allowing sensors and events from the same family work together, to be easily exchanged if necessary and the same type of sensors may be replaced without being necessary changes in existing code. The library also provides basic and composite  sensors according to the client's needs, as well as a set of events related to specific types of sensors and unit conversions.</p>



<div class="toctree-wrapper compound">
<ul class="simple">
</ul>
</div>
</div>
<!--adicionados por mim-->
<div class="section" id="news-announcements">
<h1>News / Announcements<a class="headerlink" href="#indices-and-tables" title="Permalink to this headline">¶</a></h1>

<div class="toctree-wrapper compound">
<ul class="simple">
</ul>
</div>
</div>


<div class="section" id="project-status">
<h1>Project Status<a class="headerlink" href="#indices-and-tables" title="Permalink to this headline">¶</a></h1>

<div class="toctree-wrapper compound">
<ul class="simple">
</ul>
</div>
</div>



<div class="section" id="features">
<h1>Features<a class="headerlink" href="#indices-and-tables" title="Permalink to this headline">¶</a></h1>

<div class="toctree-wrapper compound">
<ul class="simple">
</ul>
</div>
</div>


<div class="section" id="getting-started">
<h1>Getting Started<a class="headerlink" href="#indices-and-tables" title="Permalink to this headline">¶</a></h1>

<div class="toctree-wrapper compound">
<ul class="simple">
</ul>
</div>
</div>


<div class="section" id="examples">
<h1>Examples<a class="headerlink" href="#indices-and-tables" title="Permalink to this headline">¶</a></h1>

<div class="toctree-wrapper compound">
<ul class="simple">
</ul>
</div>
</div>


<!--end adicionados por mim-->

<div class="section" id="indices-and-tables">
<h1>Indices and tables<a class="headerlink" href="#indices-and-tables" title="Permalink to this headline">¶</a></h1>
<ul class="simple">
<li><a class="reference internal" href="genindex.php"><em>Index</em></a></li>
<li><a class="reference internal" href="py-modindex.php"><em>Module Index</em></a></li>
<li><a class="reference internal" href="search.php"><em>Search Page</em></a></li>
</ul>
</div>


          </div>
        </div>
      </div>
      <div class="sphinxsidebar">
        <div class="sphinxsidebarwrapper">
  <h3><a href="#">LIBSENSORPY</a></h3>
  <ul>
	<li><a class="reference internal" href="#">Welcome to libsensorPy!</a><ul></ul></li>
	<li><a class="reference internal" href="#news-announcements">News / Announcements</a><ul></ul></li>
	<li><a class="reference internal" href="#project-status">Project Status</a><ul></ul></li>
	<li><a class="reference internal" href="#features">Features</a><ul></ul></li>
	<li><a class="reference internal" href="#getting-started">Getting Started</a><ul></ul></li>
	<li><a class="reference internal" href="#examples">Examples</a><ul></ul></li>
	<li><a class="reference internal" href="#indices-and-tables">Indices and tables</a></li>
  </ul>

  <h3>This Page</h3>
  <ul class="this-page-menu">
    <li><a href="_sources/index.txt"
           rel="nofollow">Show Source</a></li>
  </ul>
<div id="searchbox" style="display: none">
  <h3>Quick search</h3>
    <form class="search" action="search.php" method="get">
      <input type="text" name="q" />
      <input type="submit" value="Go" />
      <input type="hidden" name="check_keywords" value="yes" />
      <input type="hidden" name="area" value="default" />
    </form>
    <p class="searchtip" style="font-size: 90%">
    Enter search terms or a module, class or function name.
    </p>
</div>
<script type="text/javascript">$('#searchbox').show(0);</script>
        </div>
      </div>
      <div class="clearer"></div>
    </div>
    <div class="related">
      <h3>Navigation</h3>
      <ul>
        <li class="right" style="margin-right: 10px">
          <a href="genindex.php" title="General Index"
             >index</a></li>
        <li><a href="#">libsensorPy 0.0.4 documentation</a> &raquo;</li> 
      </ul>
    </div>
    <div class="footer">
        &copy; Copyright 2015, Junior Mascarenhas.
      Created using <a href="http://sphinx.pocoo.org/">Sphinx</a> 1.1.3.
    </div>
  </body>
</html>
