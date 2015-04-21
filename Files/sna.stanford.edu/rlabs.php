<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Social Network Analysis in R</title>

<link rel="stylesheet" type="text/css" href="css/base.css" />

<link rel="stylesheet" type="text/css" href="css/tertiary.css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">$(document).ready(function(){$("#javascript").show();});</script>
	<script type="text/javascript" src="scripts/shCore.js"></script>
	<script type="text/javascript" src="scripts/shBrushR.js"></script>
	<link type="text/css" rel="stylesheet" href="styles/shCoreDefault.css"/>
	<script type="text/javascript">SyntaxHighlighter.all();</script>
<!--[if IE 6]>
  <style type="text/css">
    @import url(css/ie/ie_global.css);
    @import url(css/ie/ie_tertiary.css);
  </style>
<![endif]-->
<!--[if IE 7]>
  <style type="text/css">
	@import url(css/ie/ie7.css);
  </style>
<![endif]-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-18117743-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>

<div class="skip"><a href="#content_main">Skip to Content</a></div>
<div id="container">
  <div id="container_header">
    <div id="header">
      <div id="logo">  <img src="images/banner.gif" alt="Stanford University" usemap="#Map" />
        <map name="Map" id="Map">
          <area shape="rect" coords="0,0,263,60" href="http://www.stanford.edu" alt="Stanford University" />
        </map>
      </div>
      <div id="container_search">
        <div id="web_search">
		  <noscript>
          <form action="http://www.google.com/cse" id="cse-search-box">
            <div class="searchbox">
              <input type="hidden" name="cx" value="003265255082301896483:sq5n7qoyfh8" />
              <input type="hidden" name="ie" value="UTF-8" />
              <input type="text" name="q" id="search_string_web" />
              <button type="submit" name="sa" value="Search" class="search_button" >Search</button>
            </div>
          </form>
          </noscript>
          <div id="javascript" style="display: none;">
            <form action="http://www.stanford.edu/search" id="cse-search-box">
              <div class="searchbox">
                <input type="hidden" name="cx" value="003265255082301896483:sq5n7qoyfh8" />
                <input type="hidden" name="cof" value="FORID:9" />
                <input type="hidden" name="ie" value="UTF-8" />
                <input onfocus="this.value=''" type="text" value="Search..." name="q" id="search_string_web" />
                <button type="submit" name="sa" value="Search" class="search_button" >Search</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
    <div id="nav_topic"> 
    <ul>
      <li><a href="index.php">Home</a></li>
      <li class="current"><a href="rlabs.php">R labs</a></li>
      <li><a href="courses.php">Courses</a></li>
      <li><a href="members.php">Members</a></li>
      <li><a href="research.php">Reseach &amp; Resources</a></li>
    </ul>
 </div>
  <div id="title">
    <h1><em>Social Network Analysis Labs in R and SoNIA</em></h1>
  </div>
  <div id="sidebar_introduction"> 
    <div id="content_introduction">
      <h2>Citation</h2>
      <p class="introduction">McFarland, Daniel, Solomon Messing, Michael Nowak, and Sean J. Westwood. 2010. "Social Network Analysis Labs in R." Stanford University.</p>
    </div>
</div>
  <div id="content_main">
     <div id="breadcrumb">
      <p><a href="index.php">Home</a> &raquo; Lab table of contents</p>
    </div>

  <h2 id="c1"> McFarland, Daniel A., Solomon Messing,  Michael Nowak and Sean J. Westwood. </h2>
