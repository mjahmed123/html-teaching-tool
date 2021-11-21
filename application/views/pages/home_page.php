<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<?php 
		echo link_tag('css/global.css');
		echo link_tag('css/homeStyle.css');
		echo link_tag('css/headerStyle.css');
	?>
	<script src="<?php echo site_url('js/darkMode.js'); ?>"></script>
	<script src="<?php echo site_url('js/header.js'); ?>"></script>
	<title>HTML Teaching Tool</title>
</head>
<body>
	<?php $this->load->view('templates/header'); ?>
	<div class="container home-page">
		<div class="title">&lt; <span>HTML Teaching Tool</span> /&gt;</div>
		<div class="description">Learn the fundamental languages for developing websites.</div>
		<div class="buttons">
			<a class="button start-button" href="/register">Get Started!</a>
			<a class="button" href="/register">Learn More!</a>
		</div>
	</div>
</body>
</html>