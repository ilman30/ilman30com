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
<title>Ilman 30</title>
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
<body class="onepage">
<div id="preloader"><div class="textload">Loading</div><div id="status"><div class="spinner"></div></div></div>
<main class="body-wrapper">
  <div class="navbar">
    <div class="navbar-header">
      <div class="basic-wrapper">
        <div class="navbar-brand"> <a href="home"><img src="#" srcset="style/images/logo.png 1x, style/images/logo@2x.png 2x" class="logo-light" alt="" /><img src="#" srcset="style/images/logo-dark.png 1x, style/images/logo-dark@2x.png 2x" class="logo-dark" alt="" /></a> </div>
        <a class="btn responsive-menu" data-toggle="collapse" data-target=".navbar-collapse"><i></i></a> </div>
      <!-- /.basic-wrapper --> 
    </div>
    <!-- /.navbar-header -->
    <nav class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="current"><a href="#home">Home</a></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle js-activated">Blog <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="blog">MI30 Blog</a></li>
            <li><a href="gallery">Gallery</a></li>
          </ul>
        </li>
        <li class="dropdown"><a href="#" class="dropdown-toggle js-activated">Bayernzone <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="news">News</a></li>
            <li><a href="table">Table</a></li>
            <li><a href="squad">Squad</a></li>
            <li><a href="chants">Chants</a></li>
            <li><a href="gallery_bayern">Gallery</a></li>
          </ul>
        </li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
      <!-- /.navbar-nav --> 
    </nav>
    <!-- /.navbar-collapse -->
    
    <div class="social-wrapper">
      <ul class="social naked">
        <li><a href="https://web.facebook.com/ilman30/"><i class="icon-s-facebook"></i></a></li>
        <li><a href="https://www.instagram.com/ilman_30/"><i class="icon-s-instagram"></i></a></li>
        <li><a href="https://twitter.com/ilman_30"><i class="icon-s-twitter"></i></a></li>
        <li><a href="https://plus.google.com/100360980887942031279?hl=id"><i class="icon-s-gplus"></i></a></li>
      </ul>
      <!-- /.social --> 
    </div>
    <!-- /.social-wrapper --> 
  </div>
  <!-- /.navbar -->
  
  <section id="home">
    <div class="tp-fullscreen-container revolution">
      <div class="tp-fullscreen">
        <ul>
          <li data-transition="fade"> <img src="style/images/art/slider1.jpg"  alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" />
            <h1 class="tp-caption large sfr" data-x="30" data-y="263" data-speed="900" data-start="800" data-easing="Sine.easeOut">I Love Football</h1>
            <div class="tp-caption medium sfr" data-x="30" data-y="348" data-speed="900" data-start="1500" data-easing="Sine.easeOut">Footbll is not just a game<br />
              Football is everything</div>
          </li>
          <li data-transition="fade"> <img src="style/images/art/slider2.jpg"  alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" />
            <div class="tp-caption large text-center sfl" data-x="center" data-y="283" data-speed="900" data-start="800" data-easing="Sine.easeOut">The most essential quality in the game</div>
            <div class="tp-caption large text-center sfr" data-x="center" data-y="363" data-speed="900" data-start="1500" data-easing="Sine.easeOut">is passion</div>
          </li>
          <li data-transition="fade"> <img src="style/images/art/slider3.jpg"  alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" />
            <div class="tp-caption large text-center sfb" data-x="center" data-y="293" data-speed="900" data-start="800" data-easing="Sine.easeOut">You can't change your</div>
            <div class="tp-caption large text-center sfb" data-x="center" data-y="387" data-speed="900" data-start="1500" data-easing="Sine.easeOut">favorite football team</div>
          </li>
          <li data-transition="fade"> <img src="style/video/video.jpg" alt="" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat" />
          <div class="tp-caption large text-center sfb" data-x="center" data-y="293" data-speed="900" data-start="800" data-endspeed="100" data-easing="Sine.easeOut" style="z-index: 2;">If you hate football</div>
          <div class="tp-caption large text-center sfb" data-x="center" data-y="387" data-speed="900" data-start="1500" data-endspeed="100" data-easing="Sine.easeOut" style="z-index: 2;">maybe you need a doctor</div>
          <div class="tp-caption tp-fade fadeout fullscreenvideo"
			data-x="0"
			data-y="0"
			data-speed="1000"
			data-start="1100"
			data-easing="Power4.easeOut"
			data-elementdelay="0.01"
			data-endelementdelay="0.1"
			data-endspeed="1500"
			data-endeasing="Power4.easeIn"
			data-autoplay="true"
			data-autoplayonlyfirsttime="false"
			data-nextslideatend="true"
				data-dottedoverlay="twoxtwo"
				data-volume="mute" data-forceCover="1" data-aspectratio="16:9" data-forcerewind="on" style="z-index: 1;">
            <video class="" preload="none" width="100%" height="100%" 
