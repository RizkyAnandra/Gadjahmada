<?php
if (isset($_GET['judul'])){
    $sql = mysqli_query($query,"select judul from berita where judul_seo='$_GET[judul]'");
    $j   = mysqli_fetch_array($sql);
    

		echo "foto_berita/$j[gambar]";
}
else{
		echo "default.jpg";
}
?>

