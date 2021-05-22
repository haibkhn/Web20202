<div id="divheader">
	<ul id="ulheader">
		<li><a href="http://localhost/Web20202/rent_house-master/rent_house-master/public">Tim tro</a></li>
		<li><a href="http://localhost/Web20202/rent_house-master/rent_house-master/public?url=homepage/addPage">Dang tin</a></li>
		<li>
			<?php 
				if(!isset($_SESSION['username'])){
					echo '<a href="http://localhost/Web20202/rent_house-master/rent_house-master/public?url=users/login">'."Dang nhap".'</a>';
				}
				else{
					echo '<span>'.$_SESSION['username'].'</span>';
				}
			?>
			
		</li>
		<li>
			<?php 
				if(!isset($_SESSION['username'])){
					echo '<a href="http://localhost/Web20202/rent_house-master/rent_house-master/public?url=users/register">'."Dang ky".'</a>';
				}
				else{
					echo '<a href="http://localhost/Web20202/rent_house-master/rent_house-master/public?url=users/logout">'."Dang xuat".'</a>';	
				}
			 ?>
			
		</li>
	</ul>
</div>
<hr></hr>