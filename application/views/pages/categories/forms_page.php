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
    <h1 class="context-title">Context</h1>
    <div class="context">
      <a class="link" href="#what_are_forms">What are forms?</a>
      <a class="link" href="#how_does_it_work">How does it work?</a>
      <a class="link" href="#browser_support">Browser support</a>
      <a class="link" href="#list_of_form_attributes">List of form attributes</a>
      <a class="link" href="#quizzes_title">Quizzes</a>
    </div>
		<h2 id="what_are_forms">What are forms?</h2>
    <p>Forms are the use of an element which is used to collect data from a user's input which can be collected via the following input elements: <span style="font-weight: bold">radio buttons, text fields, checkboxes and submit buttons</span> etc. The data is usually collected and sent to a server awaiting a response on the processing of that data. The form is usually enclosed within the <code>&lt;form&gt;</code> with it's corresponding closing tag <code>&lt;/form&gt;</code> at the end of the form.</p>
		
    <h3>Example:</h3>

    <h4>index.html</h4>

    <pre><code class="language-html" style="margin: 0; padding: 10px">&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
  &lt;title&gt;Example Form&lt;/title&gt;
  &lt;link rel="stylesheet" href="main.css"&gt;
&lt;/head&gt;

&lt;body&gt;

  &lt;form&gt;
    &lt;h2&gt;Example Form&lt;/h2&gt;

    &lt;h3&gt;Name&lt;/h3&gt;

    &lt;label for="name"&gt;Your full name:&lt;/label&gt;
    &lt;input type="text" name="name" id="name"&gt;

    &lt;h3&gt;Gender&lt;/h3&gt;

    &lt;label&gt;Select your gender:&lt;/label&gt;

    &lt;div class="gender"&gt;
      &lt;input type="radio" id="male" name="gender" value="male"&gt;
      &lt;label for="male"&gt;Male&lt;/label&gt;
      &lt;input type="radio" id="female" name="gender" value="female"&gt;
      &lt;label for="female"&gt;Female&lt;/label&gt;
    &lt;/div&gt;

    &lt;h3&gt;Hobbies&lt;/h3&gt;

    &lt;label for="hobbies"&gt;Please choose the hobbies that apply to you:&lt;/label&gt;

    &lt;div class="hobbies"&gt;
      &lt;div class="sports"&gt;
        &lt;input type="check" id="sports" name="hobbies" value="sports"&gt;
        &lt;label for="sports"&gt;Sports&lt;/label&gt;
      &lt;/div&gt;
      &lt;div class="programming"&gt;
        &lt;input type="check" id="programming" name="hobbies" value="programming"&gt;
        &lt;label for="programming"&gt;Programming&lt;/label&gt;
      &lt;/div&gt;
      &lt;div class="gaming"&gt;
        &lt;input type="check" id="gaming" name="hobbies" value="gaming"&gt;
        &lt;label for="gaming"&gt;Gaming&lt;/label&gt;
      &lt;/div&gt;
      &lt;div class="none"&gt;
        &lt;input type="check" id="none" name="hobbies" value="none"&gt;
        &lt;label for="none"&gt;None of the above&lt;/label&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    
    &lt;input type="submit" id="submit" name="submit" value="Complete Form"&gt;
  &lt;/form&gt;

&lt;/body&gt;
&lt;/html&gt;</code></pre>

    <h4>main.css</h4>

    <pre ><code class="language-css" style="margin: 0; padding: 10px">body, html {
  margin: 0;
  font-family: Arial;
}

h1 {
  text-decoration: underline;
  text-align: center;
}

h3 {
  text-decoration: underline;
  margin-left: 10px;
}

input[type=text] {
  width: 85%; 
  margin-right: 20px; 
  max-width: 180px;
}

.gender {
  display: block;
  margin-top: 10px;
}

