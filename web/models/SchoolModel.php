<?php
class SchoolModel extends DB{
    
        // Lấy danh sách trường
        public function TatCaSchools(){
            $qr = "SELECT * FROM school";
            return mysqli_query($this->con, $qr);
        }
        
        // Lấy trường bởi id
        public function LaySchoolBangId($iD){
            $qr = "SELECT * FROM school WHERE id = ".mysqli_real_escape_string($this->con, $iD);
            //return $qr;
            return mysqli_query($this->con, $qr);
        }
        
        // Lấy trường bằng slug
        public function LaySchoolBangSlug($slug){
            $qr = "SELECT * FROM school WHERE slugschool = ".mysqli_real_escape_string($this->con, $slug);
            return mysqli_query($this->con, $qr);
        }
        
        /*PHÂN TRANG*/
        // Lấy trường để phân trang
        public function LaySchoolPhanTrang($soSchoolBoQua, $soSchoolMoiTrang){
            $boQua = (int)$soSchoolBoQua;
            $moiTrang = (int)$soSchoolMoiTrang;
            $qr = "SELECT * FROM school ORDER BY thoigian DESC LIMIT $boQua, $moiTrang" ;
            return mysqli_query($this->con, $qr);
        }
        /*HẾT PHÂN TRANG*/
        
        /*TÌM KIẾM*/
        /*Lấy trường theo ký tự trong tên*/
        public function LaySchoolTheoKyTu($ten){
            $qr = "SELECT * FROM school WHERE tenschool LIKE '%".mysqli_real_escape_string($this->con, $ten)."%' LIMIT 10";
            return mysqli_query($this->con, $qr);
        }
        /*Lấy trường theo categories*/
        public function LaySchoolTheoCategory($category){
            $qr = "SELECT * FROM school WHERE slugcategory LIKE '%".mysqli_real_escape_string($this->con, $category)."%'";
            return mysqli_query($this->con, $qr);
        }
        /*Lấy toàn bộ trường theo ký tự trong tên*/
        public function LayTatCaSchoolTheoKyTu($ten){
            $qr = "SELECT * FROM school WHERE tenschool LIKE '%".mysqli_real_escape_string($this->con, $ten)."%'";
            return mysqli_query($this->con, $qr);
        }
        /*Tìm trường theo từ khóa tên trường và phân trang*/
        public function PhanTrangSchoolTheoTuKhoa($soSchoolBoQua, $soSchoolMoiTrang, $ten){
            $qr = "";
            if($ten != ""){
                $qr = "SELECT * FROM school WHERE slugschool LIKE '%$ten%' LIMIT $soSchoolBoQua,$soSchoolMoiTrang";
            }else{
                $qr = "SELECT * FROM school LIMIT $soSchoolBoQua,$soSchoolMoiTrang";
            }
           return mysqli_query($this->con, $qr);
        }
        /*Tìm trường theo category và phân trang*/
        public function PhanTrangSchoolTheoCategory($soSchoolBoQua, $soSchoolMoiTrang, $category){
            $qr = "";
            $boQua = (int)$soSchoolBoQua;
            $moiTrang = (int)$soSchoolMoiTrang;
            if($category!= ""){
                $qr = "SELECT * FROM school WHERE slugcategory LIKE '%".mysqli_real_escape_string($this->con, $category)."%' LIMIT $boQua,$moiTrang";
            }else{
                $qr = "SELECT * FROM school LIMIT $boQua,$moiTrang";
            }
            return mysqli_query($this->con, $qr);
        }
        /*HẾT TÌM KIẾM*/
        // Update rate school
        public function UpdateRateSchool($iD, $score, $thoigian){
            $qr = "UPDATE school SET luotdanhgia = luotdanhgia + 1, tongsao = tongsao + $score, rate = tongsao/luotdanhgia, thoigian = '$thoigian' WHERE id = $iD";
            $result = false;
            if(mysqli_query($this->con, $qr)){
                $result = true;
            }
            return $result;
        }
        // Update rate school giảm
        public function UpdateRateSchoolXoaReview($iD, $score){
            $qr = "UPDATE school SET luotdanhgia = luotdanhgia - 1, tongsao = tongsao - $score, rate = tongsao/luotdanhgia WHERE id = $iD";
            $result = false;
            if(mysqli_query($this->con, $qr)){
                $result = true;
            }
            return $result;
        }
        
        /*THÊM TRƯỜNG*/
        public function ThemSchool($tentruong, $slugtruong, $category, $slugcategory, $fileName, $website, $diachi, $thoigian) {
            $qr= "INSERT INTO school (tenschool, slugschool, category, slugcategory, logo, website, diachi, thoigian) VALUES(?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($this->con);
            $result = 0;
            if(!mysqli_stmt_prepare($stmt, $qr)){
                $result = "SQL statement failed";
            }else{
                mysqli_stmt_bind_param($stmt, "ssssssss", $tentruong, $slugtruong, $category, $slugcategory, $fileName, $website, $diachi, $thoigian);
                $result = mysqli_stmt_execute($stmt);
            }
            return $result;
        }
        
        public function GetLastId(){
            return $this->con->insert_id;
        }
        
        /*XÓA TRƯỜNG*/
        public function XoaTruong($idSchool){
            $qr = "DELETE FROM school WHERE id = '$idSchool'";
            $result = false;
            if(mysqli_query($this->con, $qr)){
                $result = true;
            }
            return $result;
        }
        
        /*CẬP NHẬT SLUG SCHOOL*/
        public function CapNhatSlug($id, $slug){
            $qr = "UPDATE school SET slugschool = '$slug' WHERE id = $id";
            $result = false;
            if(mysqli_query($this->con, $qr)){
                $result = true;
            }
            return $result;
        }
}
?>