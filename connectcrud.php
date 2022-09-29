<?php
$con=new mysqli('localhost','root','','projectdb');
if (isset ($_GET [''])){

    $Number=$_GET['deleteid'];

    $sql="delete from crud where Number= $Number";
    $result = mysqli_query($con,$sql);
    if ($result){
       // echo "Deleted successfully";
       header('location:index.html');
    }else{
        die(mysqli_error($con));
    }
}
?>