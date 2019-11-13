<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
 
    <title>{{ config('app.name', 'Laravel') }}</title>
 
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
            html, body {
                height: 100%;
            }
 
            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Arial';
            }
 
            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }
 
            .content {
                text-align: center;
                display: inline-block;
            }
 
            .title {
                font-size: 96px;
            }
        </style>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
 
	<header>
 
		<h2>Blog MalasNgoding</h2>
		<nav class="navbar navbar-expand-lg navbar-light bg-secondary text-white">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="/blog">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="/blog/pegawai">PEGAWAI</a></li>
                    <li class="nav-item"><a class="nav-link" href="/blog/tentang">TENTANG</a></li>
                    <li class="nav-item"><a class="nav-link" href="/blog/kontak">KONTAK</a></li>
                </ul>
            </div>
		</nav>
	</header>
	<hr/>
	<br/>
    <br/>

 
	<!-- bagian judul halaman blog -->
	<h3> @yield('judul_halaman') </h3>
 
 
	<!-- bagian konten blog -->
	@yield('konten')
 
 
	<br/>
	<br/>
	<hr/>
	<footer>
		<p>&copy; <a href="https://www.malasngoding.com">www.malasngoding.com</a>. 2018 - 2019</p>
	</footer>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="/js/app.js"></script>
</body>
</html>