@extends('master')

@section('judul_halaman','Data Pegawai')

@section('konten')

    <style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin:5px;
		}
	</style>

    <a href="/employee/tambah" class='btn btn-success'> + Tambah Pegawai Baru</a>
	
    <br/>
    <div class="form-group">
    </div>
    
    <form action="/employee/cari" method="GET" class="form-inline">
        <input type="text" name="cari" placeholder="Cari Pegawai .." Value="{{ old('cari') }}" class="form-control">
        <input type="submit" value="CARI" class="btn btn-primary ml-3">
    </form>
	<br/>
 
	<table border="1" class="table table-hover table-bordered table-striped">
		<thead>
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		</thead>
		<tbody>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a href="/employee/edit/{{ $p->pegawai_id }}" class="btn btn-warning btn-sm">Edit</a>
				|
				<a href="/employee/hapus/{{ $p->pegawai_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
		</tbody>
    </table>
    
    <br/>
    Halaman : {{ $pegawai->currentPage() }} <br/>
    Jumlah Data : {{ $pegawai->total() }} <br/>
    Data Per Halaman : {{ $pegawai->perPage() }} <br/>

    {{ $pegawai->links() }}

@endsection