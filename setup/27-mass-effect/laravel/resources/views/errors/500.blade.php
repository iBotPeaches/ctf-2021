<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ url('bootstrap.min.css', [], true) }}"/>
    <title>Challenge 27 (Mass Effect)</title>
</head>
<body>
<div class="container">
    <h2>The Sourcetoad CTF (2021)</h2>
    <div class="alert alert-danger">
        {{ $exception->getMessage() }}
    </div>
    <br />
    <a href="{{ url('/') }}">go home</a>
</div>
</body>
</html>
