<?php
require_once "database.php";

$email=$_POST['email'];

if (!isset($email) || empty($email)) {
  
    
    die ("Morate uneti email");
}
$result=$base->query("SELECT * FROM subscribe WHERE email='$email'");
    $email=$base->real_escape_string($email);
if ($result->num_rows>=1) {
    die ("Na ovom mejlu ste se vec pretplatili");

}
else {

    $base->query("INSERT INTO subscribe (email) VALUES ('$email')");
    header("Location:subscribe.php ");
}


?>