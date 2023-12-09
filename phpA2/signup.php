<?php
session_start();




 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $showError = "false";
    include 'register.php';
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

        // Check whether this email exists
        $existSql = "select * from `users` where email = '$email'";
        $result = mysqli_query($conn, $existSql);
        $numRows = mysqli_num_rows($result);
        if($numRows>0){
            $showError = "Email already in use";
        }
        else{
            if($pass == $cpass){
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO `users` (`username`,`email`, `password`, `confirm_password`) VALUES ( '$username','$email', '$password', '$confirm_password')";
                $result = mysqli_query($conn, $sql);
                
                if($result){
                    $showAlert = true;
                    header("Location: signup.php");
                    exit();
                }
    
            }
            else{
                $showError = "Passwords do not match"; 
                
            }
        }
        header("Location: signup.php");
    
    }

  
?>