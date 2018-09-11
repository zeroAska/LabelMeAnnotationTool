<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>LabelMe. The Open annotation tool</title>
<script src="../js/jquery-1.4.2.min.js" type="text/javascript"></script>	
<script src="../js/modals.js" type="text/javascript"></script>
<link href="../css/main4.css" rel="stylesheet">
</head>

<body>

<div class="container">

<script type='text/javascript'>
username=null;
</script>

<div class="header">
     <div id="logo">
        <a href="../../index.php"><img src="../icons/LabelMe_logo3.png" width="216" height="69" alt="LabelMe logo"></a> 
	 </div>
     <div id="topnav">
       <ul id="topmenu">
		<li><a href='browse_collections.php?username=&folder='>My LabelMe</a></li>		
		<li><a href='publications.php'>Publications</a></li>		
        <li>
			<a class='active'>Developers</a>           <ul>
                <li><a href="matlab_toolbox.php">Matlab Toolbox</a></li>
                <li><a href="labelme3d_toolbox.php">LabelMe3D</a></li>
                <li><a href="iPhoneHelp.php">iPhone app</a></li>
                <li><a href="sourcecode.php">LabelMe Source</a></li>
                <li><a href="mechanical_turk.php">Mechanical Turk</a></li>
                <li><a href="dataset.php">Download Dataset</a></li>
            </ul>
        </li>
		
        <li>
			<a>Help</a>        	<ul>
                <li><a href="LabelMeHelp.php">LabelMe help</a></li>
                <li><a href="faqs.php">FAQs</a></li>
                <li><a href="http://www.quicktopic.com/37/H/E4xRZ7fZZhh" target="_blank">Discussion</a></li>
        	</ul>	
        </li>
        
		<li><a href='credits.php'>Credits</a></li>                    
      </ul>
     </div>
</div>
<br />

    
  <div id="maincontent">
  	<div id="content800">
    		

            	<h1 class="title">LabelMe Annotation Tool Source Code</h1>

<p>
Here you will find the source code to install the LabelMe annotation
tool on your server. LabelMe is an annotation tool writen in
Javascript and Perl for online image labeling. The advantage with
respect to traditional image annotation tools is that you can access
the tool from anywhere and people can help you to annotate your images
without them having to install or copy a large dataset onto their computers.
</p>

<p>
There are two ways to download the LabelMe annotation tool source
code:
</p>

<h2>1. <a href="https://github.com/CSAILVision/LabelMeAnnotationTool">Github repository</a></h2>

<p>We maintain the latest version of the toolbox on github. To pull the latest version, make sure that "git" is installed on your machine and then run "git clone https://github.com/CSAILVision/LabelMeAnnotationTool.git" on the command line. You can refresh your copy to the latest version by running "git pull" from inside the project directory.</p>

<p>
If you have an idea for a new feature and want to implement it, then
<a href="mailto:labelme@csail.mit.edu">let us know</a>!  
With github, you can fork the code and send us a pull request.
If we like your feature and implementation, then we will incorporate
it into the main code.
</p>

<h2>2. <a href="https://github.com/CSAILVision/LabelMeAnnotationTool/archive/master.zip">Zip file</a></h2>

<p>The zip file is a snapshot of the latest source code on github.</p>

<!--
<h1><center><a href="https://github.com/CSAILVision/LabelMeAnnotationTool">Github repository for the LabelMe annotation tool source code</a></center></h1>

<h1><center><a href="../../releases/LabelMeAnnotationTool.tar.gz">Download the LabelMe annotation
      tool source code</a></center></h1>
-->

<br />

  <p><strong>CITATION</strong></p>

  <p>
  If you use the source code, we would appreciate it if you cite:
  </p>

  <p>
B. C. Russell, A. Torralba, K. P. Murphy, W. T. Freeman, <i>LabelMe: a database and web-based tool for image annotation</i>. International Journal of Computer Vision, pages 157-173, Volume 77, Numbers 1-3, May, 2008.
<a href="http://people.csail.mit.edu/brussell/research/AIM-2005-025-new.pdf"><em>PDF</em></a></p>


              </div>
            </div><!----end of table_layout-->
      <div id="boxes">
  
  
  <div id="account_settings" class="modal-window">
  <div class="modal-header">
    <h1>Account Settings</h1>
    </div>
    <div class="modal-content">
    <p>Username: <b>nameexample</b> </p>
    <p>Email:<b> email@email.com</b></p>
    <hr>
     
     <p><label for="password">Old Password</label><input type="password" name="password" data-category="login" data-value="password" /></p>
    <p> <label for="password">New Password</label><input type="password" name="password" data-category="login" data-value="password" /></p>
 <p><label for="password">Repeat New Password</label><input type="password" name="password" data-category="login" data-value="password" /></p>
 
            </div>
            <div class="modal-bottom-navigation">
             <a href="#">Save Changes </a>
            <a href="#"class="close" />Cancel</a>
            </div>
  </div>
  
  
  
</div>
    <!-- end .content --></div>
  <div class="footer">
    <p>(c) MIT, Computer Science and Artificial Intelligence Laboratory.</p>
	  <!--WEBBOT bot="HTMLMarkup" startspan ALT="Site Meter" -->
  <script type="text/javascript" language="JavaScript">var site="s21labelme"</script>
<script type="text/javascript" language="JavaScript1.2" src="http://s21.sitemeter.com/js/counter.js?site=s21labelme"></script>
<noscript>
<p><a href="http://s21.sitemeter.com/stats.asp?site=s21labelme" target="_top">
<img src="http://s21.sitemeter.com/meter.asp?site=s21labelme" alt="Site Meter" border="0"/></a>
</p></noscript>
<!-- Copyright (c)2005 Site Meter -->
<!--WEBBOT bot="HTMLMarkup" Endspan -->
    <!-- end .footer --></div>
  <!-- end .container --></div>
  <div id="mask"></div><!--masks the whole screen when in modals-->
</body>
</html>
