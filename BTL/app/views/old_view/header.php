<!-- <div id="divheader"> -->
<nav>
	<div class="logo">
		<h4><a href="http://hailocalhost/Web/CNWeb20201/Web20202/BTL/public">Trang chủ</a></h4>
	</div>
	<ul class="nav-links">
		<!-- <li><a href="http://hailocalhost/Web/CNWeb20201/Web20202/BTL/public">Trang chủ</a></li> -->
		<li class="dang_tin"><a href="http://hailocalhost/Web/CNWeb20201/Web20202/BTL/public?url=homepage/addPage">Đăng tin</a></li>
		<li class="dang_nhap">
			<?php 
				if(!isset($_SESSION['username'])){
					echo '<a href="http://hailocalhost/Web/CNWeb20201/Web20202/BTL/public?url=users/login">'."Đăng nhập".'</a>';
				}
				else{
					echo '<span>'.$_SESSION['username'].'</span>';
				}
			?>
			
		</li>
		<li class="dang_ky">
			<?php 
				if(!isset($_SESSION['username'])){
					echo '<a href="http://hailocalhost/Web/CNWeb20201/Web20202/BTL/public?url=users/register">'."Đăng ký".'</a>';
				}
				else{
					echo '<a href="http://hailocalhost/Web/CNWeb20201/Web20202/BTL/public?url=users/logout">'."Đăng xuất".'</a>';	
				}
			 ?>
		</li>
	</ul>
	<div class="burger">
		<div class="line1"></div>
		<div class="line2"></div>
		<div class="line3"></div>
	</div>

</nav>
<!-- <script src="/Web/CNWeb20201/rent_house/public/header.js" type="text/javascript"></script> -->
<script src="js/header.js"></script>
<!-- </div> -->
<!-- <hr></hr> -->