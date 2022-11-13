<div class="container">
    <h1>danh sach loai hang</h1>
    <table border="1">
    <thead>
        <tr>
            <th>Chon</th>
            <th>Ma Hang hoa</th>
            <th>Ten hang hoa</th>
            <th>Don gia</th>
            <th>Giam gia</th>
            <th>Hinh anh</th>
            <th>Ngay Nhap</th>
            <th>Mo ta</th>
            <th>Dac biet</th>
            <th>So Luot xem</th>
            <th>Ma Loai</th>
            <th>Action</th>
        </tr>
        
    </thead>
   <?php
         foreach ($listhanghoa as $hanghoa) {
            extract($hanghoa);
            $suahh = "index.php?act=suahh&id=".$mahh;
            $xoahh = "index.php?act=xoahh&id=".$mahh;
            echo ' <tbody>
            <tr>
                <td><input type="checkbox" name="" id=""></th>
                <td>'.$ma_hh.'</td>
                <td>'.$ten_hh.'</td>
                <td>'.$don_gia.'</td>
                <td>'.$giam_gia.'</td>
                <td>'.$hinh.'</td>
                <td>'.$ngay_nhap.'</td>
                <td>'.$mo_ta.'</td>
                <td>'.$dac_biet.'</td>
                <td>'.$so_luot_xem.'</td>
                <td>'.$Ma_loai.'</td>
                <td><a href="'.$suahh.'">Sua</a><a href="'.$xoahh.'">Xoa</a></td>
            </tr>
                </tbody>';
         } 
   ?>
    </table>
    <div class="add-tool">
        <input type="button" value="Chon tat ca">
        <input type="button" value="Bỏ chọn tất cả">
        <input type="button" value="Xóa các mục đã chọn">
        <a href="index.php?act=addhh"><input type="button" value="nhap them"></a>

    </div>
</div>