<?php session_start();?>
<html>

<head>
<title>Notebook | Display</title>
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->

<style>
/***Styling Css***/


/************************************************************************************
RESET
*************************************************************************************/
html, body, address, blockquote, div, dl, form, h1, h2, h3, h4, h5, h6, ol, p, pre, table, ul,
dd, dt, li, tbody, td, tfoot, th, thead, tr, button, del, ins, map, object,
a, abbr, acronym, b, bdo, big, br, cite, code, dfn, em, i, img, kbd, q, samp, small, span,
strong, sub, sup, tt, var, legend, fieldset {
	margin: 0;
	padding: 0;
}

img, fieldset {
	border: 0;
}

/* set image max width to 100% */
img #display {
	max-width: 100%;
	height: auto;
	width: auto\9; /* ie8 */
}

/* set html5 elements to block */
article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section { 
    display: block;
}

/************************************************************************************
GENERAL STYLING
*************************************************************************************/
body {
	background: #0d1424 url(images/home_bg.jpg) no-repeat center top;
	font: .81em/150% Arial, Helvetica, sans-serif;
	color: #666;
}
a {
	color: #026acb;
	text-decoration: none;
	outline: none;
}
a:hover {
	text-decoration: underline;
}
p {
	margin: 0 0 1.2em;
	padding: 0;
}

/* list */
ul, ol {
	margin: 1em 0 1.4em 24px;
	padding: 0;
	line-height: 140%;
}
li {
	margin: 0 0 .5em 0;
	padding: 0;
}

/* headings */
h1, h2, h3, h4, h5, h6 {
	line-height: 1.4em;
	margin: 20px 0 .4em;
	color: #000;
}
h1 {
	font-size: 2em;
}
h2 {
	font-size: 1.6em;
}
h3 {
	font-size: 1.4em;
}
h4 {
	font-size: 1.2em;
}
h5 {
	font-size: 1.1em;
}
h6 {
	font-size: 1em;
}

/* reset webkit search input styles */
input[type=search] {
	-webkit-appearance: none;
	outline: none;
}
input[type="search"]::-webkit-search-decoration, 
input[type="search"]::-webkit-search-cancel-button {
	display: none;
}

/************************************************************************************
STRUCTURE
*************************************************************************************/
#pagewrap {
	width: 980px;
	margin: 0 auto;
}

/************************************************************************************
HEADER
*************************************************************************************/
#header {
	position: relative;
	height: 160px;
}

/* site logo */
logo {
position: relative;
top: 35px;
width: 30%;
height: auto;
}
#logo a {
font: bold 30px/100% Arial, Helvetica, sans-serif;
color: #fff;
text-decoration: none;
}

/* site description */
#site-description {
	font: italic 100%/130% "Times New Roman", Times, serif;
	color: #fff;
	position: absolute;
	top: 55px;
}

/* searchform */
#searchform {
	position: absolute;
	right: 10px;
	bottom: 6px;
	z-index: 100;
	width: 160px;
}
#searchform #s {
	width: 140px;
	float: right;
	background: #fff;
	border: none;
	padding: 6px 10px;
	/* border radius */
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	/* box shadow */
	-webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,.2);
	-moz-box-shadow: inset 0 1px 2px rgba(0,0,0,.2);
	box-shadow: inset 0 1px 2px rgba(0,0,0,.2);
	/* transition */
	-webkit-transition: width .7s;
	-moz-transition: width .7s;
	transition: width .7s;
}

