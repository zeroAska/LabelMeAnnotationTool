/*
*	Upload files to the server using HTML 5 Drag and drop the folders on your local computer
*
*	Tested on:
*	Mozilla Firefox 3.6.12
*	Google Chrome 7.0.517.41
*	Safari 5.0.2
*	Safari na iPad
*	WebKit r70732
*
*	The current version does not work on:
*	Opera 10.63 
*	Opera 11 alpha
*	IE 6+
*/

function uploader(place, status, targetPHP, show) {
	
	// Upload image files
	var upload = function(file, last) {

		// Firefox 3.6, Chrome 6, WebKit
		if(window.FileReader) { 
				
			// Once the process of reading file
			this.loadEnd = function() {
				var bin = reader.result;				
				var xhr = new XMLHttpRequest();
				xhr.open('POST', targetPHP+'&up=true', true);
				var boundary = 'xxxxxxxxx';
	 			var body = '--' + boundary + "\r\n";  
				body += "Content-Disposition: form-data; name='upload'; filename='" + file.name + "'\r\n";  
				body += "Content-Type: application/octet-stream\r\n\r\n";  
				body += bin + "\r\n";  
				body += '--' + boundary + '--';      
				xhr.setRequestHeader('content-type', 'multipart/form-data; boundary=' + boundary);
				// Firefox 3.6 provides a feature sendAsBinary ()
				if(xhr.sendAsBinary != null) { 
					xhr.sendAsBinary(body); 
				// Chrome 7 sends data but you must use the base64_decode on the PHP side
				} else { 
					xhr.open('POST', targetPHP+'&up=true&base64=true', true);
					xhr.setRequestHeader('UP-FILENAME', file.name);
					xhr.setRequestHeader('UP-SIZE', file.size);
					xhr.setRequestHeader('UP-TYPE', file.type);
					xhr.send(window.btoa(bin));
				}
				if (show) {
					//var newFile  = document.createElement('div');
					//newFile.innerHTML = 'Loaded : '+file.name+' size '+file.size+' B';
					//document.getElementById(show).appendChild(newFile);	
				}
				if (last) {
					//location.reload(true);			
				}
				if (status) {
					document.getElementById(status).innerHTML = 'Loaded : 100%<br/>Next file ...';
					//location.reload(true);			
				}
			}
				
			// Loading errors
			this.loadError = function(event) {
				switch(event.target.error.code) {
					case event.target.error.NOT_FOUND_ERR:
						document.getElementById(status).innerHTML = 'File not found!';
					break;
					case event.target.error.NOT_READABLE_ERR:
						document.getElementById(status).innerHTML = 'File not readable!';
					break;
					case event.target.error.ABORT_ERR:
					break; 
					default:
						document.getElementById(status).innerHTML = 'Read error.';
				}	
			}
		
			// Reading Progress
			this.loadProgress = function(event) {
				if (event.lengthComputable) {
					var percentage = Math.round((event.loaded * 100) / event.total);
					document.getElementById(status).innerHTML = 'Loaded : '+percentage+'%';
				}				
			}
				
			// Preview images
			this.previewNow = function(event) {		
					location.reload(true);			
			}

		var reader = new FileReader();
		// Firefox 3.6, WebKit
		if(reader.addEventListener) { 
			reader.addEventListener('loadend', this.loadEnd, false);
			if (status != null) 
			{
				reader.addEventListener('error', this.loadError, false);
				reader.addEventListener('progress', this.loadProgress, false);
			}
		
		// Chrome 7
		} else { 
			reader.onloadend = this.loadEnd;
			if (status != null) 
			{
				reader.onerror = this.loadError;
				reader.onprogress = this.loadProgress;
			}
		}
		var preview = new FileReader();
		// Firefox 3.6, WebKit
		if(preview.addEventListener) { 
			preview.addEventListener('loadend', this.previewNow, false);
		// Chrome 7	
		} else { 
			preview.onloadend = this.previewNow;
		}
		
		// The function that starts reading the file as a binary string
     	reader.readAsBinaryString(file);
	     
    	// Preview uploaded files
    	if (show) {
	     	preview.readAsDataURL(file);
	 	}
		
  		// Safari 5 does not support FileReader
		} else {
			var xhr = new XMLHttpRequest();
			xhr.open('POST', targetPHP+'&up=true', true);
			xhr.setRequestHeader('UP-FILENAME', file.name);
			xhr.setRequestHeader('UP-SIZE', file.size);
			xhr.setRequestHeader('UP-TYPE', file.type);
			xhr.send(file); 
			
			if (status) {
				document.getElementById(status).innerHTML = 'Loaded : 100%';
				//location.reload(true);			

			}
			if (show) {
				//var newFile  = document.createElement('div');
				//newFile.innerHTML = 'Loaded : '+file.name+' size '+file.size+' B';
				//document.getElementById(show).appendChild(newFile);
				//location.reload(true);			
			}	
		}				
	}
	

	// Function drop file
	this.drop = function(event) {
		event.preventDefault();
	 	var dt = event.dataTransfer;
	 	var files = dt.files;
	 	for (var i = 0; i<files.length; i++) {
			var file = files[i];
			var valid = 0;
			var last = (i==files.length-1);
			// check that filename is valid
			if (show){
		        document.getElementById("upload-boxes").style.visibility = 'visible';
				document.getElementById(show).innerHTML = document.getElementById(show).innerHTML + '<br>' +file.name + '\t ' + Math.round(file.size/1000) +'KB';
			}
			
			if (file.size>10000000){ // 10Mb
			    valid=1;
			}
			
			if (!file.name.match(/^[0-9a-zA-Z_]+\.(jpg)$/))
			{
				valid=2;
			}
			
			// load file or show error message
			switch(valid)
			{
			case 0:
 				upload(file, last);
  				break;
			case 1:
  				document.getElementById(show).innerHTML = document.getElementById(show).innerHTML + '\t File above size limit';
  				break;
			case 2:
				document.getElementById(show).innerHTML = document.getElementById(show).innerHTML + '\t Wrong filename';
  				break;
			}		
	 	}
	}
	
	// The inclusion of the event listeners (DragOver and drop)

	this.uploadPlace =  document.getElementById(place);
	this.uploadPlace.addEventListener("dragover", function(event) {
		event.stopPropagation(); 
		event.preventDefault();
	}, true);
	this.uploadPlace.addEventListener("drop", this.drop, false); 

}

	