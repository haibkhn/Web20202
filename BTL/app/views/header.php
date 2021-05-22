<!-- <div id="divheader"> -->
<nav>
	<div class="logo">
		<h4><a href="http://localhost:8088/public">Trang chủ</a></h4>
	</div>
	<ul class="nav-links">
		<?php 
			if(isset($_SESSION['username'])){
				echo "<li><a href=\"http://localhost:8088/public?url=homepage/added\">Phòng của bạn</a></li>";
			}
			if(isset($_SESSION['username'])){
				echo "<li><a href=\"http://localhost:8088/public?url=homepage/savePage\">Đã lưu</a></li>";
			}
		 ?>
		<!-- <li><a href="http://localhost:8088/public">Trang chủ</a></li> -->
		<li class="dang_tin"><a href="http://localhost:8088/public?url=homepage/addPage">Đăng tin</a></li>
		<li class="dang_nhap">
			<?php 
				if(!isset($_SESSION['username'])){
					echo '<a href="http://localhost:8088/public?url=users/login">'."Đăng nhập".'</a>';
				}
				else{
					echo '<span id="user-name">'.$_SESSION['username'].'</span>';
				}
			?>
			
		</li>
		<li class="dang_ky">
			<?php 
				if(!isset($_SESSION['username'])){
					echo '<a href="http://localhost:8088/public?url=users/register">'."Đăng ký".'</a>';
				}
				else{
					echo '<a href="http://localhost:8088/public?url=users/logout">'."Đăng xuất".'</a>';	
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
<script src="public/js/header.js"></script>
<!-- </div> -->
<!-- <hr></hr> -->