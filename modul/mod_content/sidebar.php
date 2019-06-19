	<!-- BAGIAN SIDE BAR-->
	<div class="main-content-right">
    <?php
	$sidebar=mysqli_query($query, "SELECT * FROM sidebar WHERE aktif='Y' ORDER BY posisi");  
	while($p=mysqli_fetch_array($sidebar)){
	include "sidebar/$p[code]";
	}
	?>    
	</div>
        