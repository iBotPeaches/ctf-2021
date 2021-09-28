<?php

if (! isset($_GET['page'])) {
    header('Location: /challenges/19/index.php?page=3');
    exit();
}

$page = (int) $_GET['page'];

switch ($page) {
    case 1:
        $content = 'TOAD{uRl_maNIpUlaTi0N_I5_R33l}';
        break;

    case 2:
    case 3:
        $content = 'The office is thinking about making a text based game.';
        $content .= PHP_EOL . '<a href="/challenges/19/index.php?page=4">start game.</a>';
        break;

    case 4:
        $content = 'This game is under construction.';
        break;

    default:
        $content = bin2hex(openssl_random_pseudo_bytes(10));
        break;
}


echo <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../common/bootstrap.min.css"/>
    <title>Challenge 19</title>
</head>
<script>
</script>
<body>
<div class="container">
    <h2>The Sourcetoad CTF (2021)</h2>
    <div class="text-center">
        $content
    </div>
</div>
</body>
</html>
HTML;