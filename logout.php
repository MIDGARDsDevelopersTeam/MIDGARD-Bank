<?php
if (isset($_COOKIE['user'])) {
    unset($_COOKIE['user']); 
    setcookie('user', null, -1, '/'); 
    header('Location: http://'.$_SERVER['HTTP_HOST'].'/login.php');
    return true;
} else {
    header('Location: http://'.$_SERVER['HTTP_HOST'].'/login.php');
    return false;
}
?>