<p>To run the following labs install R (<a href="http://cran.cnr.berkeley.edu/bin/linux/">Linux</a>, <a href="http://cran.cnr.berkeley.edu/bin/macosx/">MacOS X</a>

    or <a href="http://cran.cnr.berkeley.edu/bin/windows/">Windows</a>) and execute the following command in R (this will download and install all needed packages and data):</p>
    <code>source(&quot;http://sna.stanford.edu/setup.R&quot;)</code>
    
     

    <h3 id="c1">Chapters</h3>
     <p>1.  <a href="lab.php?l=1">“Introductory Lab.”</a> Nowak, Michael and Daniel A. McFarland.&nbsp;2010. </p>
     <p>2.      <a href="lab.php?l=2">“Methodological Beginnings – Basic Triadic and Cohesion Measures.”</a> Nowak, Michael and Daniel A. McFarland.&nbsp;2010. <br />
      </p>
     <p>3. <a href="lab.php?l=3">“Clusters, Factions and Cores.”</a> Nowak, Michael and Daniel A. McFarland.&nbsp;<br />
      </p>
     <p>4. <a href="lab.php?l=4">“Centralities and Their Interrelation.”</a> Sukumaran, Abhay,Michael Nowak and Daniel A. McFarland.<br />
      </p>
     <p>5. <a href="lab.php?l=5">"Affiliation Data and Network Mobility."</a> Messing, Solomon and Daniel A. McFarland. 2010. <br />
      </p>
     <p>6. <a href="lab.php?l=6">"Structural Equivalences and Block-Modeling."</a> Nowak, Michael, Solomon Messing, Sean J. Westwood and Daniel A. McFarland. 2010. <br />
      </p>
    <p>7. <a href="lab.php?l=7">“Peer Influence and QAP Regression."</a> Messing, Solomon, Sean J. Westwood and Daniel A. McFarland. 2010.</p>
     <p>8. <a href="lab.php?l=8">"Exponential-Family Random Graph Models.”</a> Westwood, Sean J. and Daniel A. McFarland. 2010.</p>
     <p>9. <a href="lab.php?l=9">"Converting igraph to SoNIA with R."</a> Westwood, Sean J. and Daniel A. McFarland. 2010.</p>
     <p>10. <a href="http://www.stanford.edu/group/sonia/documentation/DanIntroLab.html">"rSoNIA and Visualizing Social Network Dynamics."</a> Bender-deMoll, Skye and Daniel A. McFarland. 2010. </p>
<h3 id="c1">Additional software</h3>
     <p><a href="sonia.zip">SoNIA</a> is a Java-based package for visualizing dynamic or longitudinal "network" data. (This is a temporary download meant to fix SoNIA while a new release is under development.)</p>
     <p>Software required to run SoNIA:</p>
     <ul>
       <li><a href="http://www.java.com/en/download/manual.jsp">Java 1.6</a></li>
       <li><a href="http://get.adobe.com/flashplayer/">Flash player</a><br />
       </li>
    </ul>
     <p>Acknowledgements: Special thanks to Skye Bender-deMoll and James Moody. An earlier version of the introductory lab, the Exponential Random Graph Model lab, and rSoNIA lab were developed in collaboration with them. We have revised, extended and reorganized the content of those labs here. <strong></strong></p>
     <p>This material is based upon work supported by the Office of the
     President at Stanford University and the National Science Foundation under       Grants No. 0835614 and 0624134. Any opinions, findings, and conclusions or       recommendations expressed in this material are those of the author(s) and do       not necessarily reflect the views of Stanford University or the National     Science Foundation.</p>
  </div>

  <div id="sidebar_supplementary"> 
   
 
    <div id="seal"> </div>
  </div>
  <div id="footer" class="clear">
    <hr class="hide" />

    <ul id="nav_footer">
      <li><a href="http://www.stanford.edu/" title="Stanford University">Stanford University</a></li>
    </ul>
    <div id="copyright">
      <p class="vcard">&copy; <span class="fn org">Stanford University</span>. <span class="adr">450 Serra Mall, <span class="locality">Stanford</span>, <span class="region">California</span> <span class="postal-code">94305</span>. <span class="tel">(650) 723-2300</span></span>. <a href="http://www.stanford.edu/site/terms.html">Terms of Use</a> | <a href="http://www.stanford.edu/site/copyright.html">Copyright Complaints</a></p>
    </div>
  </div>
</div>

</body>
</html>
