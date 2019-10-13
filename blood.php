<?php
    
    if(isset($_POST['submit']))
    {
        if($_POST['group']==null)
        {
            echo "Null Value !";
        }
        else
        {
            echo "Entered Group : ".$_POST['group'];
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Name</title>
</head>
<body>
    <form method="POST" action="#">
        <fieldset>
            <legend>BLOOD</legend>
            <select name="group">
            <option value=""></option>
                <option value="AB+">AB+</option>
                <option value="O+">O+</option>
                <option value="B+">B+</option>
            </select>
            <hr> <br>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>