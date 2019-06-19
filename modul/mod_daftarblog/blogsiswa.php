<?php

$sq = mysqli_query($query, "SELECT hit,url from  blogsiswa  where id_blogsiswa ='$_GET[id]'");
$n = mysqli_fetch_array($sq);	
mysqli_query($query, "UPDATE blogsiswa SET hit=$n[hit]+1 where id_blogsiswa ='$_GET[id]'");

  header('location:'.$n[url]);