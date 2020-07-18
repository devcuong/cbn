<?php
require_once 'web/class/Server.php';
require_once 'web/class/CutString.php';
class TimKiem extends Controller
{
    //Model
    public $SchoolModel;
    public function __construct()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $this->SchoolModel = $this->model("SchoolModel");
    }
    // Tìm kiếm công ty
    public function schools()
    {
        if (isset($_POST["tenschool"])) {
            $tuKhoa = trim($_POST["tenschool"]);
            $allKetQua = $this->SchoolModel->LaySchoolTheoKyTu($tuKhoa);
            $parameters = array();
            while ($row = $allKetQua->fetch_assoc()) {
                $parameters[] = $row;
            }
            echo json_encode($parameters);
        }
    }
    // Kết quả tìm kiếm school
    public function TrangKetQua($a, $b, $c = null, $d = null)
    {
        $trangHienTai = 1;
        $schoolMoiTrang = 16;
        $tuKhoa = "";
        if ($c != null) {
            $trangHienTai = $c;
        }
        if (isset($_POST["school-search"])) {
            $tuKhoa = trim($_POST["school-search"]);
        }
        if ($d != null) {
            $tuKhoa = $d;
        }
        $soSchoolBoQua = ($trangHienTai - 1) * $schoolMoiTrang;
        // Tất cả school
        $schoolTimDuoc = $this->SchoolModel->LaySchoolTheoKyTu($tuKhoa);
        $soSchool = mysqli_num_rows($schoolTimDuoc);
        $soTrang = ceil($soSchool / $schoolMoiTrang);
        $schoolTrangHienTai = "";
        $schoolTrangHienTai = $this->SchoolModel->PhanTrangSchoolTheoTuKhoa($soSchoolBoQua, $schoolMoiTrang, $tuKhoa);

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
            "Page" => "trang-ket-qua",
            "SoTrang" => $soTrang,
            "TrangHienTai" => $trangHienTai,
            "SchoolTrangHienTai" => $schoolTrangHienTai,
            "Nav" => $navigate,
            "Keyword" => $tuKhoa,
            "Title" => $title,
            "Description" => $description
        ]);
    }
}
?>