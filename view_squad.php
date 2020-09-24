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
        <h2>Bayern Squad</h2>
        <p class="lead">2016/2017 Season</p>
      </div>
      <!-- /.headline --> 
    </div>
    <!--/.container --> 
  </div>
  <!--/.parallax --> 
  <div class="light-wrapper">
    <div class="container inner">
    <?php
              $query = mysql_query("SELECT * FROM skuad WHERE nama = '$_GET[nama]'");
              $data = mysql_fetch_array($query);
            ?>
      <h3 class="section-title text-center"><?php echo $data['nama']; ?></h3>
      <div class="divide20"></div>
      <div class="row">
        
            <title><?php echo $data['nama']; ?></title>
        <div class="col-sm-5">
          <figure><img src="<?php echo $data['foto']; ?>" alt=""></figure>
        </div>
        <!-- /column -->       
        <div class="col-sm-7">
          <h3><?php echo $data['nama_lengkap']; ?></h3>
          <h3><?php echo $data['posisi']; ?></h3>
          <h3><?php echo $data['nopg']; ?></h3>
          <h3><?php echo $data['nationality']; ?></h3>
          <h3><?php echo $data['ttl']; ?></h3>
        </div>
        <!-- /column --> 
        
      </div>
      <!-- /.row -->
      <div class="clearfix"></div>
    </div>
    <!--/.container --> 
  </div>
  <!--/.light-wrapper --> 

  
  <!-- /.parallax -->
  
  
  
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