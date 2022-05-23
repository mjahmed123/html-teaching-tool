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
      <a class="link" href="#what_is_a_tag">What is a tag?</a>
      <a class="link" href="#what_are_comments">What are comments and how do I create a comment?</a>
      <a class="link" href="#browser_support">Browser support</a>
      <a class="link" href="#list_of_tags">List of tags</a>
      <a class="link" href="#quizzes_title">Quizzes</a>
    </div>
		<h2 id="what_is_a_tag">What is a tag?</h2>
    <p>A tag is a keyword that is used to describe the format of a webpage and its content displayed to a browser. It usually follows a consistent syntax of beginning with an opening angular bracket <code>&lt;</code> and closing angular bracket <code>&gt;</code> to denote where the tag begins and ends.</p>
		
    <h3>Example:</h3>
    <pre><code style="margin: 0; padding: 10px; display: flex; flex-direction: row; flex-wrap: wrap" class="light-code language-html">&lt;h1&gt;This is an example header using the h1 tag.&lt;/h1&gt;</code></pre>

    <h3>Output:</h3>
    <h1 class="code">This is an example header using the h1 tag.<h1>
    <h2 id="what_are_comments">What are comments and how do I create a comment?</h2>
    <p>Comments are descriptions that are used to indicate what a piece of code does. Webpages are able to distinguish between comments and actual code and won't affect the output of the webpage. In order to create a comment, add <code>&lt;!--</code> at the beginning of your comment and <code>--&gt;</code> at the end of your comment.</p>
    <h3>Example:</h3>
    <code style="color: #2cde5f;">
      &lt;!-- This is an example comment. --&gt;
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

    <h2 id="list_of_tags">List of tags:</h2>
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

    <div style="margin-top: 5px">
      <a href="/categories/references#list_of_tags" class="link">View more...</a>
    </div>


    <h2 id="quizzes_title">Test Your Knowledge:</h2>
    <div class="quizzes">
      <a href="/quizzes/identify_tags">Identifying tags and their structure</a>
    </div>

    <div style="display: flex; flex-wrap: wrap">
      <a style="margin-right: 5px" href="#header" class="link">Back To Top</a>
      <a href="/categories/attributes" class="link bordered">Next Category (Attributes)</a>
      <a style="margin-left: auto" href="/dashboard" class="link" > Back to Dashboard</a>
    </div>


  </div>
	<?php $this->load->view('templates/footer'); ?>

  <script>
    hljs.highlightAll();
  </script>
</body>
</html>