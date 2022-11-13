  <h1>Add hang hoa</h1>
  <div class="container">
      <form action="index.php?act=addhh" method="POST" enctype="multipart/form-data">
          <div class="mahh">
              <label for="">Ma hang hoa</label>
              <input type="number" name="mahh" disabled>
          </div>
          <div class="tenhh">
              <label for="">Ten hang hoa</label>
              <input type="text" name="tenhh">
          </div>
          <div class="dongia">
              <label for="">Don gia</label>
              <input type="number" name="dongia">
          </div>
          <div class="giamgia">
              <label for="">Giam gia</label>
              <input type="number" name="giamgia">
          </div>
          <div class="hinhanh">
              <label for="">Hinh anh</label>
              <input type="file" name="hinhanh">
          </div>
          <div class="loaihang">
              <label for="">Loai Hang</label>
              <input type="text" name="loaihang">
          </div>
          <div class="trangthai">
              <label for="">Hang dac biet</label>
              <input type="radio" name="option" id="">Dac biet
              <input type="radio" name="option" id="">Binh thuong
          </div>
          <div class="ngaynhap">
              <label for="">Ngay Nhap</label>
              <input type="date" name="ngaynhap">
          </div>
          <div class="sloluotxem">
              <label for="">So luot xem</label>
              <input type="number" min=0 name="view">
          </div>
          <label for="">Mo Ta</label>
          <textarea name="mota" id="" cols="30" rows="10"></textarea>
          <div class="Ma_loai">
            <select name="Ma_loai" id="">
                <?php
                foreach ($listloaihang  as $danhmuc) {
                    extract($danhmuc);
                    echo '<option value="'.$Ma_loai .'">'.$Ten_loai.'</option>';
                }
                ?>
                
            </select>
          </div>
          <div class="add-tool">
              <input type="submit" name="themoihh" value="Them moi">
              <button type="reset">Nhap Lai</button>
              <a href="index.php?act=listhh"><button type="button">Danh sach</button></a>
          </div>
          <?php
            if (isset($thongbao) && ($thongbao) == "") {
                echo $thongbao;
            }
            ?>
      </form>

  </div>