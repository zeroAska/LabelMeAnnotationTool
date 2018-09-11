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
			<a>Developers</a>           <ul>
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
        
		<li><a href='credits.php' class='active'>Credits</a></li>                    
      </ul>
     </div>
</div>
<br />


    
  <div id="maincontent">
  	<div id="contentCredits">
    
    	<h1 class="title">Credits</h1>	
   
            	<div id="credits_table">
                <div class="credits_row">
                <div class="credits"><img src="../icons/icons_credits/idea1.png" width="105" height="100" class="credits_icon"> <h4>Bryan Russell</h4><p> Original idea. Did too many things to be listed here.</p></div>
                <div class="credits"><img src="../icons/icons_credits/idea2.png" width="105" height="100" class="credits_icon"> <h4>Antonio Torralba</h4><p> Original idea. Did too many things to be listed here.</p></div>
                <div class="credits"><img src="../icons/icons_credits/video1.png" width="105" height="100" class="credits_icon"> <h4>Jenny Yuen</h4><p> LabelMe Video.</p></div>
                </div>
                <div class="credits_row">
                <div class="credits"><img src="../icons/icons_credits/iphone1.png" width="105" height="100" class="credits_icon"> <h4>David Way</h4><p> iPhone App.</p></div>
                <div class="credits"><img src="../icons/icons_credits/iphone2.png" width="105" height="100" class="credits_icon"> <h4>Dolores Blanco Almazan</h4><p>iPhone App.</p></div>
                <div class="credits"><img src="../icons/icons_credits/web.png" width="105" height="100" class="credits_icon"> <h4>Aina Torralba</h4><p>LabelMe website design.</p></div>
                </div>
                <div class="credits_row">
                <div class="credits"><img src="../icons/icons_credits/scribbles.png" width="105" height="100" class="credits_icon"> <h4>Xavier Puig Fernandez</h4><p>Added scribble functionality.</p></div>
                <div class="credits"><img src="../icons/icons_credits/bugs.png" width="105" height="100" class="credits_icon"> <h4>Samuel Davies</h4><p> Contributed to early bug fixes.</p></div>
                <div class="credits"><img src="../icons/icons_credits/zoom.png" width="105" height="100" class="credits_icon"> <h4>Erica Cooper</h4><p> Added zoom feature.</p></div>
                </div>
                </div>
                <div class="credits_row">
                <div class="credits"><img src="../icons/icons_credits/video2.png" width="105" height="100" class="credits_icon"> <h4>Juventino Mejia</h4><p> Performed early work on video annotation tool extension.</p></div>
                <div class="credits"><img src="../icons/icons_credits/documentation.png" width="105" height="100" class="credits_icon"> <h4>Anna Ayuso</h4><p> Contributed to early documentation of the annotation tool source code.</p></div>      
                </div>      
                      
     </div>                 
    
    <!-- end .content --></div>
  <div class="footer">
    <p>(c) MIT, Computer Science and Artificial Intelligence Laboratory.</p>
    <!-- end .footer --></div>
  <!-- end .container --></div>
  <div id="mask"></div><!--masks the whole screen when in modals-->
</body>
</html>
