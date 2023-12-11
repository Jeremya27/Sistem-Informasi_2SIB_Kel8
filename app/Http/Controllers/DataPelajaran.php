<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use DB;

class DataPelajaran extends Controller
{

    public function index()
    {
        $data = DB::select(DB::raw("SELECT * FROM data_pelajaran"));
        return view('data_pelajaran.index', compact('data'));
    }

    public function create()
    {
        return view('data_pelajaran.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'p_huruf' => 'required',
            'p_angka' => 'required',
            'p_warna' => 'required',
            'p_kata' => 'required',
            'p_mtk_dasar' => 'required'
        ]);

        DB::insert("INSERT INTO `data_pelajaran` (`id`, `p_huruf`, `p_angka`, `p_warna`, `p_kata`, `p_mtk_dasar`) VALUES (uuid(), ?, ?, ?, ?, ?)",
        [$request->p_huruf,$request->p_angka,$request->p_warna,$request->p_kata,$request->p_mtk_dasar]);
        return redirect()->route('data_pelajaran.index')->with(['success' => 'Data berhasil Disimpan!']);
    }
    public function show($id)
    {
      
    }

    public function edit($id)
    {
        $data = DB::table('data_pelajaran')->where('id', $id)->first();
        return view('data_pelajaran.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'p_huruf' => 'required',
            'p_angka' => 'required',
            'p_warna' => 'required',
            'p_kata' => 'required',
            'p_mtk_dasar' => 'required'
        ]);

        DB::update("UPDATE data_pelajaran SET p_huruf=?, p_angka=?, p_warna=?, p_kata=?, p_mtk_dasar=? WHERE id=?",
            [$request->p_huruf, $request->p_angka, $request->p_warna, $request->p_kata,  $request->p_mtk_dasar, $id]);

        return redirect()->route('data_pelajaran.index')->with(['success' => 'Data Berhasil Diupdate']);
    }

    public function destroy($id)
    {
        DB::table('data_pelajaran')->where('id', $id)->delete();

        return redirect()->route('data_pelajaran.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}