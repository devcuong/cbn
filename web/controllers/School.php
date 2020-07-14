<?php
class School extends Controller
{
    // Model
    public $SchoolModel;
    public $ReviewModel;
    public $ReplyModel;
    
    public function __construct()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $this->SchoolModel = $this->model("SchoolModel");
        $this->ReviewModel = $this->model("ReviewModel");
        $this->ReplyModel = $this->model("ReplyModel");
    }

    function Index($a, $b, $c=null, $d=null)
    {
        $trangReviewHienTai = 1;
        $soReviewMoiTrang = 15;
        if($c != null){
            $pageOrView = $urlSchool = explode("-", $c);
            if($c != "review"){
                $trangReviewHienTai = $c;
            }else{
                $rvNow = $this->ReviewModel->LayReviewBangIdReview($d);
                $rvLater = $this->ReviewModel->LayReviewBangIdReview($d);
                $getRVNow = $rvNow->fetch_assoc();
                $tenSchool = $getRVNow["school_tenschool"];
                $noiDungReview = $getRVNow["review_noidung"];
                
                $rp = $this->ReplyModel->LayReplyBangIdReview($d);
                
                $cutString = new CutString();
                
                // Title
                $title = "Review công ty "." - ".$cutString->get_first_num_of_words(trim($noiDungReview), 60);
                
                // Description
                $description = "Công ty "." - ".$noiDungReview;
                
                $keyword =  $title = "Review công ty";
                
                // View
                $this->view("main-template", [
                    "Page" => "review",
                    "Review" => $rvLater,
                    "Reply" => $rp,
                    "TenSchool" => $tenSchool,
                    "NoiDungReview" => $noiDungReview,
                    "Title" => $title,
                    "Description" => $description,
                    "Keyword" => $keyword
                ]);
            }
            
        }
        $soReviewBoQua = ($trangReviewHienTai-1)*$soReviewMoiTrang;
        $urlSchool = explode("-", $b);
        $idSchool = end($urlSchool);
        // Tất cả review
        $tatCaReview = $this->ReviewModel->LayReviewBangIdSchool($idSchool);
        $soReview = mysqli_num_rows($tatCaReview);
        $soTrang = ceil($soReview/$soReviewMoiTrang);
        // Lấy review tại trang
        $reviewTrangHienTai = $this->ReviewModel->LayReviewPhanTrang($idSchool, $soReviewBoQua, $soReviewMoiTrang);
        $reviewForSchema = $this->ReviewModel->LayReviewPhanTrang($idSchool, $soReviewBoQua, $soReviewMoiTrang);
        
        // School
        $schoolLater = $this->SchoolModel->LaySchoolBangId($idSchool);
        
        $tencongty = "";
        
        // Title
        $title = "Review công ty ".$tencongty;
        
        // Description
        $description = "Review về mức lương, qui trình phỏng vấn, môi trường, tuyển dụng, sếp và công việc tại ".$tencongty;
        
        // Keyword
        $keyword = "review công ty $tencongty, review cong ty $tencongty, công ty review $tencongty, cong ty review $tencongty, review công việc $tencongty, review cong viec $tencongty, review mức lương $tencongty, review muc luong $tencongty, review sếp $tencongty, review sep $tencongty";
        
        // View
        $this->view("main-template", [
            "Page" => "school",
            "School" => $schoolLater,
            "Review" => $reviewTrangHienTai,
            "SoTrang" => $soTrang,
            "TrangHienTai" => $trangReviewHienTai,
            "Title" => $title,
            "Description" => $description,
            "Keyword" => $keyword
        ]);
        // View
        /*$this->view("main-template", [
            "Page" => "school"
        ]);*/
    }
}
?>