<?php
session_start();

if (isset($_POST["logout"])){
    session_unset();
    session_destroy();

    header("Location: sessions.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>

    <h2>This is the dashboard</h2>

    <h3>These are your details:</h3>

    <?php
    echo "Username: " . $_SESSION["username"] . "<br>";
    echo "Password: " . $_SESSION["password"] . "<br>";
    ?>

    <form action="dashboard.php" method="post">
        <input type="submit" name="logout" value="Logout">
    </form>

</body>
</html>