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
    		
   
            	<h1 class="title">Amazon Mechanical Turk for LabelMe</h1>
                      


<p>Want to outsource your labeling task to the internet? <a href="http://mturk.com" target="_blank">Amazon Mechanical Turk</a> allows access to many internet users who are ready to perform tasks for a fixed price.</p>

<p>The idea is simple: you provide a task and a selling price. Internet workers perform the task and are subsequently paid. In Mechnical Turk terminology, tasks are called "HITs", people requesting work are called "Requesters", and people who do the work are called "Workers".</p>

<p>This page describes how to set up LabelMe annotation tasks onto Mechanical Turk. The process is simple, as we have provided scripts for creating and sending LabelMe annotation tasks onto Mechanical Turk. All you have to do is follow the instructions below and pay workers on Mechanical Turk to label images. We collect the annotations, which are immediately available for download. In this way, everybody wins: Mechanical Turk workers get paid, you get your images annotated, and the computer vision community gets access to more hand-labeled data.</p>
<h2>Instructions for setting up LabelMe on Mechanical Turk</h2>

<p>Setting up LabelMe on Mechanical Turk is easy. The following are instructions for setting up LabelMe on Mechanical Turk.</p>
<h3>1. Upload images onto LabelMe</h3>

<h3>2. Set up an Amazon Mechanical Turk account</h3>

<p>You will need to set up an account as a Requester on Mechanical Turk. Instructions for setting up an account are <a href="https://requester.mturk.com/mturk/welcome" target="_blank">here</a>. Once you have created an account, sign in and try to access <a href="https://requester.mturk.com/mturk/resources" target="_blank">your account</a>, along with the <a href="https://requestersandbox.mturk.com/mturk/resources" target="_blank">sandbox</a> (used for debugging).</p>
<h3>3. Download and install Amazon Mechanical Turk Command Line Tools</h3>

<p>You will need to install the Amazon Mechanical Turk Command Line Tools. The tools provide the backbone for communicating with the Mechanical Turk servers. To start, you first need to request your access key and secret key. This is different than your username and password. To do this, create an <a href="http://aws.amazon.com/ target="_blank"">Amazon Web Services account</a>. Once the account is created, go to "Your Account->Access Identifiers", which is located at the top of the page. Here, you will find your access key and secret key.</p>

<p>Next, download the <a href="http://developer.amazonwebservices.com/connect/entry.jspa?entryID=694&ref=featured" target="_blank">Amazon Mechanical Turk Command Line Tools</a> (note that so far, we have only tested the Linux/Mac version). Unzip the file and follow the instructions inside the directory to install the Command Line Tools.</p>

<p>As a reminder, open and modify ./aws-mturk-clt-1.3.0/bin/mturk.properties to include your access key and secret key. Also, make sure you set the following environment variables (e.g. using the command "export VAR=/path/to/file" in bash):</p>

<p>a) $MTURK_CMD_HOME - this should point to the location of your Amazon Mechanical Turk Command Line Tools (root directory).</p>
<p>b) $JAVA_HOME - this should point to the location of your Java installation.</p>
<!-- <h3>4. Download scripts for sending LabelMe jobs to Mechanical Turk</h3> -->
<h3>4. Download the LabelMe-Mechanical-Turk toolbox</h3>

<p>We provide a set of scripts that are used to interact with Mechanical Turk and set how the task is performed (e.g. how much do the workers earn, list of jobs, etc.). There are two ways to download the scripts to send LabelMe jobs to Mechanical Turk (currently, the scripts are available for Linux/Mac only):
</p>

<h3>A. <a href="https://github.com/CSAILVision/LabelMeMechanicalTurk">Github repository</a></h2>

<p>We maintain the latest version of the code on github. To pull the latest version, make sure that "git" is installed on your machine and then run "git clone https://github.com/CSAILVision/LabelMeMechanicalTurk.git" on the command line. You can refresh your copy to the latest version by running "git pull" from inside the project directory.</p>

<p>
If you have an idea for a new feature and want to implement it, then
<a href="mailto:labelme@csail.mit.edu">let us know</a>!  
With github, you can fork the code and send us a pull request.
If we like your feature and implementation, then we will incorporate
it into the main code.
</p>

<h3>B. <a href="https://github.com/CSAILVision/LabelMeMechanicalTurk/archive/master.zip">Zip file</a></h2>

<p>The zip file is a snapshot of the latest source code on github.</p>

<h3>5. Submit jobs to Mechanical Turk</h3>

