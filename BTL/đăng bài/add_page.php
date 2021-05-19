<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="add_page.css">
<body>
<div class="wrapper">
  <form method="post" enctype="multipart/form-data" action="">
    <div class="title">
      Đăng tin nhà đất
    </div>
    <div style="display: inline-block;background: green">
      <?php if(isset($suc)) echo "<p>".$suc."</p>";?>
    </div>
    <div class="form">
      <div class="inputfield">
        <label>Quận</label>
        <div class="custom_select">
          <select name="site" id="site">
            <option value="">Hoàn Kiếm</option>
            <option value="male">Đống Đa</option>
            <option value="female">Hoàng Mai</option>
            <option value="female">Thanh Xuân</option>
            <option value="female">Hai Bà Trưng</option>
          </select>
        </div>
      </div>
      <div class="inputfield">
        <label>Địa chỉ cụ thể</label>
        <input type="text" name="addr" required="required" class="input">
      </div>  
      <div class="inputfield">
        <label>Giá cả</label>
        <input type="tel" class="input" name="cost" pattern="[0-9]{6,9}" required="required">
      </div>  
      <div class="inputfield">
        <label>Diện tích</label>
        <input type="tel" name="s" pattern="[0-9]{1,4}" required="required" class="input">
      </div>  
      <div class="inputfield">
        <label>Loại nhà</label>
        <div class="custom_select">
          <select name="type" id="type">
            <option value="">Chung cư mini</option>
            <option value="male">Phòng trọ</option>
            <option value="female">Nhà nguyên căn</option>
          </select>
        </div>
      </div>  
      <div class="inputfield">
          <label>Số điện thoại liên hệ</label>
          <input type="text" class="input">
      </div> 
      <div class="inputfield">
          <label>Miêu tả nhà</label>
          <textarea class="textarea" name="scribble"></textarea>
      </div> 
      <div class="inputfield">
          <label>Ảnh mô tả chính</label>
          <input type="file" name="main_img" required="required">
      </div>
      <div class="inputfield">
          <label>Ảnh mô tả thêm</label>
          <input type="file" name="extra_img[]" multiple>
      </div>
      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <p>Xác nhận đăng bài</p>
      </div> 
      <div class="inputfield">
        <input type="submit" value="Đăng bài" class="btn" name="submit">
      </div>
    </div>
  </form>
</div>		
</body>
