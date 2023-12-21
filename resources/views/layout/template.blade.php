<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body style="background-color: rgb(0, 87, 0)">
<nav class="navbar navbar-light bg-warning">
  <div class="container">
    <a class="navbar-brand fs-2 fw-normal d-inline" href="{{ url('todo') }}">
      To Do List
    </a>
    <div class="navbar-brand fs-5 fw-normal">
      <p class="d-inline" style="margin-right: 5px">Welcome, Adinda Salsabila</p>
      <i class="fa-solid fa-circle-user fa-xl"></i>
    </div>
  </div>
</nav>
    <main class="container my-3 p-3 bg-body" >
      @include('komponen.pesan')
      {{-- <h2 style="display: flex; justify-content: center;">Inpu Data Pasien</h2> --}}
      @yield('konten')
    </main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>