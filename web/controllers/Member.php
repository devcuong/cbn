<?php
class Member extends Controller
{
    public function __construct()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
    }
    // QUẢN TRỊ VIÊN ĐĂNG NHẬP
    public function DangNhap()
    {
        // View
        $this->view("main-template", [
            "Page" => "dang-nhap"
        ]);
    }
}
?>
