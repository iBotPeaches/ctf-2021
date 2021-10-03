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
    <form action="{{ url('/pet') }}" method="POST">
        <input name="name" class="form-control" type="text" placeholder="name">
        <input name="color" class="form-control" type="text" placeholder="color">
        <select name="type" class="form-control">
            <option>dog</option>
            <option>cat</option>
        </select>
        @csrf
        <input type="submit" class="btn btn-block btn-success" value="add pet">
    </form>
</div>
</body>
</html>
