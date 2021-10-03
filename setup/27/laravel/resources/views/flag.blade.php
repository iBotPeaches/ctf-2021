<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ url('bootstrap.min.css', [], true) }}"/>
    <title>Challenge 27</title>
</head>
<body>
<div class="container">
    <h2>The Sourcetoad CTF (2021)</h2>
    <p>
        Welcome to the Pet dashboard. The cats are keeping this flagged locked down. Unfortunately, all the cats
        are on vacation. So the flag won't open till we get a cat.
    </p>
    @if ($hasCat)
        <div class="alert alert-success">
            TOAD{7h3-c475-W3R3-b0rN-fR0m-m422-4221gnM3N7}
        </div>
    @else
        <div class="alert alert-warning">
            No cats detected! Get outta here dog!!
        </div>
        <br />
        <a href="{{ url('/') }}">go home</a>
    @endif
</div>
</body>
</html>
