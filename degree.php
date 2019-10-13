<?php
    
    if(isset($_POST['submit']))
    {
        //<h1>Degree Selected:</h1> <br>
        if(isset($_POST['ssc']))
        {
            echo $_POST['ssc']." ";
        }
        if(isset($_POST['hsc']))
        {
            echo $_POST['hsc']." ";
        }
        if(isset($_POST['bsc']))
        {
            echo $_POST['bsc']." ";
        }
        if(isset($_POST['msc']))
        {
            echo $_POST['msc']." ";
        }
        /*$ssc=$_POST['ssc'];
        $hsc=$_POST['hsc'];
        $bsc=$_POST['bsc'];
        $msc=$_POST['msc'];
        if($ssc==null && $hsc==null && $bsc==null && $msc==null)
        {
            echo "Empty Checkbox !";
        }*/

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
            <legend>DEGREE</legend>
            <input type="checkbox" name="ssc" value="SSC">SSC
            <input type="checkbox" name="hsc" value="HSC">HSC
            <input type="checkbox" name="bsc" value="BSc">BSc
            <input type="checkbox" name="msc" value="MSc">MSc
            <hr> <br>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>