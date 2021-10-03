<?php
$username = $_POST['username'];
$password = md5($_POST['password']);

if ($username === 'toad' && $password === 'ca03e4b0d6a8a08f400264b5e45fb441') {
    $userId = md5($username . $password);

    // Create a more secure login cookie
    setcookie('secure_auth', serialize([
        'id' => $userId,
        'name' => $username,
        'role' => 'user'
    ]));

    header('Location: /challenges/9-bluechip/home.php');
    exit();
}

header('Location: /challenges/9-bluechip');
exit();