<?php

$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? null;

$allowed = [
    'APIs-Google',
    'APIs-Google (+https://developers.google.com/webmasters/APIs-Google.html)',
    'Mediapartners-Google',
    'AdsBot-Google-Mobile',
    'Mozilla/5.0 (Linux; Android 5.0; SM-G920A) AppleWebKit (KHTML, like Gecko) Chrome Mobile Safari (compatible; AdsBot-Google-Mobile; +http://www.google.com/mobile/adsbot.html)',
    'Mozilla/5.0 (iPhone; CPU iPhone OS 9_1 like Mac OS X) AppleWebKit/601.1.46 (KHTML, like Gecko) Version/9.0 Mobile/13B143 Safari/601.1 (compatible; AdsBot-Google-Mobile; +http://www.google.com/mobile/adsbot.html)',
    'AdsBot-Google',
    'AdsBot-Google (+http://www.google.com/adsbot.html)',
    'Googlebot-Image',
    'Googlebot',
    'Googlebot-Image/1.0',
    'Googlebot-News',
    'Googlebot-Video',
    'Mediapartners-Google',
    '(Various mobile device types) (compatible; Mediapartners-Google/2.1; +http://www.google.com/bot.html)',
    'AdsBot-Google-Mobile-Apps',
    'Google-Read-Aloud',
    'google-speakr',
    'DuplexWeb-Google',
    'Mozilla/5.0 (Linux; Android 11; Pixel 2; DuplexWeb-Google/1.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.193 Mobile Safari/537.36',
    'Google Favicon',
    'Mozilla/5.0 (Linux; Android 4.2.1; en-us; Nexus 5 Build/JOP40D) AppleWebKit/535.19 (KHTML, like Gecko; googleweblight) Chrome/38.0.1025.166 Mobile Safari/535.19',
    'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/W.X.Y.Z Safari/537.36',
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
