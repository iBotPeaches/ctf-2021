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
    <form action="{{ route('pet.update', [$pet]) }}" method="POST">
        <input name="name" class="form-control" type="text" value="{{ $pet->name ?? '' }}" placeholder="name">
        <input name="color" class="form-control" type="text" value="{{ $pet->color ?? '' }}" placeholder="color">
        @method('PATCH')
        @csrf
        <input type="submit" class="btn btn-block btn-success" value="update pet">
    </form>
</div>
</body>
</html>
