<div id="filterform">
		<form action="http://hailocalhost/Web/CNWeb20201/Web20202/BTL/public?url=homepage/filter" method="post">
			<h2 class="margin1 align1">Tìm kiếm</h2>
			<div class="outside_border">
				<div class="search_bar">

				</div>
			</div>







			<div class="margin1">
				<p>Khu vực<p/>
				<select name="site" id="site">
					<option value="">Tất cả khu vực</option>
					<option value="hai ba trung">hai ba trung</option>
					<option value="hoan kiem">hoan kiem</option>
					<option value="dong da">dong da</option>
					<option value="hoang mai">hoangmai</option>
					<option value="thanh xuan">thanh xuan</option>
				</select>
			</div>
			<div class="margin1">
				<p>gia</p>
				<label for="from">tu</label>
				<input type="number" name="costfrom" id="from" class="text1">
				<label for="to" >den</label>
				<input type="number" name="costto" id="to" class="text1">
			</div>
			<div class="margin1">
				<p>dien tich</p>
				<label for="from">tu</label>
				<input type="number" name="sfrom" id="from" class="text1">
				<label for="to">den</label>
				<input type="number" name="sto" id="to" class="text1">
			</div>
			<div class="margin1">
				<p><label for="type">loai nha</label></p>
				<select name="type" id="type">
					<option value="">tat ca</option>
					<option value="chung cu mini">chung cu mini</option>
					<option value="phong tro">phong tro</option>
					<option value="nha nguyen can">nha nguyen can</option>
				</select>
			</div>
			<button type="submit" name="filter" value="filter" style="margin: auto;">loc</button>
		</form>
	</div>