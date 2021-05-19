<div id="divheader">
	<ul id="ulheader">
		<li><a href="http://localhost:8088/public">Tim tro</a></li>
		<li><a href="http://localhost:8088/public?url=homepage/addPage">Dang tin</a></li>
		<li>
			<?php 
				if(!isset($_SESSION['username'])){
					echo '<a href="http://localhost:8088/public?url=users/login">'."Dang nhap".'</a>';
				}
				else{
					echo '<span>'.$_SESSION['username'].'</span>';
				}
			?>
			
		</li>
		<li>
			<?php 
				if(!isset($_SESSION['username'])){
					echo '<a href="http://localhost:8088/public?url=users/register">'."Dang ky".'</a>';
				}
				else{
					echo '<a href="http://localhost:8088/public?url=users/logout">'."Dang xuat".'</a>';	
				}
			 ?>
			
		</li>
	</ul>
</div>
<hr></hr>