<?php
$server = "localhost:3306";
$user = "root";
$password = "";
$db = "musicworld";

$con = mysqli_connect($server, $user, $password, $db);

if($con) {
    
} else{
    ?>
    <script>
    alert("connection not successfull");
    </script>
    <?php
}

if(isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $confirmpassword = mysqli_real_escape_string($con, $_POST['confirmpassword']);

    $pass = password_hash($password, PASSWORD_BCRYPT);
    $confirm = password_hash($confirmpassword, PASSWORD_BCRYPT);

    $formquerry = "SELECT *FROM signup WHERE username = '$username'";
    $querry = mysqli_query($con, $formquerry);
    $usernamecount = mysqli_num_rows($querry);

    if($usernamecount>0) {
       ?>
       <script>
        alert("username is already exists.");
       </script>
       <?php
    } else{
        if($password === $confirmpassword) {
          $insertquerry = "INSERT INTO signup(username, email, password, confirmpassword)VALUES('$username', '$email', '$pass', '$confirm')";
          $querryshow = mysqli_query($con, $insertquerry);

          if($querryshow) {
            ?>
             <script>
             alert("inserted successfull"); 
             location.replace('login.php');
             </script>
            <?php
        } else{
            ?>
            <script>
            alert("inserted not successfull");
            </script>
            <?php
        }
        } else{
            echo "Password not matching";
        }
    }
}


?>