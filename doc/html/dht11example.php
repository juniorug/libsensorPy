<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
    $siteUrl = "http://libsensorpy.com/";
?>

<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <title>Examples</title>
    
    <link rel="stylesheet" href="<?=$siteUrl?>/css/pygments.css" type="text/css" />
    <link rel="stylesheet" href="<?=$siteUrl?>/css/default.css" type="text/css" /> 
    
    <script type="text/javascript">
      var DOCUMENTATION_OPTIONS = {
        URL_ROOT:    '',
        VERSION:     '0.0.4',
        COLLAPSE_INDEX: false,
        FILE_SUFFIX: '.php',
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
                  <a href="http://www.raspberrypi.org/" title="Raspberry Pi">
                      <img src="<?=$siteUrl?>/img/RaspberrypiPython.png" alt="LibsensorPy Project">
	          </a>
              </li>
              <li><a href="#">
	              <img src="<?=$siteUrl?>/img/libsensorPy3Long.png" alt="LibsensorPy">
	          </a>
              </li> 
          </ul>
      </div>   

      <div class="document">
          <div class="documentwrapper">
              <div class="bodywrapper">
                  <div class="body">
  		      <div class="section" id="examples">
		          <h1>Using DHT11Temperature Sensor
			       <a class="headerlink" href="#welcome-to-libsensorpy-s-documentation" title="Permalink to this headline">¶</a>
			  </h1>
			  <p>The following example demonstrates how simple is to get the temperature read by the dht11 sensor.</p>
			  <!--python code here--> 	
			  <div class="hlcode">
				<div class="highlight"><pre>
				<span class="sd">'''Created on 11/02/2015</span>

				<span class="sd">@author: Junior Mascarenhas</span>
				<span class="sd">'''</span>

				<span class="kn">from</span> <span class="nn">concretefactory.temperatureSensorFactory</span> <span class="k">import</span> <span class="n">TemperatureSensorFactory</span>
				<span class="k">if</span> <span class="n">__name__</span> <span class="o">==</span> <span class="s">'__main__'</span><span class="p">:</span>

				    <span class="n">dht11</span> <span class="o">=</span> <span class="n">TemperatureSensorFactory</span><span class="o">.</span><span class="n">createSensor</span><span class="p">(</span><span class="s">"DHT11Temperature"</span><span class="p">)</span>
				    <span class="nb">print</span> <span class="p">(</span><span class="s">"Temperature in Celsius: "</span> <span class="o">+</span> <span class="n">dht11</span><span class="o">.</span><span class="n">getTemperature</span><span class="p">()</span> <span class="o">+</span> <span class="s">u"</span><span class="se">\u00b0</span><span class="s">"</span> <span class="o">+</span> <span class="s">"C"</span><span class="p">)</span>
				    <span class="nb">print</span> <span class="p">(</span><span class="s">"Temperature in Fahrenheit: "</span> <span class="o">+</span> <span class="n">dht11</span><span class="o">.</span><span class="n">getTemperatureInFahrenheit</span><span class="p">()</span> <span class="o">+</span><span class="s">"F"</span><span class="p">)</span>
				    <span class="nb">print</span> <span class="p">(</span><span class="s">"Temperature in Kelvin: "</span> <span class="o">+</span> <span class="n">dht11</span><span class="o">.</span><span class="n">getTemperatureInKelvin</span><span class="p">()</span> <span class="o">+</span><span class="s">"K"</span><span class="p">)</span>

				</pre></div>

				</div>

			  <!--end python code -->
			  <div class="toctree-wrapper compound">
			       <ul class="simple"></ul>
			  </div>
		      </div>
          	  </div>
              </div>
          </div>
          <div class="sphinxsidebar">
              <div class="sphinxsidebarwrapper">
  	          <h3><a href="#">LibsensorPy</a></h3>
                  <ul>
			<li><a class="reference internal" href="#">Welcome</a><ul></ul></li>
			<li><a class="reference internal" href="#news-announcements">News / Announcements</a><ul></ul></li>
			<li><a class="reference internal" href="#project-status">Project Status</a><ul></ul></li>
			<li><a class="reference internal" href="#features">Features</a><ul></ul></li>
			<li><a class="reference internal" href="#getting-started">Getting Started</a><ul></ul></li>
			<li><a class="reference internal" href="#examples">Examples</a><ul></ul></li>
			<li><a class="reference internal" href="#indices-and-tables">Indices and tables</a></li>
		  </ul>
		  <ul>
			<li><a class="reference internal" href="documentation">Documentation</a><ul></ul></li>
			<li><a class="reference internal" href="install">Instalatation</a><ul></ul></li>
			<li><a class="reference internal" href="download">Downloads</a><ul></ul></li>
			<li><a class="reference internal" href="contact">Contact</a><ul></ul></li>
			<li><a class="reference internal" href="team">The Team</a><ul></ul></li>
			<li><a class="reference internal" href="dependencies">Dependencies</a><ul></ul></li>
			<li><a class="reference internal" href="faq">FAQ</a><ul></ul></li>
			<li><a class="reference internal" href="faq">License</a><ul></ul></li>

		  </ul>

		  <h3>This Page</h3>
		  <ul class="this-page-menu">
		        <li><a href="_sources/index.txt" rel="nofollow">Show Source</a></li>
		  </ul>
		  <div id="searchbox" style="display: none">
  		        <h3>Quick search</h3>
		    	<form class="search" action="search" method="get">
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
          <a href="genindex" title="General Index"
             >index</a></li>
        <li><a href="documentation">libsensorPy 0.0.4 documentation</a> &raquo;</li> 
      </ul>
    </div>
    <div class="footer">
        &copy; Copyright 2015, Junior Mascarenhas.
      Created using <a href="http://sphinx.pocoo.org/">Sphinx</a> 1.1.3.
    </div>
  </body>
</html>
