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

    
  <article id="content800">
    		
   
            	<h1 class="title">Download MATLAB Toolbox for the LabelMe Image Database</h1>
                      
                  
<p>LabelMe is a WEB-based image annotation tool that allows researchers to label images and share the annotations with the rest of the community. If you use this toolbox, we only ask you to contribute to the database, from time to time, by using the labeling tool.</p>

<h2>Download</h2>

<p><a href="http://labelme.csail.mit.edu/LabelMeToolbox/LabelMeToolbox.zip">Download (.zip)</a> the toolbox and add it to the Matlab path.</p>

<h2>Citation</h2>

<p>If you use this dataset or the functions on this toolbox, we would appreciate if you cite:

B. C. Russell, A. Torralba, K. P. Murphy, W. T. Freeman,
LabelMe: a database and web-based tool for image annotation.
International Journal of Computer Vision, pages 157-173, Volume 77, Numbers 1-3, May, 2008.
(paper.pdf)</p>

<h2>Contribution</h2>

<p>If you find this dataset useful, you can help us to make it larger by visiting the annotation tool and labeling several objects. Even if your contribution seems small compared to the size of the dataset, everything counts! We also welcome submissions of copyright free images. Your annotations and images will be made available for download inmediately.</p>
 
 
 <h1>Toolbox description</h1>

<h3>A quick look into the dataset</h3>

<p>The toolbox allows you using the dataset online without needing to download it first. Just execute the next lines to visualize the content of one of the folders of the collection:</p>

<pre>HOMEANNOTATIONS = 'http://labelme.csail.mit.edu/Annotations';
HOMEIMAGES = 'http://labelme.csail.mit.edu/Images';
D = LMdatabase(HOMEANNOTATIONS, {'static_street_statacenter_cambridge_outdoor_2005'});
LMdbshowscenes(D, HOMEIMAGES);</pre>

<p>This example, reads the images online. Installing a local copy of the database will allow you having faster access to the images and annotations and it will reduce the load on our server.</p>

<h3>Downloading the LabelMe database</h3>

<p>To download the images and annotations you can use the function LMinstall:</p>

<pre>HOMEIMAGES = '/desired/path/to/Images';
HOMEANNOTATIONS = '/desired/path/to/Annotations';
LMinstall (HOMEIMAGES, HOMEANNOTATIONS);</pre>

<p>Set the variables HOMEIMAGES and HOMEANNOTATIONS to point to your local paths. Downloading the entire LabelMe database can be quite slow. For additional download options, follow the instructions <a href="dataset.php">here</a>.</p>

<h3>Reading the index</h3>

<p>The annotation files use XML format. The function LMdatabase.m reads the XML files and generates a matlab struct array that will be used to perform queries and to extract segmentations from the images. To build the index for the entire dataset, execute:</p>

<pre>D = LMdatabase(HOMEANNOTATIONS);

D is an array with as many entries as there are annotated images. For image n, some of the fields are:
D(n).annotation.folder
D(n).annotation.filename
D(n).annotation.object(m).name
D(n).annotation.object(m).polygon</pre>

<p>Where n and m are the image and object indices respectively. Type help LMdatabase to see how to build the index for only some folders of the dataset.</p>

<h3>Visualization</h3>

<p>Once you have created the LabelMe index D, you can visualize the annotations for an image with the function LMplot:</p>

<pre>LMplot(D, 1, HOMEIMAGES);</pre>

<p>You can also visualize a set of images or object crops:</p>

<pre>LMdbshowscenes(D(1:30), HOMEIMAGES); % shows the first 30 images
LMdbshowobjects(D(1), HOMEIMAGES); % shows crops of all the objects in the first image</pre>

<h3>Queries</h3>

<p>To perfom searches for images, scenes, objects, etc, you can use the function LMquery. This function allows searching for the content of any field.</p>

<pre>[Dcar, j] = LMquery(D, 'object.name', 'car');</pre>

<p>The new struct Dcar contains all the images with cars and all other objects have been removed. The index array j points to the original index D. The struct D(j) contains all the images with cars without excluding other objects.</p>

