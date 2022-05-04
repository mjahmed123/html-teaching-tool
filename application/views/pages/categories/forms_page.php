<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
		echo link_tag('css/global.css');
		echo link_tag('css/headerStyle.css');
		echo link_tag('css/footerStyle.css');
		echo link_tag('css/categoryStyle.css');
		echo link_tag('css/atom-one-dark.min.css');

	?>
	<script src="<?php echo site_url('js/darkMode.js'); ?>"></script>
	<script src="<?php echo site_url('js/header.js'); ?>"></script>
	<script src="<?php echo site_url('js/highlight.min.js'); ?>"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HTML Teaching Tool</title>
</head>
<body>
	<?php $this->load->view('templates/header'); ?>
	<div class="container category">
    <h1>Context</h1>
    <div class="context">
      <a class="link" href="#what_are_forms">What are forms?</a>
      <a class="link" href="#list_of_form_attributes">List of form attributes</a>
      <a class="link" href="#quizzes_title">Quizzes</a>
    </div>
		<h2 id="what_are_forms">What are forms?</h2>
    <p>Forms are the use of an element which is used to collect data from a user's input which can be collected via the following input elements: <span style="font-weight: bold">radio buttons, text fields, checkboxes and submit buttons</span> etc. The data is usually collected and sent to a server awaiting a response on the processing of that data. The form is usually enclosed within the <code>&lt;form&gt;</code> with it's corresponding closing tag <code>&lt;/form&gt;</code> at the end of the form.</p>
		
    <h3>Example:</h3>

    <pre><code class="language-html" style="margin: 0; padding: 10px">&lt;form&gt;
  &lt;label for="name"&gt;Your full name:&lt;/label&gt;
  &lt;input type="text" name="name" id="name"&gt;

  &lt;label&gt;Select your gender:&lt;/label&gt;

  &lt;input type="radio" id="gender" name="gender" value="male"&gt;
  &lt;label for="gender"&gt;Male&lt;/label&gt;
  &lt;input type="radio" id="gender" name="gender" value="female"&gt;
  &lt;label for="gender"&gt;Female&lt;/label&gt;

  &lt;label for="hobbies"&gt;Please choose the hobbies that apply to you:&lt;/label&gt;

  &lt;input type="check" id="hobbies" name="hobbies" value=""
&lt;/form&gt;</code></pre>

    <h3 id="output">Output:</h3>
    <code style="display: inline-block; width: 85%">
        <form action="#" method="post">
          <div style="margin-left: 10px">
            <h2 style="text-align: center; text-decoration: underline">Example Form</h2>
            <h3 style="text-decoration: underline">Name</h3>
            <label for="name">Your full name:</label>
              <input type="text" name="name" id="name">

            <div style="display: inline-block; margin-top: 10px">
              <h3 style="text-decoration: underline">Gender</h3>
              <label for="">Select your gender:</label>

                <input type="radio" name="gender" id="male" value="male">
                <label for="male">Male</label>
                <input type="radio" name="gender" id="female" value="female">
                <label for="female">Female</label>
            </div>

            <h3 style="text-decoration: underline">Hobbies</h3>
            <label for="">Please choose the hobbies that apply to you:</label>

            <div style="display: flex; flex-direction: column; flex-wrap: wrap">
              <div>
                <input type="checkbox" name="hobbies" id="sports">
                <label for="sports">Sports</label>
              </div>
              <div>
                <input type="checkbox" name="hobbies" id="programming">
                <label for="programming">Programming</label>
              </div>
              <div>
                <input type="checkbox" name="hobbies" id="gaming">
                <label for="gaming">Gaming</label>
              </div>
              <div>
                <input type="checkbox" name="hobbies" id="none">
                <label for="none">None of the above</label>
              </div>
            </div>          
          </div>

          <div style="display: flex; justify-content: center">
            <input title="A popup message will appear upon completion of the form." style="width: 175px; height: 50px" type="submit" name="submitbutton" id="submitButton" value="Complete Form">
          </div>
        </form>

        <script>
          const submitButton = document.getElementById('submitButton')
          const name = document.getElementById('name')
          submitButton.addEventListener('click', (event) => {
            event.preventDefault()
            if (name.value === '') {
              alert('You need to complete all fields in the form!')
            } else {
              alert('Thank you for the filling in the form ' + name.value + '!')
            }
          })
        </script>
    </code>
    
    <h2 id="list_of_form_attributes">List of form attributes:</h2>
    <table>
      <tr>
        <th>Tag</th>
        <th>Description</th>
      </tr>
      <tr>
        <td>html</td>
        <td>Root element of a html document and has all other tags contained within it.</td>
      </tr>
      <tr>
        <td>head</td>
        <td>Contains the metadata of a webpage (not displayed to the user), data such as: title, character sets, styles etc.</td>
      </tr>
      <tr>
        <td>header</td>
        <td>Contains information as an introduction to the webpage or is more typically to include the navigation menu of the webpage.</td>
      </tr>
      <tr>
        <td>body</td>
        <td>Element where all other tags are enclosed between the starting and closing tags, some of which can be found in this table (i.e. paragraphs, tables, hyperlinks, images etc).</td>
      </tr>
      <tr>
        <td>footer</td>
        <td>Element used to indicate the end of the document and usually contains copyright, authorship and contact information.</td>
      </tr>
      <tr>
        <td>title</td>
        <td>Element used to define the title of the webpage that can be viewed on the web browser's tab bar title. This is also used when searching for the website in a search engine in its results page.</td>
      </tr>
      <tr>
        <td>meta</td>
        <td>Contains information about data, such as: title, character sets etc. This is usually located within the head tag.</td>
      </tr>
    </table>
    <h2 id="quizzes_title">Test Your Knowledge:</h2>
    <div class="quizzes">
      <a href="/quizzes/identify_tags">Identifying and defining atttributes within elements</a>
    </div>
    <a href="#header" class="link">Back To Top</a>
    <a href="/categories/media" class="link bordered" > Next Category (Media)</a>

  </div>
	<?php $this->load->view('templates/footer'); ?>

  <script>
    hljs.highlightAll();
  </script>
</body>
</html>