poster='style/video/video.jpg'>
              <source src='style/video/video.mp4' type='video/mp4' />
              <source src='style/video/video.webm' type='video/webm' />
            </video>
          </div>
        </li>
        </ul>
        <div class="tp-bannertimer tp-bottom"></div>
      </div>
      <!-- /.tp-fullscreen-container --> 
    </div>
    <!-- /.revolution --> 
  </section>
  <!--/#home -->
  
  
  
  <div class="dark-wrapper">
    <div class="container inner">
      <h3 class="section-title text-center">Latest Blog</h3>
      <div class="divide10"></div>
      <div class="carousel-wrapper">
        <div class="carousel carousel-boxed blog">
<?php
  $per_halaman = 6;
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
    $judul = stripslashes ($hasil['judul']);
    $isi = stripcslashes($hasil['isi']);
    $gambar = stripcslashes($hasil['gambar']);
    $tgl = stripcslashes($hasil['tgl']);
    $konten = substr($isi, 0, $jumlahkarakter);
  ?>
          <!-- /.post -->
          <div class="item post">
            <figure class="main"><img src="img/blog/<?php echo $gambar; ?>" alt="" /></figure>
            <div class="box text-center">
              <div class="category cat6"><span><a href="blog">Blog</a></span></div>
              <h4 class="post-title"><a href="view_blog?page=view&judul=<?php echo $judul; ?>"><?php echo $judul; ?></a></h4>
              <div class="meta"><span class="date"><?php echo $tgl; ?></span></div>
              <p><?php echo $konten; ?></p>
            </div>
            <!-- /.box --> 
            
          </div>
          <!-- /.post -->
     <!-- LOOP -->
  <?php 
} ?> 
        </div>
        <!--/.carousel --> 
      </div>
      <!--/.carousel-wrapper --> 
    </div>
    <!--/.container --> 
    
  </div>
  <div class="parallax parallax3 inverse-wrapper customers">
    <div class="container inner text-center">
      <h3 class="section-title">Football Quotes</h3>
      <div class="testimonials owl-carousel thin">
        <div class="item">
          <blockquote>
            <p>Whether we have the best individual players doesnt matter, you have to have the best team.<small class="meta">Philipp Lahm</small></p>
          </blockquote>
        </div>
        <!-- /.item -->
        <div class="item">
          <blockquote>
            <p>Football is one of the world's best means of communication. It is impartial, apolitical and universal. Football unites people around the world every day. Young or old, players or fans, rich or poor, the game makes everyone equal, stirs the imagination, makes people happy and makes them sad.<small class="meta">Franz Beckenbauer</small></p>
          </blockquote>
        </div>
        <!-- /.item -->
        <div class="item">
          <blockquote>
            <p>You can change your wife, your politics, your religion, but never, never can you change your favourite football team.<small class="meta">Eric Cantona</small></p>
          </blockquote>
        </div>
        <!-- /.item -->
        <div class="item">
          <blockquote>
            <p>Sometimes in football you have to hold your hand up and say, yeah, they're better than us.<small class="meta">Sir Alex Ferguson</small></p>
          </blockquote>
        </div>
        <!-- /.item --> 
        <div class="item">
          <blockquote>
            <p>I always have a football handy at home, and I'll play with it. Sometimes it'll get on my wife's nerves. But the moment I've got a ball at my feet, I'm happy.<small class="meta">Thierry Henry</small></p>
          </blockquote>
        </div>
        <!-- /.item --> 
        <div class="item">
          <blockquote>
            <p>If football was a drug, I would have died from overdose.<small class="meta">Fernando Torres</small></p>
          </blockquote>
        </div>
        <!-- /.item --> 
      </div>
      <!-- /.testimonials --> 
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.parallax -->
  <div class="dark-wrapper">
    <div class="container inner">
      <h3 class="section-title text-center">Latest Bayern News</h3>
      <div class="divide10"></div>
      <div class="carousel-wrapper">
        <div class="carousel carousel-boxed blog">
          <?php
  $per_halaman = 6;
  $jumlah_record = mysql_query("SELECT count(*)from berbayern ");
  $jumlah = mysql_result($jumlah_record, 0);
  $halaman = ceil($jumlah /$per_halaman);
  $page = (isset($_GET['page'])) ?(int) $_GET['page']:1;
  $mulai = ($page-1)*$per_halaman;
  $no = 1;
  $query = "SELECT * FROM berbayern ORDER BY id desc LIMIT $mulai, $per_halaman";
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
          <div class="item post">
            <figure class="main"><img src="img/berbayern/<?php echo $gambar; ?>" alt="" /></figure>
            <div class="box text-center">
              <div class="category cat9"><span><a href="news">News</a></span></div>
              <h4 class="post-title"><a href="view_news?page=view&judul=<?php echo $judul; ?>"><?php echo $judul; ?></a></h4>
              <div class="meta"><span class="date"><?php echo $tgl; ?></span></div>
              <p><?php echo $konten; ?></p>
            </div>
            <!-- /.box --> 
            
          </div>
          <!-- /.post -->
