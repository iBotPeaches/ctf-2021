<?php

$hex = '544f41447b4833582d436f6c4f72352d684944332d3768332d6d3335353439337d';
$content = '';

foreach (str_split($hex, 6) as $value) {
    $content .= '<div class="badge" style="width: 100px; height: 100px; background-color: #' . $value . '">&nbsp;</div>';
}


echo <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../common/bootstrap.min.css"/>
    <title>Challenge 31 (Colours)</title>
</head>
<body>
<div class="container">
    <h2>The Sourcetoad CTF (2021)</h2>
    <div class="text-center">
        <p>
            Is it art? Or an illegal number?
        </p>
        $content
    </div>
</div>
</body>
</html>
HTML;