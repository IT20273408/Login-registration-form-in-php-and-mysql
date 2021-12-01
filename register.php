<?php 

include 'config.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5 ($_POST['password']);
    $cpassword = md5($_POST['cpassword']);


    if ($password == $cpassword) {
        $sql = "INSERT INTO users(username, email, password)
        VALUES ('$username',  '$email', '$password', '$cpassword')";

        $result = mysqli_query($conn, $sql);
        if (!$result) {
            echo "<script> alert ('oops! Something wrong went.')</script>"; 
        }

    } else {
        echo "<script> alert ('Password Not Matched.')</script>";
    }


}


?>



<!DOCTYPE html> 
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scarle=1.0" >

    <link rel = "stylesheet" href= "https://stackpath.boostrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel = "stylesheet" type= "text/css" href= "style.css">

    <title> Register Form </title>

</head> 

<body>
    <div class="container">
        <form action = "" method = "POST" class= "login-email">
            <p class= "login-text" style="font-size: 2rem; font-weight: 800;"> Register </p>
            <div class=input-group>
                <input type="text" placeholder= "Username" name="username"  required >
                
</div>
<div class=input-group>
                <input type="email" placeholder= "Email" name= "email" required >
                
</div>


<div class="input-group">
    <input type="password" placeholder="Password" name= "password" requird>
</div>
<div class="input-group">
    <input type="password" placeholder="Confirm Password" name ="cpassword" requird>
</div>


<div class = "input-group">
    <button name = "submit" class ="btn"> Register </button> 
    
</div>

</form>
</div>

<p class= "login-register-text">  Have an account? <a href="index.php">Login Here</a>.</p>

</body>
</html>