<!-- LOOP -->
  <?php 
} ?>          
          
        </div>
        <!--/.carousel --> 
      </div>
      <!--/.carousel-wrapper --> 
    </div>
    <!--/.container --> 
    
  </div>

  <!-- /.inverse-wrapper -->
  
  
  <!--/#gallery -->
  
  <section id="about">
    <div class="light-wrapper">
      <div class="container inner">
        <h3 class="section-title text-center">Who am I?</h3>
        <div class="divide20"></div>
        <div class="row">
          <div class="col-sm-5">
            <figure><img src="style/images/art/profile.png" alt=""></figure>
          </div>
          <!-- /column -->
          <div class="col-sm-7">
            <blockquote>
              <p> Whether we have the best individual players doesnt matter, you have to have the best team. </p>
              <p>- Philipp Lahm -</p>
            </blockquote>
            <p>It's not important who I am, but football is the most important thins in my life. If you hate football, maybe you need a doctor.</p>
            
            <ul class="social">
              <li><a href="https://web.facebook.com/ilman30/"><i class="icon-s-facebook"></i></a></li>
              <li><a href="https://www.instagram.com/ilman_30/"><i class="icon-s-instagram"></i></a></li>
              <li><a href="https://twitter.com/ilman_30"><i class="icon-s-twitter"></i></a></li>
              <li><a href="https://plus.google.com/100360980887942031279?hl=id"><i class="icon-s-gplus"></i></a></li>
            </ul>
          </div>
          <!-- /column --> 
          
        </div>
        <!-- /.row -->
        <div class="clearfix"></div>
        <div class="divide50"></div>
        
      </div>
      <!--/.container --> 
    </div>
    <!--/.light-wrapper -->
    
    
  </section>
  <!--/#about -->
  
  
  
  <div class="dark-wrapper">
    <div class="container inner">
      <div class="row">
        <div class="col-sm-4 col-md-3">
          <h2>Instagram Feed</h2>
          <p>Follow my instagram please.</p>
          <div class="divide10"></div>
          <a href="https://instagram.com/ilman_30/" class="btn btn-icon"><i class="icon-s-instagram"></i> Instagram Page</a> </div>
        <!--/column -->
        <div class="col-sm-8 col-md-9">
          <div class="image-grid col5">
            <div class="items-wrapper">
              <div id="instafeed" class="isotope items" data-limit="5"></div>
              
              <!--/.isotope --> 
            </div>
            <!--/.items-wrapper --> 
          </div>
          <!--/.image-grid --> 
        </div>
        <!--/column --> 
      </div>
      <!--/.row --> 
    </div>
    <!--/.container --> 
  </div>
  <!-- /.dark-wrapper -->
  
  <section id="contact">
    <div class="light-wrapper">
      <div class="container inner">
        <div class="thin">
          <h3 class="section-title text-center">Contact</h3>
          <ul class="contact-info text-center">
            <p><li><i class="icon-location"></i>Jl. Pakar Barat RT02/RW08 Gg. Mesjid Al-Ukhuwah, Ciburaial, Cimenyan, Kab. Bandung, Jawa Barat. </li></p>
            <li><i class="icon-phone"></i>+6282121606914</li>
            <li><i class="icon-mail"></i><a href="https://mail.google.com/">ilmannurhakim0@gmail.com</a> </li>
          </ul>
          <div class="divide50"></div>
          <div class="form-container">
            <form action="aksi_contact.php" method="post">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-field">
                    <label>
                      <input type="text" name="nama" placeholder="Your name" required="required">
                    </label>
                  </div>
                  <!--/.form-field --> 
                </div>
                <!--/column -->
                <div class="col-sm-6">
                  <div class="form-field">
                    <label>
                      <input type="email" name="email" placeholder="Your e-mail" required="required">
                    </label>
                  </div>
                  <!--/.form-field --> 
                </div>
                <!--/column -->
                
                <!--/column -->
                
              </div>
              <!--/.row -->
              <textarea name="konten" placeholder="Type your message here..." required="required"></textarea>
              
              <!--/.radio-set -->
              <input type="submit" class="btn" value="Send" name="post">
              <footer class="notification-box"></footer>
            </form>
            <!--/.vanilla-form --> 
          </div>
          <!--/.form-container --> 
        </div>
        <!-- /.thin --> 
      </div>
      <!-- /.container --> 
    </div>
    <!-- /.light-wrapper -->
    <div id="map"></div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1xdEVYy8IZdBKJGQp_QpDWaNQT7ZHGhY&amp;sensor=false&amp;extension=.js"></script> 
    <script> google.maps.event.addDomListener(window, 'load', init);
	var map;
	function init() {
	    var mapOptions = {
	        center: new google.maps.LatLng(-6.85966,  107.630811),
	        zoom: 15,
	        zoomControl: true,
	        zoomControlOptions: {
	            style: google.maps.ZoomControlStyle.DEFAULT,
	        },
	        disableDoubleClickZoom: false,
	        mapTypeControl: true,
	        mapTypeControlOptions: {
	            style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
	        },
	        scaleControl: true,
	        scrollwheel: false,
	        streetViewControl: true,
	        draggable : true,
	        overviewMapControl: false,
	        mapTypeId: google.maps.MapTypeId.ROADMAP,
			styles: [{stylers:[{saturation:-100},{gamma:1}]},{elementType:"labels.text.stroke",stylers:[{visibility:"off"}]},{featureType:"poi.business",elementType:"labels.text",stylers:[{visibility:"off"}]},{featureType:"poi.business",elementType:"labels.icon",stylers:[{visibility:"off"}]},{featureType:"poi.place_of_worship",elementType:"labels.text",stylers:[{visibility:"off"}]},{featureType:"poi.place_of_worship",elementType:"labels.icon",stylers:[{visibility:"off"}]},{featureType:"road",elementType:"geometry",stylers:[{visibility:"simplified"}]},{featureType:"water",stylers:[{visibility:"on"},{saturation:50},{gamma:0},{hue:"#50a5d1"}]},{featureType:"administrative.neighborhood",elementType:"labels.text.fill",stylers:[{color:"#333333"}]},{featureType:"road.local",elementType:"labels.text",stylers:[{weight:0.5},{color:"#333333"}]},{featureType:"transit.station",elementType:"labels.icon",stylers:[{gamma:1},{saturation:50}]}]
			}
	
	    var mapElement = document.getElementById('map');
	    var map = new google.maps.Map(mapElement, mapOptions);
	    var locations = [
	        ['Boudewijn Ostenstraat 2', -6.85966,  107.630811]
	    ];
	    for (i = 0; i < locations.length; i++) {
	        marker = new google.maps.Marker({
	            icon: 'style/images/map-pin.png',
	            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
	            map: map
	        });
	    }
	}
	</script> 
  </section>
  <!--/#contact -->
  
  <?php
  include 'footer.php';
  ?>
  <!-- /footer -->
  <div class="slide-portfolio-overlay"></div><!-- overlay that appears when slide portfolio content is open -->
