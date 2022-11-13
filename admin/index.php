<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "header.php";
// controller

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'addloaihang':
            // kiem tra xem nguoi dung co click vao nut add hay khong
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloaihang = $_POST['tenloai'];
                //    var_dump($tenloaihang);
                insert_danhmuc($tenloaihang);
                $thongbao = "them thanh cong";
            }
            include 'danhmuc/add.php';
            break;
        case 'list':
            $listloaihang = loadall_danhmuc();
            include 'danhmuc/list.php';
            break;
        case 'addsp':
            if (isset($_POST['tenhh']) && ($_POST['tenhh'])) {
                $tenhh = $_POST['tenhh'];
                addsp_danhmuc($tenhh);
                $thongbao = "them thanh cong";
            }
            include 'sanpham/add.php';
            break;
        case 'xoadm':
            if (isset($_GET['Ma_loai']) && ($_GET['Ma_loai'] > 0)) {
                delete_danhmuc($_GET['Ma_loai']);
            }
            $listloaihang = loadall_danhmuc();
            include 'danhmuc/list.php';
            break;
        case 'suadm':
            if (isset($_GET['Ma_loai']) && ($_GET['Ma_loai'] > 0)) {
                $update = loadone_danhmuc($_GET['Ma_loai']);
            }
            include 'danhmuc/update.php';
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tenloai = $_POST['tenloai'];
                $maloai = $_POST['Ma_loai'];
                updatedm_danhmuc($tenloai, $maloai);
                $thongbao = "cap nhat thanh cong";
            }
            $listloaihang = loadall_danhmuc();
            include 'danhmuc/list.php';
            break;
            /*------------------Phan controller cho hang hoa-----------------*/
        case 'addhh':
            // kiem tra xem nguoi dung co click vao nut add hay khong
            if (isset($_POST['themoihh']) && ($_POST['themoihh'])) {
                $iddm = $_POST['Ma_loai'];
                $ten_hh = $_POST['tenhh'];
                $don_gia = $_POST['dongia'];
                $giam_gia = $_POST['giamgia'];
                $hinh = $_FILES['hinhanh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinhanh"]["name"]);
                if (move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file)) {
                    // echo "The file " . htmlspecialchars(basename($_FILES["hinhanh"]["name"])) . " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                $ngay_nhap = $_POST['ngaynhap'];
                $mo_ta = $_POST['mota'];
                $dac_biet = $_POST['option'];
                $so_luot_xem = $_POST['view'];
                $Ma_loai = $_POST['loaihang'];
                //    var_dump($tenloaihang); 
                insert_sanpham($ten_hh, $don_gia, $giam_gia, $hinh, $ngay_nhap, $mo_ta, $dac_biet, $so_luot_xem, $Ma_loai);
                $thongbao = "them thanh cong";
            }
            $listloaihang = loadall_danhmuc();
            // var_dump($listloaihang);
            include 'sanpham/add.php';
            break;
        case 'listhh':
            $listhanghoa = loadall_sanpham();
            include 'sanpham/list.php';
            break;
        case 'addsp':
            if (isset($_POST['tenhh']) && ($_POST['tenhh'])) {
                $tenhh = $_POST['tenhh'];
                addsp_sanpham($tenhh);
                $thongbao = "them thanh cong";
            }
            include 'sanpham/add.php';
            break;
        case 'xoadm':
            if (isset($_GET['ma_hh']) && ($_GET['ma_hh'] > 0)) {
                delete_sanpham($_GET['ma_hh']);
            }
            $listloaihang = loadall_sanpham();
            include 'sanpham/list.php';
            break;
        case 'suadm':
            if (isset($_GET['ma_hh']) && ($_GET['ma_hh'] > 0)) {
                $update = loadone_sanpham($_GET['ma_hh']);
            }
            include 'sanpham/update.php';
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tenloai = $_POST['tenloai'];
                $maloai = $_POST['Ma_loai'];
                updatedm_sanpham($tenloai, $maloai);
                $thongbao = "cap nhat thanh cong";
            }
            $listloaihang = loadall_sanpham();
            include 'sanpham/list.php';
            break;
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}


// include "home.php";
include "footer.php";
