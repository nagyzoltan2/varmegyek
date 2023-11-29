<?php

namespace App\Http\Controllers;

use App\Models\Varmegyek;
use Illuminate\Http\Request;

class VarmegyekController extends Controller
{
    public function index()
    {
        $varmegyek = Varmegyek::orderBy('nev')->get();
        return view('varmegyek.index', compact('varmegyek'));
    }

    public function create()
    {
        return view('varmegyek.create');
    }

    public function store(Request $request)
    {
        Varmegyek::create($request->all());
        return redirect()->route('varmegyek.index');
    }

    public function edit(Varmegyek $varmegy)
    {
        return view('varmegyek.edit', compact('varmegy'));
    }

    public function update(Request $request, Varmegyek $varmegy)
    {
        $varmegy->update($request->all());
        return redirect()->route('varmegyek.index');
    }

    public function destroy(Varmegyek $varmegy)
    {
        $varmegy->delete();
        return redirect()->route('varmegyek.index');
    }

    public function filter(Request $request)
    {
        $varmegyek = Varmegyek::where('nev', 'like', '%' . $request->input('filter') . '%')->orderBy('nev')->get();
        return view('varmegyek.index', compact('varmegyek'));
    }
}

