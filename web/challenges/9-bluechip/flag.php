<?php

if (isset($_COOKIE['secure_auth'])) {
    $user = unserialize($_COOKIE['secure_auth']);
    $name = $user['name'] ?? 'Unknown';
    $role = $user['role'] ?? 'user';
} else {
    header('Location: /challenges/9');
    exit();
}

if ($role === 'admin') {
    echo <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../common/bootstrap.min.css"/>
    <title>Challenge 9</title>
</head>
<body>
<div class="container">
    <h2>The Sourcetoad CTF (2021)</h2>
    <div class="text-center">
        <div class="alert alert-success">
            TOAD{5o-YOu-knOW-How-7O-mOdIfy-CooKI3Z}
        </div>
    </div>
</div>
</body>
</html>
HTML;
    die();
} else {
    echo <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../common/bootstrap.min.css"/>
    <title>Challenge 9</title>
</head>
<body>
<div class="container">
    <h2>The Sourcetoad CTF (2021)</h2>
    <div class="text-center">
        <div class="alert alert-danger">
            $name permission denied. Expected "admin", got "$role"
        </div>
    </div>
</div>
</body>
</html>
HTML;
}