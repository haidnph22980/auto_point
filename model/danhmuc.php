<?php
function insert_danhmuc($tenloaihang){
    $sql = "insert into loai_hang(Ten_loai) values ('$tenloaihang') ";
    pdo_execute($sql);
}
function delete_danhmuc($Ma_loai){
    $sql = "delete from loai_hang where Ma_loai =" . $Ma_loai;
                pdo_execute($sql);
}
function loadall_danhmuc(){
    $sql = "select * from loai_hang order by Ma_loai desc ";
    $listloaihang = pdo_query($sql);
    return $listloaihang;
}
function loadone_danhmuc($Ma_loai){
    $sql = "select * from loai_hang where Ma_loai =" . $Ma_loai;
    $update = pdo_query_one($sql);
    return $update;
}
function updatedm_danhmuc($tenloai,$maloai){
    $sql = "update loai_hang set Ten_loai='".$tenloai."' where Ma_loai=".$maloai;
    pdo_execute($sql);
}
function addsp_danhmuc($tenhh){
    $sql = "insert into hang_hoa(ten_hh) values ('$tenhh') ";
                pdo_execute($sql);
}
?>