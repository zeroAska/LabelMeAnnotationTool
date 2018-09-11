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
<script type="text/javascript">
function toggleFaqs(a){
var e=document.getElementById(a);
if(!e)return true;
if(e.style.display=="none"){
e.style.display="block"
}
else{
e.style.display="none"
}
return true;
}
</script>

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
			<a class='active'>Help</a>        	<ul>
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
    
  <section id="content800">
    		
   
            	<h1 class="title">LabelMe FAQs</h1>
                <table id="faqs" border="0">
  <tr>
    <td onClick="return toggleFaqs('faq1')"><a href="#" >How do I download a single folder using the LabelMe Matlab toolbox?</a></td>
  </tr>
  <tr class="odd">
  <td id="faq1" style="display:none" >
    <pre>HOMEIMAGES = '/desired/path/to/Images';
HOMEANNOTATIONS = '/desired/path/to/Annotations';
folderlist = {'05june05_static_street_porter'};
LMinstall (folderlist, HOMEIMAGES, HOMEANNOTATIONS);</pre></td>
  </tr>
  <tr>
    <td onClick="return toggleFaqs('faq2')"><a href="#" >How do I get all of the object names in a folder?</a></td>
  </tr>
  <tr class="odd">
    <td id="faq2" style="display:none">If you want to know all of the different object descriptions that have been provided within a folder, you can use the command LMobjectnames. This can be useful to understand the object categories available.

<pre> HOMEANNOTATIONS = 'http://labelme.csail.mit.edu/Annotations';
HOMEIMAGES = 'http://labelme.csail.mit.edu/Images';
D = LMdatabase(HOMEANNOTATIONS, {'static_nature_web_outdoor_animal'});

[names, counts] = LMobjectnames(D);</pre></td>
  </tr>
  <tr>
    <td onClick="return toggleFaqs('faq3')"><a href="#" >How do I label a subset of the images? </a></td>
  </tr>
  <tr class="odd">
    <td id="faq3" style="display:none">
    <pre>HOMEANNOTATIONS = 'http://labelme.csail.mit.edu/Annotations';

HOMEIMAGES = 'http://labelme.csail.mit.edu/Images';

D = LMdatabase(HOMEANNOTATIONS, {'spatial_envelope_256x256_static_8outdoorcategories'});

 
for i = 1:length(D);

folderlist{i} = D(i).annotation.folder;

filelist{i} = D(i).annotation.filename;

end
 

LMthumbnailsbar(folderlist(1:500), filelist(1:500), 'page1.html', HOMEIMAGES);

LMthumbnailsbar(folderlist(501:1000), filelist(501:1000), 'page2.html', HOMEIMAGES);</pre>


<p>This code will create two pages: page1.html and page2.html</p></td>
  </tr>
  <tr>
    <td onClick="return toggleFaqs('faq4')"><a href="#" >How do I download only the images that contain ‘cars’ (or some other object)?</a></td>
  </tr>
  <tr class="odd">
    <td id="faq4" style="display:none" >
    <p>First you have to create the index (this will take few minutes)</p>

<pre>HOMEANNOTATIONS = 'http://labelme.csail.mit.edu/Annotations';

HOMEIMAGES = 'http://labelme.csail.mit.edu/Images';

D = LMdatabase(HOMEANNOTATIONS);</pre>

 

<p>Then, you can create the list of images that you want using the function LMquery. If you only want pictures containing cars:</p>
<pre>[Q,j] = LMquery(D, 'object.name', 'car');
clear folderlist filelist
for i = 1:length(Q);
      folderlist{i} = Q(i).annotation.folder;
      filelist{i} = Q(i).annotation.filename;
end</pre>

<p>And now you can download those images onto your local machine with the LMinstall command:</p>
<pre>HOMEIMAGES = '/desired/path/to/Images';
HOMEANNOTATIONS = '/desired/path/to/Annotations';
LMinstall (folderlist, filelist, HOMEIMAGES, HOMEANNOTATIONS);</pre></td>
  </tr>
  <tr>
    <td onClick="return toggleFaqs('faq5')"><a href="#" >How do I crop all of the objects and save each one as an image? </a></td>
  </tr>
  <tr class="odd">
    <td id="faq5" style="display:none">
   <p> Use the function LMobjectcrop, then loop on all images and objects:</p>

<pre>for n = 1:length(D)

     if isfield(D(n).annotation, ‘object’)

          for m = 1:length(D(n).annotation.object)

               imgCrop = LMobjectcrop(img, D(n).annotation, m);

               % save imgCrop in some local folder

     end

   end

end</pre></td>
  </tr>
  <tr>
    <td onClick="return toggleFaqs('faq6')"><a href="#" >How do I remove all objects that are too small?</a></td>
  </tr>
  <tr class="odd">
    <td id="faq6" style="display:none">
    <pre>Use the function addsmallobjectlabel:

D = addsmallobjectlabel(D, height, width);

 

This function will add the label ‘smallobject’ to objects smaller than [height x width] pixels.

Then you can use LMquery to get rid of the small objects:

D = LMquery(D, ‘object.name’, ‘-smallobject’);</pre></td>
  </tr>
  <tr>
    <td  onclick="return toggleFaqs('faq7')"><a href="#">Many images contain only a few annotated objects. How do I find a list of images that are fully annotated?</a></td>
  </tr>
  <tr class="odd">
    <td id="faq7" style="display:none">
    <p>Many images are already fully annotated. In order to find those images, you can use the command LMlabeledarea. This function will return, for each image in the dataset, the percentage of pixels that are labeled:</p>

 <pre>relativearea = LMlabeledarea(D, objectname);

j = find(relativearea>.9);</pre>

 <p>This will return a list of images with at least 90% of the pixels labeled. This does not mean that all the objects in those images are annotated.</p></td>
  </tr>
  <tr>
    <td onClick="return toggleFaqs('faq8')"><a href="#" >How do I search annotated images by scene categories?</a></td>
  </tr>
  <tr class="odd">
    <td id="faq8" style="display:none">
    <p>The scene description is stored in the field: D.annotation.scenedescription. So, to get all the kitchen images, you can do the query:</p>
	<pre>Dq = LMQuery(D, 'scenedescription', 'kitchen');
    </pre></td>
  </tr>
  <tr>
    <td onClick="return toggleFaqs('faq9')"><a href="#" >How do I use the Matlab toolbox to be able to query the images using WordNet?</a></td>
  </tr>
  <tr class="odd">
    <td id="faq9" style="display:none">
    <p>You can find a detailed example of using Wordnet with LabelMe in this Matlab script:<br/>
http://labelme.csail.mit.edu/LabelMeToolbox/demoWordnet.m<br/>
The toolbox does not require installation of Wordnet.</p>
    </td>
  </tr>
  <tr>
    <td onClick="return toggleFaqs('faq10')"><a href="#" >I had the online annotation tool running on my website (version LabelMe-1-14).  Why does the newest version not run anymore?</a></td>
  </tr>
  <tr class="odd">
    <td id="faq10" style="display:none">
   <p> For the latest version of the annotation tool, we require a new directory (with write permissions) called "TmpAnnotations". In all, you should have the following directories:</p>

 <pre>Images/

Annotations/

TmpAnnotations/</pre></td>
  </tr>
</table>      
                 
                 
                 
    <!-- end .content --></section>
  <footer class="footer">
    <p>(c) MIT, Computer Science and Artificial Intelligence Laboratory.</p>
    </footer>
  <!-- end .container --></div>
  <div id="mask"></div><!--masks the whole screen when in modals-->
</body>
</html>
