<?php
    $validateName="";
    $validateEmail="";
    $validateUserName="";
    $validatePassword="";
    $validateConfirmPassword="";
    $validateGender="";
    $validateDateOfBirth="";

    if($_SERVER["REQUEST_METHOD"] == "POST")
   {
            $name = $_REQUEST['name'];
            $email = $_REQUEST['email'];
            $userName = $_REQUEST['un'];
            $password = $_REQUEST['password'];
            $confirmPassword = $_REQUEST['confirmPassword'];

            if(empty($name) || strlen($name)<5){
                $validateName="Please Enter a Valid Name";
            }
            else{
                $validateName=$name;
            }
            if(empty($email) || !preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $email)){
                $validateEmail="Email Does NOT exist! Enter a Valid Email";
            }
            else{
                $validateEmail=$email;
            }
            if(empty($userName) || !preg_match('/[a-zA-Z0-9._]{5,}$/', $userName)){
                $validateUserName="Please enter a valid username";
            }
            else{
                $validateUserName=$userName;
            }
            if(empty($password) || strlen($password)<6 || !preg_match("/(?=.*[@#$%^&+=]).*$/", $password)){
                $validatePassword = "Password atleast contain 1 special character";
            }
            else{
                $validatePassword = $password;
            }
            if(!empty($confirmPassword) || $password == $confirmPassword){
                $validateConfirmPassword = $confirmPassword;
            }
            else{
                $validateConfirmPassword = "Please Check Your Password Again!";
            }
            $target_dir = "files/";
            $target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);

            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
            {
                echo "file uploaded successfully";
            }
            else
            {
                echo "error for file uploading";
            }
                 
    }

?>
