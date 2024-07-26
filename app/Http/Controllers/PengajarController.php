<?php

namespace App\Http\Controllers;

use App\Models\Pengajar;
use Illuminate\Http\Request;

class PengajarController extends Controller
{
    public function index()
    {
        $pengajar = Pengajar::all();
        return view('pengajar.index', [
            'title' => 'Sistem Manajemen Santri TPA Hidayatus Shibyan'
        ], compact('pengajar'));
    }

    public function store(Request $request)
    {
        Pengajar::create($request->all());
        return redirect('/pengajar');
    }
    public function destroy($id)
    {
        $data = Pengajar::find($id);

        if ($data) {
            $data->delete();
            return response()->json(['message' => 'Data berhasil dihapus']);
        } else {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }
        return redirect('/pengajar');
    }
}