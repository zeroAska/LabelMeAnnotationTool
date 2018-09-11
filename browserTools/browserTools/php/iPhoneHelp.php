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
    		
                      
<table>
<tr>
<td valign="top">
<img style="cursor:text;" width="116px" src="../icons/labelMeiPhoneIcon.png" alt="LabelMe App"/><br>
</td>
<td valign="top">
<h1 class="title" style="line-height:100%; margin-bottom:0.2em;">LabelMe App</h1>
<h5 style="line-height:100%; margin-bottom:0.3em;">Released: Dec 10, 2012<br>
Version: 1.0<br>
For iPhone and iPad.
</h5>
<p><a href="https://itunes.apple.com/us/app/labelme/id582509736?mt=8&uo=4" target="itunes_store"><img src="http://r.mzstatic.com/images/web/linkmaker/badge_appstore-lrg.gif" alt="LabelMe" style="border: 0;"/></a></P>
</td>
</tr>
</table>



<p>The LabelMe App will allow you taking pictures, adding bouding boxes and uploading them your LabelMe online account.</p>

<table>
<tr>
<td valign="top">
<img style="cursor:text;" height="300px" src="../icons/iphone_1.png" alt="LabelMe App"/>
</td>
<td valign="top">
<img style="cursor:text;" height="300px" src="../icons/iphone_2.png" alt="LabelMe App"/>
</td>
<td valign="top">
<img style="cursor:text;" height="300px" src="../icons/iphone_3.png" alt="LabelMe App"/>
</td>
<td valign="top">
<img style="cursor:text;" height="300px" src="../icons/iphone_4.png" alt="LabelMe App"/>
</td>
<td valign="top">
<img style="cursor:text;" height="300px" src="../icons/iphone_5.png" alt="LabelMe App"/>
</td>
</tr>
</table>

<br>


<h1>A quick guide</h1>


<h3>Step 1: Get the LabelMe App</h3>

<p>The LabelMe app is available for free at the 


<a href="https://itunes.apple.com/us/app/labelme/id582509736?mt=8&uo=4" target="itunes_store">App Store</a></p>

<h3>Step 2: Create an account</h3>

<p>
If you have already a LabelMe account, you can use the same username and password. You can also create a user account from the App and use it at the LabelMe website. Once you create an account you can log in and start taking pictures and store them online.
</p>

<h3>Step 3: Collect and annotate images with the App</h3>

<p> The images you collect will be uploaded to your online LabelMe account.</p>

<h3>Step 4: Download the images and annotations</h3>

<p> You can download the images from the LabelMe website (collection: iPhoneCollection).</p>
<p> You can also use the <a href="http://labelme.csail.mit.edu/LabelMeToolbox/LabelMeToolbox.zip">LabelMe toolbox</a> to download the images and annotations. Use the matlab function:</p>

<pre>APPdownload('yourUserName');</pre>


<p> And that's it!</p>
<br>

<h1>Some more details</h1>

<p>The app has 3 sections: Labels Gallery, Detectors Gallery and Settings.</p>

<h2>Labels Gallery</h2>
<p>The Labels Gallery stores the images that you take and annotate. In this library you can see the images on a grid or a list layout. You can use the gallery view to upload and delete images.</p>
<p>The circle on the top-right corner of each image indicates if the image has been uploaded to the server. A number indicates how many new objects have been added since the last upload.</p>
<p>The gallery only shows the images available on the mobile device.</p>


<h3>Image annotation</h3>

<p>You can add bounding boxes around objects on each image. Once you have adjusted the bounding box to contain the object, you can add a tag to describe the object. You can use the keyboard or the microphone to tag the annotated object.</p>

<p>Once you upload the image you will be able to visualize the annotations on the LabelMe website. You can also make changes and add new annotations, however online changes will not be reflected on the data stores in the App and might get deleted if the image is uploaded again from the App.</p>


<h3>Upload images</h3>

<p>Images are uploaded to your account on the labelMe server. The images will be stored into the folder /iPhoneCollection/.</p>
<p>Currently, all the images captured from the App will be stored in a single folder. It is not possible to create collections within the App.</p>

