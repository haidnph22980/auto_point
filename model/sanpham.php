<?php
function insert_sanpham($ten_hh, $don_gia, $giam_gia, $hinh, $ngay_nhap, $mo_ta, $dac_biet, $so_luot_xem, $Ma_loai)
{
    $sql = "insert into hang_hoa(ten_hh,don_gia,giam_gia,hinh,ngay_nhap,mo_ta,dac_biet,so_luot_xem,Ma_loai) values ('$ten_hh,$don_gia,$giam_gia,$hinh,$ngay_nhap,$mo_ta,$dac_biet,$so_luot_xem,$Ma_loai') ";
    pdo_execute($sql);
}
function delete_sanpham($Ma_hh)
{
    $sql = "delete from hang_hoa where ma_hh =" . $Ma_hh;
    pdo_execute($sql);
}
function loadall_sanpham()
{
    $sql = "select * from hang_hoa order by ma_hh desc ";
    $listhanghoa = pdo_query($sql);
    return $listhanghoa;
}
function loadone_sanpham($Ma_hanghoa)
{
    $sql = "select * from hang_hoa where ma_hh  =" . $Ma_hanghoa;
    $update = pdo_query_one($sql);
    return $update;
}
function updatedm_sanpham($tenhh, $malhh)
{
    $sql = "update hang_hoa set ten_hh ='" . $tenhh . "' where ma_hh=" . $malhh;
    pdo_execute($sql);
}
function addsp_sanpham($tenhh)
{
    $sql = "insert into hang_hoa(ten_hh) values ('$tenhh') ";
    pdo_execute($sql);
}
