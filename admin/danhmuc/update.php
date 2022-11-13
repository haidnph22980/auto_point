<h1>Cap nhap loai hang</h1>
<?php
if (is_array($update)) {
    extract($update);
}
?>
<h1>Trang quan li loai hang</h1>
<div class="container">
    <form action="index.php?act=updatedm" method="post">
        <div class="maloai1">
            <label for="">Ma loai</label>
            <input type="number" disabled name="maloai">
        </div>
        <div class="tenloai">
            <label for="">tenloai</label>
            <input type="text" name="tenloai" value="<?php if (isset($Ten_loai)&&($Ten_loai != ""))  {
                echo $Ten_loai;
            }?>">
        </div>
        <div class="add-tool">
            <input type="hidden" name="Ma_loai" value="<?php if (isset($Ma_loai)&&($Ma_loai > 0)) echo $Ma_loai; ?>">
            <input type="submit" value="Cap Nhat" name="capnhat">
            <input type="reset" value="Nhap Lai">
            <a href="index.php?act=list"><button type="button">Danh sach</button></a>
        </div>
        <?php
        if (isset($thongbao) && ($thongbao) != "") {
            echo $thongbao;
        }
        ?>
    </form>
</div>