/************************************************************************************
MAIN NAVIGATION
*************************************************************************************/
#main-nav {
	width: 100%;
	background: #ccc;
	margin: 0;
	padding: 0;
	position: absolute;
	left: 0;
	bottom: 0;
	z-index: 100;
	/* gradient */
	background: #6a6a6a url(images/nav-bar-bg.png) repeat-x;
	background: -webkit-gradient(linear, left top, left bottom, from(#b9b9b9), to(#6a6a6a));
	background: -moz-linear-gradient(top,  #b9b9b9,  #6a6a6a);
	background: linear-gradient(-90deg, #b9b9b9, #6a6a6a);
	/* rounded corner */
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	border-radius: 8px;
	/* box shadow */
	-webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,.3), 0 1px 1px rgba(0,0,0,.4);
	-moz-box-shadow: inset 0 1px 0 rgba(255,255,255,.3), 0 1px 1px rgba(0,0,0,.4);
	box-shadow: inset 0 1px 0 rgba(255,255,255,.3), 0 1px 1px rgba(0,0,0,.4);
}
#main-nav li {
	margin: 0;
	padding: 0;
	list-style: none;
	float: left;
	position: relative;
}
#main-nav li:first-child {
	margin-left: 10px;
}
#main-nav a {
	line-height: 100%;
	font-weight: bold;
	color: #fff;
	display: block;
	padding: 14px 15px;
	text-decoration: none;
	text-shadow: 0 -1px 0 rgba(0,0,0,.5);
}
#main-nav a:hover {
	color: #fff;
	background: #474747;
	/* gradient */
	background: -webkit-gradient(linear, left top, left bottom, from(#282828), to(#4f4f4f));
	background: -moz-linear-gradient(top,  #282828,  #4f4f4f);
	background: linear-gradient(-90deg, #282828, #4f4f4f);
}

/************************************************************************************
CONTENT
*************************************************************************************/
#comment div {background: #474747;

background: -webkit-gradient(linear, left top, left bottom, from(#282828), to(#4f4f4f));
    background: -moz-linear-gradient(top,  #282828,  #4f4f4f);
        background: linear-gradient(-90deg, #282828, #4f4f4f);



}
#content {
	
	background:url('note.jpg') 60%;	
	margin: 30px 0 30px;
	padding: 20px 35px;
	width: 600px;
	float: left;
	/* rounded corner */
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	border-radius: 8px;
	/* box shadow */
	-webkit-box-shadow: 0 1px 3px rgba(0,0,0,.4);
	-moz-box-shadow: 0 1px 3px rgba(0,0,0,.4);
	box-shadow: 0 1px 3px rgba(0,0,0,.4);
}


/* post image */
#display {
	margin: 0 0 15px;
	height:auto;
	width:100%;
}

/************************************************************************************
SIDEBAR
*************************************************************************************/
#sidebar {
	width: 280px;
	float: right;
	margin: 30px 0 30px;
}
.widget {
	background: #fff;
	margin: 0 0 30px;
	padding: 10px 20px;
	/* rounded corner */
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	border-radius: 8px;
	/* box shadow */
	-webkit-box-shadow: 0 1px 3px rgba(0,0,0,.4);
	-moz-box-shadow: 0 1px 3px rgba(0,0,0,.4);
	box-shadow: 0 1px 3px rgba(0,0,0,.4);
}
.widgettitle {
	margin: 0 0 5px;
	padding: 0;	
}
.widget ul {
	margin: 0;
	padding: 0;
}
.widget li {
	margin: 0;
	padding: 6px 0;
	list-style: none;
	clear: both;
	border-top: solid 1px #eee;
}

/* flickr widget */
.widget .flickr_badge_image {
	margin-top: 10px;
}
.widget .flickr_badge_image img {
	width: 48px;
	height: 48px;
	margin-right: 12px;
	margin-bottom: 12px;
	float: left;
}

/************************************************************************************
FOOTER
*************************************************************************************/
#footer {
	clear: both;
	color: #ccc;
	font-size: 85%;
}
#footer a {
	color: #fff;
}

/************************************************************************************
CLEARFIX
*************************************************************************************/
.clearfix:after { visibility: hidden; display: block; font-size: 0; content: " "; clear: both; height: 0; }
.clearfix { display: inline-block; }
.clearfix { display: block; zoom: 1; }
/*Main Structure Css*/

#pagewrap {
	width: 980px;
	margin: 0 auto;
}

#header {
	height: 160px;
}

#content {
	width: 600px;
	float: left;
}

#sidebar {
	width: 280px;
	float: right;
}

#footer {
	clear: both;
}


/***Mediaqueries**/
@media screen and (max-width: 980px) {

	#pagewrap {
		width: 95%;
	}

	#content {
		width: 60%;
		padding: 3% 4%;
	}

	#sidebar {
		width: 30%;
	}
	#sidebar .widget {
		padding: 8% 7%;
		margin-bottom: 10px;
	}

}@media screen and (max-width: 650px) {

	#header {
		height: auto;
	}

	#searchform {
		position: absolute;
		top: 5px;
		right: 0;
	}

	#main-nav {
		position: static;
	}

	#site-logo {
		margin: 15px 100px 5px 0;
		position: static;
	}

	#site-description {
		margin: 0 0 15px;
		position: static;
	}

	#content {
		width: auto;
		float: none;
		margin: 20px 0;
	}

	#sidebar {
		width: 100%;
		float: none;
		margin: 0;
	}
@media screen and (max-width: 480px) {

	html {
		-webkit-text-size-adjust: none;
	}

	#main-nav a {
		font-size: 90%;
		padding: 10px 8px;
	}

}img {
	max-width: 100%;
	height: auto;
	width: auto\9; /* ie8 */
}

</style>
</head>
<body>

<div id="pagewrap">

	<header id="header">
	
				<hgroup>
			<div id=logo><a href="home.php"><img src="./images/home_logo.png"></a></div>
			
		</hgroup>
		
		<div>		
		<nav>
			<ul id="main-nav" class="clearfix">
				<li><a href="home.php">HOME</a></li>
				<li><a href="profile.php?id=<?php echo $_SESSION['id']; ?>">PROFILE</a></li>
				<li><a href="upload.php">UPLOAD</a></li>
				

			</ul>
		</nav>
		</div>
		<div>

		<form id="searchform" method=post action='searchit.php'  >
			<input name=searched type="search" id="s" placeholder="Search" >
		</form>
		<div>


	</header>
	
	<div id="content">
				
		<h2><?php $newsql = new mysqli("localhost","root","ishallcallhimsebastian","notebook"); $res = $newsql->query("select time, name, perid, ext from images where imid=".$_GET['imid'])->fetch_assoc(); echo $res['name']; ?></h2><br>
		<h4><?php $pes = $newsql->query("select name from users where id=".$res['perid'])->fetch_assoc(); echo "By ".$pes['name']." at ".$res['time'];?></h4>
		<img src=<?php echo "./users/".$res['perid']."/".$_GET['imid'].".".$res['ext']; ?>>
		
	</div>
	
	<aside id="sidebar">

		
	<section id=widget class="widget clearfix">
<h4 class="widgettitle">Comments</h4>
			<div class=comment><form name="input" action="makecomment.php" method="post">
            Your Views:<input type="text" name="comment">
            <input type="hidden" name="image" value="<?php echo $_GET['imid']; ?>">
            <input type="submit" value="Submit">
            </form>
            <div class="comments">
            <?php include "getcomments.php"; ?>
            </div>
            </div>
		</section>
						
	</aside>

	<footer id="footer">
		BY Sanely Insane
	</footer>
	
</div>
</body>
