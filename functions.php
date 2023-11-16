<?php
function login($username, $password) {
    $usersFile = 'users.txt';
    if (file_exists($usersFile)) {
        $users = file($usersFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach ($users as $user) {
            list($storedUsername, $storedHashedPassword) = explode(':', $user);
            if ($username === $storedUsername && password_verify($password, $storedHashedPassword)) {
                session_start();
                $_SESSION['registered_user'] = $username;
                return true; 
            }
        }
    }
    return false; 
}
?>