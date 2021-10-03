<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\View\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(): View
    {
        return view('home', [
            'pets' => Pet::query()->get()
        ]);
    }

    public function destroy(Pet $pet)
    {
        $pet->forceDelete();

        return redirect('/');
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $pet = new Pet();
        $pet->fill($request->all());

        if ($pet->type === 'cat') {
            throw new \Exception('Creating cat is not allowed at this time.');
        }
        $pet->saveOrFail();

        return redirect('/');
    }

    public function edit(Pet $pet)
    {
        return view('update', [
            'pet' => $pet
        ]);
    }

    public function update(Request $request, Pet $pet)
    {
        $pet->fill($request->all());
        $pet->saveOrFail();

        return redirect('/');
    }

    public function flag()
    {
        $hasCat = (bool) Pet::query()
            ->where('type', 'cat')
            ->count();

        return view('flag', [
            'hasCat' => $hasCat
        ]);
    }
}
