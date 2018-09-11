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
    		
   
            	<h1 class="title">Download the Dataset</h1>
                      
                      
                      
                      
                      <p>There are two ways to work with the dataset: (1) downloading all the images via the LabelMe Matlab toolbox. The toolbox will allow you to customize the portion of the database that you want to download, (2) Using the images online via the LabelMe Matlab toolbox. This option is less preferred as it will be slower, but it will allow you to explore the dataset before downloading it.

Once you have installed the database, you can use the LabelMe Matlab toolbox to read the annotation files and query the images to extract specific objects.</p>

  <h2>Option 1: Customizable download using the LabelMe Matlab toolbox</h2>
  <p>Before downloading the dataset, we only ask you to label some images using the annotation tool online. Any new labels that you will add, will be inmediately ready for download.</p>


<p><b>Step 1:</b> Download the LabelMe Matlab toolbox and add the toolbox to the Matlab path.</p>
<p><b>Step 2:</b> The function LMinstall will download the database. There are three ways to use this function:</p>



<li>To download the entire dataset, type the following into Matlab: </li>
<pre>HOMEIMAGES = '/desired/path/to/Images';
HOMEANNOTATIONS = '/desired/path/to/Annotations';
LMinstall (HOMEIMAGES, HOMEANNOTATIONS);

where "/desired/path/to/" is the desired location where the annotations and images will be stored.<br/> This process will create the following directory structure under "/desired/path/to/":
./Annotations
./Annotations/folder1
...
./Annotations/folderN

./Images
./Images/folder1
...
./Images/folderN

where folder1 through folderN are directories containing the images and annotations.</pre>
  
  
  <li>If you only want to download a list of specific folders, then run:</li>

<pre>HOMEIMAGES = '/desired/path/to/Images';
HOMEANNOTATIONS = '/desired/path/to/Annotations';
folderlist = {'05june05_static_street_porter'};
LMinstall (folderlist, HOMEIMAGES, HOMEANNOTATIONS);</pre>

This will download only one folder from the collection. You can see the complete list of folders here. 

<li>If you already have the dataset but want to update the annotations, then use LMinstall with four arguments:</li>

<pre>LMinstall (folders, images, HOMEIMAGES, HOMEANNOTATIONS);</pre>
  
  
<h2>Option 2: Access the online database directly with the LabelMe Matlab toolbox</h2>  
 
<p>Before downloading the dataset, we only ask you to label some images using the annotation tool online. Any new labels that you will add, will be inmediately ready for download.

If you use the LabelMe Matlab toolbox, it is not necesary to download the database. You can use the online images and annotations in the same way as if they were on your local hard drive. This might be slow, but it will let you explore the database before downloading it. If you plan to use the database extensively, it is better to download a local copy for yourself.

Here are a few Matlab commands that show how to use the online database:
<pre>HOMEIMAGES = 'http://people.csail.mit.edu/brussell/research/LabelMe/Images';
HOMEANNOTATIONS = 'http://people.csail.mit.edu/brussell/research/LabelMe/Annotations';

D = LMdatabase(HOMEANNOTATIONS); % This will build an index, which will take few minutes.

% Now you can visualize the images
LMplot(D, 1, HOMEIMAGES);

% Or read an image
[annotation, img] = LMread(D, 1, HOMEIMAGES);</pre>

<p>You can query the database to select the images you want and install only those ones. For instance, if you are interested only in images containing cars, you can run the following:</p>

<pre>% First create the list of images that you want:
[Q,j] = LMquery(D, 'object.name', 'car');
clear folderlist filelist
for i = 1:length(Q);
      folderlist{i} = Q(i).annotation.folder;
      filelist{i} = Q(i).annotation.filename;
end

% Install the selected images:
HOMEIMAGES = '/desired/path/to/Images';
HOMEANNOTATIONS = '/desired/path/to/Annotations';
LMinstall (folderlist, filelist, HOMEIMAGES, HOMEANNOTATIONS);</pre>
 
 
 
 
 


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
