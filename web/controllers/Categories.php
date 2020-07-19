<?php
require_once 'web/class/Server.php';
require_once 'web/class/CutString.php';
require_once 'web/class/Schema.php';

class Categories extends Controller
{
    // Khai báo model
    public $SchoolModel;

    public function __construct()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        // Model
        $this->SchoolModel = $this->model("SchoolModel");
    }

    function Index($a, $b=NULL, $c=NULL)
    {
        $trangHienTai = 1;
        $schoolMoiTrang = 16;
        $category = "";
        if ($c != null) {
            $trangHienTai = $c;
        }
        if ($b != null) {
            $category = $b;
        }
        $soSchoolBoQua = ($trangHienTai - 1) * $schoolMoiTrang;
        // Tất cả school
        $schoolTimDuoc = $this->SchoolModel->LaySchoolTheoCategory($category);
        $soSchool = mysqli_num_rows($schoolTimDuoc);
        $soTrang = ceil($soSchool / $schoolMoiTrang);
        $schoolTrangHienTai = "";
        $schoolTrangHienTai = $this->SchoolModel->PhanTrangSchoolTheoCategory($soSchoolBoQua, $schoolMoiTrang, $category);

        // Phân trang
        $cutString = new CutString();
        $server = new Server();
        $navigate = $cutString->get_nav_render($trangHienTai, $soTrang, $server->servername."/$a/".$b."/");
        
        // Title
        $title = "Công ty TOP - Kết quả tìm kiếm";
    
        // Description
        $description = "Công ty TOP - Kết quả tìm kiếm";
    
        // View
        $this->view("main-template", [
            "Page" => "categories",
            "SoTrang" => $soTrang,
            "TrangHienTai" => $trangHienTai,
            "SchoolTrangHienTai" => $schoolTrangHienTai,
            "Nav" => $navigate,
            "Title" => $title,
            "Description" => $description
        ]);
    }
}