<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest List Manager</title>
</head>
<body>
<form action="" method="POST">
    <label for="name">Name:</label><br>
    <input type="text" name="name"><br>
    <label for="email">Email:</label><br>
    <input type="text" name="email"><br>
    <input type="submit" value="Add Guest">



   </form>
</body>
</html>


<?php
$message = ""; 
$list = [];
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
   if(empty($email)){
    $message = " please enter your email";
    }elseif (empty($name)) {
    $message = "Please enter your name";
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $message = " please enter a valid email";
    } elseif(!empty($name) && !empty($email)){
        $list[] = ["name" => $name, "email" => $email];
        echo "Guest added successfully!";
    }
    if (!empty($message)) {
    echo "<p style='font-weight:bold;'>$message</p>";
    }
}
/*Task: Create a guest list manager that stores guest names and email addresses in an array.
• Requirements:
o Allow the user to add a guest via a form (name and email).
o Display all guests in a list.
o Validate the email format before adding a guest.
o Optional: Allow users to delete guests*/

?>


