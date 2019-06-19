<div class="main-content-left">
		  	<?php
			$cse=mysqli_query($query, "select * from cse"); 
  			$g=mysqli_fetch_array($cse);
				echo"$g[search_result]";
			
			?>
</div>