</main>
<!--/.body-wrapper -->
<div class="slide-portfolio-item-content dark-wrapper slide-portfolio-item-1">
  <div class="slide-portfolio-item-detail">
    <div class="inner2">
      <h2 class="text-center">Coffee Time</h2>
      <p class="text-center">Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Sed posuere consectetur est at lobortis. Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
      <div class="divide25"></div>
      <ul class="basic-gallery text-center">
        <li><img src="style/images/art/sp1-1.jpg" alt=""></li>
        <li><img src="style/images/art/sp1-2.jpg" alt=""></li>
        <li><img src="style/images/art/sp1-3.jpg" alt=""></li>
        <li><img src="style/images/art/sp1-4.jpg" alt=""></li>
        <li><img src="style/images/art/sp1-5.jpg" alt=""></li>
      </ul>
    </div>
    <!-- .inner --> 
  </div>
  <!-- slide-portfolio-item-detail --> 
</div>
<!-- slide-portfolio-item-content -->

<div class="slide-portfolio-item-content dark-wrapper slide-portfolio-item-2">
  <div class="slide-portfolio-item-detail">
    <div class="inner2">
      <h2 class="text-center">Transportation</h2>
      <p class="text-center">Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Sed posuere consectetur est at lobortis. Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
      <div class="divide25"></div>
      <ul class="basic-gallery text-center">
        <li><img src="style/images/art/sp2-1.jpg" alt=""></li>
        <li><img src="style/images/art/sp2-2.jpg" alt=""></li>
        <li><img src="style/images/art/sp2-3.jpg" alt=""></li>
        <li><img src="style/images/art/sp2-4.jpg" alt=""></li>
      </ul>
    </div>
    <!-- .inner --> 
  </div>
  <!-- slide-portfolio-item-detail --> 
