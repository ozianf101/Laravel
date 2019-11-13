@extends('master')

@section('judul_halaman','Data Pegawai')

@section('konten')
 
 <a href="/employee"> Kembali</a>
 
 <br/>
 <br/>
            @if (count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

 <form action="/employee/store" method="post">
    {{ csrf_field() }}
    <table class="table">        
    <tr><td>Nama</td><td><input type="text" name="nama" required="required" value="{{ old('nama') }}"></td></tr>
    <tr><td>Jabatan</td><td> <input type="text" name="jabatan" required="required" value="{{ old('jabatan') }}"></td></tr>
    <tr><td>Umur</td><td> <input type="number" name="umur" required="required" value="{{ old('umur') }}"></td></tr>
    <tr><td>Alamat</td><td> <textarea name="alamat" required="required" >{{ old('alamat') }}</textarea></td></tr>
    <tr><td><input type="submit" value="Simpan Data" class="btn btn-success" ></td></tr>
    </table>
    </form>

@endsection