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
			<div class="category">Tags</div>
			<div class="category">Attributes</div>
			<div class="category">Styles</div>
			<div class="category">Forms</div>
			<div class="category">Media</div>
			<div class="category">References</div>
		</div>
	</div>
	<?php $this->load->view('templates/footer'); ?>
</body>
</html>