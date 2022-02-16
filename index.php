<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="main_style.css">

    <style>
    /*
    code by Iatek LLC 2018 - CC 2.0 License - Attribution required
    code customized by Azmind.com
*/
@media (min-width: 768px) and (max-width: 991px) {
    /* Show 4th slide on md if col-md-4*/
    .carousel-inner .active.col-md-4.carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: absolute;
        top: 0;
        right: -33.3333%;  /*change this with javascript in the future*/
        z-index: -1;
        display: block;
        visibility: visible;
    }
}
@media (min-width: 576px) and (max-width: 768px) {
    /* Show 3rd slide on sm if col-sm-6*/
    .carousel-inner .active.col-sm-6.carousel-item + .carousel-item + .carousel-item {
        position: absolute;
        top: 0;
        right: -50%;  /*change this with javascript in the future*/
        z-index: -1;
        display: block;
        visibility: visible;
    }
}
@media (min-width: 576px) {
    .carousel-item {
        margin-right: 0;
    }
    /* show 2 items */
    .carousel-inner .active + .carousel-item {
        display: block;
    }
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item {
        transition: none;
    }
    .carousel-inner .carousel-item-next {
        position: relative;
        transform: translate3d(0, 0, 0);
    }
    /* left or forward direction */
    .active.carousel-item-left + .carousel-item-next.carousel-item-left,
    .carousel-item-next.carousel-item-left + .carousel-item,
    .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(-100%, 0, 0);
        visibility: visible;
    }
    /* farthest right hidden item must be also positioned for animations */
    .carousel-inner .carousel-item-prev.carousel-item-right {
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        display: block;
        visibility: visible;
    }
    /* right or prev direction */
    .active.carousel-item-right + .carousel-item-prev.carousel-item-right,
    .carousel-item-prev.carousel-item-right + .carousel-item,
    .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(100%, 0, 0);
        visibility: visible;
        display: block;
        visibility: visible;
    }
}
/* MD */
@media (min-width: 768px) {
    /* show 3rd of 3 item slide */
    .carousel-inner .active + .carousel-item + .carousel-item {
        display: block;
    }
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item {
        transition: none;
    }
    .carousel-inner .carousel-item-next {
        position: relative;
        transform: translate3d(0, 0, 0);
    }
    /* left or forward direction */
    .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(-100%, 0, 0);
        visibility: visible;
    }
    /* right or prev direction */
    .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(100%, 0, 0);
        visibility: visible;
        display: block;
        visibility: visible;
    }
}
/* LG */
@media (min-width: 991px) {
    /* show 4th item */
    .carousel-inner .active + .carousel-item + .carousel-item + .carousel-item {
        display: block;
    }
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item + .carousel-item {
        transition: none;
    }
    /* Show 5th slide on lg if col-lg-3 */
    .carousel-inner .active.col-lg-3.carousel-item + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: absolute;
        top: 0;
        right: -25%;  /*change this with javascript in the future*/
        z-index: -1;
        display: block;
        visibility: visible;
    }
    /* left or forward direction */
    .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(-100%, 0, 0);
        visibility: visible;
    }
    /* right or prev direction //t - previous slide direction last item animation fix */
    .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(100%, 0, 0);
        visibility: visible;
        display: block;
        visibility: visible;
    }
}
.caroulsel-wrap img {
  display: inline-block;
  width: 134px;
  height: 92px;
  background-color: silver;
  border: #ccc 1px solid;
  margin-right: 5px;
}
.caroulsel {
  width: 100%;
  overflow: hidden;
  padding: 5px 0 5px 5px;
}

.caroulsel-wrap {
  white-space: nowrap;
  font-size: 0;
}
.video-fluid {
  width: 100%;
  height: auto;
}
    </style>

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="jumbotron card card-image" style="background-image: url(https://cdn1.designhill.com/assets/dh/images/logo-maker/bg-1.svg?ver=2.9.42);">
  <div class="text-white text-center py-5 px-4">
    <div>
      <h2 class="card-title h1-responsive pt-3 mb-5 font-bold"><strong>Kalita Trans</strong></h2>
      <hr>
      <p class="mx-5 mb-5" style="color:white;">Penyedia bus pilihan anda
      </p>
    </div>
  </div>
</div>
<!-- navbar -->
<nav class="navbar navbar-expand-md navbar-light bg-light">
    <a href="index.php" class="navbar-brand">
    <img src="img/logo.jpg" alt="" width="100" height="100">
    Kalita Trans
        <!-- <img src="images/logo.svg" height="28" alt="CoolBrand"> -->
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
            <a href="index.php" class="nav-item nav-link active">Home</a>
            <a href="dashboard/about.php" class="nav-item nav-link">Tentang Kalita</a>
            <a href="dashboard/destination.php" class="nav-item nav-link">Destinasi/paket</a>
            <a href="#" class="nav-item nav-link">Top Bus</a>
            <a href="#" class="nav-item nav-link disabled" tabindex="-1">Reports</a>
        </div>
        <div class='navbar-nav ml-auto'>
            <a href='auth/login.php' class='nav-item nav-link'>Login</a>
            |
            <br>
            |
            <a href='auth/register.php' class='nav-item nav-link'>Register</a>
        </div>
  
    </div>
</nav>

