<?php 

include 'config.php';


?>

<!DOCTYPE html> 
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scarle=1.0" >

    <link rel = "stylesheet" href= "https://stackpath.boostrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel = "stylesheet" type= "text/css" href= "style.css">

    <title> Login Form </title>

</head> 

<body>
    <div class="container">
        <form class= "login-email">
            <p class= "login-text" style="font-size: 2rem; font-weight: 800;"> Login </p>
            <div class=input-group>
                <input type="email" placeholder= "Email"  required >
                
</div>

<div class="input-group">
    <input type="password" placeholder="Password" requird>
</div>

<div class = "input-group">
    <button class ="btn"> Login </button> 
    
</div>

</form>
</div>

<p class= "login-register-text"> Don't have an account? <a href="register.php">Register Here</a>.</p>

</body>
</html>