<p>The LMquery function does not assume a predefined list of fields. You can use this function to query with respect to any field. Therefore, if you add new fields inside the XML annotation files, you can still use LMquery to search with respect to the content of the new fields.</p>

<p>Exclusion can be used to narrow down a search. Compare this two:</p>

<pre>LMdbshowobjects(LMquery(D, 'object.name', 'mouse+pad'), HOMEIMAGES);
LMdbshowobjects(LMquery(D, 'object.name', 'mouse-pad'), HOMEIMAGES);</pre>

<p>You can also combine searches. This next line select objects that belong to one of this groups: 1) side views of cars, 2) buildings 3) roads or 4) trees:</p>

<pre>[Dcbrt, j] = LMquery(D, 'object.name', 'car+side,building,road,tree');</pre>

<p>You can also do AND combinations by using several queries. For instace, to get a list of images that contain buildings, side views of cars and trees you can do:</p>

<pre>[D1,j1] = LMquery(D, 'object.name', 'building');
[D2,j2] = LMquery(D, 'object.name', 'car+side');
[D3,j3] = LMquery(D, 'object.name', 'tree');
j = intersect(intersect(j1,j2),j3);</pre>

<p>The index array j points to all the images containing the three objects. Note that D(j) will also contain other objects, but it is guaranteed to contain the previous three.</p>

<h3>Extracting polygons and segments</h3>

<p>The toolbox provides with a set of generic function to extract polygons and segments from the annotations. To extract the polygon coordinates for one object, you can use:</p>

<pre>[x,y] = LMobjectpolygon(Dcar(1).annotation, 1);
figure
plot(x{1}, y{1}, 'r')
axis('ij')</pre>

<p>In this case, the function returns the first polygon of the first image in the index. The function LMobjectpolygon returns a cell array. One entry for each polygon requested.</p>

<p>To extract segmentation masks you can use the function LMobjectmask:</p>

<pre>[mask, class] = LMobjectmask(D(1).annotation, HOMEIMAGES);
imshow(colorSegments(mask))</pre>

<p>You can use this function to extract segmentation masks for all the objects that belong to a single category or for individual polygons. Do help LMobjectmask to see more examples.</p>

<p>Here is a summary of the function available:</p>
<ul>
<li>LMobjectpolygon - returns all the polygons for an object class within an image</li>
<li>LMobjectboundingbox - returns bounding boxes</li>
<li>LMobjectmask - returns the segmentation mask for all object instances of one class within an image</li>
<li> LMobjectcrop - crops one selected object</li>
<li>LMobjectnormalizedcrop - crops one image into a normalized frame (as we needed for training detectors)</li>
</ul>

<p>The function LM2segments.m transforms all the annotations into segmentation masks and provides a unique index for each object class.</p>

<h3>Image manipulation</h3>

<p>To crop and resize images and annotations:</p>
<ul>
<li>LMimscale - scales an image and the corresponding annotation</li>
<li>LMimcrop - crops an image and the corresponding annotation</li>
<li>LMimpad - pads an image with PADVAL and modifies the annotation</li>
<li>LMimresizecrop - outputs an image of size MxM.</li>
</ul>

<h3>Collecting annotation statistics</h3>

<p>The database contains many different object names. In order to see the list of object names and the number of times each object appears, you can use the function LMobjectnames. The next set of lines shows the distribution of object names:</p>

<pre>[names, counts] = LMobjectnames(D);
[c,n] = sort(counts, 'descend');

M = 10; % number of objects to show
figure
barh(counts(n(1:M)))
set(gca, 'YTick', 1:M)
set(gca, 'YtickLabel', names(n(1:M)))
axis([0 max(counts(n(1:M)))+5 0 M+1])
grid on
xlabel('counts')</pre>

<h3>Dealing with synonims and labeling noise</h3>

<p>As there are not specific instructions about how labels should be introduced when using the online annotation tool, this results in different text descriptions used for the same object category. For instace, a person can be described as a "person", "pedestrian", "person walking", "kid", etc. Therefore, it is important that you unify the annotations. The way the annotations can be unified will depend on what you want to do. Therefore, here we provide a set of tools to replace object names.</p>