.hobbies {
  display: flex; 
  flex-direction: column; 
  flex-wrap: wrap;
}
</code></pre>

    <h4 id="how_does_it_work">How does it work?</h4>
    <ul style="list-style-type: circle; margin-left: -10px">
      <li><p>The <code>index.html</code> file creates a document that creates an example form with the following aesthetic:</p></li>
      <ul style="list-style-type: disc; margin-left: -10px">
        <li><p>A main <code>header</code> titled <code>Example Form</code>.</p></li>
        <li><p>Three subheadings for each of the different sections.</p></li>
        <li><p>Input elements (i.e. radio button, checkbox, textbox and submit button).</p></li>
        <li><p>Once the form has been fully submitted, a pop up message will appear. Confirming that the form has been completed.</p></li>
      </ul>
    </ul>

    <h4>What does each input element do?</h4>
    <ul style="list-style-type: circle; margin-left: -10px">
      <li><p><code>Radio Button</code> is an element that allows you to only select one option out of a range of options.</p></li>
      <li><p><code>Textbox</code> is an element that allows you to input information into a field.</p></li>
      <li><p><code>Checkboxes</code> is an element that allows you to select multiple options simultaneously.</p></li>
      <li><p><code>Submit Button</code> is an element that allows you to send the data from a form to another file or server for processing.</p></li>
    </ul>

    <h3 id="output">Output:</h3>
    <code style="display: inline-block; width: 85%">
        <form action="#" method="post">
          <div style="margin-left: 10px">
            <h2 style="text-align: center; text-decoration: underline">Example Form</h2>
            <h3 style="text-decoration: underline">Name</h3>
            <label for="name">Your full name:</label>
              <input style="width: 85%; margin-right: 20px; max-width: 180px" type="text" name="name" id="name">

            <div style="display: block; margin-top: 10px">
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
    
    <h2 id="browser_support">Browser Support:</h2>
    <table>
      <tr>
        <th>Browser</th>
        <th>Supported</th>
      </tr>
      <tr>
        <td>Chrome</td>
        <td>Yes</td>
      </tr>
      <tr>
        <td>Edge</td>
        <td>Yes</td>
      </tr>
      <tr>
        <td>Firefox</td>
        <td>Yes</td>
      </tr>
      <tr>
        <td>Safari</td>
        <td>Yes</td>
      </tr>
      <tr>
        <td>Internet Explorer</td>
        <td>IE 9 and higher</td>
      </tr>
    </table>

    <h2 id="list_of_form_attributes">List of form attributes:</h2>
    <table>
    <tr>
        <th>Form Attribute</th>
        <th>Description</th>
      </tr>
      <tr>
        <td>action</td>
        <td>Attribute used to specify where data should should be sent to be processed when submitting a form.</td>
      </tr>
      <tr>
        <td>autocomplete</td>
        <td>Attribute used specify whether a form should enable autocomplete or not.</td>
      </tr>
      <tr>
        <td>enctype</td>
        <td>Attribute used to define what encoding type is to be used when data is sent to the server, usually used for post methods (i.e. <code>method="post"</code>.</td>
      </tr>
      <tr>
        <td>method</td>
        <td>Attribute used to define which type of HTTP method to be used when form date is submitted (i.e. <code>POST, GET</code>.</td>
      </tr>
      <tr>
        <td>name</td>
        <td>Attribute used to specify the name of the form within a document.</td>
      </tr>
      <tr>
        <td>rel</td>
        <td>Attribute used to define the relationship between the current form and the linked source/documment.</td>
      </tr>
      <tr>
        <td>novalidate</td>
        <td>Attribute used to specify whether or not the form should be validated upon submitting.</td>
      </tr>
    </table>

    <div style="margin-top: 5px">
      <a href="/categories/references#list_of_form_attributes" class="link">View more...</a>
    </div>

    <h2 id="quizzes_title">Test Your Knowledge:</h2>
    <div class="quizzes">
      <a href="/quizzes/identify_forms">Identifying forms, their attributes and elements</a>
    </div>
    
    <div style="display: flex; flex-wrap: wrap">
      <a style="margin-right: 5px" href="#header" class="link">Back To Top</a>
      <a href="/categories/styles" class="link bordered">Previous Category (Styles)</a>
      <a style="margin-left: auto" href="/categories/media" class="link">Next Category (Media)</a>
    </div>

  </div>
	<?php $this->load->view('templates/footer'); ?>

  <script>
    hljs.highlightAll();
  </script>
</body>
</html>


