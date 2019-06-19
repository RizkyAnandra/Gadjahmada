<?php
      $sql = mysqli_query($query,"select meta_keyword from identitas");
      $data   = mysqli_fetch_array($sql);

    echo "$data[meta_keyword]";
?>
