<?php
  session_start();
  $_SESSION['webpagename'] = "signupform";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <div id="login-box">
    <div class="left">
      <h1>Sign up</h1>
      <form method="POST" action="connection.php">
      <input type="text" name="username" placeholder="Username" autocomplete="off" required/>
      <input type="text" name="email" placeholder="E-mail" autocomplete="off" required/>
      <input type="password" name="password" placeholder="Password" autocomplete="off" required/>
      <input type="password" name="confirmpassword" placeholder="Confirm password" autocomplete="off" required/>
      
      <input type="submit" name="submit" value="Sign me up" id="sub" />
      <form>
    </div>
    
    <div class="right">
      <span class="loginwith">Sign in with<br />social network</span>
      
      <button class="social-signin facebook">Log in with facebook</button>
      <button class="social-signin twitter">Log in with Twitter</button>
      <button class="social-signin google">Log in with Google+</button>
    </div>
    <div class="or">OR</div>
  </div>
  </script>
</body>
</html>