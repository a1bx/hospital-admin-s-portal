<?php 
include('connection.php');
session_start();

$host = "localhost";
$user = "root";
$password = "";
$db = "projectdb";

$data = mysqli_connect($host, $user, $password, $db);
if ($data == false) {
    die("connection error");
}


if( $_SERVER["REQUEST_METHOD"] == "POST")
	{
		//something was posted
		$email = $_POST['email'];
		$password = $_POST['password'];
		$user=$_POST['user'];

		if ($user == "doctors"){
        $sql = "select * from signup where email = '" . $email . "' AND password = '" . $password . "' ";
        }
		else if ($user == "patient"){
			$sql = "select * from signup where email = '" . $email . "' AND password = '" . $password . "' ";
		}
        else{
            $sql = "select * from adminlog where email = '" . $email . "' AND password = '" . $password . "' ";
        }

      $result = mysqli_query($data, $sql);

      $row  =  mysqli_fetch_row($result);

	  if ($result && $row) {
        $_SESSION['user_id'] = $row[0];
        if ($user == "doctor"){
            header('location:doctor.html');
        // } else if($user == "patient"){
        //     header('location:dashboard.html');
        // }else if($user=="admin"){
		// 	header('location:dashboard');	
		// }
    } else {
		echo "incorrect username or email";
    }
}
}

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
                    <li><a href="contacts.html">CONTACT</a></li>
                </ul>
            </div>
        </div> 
        <div class="content">
            <form method="POST" action="login.php">
                <div class="form">
                    <input type="email" name="email" placeholder="Enter Email Here"required>
                    <input type="password" name="password" placeholder="Enter Password Here" required><br>
                    <button class="btnn" name="submit"><a href="doctor.html">Login</a></button>
                    <p class="link">Don't have an account<br>
                    <a href="signup.php">Sign up </a> here</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>