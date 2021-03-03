<?php include "control/results.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <h1>Registration</h1>
    <table>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST" enctype="multipart/form-data">
    <tr>
        <td><label for ="name">Name: </label></td>
        <td><input type="text"  id="n" name="name">  <?php echo $validateName ?></td>
    </tr>
    <tr>
        <td><label for="email">Email: </label></td>
        <td><input type="text"  id="e" name="email"> <?php echo $validateEmail ?></td>
    </tr>  
    <tr>  
        <td><label for="userName">Username: </label></td>
        <td><input type="text"  id="m" name="un"> <?php echo $validateUserName ?></td>
    </tr>
    <tr>   
        <td><label for="password">Password: </label></td>
        <td><input type="password"  id="p" name="password"> <?php echo $validatePassword ?></td>
    </tr>
    <tr>   
        <td><label for="Confirmpassword">Confirm Password: </label></td>
        <td><input type="password"  id="cp" name="confirmPassword"> <?php echo $validateConfirmPassword ?></td>
    </tr>
    <tr>
    <td>Gender <br>
    <input type="radio" id="male" name="gender" value="male">
    Male
    <input type="radio" id="female" name="gender" value="female">
    Female
    <input type="radio" id="other" name="gender" value="other">
    Other</td>
    </tr>      
    <tr>
    <td>Date of Birth <br>  
    <input type="date" id="birthday" name="birthday"></td>
    </tr>
    <tr>
    <td><input type="file" name="fileToUpload" id="fileToUpload"> </td>
    </tr>
    <tr>
    <td><input type="submit" value="SUBMIT">
    <input type="reset" value="RESET"></td>
    </tr>
    </form>
    </table>
</body>
</html>