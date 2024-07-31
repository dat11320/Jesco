<?php
function insert_user($username, $password, $email, $hoten){
    $sql="INSERT INTO user( username, email, password, hoten ) value('$username', '$email','$password','$hoten')";
    return pdo_execute_lastID($sql);
}
?>