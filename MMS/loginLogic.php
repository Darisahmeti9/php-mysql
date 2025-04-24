<?php

session_start();

include_once('config.php');

if(isset($_POST['submit'])){
    $username=$_POST['username'];

    $password=$_POST['password'];

    if(empty($username) || empty($password)){
        echo "You have not filled all the fields";
    }else{
        $sql="SELECT * FROM users WHERE username=:username";
        
        $selectUsers=$conn->prepare($sql);

        $selectUsers->bindParam(':username',$username);

        $selectUsers->execute();

        $data=$selectUsers->fetch();

        if($data==false){
            echo "The users does not exsit";
        }else{
            if(password_verify($password,$data['password'])){
                $_SESSION['id']=$data['id'];
                $_SESSION['username']=$data['username'];
                $_SESSION['email']=$data['email'];
                $_SESSION['emri']=$data['emri'];
                $_SESSION['is_addmin']=$data['is_addmin'];

                header('Location:dashboard.php');
            }else{
                echo "Password is not valid";
            }
        }
    } 

}
    
