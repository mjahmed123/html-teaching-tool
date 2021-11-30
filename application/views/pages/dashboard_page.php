<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
		echo link_tag('css/global.css');
		echo link_tag('css/headerStyle.css');
		echo link_tag('css/dashboardStyle.css');
	?>
	<script src="<?php echo site_url('js/darkMode.js'); ?>"></script>
	<script src="<?php echo site_url('js/header.js'); ?>"></script>
	<title>HTML Teaching Tool</title>
</head>
<body>
	<?php $this->load->view('templates/header'); ?>
	<div class="container">
		<div class="categories">
			<div class="category">category</div>
			<div class="category">category</div>
			<div class="category">category</div>
			<div class="category">category</div>
			<div class="category">category</div>
			<div class="category">category</div>
		</div>
	</div>
</body>
</html>