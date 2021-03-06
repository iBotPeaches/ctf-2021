<?php

$contents = null;
if ($_POST['url']) {
    $contents = @file_get_contents($_POST['url']);
}

if ($contents) {
    $contents = "<hr /><textarea rows=\"50\" cols=\"50\">$contents</textarea>";
}

echo <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../common/bootstrap.min.css"/>
    <title>Challenge 23 (The Borg)</title>
</head>
<body>
<div class="container">
    <h2>The Sourcetoad CTF (2021)</h2>
    <div class="text-center">
        <p>
            A new feature is under development to automatically screenshot websites. You simply give a URL and it
            renders the website! We have some features to finish, but its 50% there!
        </p>
        $contents
        <hr />
        <form id="creds" action="/challenges/23-the-borg/index.php" method="POST">
            <label for="url">URL</label>
            <input type="text" id="url" name="url">

            <br />
            <button class="btn btn-primary" type="submit">Screenshot Website</button>
        </form>
    </div>
</div>
</body>
</html>
HTML;