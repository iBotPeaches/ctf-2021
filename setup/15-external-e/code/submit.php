<?php
$data = $_POST['data'];

error_reporting(0);
ini_set('display_errors', 0);

libxml_disable_entity_loader (false);

$dom = new DOMDocument();
$dom->loadXML($data, LIBXML_NOENT | LIBXML_DTDLOAD);
$dogs = simplexml_import_dom($dom);
$json = json_encode($dogs);
$parsedData = json_decode($json, true);

if (isset($parsedData['dogs']['dog'])) {
    $count = count($parsedData['dogs']['dog']);

    $contents = '';
    foreach ($parsedData['dogs']['dog'] as $item) {
        $contents .= '<div class="alert alert-success">' .
            ($item['name'] ?? '?') .
            ' (' . ($item['type'] ?? '?') . ') has been added!' .
            '</div>';
    }

    echo <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="common/bootstrap.min.css"/>
    <title>Challenge 15 (External E)</title>
</head>
<body>
<div class="container">
    <h2>The Sourcetoad CTF (2021)</h2>
    $contents
    <a href="/">Submit Another</a>
</div>
</div>
</body>
</html>
HTML;

    exit();
}

echo <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="common/bootstrap.min.css"/>
    <title>Challenge 15 (External E)</title>
</head>
<body>
<div class="container">
    <h2>The Sourcetoad CTF (2021)</h2>
    <div class="alert alert-danger">
        Pet XML could not be parsed.
    </div>
    <a href="/">Submit Another</a>
</div>
</div>
</body>
</html>
HTML;
exit();