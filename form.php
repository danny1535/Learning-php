<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact form</title>
</head>
<body>
    <form action="" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" name="name"><br>
         <label for="email">Email:</label><br>
        <input type="text" name="email">
        <input type="submit" value="submit">


    </form>
</body>
</html>

<?php
$message = ""; 
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    if(empty($name)){
    $message = "please enter your name";
    }elseif(empty($email)){
    $message = " please enter your email";
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $message = " please enter a valid email";
    }else{
        $message = "thank you $name, for your details";
    }
}
if (!empty($message)) {
    echo "<p style='font-weight:bold;'>$message</p>";
}
?>