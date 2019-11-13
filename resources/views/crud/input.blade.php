<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Validate</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

    <script src="main.js"></script>

</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3 class="text-center">form validasi</h3>
                        <br/>
                        {{-- menampilkan error validasi --}}
                        @if (count($errors)>0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <br/>
                        
                        <form action="/proses" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input class="form-control" type="text" name="nama" value="{{ old('nama') }}">
                            </div>
                            <div class="form-group">
                                <label for="pekerjaan">Pekerjaan</label>
                                <input class="form-control" type="text" name="pekerjaan" value="{{ old('pekerjaan') }}">
                            </div>
                            <div class="form-group">
                                <label for="usia">Usia</label>
                                <input class="form-control" type="text" name="usia" value="{{ old('usia') }}">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" value="proses">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>