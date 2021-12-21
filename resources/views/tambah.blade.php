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
    <input type="checkbox" id="check">
    <!-- NAVBAR ATAS MULAI -->
    <header>
        <label for="check">
            <i class="fas fa-bars" id="sidebar_btn"></i>
        </label>
        <div class="sisi_kiri">
            <h3>SIMONPRO</h3>
        </div>
        <div class="sisi_kanan">
            <a href="{{ route('logout') }}" class="logout_btn" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">LOG OUT</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </header>
    <!-- NAVBAR ATAS AKHIR -->

    <!-- NAVBAR SISI KIRI MULAI -->
    <div class="sidebar">
        <center>
            <img src="{{ asset('gambar/user.png') }}" class="foto_profil" alt="">
            <h4 style="font-size: 95%;">{{ auth()->user()->name }}</h4>
        </center>
        <a href="{{route('home')}}"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
        <a href="{{route('view_pengguna')}}"><i class="fas fa-user"></i><span>Pengguna</span></a>


    </div>
    <!-- NAVBAR SISI KIRI AKHIR -->

    <!-- JUDUL PAGE MULAI -->
    <div class="judul_page">
        <h3>SISTEM MONITORING PROYEK PT. ARSIRA MULTI KONSTRUKSI</h3>
    </div>
    <!-- JUDUL PAGE AKHIR -->

    <div class="konten">
        <h3>Membuat Akun</h3>
        <div class="row">
            <div class="col">
                <form method="POST" action="{{route('tambah_akun')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Nama Panjang</label>
                        <input type="text" class="form-control" style="background-color: lightgrey;" id="title"
                            name="name">
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Username</label>
                        <input type="text" class="form-control" style="background-color: lightgrey;" id="title"
                            name="username">
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Password</label>
                        <input type="password" class="form-control" style="background-color: lightgrey;" id="title"
                            name="password">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Upload Gambar</label>
                        <input class="form-control" type="file" id="formFile" name="gambar">
                    </div>
                    <label for="role" class="form-label">Role</label>
                    <select class="form-select form-select-m mb-3" aria-label=".form-select-lg example" name="role">
                        <option selected>pilih</option>
                        <option value="pekerja_lapangan">pekerja_lapangan</option>
                        <option value="admin">admin</option>

                    </select>
                    <button type="submit" class="btn btn-success">Tambah Akun</button>
                </form>
            </div>
        </div>
    </div>



    <footer class="footer bg-dark text-center text-white">
        <!-- Copyright -->
        <div class="text-center p-3 style">
            © 2021 Copyright
        </div>
        <!-- Copyright -->
    </footer>





















    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    
    <script src="{{ asset('js/iziToast.js') }}"></script>
    @include('vendor.lara-izitoast.toast')

</body>

</html>