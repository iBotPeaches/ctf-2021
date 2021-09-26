<?php
$data = $_POST['data'];

libxml_disable_entity_loader (false);

$dom = new DOMDocument();
$dom->loadXML($data, LIBXML_NOENT | LIBXML_DTDLOAD);
$dogs = simplexml_import_dom($dom);
$json = json_encode($dogs);
$parsedData = json_decode($json, true);

if (isset($parsedData['dogs']['dog'])) {
    $count = count($parsedData['dogs']['dog']);

    echo <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../common/bootstrap.min.css"/>
    <title>Challenge 15</title>
</head>
<body>
<div class="container">
    <h2>The Sourcetoad CTF (2021)</h2>
    <div class="text-center">
        <textarea id="data" name="data" rows="15" cols="50">{$dogs->asXml()}</textarea>
    </div>
    <div class="alert alert-success">
        We have imported $count dog(s). Thank you!!
    </div>
    <a href="/challenges/15">Submit Another</a>
</div>
</div>
</body>
</html>
HTML;

    exit();
}

header('Location: /challenges/15');
exit();