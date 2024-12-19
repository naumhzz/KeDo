<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="form.css">
    <title>Hello, world!</title>
  </head>
  <body>

<div><nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">
    <img src="logo.png" alt="logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Pesanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Metode Pembayaran</a>
        </li>
      </ul>
    </div>
  </div>
</nav></div>

<div class="container mt-5">
  <form>
<h3 class="form-title">Form Pesanan</h3>
<div class="form-container p-3">
<div class="mb-3">
    <p class="form-desc">Silahkan isi pesanan anda<p>
  <label for="inputNama" class="form-label">Nama</label>
  <input type="nama" class="form-control" id="inputNama" placeholder="Ketik disini">

  <label for="inputAlamat" class="form-label mt-3">Alamat</label>
  <input type="nama" class="form-control" id="inputAlamat" placeholder="Ketik disini">

  <label for="inputTelp" class="form-label mt-3">No. Telp</label>
  <input type="nama" class="form-control" id="inputTelp" placeholder="Ketik disini">

  <label for="input" class="form-label mt-3">Produk yang dipesan</label>
  <div class="row g-2">
    <div class="col-9">
    <select class="form-select" aria-label="produkSelect">
  <option selected>Pilih Produk</option>
  <option value="1">Vas Bunga</option>
  <option value="2">Gelas</option>
  <option value="3">Piring</option>
  <option value="3">Guci</option>
  <option value="4">Teko</option>
  <option value="5">Pot</option>
</select>
</div>
<div class="col-3">
<select class="form-select" aria-label="jumlahSelect">
  <option selected>Jumlah</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  
</select>
</div>
</div>
</div>
</div>
</div>

<div class="container mt-5">
<div class="pembayaran-container p-3">
<p class="form-desc">Silahkan pilih metode pembayaran<p>
<label for="form-desc" class="form-label">Metode Pembayaran</label>
<div class="col-3">
<select class="form-select" aria-label="metodeSelect">
  <option selected>Metode Pembayaran</option>
  <option value="1">Bank</option>
  <option value="2">E-Wallet</option>
</select>
</div>
</div> 
<div class="container mt-5">
      <div class="row">
        <div class="col-12 text-end">
<button type="submit" class="btn btn-primary mt-3 flex">Pesan</button>
</div>
</from>
</div>


<footer>
    <div class="container mt-5 footer">
      <div class="row">
        <div class="mt-5 col-lg-3">
          <img src="logo.png" alt="Logo" class="img-fluid mb-3">
        </div>
        <div>
          <p class="mt-5 mb-0">Universitas Brawijaya</p>
          <p class="mt-0 mb-0">Jl. Veteran No.10-11, Ketawanggede, Kec. Lowokwaru, </p>
          <p class="mt-0 mb-0">Kota Malang, Jawa Timur 65145</p>
        </div>
        <div>
          <p class="mt-5">2024 kelompok 7 project akhir PEMWEB A</p>
        </div>
      </div>
    </div>
  </footer>
                

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>