<p>To submit jobs to Mechanical Turk, follow the remaining instructions inside <a href="https://github.com/CSAILVision/LabelMeMechanicalTurk/blob/master/demo.m"><code>demo.m</code></a> inside the LabelMe-Mechanical-Turk toolbox.</p>



<!--

<p>Scripts for sending LabelMe jobs to Mechanical Turk are available <a href="../../releases/LabelMeMechanicalTurk.zip">here</a> (currently, the scripts are available for Linux/Mac only). After download, unzip the file and change to the directory.</p>

<p>The zip file contains a set of scripts that are used to interact with Mechanical Turk, along with files used to set how the task is performed (e.g. how much do the workers earn, list of jobs, etc.). In addition, a Matlab function is included to assist in setting which images are to be annotated.</p>
<h3>5. Submit jobs to Mechanical Turk</h3>

<p>Let us now submit jobs to Mechanical Turk. In this section, we will use Mechanical Turk's "sandbox" server. The sandbox is free to use (you have fake credits on this server), so you can test here to make sure everything works. When you are ready for the real thing, simply remove all -sandbox flags and set sandbox=0 in the MATLAB script below. Make sure to add money to your Amazon account before running on the real server.</p>
<p>First, go to the directory containing the scripts for sending LabelMe jobs to Mechanical Turk (see Step 4 above; cd /path/to/LabelMeMechanicalTurk/). Next, start MATLAB and run the following at the prompt (use the value of FOLDER from Step 1 above):</p>

<pre>folder=FOLDER;
sandbox=1; // Set this to sandbox=0 when running on the real server
generateLabelMeInputFile(folder,sandbox);

The script will produce a file called labelme.input with all of your images listed as HITs. The help output<br/>(type help generateLabelMeInputFile at the MATLAB prompt) gives information on further customizations for the<br/>task.

We are now ready to submit to Mechanical Turk. To submit to the sandbox, run the following at the Linux command<br/>prompt (not the MATLAB prompt):

./run.sh -sandbox</pre>

<p>You will see messages indicating that the jobs are being submitted. At the end, there will be a URL that points to a preview page for the HIT. You can go to that URL and try out the HIT. All of the collected annotations are stored on the LabelMe servers, so you can <a href="dataset.php" target="_blank">download them immediately</a>. </p>

<p>Mechanical Turk also produces outputs for the HITs, which you can retrieve from the server. To do this, run the following at the Linux command prompt:</p>

<pre>./getResults.sh -sandbox</pre>

<p>This will produce a file called labelme.results.xls. This is a comma separated file, which can be viewed with Excel. This file lists the status of each HIT, as well as outputs from the annotation task, such as number of annotations labeled, last object labeled, etc.</p>

<p>You can also view the status of HITs on the requester page of the <a href="https://requester.mturk.com/mturk/manageHITs" target="_blank">Mechanical Turk server</a> (or on the requester page of the <a href="https://requestersandbox.mturk.com/mturk/manageHITs" target="_blank">sandbox server</a>). Note that you can navigate to the status page from the main requester page via the "Manage HITs individually" link at the top right of the page.</p>


<p>
It is important to pay the workers as soon as possible.  To pay the workers, run the following at the Linux
command prompt:
</p>

<pre>./reviewResults.sh -sandbox</pre>

<p>
Finally, when all of the HITs are completed, you can remove them from
the Amazon server by running at the Linux command prompt:
</p>

<pre>
./approveAndDeleteResults.sh -sandbox
</pre>

<p>The file <code>labelme.properties</code> contains all of the pricing
settings for the HIT.  Change this file as you wish.  Currently, each
HIT is priced at $0.01 per image.  Please see the documentation for
the Amazon Mechanical Turk Command Line Tools for more information.</p>

-->

<h2>Sample results and cost considerations</h2>

<p>
The quality of the annotations provided by Mechanical Turk workers is
in general quite good.  The following are example annotations provided by the
workers:
</p>

<p>
<table>
<tr>
<td><img src="../icons/mt/img11.jpg" /></td>
<td><img src="../icons/mt/img10.jpg" /></td>
<td><img src="../icons/mt/img3.jpg" /></td>
</tr>
<tr>
<td><img src="../icons/mt/img4.jpg" /></td>
<td><img src="../icons/mt/img5.jpg" /></td>
<td><img src="../icons/mt/img1.jpg" /></td>
</tr>
<tr>
<td><img src="../icons/mt/img7.jpg" /></td>
<td><img src="../icons/mt/img8.jpg" /></td>
<td><img src="../icons/mt/img6.jpg" /></td>
</tr>
</table>
</p>

