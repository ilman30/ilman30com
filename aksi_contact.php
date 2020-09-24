<?php
include'config/koneksi.php';
?>
<?php
  if(isset($_POST['post'])){
    $simpan = mysql_query("INSERT INTO komentar (nama,email,konten) VALUES ('$_POST[nama]','$_POST[email]','$_POST[konten]')");
      if($simpan){
        echo"<script>alert('Thanks'); window.location='home#contact'</script>";
      }else{
        echo"gagal";
      }
  }
?>
