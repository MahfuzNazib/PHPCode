<?php
    
    if(isset($_POST['submit']))
    {
        if($_POST['name']==null)
        {
            echo "Null Value !";
        }
        else
        {
            echo "Entered Name : ".$_POST['name'];
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
            <legend>NAME</legend>
            <input type="text" name="name" value="<?php echo $_POST['name']; ?>">
            <hr> <br>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>