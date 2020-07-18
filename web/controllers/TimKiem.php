<?php
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
            $allKetQua = $this->SchoolModel->LayTruongTheoKyTu($tuKhoa);
            $parameters = array();
            while ($row = $allKetQua->fetch_assoc()) {
                $parameters[] = $row;
            }
            echo json_encode($parameters);
        }
    }
}
?>