<p>
The following are statistics for the tasks that we submitted to
Mechanical Turk.  
</p>

<p>
<table border="1">
<tr>
<td align="center"><b>Task</b></td>
<td align="center"><b>Price per image</b></td>
<td align="center"><b>Task description</b></td>
<td align="center"><b># images</b></td>
<td align="center"><b># annotations<br />collected</b></td>
<td align="center"><b>Time elapsed<br />(hours)</b></td>
<td align="center"><b># workers</b></td>
</tr>
<tr>
<td align="center">1</td>
<td align="center">$0.01</td>
<td align="center">Label at least one object in the image</td>
<td align="center">237</td>
<td align="center">678</td>
<td align="center">13.5</td>
<td align="center">37</td>
</tr>
<tr>
<td align="center">2</td>
<td align="center">$0.01</td>
<td align="center">Label at least five objects in the image</td>
<td align="center">271</td>
<td align="center">1492</td>
<td align="center">23.13</td>
<td align="center">43</td>
</tr>
<tr>
<td align="center">3</td>
<td align="center">$0.01</td>
<td align="center">Label as many objects as you wish in the image</td>
<td align="center">271</td>
<td align="center">627</td>
<td align="center">9.08</td>
<td align="center">28</td>
</tr>
</table>
</p>

<p>
We also received feedback from the workers.  The following are all of
the feedback from the workers:
</p>

<table border="1">
<tr>
<td align="center"><b>Positive</b></td>
<td align="center"><b>Negative</b></td>
<td align="center"><b>Other</b></td>
</tr>
<tr>
<td align="center">fine</td>
<td align="center">this very heavy work for this hit</td>
<td align="center">one of them is all messed up</td>
</tr>
<tr>
<td align="center">good</td>
<td align="center">$0.01 for five objects now?</td>
<td align="center">Sorry if anything is miss spelt.</td>
</tr>
<tr>
<td align="center">Very interesting idea</td>
<td />
<td />
</tr>
<tr>
<td align="center">fun trying this</td>
<td />
<td />
</tr>
<tr>
<td align="center">No feedback.  This was fun!</td>
<td />
<td />
</tr>
</table>

<p>
It seems in general that workers enjoy performing the task.  In addition,
sometimes they provided additional useful feedback on the task
(e.g. workers would see polygons that other labelers had provided; one
commented on the quality of a polygon provided by another worker).
</p>

<p>
The following paper provides additional information for labeling tasks
on Mechanical Turk:
</p>

<p>
A. Sorokin and D. Forsyth.  <a href="http://www.cs.uiuc.edu/homes/sorokin2/papers/cvpr08_annotation.pdf" target="_blank">Utility data annotation with Amazon
Mechanical Turk</a>.  First IEEE Workshop on Internet Vision at CVPR,
2008.
</p>

<h2>Let us know!</h2>

<p>
We are very excited about the annotation possibilities using Mechanical Turk
with LabelMe.  Please let us know if you are thinking of using this.
We are curious about how you set the cost of the HIT, as well as the quality of the
annotations.  If you have any feedback on any part of the system
(instructions, annotation tool, etc.), please <a href="mailto:labelme@csail.mit.edu">let us know</a>!
</p>




<h2>Advanced features</h3>

<p>
This section describes the structure of the <code>labelme.input</code>
file, which specifies the set of images to annotate
(the MATLAB function <code>generateLabelMeInputFile.m</code> can be
used to generate this file). The file starts
with the keyword <code>urls</code> and subsequently lists on each line
the URL of the annotation tool for each image to annotate.
The file has the following format:

<!--The following is a description of the structure of the
<code>labelme.input</code> file:-->

<!--The list of images to annotate needs to be added to the
<code>labelme.input</code> file.  The structure of the file is as
follows:-->
</p>

