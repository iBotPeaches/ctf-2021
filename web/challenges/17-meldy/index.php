<?php

if (! isset($_GET['type'])) {
    header('Location: /challenges/17-meldy/index.php?type=dog');
    exit();
}

$server = '127.0.0.1';
$database = 'ctf-2021-challenge-17';
$port = '3306';
$username = 'root';
$password = 'test';

// Create connection
$conn = new mysqli($server, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$whereBy = $_GET['type'] ?? 'dog';

$query = "SELECT * FROM `pets` WHERE `type` = '$whereBy'";
$result = mysqli_query($conn, $query);

$pets = [];
$content = '';
if (!$result || mysqli_num_rows($result) <= 0) {
    $error = mysqli_error($conn);
    $content = <<<HTML
<div class="alert alert-danger">
    No pets found. - $error
</div>
HTML;

}

if (empty($content)) {
    $pets = mysqli_fetch_all($result, MYSQLI_ASSOC);

    $content = '<table class="table table-bordered"><thead><tr><th>Name</th><th>Type</th></tr></thead><tbody>';
    foreach ($pets as $pet) {
        $content .= "<tr><td>{$pet['name']}</td><td>{$pet['type']}</td>";
    }
    $content .= '</tbody></table>';
}

echo <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../common/bootstrap.min.css"/>
    <title>Challenge 17 (Meldy)</title>
</head>
<script>
</script>
<body>
<div class="container">
    <h2>The Sourcetoad CTF (2021)</h2>
    <p>
    Welcome to our pet list. We are trying to enhance the features of this table by adding support to read our
    <kbd>settings (name/value)</kbd> table for a default amount of pets per page as well as adding filters for
    dog and cat.
    </p>
    <hr />
    <div class="text-center">
        $content
    </div>
</div>
</body>
</html>
HTML;