<?php
    
    if(isset($_POST['submit']))
    {
        if(isset($_POST['gender']))
        {
            echo "Selected Gender : ".$_POST['gender'];
        }
        else
        {
            echo "Please select your gender !";
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
            <legend>GENDER</legend>
            <input type="radio" name="gender" value="Male"> Male
            <input type="radio" name="gender" value="Female"> Female
            <hr> <br>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>