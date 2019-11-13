@extends('master')

@section('judul_halaman','Data Pegawai')

@section('konten')
 
 <a href="/blog/pegawai"> Kembali</a>
 
 <br/>
 <br/>
@foreach($pegawai as $p)
 <form action="/pegawai/update" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
    <table class="table">        
    <tr><td>Nama</td><td><input type="text" name="nama" value="{{ $p->pegawai_nama }}" required="required"></td></tr>
    <tr><td>Jabatan</td><td> <input type="text" name="jabatan" value="{{ $p->pegawai_jabatan }}" required="required"></td></tr>
    <tr><td>Umur</td><td> <input type="number" name="umur" value="{{ $p->pegawai_umur }}" required="required"></td></tr>
    <tr><td>Alamat</td><td> <textarea name="alamat" required="required">{{ $p->pegawai_alamat }}</textarea></td></tr>
    <tr><td><input type="submit" value="Simpan Data" class="btn btn-success"></td></tr>
    </table>
    </form>
    @endforeach

@endsection