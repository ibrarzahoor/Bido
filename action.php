<?php
include('config.php');
$id = $_POST["id"];
$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$bid = $_POST["bid"];
$adress = $_POST["adress"];
// $date = $_POST["date"];
$date = $_POST["date"];



$sql = "INSERT INTO userbuy  VALUES ('$id','$name','$adress','$phone','$date')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h1>Bid Done!</h1><br><h2>At Price</h2>";
            echo nl2br("\n $bid \n ");
            echo nl2br("\n $name\n  "
                . "$adress\n $phone\n$date");
                
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }