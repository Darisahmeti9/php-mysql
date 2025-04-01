<?php

require 'config.php';

if(isset($_POST['submit']))
{
    $username = $_POST ['username'];
    $password = $_POST ['password'];
    

    if(empty($username ) || empty($password))
    {
        echo "Please fill in all fields";
        header ('refresh:2; url=login.php');
}else{
    $sql = "SELECT * FROM users WHERE username = 'username'";
    $insert = $conn->query($sql);
    $insertSQL ->bindParam(':username',$username);

    $insertSql->execute();

    if($insertsql ->rowcount() > 0  );
    $data = $insertSQL->fetch();
    if(password_verify($password, $data['password'])){
        $_SESSION['username']=$data['username'];
        header("Lokacion: dashboard.php");
        }else{
            echo "Invalid username or password";


    }
}