<?php
     $connect = mysqli_connect("localhost","root",'','db');

    if(isset($_POST['signup'])){

        $name     = mysqli_escape_string($connect,htmlspecialchars($_POST['name']));

        $email    = mysqli_escape_string($connect,htmlspecialchars($_POST['email']));

        $password = password_hash($_POST['password'],PASSWORD_BCRYPT);

        $phone    = mysqli_escape_string($connect,htmlspecialchars($_POST['phone']));


        $insert   = "INSERT INTO users (username,email,password,phone)
                     VALUES ('$name','$email','$password','$phone')";

        $query    = mysqli_query($connect,$insert);

        if ($query){

            echo "<h2>Successfully registered</h2>";
        }else{
            echo "<h2>Email already exist</h2>";
        }

    }
