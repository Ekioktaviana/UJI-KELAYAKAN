<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="csrf-token" content="{{ csrf_token() }}">
<!--Bootsrap 4 CDN-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 
<link rel="stylesheet" type="text/css" href="{{url('style.css')}}">
</head>
<body>
<center>
    <br>
    <h1 align="center">UJI KELAYAKAN</h1>
    <br>
    <div class="card text-white bg-info mb-3" style="max-width: 22rem;">

    <div class="card-header">Dashboard</div>
        <div class="card-body">
            <h6 class="alert alert-dark">Silahkan Pilih</h6>
                <a href="/detail_pinjams" class="alert alert-secondary" >Detail Pinjam</a>
                <a href="/ruangs" class="alert alert-secondary" >Ruang</a>
                <a href="/levels" class="alert alert-secondary" >Level</a>
        </div>
    </div>
    <br>

    <div class="card text-white bg-info mb-3" style="max-width: 22rem;">

    <div class="card-header">Dashboard</div>
        <div class="card-body">
            <h6 class="alert alert-dark">Silahkan Pilih</h6>
                <a href="/pegawais" class="alert alert-secondary" >Pegawai</a>
                <a href="/peminjamans" class="alert alert-secondary" >Peminjaman</a>
        </div>
    </div>

    <br>

    <h3 align="center">MASIH ERROR</h3>
    <br>
    <div class="card text-white bg-danger mb-3" style="max-width: 22rem;">

    <div class="card-header">Dashboard</div>
        <div class="card-body">
            <h6 class="alert alert-dark">Silahkan Pilih</h6>
            <a href="/inventaris"class="alert alert-secondary">Inventaris</a>
            <a href="/jenis" class="alert alert-secondary" >Jenis</a>
            <a href="/petugas" class="alert alert-secondary" >Petugas</a>
        </div>
    </div>

</center>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>