<?php

if (isset($_COOKIE['secure_auth'])) {
    $user = unserialize($_COOKIE['secure_auth']);
    $name = $user['name'] ?? 'Unknown';
} else {
    header('Location: /challenges/9');
    exit();
}
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
        Welcome $name
    </div>
</div>
</body>
</html>
HTML;