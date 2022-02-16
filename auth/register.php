<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Kalita Trans</title>

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
 
  <!-- font -->
  <link rel="stylesheet" href="css/main_style.css">
 
  </head>
  <body>

<!-- navbar -->
<nav class="navbar navbar-expand-md navbar-light bg-light">
    <a href="index.php" class="navbar-brand">
    <img style="margin-bottom: 8px;" src="https://as1.ftcdn.net/jpg/01/88/99/42/500_F_188994292_i4UrDwGxVqSNkdUyyF3qD1F6jhKOvPJT.jpg" width="100" height="100">
    Kalita Trans
        <!-- <img src="images/logo.svg" height="28" alt="CoolBrand"> -->
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
</nav>

<!-- Fungsi register -->
  <?php 
    require "db/functions.php";

    if ( isset($_POST["register"]) ){

    if ( registrasi($_POST) > 0 ) {
    echo "
    <center>
    <div style='margin-top: 2cm;' class='alert alert-success' role='alert'>
        Akun berhasil dibuat
        Silahkan login <a href='auth/login.php'> Disini</a>
    </div>
    </center>";
  } else{
    echo "
    <center>
    <div style='margin-top: 2cm;' class='alert alert-danger' role='alert'>
        Akun gagal dibuat,
        Gagal menambahkan data<br/>
    </div>
    </center>".mysqli_error($koneksi);
  }
}

?>
  <center>
  <form style="margin-top: 150px;" action="" method="POST">
  <a href="index.php"><img style="margin-bottom: 8px;" src="https://as1.ftcdn.net/jpg/01/88/99/42/500_F_188994292_i4UrDwGxVqSNkdUyyF3qD1F6jhKOvPJT.jpg" width="100" height="100"></a>
  <h5>Register akun</h5>
  <div class="form-group">
    <input style="width: 300px;" type="text" class="form-control"placeholder="Nama" name="nama" required>
  </div>
  <div class="form-group">
    <input style="width: 300px;" type="text" class="form-control"placeholder="Username" name="username" required>
  </div>
  <div class="form-group">
    <input style="width: 300px;" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
  <small class="form-text text-muted">Password hafurus memiliki minimal 6 karakter!</small>
  </div>
  <div class="form-group">
    <input style="width: 300px;" type="text" class="form-control"placeholder="Nomor Telepon" name="telp" required>
  </div>
  <div class="form-group">
    <input style="width: 300px;" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
  </div>
  <button style="width: 8cm;" type="submit" class="btn btn-primary" name="register">Register</button>
  <small class="form-text text-muted">Sudah mempunyai akun ? masuk <a href="auth/login.php">Disini</a></small>
</form>
</center>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>