<?php
session_start();
$_SESSION['webpagename'] = "loginpage";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>

    <div class="login">
        <h1>Login</h1>
        <form method="POST" action="loginconnection.php">
            <input type="text" name="email" placeholder="Email" required="required" />
            <input type="password" name="loginpassword" placeholder="Password" required="required" />
            <button type="submit" class="btn btn-primary btn-block btn-large" name="submit" id="sub">Let me in.</button>
            <p>Not have an account? <a href="form.php">Sign Up</a></p>
        </form>
    </div>
 </script>
</body>
</html>