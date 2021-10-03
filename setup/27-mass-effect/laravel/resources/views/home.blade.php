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
    <p>
        Welcome to the Pet dashboard. The cats are keeping this flag locked down. Unfortunately, all the cats
        are on vacation. So the flag won't open till we get a cat.
    </p>
    <p>
        After we resolve that issue. We should probably redo our database. It is pretty poorly built.
<pre>
Schema::create('pets', function (Blueprint $table) {
    $table->id('id');
    $table->string('type', 3);
    $table->string('name', 32);
    $table->string('color', 32);
});
</pre>
</p>
    <hr />
    <a class="btn btn-info btn-block" href="{{ route('pet.create') }}">create pet</a>
    <br />
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Pet Name</th>
                <th>Color</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pets as $pet)
                <tr>
                    <td>{{ $pet->name }}</td>
                    <td>{{ $pet->color }}</td>
                    <td>
                        <a href="{{ route('pet.edit', [$pet])  }}">edit</a>
                        <a style="color:black" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $pet->id }}').submit();">
                            delete
                        </a>
                        <form id="delete-form-{{ $pet->id }}" action="{{ route('pet.destroy', [$pet]) }}" method="POST" style="display: none;">
                            @method('delete')
                            @csrf
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br />
    <a class="btn btn-success btn-block" href="{{ url('/flag') }}">flag</a>
</div>
</body>
</html>
