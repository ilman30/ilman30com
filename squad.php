<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include'config/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="style/images/favicon.png">
<title>Bayern Squad</title>
<!-- Bootstrap core CSS -->
<link href="style/css/bootstrap.min.css" rel="stylesheet">
<link href="style/css/plugins.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">
<link href="style/css/color/blue.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href="style/type/icons.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div id="preloader"><div class="textload">Loading</div><div id="status"><div class="spinner"></div></div></div>
<main class="body-wrapper">
  <?php include'header.php' ?>
  <!-- /.navbar -->
  
  <div class="post-parallax parallax inverse-wrapper parallax1" style="background-image: url(style/images/art/par1.jpg);">
    <div class="container inner text-center">
      <div class="headline text-center">
        <h2>Bayern Squad</h2>
        <p class="lead">2016/2017 Season</p>
      </div>
      <!-- /.headline --> 
    </div>
    <!--/.container --> 
  </div>
  <!--/.parallax --> 
  
  <div class="dark-wrapper">
    <div class="container inner">
      <h3 class="section-title text-center">Goalkeeper</h3>
      <div class="row grid-view">
      <?php
            $per_halaman = 30;
            $jumlah_record = mysql_query("SELECT count(*)from skuad ");
            $jumlah = mysql_result($jumlah_record, 0);
            $halaman = ceil($jumlah /$per_halaman);
            $nomor = (isset($_GET['nomor'])) ?(int) $_GET['nomor']:1;
            $mulai = ($nomor-1)*$per_halaman;
            $no = 1;
            $query = "SELECT * FROM skuad WHERE posisi = 'Goalkeeper' ORDER BY nopg asc LIMIT $mulai, $per_halaman";
            $sql = mysql_query ($query);
            while ($hasil = mysql_fetch_array ($sql)) {
              $id = $hasil['id'];
              $nama = stripslashes ($hasil['nama']);
              $nama_lengkap = stripcslashes($hasil['nama_lengkap']);
              $posisi = stripcslashes($hasil['posisi']);
              $nopg = stripcslashes($hasil['nopg']);
              $nationality = stripcslashes($hasil['nationality']); 
              $foto = stripcslashes($hasil['foto']);   
            ?>
        <div class="col-sm-3 text-center">
          <figure><a href="view_squad?page=view&nama=<?php echo $nama; ?>"><img src="<?php echo $foto; ?>" alt="" /></a></figure>
          <h4 class="post-title"><?php echo $nama; ?></h4>
          <div class="meta"><?php echo $nopg; ?> | <?php echo $posisi; ?></div>
          <p><?php echo $nationality; ?></p>
          <ul class="social naked bigger text-center">
          </ul>
        </div>
        <?php } ?>
        <!-- /column -->
        
      </div>

      <!--/.row --> 
    </div>
    <!--/.container --> 
    <div class="container inner">
      <h3 class="section-title text-center">Defender</h3>
      <div class="row grid-view">
      <?php
            $per_halaman = 30;
            $jumlah_record = mysql_query("SELECT count(*)from skuad ");
            $jumlah = mysql_result($jumlah_record, 0);
            $halaman = ceil($jumlah /$per_halaman);
            $nomor = (isset($_GET['nomor'])) ?(int) $_GET['nomor']:1;
            $mulai = ($nomor-1)*$per_halaman;
            $no = 1;
            $query = "SELECT * FROM skuad WHERE posisi = 'Defender' ORDER BY nopg asc LIMIT $mulai, $per_halaman";
            $sql = mysql_query ($query);
            while ($hasil = mysql_fetch_array ($sql)) {
              $id = $hasil['id'];
              $nama = stripslashes ($hasil['nama']);
              $nama_lengkap = stripcslashes($hasil['nama_lengkap']);
              $posisi = stripcslashes($hasil['posisi']);
              $nopg = stripcslashes($hasil['nopg']);
              $nationality = stripcslashes($hasil['nationality']); 
              $foto = stripcslashes($hasil['foto']);   
            ?>
        <div class="col-sm-3 text-center">
          <figure><a href="view_squad?page=view&nama=<?php echo $nama; ?>"><img src="<?php echo $foto; ?>" alt="" /></a></figure>
          <h4 class="post-title"><?php echo $nama; ?></h4>
          <div class="meta"><?php echo $nopg; ?> | <?php echo $posisi; ?></div>
          <p><?php echo $nationality; ?></p>
          <ul class="social naked bigger text-center">
          </ul>
        </div>
        <?php } ?>
        <!-- /column -->
        
      </div>
      
      <!--/.row --> 
    </div>
    <!--/.container --> 
    <div class="container inner">
      <h3 class="section-title text-center">Midfielder</h3>
      <div class="row grid-view">
      <?php
            $per_halaman = 30;
            $jumlah_record = mysql_query("SELECT count(*)from skuad ");
            $jumlah = mysql_result($jumlah_record, 0);
            $halaman = ceil($jumlah /$per_halaman);
            $nomor = (isset($_GET['nomor'])) ?(int) $_GET['nomor']:1;
            $mulai = ($nomor-1)*$per_halaman;
            $no = 1;
            $query = "SELECT * FROM skuad WHERE posisi = 'Midfielder' ORDER BY nopg asc LIMIT $mulai, $per_halaman";
            $sql = mysql_query ($query);
            while ($hasil = mysql_fetch_array ($sql)) {
              $id = $hasil['id'];
              $nama = stripslashes ($hasil['nama']);
              $nama_lengkap = stripcslashes($hasil['nama_lengkap']);
              $posisi = stripcslashes($hasil['posisi']);
              $nopg = stripcslashes($hasil['nopg']);
              $nationality = stripcslashes($hasil['nationality']); 
              $foto = stripcslashes($hasil['foto']);   
            ?>
        <div class="col-sm-3 text-center">
          <figure><a href="view_squad?page=view&nama=<?php echo $nama; ?>"><img src="<?php echo $foto; ?>" alt="" /></a></figure>
          <h4 class="post-title"><?php echo $nama; ?></h4>
          <div class="meta"><?php echo $nopg; ?> | <?php echo $posisi; ?></div>
          <p><?php echo $nationality; ?></p>
          <ul class="social naked bigger text-center">
          </ul>
        </div>
        <?php } ?>
        <!-- /column -->
        
      </div>
      
      <!--/.row --> 
    </div>
    <!--/.container --> 
    <div class="container inner">
      <h3 class="section-title text-center">Forward</h3>
      <div class="row grid-view">
      <?php
            $per_halaman = 30;
            $jumlah_record = mysql_query("SELECT count(*)from skuad ");
            $jumlah = mysql_result($jumlah_record, 0);
            $halaman = ceil($jumlah /$per_halaman);
            $nomor = (isset($_GET['nomor'])) ?(int) $_GET['nomor']:1;
            $mulai = ($nomor-1)*$per_halaman;
            $no = 1;
            $query = "SELECT * FROM skuad WHERE posisi = 'Forward' ORDER BY nopg asc LIMIT $mulai, $per_halaman";
            $sql = mysql_query ($query);
            while ($hasil = mysql_fetch_array ($sql)) {
              $id = $hasil['id'];
              $nama = stripslashes ($hasil['nama']);
              $nama_lengkap = stripcslashes($hasil['nama_lengkap']);
              $posisi = stripcslashes($hasil['posisi']);
              $nopg = stripcslashes($hasil['nopg']);
              $nationality = stripcslashes($hasil['nationality']); 
              $foto = stripcslashes($hasil['foto']);   
            ?>
        <div class="col-sm-3 text-center">
          <figure><a href="view_squad?page=view&nama=<?php echo $nama; ?>"><img src="<?php echo $foto; ?>" alt="" /></a></figure>
          <h4 class="post-title"><?php echo $nama; ?></h4>
          <div class="meta"><?php echo $nopg; ?> | <?php echo $posisi; ?></div>
          <p><?php echo $nationality; ?></p>
          <ul class="social naked bigger text-center">
          </ul>
        </div>
        <?php } ?>
        <!-- /column -->
        
      </div>
      
      <!--/.row --> 
    </div>
    <!--/.container --> 
  </div>
  <!-- /.dark-wrapper -->

  
  <?php include'footer.php'; ?>
  <!-- /footer --> 
  
</main>
<!--/.body-wrapper --> 
<script src="style/js/jquery.min.js"></script> 
<script src="style/js/bootstrap.min.js"></script> 
<script src="style/js/plugins.js"></script> 
<script src="style/js/classie.js"></script> 
<script src="style/js/jquery.themepunch.tools.min.js"></script> 
<script src="style/js/scripts.js"></script>
</body>
</html>