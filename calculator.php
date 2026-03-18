<?php
$result = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operation = $_POST["operation"];

    if ($num1 == "" || $num2 == "") {
        $error = "Please enter both numbers.";
    } elseif (!is_numeric($num1) || !is_numeric($num2)) {
        $error = "Please enter valid numbers.";
    } else {
        if ($operation == "add") {
            $result = $num1 + $num2;
        } elseif ($operation == "subtract") {
            $result = $num1 - $num2;
        } elseif ($operation == "multiply") {
            $result = $num1 * $num2;
        } elseif ($operation == "divide") {
            if ($num2 == 0) {
                $error = "You cannot divide by zero.";
            } else {
                $result = $num1 / $num2;
            }
        } else {
            $error = "Please select an operation.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>

    <h2>Simple PHP Calculator</h2>

    <form method="post" action="">
        <label>First Number:</label><br>
        <input type="text" name="num1"><br><br>

        <label>Second Number:</label><br>
        <input type="text" name="num2"><br><br>

        <label>Choose Operation:</label><br>
        <select name="operation">
            <option value="">--Select--</option>
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
        </select><br><br>

        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($result != "") {
        echo "<p>Result: $result</p>";
    }

    if ($error != "") {
        echo "<p>$error</p>";
    }
    ?>

</body>
</html>