<!-- card -->
<div class="card-deck" style="margin-top:3cm;" >
  <div class="card" >
    <img class="card-img-top" src="https://image.flaticon.com/icons/svg/2329/2329423.svg" alt="Card image cap" width="175px" height="175px">
    <div class="card-body" >
      <h5 class="card-title">Kepercayaan</h5>
      <p class="card-text" >This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="https://image.flaticon.com/icons/svg/1373/1373206.svg" alt="Card image cap" width="175px" height="175px">
    <div class="card-body">
      <h5 class="card-title">Kenyamanan</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="https://image.flaticon.com/icons/svg/2384/2384759.svg" alt="Card image cap" width="175px" height="175px">
    <div class="card-body">
      <h5 class="card-title">Kualitas</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
  </div>
</div>
<br>
<br>
<br>
<br>
<center>
<h3><strong>DESTINASI KAMI</strong></h3>
<hr>
<p><i>Bersama kami perjalanan anda terjamin</i></p>
</center>
<!-- destinasi -->
<!-- Top content -->
<div class="top-content">
    <div class="container-fluid">
        <div id="carousel-example" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner row w-100 mx-auto" role="listbox">
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
                    <img src="https://www.yogya-backpacker.com/wp-content/uploads/2015/06/Prambanan_panorama.jpg" class="img-fluid mx-auto d-block" alt="img1">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="https://wallpaperaccess.com/full/441130.jpg" class="img-fluid mx-auto d-block" alt="img2">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="https://pix10.agoda.net/geo/city/19806/1_19806_02.jpg?s=1920x822" class="img-fluid mx-auto d-block" alt="img3">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="https://static.limawaktu.id/media/2017/09/28/gedong-sate-59cd1992698eb-.jpg" class="img-fluid mx-auto d-block" alt="img4">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="https://www.itl.cat/pngfile/big/73-738787_pemkot-kota-palembang-kota-palembang.jpg" class="img-fluid mx-auto d-block" alt="img5">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="https://jowonews.com/wp-content/uploads/2017/09/candi-borobudur-1024x576.jpg" class="img-fluid mx-auto d-block" alt="img6">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="https://www.jakpost.travel/wimages/large/141-1415329_polisi-larang-aksi-bendera-berlafal-tauhid-di-monas.jpg" class="img-fluid mx-auto d-block" alt="img7">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="https://2.bp.blogspot.com/-tde30q3Ndpc/WlH9k_9URFI/AAAAAAAAAY4/8cG7jmRN27Q8i7Tan5htFKRJAUeqadsYACLcBGAs/s1600/P_20180105_002748_HDR.jpg" class="img-fluid mx-auto d-block" alt="img8">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Sebelumnya</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Selanjutnya</span>
            </a>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<center>
<h3><strong>GALERI</strong></h3>
<hr>
<p><i>Kami abadikan setiap momennya</i></p>
</center>
<section class="caroulsel">
  <div class="caroulsel-wrap">
    <img src="img/a1.jpg" width="30" height="30" alt="">
    <img src="img/a2.jpg" width="30" height="30" alt="">
    <img src="img/a3.jpg" width="30" height="30" alt="">
    <img src="img/a4.jpg" width="30" height="30" alt="">
    <img src="img/a5.jpg" width="30" height="30" alt="">
    <img src="img/a6.jpg" width="30" height="30" alt="">
    <img src="img/a7.jpg" width="30" height="30" alt="">
    <img src="img/a8.jpg" width="30" height="30" alt="">
    <img src="img/a9.jpg" width="30" height="30" alt="">
    <img src="img/a10.jpg" width="30" height="30" alt="">
  </div>
</section>
<br>
<br>
<center>
<!-- <a href="" class="btn btn-secondary">Lainnya</a> -->
</center>
<br>
<br>
<br>
<center>
<h3><strong>BUS KAMI</strong></h3>
<hr>

<video class="video-fluid z-depth-1" autoplay loop controls muted>
  <source src="vid/bus1.mp4" type="video/mp4" />
</video>

<!-- footer -->
<!-- Footer -->
<!-- Footer -->
<footer class="page-footer font-small blue-grey lighten-5" style="margin-top:8cm;">

  <div style="background-color: blue;">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0">Informasi tentang kami</h6>
        </div>
        <!-- Grid column -->

        
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  </div>

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3 dark-grey-text">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold">Kalita Trans</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>Kami menyediakan layanan bus terbaik</p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Our partner</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a class="dark-grey-text" href="#!">Pandawa</a>
        </p>
        <p>
          <a class="dark-grey-text" href="#!">Mitra Rahayu</a>
        </p>
        <p>
          <a class="dark-grey-text" href="#!">City Trans Utama</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Akun Sosial Media Kami</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a class="dark-grey-text" href="#!">Facebook</a>
        </p>
        <p>
          <a class="dark-grey-text" href="#!">Instagram</a>
        </p>
        <p>
          <a class="dark-grey-text" href="#!">Twitter</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Kontak</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <i class="fas fa-home mr-3"></i> Gunung Masigit</p>
        <p>
          <i class="fas fa-envelope mr-3"></i> kalita@gmail.com</p>
        <p>
          <i class="fas fa-phone mr-3"></i> +62 838 4468 2105</p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center text-black-50 py-3">© 2020 Copyright:
    <a class="dark-grey-text" href="https://mdbootstrap.com/"> KalitaPROJECT</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
<!-- Footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>