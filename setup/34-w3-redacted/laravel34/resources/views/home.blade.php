<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ url('bootstrap.min.css', [], true) }}"/>
    <title>Challenge 34 (W3 Redacted)</title>
</head>
<body>
<div class="container" id="app">
    <h2>The Sourcetoad CTF (2021)</h2>
    <p>
        We got an assessment for our "build a login page" from Lemon Larry. We are waiting for the password. The code is below.
    </p>
    <hr />
    <pre>
$email = $request->get('email');
$password = $request->get('password');

$user = DB::select("SELECT * FROM `users` WHERE `email` = '{$email}' AND `password` = '{$password}'");

if ($user && is_array($user)) {
    return view('dashboard');
}

throw ValidationException::withMessages([
    'email' => 'invalid email or password'
]);
    </pre>
    <hr />
    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h3 class="card-header text-center">Login</h3>
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Email" id="email" class="form-control" name="email" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-primary btn-block">Signin</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <hr />
</div>
</body>
</html>
