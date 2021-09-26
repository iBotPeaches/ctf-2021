<?php
$server = '127.0.0.1';
$database = 'ctf-2021-challenge-8';
$port = '3306';
$username = 'root';
$password = 'test';

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
    echo 'Oops. Those creds are not right.';
    die();
}

$array = mysqli_fetch_array($result);
echo base64_decode('VE9BRHs1UWwtMU5qM2M3MTBuNS00cjMtMzQ1WX0=');
die();