</div>
<!-- slide-portfolio-item-content -->

<div class="slide-portfolio-item-content dark-wrapper slide-portfolio-item-3">
  <div class="slide-portfolio-item-detail">
    <div class="inner2">
      <h2 class="text-center">Colorful Objects</h2>
      <p class="text-center">Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Sed posuere consectetur est at lobortis. Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
      <div class="divide25"></div>
      <ul class="basic-gallery text-center">
        <li><img src="style/images/art/sp3-1.jpg" alt=""></li>
        <li><img src="style/images/art/sp3-2.jpg" alt=""></li>
        <li><img src="style/images/art/sp3-3.jpg" alt=""></li>
        <li><img src="style/images/art/sp3-4.jpg" alt=""></li>
      </ul>
    </div>
    <!-- .inner --> 
  </div>
  <!-- slide-portfolio-item-detail --> 
</div>
<!-- slide-portfolio-item-content -->

<div class="slide-portfolio-item-content dark-wrapper slide-portfolio-item-4">
  <div class="slide-portfolio-item-detail">
    <div class="inner2">
      <h2 class="text-center">Green Grass</h2>
      <p class="text-center">Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Sed posuere consectetur est at lobortis. Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
      <div class="divide25"></div>
      <ul class="basic-gallery text-center">
        <li><img src="style/images/art/sp4-1.jpg" alt=""></li>
        <li><img src="style/images/art/sp4-2.jpg" alt=""></li>
        <li><img src="style/images/art/sp4-3.jpg" alt=""></li>
        <li><img src="style/images/art/sp4-4.jpg" alt=""></li>
        <li><img src="style/images/art/sp4-5.jpg" alt=""></li>
      </ul>
    </div>
    <!-- .inner --> 
  </div>
  <!-- slide-portfolio-item-detail --> 
</div>
<!-- slide-portfolio-item-content -->
<div class="slide-portfolio-item-content dark-wrapper slide-portfolio-item-5">
  <div class="slide-portfolio-item-detail">
    <div class="inner2">
      <h2 class="text-center">Suitcase</h2>
      <p class="text-center">Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Sed posuere consectetur est at lobortis. Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
      <div class="divide25"></div>
      <ul class="basic-gallery text-center">
        <li><img src="style/images/art/sp5-1.jpg" alt=""></li>
        <li><img src="style/images/art/sp5-2.jpg" alt=""></li>
        <li><img src="style/images/art/sp5-3.jpg" alt=""></li>
        <li><img src="style/images/art/sp5-4.jpg" alt=""></li>
      </ul>
    </div>
    <!-- .inner --> 
  </div>
  <!-- slide-portfolio-item-detail --> 
