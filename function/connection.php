<?php
//$servername = "localhost";
$Names = "Names";
$Email = "Email";
$password = "password";
$telephone = "telephone";
$accountnumber = "account number";
$pinnumber = "pin-number";
$totalamount = "total-amount";


// Create connection

$conn = new mysqli('localhost', 'root, '', 'Wallet');

// Check connection

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
  $stmt=$conn->prepare("insert into client(Names, Email, password, telephone, account number, pin-number, total-amount)
  values(?,?,?,?,?,?,?,?)");
}
$stmt->blind_param("sssiiii" $Names,  $Email, $password, $telephone, $accountnumber, $pinnumber, $totalamount);
$stmt->execute();
echo "Connected successfully";
$stmt->close();
$conn->close();
?>