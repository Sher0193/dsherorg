<!DOCTYPE html>
<?php 
    function randomImgPath() {
        $images = glob("img/headers/{*.png, *.PNG}", GLOB_BRACE);
        if (is_array($images)) {
            shuffle($images);
            echo "src=\"" . $images[0] . "\"";
        }
    }
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title> Dylan's Website </title>
		<script type="text/javascript" src="scripts/header.js"></script>
	</head>
	<div class="header">
		<div class="top">
			<div class="image">
				<img width="225" <?php randomImgPath() ?>/>
			</div> <!-- end image -->
			<div class="title">
				<h1 class="heading"><strong class="capital">D</strong>YLAN <strong class="capital">S</strong>HERWOOD</h1>
				<h2 class="heading2"><a href="https://github.com/sher0193" style="text-decoration: none"> GITHUB</a> | <a href="resume.pdf" style="text-decoration: none">RESUME</a></h2>
			</div> <!-- end title -->
			<div class="atom">
                <img width="150" src="img/atom.png"/>
            </div>
		</div> <!-- end top -->
		<div class="info"> 
            <div id = "quote" class="quote-text">
                <script>loadQuote();</script>
			</div> <!-- end body text -->
		</div> <!-- end info -->

	</div> <!-- end header -->
