<?php

$validColors = array('lead_white', 'orpiment', 'realgar', 'vermilion', 'naples_yellow', 'scheele_green', 'uranium_orange');

$color = isset($_GET['color']) ? $_GET['color'] : 'realgar';

$data = '';
if ($color) {
    $data = include 'data/' . $color . '.php';
}

$colorName = "Unknown";

if (in_array($color, $validColors)) {
    $colorName = ucwords(str_replace('_', ' ', $color));
}

$links = '';
foreach ($validColors as $item) {
    $links .= '<a href="?color=' . $item . '">' . ucwords(str_replace('_', ' ', $item)) . '</a> - ';
}

$links = rtrim($links, '- ');

echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <link rel=\"stylesheet\" href=\"common/bootstrap.min.css\"/>
    <title>Challenge 32 (Poison)</title>
</head>
<body>
<div class=\"container\">
    <h2>The Sourcetoad CTF (2021)</h2>
    <div class=\"text-center\">
        We dug up this old project. It was built way back on PHP5.2 and it was hacked because of CVE-2011-2202. 
    </div>
    <hr />
<pre>
\$color = isset(\$_GET['color']) ? \$_GET['color'] : 'realgar';
if (\$color) {
    \$data = include 'data/' . \$color . '.php';
}
</pre>
    <p>
        Now it will only load colors from the data directory that are specifically php files. So enjoy a trip of dangerous colors!!  
    </p>
    <br />
    <hr />
    <h2>$colorName</h2>
    $data
    <br />
    <br />
    <blockquote>Thanks <a href=\"https://petroleumservicecompany.com/blog/historys-most-toxic-colors/\">https://petroleumservicecompany.com/blog/historys-most-toxic-colors/</a></blockquote>
    <hr />
    $links
</div>
</body>
</html>";