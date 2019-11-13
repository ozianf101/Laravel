@extends('master')

@section('judul_halaman','Data Pegawai')

@section('konten')
 
 <a href="/blog/pegawai"> Kembali</a>
 
 <br/>
 <br/>

 <form action="/pegawai/store" method="post">
    {{ csrf_field() }}
    <table class="table">        
    <tr><td>Nama</td><td><input type="text" name="nama" required="required"></td></tr>
    <tr><td>Jabatan</td><td> <input type="text" name="jabatan" required="required"></td></tr>
    <tr><td>Umur</td><td> <input type="number" name="umur" required="required"></td></tr>
    <tr><td>Alamat</td><td> <textarea name="alamat" required="required"></textarea></td></tr>
    <tr><td><input type="submit" value="Simpan Data" class="btn btn-success"></td></tr>
    </table>
    </form>

@endsection