
<h1>Trang quan li loai hang</h1>
<div class="container">
    <form action="index.php?act=addloaihang" method="post">
        <div class="maloai1">
            <label for="">Ma loai</label>
            <input type="number" disabled name="maloai">
        </div>
        <div class="tenloai">
            <label for="">tenloai</label>
            <input type="text" name="tenloai">
        </div>
        <div class="add-tool">
            <input type="submit" value="Them Moi" name="themmoi">
            <button>Nhap Lai</button>
            <a href="index.php?act=list"><button type="button">Danh sach</button></a>
        </div>
        <?php
        if (isset($thongbao) && ($thongbao) != "") {
            echo $thongbao;
        }
        ?>
    </form>
</div>