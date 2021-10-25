<?php
$server = '127.0.0.1';
$database = 'challenge8';
$port = '3306';
$username = 'challenge8';
$password = 'qwbfh5RH3KV7Lu6Rq0HK';

// Create connection
$conn = new mysqli($server, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "SELECT * FROM `users` WHERE `username`= '$username' AND `password`='$password'";
$result = mysqli_query($conn, $query);

if (!$result || mysqli_num_rows($result) <= 0) {
    $error = mysqli_error($conn);

    echo <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../common/bootstrap.min.css"/>
    <title>Challenge 8 (Injectii)</title>
</head>
<script>
</script>
<body>
<div class="container">
    <h2>The Sourcetoad CTF (2021)</h2>
    <div class="alert alert-danger">
        Oops. Those creds are not right. - <pre>$error</pre>
    </div>
</div>
</body>
</html>
HTML;
    return;
}

$array = mysqli_fetch_array($result);

$flag = base64_decode('VE9BRHs1UWwtMU5qM2M3MTBuNS00cjMtMzQ1WX0=');
echo <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../common/bootstrap.min.css"/>
    <title>Challenge 8 (Injectii)</title>
</head>
<script>
</script>
<body>
<div class="container">
    <h2>The Sourcetoad CTF (2021)</h2>
    <div class="alert alert-success">
        $flag
    </div>
</div>
</body>
</html>
HTML;