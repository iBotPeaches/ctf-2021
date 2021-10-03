<?php

$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? null;

$allowed = [
    'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',
    'Googlebot/2.1 (+http://www.google.com/bot.html)',
    'Googlebot'
];

$contents = <<<HTML
<div class="alert alert-danger">
    Payment missing. Please pay.
</div>
HTML;

if (in_array($userAgent, $allowed)) {
    $contents = <<<HTML
    <div class="alert alert-info">Welcome User!</div>
    <div class="alert alert-success">TOAD{50-Y0u'v3-83c0M3-9009L3}</div>
HTML;

} else {
    http_response_code(402);
}

echo <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../common/bootstrap.min.css"/>
    <title>Challenge 24 (Cloaking)</title>
</head>
<script>
</script>
<body>
<div class="container">
    <h2>The Sourcetoad CTF (2021)</h2>
    <div class="text-center">
        $contents
    </div>
</div>
</body>
</html>
HTML;