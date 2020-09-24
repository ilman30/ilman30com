<?php
include'../config/koneksi.php';
?>

<div class="cbp-loadMore-block1">
                  <?php
  $per_halaman = 50;
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
    $gambar = stripcslashes($hasil['gambar']);
  ?>
  <div class="cbp-item logo web"> <a class="cbp-caption fancybox-media" data-rel="portfolio" href="img/berbayern/<?php echo $gambar ?>" data-title-id="title-14">
    <div class="cbp-caption-defaultWrap"> <img src="img/berbayern/<?php echo $gambar ?>" alt="" /> </div>
    <div class="cbp-caption-activeWrap">
      <div class="cbp-l-caption-alignCenter">
        <div class="cbp-l-caption-body">
          <div class="cbp-l-caption-title"><span class="cbp-plus"></span></div>
        </div>
      </div>
    </div>
    
    <!--/.cbp-caption-activeWrap --> 
    
    </a> </div>
    <?php } ?>
  
  <!--/.cbp-item -->
  
  
  
</div>
