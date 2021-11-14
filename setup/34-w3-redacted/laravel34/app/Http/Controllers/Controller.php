<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;
use JamesDordoy\LaravelVueDatatable\Http\Resources\DataTableCollectionResource;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(): View
    {
        return view('home');
    }

    public function login(Request $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');

        $user = DB::select("SELECT * FROM `users` WHERE `email` = '{$email}' AND `password` = '{$password}'");

        if ($user && is_array($user)) {
            return view('flag');
        }

        throw ValidationException::withMessages([
            'email' => 'invalid email or password'
        ]);
    }
}
