<div class="super-big">
  <div id="filterform">
    <form
      action="http://localhost:8088/public/?url=homepage/filter"
      method="post"
    >
    
      <div class="wrapper">
        <div class="search-input">
          <input type="text" autocomplete="off" placeholder="Nhập khu vực bạn muốn tìm" />

          <div class="autocom-box"></div>

          <button type="submit" name="filter" value="filter" class="icon">
            <i class="fas fa-search-location"></i>
          </button>
        </div>

        <div class="option-menu">
          <div class="khu-vuc">
            <select name="site" id="site">
              <option value="">Tất cả khu vực</option>
              <option value="hai ba trung">Hai Bà Trưng</option>
              <option value="hoan kiem">Hoàn Kiếm</option>
              <option value="dong da">Đống Đa</option>
              <option value="hoang mai">Hoàng Mai</option>
              <option value="thanh xuan">Thanh Xuân</option>
            </select>
          </div>

          <div class="loai-nha">
            <select name="type" id="type">
              <!-- <option value="" disabled selected>Chọn loại nhà</option> -->
              <option value="">Tất cả loại nhà</option>
              <option value="chung cu mini">Chung cư mini</option>
              <option value="phong tro">Phòng trọ</option>
              <option value="nha nguyen can">Nhà nguyên căn</option>
            </select>
          </div>

          <div class="gia">
            <button type="button" onclick="showGia()">Giá nhà <i style="float:right; font-size:11px;" class="fas fa-chevron-down"></i></button>
            <div id="giaList" style="display: none; text-align: center">
              <label for="from"></label>
              <input type="number" name="costfrom" id="from" class="text1" placeholder="Từ"/>
              <span>-</span>
              <label for="to"></label>
              <input type="number" name="costto" id="to" class="text1" placeholder="Đến"/>
              <span>₫</span>
              <!-- <p>triệu đồng</p> -->
            </div>
          </div>

          <div class="dien-tich">
            <button type="button" onclick="showDTich()">Diện tích <i style="float:right; font-size:11px;" class="fas fa-chevron-down"></i></button>
            <div id="dtich" style="display: none; text-align: center">
              <label for="from"></label>
              <input type="number" name="sfrom" id="from" class="text1" placeholder="Từ"/>
              <span>-</span>
              <label for="to"></label>
              <input type="number" name="sto" id="to" class="text1" placeholder="Đến"/>
              <span>&#13217;</span>
            </div>
          </div>
        </div>
        
      </div>

    </form>
  </div>
</div>


<script src="public/js/filter.js"></script>
<script src="public/js/filter_suggestion.js"></script>
<script>
  function showGia() {
    var x = document.getElementById("giaList");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }

  function showDTich() {
    var x = document.getElementById("dtich");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }

</script>
