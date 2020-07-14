<?php
require_once 'web/class/Server.php';
require_once 'web/class/CutString.php';
require_once 'web/class/Schema.php';

class Home extends Controller
{
    // Khai báo model
    public $SchoolModel;
    public $ReviewModel;

    public function __construct()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        
        // Model
        $this->ReviewModel = $this->model("ReviewModel");
        $this->SchoolModel = $this->model("SchoolModel");
    }

    function Index($a = NULL)
    {
        if ($a == NULL) {
            $trangHienTai = 1;
            $schoolMoiTrang = 12;
            if (isset($_GET["page"])) {
                $trangHienTai = $_GET["page"];
            }
            $soSchoolBoQua = ($trangHienTai - 1) * $schoolMoiTrang;
            
            // Tất cả công ty
            $tatCaSchool = $this->SchoolModel->TatCaSchools();
            $soSchool = mysqli_num_rows($tatCaSchool);
            $soTrang = ceil($soSchool / $schoolMoiTrang);
            
            $schoolTrangHienTai = $this->SchoolModel->LaySchoolPhanTrang($soSchoolBoQua, $schoolMoiTrang);
            
            // Title
            $title = "Review lương bổng, đãi ngộ, tuyển dụng, sếp của các công ty - CongTyTop";
            
            // Description
            $description = "Trang Review đầy đủ nhất về lương bổng, đãi ngộ, tuyển dụng, sếp của các công ty IT và liên quan IT - CongTyTop";
            
            $keyword = "review công ty, review cong ty, công ty review, cong ty review, review công việc, review cong viec, review mức lương, review muc luong, review sếp, review sep";
           
            
            // View
            $this->view("main-template", [
                "Page" => "main-home",
                "SchoolTrangHienTai" => $schoolTrangHienTai,
                "15ReviewMoiNhat" => $this->ReviewModel->Lay15ReviewMoiNhat(),
                "Title" => $title,
                "Description" => $description,
                "Keyword" => $keyword
            ]);
        }
    }
}
?>