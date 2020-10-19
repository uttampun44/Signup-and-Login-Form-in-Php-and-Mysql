<?php
//creating a connection
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

//submiting form in database
if(isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $confirmpassword = mysqli_real_escape_string($con, $_POST['confirmpassword']);
    $file = $_FILES['photo'];

//password encrypt 
    $pass = password_hash($password, PASSWORD_BCRYPT);
    $confirm = password_hash($confirmpassword, PASSWORD_BCRYPT);

    //choose file option 
    $filename = $file['name'];
    $filepath = $file['tmp_name'];
    $fileerror = $file['error'];

    //creating a image type function
    $file_extension = explode('.', $filename);
    $file_extension_check = strtolower(end($file_extension));
     $file_type = array('png', 'jpg', 'svg', 'jpeg');  

    $formquerry = "SELECT *FROM signup WHERE username = '$username'";
    $querry = mysqli_query($con, $formquerry);
    $usernamecount = mysqli_num_rows($querry);
    
    //to check if username already exists or not
    if($usernamecount>0) {
       ?>
       <script>
        alert("username is already exists.");
       </script>
       <?php
    } else{
          //if password match then form will be submit into database
        if($password === $confirmpassword) {

            //image upload error function
             if($fileerror == 0) {
                 if (in_array($file_extension_check, $file_type)) {
                    
                 
                 $destination_file = 'upload'.$filename;
                 move_uploaded_file($filepath, $destination_file);
             
                 //INSERT into querry
          $insertquerry = "INSERT INTO signup(username, email, password, confirmpassword, photo )VALUES('$username', '$email', '$pass', '$confirm', '$destination_file')";
          $querryshow = mysqli_query($con, $insertquerry);

          if($querryshow) {
            ?>
             <script type="text/javascript">
             alert("inserted successfull"); 
             location.replace('login.php');
             </script>
            <?php
          }
        }
    } else{
            ?>
            <script type="text/javascript">
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