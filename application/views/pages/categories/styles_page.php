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
      <a class="link" href="#what_are_styles">What are styles?</a>
      <a class="link" href="#internal_styling">Types of styles</a>
      <a class="link" href="#browser_support">Browser support</a>
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
    <pre><code class="language-html">&lt;style&gt;
  <code class="language-css">body, html {
    margin: 0;
    background-color: grey;
  }
  
  h1 {
    color: white;
    text-align: center;
    font-family: Arial;
  }

  .border {
    border: solid 2px black;
    border-radius: 5px;
    margin: 10px 5px 10px 5px;
  }

  ul {
    list-style-type: square;
  }
</code>&lt;/style&gt;</code></pre>

    <h4>How does it work?</h4>
    <ul style="list-style-type: circle; margin-left: -10px">
      <li><p>The properties of the <code>body</code> and <code>html</code> selectors will give the webpage a colour of grey and ensure that the page doesn't have any space surrounding it, as by default there is a small amount of margin.</p></li>
      <li><p>The properties of the <code>h1</code> selector will ensure that the header text is white, centered and has the font family of <code>Arial</code> applied to it.</p></li>
      <li><p>The properties of the <code>.border</code> class selector will ensure that the element with the class border has the following:</p></li>
      <ul style="list-style-type: disc">
        <li><p>A solid border with a black outline that has a width of <code>2px</code>.</p></li>
        <li><p>A border that is rounded to the a width of <code>5px</code>.</p></li>
        <li><p>A margin between the border element and the rest of the elements surrounding it. Specifically, the top and bottom having <code>10px</code> and left and right having <code>5px</code> margins around them.</p></li>
      </ul>
      <li><p>The properties of the <code>ul</code> selector will ensure that the type of style for the list is to be that of square style. Whereby, the default style is a disc shape (i.e. <code>•</code>.</p></li>
    </ul>

    <h3 id="external_styling">External Styling</h3>
    <p>External Styling is when you separate your style selectors and properties into their own file to keep the code separate from the main HTML code, which helps with both organisation and clarity of code.</p>
    
    <h3>Example:</h3>
    <pre><code style="margin: 0; padding: 10px" class="language-html">&lt;head&gt; 
  &lt;link rel="stylesheet" href="main.css"&gt; 
&lt;/head&gt;</code></pre>

    <h4>How does it work?</h4>
    <ul style="list-style-type: circle; margin-left: -10px">
      <li><p>The above code example will link the current <code>HTML</code> document to an external stylesheet file that has a styles defined like in <a href="#internal_styling" class="link">Internal Styling</a> section. However, it will not contain the <code>&lt;style&gt;</code> tag.</p></li>
    </ul>

    <h3 id="inline_styling">Inline Styling</h3>
    <p>Inline Styling is when you define the selector and properties of elements, classes and id's within the same line of a tag. It is usually defined with the style attribute and is usually enclosed within <code>""</code>.</p>
    
    <h3>Example:</h3>
    <pre><code class="language-html">&lt;p style="font-style: italic; font-weight: bold"&gt;
This is an example paragraph with a bold and italic font style.&lt;/p&gt;</code></pre>

    <h4>How does it work?</h4>
    <ul style="list-style-type: circle; margin-left: -10px">
      <li><p>The <code>p</code> tag will be used create a paragraph that is <code>bold</code> and <code>italics</code>. This is done via inline styling using the <code>style</code> attribute. However, the use of this styling is more of a last resort type of thing. Due to the fact that the use of an external stylesheet is a more efficient way and is better practice.</p></li>
    </ul>

    <h3>Output:</h3>
    <code style="display: inline-block; width: 80%">
      <p style="font-style: italic; font-weight: bold; color: white;">This is an example paragraph with a bold and italic font style.</p>
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

    <h2 id="list_of_styles">List of styles:</h2>
    <table>
    <tr>
        <th>Selector</th>
        <th>Properties</th>
        <th>Description</th>
      </tr>
      <tr>
        <td>background-color</td>
        <td>Any colour name, rgb format or hex colour format (i.e. <code>black</code>, <code>#000000</code> and <code>rgb(0, 0, 0)</code>.</td>
        <td>Used to specify the background colour of an element through the property of the selector.</td>
      </tr>
      <tr>
        <td>border</td>
        <td>Type of outline, width of outline and the colour (i.e. <code>solid 1px black</code>. </td>
        <td>Used to set the type of outline an element has and can also be used to set a border's colour, width and style.</td>
      </tr>
      <tr>
        <td>border-radius</td>
        <td>Width or percentage to specify how rounded the border should be (i.e. <code>5px, 50%</code>.</td>
        <td>Used to define how rounded an element should appear. The greater the value, the more rounded it will appear.</td>
      </tr>
      <tr>
        <td>color</td>
        <td>Any colour name, rgb format or hex colour format (i.e. <code>black</code>, <code>#000000</code> and <code>rgb(0, 0, 0)</code>.</td>
        <td>Used to specify the background colour of an element through the property of the selector.</td>
      </tr>
      <tr>
        <td>cursor</td>
        <td>Any of the many different states, such as: <code>default</code>, <code>pointer</code>, <code>wait</code>, <code>text</code>, <code>progress</code>, <code>help</code> etc.</td>
        <td>Used to specify what state a pointer should be in when the cursor is pointed over an element.</td>
      </tr>
      <tr>
        <td>display</td>
        <td>Any of the many different states, such as: <code>flex</code>, <code>block</code>, <code>grid</code>, <code>inline-block</code>, <code>inline-flex</code> etc.</td>
        <td>Used to define how a HTML element should show on a webpage.</td>
      </tr>
      <tr>
        <td>flex-wrap</td>
        <td>Any of the many different states, such as: <code>wrap</code>, <code>nowrap</code>, <code>wrap-reverse</code> etc.</td>
        <td>Used to define whether a flexible element should wrap the content within the element when the end of the outer element is reached.</td>
      </tr>
    </table>

    <div style="margin-top: 5px">
      <a href="/categories/references#list_of_styles" class="link">View more...</a>
    </div>

    <h2 id="quizzes_title">Test Your Knowledge:</h2>
    <div class="quizzes">
      <a href="/quizzes/identify_styles">Defining style types, selectors and properties</a>
    </div>

    <div style="display: flex; flex-wrap: wrap">
      <a style="margin-right: 5px" href="#header" class="link">Back To Top</a>
      <a href="/categories/attributes" class="link bordered">Previous Category (Attributes)</a>
      <a style="margin-left: auto" href="/categories/forms" class="link">Next Category (Forms)</a>
    </div>


  </div>
	<?php $this->load->view('templates/footer'); ?>

  <script>
    hljs.highlightAll();
  </script>
</body>
</html>


