<!DOCTYPE html>
<html lang="en">
  <head>
    <?php 
      echo link_tag('css/global.css');
      echo link_tag('css/registerLoginStyle.css');
      echo link_tag('css/headerStyle.css');
    ?>
    <script src="<?php echo site_url('js/darkMode.js'); ?>"></script>
    <script src="<?php echo site_url('js/header.js'); ?>"></script>
    <title>Login - HTML Teaching Tool</title>
  </head>
  <body>
    <?php $this->load->view('templates/header'); ?>
    <div class="container">
      <div class="center-box">
        <div class="title">Login</div>
        <form method="post" action="<?php echo base_url(); ?>login/authenticate">
          <input class="input" type="email" name="email" placeholder="Email" maxlength="25">
          <div class="error"><?php echo isset($validation['email']) ?  $validation['email'] : '' ?></div>
          <input class="input" type="password" name="password" placeholder="Password" maxlength="30">
          <div class="error"><?php echo isset($validation['password']) ?  $validation['password'] : '' ?></div>

          <div class="error"><?php echo isset($user_found) && $user_found == false ?  "User not found!" : '' ?></div>
          <input class="action-button" type="submit" value="Login">
          <a class="hyperlink" href="/register">Don't have an account? Create an account</a>
        </form>
      </div>
    </div>
  </body>
</html>