<h3>Downloading images</h3>
<p>To download the images captured with the app you need to first upload them to the server and then download them from the  LabelMe website.</p>

<h3>Sharing images</h3>
<p>If you share your username with other people, they will be able to download your images and annotations using the LabelMe toolbox.</p>
<p>If you want multiple people to help you collect and annotate images, they can create their own accounts and share the username with you so that you can download the images and annotations.</p>

<h3>Delete images</h3>
<p>If you delete images from the app, the images and annotations will only be deleted on the mobile device and will still be available on the LabelMe website if they have been uploaded. If you want to delete the images from the server you have to log in into the LabelMe website and delete the images there.</p>
<p>Deleting images on the App will allow you freeing memory without loosing the images that had been uploaded.</p>
<p>If you want to delete images from the server too, you have to do it from the LabelMe website.</p>

<h2>Detectors Gallery</h2>
<p>The Detectors Gallery shows you the list of the trained detectors. A detector, after trained, let you detect objects through the iOS device camera, in real time.</p>
<p></p>

<img style="cursor:text;" height="300px" src="../icons/iphone_detector_gallery.png" alt="Detector Gallery"/>

<h3>Adding a detector</h3>
<p>To create a detector you first have to click the '+' sign on the left top of the detectors gallery.</p>
<p>Then choose the class (or classes) for you would like to create a detector. This classes are extracted from the Labels gallery, so you must have annotated images in order to train a new detector. Click <em>next</em> to continue.</p>
<p>The next screen shows you the available images to train from. This are all the annotated images you have from the Labels Gallery for the selected class. The default settings makes you select all the images. It is important to have a reasonable number of annotated images to train a good detector (see training considerations for more details). Click <em>next</em> to begin with the training.</p>
<p>During the detector training you will see a debug page with information about the training process. This page basically shows statistics about the evolution of the detector training. Wait until the <em>Cancel</em> button changes its name to <em>Done</em>.</p>
<p>when the training it is done, you will be prompted to the detector information page. This page shows you information about the detector and two images representing the detector: one is the average image of all the training set images and the other is a representation of the detector weights in the HOG space. Click the <em>play</em> button to execute it!</p>

<table>
  <tr>
    <td valign="top">
      <img style="cursor:text;" height="300px" src="../icons/iphone_choose_class.png" alt="Choose class"/>
    </td>
    <td valign="top">
      <img style="cursor:text;" height="300px" src="../icons/iphone_choose_images.png" alt="Choose images"/>
    </td>
    <td valign="top">
      <img style="cursor:text;" height="300px" src="../icons/iphone_training_debug.png" alt="Training debug"/>
    </td>
    <td valign="top">
      <img style="cursor:text;" height="300px" src="../icons/iphone_detector_details.png" alt="Detector details"/>
    </td>
  </tr>
</table>

<h3>Executing detectors</h3>
<p>To execute detector go to the detail page of it and hit the <em>play</em> button. You will see the iOS device camera and if you point to the trained object it should be detected.</p>
<p>The sliding bar sets de detector accuracy. If you swipe it to the left, more detections (with less accuracy) will be made. The opposite will happen if you swipe it to the right.</p>
<p>The <em>settings</em> button let you show on the screen the current Frames Per Second (FPS) achieved during the detection. Depending on the parameters used for training, you will be able to increase the FPS rate.</p>
<p>The HOG settings let you turn the camera into the Histogram Of Gradients (HOG) space. This is the space used were the detector is trained and it can help you debug and improve the dector. See <a href="http://lear.inrialpes.fr/people/triggs/pubs/Dalal-cvpr05.pdf">the N. Dalal and B. Triggs article</a> for more details.</p>
<p>There is also the possibility to execute more than one detector at the same time. To do it, just go to the detectors collection gallery, tap the <em>Edit</em> button and select as many detectors as you would like to execute simultaneously. Then tap the <em>Execute</em> button.</p>

<img style="cursor:text;" height="300px" src="../icons/iphone_detection.png" alt="Executing 'cup' detector"/>

