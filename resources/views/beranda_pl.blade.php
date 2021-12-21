'
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Monitoring Proyek PT. Arsira Multi Konstruksi</title>
    <!-- FONTAWESOME CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap-5.1.0-dist\bootstrap-5.1.0-dist\css\bootstrap.min.css">
    <link href="{{ asset('/css/index.css?v=').time() }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/iziToast.css') }}" rel="stylesheet">
</head>

<body>
    <x-navbar />

    <!-- NAVBAR SISI KIRI MULAI -->
    <div class="sidebar">
        <br>
        <center>
            <img src="{{ asset('storage/'.auth()->user()->gambar) ?? asset('gambar/user.png') }}" class="foto_profil"
                alt="">
            <h4 style="font-size: 95%;">{{ auth()->user()->name }}</h4>
        </center>
        <a href="{{route('dashboardpl')}}"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
        <a href="{{route('beranda',$proyek->id)}}"><i class="fas fa-user"></i><span>Beranda</span></a>
        <a href="#"><i class="fas fa-file-invoice-dollar"></i><span>Keuangan</span></a>
        <a href="#"><i class="fas fa-tasks"></i><span>Progress</span></a>

    </div>
    <!-- NAVBAR SISI KIRI AKHIR -->`

    <!-- JUDUL PAGE MULAI -->
    <div class="judul_page">
        <h3>{{ $proyek->nama_proyek }}</h3>
    </div>
    <!-- JUDUL PAGE AKHIR -->

    <!-- KONTEN MULAI -->
    <div id="carouselExampleIndicators" class="karusel carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <img src="{{ asset('storage/'. $proyek->gambar) }}" alt="" class="d-block w-100 justify-content-center">
        </div>
    </div>

    <!-- Lokasi Proyek -->
    <div class="konten">
        <h3>LOKASI PROYEK</h3>
        <div class="row">
            <div class="col text-center">
                {!! $proyek->maps !!}
            </div>
        </div>
    </div>

    <!-- Kontrak -->
    <div class="konten">
        <h3>KONTRAK</h3>
        <div class="row">
            <div class="col">
                {{ $proyek->kontrak }}
            </div>
        </div>
    </div>

    <!-- KONTEN AKHIR -->



    <footer class="footer bg-dark text-center text-white">
        <!-- Copyright -->
        <div class="text-center p-3 style">
            © 2021 Copyright
        </div>
        <!-- Copyright -->
    </footer>





















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/iziToast.js') }}"></script>
    @include('vendor.lara-izitoast.toast')
</body>

</html>