<p><i>LMreplaceobjectname</i></p>

<p>This function is useful when you want to replace a few object names. In order to replace an object name, you can use the function LMreplaceobjectname. For instance, the next line replaces all the object names that contain the string 'person' or 'pedestrian' by the string 'person'.<br/>

<pre>D = LMreplaceobjectname(D, 'person,pedestrian', 'person', 'rename');

Type help LMreplaceobjectname to see other options.</pre></p>

<p><i>LMaddtags</i></p>

<p>The function LMaddtags replaces LabelMe object descriptions with the names in the list tags.txt. You can extend this list to include more synonyms. Use this function to reduce the variability on object labels used to describe the same object class. However, the original labelme descriptions contain information that is more specific and you might want to generate other tag files to account for a specific level of description. Details on the structure of the text file is given bellow.</p>

<p>To call the function:</p>

<pre>tagsfilename = 'tags.txt';
[D, unmatched] = LMaddtags(D, tagsfilename);</pre>

<p>After running this line, the struct D will contain a unified list of objects. The variable 'unmatched' gives the list of labelme descriptions that were not found inside tags.txt. The file tags.txt contains a list of tags and the labelme descriptions that will get map to each tag. You can add more terms to tags.txt. For instance, the next lines will unify a few of the descriptions into the tags 'person' and 'car'. (lmd means LabelMe Description).</p>

<pre>TAG: person
lmd: person walking
lmd: person
lmd: person standing
lmd: person occluded
TAG: car
lmd: car
lmd: car occluded
lmd: suv</pre>

<p><i>LMaddwordnet</i></p>

<p>Another way of unifiying the annotations is using Wordnet. You can see a demo in the script: demoWordnet.m.</p>

<pre>sensesfile = 'wordnetsenses.txt'; % this file contains the list of wordnet synsets.
[D, unmatched, counts] = LMaddwordnet(D, sensesfile);</pre>

<p>We can now use the power of wordnet to do more than unify the annotations. We can extend the annotations by including other terms. For instance, you can explore the Wordnet tree here. The online search tool uses wordnet to extent the annotations. For instance, we can search for animals (query = animal) despide that users rarely provided this label.</p>

<h2>Annotate your own images</h2>

<p>The function LMphotoalbum creates a web page with thumbnails connected with the annotation tool online. You can use this function to create a page showing images to annotate. This is useful if you want other people to help you, you can create one page for each person with a different partition of the set of images that you want to label.</p>

<pre>LMphotoalbum(folderlist, filelist, webpagename, HOMEIMAGES);

For instance, if you want to create a web page with images of kitchens, you can do:

D = LMquery(D, 'folder', 'kitchen');
LMphotoalbum(D, 'myphotoalbum.html');</pre>

<p>If you want to annotate your own images, you need to upload them to LabelMe first. If you have a set of images you can send us an email with a link to a file with all your images. We will create a folder in LabelMe with your images.</p>

<p>The pictures that you upload, along with the annotations that you provide, will be made available for computer vision research as part of the LabelMe database.</p>

<h2>Scene recognition</h2>

<h3>Gist descriptor</h3>

<p>Here we provide a function to compute the gist descriptor as described in:

Aude Oliva, Antonio Torralba. Modeling the shape of the scene: a holistic representation of the spatial envelope. International Journal of Computer Vision, Vol. 42(3): 145-175, 2001.

To compute the gist descriptor on an image you can use the function LMgist. Here is one example that reads one image and computes the descriptor.</p>

<pre>% Load image
img = imread('demo1.jpg');

% Parameters:
param.imageSize = 128;
param.orientationsPerScale = [8 8 8 8];
param.numberBlocks = 4;
param.fc_prefilt = 4;

% Computing gist:
[gist, param] = LMgist(img, '', param);

% Visualization
figure
subplot(121)
imshow(img)
title('Input image')
subplot(122)
title('Descriptor')
showGist(gist, param)</pre>

