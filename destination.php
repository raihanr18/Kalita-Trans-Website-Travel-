<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="main_style.css">
  <title>Document</title>

<style>
.card{
  display:inline-block;
  float: left;
}
.container {
  position: relative;
  width: 50%;
}
</style>

</head>
<body>
  <!-- navbar -->
<nav class="navbar navbar-expand-md navbar-light bg-light">
    <a href="index.php" class="navbar-brand">
    <img src="https://as1.ftcdn.net/jpg/01/88/99/42/500_F_188994292_i4UrDwGxVqSNkdUyyF3qD1F6jhKOvPJT.jpg" alt="" width="100" height="100">
    KalitaTrans
        <!-- <img src="images/logo.svg" height="28" alt="CoolBrand"> -->
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
            <a href="index.php" class="nav-item nav-link active">Home</a>
            <a href="about.php" class="nav-item nav-link">Tentang Kalita</a>
            <a href="#" class="nav-item nav-link">Destinasi/paket</a>
            <a href="#" class="nav-item nav-link">Top Bus</a>
            <a href="#" class="nav-item nav-link disabled" tabindex="-1">Reports</a>
        </div>
        <div class='navbar-nav ml-auto'>
            <a href='login.php' class='nav-item nav-link'>Login</a>
            |
            <br>
            |
            <a href='form_register.php' class='nav-item nav-link'>Register</a>
        </div>"
  
    </div>
</nav>
<center><h2> DESTINATION </h2></center>
<br>
<br>
<?php 

    require "functions.php";
    $query = mysqli_query($koneksi, "SELECT * FROM paket_wisata");

    ?>
    <div class="produk">
        <?php while ($result = mysqli_fetch_assoc ($query)) :?>
                    <div class="container">
                    <img src="img/<?php echo $result['img'];?>"  class="image">
                    <div class="overlay">
                        <div class="text"><a href="preview.php?id=<?php echo $result['id_wisata']; ?>">Quick preview</a></div>
                    </div>
                    <h5><?php echo $result['trip'];?></h5>
                    <p>Rp. <?php echo $result ['harga_trip'];?></p>
                    </div>
        <?php endwhile;?>
        </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>