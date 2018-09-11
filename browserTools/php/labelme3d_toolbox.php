<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>LabelMe3D: a Database of 3D Scenes from User Annotations</title>
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

    
  <article id="content800">
    		
   
            	<h1 class="title">Download LabelMe3D MATLAB Toolbox</h1>
                      
                  
<p>
The LabelMe3D database contains labeled images and their absolute real-world 3D coordinates. The database spans many different everyday scene and object categories.
</p>

<h2>Citation</h2>

<p>If you use the database or any source code, we would appreciate it if you cite:</p>

<p>B. C. Russell and A. Torralba. Building a Database of 3D Scenes from User Annotations. In CVPR, 2009. (<a href="http://homes.cs.washington.edu/~bcr/papers/LabelMe3D.pdf">PDF</a>)</p>

<p>Documentation for scene geometry, camera model, and structure of the XML annotation files (<a href="https://github.com/brussell123/LabelMe3dToolbox/blob/master/Documentation.pdf?raw=true">PDF</a>)</p>

<h2>Download and interact with the database</h2>

<p>We provide a Matlab toolbox for downloading the database and interacting with it. There are two ways to download the toolbox:</p>

<h3>1. <a href="https://github.com/brussell123/LabelMe3dToolbox">Github repository</a></h3>

<p>We maintain the latest version of the toolbox on github. To pull the latest version, make sure that "git" is installed on your machine and then run "git clone https://github.com/brussell123/LabelMe3dToolbox" on the command line. You can refresh your copy to the latest version by running "git pull" from inside the project directory.</p>

<p>If you have an idea for a new feature and want to implement it, then <a href="mailto:labelme@csail.mit.edu">let us know</a>! With github, you can fork the code and send us a pull request. If we like your feature and implementation, then we will incorporate it into the main code.</p>

<h3>2. <a href="https://github.com/brussell123/LabelMe3dToolbox/zipball/master">Zip file</a></h3>

<p>The zip file is a snapshot of the latest source code on github.</p>

<h2>A quick look at the toolbox</h2>

<p>The toolbox allows you to grab an annotation from LabelMe directly and compute its 3D information:</p>

<pre>
HOMEANNOTATIONS = 'http://labelme.csail.mit.edu/Annotations';
HOMEIMAGES = 'http://labelme.csail.mit.edu/Images';
DB = LMdatabase(HOMEANNOTATIONS,HOMEIMAGES,{'05june05_static_street_boston'},{'p1010736.jpg'});
img = LMimread(DB,1,HOMEIMAGES);
annotation3D = Recover3DSceneComponents(DB.annotation);
LMplot3Dscene(annotation3D,img);
</pre>

<p>This example reads the LabelMe annotation, computes its 3D information, and plots the 3D scene.</p>

<h2>Database and Matlab toolbox documentation</h2>

<p>The Matlab toolbox contains functions for downloading, interacting with, and displaying the LabelMe3D database. We outline the main functionalities of the toolbox inside of <a href="https://github.com/brussell123/LabelMe3dToolbox/blob/master/demo.m"><code>demo.m</code></a>.</p>

<p>The scene geometry, camera model, and structure of the XML annotation files are documented here (<a href="https://github.com/brussell123/LabelMe3dToolbox/blob/master/Documentation.pdf?raw=true">PDF</a>).</p>



<h2>How to get good 3D models?</h2>

<table>
<tr>
<td valign="top">
  <p>When you label objects and their location in an image, the tool uses the 
    labels to build a 3D model of the scene. The tool does not require from you 
    any knowledge about geometry, as all of the 3D information is automatically 
    inferred from the annotations. For instance, the tool will know that a 'road' 
    is a horizontal surface and that a 'car' is supported by the road. The tool 
    learns to go from 2D to 3D using all the other labels already present in the 
    database. The more images that are labeled, the better models the tool will 
    learn. </p>
  <p>In order to get good 3D and pop-up models of your pictures, it is important 
    to try to label accurately. For each object that you label, the tool will 
    ask you to enter the name. The system will use this name to decide which 3D 
    model to use. </p>
  <p><strong>Start labeling the ground: </strong>Ground objects (such as the &quot;road&quot;, 
    &quot;sidewalk&quot;, &quot;floor&quot;, &quot;sea&quot;, etc) are used to 
    define the basic structure of the scene. If you use the correct names, the 
    system will recognize them and automatically place them in the correct location 
    in the 3D scene.</p>
  <p><strong>Complete objects behind the occlusions: </strong>When labeling objects, 
    try to complete the objects behind the occlusions. This is
    important so that the tool can reconstruct the 3D contact points. In the example on the right, 
    the sidewalk is delineated as if the people were not there.</p>
  <p><strong>Follow the outline of each object:</strong> The more accurate the 
    boundaries and the object names are, the better the 3D model will look. In 
    addition, these annotations will be used to build a large database of annotated 
    images to train computer vision algorithms to recognize everyday objects.</p>
</td>

<td>
  <p><img src="../icons/intro3Db.jpg" width="243" height="168"></p>
  <p><img src="../icons/intro3Dc.jpg" width="242" height="175"></p>
  <p><img src="../icons/3Dsmall.jpg" width="243" height="135"></p>
  <p>The 3D models can be downloaded and played outside of this tool using any 
    VRML viewer.</p>
</td>
</tr>
</table>

  <h2>How does it work?</h2>

<table>
<tr>
<td valign="top">
  <p>
The tool learns two kinds of scene representations from all the
annotated images: a qualitative model of the relationships
(&quot;part-of&quot;', &quot;supports'') holding between scene
components (&quot;sidewalk'', &quot;person'', &quot;car''), and a
rough 3D shape model for some of these components, obtained from
multiple segmented images of their instances. These models are
combined with geometric cues (depth ordering, horizon line) extracted
from the photograph being analyzed to construct the final scene
description. 
  </p>
  <p>
To illustrate the above, consider when we (as humans) see a person
against a wall.
We know that the person is not physically attached to the wall because
people are not parts of walls.  We
have learned this from many images in which we see the
co-occurrence of people and walls. We also know that windows are
parts of walls.  Therefore a window overlapping with a wall is not a
window resting against the wall, it is actually attached to it.
Again, we know this because we exploit the information
coming from many images and how walls and windows relate to each
other. These relationships influence (and are influenced by) our
interpretation of geometric image cues.
</p>

  <p> In addition, statistical evidence may guide the interpretation of edge fragments 
    as occlusion boundaries, contacts between objects, or attachment points. For 
    instance, a chimney is part of a house. However, only the lower part of the 
    boundary is attached to the house, with the rest being an occlusion boundary. 
    On the other hand, a window is a part of a house, with all the edges attached 
    to the building and having no occlusions. As a final example, a person is 
    always in contact with the road. However, a person is not part of the road, 
    which causes the points of contact to not be points of attachment. </p>

</td>

<td>
  <p><img src="../icons/supportGraph.jpg" width="256" height="349"></p>
  <p>List of objects supported by the road. This list is automatically inferred 
    from the annotations available in the LabelMe dataset.</p>
</td>
</tr>
</table>


    <!-- end .content --></article>
  <footer class="footer">
    <p>(c) MIT, Computer Science and Artificial Intelligence Laboratory.</p>
	  <!--WEBBOT bot="HTMLMarkup" startspan ALT="Site Meter" -->
<!-- Copyright (c)2005 Site Meter -->
<!--WEBBOT bot="HTMLMarkup" Endspan -->
    <!-- end .footer --></footer>
  <!-- end .container --></div>
  <div id="mask"></div><!--masks the whole screen when in modals-->
</body>
</html>
