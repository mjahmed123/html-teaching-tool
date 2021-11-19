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
    <title>Register - HTML Teaching Tool</title>
  </head>
  <body>
  <?php $this->load->view('templates/header'); ?>
    <div class="container">
      <div class="center-box">
        <div class="title">Register</div>
          <form method="post" action="<?php echo base_url(); ?>register/insert">
            <input class="input" type="text" name="username" placeholder="Username">
            <input class="input" type="email" name="email" placeholder="Email">
            <input class="input" type="password" name="password" placeholder="Password">
            <input class="input" type="password" name="confirm_password" placeholder="Confirm Password">
            <input class="action-button" type="submit" value="Register">
            <a class="hyperlink" href="/login">Already have an account? Login</a>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>