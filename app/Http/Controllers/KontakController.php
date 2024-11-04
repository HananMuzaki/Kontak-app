<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $kontaks = Kontak::all();
    return view('kontaks.index', compact('kontaks'));
}

public function create()
{
    return view('kontaks.create');
}

public function store(Request $request)
{
    Kontak::create($request->all());
    return redirect()->route('kontaks.index');
}

public function edit(Kontak $kontak)
{
    return view('kontaks.edit', compact('kontak'));
}

public function update(Request $request, Kontak $kontak)
{
    $kontak->update($request->all());
    return redirect()->route('kontaks.index');
}

public function destroy(Kontak $kontak)
{
    $kontak->delete();
    return redirect()->route('kontaks.index');
}

}
