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
      <a class="link" href="#what_is_an_attribute">What is an attribute?</a>
      <a class="link" href="#browser_support">Browser support</a>
      <a class="link" href="#list_of_attributes">List of attributes</a>
      <a class="link" href="#quizzes_title">Quizzes</a>
    </div>
		<h2 id="what_is_an_attribute">What is an attribute?</h2>
    <p>An attribute is a value that is specified within an element's start tag after it's tag name. It provides additional information about an element and usually follows a name/value standard. You can use attributes within any and as many tags as you want.</p>
		
    <h3>Example:</h3>
    <pre><code style="margin: 0; padding: 10px" class="language-html">&lt;a href="/"&gt;Visit the HTML Teaching Tool website.&lt;/a&gt;</code></pre>

    <h3>Output:</h3>
    <a href="/" style="color: #6189ff">Visit HTML Teaching Tool</a>

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

    <h2 id="list_of_attributes">List of attributes:</h2>
    <table>
    <tr>
        <th>Attribute</th>
        <th>Description</th>
      </tr>
      <tr>
        <td>class</td>
        <td>Attribute used to specify an elements classname(s) which can be used as a reference in an external stylesheet.</td>
      </tr>
      <tr>
        <td>id</td>
        <td>Attribute used to define a unique identification for an element which can be used as a reference to an external stylesheet.</td>
      </tr>
      <tr>
        <td>href</td>
        <td>Attribute used to define a page URL, whereby a link should go that specific page.</td>
      </tr>
      <tr>
        <td>height</td>
        <td>Attribute used to specify the height of an element (how tall it is).</td>
      </tr>
      <tr>
        <td>width</td>
        <td>Attribute used to specify the width of an element (how narrow or wide it is).</td>
      </tr>
      <tr>
        <td>title</td>
        <td>Attribute used to specify any extra data/information about an element or a tag.</td>
      </tr>
      <tr>
        <td>name</td>
        <td>Attribute used to define an elements name and can be used to refer to the element when passing the input data from it to a server for proccessing.</td>
      </tr>
    </table>

    <div style="margin-top: 5px">
      <a href="/categories/references#list_of_attributes" class="link">View more...</a>
    </div>

    <h2 id="quizzes_title">Test Your Knowledge:</h2>
    <div class="quizzes">
      <a href="/quizzes/identify_attributes">Identifying and defining atttributes within elements</a>
    </div>

    <div style="display: flex; flex-wrap: wrap">
      <a style="margin-right: 5px" href="#header" class="link">Back To Top</a>
      <a href="/categories/tags" class="link bordered">Previous Category (Tags)</a>
      <a style="margin-left: auto" href="/categories/styles" class="link">Next Category (Styles)</a>
    </div>
    
    
  </div>
	<?php $this->load->view('templates/footer'); ?>

  <script>
    hljs.highlightAll();
  </script>
</body>
</html>


