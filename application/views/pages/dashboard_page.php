<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
		echo link_tag('css/global.css');
		echo link_tag('css/headerStyle.css');
		echo link_tag('css/footerStyle.css');
		echo link_tag('css/dashboardStyle.css');



		function percentage($completed_quizzes, $category_id) {
			$quiz_completed = null;
			for ($i=0; $i < count($completed_quizzes); $i++) {
				if ($completed_quizzes[$i]->category_id == $category_id) {
					$quiz_completed = $completed_quizzes[$i];
					break;
				}
			}

			if (empty($quiz_completed)) {
				return "";
			} 
			$score = $quiz_completed->score;
			$correct_answers = explode("/" , $score)[0];
			$total_answers = explode("/" , $score)[1];
			$percentage = ($correct_answers / $total_answers ) * 100;
			return $percentage . "%";
		}


	?>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
			<a href="/categories/tags" class="category">
				<div class="material-icons">code</div>
				Tags
				<div class="score"><?php echo percentage($completed_quizzes, 0) ?></div>
			</a>
			<a href="/categories/attributes" class="category">
			<div class="material-icons">tune</div>

				Attributes
				<div class="score"><?php echo percentage($completed_quizzes, 1) ?></div>

			</a>
			<a href="/categories/styles" class="category">
			<div class="material-icons">format_color_fill</div>

			Styles
			</a>
			<a href="/categories/forms" class="category">
			<div class="material-icons">list_alt</div>

			Forms
			</a>
			<a href="/categories/media" class="category">
			<div class="material-icons">play_circle</div>

			Media
		</a>
			<a href="/categories/references" class="category">
			<div class="material-icons">help</div>
	
			References
		</a>
		</div>
	</div>
	<?php $this->load->view('templates/footer'); ?>
</body>
</html>