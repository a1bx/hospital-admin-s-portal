<?php
include('connection.php');
// include 'adminservers.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>HOSPITAL PAGE</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">NRB</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="#">SERVICES</a></li>
                    <li><a href="#">ABOUT US</a></li>
                    <li><a href="#">CONTACT</a></li>
                </ul>
            </div>
        </div> 
        <div class="content">
            <form method="POST" >
                <div class="form">
                    <input type="username" name="username" placeholder="Enter username">
                    <input type="password" name="password" placeholder="Enter Password Here">
                    <button class="btnn" name="login"><a href="dashboard.php">Login</a></button>
                </div>
            </form>
        </div>
    </div>
<script>
 const loginForm=
 docment.getElementById("login-form");
 const loginButon=
 document.getElementById("login-form-submit");
 const loginErroMsg=
 document.getElementById("login-error-msg");
 loginButon.addEventListener("click",(e)=>{e.preventDefault();
    const username=loginForm.username.value;
    const password=loginForm.password.value;
    if(username==="jere"&&password==="password"){
        window.location.replace("./dashboard.php");
    }else{
        loginErroMsg.style.opacity=1;
    }
  })
</script>  
</body>
</html>