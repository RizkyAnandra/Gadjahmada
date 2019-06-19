<?php
if (isset($_GET['judul'])){
   $sql = mysqli_query($query,"select judul from berita where judul_seo='$_GET[judul]'");
    $j   = mysqli_fetch_array($sql);
    if ($j) {
        echo "$j[judul]";
    } else{
      $sql2 = mysqli_query($query,"select nama_website from identitas LIMIT 1");
      $j2   = mysqli_fetch_array($sql2);
		  echo "$j2[nama_website]";
  }
}
elseif (isset($_GET['id'])){
   $sql = mysqli_query($query,"select nama_kategori from kategori where id_kategori='$_GET[id]'");
    $j   = mysqli_fetch_array($sql);
    if ($j) {
        echo "Imago Media | $j[nama_kategori]";
    } else{
      $sql2 = mysqli_query($query,"select nama_website from identitas LIMIT 1");
      $j2   = mysqli_fetch_array($sql2);
		  echo "$j2[nama_website]";
  }
}

else{
      $sql2 = mysqli_query($query,"select * from identitas LIMIT 1");
      $j2   = mysqli_fetch_array($sql2);
		  echo "$j2[nama_website]";
}
?>
