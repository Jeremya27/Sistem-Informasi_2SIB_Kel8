<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=DB::select(DB::raw("select * from admin1"));
        return view('Admin.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.create');
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
            'email' => 'required',
            'username'=> 'required',
            'password' => 'required'
            ]);
            
            
            
            DB::insert("INSERT INTO `admin1` (`id_admin`, `email`, `username`, `password`) VALUES (uuid(), ?, ?, ?)",
            [$request->email,$request->username,$request->password]);
            return redirect()->route('admin1.index')->with(['success' => 'Data berhasil Disimpan!']);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_admin
     * @return \Illuminate\Http\Response
     */
    public function show($id_admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_admin
     * @return \Illuminate\Http\Response
     */
    public function edit($id_admin)
    {
        $data=DB::table('admin1')->where('id_admin', $id_admin)->first();
        return view('Admin.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_admin)
    {
        $this->validate($request, [
            'email'=> 'required',
            'username'=> 'required',
            'password' => 'required',
            ]);

            DB::update("UPDATE admin1 SET email=?,username=?,password=? WHERE id_admin=?",
            [$request->email,$request->username,$request->password,$id_admin]);
        
        return redirect()->route('admin1.index')->with(['success' => 'Data Berhasil Diupdate']);
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_admin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_admin)
    {
        DB::table('admin1')->where('id_admin', $id_admin)->delete();

        //redirect to index
        return redirect()->route('admin1.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
