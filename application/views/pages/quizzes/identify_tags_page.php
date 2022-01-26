<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
		echo link_tag('css/global.css');
		echo link_tag('css/headerStyle.css');
		echo link_tag('css/footerStyle.css');
		echo link_tag('css/quizStyle.css');

	?>
	<script src="<?php echo site_url('js/darkMode.js'); ?>"></script>
	<script src="<?php echo site_url('js/header.js'); ?>"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HTML Teaching Tool</title>
</head>
<body>
	<?php $this->load->view('templates/header'); ?>
	<div class="container quiz">
    <form method="post" action="<?php echo base_url(); ?>quizzes/submit?id=1">
      <div class="question" id="question-1">
        <p>What is a HTML tag?</p>

        <div class="answer">
          <input type="radio" id="a1" name="q1a1" value="1">
          <label for="a1">A keyword that is used to describe the format of a webpage</label>
        </div>
        <div class="answer">
          <input type="radio" id="a2" name="q1a2" value="2">
          <label for="a2">A tag used to indicate the price of an item</label> 
        </div>
        <div class="answer">
          <input type="radio" id="a3" name="q1a3" value="3">
          <label for="a3">A word you use when playing tag</label>
        </div>
      </div>

      <div class="question" id="question-2">
        <p>Which of these have the correct syntax for a 'h1' tag?</p>

        <div class="answer">
          <input type="radio" id="a4" name="q2a1" value="1">
          <label for="a4"><code>&lt;h1&gt;Example Header&lt;/h1&gt;</code></label>
        </div>
        <div class="answer">
          <input type="radio" id="a5" name="q2a2" value="2">
          <label for="a5"><code>&lt;h1&gt;Example Header&lt;h1&gt;</code></label> 
        </div>
        <div class="answer">
          <input type="radio" id="a6" name="q2a3" value="3">
          <label for="a6"><code>&lt;/h1&gt;Example Header&lt;/h1&gt;</code></label>
        </div>
      </div>

      <div class="question" id="question-3">
        <p>Complete the syntax of the code given below:</p>

        <code class="example">
          &lt;p&gt;This is a sample paragraph.<u>&nbsp;&nbsp;&nbsp;</u>
        </code>
        <input id="textInput" class="short" name="q3a1_i" type="text" placeholder="Answer">
      </div>

      <input id="submitButton" type="submit" value="Submit">
    </form>
  </div>
	<?php $this->load->view('templates/footer'); ?>
</body>
</html>


