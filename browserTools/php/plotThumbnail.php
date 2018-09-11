<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">

<title>LabelMe. The Open annotation tool</title>

<link href="../css/main4.css" rel="stylesheet" type="text/css" />

<script type='text/javascript'>
var folder_hierarchy = new Array();
folder_hierarchy[0]='';
Nlevels=1;
folder='';
parent='';


function getUrlVars() {
  var vars = {};
  var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
  vars[key] = value;
  });
  return vars;
}



function onClickOpenImage() {
href="https://ec2-18-218-135-42.us-east-2.compute.amazonaws.com/tool.html?collection=LabelMe&mode=f&folder=" + getUrlVars()['folder'] + "/&image=" + getUrlVars()['image'];
console.log(href);

window.open( href , false);

  return true;
}
function restoreOpacity(id){
	document.getElementById(id).style.opacity=1;
}

function decreaseOpacity(id){
	document.getElementById(id).style.opacity=0.7;
}

function getImageUrl() {


//document.getElementById('album_id').getElementById('image0').src =

return "https://ec2-18-218-135-42.us-east-2.compute.amazonaws.com/Images/" + getUrlVars()['folder'] + "/" + getUrlVars()['image'];


}

</script>

</head>

<body>
  
  <div class="album" id="album_id">
    <a id="click_link" onclick="javascript:onClickOpenImage()"  target="_blank"  onmouseover="decreaseOpacity('image0');"  onmouseout="restoreOpacity('image0');" >
      <img id="image0"   style="padding:0px; height:128px;  width:128px;">
    </a>
    <div class="image-title" style="max-width:128px" title="">
     
    </div>
  </div>
  <script type='text/javascript'>
    document.getElementById('album_id').children[0].children[0].src =  "https://ec2-18-218-135-42.us-east-2.compute.amazonaws.com/Images/" + getUrlVars()['folder'] + "/" + getUrlVars()['image'];
    document.getElementById('album_id').children[1].innerHTML = getUrlVars()['image'];
  </script>

</body>
</html>


