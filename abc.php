<?php

    echo "Another Page Data Submit <br><br>";
    $uname=$_POST['name'];
    $mail=$_POST['email'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $blood=$_POST['group'];

    echo "Name  : ".$uname."<br>";
    echo "Mail  : ".$mail."<br>";
    echo "DOB   : ".$dob."<br>";
    echo "Gender: ".$gender."<br>";
    echo "Blood : ".$blood."<br>";
?>