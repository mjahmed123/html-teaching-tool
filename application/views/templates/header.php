<header id="header">
  <?php
    $path = isset($_SESSION["user_id"]) ? '/dashboard' : '/';
    echo '<a href="' . $path . '"><img src="/favicon.ico" alt="" width="55" height="55"></a>';
    echo '<a class="header-title" href="'. $path .'">HTML Teaching Tool</a>';
  ?> 
  <div class="outer-theme-button">
    <div id="theme-button"></div>
  </div>

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
      <div class="username">'. htmlspecialchars($user->username) .'</div>
      <a class="button" id="register-button" href="/logout">Logout</a>
      
    </div>
    ';
  }
  
  ?>

</header>
