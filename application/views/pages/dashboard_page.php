<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
		echo link_tag('css/global.css');
		echo link_tag('css/headerStyle.css');
		echo link_tag('css/footerStyle.css');
		echo link_tag('css/dashboardStyle.css');
	?>
	<script src="<?php echo site_url('js/darkMode.js'); ?>"></script>
	<script src="<?php echo site_url('js/header.js'); ?>"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HTML Teaching Tool</title>
</head>
<body>
	<?php $this->load->view('templates/header'); ?>
	<div class="container dashboard">
		<h1>Select a category:</h1>
		<div class="categories">
			<a href="/dashboard/tags" class="category">Tags</a>
			<a href="#" class="category">Attributes</a>
			<a href="#" class="category">Styles</a>
			<a href="#" class="category">Forms</a>
			<a href="#" class="category">Media</a>
			<a href="#" class="category">References</a>
		</div>
	</div>
	<?php $this->load->view('templates/footer'); ?>
</body>
</html>