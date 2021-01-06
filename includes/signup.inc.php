<?php
if (isset($_POST{'signup-sumbit'})) {

    require 'dbh.inc.php';

    $usernname = $_POST{'uid'};
    $email = $_POST{'mail'};
    $password = $_POST{'pwd'};
    $passwordrepeat = $_POST{'pwd_repeat'};

if (empty($username)|| empty($username) ||empty(username) ||empty($username)) {
header("Location:../signup.php?error=emptyfields$uid=".$username."$mail=".$email);
}
     
}