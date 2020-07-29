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

    function Index()
    {
            $trangHienTai = 1;
            $schoolMoiTrang = 15;
            if (isset($_GET["page"])) {
                $trangHienTai = $_GET["page"];
            }
            $soSchoolBoQua = ($trangHienTai - 1) * $schoolMoiTrang;
            
            // Tất cả công ty
            $tatCaSchool = $this->SchoolModel->TatCaSchools();
            $soSchool = mysqli_num_rows($tatCaSchool);
            $soTrang = ceil($soSchool / $schoolMoiTrang);
            
            $schoolTrangHienTai = $this->SchoolModel->LaySchoolPhanTrang($soSchoolBoQua, $schoolMoiTrang);
            
            // Phân trang
            $cutString = new CutString();
            $server = new Server();
            $navigate = $cutString->get_nav_render($trangHienTai, $soTrang, "?page=");
            
            // Schema
            $schema = new Schema();
            $StringSchema = $schema->generate_schema("","main-home");
            
            // Title
            $title = "Trang review đầy đủ nhất về việc dạy, học, cơ sở vật chất, giáo viên, giảng viên tại các Trường học, trung tâm dạy học, trung tâm du học - ReviewTruong.Com";
            
            // Description
            $description = "Trang review đầy đủ nhất về việc dạy, học, cơ sở vật chất, giáo viên, giảng viên tại các Trường học, trung tâm dạy học, trung tâm du học - ReviewTruong.Com";
            
            // Key
            $keyword = "review trường học, review truong hoc, trường học review, truong hoc review, review trung tâm, review trung tam, review du học, review du hoc";
           
            
            // View
            $this->view("main-template", [
                "Page" => "main-home",
                "SchoolTrangHienTai" => $schoolTrangHienTai,
                "Nav" => $navigate,
                "15ReviewMoiNhat" => $this->ReviewModel->Lay15ReviewMoiNhat(),
                "Title" => $title,
                "Description" => $description,
                "Keyword" => $keyword,
                "StringSchema" => $StringSchema
            ]);
    }
}
?>