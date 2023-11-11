<?php
session_start();
include "./model/pdo.php";
include "./model/danhmuc.php";
include "./model/sanpham.php";
include "./model/taikhoan.php";
include "./view/header.php";
include "./img/global.php";

$newsp = loatAll_sanpham_home();
$dsdm = loatAll_danhmuc();
$spyt=loatAll_sanpham_top10();

if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch ($act) {
        case "dangky":
            if(isset($_POST['dangky']) && $_POST['dangky']) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $tel = $_POST['tel'];

                dangky($user,$pass,$email,$tel);
                $thongbao = "Đăng ký thành công, hãy đăng nhập tài khoản";
            }
            include "./view/taikhoan/dangky.php";
            break;
        case "dangnhap":
            if(isset($_POST['dangnhap']) && $_POST['dangnhap']) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $check=check($user,$pass);
                if(is_array($check)){
                    $_SESSION['user'] = $check;
                    include "./view/home.php";
                }else{
                    $thongbao = "Tài khoản không tồn tại";
                    include "./view/home.php";
                }
            }
            include "./view/taikhoan/dangnhap.php";
            break;
        case "update":
            if(isset($_POST['capnhat']) && $_POST['capnhat']) {
                $id = $_POST['id'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $role = $_POST['role'];
                update_taikhoan($id,$user,$pass,$email,$address,$tel,$role);
                $_SESSION['user']=check($user,$pass);
                include "./view/taikhoan/update_tk.php";
            }
            include "./view/taikhoan/update_tk.php";
            break;
        case "xoa":
            unset($_SESSION['user']);
            header("location: index.php");
            break;
        
        default:
            include "./view/home.php";
            break;
    }
}else{
    include "./view/home.php";
}
include "./view/footer.php"; 
?>