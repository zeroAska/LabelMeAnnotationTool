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

<!-- ------------------------------------------------------------------- -->
<!--                   MAIN HTML                                         -->
<!-- ------------------------------------------------------------------- -->
<!-- MAIN TOP HEADER -->
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
		<li><a href='publications.php' class='active'>Publications</a></li>		
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
        
		<li><a href='credits.php'>Credits</a></li>                    
      </ul>
     </div>
</div>
<br />
    
  <section id="content85">
  	<div class="table-layout">
    		<div class="column-left-layout">
            <img src="../icons/benchmarks/spain2.jpg" width="297" height="444"/>
            </div>
   
   			<div class="column-main-layout">
            	<h1 class="title">Publications</h1>
                       <h2>Train in Spain and test in the rest of the world</h2>
                  <p>Try to recognize and segment as many object categories as you can. Training images correspond to outdoor pictures taken in different cities of Spain.</p>
                  <p> Characteristics of the dataset:</p>
                 <table class="light_table" width="760" border="0">
                    <tr>
                      <th scope="col">&nbsp;</th>
                      <th scope="col">Images</th>
                      <th scope="col">Objects</th>
                      <th scope="col">Cars</th>
                      <th scope="col">Person</th>
                      <th scope="col">Building</th>
                      <th scope="col">Road</th>
                      <th scope="col">Sidewalk</th>
                      <th scope="col">Sky</th>
                      <th scope="col">Tree</th>
                    </tr>
                    <tr>
                      <th scope="row">Training Set</th>
                      <td>2920</td>
                      <td>32164</td>
                      <td>4441</td>
                      <td>2524</td>
                      <td>3004</td>
                      <td>1321</td>
                      <td>1272</td>
                      <td>1009</td>
                      <td>2652</td>
                    </tr>
                    <tr>
                      <th scope="row">Test Set</th>
                      <td>1133</td>
                      <td>32853</td>
                      <td>2265</td>
                      <td>2119</td>
                      <td>2117</td>
                      <td>739</td>
                      <td>1107</td>
                      <td>823</td>
                      <td>1652</td>
                    </tr>
          		</table>
                
                                      <li>Training set: contains more than 1000 fully annotated images and around 2000 partially annotated images. Including partially annotated images allows algorithms to show if 
                                      they are able to benefit from additional partially labeled images. As we try to build large datasets, it will be common to have many images that are only partially annotated, 
                                      therefore, developing algorithms and training strategies that can cope with this issue will allow using large datasets without having to make the labor intensive effort of 
                                      careful image annotation.</li>
                      <li>
                      Test set: it only contains images that are fully labeled. The test set corresponds to images taken from the rest of the world which guarantees that images will be quite different between training 
                      and test.</li>
                      <br>
                      <p>Challenges:</p>
                      
                      <li>Many object classes have very few training samples. The distribution of counts is very heavy tailed. There is a dozen of object classes with thousands of training samples, and there are 
                      hundreds of object classes with just a handful of training samples. </li>
                      <li>Dealing with partially labeled training images.</li>
                      <li>
                      There is a large range of quality of the annotations. From each polygon you can extract a very good bounding box. But for many objects you can also get a quite accurate segmentation.
                      <p>Release October 22, 2008:</p>
                      <p>
                      <a href="http://groups.csail.mit.edu/vision/LabelMe/Benchmarks/spain/training.tar.gz">training.tar.gz (5.8 Gbytes)</a>
                      |
                      <a href="http://people.csail.mit.edu/torralba/benchmarks/spain/spainVsWorld_train.html">thumbnails</a>
                      |
                      <a href="spain/objectlist_training.txt">list of training categories</a>
                      <br>
                      <a href="http://groups.csail.mit.edu/vision/LabelMe/Benchmarks/spain/test.tar.gz">test.tar.gz (1.8 Gbytes)</a>
                      |
                      <a href="http://people.csail.mit.edu/torralba/benchmarks/spain/spainVsWorld_test.html">thumbnails</a>
                      |
                      <a href="spain/objectlist_test.txt">list of test categories</a>
                      </p>
                      </li>
                      <p>
                      Use the
                      <a href="http://labelme.csail.mit.edu/LabelMeToolbox/index.html">LabelMe toolbox</a>
                      to read the annotations and to extract segmentation masks.
                      </p>
                      <p>
                      Send us your
                      <a href="http://www.quicktopic.com/37/H/E4xRZ7fZZhh">comments</a>
                      .
                      </p>
                      <p>
                      Citation:
                      <a href="http://people.csail.mit.edu/brussell/research/AIM-2005-025-new.pdf">LabelMe: a database and web-based tool for image annotation</a>
                      . B. Russell, A. Torralba, K. Murphy, W. T. Freeman. International Journal of Computer Vision, 2007.
                      </p>
                </div>
       
            </div><!----end of table_layout-->
            <hr/>
            <div class="table-layout">
              <div class="column-left-layout">
              <img src="../icons/benchmarks/spatialEnvelope.jpg" width="297" height="297"/>
              </div>
              <div class="column-main-layout">
              <h2>8 scene categories and 29.000 annotated objects</h2>
                <p>Try to recognize and segment as many object categories as you can. Use 100 images for training from each scene category (this will give you a total of 800 training images), and the rest for testing. 
                Report performances for each object separatelly. Not all the objects have the same amount of training data available. But this reflects the fact that for some objects it is easier to gather data 
                than for others.</p>
                <p>
                <a href="http://people.csail.mit.edu/torralba/code/spatialenvelope/">Download datasets, code and paper</a>
                </p>
                <p>Citation: Modeling the shape of the scene: a holistic representation of the spatial envelope. A. Oliva, A. Torralba. International Journal of Computer Vision, Vol. 42(3): 145-175, 2001.</p>
              </div>
            </div><!----end of table_layout-->
 
    <!-- end .content --></section>
  <foter class="footer">
    <p>(c) MIT, Computer Science and Artificial Intelligence Laboratory.</p>
	  <!--WEBBOT bot="HTMLMarkup" startspan ALT="Site Meter" -->
  <script type="text/javascript" language="JavaScript">var site="s21labelme"</script>
<!-- Copyright (c)2005 Site Meter -->
<!--WEBBOT bot="HTMLMarkup" Endspan -->
   </footer>
  <!-- end .container --></div>
</body>
</html>
