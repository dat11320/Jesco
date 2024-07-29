<?php
function insert_user($username, $password, $email){
    $sql="INSERT INTO user( username, email, password ) value('$username', '$email','$password')";
    return pdo_execute_lastID($sql);
}
?>