<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use Illuminate\Http\Request;

class SantriController extends Controller
{
    public function index()
    {
        $santri = Santri::all();
        return view('santri.index', [
            'title' => 'Sistem Manajemen Santri TPA Hidayatus Shibyan'
        ], compact('santri'));
    }

    public function store(Request $request)
    {
        Santri::create($request->all());
        return redirect('/santri');
    }

    public function destroy($id)
    {
        $santri = Santri::find($id);
        $santri->delete();
        return redirect('/santri');
    }
    public function galery()
    {
        return view('santri.galery', [
            'title' => 'Galery Santri TPA Hidayatus Shibyan Karangkunti'
        ]);
    }
}
