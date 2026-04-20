<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="list">List:</label> <br>
        <textarea name="tasks" id=""></textarea> <br>
        <label for="actions">action</label>
        <select name="action">
           <option value="save">Save</option>
           <option value="read">Read</option>
        </select>
        <input type="submit" name="submit" id="">
        

    </form>
</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if ($_POST["action" ] == "save"){
        $txt = $_POST["tasks"];
        $List = fopen("list.txt", "w");
        fwrite($List, $txt);
        fclose($List);
    }
    elseif($_POST["action" ] == "read"){
        $file = fopen("list.txt", "r");
        while (!feof($file)) {
    echo fgets($file) . "<br>";
    }
    fclose($file);
    
    }

    }
    


/*Task: Build a basic to-do list that stores tasks in a text file.
• Requirements:
o Allow users to add tasks via a form.
o Save tasks to a text file.
o Read tasks from the file and display them.
o Optional: Allow users to mark tasks as completed. */
?>
