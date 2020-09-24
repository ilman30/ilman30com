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
        <h2>FC Bayern Chants</h2>
        <p class="lead">#bayernzone #miasanmia #chants</p>
      </div>
      <!-- /.headline --> 
    </div>
    <!--/.container --> 
  </div>
  <!--/.parallax --> 
  <div class="offset"></div>
  <div class="dark-wrapper">
    <div class="container inner2">
      <div class="blog no-sidebar">
        <div class="blog-content">
          <div class="blog-posts classic-view">
            <div class="post">
              <div class="box text-center">
              <?php
              $query = mysql_query("SELECT * FROM chants WHERE judul = '$_GET[judul]'");
              $data = mysql_fetch_array($query);
              ?>          
              <title><?php echo $data['judul']; ?></title>
                <div class="category cat9"><span><a href="chants">Chants</a></span></div>
                <h1 class="post-title"><?php echo $data['judul']; ?></h1>
                <div class="meta"></div>
                <div class="post-content text-left">
                  <p align="justify"><?php echo $data['isi']; ?></p>
                  <div class="divide10"></div>
                  <!-- /.gallery-wrapper -->
                  
                </div>
                <!-- /.post-content -->
                <div class="post-footer">
                  
                  <ul class="social naked pull-right">
                    <li><a id="button" onClick="window.open('http://www.facebook.com/sharer.php?s=100&amp;p[title]=<?php echo $title; ?>&amp;p[summary]=<?php echo $summary;?>&amp;p[url]=<?php echo $url; ?>&amp;&p[images][0]=<?php echo $image;?>', 'sharer', 'toolbar=0,status=0,width=550,height=400');" target="_parent" href="javascript: void(0)"><i class="icon-s-facebook" ></i></a></li>
                    <li><a href="http://twitter.com/share?source=sharethiscom&text=<?php echo $title;?>&url=<?php echo $url; ?>&via=ilman_30"><i class="icon-s-twitter"></i></a></li>
                    
                    <li><a href="javascript:void(0);" onclick="popUp=window.open('https://plus.google.com/share?url=<?php echo $url; ?> ','popupwindow','scrollbars=yes,width=800,height=400');popUp.focus();return false"><i class="icon-s-gplus"></i></a></li>
                  </ul>
                  <!-- .social -->
                  <div class="clearfix"></div>
                </div>
                <!-- .post-footer --> 
              </div>
              <!-- /.box --> 
              
            </div>
            <!-- .post -->
            
            <div class="box">
              <div class="about-author">
                <div class="author-image"> <img alt="" src="style/images/art/author.png" /> </div>
                <h3>Ilman 30</h3>
                <p>Thank you for reading this news. Follow my social media, share this news and don't forget like if you like.</p>
                <ul class="social">
                  <li><a href="https://web.facebook.com/ilman30/"><i class="icon-s-facebook"></i></a></li>
                  <li><a href="https://www.instagram.com/ilman_30/"><i class="icon-s-instagram"></i></a></li>
                  <li><a href="https://twitter.com/ilman_30"><i class="icon-s-twitter"></i></a></li>
                  <li><a href="https://plus.google.com/100360980887942031279?hl=id"><i class="icon-s-gplus"></i></a></li>
                </ul>
                <div class="clearfix"></div>
              </div>
            </div>
            <!-- /.box -->
            <div class="divide30"></div>
            <div class="box">
              <div id="disqus_thread"></div>
              <script type="text/javascript">
          /* * * CONFIGURATION VARIABLES * * */
          var disqus_shortname = 'ilman30';
          
          /* * * DON'T EDIT BELOW THIS LINE * * */
          (function() {
              var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
              dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
              (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
          })();
        </script>
              <noscript>
              Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a>
              </noscript>
            </div>
            <!-- /.box -->
              
          </div>
          <!-- /.classic-view --> 
          
        </div>
        <!-- /.blog-content --> 
        
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