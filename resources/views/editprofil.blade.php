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

    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link href="{{ asset('css/iziToast.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Modal -->
    <div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100 font-weight-bold py-2" id="exampleModalLabel">EDIT PROFILE</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">USERNAME</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder=" " />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">NAMA LENGKAP</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder=" " />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">PASSWORD LAMA</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder=" " />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">BUAT PASSWORD BARU</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder=" " />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">FOTO</label>
                            <input type="image" class="form-control" id="password" name="password" placeholder=" " />
                        </div>
                        <div class="modal-footer justify-content-center">
                            <button type="submit" class="btn btn-danger float-end">UPDATE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="text-center">
        <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalForm">Launch
            Modal Login Form</a>
    </div>








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