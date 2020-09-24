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
<title>Bayern News</title>
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
  <?php include'header.php'; ?>
  <!-- /.navbar -->

  <div class="post-parallax parallax inverse-wrapper parallax1" style="background-image: url(style/images/art/par1.jpg);">
    <div class="container inner text-center">
      <div class="headline text-center">
        <h2>Bayern News</h2>
        <p class="lead">#bayernzone #bayern #news #miasanmia</p>
      </div>
      <!-- /.headline --> 
    </div>
    <!--/.container --> 
  </div>
  <!--/.parallax --> 
  <div class="wrapper">
  <div class="container inner">
  <div class="row grid-view">
    <?php
            $jumlah_record = mysql_query("SELECT count(*)from skuad ");
            $jumlah = mysql_result($jumlah_record, 0);
            $judul = $_POST['judul'];
            $query = "SELECT * FROM skuad where nama or nama_lengkap like '%$judul%' ORDER BY nopg asc";
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

  </div>
  </div>
  <div class="dark-wrapper">
    <div class="container inner2">

      <div class="blog grid-view col3">
        <div class="blog-posts text-boxes">
          <div class="isotope row">
<?php
  $jumlah_record = mysql_query("SELECT count(*)from berbayern ");
  $jumlah = mysql_result($jumlah_record, 0);
  $no = 1;
  $judul = $_POST['judul'];
  $query = "SELECT * FROM berbayern where judul or isi like '%$judul%' ORDER BY id desc";
  $sql = mysql_query ($query);
  while ($hasil = mysql_fetch_array ($sql)) {
    $jumlahkarakter = 150;
    $id = $hasil['id'];
    $judul = stripslashes ($hasil['judul']);
    $isi = stripcslashes($hasil['isi']);
    $gambar = stripcslashes($hasil['gambar']);
    $tgl = stripcslashes($hasil['tgl']);
    $konten = substr($isi, 0, $jumlahkarakter);
    
  ?>
            <div class="col-sm-6 col-md-4 grid-view-post">

              <div class="post">
                <figure class="main"><a href="view_news?page=view&judul=<?php echo $judul; ?> "><img src="img/berbayern/<?php echo $gambar; ?>" alt="" /></a></figure>
                <div class="box text-center">
                  <div class="category cat9"><span><a href="news">News</a></span></div>
                  <h4 class="post-title"><a href="view_news?page=view&judul=<?php echo $judul; ?>"><?php echo $judul; ?></a></h4>
                  <div class="meta"><span class="date"><?php echo $tgl; ?></span><span class="comments"><a href="#"><i class="icon-chat-1"></i> 15</a></span></div>
                  <p><?php echo $konten; ?></p>
                </div>
                <!-- /.box --> 
              </div>
            </div>
<!-- LOOP -->
  <?php 
} ?>

<?php
  $jumlah_record = mysql_query("SELECT count(*)from blog ");
  $jumlah = mysql_result($jumlah_record, 0);
  $no = 1;
  $judul = $_POST['judul'];
  $query = "SELECT * FROM blog where judul or isi like '%$judul%' ORDER BY id desc";
  $sql = mysql_query ($query);
  while ($hasil = mysql_fetch_array ($sql)) {
    $jumlahkarakter = 150;
    $id = $hasil['id'];
    $judul = stripslashes ($hasil['judul']);
    $isi = stripcslashes($hasil['isi']);
    $gambar = stripcslashes($hasil['gambar']);
    $tgl = stripcslashes($hasil['tgl']);
    $konten = substr($isi, 0, $jumlahkarakter);
    
  ?>
            <div class="col-sm-6 col-md-4 grid-view-post">

              <div class="post">
                <figure class="main"><a href="view_news?page=view&judul=<?php echo $judul; ?> "><img src="img/blog/<?php echo $gambar; ?>" alt="" /></a></figure>
                <div class="box text-center">
                  <div class="category cat9"><span><a href="news">News</a></span></div>
                  <h4 class="post-title"><a href="view_news?page=view&judul=<?php echo $judul; ?>"><?php echo $judul; ?></a></h4>
                  <div class="meta"><span class="date"><?php echo $tgl; ?></span><span class="comments"><a href="#"><i class="icon-chat-1"></i> 15</a></span></div>
                  <p><?php echo $konten; ?></p>
                </div>
                <!-- /.box --> 
              </div>
            </div>
<!-- LOOP -->
  <?php 
} ?>
            <!-- /column -->
            
          </div>
          <!-- /.isotope --> 
        </div>
        <!-- /.blog-posts -->
        
        
        <!-- /.pagination --> 
        
      </div>
      <!-- /.blog --> 
    </div>
    <!--/.container --> 
  </div>
  <!--/.dark-wrapper -->
  
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