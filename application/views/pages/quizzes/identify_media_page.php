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
    <form method="post" action="<?php echo base_url(); ?>quizzes/submit_media?id=5">
      <!--Question 1-->
      <div class="question <?php output_answer_status($answer_status, 1) ?>" id="question-1">
        <?php create_header($answer_status, 1) ?>
        <p><?php question_number(1) ?>What is multimedia?</p>

        <div class="answer <?php output_is_correct_answer($correct_answers, 1, 1) ?>">
          <input type="radio" id="a1" name="q1" value="1">
          <label for="a1">Something that can be represented through audio only.</label>
        </div>
        <div class="answer <?php output_is_correct_answer($correct_answers, 1, 2) ?>">
          <input type="radio" id="a2" name="q1" value="2">
          <label for="a2">Something that can be represented through video only..</label> 
        </div>
        <div class="answer <?php output_is_correct_answer($correct_answers, 1, 3) ?>">
          <input type="radio" id="a3" name="q1" value="3">
          <label for="a3">Something that can be represented through any type of media.</label>
        </div>
      </div>

      <!--Question 2-->
      <div class="question <?php output_answer_status($answer_status, 2) ?>" id="question-2">
      <?php create_header($answer_status, 2) ?>
        <p><?php question_number(2) ?>Which of the following is one of the many types of multimedia?</p>

        <div class="answer <?php output_is_correct_answer($correct_answers, 2, 1) ?>">
          <input type="radio" id="a4" name="q2" value="1">
          <label for="a4">Monitor</label>
        </div>
        <div class="answer <?php output_is_correct_answer($correct_answers, 2, 2) ?>">
          <input type="radio"id="a5" name="q2" value="2">
          <label for="a5">Sounds</label> 
        </div>
        <div class="answer <?php output_is_correct_answer($correct_answers, 2, 3) ?>">
          <input type="radio" id="a6" name="q2" value="3">
          <label for="a6">USB</label>
        </div>
      </div>

      <!--Question 3-->
      <div class="question <?php output_answer_status($answer_status, 3) ?>" id="question-3">
      <?php create_header($answer_status, 3) ?>
        <p><?php question_number(3) ?>Complete the syntax of the following code so it sets the height of the video to 600px:</p>

        <code class="example">
          <div>&lt;video width="800" height="<u>&nbsp;&nbsp;</u>"&gt;</div>
            <div style="margin-left: 15px">&lt;source src="example_video.mp4" type="video/mp4"&gt;</div>
          <div>&lt;/video&gt;</div>
        </code>
        <input value="<?php answer($correct_answers, 3) ?>" id="textInput" class="short " name="q3_i" type="text" placeholder="Answer">
      </div>

      <!--Question 4-->
      <div class="question <?php output_answer_status($answer_status, 4) ?>" id="question-4">
      <?php create_header($answer_status, 4) ?>
        <p><?php question_number(4) ?>Which of the following best describes a <code>&lt;video&gt;</code> tag?</p>

        <div class="answer <?php output_is_correct_answer($correct_answers, 4, 1) ?>">
          <input type="radio" id="a7" name="q4" value="1">
          <label for="a7">A tag used to load another webpage within the same document.</label>
        </div>
        <div class="answer <?php output_is_correct_answer($correct_answers, 4, 2) ?>">
          <input type="radio"id="a8" name="q4" value="2">
          <label for="a8">A tag used to play a track or something audible.</label> 
        </div>
        <div class="answer <?php output_is_correct_answer($correct_answers, 4, 3) ?>">
          <input type="radio" id="a9" name="q4" value="3">
          <label for="a9">A tag used to embed content of the video media type within a webpage/document.</label>
        </div>
      </div>

      <!--Question 5-->
      <div class="question <?php output_answer_status($answer_status, 5) ?>" id="question-5">
      <?php create_header($answer_status, 5) ?>
        <p><?php question_number(5) ?>Which of the following best describes an <code>&lt;iframe&gt;</code> tag?</p>

        <div class="answer <?php output_is_correct_answer($correct_answers, 5, 1) ?>">
          <input type="radio" id="a10" name="q5" value="1">
          <label for="a10">A tag used to load another webpage within the same document.</label>
        </div>
        <div class="answer <?php output_is_correct_answer($correct_answers, 5, 2) ?>">
          <input type="radio"id="a11" name="q5" value="2">
          <label for="a11">A tag used to play a track or something audible.</label> 
        </div>
        <div class="answer <?php output_is_correct_answer($correct_answers, 5, 3) ?>">
          <input type="radio" id="a12" name="q5" value="3">
          <label for="a12">A tag used to embed content of the video media type within a webpage/document.</label>
        </div>
      </div>

      <!--Question 6-->
      <div class="question <?php output_answer_status($answer_status, 6) ?>" id="question-6">
      <?php create_header($answer_status, 6) ?>
        <p><?php question_number(6) ?>Which of the following best describes a <code>&lt;audio&gt;</code> tag?</p>

        <div class="answer <?php output_is_correct_answer($correct_answers, 6, 1) ?>">
          <input type="radio" id="a13" name="q6" value="1">
          <label for="a13">A tag used to load another webpage within the same document.</label>
        </div>
        <div class="answer <?php output_is_correct_answer($correct_answers, 6, 2) ?>">
          <input type="radio"id="a14" name="q6" value="2">
          <label for="a14">A tag used to play a track or something audible.</label> 
        </div>
        <div class="answer <?php output_is_correct_answer($correct_answers, 6, 3) ?>">
          <input type="radio" id="a15" name="q6" value="3">
          <label for="a15">A tag used to embed content of the video media type within a webpage/document.</label>
        </div>
      </div>

      <!--Question 7-->
      <div class="question <?php output_answer_status($answer_status, 7) ?>" id="question-7">
      <?php create_header($answer_status, 7) ?>
        <p><?php question_number(7) ?>Complete the syntax of the following code so that it automatically plays the audio sample:</p>

        <code class="example">
          <div>&lt;audio <u>&nbsp;&nbsp;</u>&gt;</div>
            <div style="margin-left: 15px">&lt;source src="example_audio.mp3" type="audio/mp3"&gt;</div>
          <div>&lt;/audio&gt;</div>
        </code>
        <input value="<?php answer($correct_answers, 7) ?>" id="textInput" class="short " name="q7_i" type="text" placeholder="Answer">
      </div>

      <!--Question 8-->
      <div class="question <?php output_answer_status($answer_status, 8) ?>" id="question-8">
      <?php create_header($answer_status, 8) ?>
        <p><?php question_number(8) ?>Complete the syntax of the following code so that it shows the controls for the video:</p>

        <code class="example">
          <div>&lt;video width="800" height="600" <u>&nbsp;&nbsp;</u>&gt;</div>
            <div style="margin-left: 15px">&lt;source src="example_video.mp4" type="video/mp4"&gt;</div>
          <div>&lt;/video&gt;</div>
        </code>
        <input value="<?php answer($correct_answers, 8) ?>" id="textInput" class="short " name="q8_i" type="text" placeholder="Answer">
      </div>

      <!--Question 9-->
      <div class="question <?php output_answer_status($answer_status, 9) ?>" id="question-9">
      <?php create_header($answer_status, 9) ?>
        <p><?php question_number(9) ?>Complete the syntax of the following code so that it replays the video without the user having to click play again:</p>

        <code class="example">
          <div>&lt;iframe</div>
            <div style="margin-left: 15px">&lt;src="https://www.youtube.com/embed/jNQXAC9IVRw?autoplay=1&controls=1&<u>&nbsp;&nbsp;</u>=1&gt;</div>
          <div>&lt;/iframe&gt;</div>
        </code>
        <input value="<?php answer($correct_answers, 9) ?>" id="textInput" class="short " name="q9_i" type="text" placeholder="Answer">
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


