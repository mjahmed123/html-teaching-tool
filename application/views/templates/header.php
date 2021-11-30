<header>
  <?php
    $path = isset($_SESSION["user_id"]) ? '/dashboard' : '/';
    echo '<a class="header-title" href="'. $path .'">HTML Teaching Tool</a>';
  ?> 
  <div id="theme-button" title="Toggle dark mode"></div>

  <?php 

  if (!isset($_SESSION["user_id"])) {
    echo '
    <a class="button" id="login-button" href="/login">Login</a>
    <a class="button" id="register-button" href="/register">Register</a>
    ';
  } else {
    $user = $this->user_model->get_session_user();
    echo '
    <div class="header-profile">
      <div class="username">'. $user->username .'</div>
      <a class="button" id="register-button" href="/logout">Logout</a>
      
    </div>
    ';
  }
  
  ?>

</header>
