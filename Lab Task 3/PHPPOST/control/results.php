<?php

$name = $_POST ["fname"];
$email = $_POST ["email"];

if (empty($name))    //validation
{
    echo "you must enter name";
}
else 
{
    echo "your name is ".$name;
}

echo "br";
echo " your email is ".$email;

?>