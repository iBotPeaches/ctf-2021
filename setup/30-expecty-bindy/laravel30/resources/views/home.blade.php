<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ url('bootstrap.min.css', [], true) }}"/>
    <title>Challenge 30 (Expecty Bindy)</title>
</head>
<body>
<div class="container" id="app">
    <h2>The Sourcetoad CTF (2021)</h2>
    <p>
        Welcome to our company directory. We are trying to allow employees to find others, but also we want
        to hide the admins from this directory. We were working on filtering on like id, but then ran out of time.
    </p>
    <challenge30></challenge30>
    <footer class="footer">
        <div class="container">
            <p class="text-muted">Powered via Laravel 8.22.0</p>
        </div>
    </footer>
</div>
</body>
<script src="{{ url('js/app.js', [], false) }}"></script>
</html>
