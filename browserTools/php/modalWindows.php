  <div id="boxes">
  

  
  
  <!--  CREATE NEW COLLECTION  -->
   <div id="new_collection" class="modal-window">
       <div class="modal-header">
               <h1>New Collection</h1>
       </div>
       <form action="create_new_collection.php" method="post">
         <div class="modal-content">
			 This will create a new folder within the current path. Only characters, underscore '_' and numbers are allowed inside the collection name. Spaces are not allowed. 
				<br />
                <br />
             <label for="collection_name">Collection Name(*)</label><input type="text" name="collection_name" data-category="collection" data-value="collection_name" onkeyup="this.value=this.value.replace(/[^\d_a-z]/,'')"/>
             <!-- <label for="collection_description">Collection Description</label><input type="text" name="collection_description" data-category="collection" data-value="collection_description" /> -->
             <label for='folder'></label><input type='hidden' name='folder' value='' />         </div>
         <div class="modal-bottom-navigation">
         	<input type="submit" name="submit" value="Create Collection" />
         	<a href="#"class="close"/>Cancel</a>
         </div>
       </form>
    </div>
  

<!--   Upload pictures  -->
   <div id="upload_more" class="modal-window">
 		<div class="modal-header">
       		<h1>Add Pictures to Collection</h1>
   		</div>
    	<form action="upload_images.php" method="post" enctype="multipart/form-data">
		    <div class="modal-content">
				Only upload images to LabelMe with the goal of making them publicly available for research. You can select multiple images for upload (max 20 images in one upload). 
				<br />
                <br />
				<label for="file">Upload pictures: </label>
				<input name="file[]" id="file" type="file" accept="image/*" multiple=""/>
                <br />
                <br />
                Image names will be made lower case and spaces will be removed.
                Only images with extension .jpg are allowed.
                <label for='folder'></label><input type='hidden' name='folder' value='' />            </div>
    		<div class="modal-bottom-navigation">
				<input id="uploadrequestbuttom" type="submit" name="submit" value="Upload images" />
            	<a href="#" class="close"/>Close</a>
            </div>
		</form>
    </div>


<!--   EDIT USER DATA  -->
<div id="account_settings" class="modal-window">
    <div class="modal-header">
    	<h1>Account Settings</h1>
    </div>
    <form action="edituser.php" method="post">
        <div class="modal-content">
    		<p>Username: <b></b> </p>
    		<hr>
        	<label for="name">Name: </label><input type="text" name="name" data-category="signup" data-value="username" value=""/>
        	<label for="institution">Institution: </label><input type="text" name="institution" data-category="signup" data-value="username" value=""/>
        	<label for="email">Email: </label><input type="email" name="email" data-category="signup" data-value="email" value=""/>
            <label for='folder'></label><input type='hidden' name='folder' value='' /><label for='public'></label><input type='hidden' name='public' value='' />			<br />
        </div>
        <div class="modal-bottom-navigation">
			<input type="submit" name="submit" value="Edit user" />
            <a href="#" class="close"/>Cancel</a>
       </div>
   </form>
 </div>


<!--   Remind password  -->
<div id="forgot_password" class="modal-window">
 		<div class="modal-header">
       		<h1>Remind Password</h1>
   		</div>
    	<form action="forgot_password.php" method="post" enctype="multipart/form-data">
		    <div class="modal-content">
            	Enter your email adress below.<br/> An email will be sent to you with your username and a new password.
            	<br/>
                <br/>
				<label for="email">Email: </label>
				<input type="email" name="email" id="email" />
            </div>
    		<div class="modal-bottom-navigation">
				<input type="submit" name="submit" value="Send" />
            	<a href="#"class="close"/>Cancel</a>
            </div>
		</form>
</div>
   


<div id="reset_password" class="modal-window">
    <div class="modal-header">
    	<h1>Change password</h1>
    </div>
    <form action="resetpassword.php" method="post">
        <div class="modal-content">
    	<p>Username: <b></b> </p>
    	<hr>
     	<label for="password">Old Password</label><input type="password" name="oldpassword" data-category="login" data-value="password" />
     	<label for="password">New Password</label><input type="password" name="newpassword" data-category="login" data-value="password" />
     	<label for="password">Repeat New Password</label><input type="password" name="repeatnewpassword" data-category="login" data-value="password" />
            <label for='folder'></label><input type='hidden' name='folder' value='' /><label for='public'></label><input type='hidden' name='public' value='' />        </div>
        <div class="modal-bottom-navigation">
				<input type="submit" name="submit" value="Change password" />
            	<a href="../../#"class="close"/>Cancel</a>
        </div>
   </form>
 </div>
 
 
<script type="text/javascript">
  function downloadrequested()
  {
	document.getElementById("downloadrequestbuttom").value="   Processing your request... wait   ";
  }
  function closedownloadrequested()
  {
	document.getElementById("downloadrequestbuttom").value="Create tar file";
  }
</script>

<div id="download_request" class="modal-window">
    <div class="modal-header">
    	<h1>Download collection</h1>
    </div>

    <form action="download_database.php" method="post" onsubmit="downloadrequested()">
        <div class="modal-content">
    		<p>This will only download the content of the current collection.</p>
    		<hr>
    		<p>Select what do you want to download:</p>
			<input type="checkbox" name="images" value="images" /> Download images<br />
			<input type="checkbox" name="annotations" value="annotations" /> Download annotations<br />
            <label for='folder'></label><input type='hidden' name='folder' value='' /><label for='public'></label><input type='hidden' name='public' value='' />			<br />
     		<hr>
   		    <p>The request will generate a tar file. This might take few minutes.</p>
      </div>
        <div class="modal-bottom-navigation">
			<input id="downloadrequestbuttom" type="submit" name="submit" value="Create tar file" />
            <a href="#" onClick="closedownloadrequested();" class="close"/>Close</a>
       </div>
   </form>
 </div>



        <!--

    <div id="edit_collection" class="modal-window">
      <div class="modal-header">
      <h1>Edit Collection</h1>
      </div>
      <div class="modal-content">
    		<label for="collection_name">Collection Name(*)</label><input type="text" name="collection_name" data-category="collection" data-value="collection_name" />
            <label for="collection_description">Collection Description</label><input type="text" name="collection_description" data-category="collection" data-value="collection_description" />
            <label for="users">Users to share the collection</label><input type="text" name="users" data-category="collection" data-value="users" />
      </div>
      <div class="modal-bottom-navigation">
             <a href="#">Save Changes </a>
            <a href="#"class="close" />Cancel</a>
      </div>
    </div>
  
  

-->
</div>

<div id="mask"></div><!--masks the whole screen when in modals-->

<!--Once the modal windows are defines, we can set the event handlers-->
<script src="../js/modals.js" type="text/javascript"></script>

