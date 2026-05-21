
<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sessions.php" method="post">
    <label for="username">Username:</label>
    <input type="text" name = "username"><br>
    <label for="password">Password:</label>
    <input type="text" name = "password"><br>
    <input type="submit" name="login" id="">
    </form>
</body>
</html>


<?php
if (isset($_POST["login"])){
    if (!empty($_POST["username"]) && 
        !empty($_POST["password"])){
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];
        
        header("Location: dashboard.php");
        }
}





/**• Task: Build a simple login system using PHP sessions.
• Requirements:
o Create a login form where users enter a username and password.
o Use sessions to store login status.
o Redirect users to a "dashboard" after login and display their session data.
o Implement a logout functionality. */
?>