<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}

if (isset($row) && isset($returnData)) {
    $_SESSION['user']['name'] = $row['name'];
    $_SESSION['token'] = $returnData['token'];
    $_SESSION['user']['id'] = $row['id'];
    $_SESSION['user']['roles_id'] = $row['roles_id'];
    $_SESSION['user']['email'] = $row['email'];
    $_SESSION['user']['username'] = $row['username'];
    $_SESSION['user']['image'] = $row['profile_img'];
}

if (!isset($_SESSION['user'])) {
    header('Location: login.php'); 
}

// print_r($_SESSION);die();