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
    <form method="post" action="<?php echo base_url(); ?>quizzes/submit_styles?id=3">
      <!--Question 1-->
      <div class="question <?php output_answer_status($answer_status, 1) ?>" id="question-1">
        <?php create_header($answer_status, 1) ?>
        <p><?php question_number(1) ?>What are styles?</p>

        <div class="answer <?php output_is_correct_answer($correct_answers, 1, 1) ?>">
          <input type="radio" id="a1" name="q1" value="1">
          <label for="a1">Styles are used to define an element or document's style information.</label>
        </div>
        <div class="answer <?php output_is_correct_answer($correct_answers, 1, 2) ?>">
          <input type="radio" id="a2" name="q1" value="2">
          <label for="a2">Something that is designed or made in a particular form.</label> 
        </div>
        <div class="answer <?php output_is_correct_answer($correct_answers, 1, 3) ?>">
          <input type="radio" id="a3" name="q1" value="3">
          <label for="a3">An aesthetic or appearance that is judgded by others in terms of being fashionable.</label>
        </div>
      </div>

      <!--Question 2-->
      <div class="question <?php output_answer_status($answer_status, 2) ?>" id="question-2">
      <?php create_header($answer_status, 2) ?>
        <p><?php question_number(2) ?>What are the three different types of styling?</p>

        <div class="answer <?php output_is_correct_answer($correct_answers, 2, 1) ?>">
          <input type="radio" id="a4" name="q2" value="1">
          <label for="a4">Interior, Exterior and Visible.</label>
        </div>
        <div class="answer <?php output_is_correct_answer($correct_answers, 2, 2) ?>">
          <input type="radio"id="a5" name="q2" value="2">
          <label for="a5">Internal, External and Outline.<label> 
        </div>
        <div class="answer <?php output_is_correct_answer($correct_answers, 2, 3) ?>">
          <input type="radio" id="a6" name="q2" value="3">
          <label for="a6">Internal, External and Inline.</label>
        </div>
      </div>

      <!--Question 3-->
      <div class="question <?php output_answer_status($answer_status, 3) ?>" id="question-3">
      <?php create_header($answer_status, 3) ?>
        <p><?php question_number(3) ?>Complete the syntax of the following code:</p>

        <code class="example">
          &lt;link rel="<u>&nbsp;&nbsp;</u>" href="styles.css"&gt;
        </code>
        <input value="<?php answer($correct_answers, 3) ?>" id="textInput" class="short " name="q3_i" type="text" placeholder="Answer">
      </div>

      <!--Question 4-->
      <div class="question <?php output_answer_status($answer_status, 4) ?>" id="question-4">
      <?php create_header($answer_status, 4) ?>
        <p><?php question_number(4) ?>In which tag should the above link tag be placed in between to link an external css file?</p>

        <div class="answer <?php output_is_correct_answer($correct_answers, 4, 1) ?>">
          <input type="radio" id="a7" name="q4" value="1">
          <label for="a7"><code>&lt;main&gt;</code></label>
        </div>
        <div class="answer <?php output_is_correct_answer($correct_answers, 4, 2) ?>">
          <input type="radio"id="a8" name="q4" value="2">
          <label for="a8"><code>&lt;head&gt;</code></label> 
        </div>
        <div class="answer <?php output_is_correct_answer($correct_answers, 4, 3) ?>">
          <input type="radio" id="a9" name="q4" value="3">
          <label for="a9"><code>&lt;body&gt;</code></label>
        </div>
      </div>

      <!--Question 5-->
      <div class="question <?php output_answer_status($answer_status, 5) ?>" id="question-5">
      <?php create_header($answer_status, 5) ?>
        <p><?php question_number(5) ?>Which of the following best describes inline styling?</p>

        <div class="answer <?php output_is_correct_answer($correct_answers, 5, 1) ?>">
          <input type="radio" id="a10" name="q5" value="1">
          <label for="a10">A type of styling where all the selectors and properties are moved to a different file.</label>
        </div>
        <div class="answer <?php output_is_correct_answer($correct_answers, 4, 2) ?>">
          <input type="radio"id="a11" name="q5" value="2">
          <label for="a11">A type of styling where the selectors and properties are defined at the top of the HTML file.</label> 
        </div>
        <div class="answer <?php output_is_correct_answer($correct_answers, 4, 3) ?>">
          <input type="radio" id="a12" name="q5" value="3">
          <label for="a12">A type of styling where the style is defined within the style attribute of a tag.</label>
        </div>
      </div>

      <!--Question 6-->
      <div class="question <?php output_answer_status($answer_status, 6) ?>" id="question-6">
      <?php create_header($answer_status, 6) ?>
        <p><?php question_number(6) ?>Which of the following best describes internal styling?</p>

        <div class="answer <?php output_is_correct_answer($correct_answers, 6, 1) ?>">
          <input type="radio" id="a13" name="q6" value="1">
          <label for="a13">A type of styling where all the selectors and properties are moved to a different file.</label>
        </div>
        <div class="answer <?php output_is_correct_answer($correct_answers, 4, 2) ?>">
          <input type="radio"id="a14" name="q6" value="2">
          <label for="a14">A type of styling where the selectors and properties are defined at the top of the HTML file.</label> 
        </div>
        <div class="answer <?php output_is_correct_answer($correct_answers, 4, 3) ?>">
          <input type="radio" id="a15" name="q6" value="3">
          <label for="a15">A type of styling where the style is defined within the style attribute of a tag.</label>
        </div>
      </div>

      <!--Question 7-->
      <div class="question <?php output_answer_status($answer_status, 7) ?>" id="question-7">
      <?php create_header($answer_status, 7) ?>
        <p><?php question_number(7) ?>Which of the following best describes external styling?</p>

        <div class="answer <?php output_is_correct_answer($correct_answers, 7, 1) ?>">
          <input type="radio" id="a16" name="q7" value="1">
          <label for="a16">A type of styling where all the selectors and properties are moved to a different file.</label>
        </div>
        <div class="answer <?php output_is_correct_answer($correct_answers, 4, 2) ?>">
          <input type="radio"id="a17" name="q7" value="2">
          <label for="a17">A type of styling where the selectors and properties are defined at the top of the HTML file.</label> 
        </div>
        <div class="answer <?php output_is_correct_answer($correct_answers, 4, 3) ?>">
          <input type="radio" id="a18" name="q7" value="3">
          <label for="a18">A type of styling where the style is defined within the style attribute of a tag.</label>
        </div>
      </div>

      <!--Question 8-->
      <div class="question <?php output_answer_status($answer_status, 8) ?>" id="question-8">
      <?php create_header($answer_status, 8) ?>
        <p><?php question_number(8) ?>Complete the syntax of the following code so that the colour of the text is green:</p>

        <code class="example">
          &lt;div style="color: <u>&nbsp;&nbsp;</u>"&gt;Example Text&lt;/div&gt;
        </code>
        <input value="<?php answer($correct_answers, 8) ?>" id="textInput" class="short " name="q8_i" type="text" placeholder="Answer">
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


