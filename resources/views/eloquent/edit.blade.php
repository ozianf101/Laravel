@extends('master')

@section('judul_halaman','Data Pegawai')

@section('konten')
 
 <a href="/blog/pegawai"> Kembali</a>
 
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

@foreach($pegawai as $p)
 <form action="/employee/update/{{ $p->pegawai_id }}" method="post">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
    <table class="table">        
    <tr><td>Nama</td><td><input type="text" name="nama" value="{{ $p->pegawai_nama }}" required="required"></td></tr>
        @if($errors->has('nama'))
            <div class="text-danger">
                {{ $errors->first('nama')}}
            </div>
        @endif
    <tr><td>Jabatan</td><td> <input type="text" name="jabatan" value="{{ $p->pegawai_jabatan }}" required="required"></td></tr>
    @if($errors->has('jabatan'))
            <div class="text-danger">
                {{ $errors->first('jabatan')}}
            </div>
        @endif
    <tr><td>Umur</td><td> <input type="number" name="umur" value="{{ $p->pegawai_umur }}" required="required"></td></tr>
    @if($errors->has('umur'))
            <div class="text-danger">
                {{ $errors->first('umur')}}
            </div>
        @endif
    <tr><td>Alamat</td><td> <textarea name="alamat" required="required">{{ $p->pegawai_alamat }}</textarea></td></tr>
    @if($errors->has('alamat'))
            <div class="text-danger">
                {{ $errors->first('alamat')}}
            </div>
        @endif
    <tr><td><input type="submit" value="Simpan Data" class="btn btn-success"></td></tr>
    </table>
    </form>
    @endforeach

@endsection