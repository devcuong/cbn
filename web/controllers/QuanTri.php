<?php
require 'web/class/Server.php';
require 'web/class/CutString.php';

class QuanTri extends Controller
{

    // Khai báo model
    private $UserModel;

    private $SchoolModel;

    private $ReviewModel;

    private $ReplyModel;

    public function __construct()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $this->UserModel = $this->model("UserModel");
        $this->SchoolModel = $this->model("SchoolModel");
        $this->ReviewModel = $this->model("ReviewModel");
        $this->ReplyModel = $this->model("ReplyModel");
    }

    public function Index()
    {
        // View
        $this->view("login-template", [
            "Page" => "quan-tri"
        ]);
    }

    // QUẢN TRỊ VIÊN ĐĂNG NHẬP
    public function DangNhap()
    {
        $email = "";
        $pass = "";
        if (isset($_POST["user-email"])) {
            $email = trim($_POST["user-email"]);
        }
        if (isset($_POST["user-password"])) {
            $pass = md5(trim($_POST["user-password"]));
        }
        echo $pass;
        $kq = $this->UserModel->LayUserBangEmailVaPassword($email);
        $temp = "";
        while ($row = mysqli_fetch_array($kq)) {
            $temp = $row["password"];
        }
        $server = new Server();
        
        if ($temp == $pass) {
            // echo "ok";
            $_SESSION["email"] = $email;
            header("Location: " . $server->get_servername() . "/quan-tri-chinh/tat-ca-schools", 301);
            exit();
        } else {
            header("Location: " . $server->get_servername() . "/quan-tri-chinh/", 301);
            exit();
        }
    }

    // QUẢN TRỊ VIÊN ĐĂNG XUẤT
    public function DangXuat()
    {
        unset($_SESSION['email']);
        session_destroy();
        if (! isset($_SESSION['email'])) {
            // View
            $this->view("admin-template", [
                "Page" => "quan-tri"
            ]);
        }
    }

    // QUẢN TRỊ CHUNG
    /*
     * public function TatCaSchools()
     * {
     * // View
     * $this->view("admin-template", [
     * "Page" => "tat-ca-schools"
     * ]);
     * }
     */
    
    // THÊM TRƯỜNG
    public function ThemSchool()
    {
        if (isset($_SESSION["email"])) {
            if (isset($_POST["btn-submit"])) {
                $tentruong = "";
                $slugtruong = "";
                $slugcategory = "";
                $category = "";
                $website = "";
                $diachi = "";
                $fileName = "";
                if (isset($_POST["ten-truong"])) {
                    $tentruong = trim($_POST["ten-truong"]);
                    $slugtruong = $_POST["slug-truong"];
                }
                if (isset($_POST["slug-category"])) {
                    $str = $_POST["slug-category"];
                    $slugcategory = ltrim(trim($str), $str[0]);
                    $str = $_POST['category'];
                    $category = ltrim(trim($str), $str[0]);
                }
                if (isset($_POST["website"])) {
                    $website = trim($_POST["website"]);
                }
                if (isset($_POST["dia-chi"])) {
                    $str = $_POST["dia-chi"];
                    $diachi = ltrim(trim($str), $str[0]);
                }
                if (isset($_FILES["logo-truong"])) {
                    
                    // Nếu file upload không bị lỗi,
                    if ($_FILES['logo-truong']['error'] > 0) {
                        echo 'File Upload Bị Lỗi';
                    } else {
                        $fileName = $_FILES['logo-truong']['name'];
                        $duongDanHinhAnh = 'web/public/asset/schools/logo/' . $fileName;
                        // Upload file
                        move_uploaded_file($_FILES['logo-truong']['tmp_name'], $duongDanHinhAnh);
                        
                        $createdDate = date("Y-m-d H:i:s");
                        // Kiểm tra trường có hay chưa
                        $daco = $this->SchoolModel->LaySchoolBangSlug($slugtruong);
                        if (mysqli_num_rows($daco) < 1) {
                            // Thêm công ty
                            $kq = $this->SchoolModel->ThemSchool($tentruong, $slugtruong, $category, $slugcategory, $fileName, $website, $diachi, $createdDate);
                            if ($kq) {
                                // View
                                $this->view("admin-template", [
                                    "Page" => "quan-tri-thanh-cong"
                                ]);
                            }
                        }
                    }
                }
            } else {
                // View
                $this->view("admin-template", [
                    "Page" => "them-school"
                ]);
            }
        } else {
            // View
            $this->view("admin-template", [
                "Page" => "quan-tri"
            ]);
        }
    }

    // TẤT CẢ CÔNG TY
    public function TatCaSchools($a, $b, $c = null)
    {
        if (isset($_SESSION["email"])) {
            $trangHienTai = 1;
            $schoolMoiTrang = 10;
            if ($c != null) {
                $trangHienTai = $c;
            }
            $soSchoolBoQua = ($trangHienTai - 1) * $schoolMoiTrang;
            // Tất cả công ty
            $tatCaSchool = $this->SchoolModel->TatCaSchools();
            $soSchools = mysqli_num_rows($tatCaSchool);
            $soTrang = ceil($soSchools / $schoolMoiTrang);
            $schoolTrangHienTai = "";
            $schoolTrangHienTai = $this->SchoolModel->LaySchoolPhanTrang($soSchoolBoQua, $schoolMoiTrang);
            // View
            $this->view("admin-template", [
                "Page" => "tat-ca-schools",
                "SoTrang" => $soTrang,
                "TrangHienTai" => $trangHienTai,
                "SchoolsTrangHienTai" => $schoolTrangHienTai
            ]);
        } else {
            $server = new Server();
            ob_start();
            header("Location: " . $server->get_servername() . "/quan-tri", 301);
            exit();
        }
    }

    // XÓA CÔNG TY
    public function XoaSchool($a, $b, $c)
    {
        if (isset($_SESSION["email"])) {
            $kt = false;
            $idCongTy = $c;
            $kq = $this->CongTyModel->XoaCongTy($idCongTy);
            if ($kq) {
                $kt = true;
            }
            $kq2 = $this->ReviewModel->XoaReview($idCongTy);
            if ($kq2) {
                $kt = true;
            }
            if ($kt) {
                // View
                $this->view("admin-template", [
                    "Page" => "quan-tri-thanh-cong"
                ]);
            } else {
                $server = new Server();
                ob_start();
                header("Location: " . $server->get_servername() . "/quan-tri", 301);
                exit();
            }
        }
    }

    /* cập nhật slug */
    function CapNhatSlug($a, $b, $c, $d)
    {
        $idCongTy = $c;
        $tenCongTy = $d;
        if (isset($_SESSION["email"])) {
            $slugCongTy = $this->ToSlug($tenCongTy);
            $kq = $this->CongTyModel->CapNhatSlug($idCongTy, $slugCongTy);
            if ($kq) {
                // View
                $this->view("admin-template", [
                    "Page" => "quan-tri-thanh-cong"
                ]);
            }
        }
    }

    /* tất cả review */
    function TatCaReviews($a, $b, $c = null)
    {
        if (isset($_SESSION["email"])) {
            $trangHienTai = 1;
            $reviewMoiTrang = 10;
            if ($c != null) {
                $trangHienTai = $c;
            }
            $soReviewBoQua = ($trangHienTai - 1) * $reviewMoiTrang;
            // Model
            $review = $this->model("ReviewModel");
            // Tất cả công ty
            $tatCaReview = $review->LayTatCaReview();
            $soReview = mysqli_num_rows($tatCaReview);
            $soTrang = ceil($soReview / $reviewMoiTrang);
            $reviewTrangHienTai = $review->LayReviewPhanTrangQuanTri($soReviewBoQua, $reviewMoiTrang);
            // View
            $this->view("admin-template", [
                "Page" => "tat-ca-reviews",
                "SoTrang" => $soTrang,
                "TrangHienTai" => $trangHienTai,
                "ReviewTrangHienTai" => $reviewTrangHienTai
            ]);
        } else {
            $server = new Server();
            ob_start();
            header("Location: " . $server->get_servername() . "/quan-tri", 301);
            exit();
        }
    }

    /* xóa review */
    function XoaReview($a, $b, $c = NULL, $d = NULL, $e = NULL)
    {
        if (isset($_SESSION["email"])) {
            $idReview = $c;
            
            // check review còn không
            $check = $this->ReviewModel->LayReviewBangIdReview($idReview);
            if (mysqli_num_rows($check)) {
                $kt = false;
                $sao = $d;
                $school = $e;
                $kq = $this->ReviewModel->XoaReviewBoiIdReview($idReview);
                if ($kq) {
                    $kt = true;
                }
                $kq2 = $this->ReplyModel->XoaReplyTheoIdReview($idReview);
                if ($kq2) {
                    $kt = true;
                }
                //
                $schoolUpdate = $this->SchoolModel->LaySchoolBangId($school);
                
                $getNow = $schoolUpdate->fetch_assoc();
                $luotDanhGia = $getNow["luotdanhgia"];
                
                $kq3 = $this->SchoolModel->UpdateRateSchoolXoaReview($school, $sao, $luotDanhGia);
                
                if ($kq3) {
                    $kt = true;
                }
                if ($kt) {
                    // View
                    $this->view("admin-template", [
                        "Page" => "quan-tri-thanh-cong"
                    ]);
                } else {
                    $server = new Server();
                    ob_start();
                    header("Location: " . $server->get_servername() . "/quan-tri", 301);
                    exit();
                }
            }
        } else {
            $server = new Server();
            ob_start();
            header("Location: " . $server->get_servername() . "/quan-tri", 301);
            exit();
        }
    }

    function ToSlug($str, $options = array())
    {
        // Make sure string is in UTF-8 and strip invalid UTF-8 characters
        $str = mb_convert_encoding((string) $str, 'UTF-8', mb_list_encodings());
        
        $defaults = array(
            'delimiter' => '-',
            'limit' => null,
            'lowercase' => true,
            'replacements' => array(),
            'transliterate' => true
        );
        
        // Merge options
        $options = array_merge($defaults, $options);
        
        // Lowercase
        if ($options['lowercase']) {
            $str = mb_strtolower($str, 'UTF-8');
        }
        
        $char_map = array(
            // Latin
            'á' => 'a',
            'à' => 'a',
            'ả' => 'a',
            'ã' => 'a',
            'ạ' => 'a',
            'ă' => 'a',
            'ắ' => 'a',
            'ằ' => 'a',
            'ẳ' => 'a',
            'ẵ' => 'a',
            'ặ' => 'a',
            'â' => 'a',
            'ấ' => 'a',
            'ầ' => 'a',
            'ẩ' => 'a',
            'ẫ' => 'a',
            'ậ' => 'a',
            'đ' => 'd',
            'é' => 'e',
            'è' => 'e',
            'ẻ' => 'e',
            'ẽ' => 'e',
            'ẹ' => 'e',
            'ê' => 'e',
            'ế' => 'e',
            'ề' => 'e',
            'ể' => 'e',
            'ễ' => 'e',
            'ệ' => 'e',
            'í' => 'i',
            'ì' => 'i',
            'ỉ' => 'i',
            'ĩ' => 'i',
            'ị' => 'i',
            'ó' => 'o',
            'ò' => 'o',
            'ỏ' => 'o',
            'õ' => 'o',
            'ọ' => 'o',
            'ô' => 'o',
            'ố' => 'o',
            'ồ' => 'o',
            'ổ' => 'o',
            'ỗ' => 'o',
            'ộ' => 'o',
            'ơ' => 'o',
            'ớ' => 'o',
            'ờ' => 'o',
            'ở' => 'o',
            'ỡ' => 'o',
            'ợ' => 'o',
            'ú' => 'u',
            'ù' => 'u',
            'ủ' => 'u',
            'ũ' => 'u',
            'ụ' => 'u',
            'ư' => 'u',
            'ứ' => 'u',
            'ừ' => 'u',
            'ử' => 'u',
            'ữ' => 'u',
            'ự' => 'u',
            'ý' => 'y',
            'ỳ' => 'y',
            'ỷ' => 'y',
            'ỹ' => 'y',
            'ỵ' => 'y'
        );
        
        // Make custom replacements
        $str = preg_replace(array_keys($options['replacements']), $options['replacements'], $str);
        
        // Transliterate characters to ASCII
        if ($options['transliterate']) {
            $str = str_replace(array_keys($char_map), $char_map, $str);
        }
        
        // Replace non-alphanumeric characters with our delimiter
        $str = preg_replace('/[^\p{L}\p{Nd}]+/u', $options['delimiter'], $str);
        
        // Remove duplicate delimiters
        $str = preg_replace('/(' . preg_quote($options['delimiter'], '/') . '){2,}/', '$1', $str);
        
        // Truncate slug to max. characters
        $str = mb_substr($str, 0, ($options['limit'] ? $options['limit'] : mb_strlen($str, 'UTF-8')), 'UTF-8');
        
        // Remove delimiter from ends
        $str = trim($str, $options['delimiter']);
        
        return $str;
    }
}
?>
