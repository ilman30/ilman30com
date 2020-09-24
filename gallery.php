<?php
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
<title>Gallery</title>
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
  
  <div class="post-parallax parallax inverse-wrapper parallax2" style="background-image: url(style/images/art/par1.jpg);">
    <div class="container inner text-center">
      <div class="headline text-center">
        <h2>Gallery</h2>
        <p class="lead">All pictures from blog.</p>
      </div>
      <!-- /.headline --> 
    </div>
  </div>

  <!-- /filter -->
  
  <section id="conceptual" class="light-wrapper">
    <div class="container inner">
      <div class="divide20"></div>
      <div class="cbp-panel">
        <div class="cbp cbp-onepage-grid">
<?php
  $per_halaman = 30;
  $jumlah_record = mysql_query("SELECT count(*)from blog ");
  $jumlah = mysql_result($jumlah_record, 0);
  $halaman = ceil($jumlah /$per_halaman);
  $page = (isset($_GET['page'])) ?(int) $_GET['page']:1;
  $mulai = ($page-1)*$per_halaman;
  $no = 1;
  $query = "SELECT * FROM blog ORDER BY id desc LIMIT $mulai, $per_halaman";
  $sql = mysql_query ($query);
  while ($hasil = mysql_fetch_array ($sql)) {
    $jumlahkarakter = 150;
    $id = $hasil['id'];
    $gambar = stripcslashes($hasil['gambar']);
  ?>  
          <div class="cbp-item"> <a class="cbp-caption fancybox-media" data-rel="portfolio" href="img/blog/<?php echo $gambar; ?>">
            <div class="cbp-caption-defaultWrap"> <img width="440" height="300" src="img/blog/<?php echo $gambar; ?>" alt="" /> </div>
            <div class="cbp-caption-activeWrap">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><span class="cbp-plus"></span></div>
                </div>
              </div>
            </div>
            <!--/.cbp-caption-activeWrap --> 
            </a> </div>
       <!-- LOOP -->
  <?php 
} ?>
          <!--/.cbp-item -->
          
          <!--/.cbp-item --> 
          
        </div>
        <!--/.cbp --> 
        
      </div>
      <!--/.cbp-panel -->
      <div class="pagination">
          <ul>
            <li><a href="">Prev</a></li>
            <?php 
                for($x=1; $x<=$halaman; $x++) {
            ?>
            <li class="active"><a href="gallery?page=<?php echo $x;?>"><span><?php echo $x;?></span></a></li>
            <?php
              }
            ?>
            <li><a href="">Next</a></li>
          </ul>
        </div> 
    </div>
    <!-- /.container --> 
  </section>
  <!-- /#conceptual -->
  
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