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
    <form method="post" action="<?php echo base_url(); ?>quizzes/submit_forms?id=4">
      <!--Question 1-->
      <div class="question <?php output_answer_status($answer_status, 1) ?>" id="question-1">
        <?php create_header($answer_status, 1) ?>
        <p><?php question_number(1) ?>What is a form in HTML?</p>

        <div class="answer <?php output_is_correct_answer($correct_answers, 1, 1) ?>">
          <input type="radio" id="a1" name="q1" value="1">
          <label for="a1">An element used to collect user input date.</label>
        </div>
        <div class="answer <?php output_is_correct_answer($correct_answers, 1, 2) ?>">
          <input type="radio" id="a2" name="q1" value="2">
          <label for="a2">A particular way in which a thing appears.</label> 
        </div>
        <div class="answer <?php output_is_correct_answer($correct_answers, 1, 3) ?>">
          <input type="radio" id="a3" name="q1" value="3">
          <label for="a3">Something that is defined as bringing together or a combination of things.</label>
        </div>
      </div>

      <!--Question 2-->
      <div class="question <?php output_answer_status($answer_status, 2) ?>" id="question-2">
      <?php create_header($answer_status, 2) ?>
        <p><?php question_number(2) ?>Which of the following is one of the many input elements contained in any form?</p>

        <div class="answer <?php output_is_correct_answer($correct_answers, 2, 1) ?>">
          <input type="radio" id="a4" name="q2" value="1">
          <label for="a4">Text Fields.</label>
        </div>
        <div class="answer <?php output_is_correct_answer($correct_answers, 2, 2) ?>">
          <input type="radio"id="a5" name="q2" value="2">
          <label for="a5">Mouse and Keyboard.<label> 
        </div>
        <div class="answer <?php output_is_correct_answer($correct_answers, 2, 3) ?>">
          <input type="radio" id="a6" name="q2" value="3">
          <label for="a6">Footer</label>
        </div>
      </div>

      <!--Question 3-->
      <div class="question <?php output_answer_status($answer_status, 3) ?>" id="question-3">
      <?php create_header($answer_status, 3) ?>
        <p><?php question_number(3) ?>Complete the syntax of the following code so that it makes the input type a text field:</p>

        <code class="example">
          &lt;input type="<u>&nbsp;&nbsp;</u>" name="surname" id="surname"&gt;
        </code>
        <input value="<?php answer($correct_answers, 3) ?>" id="textInput" class="short " name="q3_i" type="text" placeholder="Answer">
      </div>

      <!--Question 4-->
      <div class="question <?php output_answer_status($answer_status, 4) ?>" id="question-4">
      <?php create_header($answer_status, 4) ?>
        <p><?php question_number(4) ?>Which of these best describe a radio button?</p>

        <div class="answer <?php output_is_correct_answer($correct_answers, 4, 1) ?>">
          <input type="radio" id="a7" name="q4" value="1">
          <label for="a7">An element that allows you to input text into a field.</label>
        </div>
        <div class="answer <?php output_is_correct_answer($correct_answers, 4, 2) ?>">
          <input type="radio"id="a8" name="q4" value="2">
          <label for="a8">An element that allows you to only select one option out of a range of options.</label> 
        </div>
        <div class="answer <?php output_is_correct_answer($correct_answers, 4, 3) ?>">
          <input type="radio" id="a9" name="q4" value="3">
          <label for="a9">An element that allows you to select multiple options simultaneously.</label>
        </div>
      </div>

      <!--Question 5-->
      <div class="question <?php output_answer_status($answer_status, 5) ?>" id="question-5">
      <?php create_header($answer_status, 5) ?>
        <p><?php question_number(5) ?>Which of these best describe checkboxes?</p>

        <div class="answer <?php output_is_correct_answer($correct_answers, 5, 1) ?>">
          <input type="radio" id="a10" name="q5" value="1">
          <label for="a10">An element that allows you to input text into a field.</label>
        </div>
        <div class="answer <?php output_is_correct_answer($correct_answers, 5, 2) ?>">
          <input type="radio"id="a11" name="q5" value="2">
          <label for="a11">An element that allows you to only select one option out of a range of options.</label> 
        </div>
        <div class="answer <?php output_is_correct_answer($correct_answers, 5, 3) ?>">
          <input type="radio" id="a12" name="q5" value="3">
          <label for="a12">An element that allows you to select multiple options simultaneously.</label>
        </div>
      </div>

      <!--Question 6-->
      <div class="question <?php output_answer_status($answer_status, 6) ?>" id="question-6">
      <?php create_header($answer_status, 6) ?>
        <p><?php question_number(6) ?>Which of these best describe a textbox?</p>

        <div class="answer <?php output_is_correct_answer($correct_answers, 6, 1) ?>">
          <input type="radio" id="a13" name="q6" value="1">
          <label for="a13">An element that allows you to input information into a field.</label>
        </div>
        <div class="answer <?php output_is_correct_answer($correct_answers, 6, 2) ?>">
          <input type="radio"id="a14" name="q6" value="2">
          <label for="a14">An element that allows you to only select one option out of a range of options.</label> 
        </div>
        <div class="answer <?php output_is_correct_answer($correct_answers, 6, 3) ?>">
          <input type="radio" id="a15" name="q6" value="3">
          <label for="a15">An element that allows you to select multiple options simultaneously.</label>
        </div>
      </div>

      <!--Question 7-->
      <div class="question <?php output_answer_status($answer_status, 7) ?>" id="question-7">
      <?php create_header($answer_status, 7) ?>
        <p><?php question_number(7) ?>Complete the syntax of the following code so that the submit button's text displays <code>complete</code> :</p>

        <code class="example">
          &lt;input type="submit" id="submit" name="submit" value="<u>&nbsp;&nbsp;</u>" &gt;
        </code>
        <input value="<?php answer($correct_answers, 3) ?>" id="textInput" class="short " name="q7_i" type="text" placeholder="Answer">
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


