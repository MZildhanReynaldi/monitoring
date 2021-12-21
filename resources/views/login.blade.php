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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap-5.1.0-dist\bootstrap-5.1.0-dist\css\bootstrap.min.css">
    <link href="{{ asset('/css/style.css?v=').time() }}" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="card">
        <div id="card-content">
            <div id="card-title">
                <h2><strong>ACCOUNT LOGIN</strong></h2>
            </div>
        </div>

        <form method="post" class="form" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="username">USERNAME</label>
                <input type="text" name="username" id="username" class="form-control" style="background-color: lightgrey;">
            </div>
            <label for="password" style="padding-top:20px">PASSWORD</label>
            <input type="password" type="password" name="password" class="form-control" required style="background-color: lightgrey;">
            <br>
            <button type="submit" class="btn btn-danger mt-4"><b>LOGIN</b></button>
        </form>
    </div>
</body>

</html>