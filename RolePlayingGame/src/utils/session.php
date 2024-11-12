<?php
function isLoggedIn() {
    return isset($_SESSION['user']);
}

function loginUser($username) {
    $_SESSION['user'] = $username;
}

function logoutUser() {
    unset($_SESSION['user']);
    session_destroy();
}
