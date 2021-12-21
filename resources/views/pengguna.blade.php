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
    <link rel="stylesheet" href="cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
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
            <img src="{{ asset('storage/'.auth()->user()->gambar) ?? asset('gambar/user.png') }}" class="foto_profil"
                alt="">
            <h4 style="font-size: 90%;">{{ auth()->user()->name }}</h4>
        </center>
        <a href="{{route('admin')}}"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
        <a href="{{route('view_pengguna')}}"><i class="fas fa-user"></i><span>Pengguna</span></a>
        <a href="{{route('laporanabsensi')}}"><i class="fas fa-user-friends"></i><span>Laporan Absensi</span></a>
        <a href="#"><i class="fas fa-file-invoice-dollar"></i><span>Keuangan</span></a>
        <a href="#"><i class="fas fa-tasks"></i><span>Progress</span></a>
    </div>
    <!-- NAVBAR SISI KIRI AKHIR -->

    <!-- JUDUL PAGE MULAI -->
    <div class="judul_page">
        <h3>DAFTAR PENGGUNA SIMONPRO</h3>
    </div>
    <!-- JUDUL PAGE AKHIR -->

    <div class="konten">
        <h3>AKUN ADMIN</h3>


        <div class="container">
            <div class="tambah">
                <a class="btn btn-primary" href="tambah" role="button">Tambah Akun</a>
            </div>
        </div>

        <div class="container table-responsive">
            <table class="table table-border" id="myTable">
                <thead class="thead">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Username</th>
                        <th scope="col">Role</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    @php
                    $no=1;
                    @endphp
                    @forelse($users as $item)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->username}}</td>
                        <td>{{$item->role}}</td>
                        <td><img src="{{ asset('storage/'.$item->gambar) ?? asset('gambar/user.png') }}" alt=""
                                height="100" width="80"></td>
                        <td>
                            <a class="btn btn-warning" href="{{route('edit_akun', $item->id)}}" role="button">Ubah</a>
                            <form action="{{route('hapus_akun', $item->id)}}" method="POST">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger mt-1"> Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <td>Data Kosong</td>
                    @endforelse
                </tbody>
            </table><br>
        </div>
    </div>
</body>

<footer class="footer bg-dark text-center text-white">
    <!-- Copyright -->
    <div class="text-center p-3 style">
        © 2021 Copyright
    </div>
    <!-- Copyright -->
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
    integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
</script>
<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>

<script src="{{ asset('js/iziToast.js') }}"></script>
@include('vendor.lara-izitoast.toast')

</html>