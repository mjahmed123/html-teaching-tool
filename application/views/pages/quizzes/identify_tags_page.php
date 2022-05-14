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
    <form method="post" action="<?php echo base_url(); ?>quizzes/submit_tags?id=1">
      <!--Question 1-->
      <div class="question <?php output_answer_status($answer_status, 1) ?>" id="question-1">
        <?php create_header($answer_status, 1) ?>
        <p><?php question_number(1) ?>What is a HTML tag?</p>

        <div class="answer <?php output_is_correct_answer($correct_answers, 1, 1) ?>">
          <input type="radio" id="a1" name="q1" value="1">
          <label for="a1">A keyword that is used to describe the format of a webpage</label>
        </div>
        <div class="answer <?php output_is_correct_answer($correct_answers, 1, 2) ?>">
          <input type="radio" id="a2" name="q1" value="2">
          <label for="a2">A tag used to indicate the price of an item</label> 
        </div>
        <div class="answer <?php output_is_correct_answer($correct_answers, 1, 3) ?>">
          <input type="radio" id="a3" name="q1" value="3">
          <label for="a3">A word you use when playing tag</label>
        </div>
      </div>

      <!--Question 2-->
      <div class="question <?php output_answer_status($answer_status, 2) ?>" id="question-2">
      <?php create_header($answer_status, 2) ?>
        <p><?php question_number(2) ?>Which of these have the correct syntax for a <code>h1</code> tag?</p>

        <div class="answer <?php output_is_correct_answer($correct_answers, 2, 1) ?>">
          <input type="radio" id="a4" name="q2" value="1">
          <label for="a4"><code>&lt;h1&gt;Example Header&lt;/h1&gt;</code></label>
        </div>
        <div class="answer <?php output_is_correct_answer($correct_answers, 2, 2) ?>">
          <input type="radio"id="a5" name="q2" value="2">
          <label for="a5"><code>&lt;h1&gt;Example Header&lt;h1&gt;</code></label> 
        </div>
        <div class="answer <?php output_is_correct_answer($correct_answers, 3, 3) ?>">
          <input type="radio" id="a6" name="q2" value="3">
          <label for="a6"><code>&lt;/h1&gt;Example Header&lt;/h1&gt;</code></label>
        </div>
      </div>

      <!--Question 3-->
      <div class="question <?php output_answer_status($answer_status, 3) ?>" id="question-3">
      <?php create_header($answer_status, 3) ?>
        <p><?php question_number(3) ?>Complete the syntax of the code given below:</p>

        <code class="example">
          &lt;p&gt;This is a sample paragraph.<u>&nbsp;&nbsp;&nbsp;</u>
        </code>
        <input value="<?php answer($correct_answers, 3) ?>" id="textInput" class="short " name="q3_i" type="text" placeholder="Answer">
      </div>

      <!--Question 4-->
      <div class="question <?php output_answer_status($answer_status, 4) ?>" id="question-4">
      <?php create_header($answer_status, 4) ?>
        <p><?php question_number(4) ?>Which of the following contain all the metadata for a webpage?</p>

        <div class="answer <?php output_is_correct_answer($correct_answers, 4, 1) ?>">
          <input type="radio" id="a7" name="q4" value="1">
          <label for="a7"><code>&lt;footer&gt;</code></label>
        </div>
        <div class="answer <?php output_is_correct_answer($correct_answers, 4, 2) ?>">
          <input type="radio"id="a8" name="q4" value="2">
          <label for="a8"><code>&lt;body&gt;</code></label> 
        </div>
        <div class="answer <?php output_is_correct_answer($correct_answers, 4, 3) ?>">
          <input type="radio" id="a9" name="q4" value="3">
          <label for="a9"><code>&lt;head&gt;</code></label>
        </div>
      </div>

      <!--Question 5-->
      <div class="question <?php output_answer_status($answer_status, 5) ?>" id="question-5">
      <?php create_header($answer_status, 5) ?>
        <p><?php question_number(5) ?>Which of the following is the correct way to create a comment?</p>

        <div class="answer <?php output_is_correct_answer($correct_answers, 5, 1) ?>">
          <input type="radio" id="a10" name="q5" value="1">
          <label for="a10"><code>&lt;--This is an example comment--&gt;</code></label>
        </div>
        <div class="answer <?php output_is_correct_answer($correct_answers, 5, 2) ?>">
          <input type="radio"id="a11" name="q5" value="2">
          <label for="a11"><code>&lt;!--This is an example comment--!&gt;</code></label> 
        </div>
        <div class="answer <?php output_is_correct_answer($correct_answers, 5, 3) ?>">
          <input type="radio" id="a12" name="q5" value="3">
          <label for="a12"><code>&lt;!--This is an example comment--&gt;</code></label>
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