<p>You can also compute the gist for a collection of images:</p>

<pre>gist = LMgist(D, HOMEIMAGES, param);</pre>
      
<p>The output is an array of size [Nscenes Nfeatures], where Nscenes = length(D).</p>


<h3>Estimation of the horizon line using the Gist descriptor</h3>
      
      
<p>The goal is to estimate the location of the horizon line on an image. 
        This function uses the approach described in:</p>
        <ul>
        <li>A. Torralba, P. Sinha.<em> Statistical context priming for object detection</em>. 
        ICCV 2001.</li>
        <li>D. Hoiem, <em>Seeing the World Behind the Image: Spatial Layout for 
        3D Scene Understanding</em>, CMU doctoral dissertation 2007.</li>
        <li>J. Sivic, B. Kaneva, A. Torralba, S. Avidan and W. T. Freeman. <em>Creating 
        and exploring a large photorealistic virtual space</em>. Workshop on Internet 
        Vision, 2008.</li>
        </ul>
      <p>To estimate the location of the horizon line call the function <a href="getHorizon.m">getHorizon.m</a>. 
        This function returns the location of the horizon line. The units represent 
        the distance to the center of the image (normalized units with respect 
        to image height):</p>
        
        
<pre>h = getHorizon(img); % h is a value in the range [-0.5, 0.5]
        
[nrows ncols cc] = size(img);

figure
imshow(img)
hold on
plot([1 ncols], ([h h]+.5)*nrows, 'b', 'linewidth',3);</pre>

<p>The estimator has already been trained using street scenes. The parameters of the estimator are in the file streets_general_camera_parameters.mat</p>

      <p>If you want to retrain the estimator you can use the script: trainHorizon.m
        The training data is stored in the file <em>streets_general_camera_training.mat</em>. 
        Inside that file, the variable 'hor' contains all the training data and 
      the list of LabelMe images used for training.      </p>
      
      
      <h3>SIFT descriptor</h3>
      
      <p>Here we provide a function to compute dense SIFT features as described in:</p>
      <ul>
      <li>S. Lazebnik, C. Schmid, and J. Ponce. Beyond Bags of Features: Spatial Pyramid Matching for Recognizing Natural Scene Categories, CVPR 2006.</li>
      <li>C. Liu, J. Yuen, A. Torralba. Dense scene alignment using SIFT Flow for object recognition. CVPR 2009. </li>    
      </ul>
      
      <p>The function LMdenseSift.m computes a SIFT descriptor at each pixel location (in this implementation there is no ROI detection as in the original definition by D. Lowe). This function is a modification of the code provided by S. Lazebnik. The current implementation uses convolutions. Here there is an example of how to compute the dense SIFT descriptors for an image and to visualize the descriptors as described in Liu et al 09.</p>

<pre>% demo SIFT using LabelMe toolbox

img = imread('demo1.jpg');
img = imresize(img, .5, 'bilinear');

%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
% SIFT parameters:
SIFTparam.grid_spacing = 1; % distance between grid centers
SIFTparam.patch_size = 16; % size of patch from which to compute SIFT descriptor (it has to be a factor of 4)
%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

% CONSTANTS (you can not change this)
w = SIFTparam.patch_size/2; % boundary

% COMPUTE SIFT: the output is a matrix [nrows x ncols x 128]
SIFT = LMdenseSift(img, '', SIFTparam);

figure
subplot(121)
imshow(img(w:end-w+1,w:end-w+1,:))
title('cropped image')
subplot(122)
showColorSIFT(SIFT)
title('SIFT color coded')</pre>

<p>Other related functions: demoVisualWords.m, LMkmeansVisualWords.m, LMdenseVisualWords.m</p>

    <!-- end .content --></article>
  <footer class="footer">
    <p>(c) MIT, Computer Science and Artificial Intelligence Laboratory.</p>
    <!-- end .footer --></footer>
  <!-- end .container --></div>
  <div id="mask"></div><!--masks the whole screen when in modals-->
</body>
</html>
