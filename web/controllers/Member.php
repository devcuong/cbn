<?php
require 'web/class/Server.php';
class Member extends Controller
{
    // Khai báo model
    public $MemberModel;
    public function __construct()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $this->MemberModel = $this->model("MemberModel");
    }
    // QUẢN TRỊ VIÊN ĐĂNG NHẬP
    public function DangNhap()
    {
        if (isset($_POST["btn-dang-nhap"])) {
            $username = "";
            $password = "";
            if(isset($_POST["username"])){
                $username = trim($_POST["username"]);
            }
            if(isset($_POST["password"])){
                $password = md5(trim($_POST["password"]));
            }
            $kq = $this->MemberModel->LayUserBangUsernameVaPassword($username);
            $temp = "";
            while ($row = mysqli_fetch_array($kq)) {
                $temp = $row["password"];
            }
            $server = new Server();
            if ($temp == $pass) {
                //echo "ok";
                $_SESSION["username"] = $username;
                header("Location: " . $server->get_servername(). "/member/dang-nhap-thanh-cong", 301);
                exit();
            } else {
                header("Location: " . $server->get_servername(). "/member/dang-nhap/", 301);
                exit();
            }
        } else {
            // View
            $this->view("main-template", [
                "Page" => "dang-nhap"
            ]);
        }
    }
    
    // QUẢN TRỊ VIÊN ĐĂNG NHẬP
    public function DangNhapThanhCong()
    {
        // View
        $this->view("main-template", [
            "Page" => "dang-nhap-thanh-cong"
        ]);
    }
}
?>
