<div class="container">
    <table border="1px">
        <thead>
            <th>chon</th>
            <th>Ma loai</th>
            <th>Ten loai</th>
            <th>action</th>
        </thead>
        <?php
            foreach ($listloaihang as $loai_hang1) {
                extract($loai_hang1);
                $suadm = "index.php?act=suadm&Ma_loai=".$Ma_loai;
                $xoadm = "index.php?act=xoadm&Ma_loai=".$Ma_loai;
                echo '<tbody>
                    <td><input type="checkbox"></td>
                    <td>' . $Ma_loai . '</td>
                    <td>' . $Ten_loai . '</td>
                    <td><a href="'.$suadm.'"><input type="button" value="Sua"></a> <a href="'.$xoadm.'"><input type="button" value="Xoa"></a></td>
                </tbody>';
            };
        ?>

    </table>
    <div class="add-tool">
        <input type="button" value="Chon tat ca">
        <input type="button" value="Bỏ chọn tất cả">
        <input type="button" value="Xóa các mục đã chọn">
        <a href="index.php?act=addloaihang"><input type="button" value="nhap them"></a>

    </div>
</div>