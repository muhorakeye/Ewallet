<?php
    $host="localhost";
    $user="root";
    $pass="";
    $db="wallet";

    $conn=new mysqli($host,$user,$pass,$db);
    if(!$conn)
    {
      echo"there are ploblem";
    }
    else {
        echo"connected";
    }
if(isset($_POST['submit'])){

$date=$_POST['date'];
$Amount=$_POST['Amount'];
$Name=$_POST['Name'];
$Pin=$_POST['Pin'];

$sql=("INSERT INTO account (date, Amount, Name, Pin) 
VALUES ('$date','$Amount','$Name','$Pin')");
$insert= mysqli_query($conn,$sql);
if(!$insert){
    echo"there are pronlem while inserting data";
}
else{
    echo"data inserted successfully!";
}
}
?>