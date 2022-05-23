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
      <a class="link" href="#what_is_references">What is the references page?</a>
      <a class="link" href="#list_of_tags">List of tags</a>
      <a class="link" href="#list_of_attributes">List of attributes</a>
      <a class="link" href="#list_of_styles">List of styles</a>
      <a class="link" href="#list_of_form_attributes">List of form attributes</a>
      <a class="link" href="#list_of_media_attributes">List of media attributes</a>
    </div>

    <h2 id="what_is_references">What is the references page?</h2>
    <p>This category page does not include a quiz. This is because, it is aimed at providing you with a list of all category related content that is better separated into it's own page.</p>

    <!--Tags List-->
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
      <tr>
        <td>div</td>
        <td>Element used to define a specific section in a document. In contrast, to the <code>&lt;section&gt;</code> tag which is more of a structural tag.</td>
      </tr>
      <tr>
        <td>p</td>
        <td>Element used to define a paragraph as opposed to just typing the paragraph while not being surrounded by a tag. </td>
      </tr>
      <tr>
        <td>table</td>
        <td>Element used to create a table of elements in HTML. The table can consist of: <code>&lt;th&gt;</code>, <code>&lt;tr&gt;</code>, <code>&lt;td&gt;</code></td>
      </tr>
      <tr>
        <td>th</td>
        <td>Element used to create a header cell (column) of a <code>&lt;table&gt;</code> tag.</td>
      </tr>
      <tr>
        <td>tr</td>
        <td>Element used to create a row inside a <code>&lt;table&gt;</code> tag.</td>
      </tr>
      <tr>
        <td>td</td>
        <td>Element used to create a data cell of a <code>&lt;table&gt;</code> tag. Usually defined within a <code>&lt;tr&gt;</code> element to add data to the specific field of the row.</td>
      </tr>
      <tr>
        <td>span</td>
        <td>An inline element used to mark up a piece of text or a document, much like the <code>&lt;div&gt;</code> tag, however, the <code>&lt;div&gt;</code> tag is a block style element.</td>
      </tr>
      <tr>
        <td>select</td>
        <td>Element that is used to create a drop down list menu, whereby each of the different options can be defined using the <code>&lt;option&gt;</code> element. This is usually stored within the <code>&lt;option&gt;</code> tag.</td>
      </tr>
    </table>

    <!--Attributes List-->
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
      <tr>
        <td>src</td>
        <td>Attribute used to specify an elements or tags's source for a media file.</td>
      </tr>
      <tr>
        <td>style</td>
        <td>Attribute used to set the style of an element within the same line. However, selector events (i.e. <code>hover</code> etc), are not available.</td>
      </tr>
      <tr>
        <td>type</td>
        <td>Attribute used to specify the type of an element or a tag.</td>
      </tr>
      <tr>
        <td>maxlength</td>
        <td>Attribute used to specify the maximum amount of characters that are permitted within an element or tag.</td>
      </tr>
      <tr>
        <td>placeholder</td>
        <td>Attribute used to specify text to be displayed by default in an element but can overwritten once text is entered.</td>
      </tr>
      <tr>
        <td>selected</td>
        <td>Attributed used to highlight the current element as selected by default when the page has loaded.</td>
      </tr>
      <tr>
        <td>disabled</td>
        <td>Attribute used to automatically disable an element, preventing a user from interacting with the element in any way, shape or form.</td>
      </tr>
      <tr>
        <td>rel</td>
        <td>Attribute used to define the relationship between the current document and the specified file for the document to be linked to.</td>
      </tr>
    </table>

    <!--Styles List-->
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
      <tr>
        <td>flex-direction</td>
        <td>Any of the many different states, such as: <code>row</code>, <code>column</code>, <code>row-reverse</code>, <code>column-reverse</code> etc.</td>
        <td>Used to define the direction in which flexible items within an element or document should face.</td>
      </tr>
      <tr>
        <td>font-size</td>
        <td>Can be a percentage or a value, such as: <code>24px, 24pt or 30%</code></td>
        <td>Used to define the size of the specified element's text within a document.</td>
      </tr>
      <tr>
        <td>font-family</td>
        <td>Any font type such as: <code>Arial</code>, <code>Times New Roman</code>, <code>Calibri</code> etc.</td>
        <td>Used to define the family of the font and its appearance on the document.</td>
      </tr>
      <tr>
        <td>font-weight</td>
        <td>Any weight type, such as: <code>normal</code>, <code>bold</code>, <code>bolder</code> or any value between <code>100</code> to <code>900</code> which is similar to normal and bold values (i.e. normal = 400 and bold = 700).</td>
        <td>Used to define how thin or thick the characters of text should be displayed like in a document.</td>
      </tr>
      <tr>
        <td>font-style</td>
        <td>Any of the many different style states, such as: <code>normal</code>, <code>italic</code>, <code>oblique</code> etc.</td>
        <td>Used to define the style in which a browser should display the text within a document.</td>
      </tr>
      <tr>
        <td>height</td>
        <td>Any height states, such as: <code>50px, 50%, auto</code> etc.</td>
        <td>Used to define the height of an element.</td>
      </tr>
      <tr>
        <td>width</td>
        <td>Used to define the height of an element.</td>
        <td>Used to define the width of an element.</td>
      </tr>
      <tr>
        <td>justify-content</td>
        <td>Any of the following states: <code>flex-start</code>, <code>flex-end</code>, <code>center</code>, <code>space-between</code>, <code>space-around</code> etc.</td>
        <td>Used to align flexible within an element or container horizontally. Use <code>align-items</code> to align them vertically.</td>
      </tr>
    </table>

    <!--Form Attributes List-->
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
      <tr>
        <td>target</td>
        <td>Attribute used to specify where the form should show the response when the data has been processed.</td>
      </tr>
    </table>

    <!--Media Attributes List-->
    <h2 id="list_of_media_attributes">List of media attributes:</h2>

    <!--Audio-->
    <h3>Audio/Video</h3>
    <table>
      <tr>
        <th>Attribute</th>
        <th>Description</th>
      </tr>
      <tr>
        <td>autoplay</td>
        <td>Attribute used to define whether to play the media or not as soon as it has loaded.</td>
      </tr>
      <tr>
        <td>controls</td>
        <td>Attribute used to define whether the media should display controls or not.</td>
      </tr>
      <tr>
        <td>currentTime</td>
        <td>Attribute used to define or get the current playback time of the media in seconds.</td>
      </tr>
      <tr>
        <td>duration</td>
        <td>Attribute used to define the length of the media in seconds.</td>
      </tr>
      <tr>
        <td>loop</td>
        <td>Attribute used to define whether a media should restart once the media has finished playing.</td>
      </tr>
      <tr>
        <td>muted</td>
        <td>Attribute used to define whether or not the media should have no volume by default as soon as the media has loaded.</td>
      </tr>
      <tr>
        <td>paused</td>
        <td>Attribute used to define whether or not the media should be stopped at its current playback time in seconds.</td>
      </tr>
      <tr>
        <td>src</td>
        <td>Attribute used to return the current sourcce of the media element.</td>
      </tr>
      <tr>
        <td>seeking</td>
        <td>Attribute used to define whether or not the user is currently playing back or forwarding the media (seeking).</td>
      </tr>
      <tr>
        <td>volume</td>
        <td>Attribute used to define or get the current volume of the media.</td>
      </tr>
    </table>

    <?php 
      if (isset($_SESSION['user_id'])) {
        echo '<div style="display: flex; flex-wrap: wrap; margin-top: 20px">
        <a style="padding-right: 5px" href="#header" class="link">Back To Top</a>
        <a href="/categories/media" class="link bordered">Previous Category (Media)</a>
        <a style="margin-left: auto" href="/dashboard" class="link" > Back to Dashboard</a>
      </div>';
      } else {
        echo '<div style="display: flex; flex-wrap: wrap; margin-top: 20px">
        <a style="padding-right: 5px" href="#header" class="link">Back To Top</a>
        <a style="margin-left: auto" href="/" class="link"> Back to Home Page</a>
        </div>';
      }
    ?>
  </div>
	<?php $this->load->view('templates/footer'); ?>
</body>
</html>


