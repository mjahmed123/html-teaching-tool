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
    <form>
      <div class="question">
        <p>What is a HTML tag?</p>

        <div class="answer">
          <input type="radio" id="age1" name="age" value="30">
          <label for="age1">A keyword that is used to describe the format of a webpage</label>
        </div>
        <div class="answer">
          <input type="radio" id="age2" name="age" value="60">
          <label for="age2">A tag used to indicate the price of an item</label> 
        </div>
        <div class="answer">
          <input type="radio" id="age3" name="age" value="100">
          <label for="age3">A word you use when playing tag</label>
        </div>
      </div>

      <div class="question">
        <p>Which of these have the correct syntax for a 'h1' tag?</p>

        <div class="answer">
          <input type="radio" id="age1" name="age" value="30">
          <label for="age1"><code>&lt;h1&gt;Example Header&lt;/h1&gt;</code></label>
        </div>
        <div class="answer">
          <input type="radio" id="age2" name="age" value="60">
          <label for="age2"><code>&lt;h1&gt;Example Header&lt;h1&gt;</code></label> 
        </div>
        <div class="answer">
          <input type="radio" id="age3" name="age" value="100">
          <label for="age3"><code>&lt;/h1&gt;Example Header&lt;/h1&gt;</code></label>
        </div>
      </div>

      <div class="question">
        <p>Complete the syntax of the code given below:</p>

        <code class="example">
          &lt;p&gt;This is a sample paragraph.<u>&nbsp;&nbsp;&nbsp;</u>
        </code>
        <input id="textInput" class="short" type="text" placeholder="Answer">
      </div>

      <input id="submitButton" type="submit" value="Submit">
    </form>
  </div>
	<?php $this->load->view('templates/footer'); ?>
</body>
</html>


