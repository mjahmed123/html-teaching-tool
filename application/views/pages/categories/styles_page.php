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
      <a class="link" href="#what_are_styles">What are styles?</a>
      <a class="link" href="#internal_styling">Types of styles</a>
      <a class="link" href="#list_of_styles">List of styles</a>
      <a class="link" href="#quizzes_title">Quizzes</a>
    </div>
		<h2 id="what_are_styles">What are styles?</h2>
    <p> Styles are used to define an element or a document's style information (CSS). You can define properties of several CSS components, some of the more common and basic ones are: <span style="font-weight: bold">text, list, border and font</span>. There are multiple ways to define a style and it's properties, they are as follows: </p>
		
    <div style="display: flex; flex-direction: column">
      <a class="link" href="#internal_styling">Internal Styling</a>
      <a class="link" href="#external_styling">External Styling</a>
      <a class="link" href="#inline_styling">Inline Styling</a>
    </div>

    <h3 id="internal_styling">Internal Styling</h3>
    <p>Internal Styling is when you define the properties of elements, classes and id's inside a <code>&lt;style&gt;</code> tag. You can do this using selectors which are usually the names of the elements, classes and id's names.</p>

    <h3>Example:</h3>
    <code style="display: inline-block; width: 80%">
      <div style="color: #33aaff">&lt;style&gt;</div>
        <div style="margin-left: 10px; color: orange">body, html <spa style="color: white">{</span></div>
          <div style="margin-left: 20px">margin: 0;</div>
          <div style="margin-left: 20px">background-color: <span style="color: orange">grey</span>;</div>
        <div style="margin-left: 10px">}</div>
        
        <div style="display: inline-block"></div>
        
        <div style="margin-left: 10px">h1 {</div>
          <div style="margin-left: 20px">color: white;</div>
          <div style="margin-left: 20px">text-align: center;</div>
          <div style="margin-left: 20px">font-family: Arial;</div>
        <div style="margin-left: 10px">}</div>
      <div style="color: #33aaff">&lt;/style&gt;</div>
    </code>

    <h3 id="external_styling">External Styling</h3>
    <p>External Styling is when you separate your style selectors and properties into their own file to keep the code separate from the main HTML code, which helps with both organisation and clarity of code.</p>
    
    <h3>Example:</h3>
    <code style="display: inline-block; width: 80%">
      <div>&lt;head&gt;</div>
      <div style="margin-left: 10px">&lt;link rel="stylesheet" href="main.css"&gt;</div>
      <div>&lt;/head&gt;</div>
    </code>

    <h3 id="inline_styling">Inline Styling</h3>
    <p>Inline Styling is when you define the selector and properties of elements, classes and id's within the same line of a tag. It is usually defined with the style attribute and is usually enclosed within <code>""</code>.</p>
    
    <h3>Example:</h3>
    <code style="display: inline-block; width: 100%">
      <div>&lt;p style="font-style: italic; font-weight: bold"&gt;<div>This is an exmaple paragraph with a bold and italic font style.&lt;/p&gt;</div></div>
    </code>

    <h3>Output:</h3>
    <code style="display: inline-block; width: 80%">
      <p style="font-style: italic; font-weight: bold; color: white;">This is an example paragraph with a bold and italic font style.</p>
    </code>

    <h2 id="list_of_styles">List of styles:</h2>
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
    <a href="/categories/forms" class="link bordered" > Next Category (Forms)</a>

  </div>
	<?php $this->load->view('templates/footer'); ?>
</body>
</html>