<h3>Retraining a detector</h3>
<p>When a detector is created you can retrain it as many times as you want. This is useful, for example, when you want to improve the detector adding more images and annotations.</p>
<p>To retrain the detector, just go to the detector details and click the <em>train</em> button. You will have to choose again which training set you would like to use. Notice that the selected images that will appear are those that you use in the previous training.</p>
<p>Also you have the <em>undo</em> button to return to the previous trained detector if it has not improved.</p>

<h3>Deleting a detector</h3>
<p>To delete detectors just click the <em>Edit</em> button in the detectors gallery and select those you would like to delete.</p>
<p></p>

<h3>Training considerations</h3>
<p>To ensure a good performance on the object detection phase, here are some guidelines to take into account when training the detector.</p>
<ul>
  <li><strong>Annotation Size.</strong> To train the detector for a specific object, you have to take a picture of it ocupying the whole screen when inside the camera view. You will notice that when you open the picture though, there is extra space around the image. That is perfectly fine and indeed is it done to ensure a better training by learning of the object surroundings.</li>
  <li><strong>Shape.</strong> The ideal shape is as squared as possible. LabelMe will also be able to detect very rectangular shapes, howevever it will be less accurate if those rectangular shapes vary accross the training set.</li>
  <li><strong>Training set.</strong> The training set are all those annotated images you will use to train the detector. The performance of the detector is mostly affected by those images. Take pictures of the object to recognize with from all the perspectives you would like to recognize it from. Also take pictures in different enviroments so this wouls make the detecor more robuts. The number of images needed for the detector depends mostly on how complex is the object (different perspectives) and how robust you want it to be to different change of enviromets. Usual numbers are around 20 images per detector. For example, a chair is more complex thant a sphere, as it has more different perspectives. If I want the detector to recognize all possible chairs, I will also need to provide annotated images for different kind of chairs for different perspectives.  </li>
  <li><strong>Hog size.</strong> You can ajust the HoG size in the settings. This parameter let you tune the detector tradeoff between accuracy and speedness. More dimension to HOG means that the detector will be more accurate but it also will be slower. </li>
</ul>



<h2>Settings</h2>
<p>There are several settings that can be modified:</p>
<ul>
<li>Save to library: if <i>on</i> the images will be saved to the iPhone camera roll.</li>
<li>Image resolution: you can chose the image resolution. It is set to max resolution by default.</li>
<li>GPS: you have to habilitate the location services in order to record the GPS coordinates inside the XML annotation file.</li>
<li>Hog size: see the reference in the previous section.</li>
</ul>

<h1>Licenses</h1>

<p>
Please make sure that the images you upload are copyright-free and do not
contain inappropriate content.
The images that you upload and annotate will be considered part of the
public domain and other people might see them. As the goal of LabelMe
is to provide a tool for research, the images and annotations are
expected to become available to the research comunity without
restrictions.
</p>

<p>
You are free to post your collected database of images and annotations
on your own website.  For example, you may do this when you release
your database with your research publications.
</p>

<h1>Privacy</h1>
<p> Once you upload your images, they will be available online. Even if they are not listed, knowing the URL will be enough to access them. This makes easier to do research with the images collected.</p>
<p>Therefore, do not upload personal material that you do not want others to see</p>

<h1>Citation</h1>

<p>If you use the dataset or any functions on this website, we would
appreciate it if you cite:<br />

B. C. Russell, A. Torralba, K. P. Murphy, W. T. Freeman,
LabelMe: a database and web-based tool for image annotation.
International Journal of Computer Vision, pages 157-173, Volume 77, Numbers 1-3, May, 2008.
(<a href="http://people.csail.mit.edu/brussell/research/AIM-2005-025-new.pdf">paper.pdf</a>)
</p>


<h1>Suggestions</h1>

<p>
Send email to labelme@csail.mit.edu if you have suggestions, find bugs or there are new features that you would like to see in the tool.
</p>

<h1>Credits</h1>

<p>The LabelMe app has been developed by Dolores Blanco, Aina Torralba, David Way, Josep Marc Ming0t and Antonio Torralba.

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
