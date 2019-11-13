<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //mengambil pegawai
        $pegawai = DB::table('pegawai')->paginate(10);
        return view('crud.index',['pegawai'=>$pegawai]);
    }
    public function tambah(){
        return view('crud.tambah');
    }
    public function cari(Request $request){
        $cari = $request->cari;

        $pegawai=DB::table('pegawai')->where('pegawai_nama','like',"%".$cari."%")->paginate();
        return view('crud.index',['pegawai'=>$pegawai]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //insert data ke table
        DB::table('pegawai')->insert([
            'pegawai_nama'=> $request->nama,
            'pegawai_jabatan'=> $request->jabatan,
            'pegawai_umur'=> $request->umur,
            'pegawai_alamat'=> $request->alamat
        ]);
        return redirect('/blog/pegawai');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //mengambil data pegawai berdasarkan id
        $pegawai=DB::table('pegawai')->where('pegawai_id',$id)->get();
        //passing data
        return view('crud.edit',['pegawai'=>$pegawai]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //update data
        DB::table('pegawai')->where('pegawai_id',$request->id)->update([
            'pegawai_nama'=> $request->nama,
            'pegawai_jabatan'=> $request->jabatan,
            'pegawai_umur'=> $request->umur,
            'pegawai_alamat'=> $request->alamat
        ]);
        return redirect('/blog/pegawai');
    }
    
    //method hapus
    public function hapus($id){
        DB::table('pegawai')->where('pegawai_id',$id)->delete();
        return redirect('/blog/pegawai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
