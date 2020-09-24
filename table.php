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
<title>Table</title>
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
        <h2>Bundesliga Table</h2>
        <p class="lead">#bayernzone #bayern #bundesliga #miasanmia</p>
      </div>
      <!-- /.headline --> 
    </div>
    <!--/.container --> 
  </div>
  <!--/.parallax --> 

  <div class="dark-wrapper">
    <div class="container inner2">

      <div class="blog grid-view col3">
        
        <table width="100%"  id="tabel" rules="rows">
            <tr>
              <th align="left" width="6%"><font size="4">#</font></th>
              <th align="left" width="46%"><font size="4">Team</th>
              <th align="left" width="6%"><font size="4">P</font></th>
              <th align="left" width="6%"><font size="4">W</font></th>
              <th align="left" width="6%"><font size="4">D</font></th>
              <th align="left" width="6%"><font size="4">L</font></th>
              <th align="left" width="6%"><font size="4">GF</font></th>
              <th align="left" width="6%"><font size="4">GA</font></th>
              <th align="left" width="6%"><font size="4">GD</font></th>
              <th align="left" width="6%"><font size="4">Pts</font></th>              
            </tr>
            <?php     
            $no = 1;
            $ket1 = "";      
              $query = "SELECT * FROM klasemen ORDER BY poin desc, selisih desc, tim asc";
              $sql = mysql_query ($query);
              while ($hasil = mysql_fetch_array ($sql)) {
                $id = $hasil['id'];
                $tim = stripcslashes($hasil['tim']);
                $main = $hasil['main'];
                $menang = $hasil['menang'];
                $kalah = $hasil['kalah'];
                $seri = $hasil['seri'];
                $gol = $hasil['gol'];
                $gk = $hasil['gk'];
                $selisih = $hasil['selisih'];
                $poin = $hasil['poin'];       
                $warna = ($no%2==1)?"#000000":"#000000";
                $warna2 = ($no%2==1)?"#000000":"#000000";
              ?>
            <tr bgcolor="">
              <td height="30"><font color="<?php echo $warna; ?>" size="4"><?php echo $no; ?></font></td>
              <td height="30"><font color="<?php echo $warna; ?>" size="4"><?php echo $tim; ?></font></td>
              <td height="30"><font color="<?php echo $warna; ?>" size="4"><?php echo $main; ?></font></td>
              <td height="30"><font color="<?php echo $warna; ?>" size="4"><?php echo $menang; ?></font></td>
              <td height="30"><font color="<?php echo $warna; ?>" size="4"><?php echo $seri; ?></font></td>
              <td height="30"><font color="<?php echo $warna; ?>" size="4"><?php echo $kalah; ?></font></td>
              <td height="30"><font color="<?php echo $warna; ?>" size="4"><?php echo $gol; ?></font></td>
              <td height="30"><font color="<?php echo $warna; ?>" size="4"><?php echo $gk; ?></font></td>
              <td height="30"><font color="<?php echo $warna; ?>" size="4"><?php echo $selisih; ?></font></td>
              <td height="30"><font color="<?php echo $warna; ?>" size="4"><?php echo $poin; ?></font></td>
              <td> 
              <br/>
              </td>
            </tr> 
          <?php $no++; } ?>
          </table>
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