<p>
<table border="1">
<tr>
<td>
<pre>
urls
<br />http://labelme.csail.mit.edu/tool.html?collection=LabelMe&amp;mode=mt&amp;folder=FOLDER&amp;image=IMAGE1.jpg
<br />http://labelme.csail.mit.edu/tool.html?collection=LabelMe&amp;mode=mt&amp;folder=FOLDER&amp;image=IMAGE2.jpg
<br />http://labelme.csail.mit.edu/tool.html?collection=LabelMe&amp;mode=mt&amp;folder=FOLDER&amp;image=IMAGE3.jpg
<!--
<br />http://labelme.csail.mit.edu/tool.html?collection=LabelMe&amp;amp;mode=mt&amp;amp;folder=FOLDER&amp;amp;image=IMAGE1.jpg
<br />http://labelme.csail.mit.edu/tool.html?collection=LabelMe&amp;amp;mode=mt&amp;amp;folder=FOLDER&amp;amp;image=IMAGE2.jpg
<br />http://labelme.csail.mit.edu/tool.html?collection=LabelMe&amp;amp;mode=mt&amp;amp;folder=FOLDER&amp;amp;image=IMAGE3.jpg
-->
</pre>
</td>
</tr>
</table>
</p>

<p>
Make sure that each image is listed once.  This is important since
currently LabelMe does not handle concurrency, so multiple people
labeling the same image will overwrite each other.
</p>

<p>
We have added a few extra variables to the LabelMe annotation tool URL to customize the
annotation process.  Simply append <code>&amp;VAR=VAL</code> to
<!-- annotation process.  Simply append <code>&amp;amp;VAR=VAL</code> to -->
the URL as needed.  The following is a list of variables:
</p>

<p>
<table border="1">
<tr>
<td align="center">Setting</td>
<td align="center">Meaning</td>
</tr>
<tr>
<td><code>&amp;mt_sandbox=true</code></td>
<!-- <td><code>&amp;amp;mt_sandbox=true</code></td> -->
<td>Use Mechanical Turk sandbox mode.  This mode is used for debugging
on Mechanical Turk.  You may want to start with this variable set to
make sure everything works.</td>
</tr>
<tr>
<td><code>&amp;N=5</code></td>
<!-- <td><code>&amp;amp;N=5</code></td> -->
<td>The worker is required to label at least 5 polygons.  Use
<code>N=inf</code> to allow the worker to label as many as they want.</td>
</tr>
<tr>
<td><code>&amp;mt_intro=http://yourpage.com</code></td>
<!-- <td><code>&amp;amp;mt_intro=http://yourpage.com</code></td> -->
<td>You may customize the instructions that the worker sees.  By
default, the following <a href="../../annotationTools/html/mt_instructions.html" target="_blank">instructions</a>
are given to the workers.</td>
</tr>
<tr>
<td><code>&amp;mt_instructions=Place your instructions here</code></td>
<!-- <td><code>&amp;amp;mt_instructions=Place your instructions here</code></td> -->
<td>
You may customize the one-line instructions that the worker sees at
the top of the labeling task. By default, the instructions are:
<b>Please label as many objects as you want in this image</b>.
</td>
</tr>
<tr>
<td><code>&amp;actions=n</code></td>
<!-- <td><code>&amp;amp;actions=n</code></td> -->
<td>
This controls what actions the user is allowed to do.  The following
are possible actions:
<br /><br />
n - create and edit new polygons<br />
r - rename existing objects<br />
m - modify control points on existing objects<br />
d - delete existing objects<br />
a - allow all actions<br />
v - view polygons only (do not allow any editing)<br />
<br />
To set the desired actions, use any combination of the letters above.
For example, to allow renaming, modify control points, and delete
actions, then set <code>&amp;actions=rmd</code>. By default,
<!-- actions, then set <code>&amp;amp;actions=rmd</code>. By default, -->
<code>&amp;actions=n</code>.
<!-- <code>&amp;amp;actions=n</code>. -->
</td>
</tr>
<tr>
<td><code>&amp;viewobj=e</code></td>
<!-- <td><code>&amp;amp;viewobj=e</code></td> -->
<td>
This will control which objects the user sees.  Use one of the following
possible options:
<br /><br />
e - view new and previously labeled objects<br />
n - view new objects only<br />
d - view new and deleted objects<br />
a - view all objects (new, existing, deleted)<br />
<br />
By default, <code>&amp;viewobj=e</code>.  Note that for deleted
<!-- By default, <code>&amp;amp;viewobj=e</code>.  Note that for deleted -->
objects, these will be shown in gray and the object name in the object
list will be italicized.
</td>
</tr>
<tr>
<td><code>&amp;objlist=visible</code></td>
<!-- <td><code>&amp;amp;objlist=visible</code></td> -->
<td>
This controls whether the object list on the right side is visible or
not.  Use <code>&amp;objlist=hidden</code> to make it hidden.
<!-- not.  Use <code>&amp;amp;objlist=hidden</code> to make it hidden. -->
</td>
</tr>
</table>
</p>


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
