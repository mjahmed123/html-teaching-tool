<!DOCTYPE html>
<html lang="en">
  <head>
    <?php 
      echo link_tag('css/global.css');
      echo link_tag('css/registerLoginStyle.css');
      echo link_tag('css/headerStyle.css');

    ?>
    <title>Login - HTML Teaching Tool</title>
  </head>
  <body>
    <?php $this->load->view('templates/header'); ?>
    <div class="container">
      <div class="center-box">
        <div class="title">Login</div>
        <form action="#">
          <input class="input" type="email" placeholder="Email">
          <input class="input" type="password" placeholder="Password">
          <input class="action-button" type="submit" value="Login">
          <a class="hyperlink" href="/register">Don't have an account? Create an account</a>
        </form>
      </div>
    </div>
  </body>
</html>