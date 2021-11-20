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
      <?php echo isset($user_id) ? '<div>Your account has been successfully created!</div>' : ''  ?>
      <form method="post" action="<?php echo base_url(); ?>register/insert">
        <input class="input" type="text" name="username" placeholder="Username">
            <div class="error"><?php echo isset($validation['username']) ?  $validation['username'] : '' ?></div>
            <input class="input" type="email" name="email" placeholder="Email">
            <div class="error"><?php echo isset($validation['email']) ?  $validation['email'] : '' ?></div>
            <input class="input" type="password" name="password" placeholder="Password">
            <div class="error"><?php echo isset($validation['password']) ?  $validation['password'] : '' ?></div>
            <input class="input" type="password" name="confirm_password" placeholder="Confirm Password">
            <div class="error"><?php echo isset($validation['confirm_password']) ?  $validation['confirm_password'] : '' ?></div>
            <input class="action-button" type="submit" value="Register">
            <a class="hyperlink" href="/login">Already have an account? Login</a>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>