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
      <a class="link" href="#what_is_an_multimedia">What is an multimedia?</a>
      <a class="link" href="#how_does_it_work">How does it work?</a>
      <a class="link" href="#browser_support">Browser support</a>
      <a class="link" href="#list_of_media_attributes">List of media attributes</a>
      <a class="link" href="#quizzes_title">Quizzes</a>
    </div>
		<h2 id="what_is_an_multimedia">What is multimedia?</h2>
    <p>Multimedia is any type of media that is audible and visible in several different formats, such as: <span style="font-weight: bold">images, sounds, videos, films, animation</span> etc. Web pages can consist of multiple multimedia elements in the several types and formats.</p>
		
    <h3>Example:</h3>
    <pre><code class="language-html" style="language-html" style="margin: 0; padding: 10px">&lt;!--Video Tag Example--&gt;
&lt;video height="250" width="400" muted controls autoplay&gt;
  &lt;source src="sample_movie.mp4" type="video/ogg"&gt;
  &lt;source src="sample_movie.mp4" type="video/webm"&gt;
  &lt;source src="sample_movie.mp4" type="video/mp4"&gt;
  &lt;p&gt;Unfortunately, your browser doesn't support the video tag.&lt;/p&gt;
&lt;/video&gt;

&lt;!--Audio Tag Example--&gt;
&lt;audio muted controls autoplay&gt;
  &lt;source src="sample_audio.ogg" type="audio/ogg"&gt;
  &lt;source src="sample_audio.wav" type="audio/wav"&gt;
  &lt;source src="sample_audio.mp3" type="audio/mp3"&gt;
  &lt;p&gt;Unfortunately, your browser doesn't support the audio tag.&lt;/p&gt;
&lt;/audio&gt;

&lt;!--Embedding a Youtube Video--&gt;
&lt;iframe
  src="https://www.youtube.com/embed/jNQXAC9IVRw?mute=1&controls=1
  &autoplay=1&loop=1"&gt;
&lt;/iframe&gt;</code></pre>

    <h4 id="how_does_it_work">How does it work?</h4>
    <h4 style="text-decoration: underline">Video</h4>
    <ul style="list-style-type: circle; margin-left: -10px">
      <li><p>The <code>video</code> tag is used to embed content of the video media type within a webpage/document.</p></li>
      <li><p>In this instance, it will display a video with a size of 250 x 400. Whereby, the controls are displayed and the video automatically played while being muted.</p></li>
    </ul>

    <h4 style="text-decoration: underline">Audio</h4>
    <ul style="list-style-type: circle; margin-left: -10px">
      <li><p>The <code>audio</code> tag is used to play a track or something audible.</p></li>
      <li><p>In this instance, it will play the audio, whereby, the controls are displayed and the video automatically played while being muted</p></li>
    </ul>

    <h4 style="text-decoration: underline">Iframe</h4>
    <ul style="list-style-type: circle; margin-left: -10px">
      <li><p>The <code>iframe</code> tag is used to load another webpage within the same document.</p></li>
      <li><p>In this instance, it will load the <code>YouTube</code> video within the webpage. The video will show the controls, be automatically played and muted, whilst also being looped once the video has ended.</p></li>
      <li><p>In order to set these properties, you can change the value in the URL from <code>1</code> to <code>0</code> to disable them. By default, all values are <code>0</code>.</p></li>
    </ul>

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

    <h2 id="list_of_media_attributes">List of media attributes:</h2>
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
    </table>

    <div style="margin-top: 5px">
      <a href="/categories/references#list_of_media_attributes" class="link">View more...</a>
    </div>

    <h2 id="quizzes_title">Test Your Knowledge:</h2>
    <div class="quizzes">
      <a href="/quizzes/identify_media">Identifying types of media and how to use them</a>
    </div>

    <div style="display: flex; flex-wrap: wrap">
      <a style="margin-right: 5px" href="#header" class="link">Back To Top</a>
      <a href="/categories/forms" class="link bordered">Previous Category (Forms)</a>
      <a style="margin-left: auto" href="/categories/references" class="link">Next Category (References)</a>
    </div>

  </div>
	<?php $this->load->view('templates/footer'); ?>

  <script>
    hljs.highlightAll();
  </script>
</body>
</html>


