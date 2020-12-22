<?php
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $gender = $_POST["gender"];
        $password = $_POST["password"];
        $cpassword =$_POST["cpassword"];

        $conn = new mysqli("localhost","root","","signup");
        if($conn->connect_error){
            die("Connection Failed :" .$conn->connect_error);
        }
        else{
            $stmt = $conn->prepare("insert into registration(firstname,lastname,username,email,gender,password,cpassword) 
            values(?,?,?,?,?,?,?)");
            $stmt->bind_param("sssssss",$firstname,$lastname,$username,$email,$gender,$password,$cpassword);
            $stmt->execute();
            echo "$firstname";
            echo "<br>";
            echo "$lastname";
            echo "<br>";
            echo "$username";
            echo "<br>";
            echo "$email";
            echo "<br>";
            echo "$gender";
            echo "<br>";
            echo "$password";
            echo "<br>";
            echo "$cpassword";
            echo "<br>";
            $stmt->close();
            $conn->close();
        }
?>