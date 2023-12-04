<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class NilaiSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=DB::select(DB::raw("select * from nilaisiswa"));
        return view('Nilai.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Nilai.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'id_data' => 'required',
            'id_pelajaran'=> 'required',
            'deskripsi' => 'required'
            ]);
            
            
            DB::insert("INSERT INTO `nilaisiswa` (`id_nilai`, `id_data`, `id_pelajaran`, `deskripsi`) VALUES (uuid(), ?, ?, ?)",
            [$request->id_data,$request->id_pelajaran,$request->deskripsi]);
            return redirect()->route('nilaisiswa.index')->with(['success' => 'Data berhasil Disimpan!']);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_nilai
     * @return \Illuminate\Http\Response
     */
    public function show($id_nilai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_nilai
     * @return \Illuminate\Http\Response
     */
    public function edit($id_nilai)
    {
        $data=DB::table('nilaisiswa')->where('id_nilai', $id_nilai)->first();
        return view('Nilai.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_nilai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_nilai)
    {
        $this->validate($request, [
            'id_data' => 'required',
            'id_pelajaran'=> 'required',
            'deskripsi' => 'required'
            ]);

            DB::update("UPDATE nilaisiswa SET id_data=?,id_pelajaran=?,deskripsi=? WHERE id_nilai=?",
            [$request->id_data,$request->id_pelajaran,$request->deskripsi,$id_nilai]);
        
        return redirect()->route('nilaisiswa.index')->with(['success' => 'Data Berhasil Diupdate']);
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_nilai
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_nilai)
    {
        DB::table('nilaisiswa')->where('id_nilai', $id_nilai)->delete();

        //redirect to index
        return redirect()->route('nilaisiswa.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
