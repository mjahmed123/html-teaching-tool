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
	<div class="container">
		<h1>What is a tag?</h1>
    <p>A tag is a keyword that is used to describe the format of a webpage and its content displayed to a browser. It usually follows a consistent syntax of beginning with an opening angular bracket <code>&lt;</code> and closing angular bracket <code>&gt;</code> to denote where the tag begins and ends.</p>
		<h2>Example:</h2>
    <code>
      &lt;h1&gt;This is an example header using the h1 tag.&lt;/h1&gt;
    </code>
    <h2>Output:</h2>
    <h1 class="code">This is an example header using the h1 tag.<h1>
    <h2>How to make comments:</h2>
    <p>Comments are descriptions that are used to indicate what a piece of code does. Webpages are able to distinguish between comments and actual code and won't affect the output of the webpage.</p>
    <code>
      &lt;!-- This is an example comment. --&gt;
    </code>
    <h2>List of tags:</h2>
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
</table>
  </div>
	<?php $this->load->view('templates/footer'); ?>
</body>
</html>


