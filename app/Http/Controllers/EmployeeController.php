<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pegawai;

class EmployeeController extends Controller
{
    //
    public function index(){
        // $pegawai=Pegawai::all();
        // $pegawai=Pegawai::first();
        // $pegawai=Pegawai::find(2);
        // $pegawai=Pegawai::where('pegawai_nama','Lolox Hashibuan');
        // $pegawai=Pegawai::where('id',>,10);
        // $pegawai=Pegawai::where('pegawai_nama','Like','%a%');
        $pegawai=Pegawai::paginate(10);

        return view('eloquent.pegawai',['pegawai'=>$pegawai]);
    }
    public function tambah(){
        return view('eloquent.tambah');
    }
    public function cari(Request $request){
        $cari = $request->cari;

        $pegawai=DB::table('pegawai')->where('pegawai_nama','like',"%".$cari."%")->paginate();
        return view('eloquent.pegawai',['pegawai'=>$pegawai]);
    }
    public function store(Request $request)
    {
        //insert data ke table
        $this->validate($request,[
            'nama'=>'required|min:5|max:50',
            'alamat'=>'required',
            'jabatan'=>'required',
            'umur'=>'required|numeric|min:18|max:50'
        ]);
        Pegawai::create([
            'pegawai_nama'=> $request->nama,
            'pegawai_jabatan'=> $request->jabatan,
            'pegawai_umur'=> $request->umur,
            'pegawai_alamat'=> $request->alamat
        ]);
        return redirect('/employee');
    }
    public function edit($id)
    {
        //mengambil data pegawai berdasarkan id
        $pegawai=Pegawai::where('pegawai_id',$id);
        //passing data
        return view('eloquent.edit',['pegawai'=>$pegawai]);
    }
    public function update($id, Request $request)
    {
        $this->validate($request,[
            'nama'=>'required|min:5|max:50',
            'alamat'=>'required',
            'jabatan'=>'required',
            'umur'=>'required|numeric|min:18|max:50'
        ]);
        //update data
        $pegawai= Pegawai::find($id);
        $pegawai->pegawai_nama=$request->nama;
        $pegawai->pegawai_jabatan=$request->jabatan;
        $pegawai->pegawai_umur=$request->umur;
        $pegawai->pegawai_alamat=$request->alamat;
        $pegawai->save();
        return redirect('/employee');
    }
    
    //method hapus
    public function hapus($id){
        $pegawai=Pegawai::find($id);
        $pegawai->delete();
        return redirect()->back();
    }
}
