<!DOCTYPE html>
<html>

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
        <center>
            <img src="{{ asset('storage/'.auth()->user()->gambar) ?? asset('gambar/user.png') }}" class="foto_profil"
                alt="">
            <h4 style="font-size: 95%;">{{ auth()->user()->name }}</h4>
        </center>
        <a href="{{route('home')}}"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
        <a href=" " data-toggle="modal" data-target="#modalForm"><i class="fas fa-user"></i><span>Edit Profil</span></a>
        <a href="{{route('absensi')}}"><i class="fas fa-user-friends"></i><span>Absensi</span></a>
    </div>
    <!-- NAVBAR SISI KIRI AKHIR -->

    <!-- JUDUL PAGE MULAI -->
    <div class="judul_page">
        <h3>SISTEM MONITORING PROYEK PT. ARSIRA MULTI KONSTRUKSI</h3>
    </div>
    <!-- JUDUL PAGE AKHIR -->

    <!-- KONTEN MULAI -->
    <div class="konten">
        <h3>PROYEK YANG SEDANG BERJALAN</h3>
        <div class="row">
            @foreach ($proyek as $item)
            <div class="col-3">
                <div class="card">
                    <a href="{{route('beranda', $item->id)}}">
                        <img src="{{ asset('storage/'.$item->gambar) ?? asset('gambar/user.png') }}"
                            class="card-img-top" alt="..." height="50" width="80">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->nama_proyek}}</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100 font-weight-bold py-2" id="exampleModalLabel" style="color: blue;">
                        <b>EDIT PROFILE</b>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('update',auth()->user()->id) }}" method="POST" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">USERNAME</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder=""
                                value="{{Auth::User()->username}}" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">NAMA LENGKAP</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder=""
                                value="{{Auth::User()->name}}" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label">BUAT PASSWORD BARU</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">FOTO</label>
                            <input type="file" class="form-control" name="gambar">
                        </div>
                        <button type="submit" class="btn btn-danger mt-4"
                            style="color: white; width:100%;"><b>UPDATE</b></button>
                    </form>
                </div>
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