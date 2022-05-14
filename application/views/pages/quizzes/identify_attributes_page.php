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
	<?php 
    $this->load->view('templates/header'); 

    function output_answer_status($answer_status, $question_id) {
     if (isset($answer_status)) {
       echo $answer_status[$question_id];
      }
    }
    function create_header($answer_status, $question_id) {
      if (isset($answer_status)) {echo '<div class="header '.$answer_status[$question_id].'">' . $answer_status[$question_id] . "</div>";}
    }
    function output_is_correct_answer($correct_answers, $question_id, $answer_id) {
      if (!isset($correct_answers)) return;
      if (!isset($correct_answers[$question_id])) {echo "missing";}
      if ($correct_answers[$question_id] == $answer_id) {echo "correct";}
    }
    function answer($correct_answers, $question_id) {
      if (isset($correct_answers) && $correct_answers[$question_id]) {
        echo $correct_answers[$question_id];
      }
    }
    function question_number($question_id) {
      echo $question_id . ". ";
    }
  ?>
	<div class="container quiz">
    <form method="post" action="<?php echo base_url(); ?>quizzes/submit_attributes?id=2">
      <!--Question 1-->
      <div class="question <?php output_answer_status($answer_status, 1) ?>" id="question-1">
        <?php create_header($answer_status, 1) ?>
        <p><?php question_number(1) ?>What is an attribute in HTML?</p>

        <div class="answer <?php output_is_correct_answer($correct_answers, 1, 1) ?>">
          <input type="radio" id="a1" name="q1" value="1">
          <label for="a1">A quality regarded as a characteristic of someone or something.</label>
        </div>
        <div class="answer <?php output_is_correct_answer($correct_answers, 1, 2) ?>">
          <input type="radio" id="a2" name="q1" value="2">
          <label for="a2">An attribute is a value that is specified within an element's start tag after it's tag name.</label> 
        </div>
        <div class="answer <?php output_is_correct_answer($correct_answers, 1, 3) ?>">
          <input type="radio" id="a3" name="q1" value="3">
          <label for="a3">Something that is regarding as being caused by someone or something.</label>
        </div>
      </div>

      <!--Question 2-->
      <div class="question <?php output_answer_status($answer_status, 2) ?>" id="question-2">
      <?php create_header($answer_status, 2) ?>
        <p><?php question_number(2) ?>Which of the following correctly define the <code>href</code> attribute in an <code>&lt;a&gt;</code> tag?</p>

        <div class="answer <?php output_is_correct_answer($correct_answers, 2, 1) ?>">
          <input type="radio" id="a4" name="q2" value="1">
          <label for="a4"><code>&lt;a href-"https://www.google.co.uk"&gt;Example Link&lt;/a&gt;</code></label>
        </div>
        <div class="answer <?php output_is_correct_answer($correct_answers, 2, 2) ?>">
          <input type="radio"id="a5" name="q2" value="2">
          <label for="a5"><code>&lt;a "https://www.google.co.uk"&gt;Example Link&lt;/a&gt;</code></label> 
        </div>
        <div class="answer <?php output_is_correct_answer($correct_answers, 2, 3) ?>">
          <input type="radio" id="a6" name="q2" value="3">
          <label for="a6"><code>&lt;a href="https://www.google.co.uk"&gt;Example Link&lt;/a&gt;</code></label>
        </div>
      </div>

      <!--Question 3-->
      <div class="question <?php output_answer_status($answer_status, 3) ?>" id="question-3">
      <?php create_header($answer_status, 3) ?>
        <p><?php question_number(3) ?>Complete the syntax of the following code so it sets the width of the image to 500px:</p>

        <code class="example">
          &lt;img src="image.png" width="<u>&nbsp;&nbsp;</u>" height="450"&gt;
        </code>
        <input value="<?php answer($correct_answers, 3) ?>" id="textInput" class="short " name="q3_i" type="text" placeholder="Answer">
      </div>

      <!--Question 4-->
      <div class="question <?php output_answer_status($answer_status, 4) ?>" id="question-4">
      <?php create_header($answer_status, 4) ?>
        <p><?php question_number(4) ?>What standard does an attribute follow?</p>

        <div class="answer <?php output_is_correct_answer($correct_answers, 4, 1) ?>">
          <input type="radio" id="a7" name="q4" value="1">
          <label for="a7">Driver/Navigator</label>
        </div>
        <div class="answer <?php output_is_correct_answer($correct_answers, 4, 2) ?>">
          <input type="radio"id="a8" name="q4" value="2">
          <label for="a8">Ping-Pong</label> 
        </div>
        <div class="answer <?php output_is_correct_answer($correct_answers, 4, 3) ?>">
          <input type="radio" id="a9" name="q4" value="3">
          <label for="a9">Name/Value</label>
        </div>
      </div>

      <?php 
        if (isset($correct_answers)) {
          echo '<a class="link" href="'.base_url('index.php/dashboard').'">Back To Dashboard</a>';
        } else {
          echo '<input id="submitButton" type="submit" value="Submit">';
        }
      ?>

    </form>
  </div>
	<?php $this->load->view('templates/footer'); ?>
</body>
</html>


