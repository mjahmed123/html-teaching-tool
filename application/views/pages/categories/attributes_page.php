<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
		echo link_tag('css/global.css');
		echo link_tag('css/headerStyle.css');
		echo link_tag('css/footerStyle.css');
		echo link_tag('css/categoryStyle.css');

	?>
	<script src="<?php echo site_url('js/darkMode.js'); ?>"></script>
	<script src="<?php echo site_url('js/header.js'); ?>"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HTML Teaching Tool</title>
</head>
<body>
	<?php $this->load->view('templates/header'); ?>
	<div class="container category">
    <h1>Context</h1>
    <div class="context">
      <a class="link" href="#what_is_an_attribute">What is an attribute?</a>
      <a class="link" href="#list_of_attributes">List of attributes</a>
      <a class="link" href="#quizzes_title">Quizzes</a>
    </div>
		<h2 id="what_is_an_attribute">What is an attribute?</h2>
    <p>An attribute is a value that is specified within an element's start tag after it's tag name. It provides additional information about an element and usually follows a name/value standard. You can use attributes within any and as many tags as you want.</p>
		<h3>Example:</h3>
    <code style="color: #33aaff;">
      &lt;a  <span style="color: #8bdcfc">href=<span style="color: #ff8c00">"/"</span></span>&gt;<span class="light-code">Visit HTML Teaching Tool</span>&lt;/a&gt;
    </code>
    <h3>Output:</h3>
    <a href="/" style="color: #6189ff">Visit HTML Teaching Tool</a>
    <h2 id="list_of_attributes">List of attributes:</h2>
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
    <a href="/categories/styles" class="link bordered" > Next Category (Styles)</a>

  </div>
	<?php $this->load->view('templates/footer'); ?>
</body>
</html>