</div>
<!-- slide-portfolio-item-content -->
<div class="slide-portfolio-item-content dark-wrapper slide-portfolio-item-6">
  <div class="slide-portfolio-item-detail">
    <div class="inner2">
      <h2 class="text-center">Tulips</h2>
      <p class="text-center">Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Sed posuere consectetur est at lobortis. Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
      <div class="divide25"></div>
      <ul class="basic-gallery text-center">
        <li><img src="style/images/art/sp6-1.jpg" alt=""></li>
        <li><img src="style/images/art/sp6-2.jpg" alt=""></li>
        <li><img src="style/images/art/sp6-3.jpg" alt=""></li>
      </ul>
    </div>
    <!-- .inner --> 
  </div>
  <!-- slide-portfolio-item-detail --> 
</div>
<!-- slide-portfolio-item-content -->
<div class="slide-portfolio-item-content dark-wrapper slide-portfolio-item-7">
  <div class="slide-portfolio-item-detail">
    <div class="inner2">
      <h2 class="text-center">Workshop</h2>
      <p class="text-center">Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Sed posuere consectetur est at lobortis. Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
      <div class="divide25"></div>
      <ul class="basic-gallery text-center">
        <li><img src="style/images/art/sp7-1.jpg" alt=""></li>
        <li><img src="style/images/art/sp7-2.jpg" alt=""></li>
        <li><img src="style/images/art/sp7-3.jpg" alt=""></li>
        <li><img src="style/images/art/sp7-4.jpg" alt=""></li>
        <li><img src="style/images/art/sp7-5.jpg" alt=""></li>
        <li><img src="style/images/art/sp7-6.jpg" alt=""></li>
      </ul>
    </div>
    <!-- .inner --> 
  </div>
  <!-- slide-portfolio-item-detail --> 
</div>
<!-- slide-portfolio-item-content -->
<div class="slide-portfolio-item-content dark-wrapper slide-portfolio-item-8">
  <div class="slide-portfolio-item-detail">
    <div class="inner2">
      <h2 class="text-center">Coffee Cups</h2>
      <p class="text-center">Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Sed posuere consectetur est at lobortis. Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
      <div class="divide25"></div>
      <ul class="basic-gallery text-center">
        <li><img src="style/images/art/sp8-1.jpg" alt=""></li>
        <li><img src="style/images/art/sp8-2.jpg" alt=""></li>
        <li><img src="style/images/art/sp8-3.jpg" alt=""></li>
        <li><img src="style/images/art/sp8-4.jpg" alt=""></li>
      </ul>
    </div>
    <!-- .inner --> 
  </div>
  <!-- slide-portfolio-item-detail --> 
</div>
<!-- slide-portfolio-item-content -->
<div class="slide-portfolio-item-content dark-wrapper slide-portfolio-item-9">
  <div class="slide-portfolio-item-detail">
    <div class="inner2">
      <h2 class="text-center">Holding Green</h2>
      <p class="text-center">Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Sed posuere consectetur est at lobortis. Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
      <div class="divide25"></div>
      <ul class="basic-gallery text-center">
        <li><img src="style/images/art/sp9-1.jpg" alt=""></li>
        <li><img src="style/images/art/sp9-2.jpg" alt=""></li>
        <li><img src="style/images/art/sp9-3.jpg" alt=""></li>
        <li><img src="style/images/art/sp9-4.jpg" alt=""></li>
        <li><img src="style/images/art/sp9-5.jpg" alt=""></li>
      </ul>
    </div>
    <!-- .inner --> 
  </div>
  <!-- slide-portfolio-item-detail --> 
</div>
<!-- slide-portfolio-item-content --> 
<a href="#0" class="slide-portfolio-item-content-close"><i class="budicon-cancel-1"></i></a> <!-- close slide portfolio content --> 
<script src="style/js/jquery.min.js"></script> 
<script src="style/js/bootstrap.min.js"></script> 
<script src="style/js/plugins.js"></script> 
<script src="style/js/classie.js"></script> 
<script src="style/js/jquery.themepunch.tools.min.js"></script> 
<script src="style/js/scripts.js"></script>
</body>
</html>