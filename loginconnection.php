<?php

session_start();
$_SESSION['connectionname'] = "loginconnection";

$server = "localhost:3306";
$user = "root";
$password = "";
$db = "musicworld";

$con = mysqli_connect($server, $user, $password, $db);

if($con) {
    ?>
     <script>
     ("connection successfull"); 
     </script>
    <?php
} else{
    ?>
    <script>
    alert("connection not successfull");
    </script>
    <?php
}


 if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['loginpassword'];

    $emailsearch = "SELECT *FROM signup WHERE email = '$email'";
    $querrylogin = mysqli_query($con, $emailsearch);

    $login_rows_count = mysqli_num_rows($querrylogin);

    if ($login_rows_count) {
        $login_user = mysqli_fetch_assoc($querrylogin);

        $database_password = $login_user['password'];

         $pass_enrypt = password_verify($password, $database_password);

         if($pass_enrypt) {
             ?>
        <script>
            location.replace('music.php');
            alert("Login Successfully.");
        </script>
        <?php
         } else{
              ?>
             <script>
             alert("Password not matching");
             </script>
              <?php
         }
    } else {
        ?>
        <script>
            alert("username is incorrect.");
        </script>
                 <?php
     }
    }
?>