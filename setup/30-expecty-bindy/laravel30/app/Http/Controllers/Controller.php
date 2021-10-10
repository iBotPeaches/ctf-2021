<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\View\View;
use JamesDordoy\LaravelVueDatatable\Http\Resources\DataTableCollectionResource;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(): View
    {
        return view('home');
    }

    public function users(Request $request)
    {
        $query = User::query();

        if ($request->has('id')) {
            $query->where('id', $request->input('id'));
        }

        $query->where('is_admin', 0);
        $data = $query->get();

        return new DataTableCollectionResource($data);
    }
}
