<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="shop.css">
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
          <a class="nav-link active" aria-current="page" href="#">Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pesanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Metode Pembayaran</a>
        </li>
      </ul>
    </div>
  </div>
</nav></div>


<div><div id="heroImage" class="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="heroshop.png" class="d-block w-100" alt="Hero Image">
      <div class= "text-container">
        <div class="text-top">Shop</div>
        <div class="text-bottom">Home > Shop</div>
             </div>
        </div>
    </div>
</div>

<div class="container text-center mt-5 mb-5">
  <h1 class="produk-text">Produk Kami</h1>
</div>

<div class="container">
  <div class="row">
    <?php
    if ($produk->num_rows > 0) {
        while ($row = $produk->fetch_assoc()) {
    ?>
      <div class="col-md-3 mb-4">
        <a href="?c=produk&m=detail&id=<?php echo $row["id"]; ?>" class="text-decoration-none text-dark">
          <div class="card">
            <img src="<?php echo $row["gambar"]; ?>" class="card-img-top" alt="Destinasi">
            <div class="card-body">
              <h5 class="card-title"><?php echo $row["nama"]; ?></h5>
              <p class="kategori"><?php echo $row["kategori"]; ?></p>
              <p class="harga">Rp. <?php echo $row["harga"]; ?></p>
              <div class="mt-auto">
                <a href="?c=produk&m=detail&id=<?php echo $row["id"]; ?>" class="btn btn-primary w-100">Lihat Detail</a>
              </div>
            </div>
          </div>
        </a>
      </div>
    <?php
        }
    } else {
        echo '<p class="text-center">Tidak ada produk yang tersedia.</p>';
    }
    ?>
  </div>
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