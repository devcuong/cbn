<?php
class SchoolModel extends DB{
    
        // Lấy danh sách trường
        public function TatCaSchools(){
            $qr = "SELECT * FROM school";
            return mysqli_query($this->con, $qr);
        }
        
        // Lấy trường bởi id
        public function LaySchoolBangId($iD){
            $qr = "SELECT * FROM school WHERE id = '$iD'";
            return mysqli_query($this->con, $qr);
        }
        
        // Lấy trường bằng slug
        public function LaySchoolBangSlug($slug){
            $qr = "SELECT * FROM school WHERE slugschool = '$slug'";
            return mysqli_query($this->con, $qr);
        }
        
        /*PHÂN TRANG*/
        // Lấy trường để phân trang
        public function LaySchoolPhanTrang($soSchoolBoQua, $soSchoolMoiTrang){
            $qr = "SELECT * FROM school ORDER BY thoigian DESC LIMIT $soSchoolBoQua, $soSchoolMoiTrang" ;
            return mysqli_query($this->con, $qr);
        }
        /*HẾT PHÂN TRANG*/
        
        /*TÌM KIẾM*/
        /*Lấy trường theo ký tự trong tên*/
        public function LayTruongTheoKyTu($ten){
            $qr = "SELECT * FROM school WHERE tenschool LIKE '%$ten%'";
            return mysqli_query($this->con, $qr);
        }
        /*Tìm công ty theo từ khóa và phân trang*/
        public function PhanTrangSchoolTheoTuKhoa($soSchoolBoQua, $soSchoolMoiTrang, $ten){
            $qr = "";
            if($ten != ""){
                $qr = "SELECT * FROM school WHERE school LIKE '%$ten%' LIMIT $soSchoolBoQua,$soSchoolMoiTrang";
            }else{
                $qr = "SELECT * FROM congty LIMIT $soSchoolBoQua,$soSchoolMoiTrang";
            }
            return mysqli_query($this->con, $qr);
            //return $qr;
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
        // Update rate công ty giảm
        public function UpdateRateSchoolXoaReview($iD, $score){
            $qr = "UPDATE school SET luotdanhgia = luotdanhgia - 1, tongsao = tongsao - $score, rate = tongsao/luotdanhgia WHERE id = $iD";
            $result = false;
            if(mysqli_query($this->con, $qr)){
                $result = true;
            }
            return $result;
        }
        
        /*THÊM CÔNG TY*/
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
        
        /*XÓA CÔNG TY*/
        public function XoaCongTy($idCongTy){
            $qr = "DELETE FROM congty WHERE id = '$idCongTy'";
            $result = false;
            if(mysqli_query($this->con, $qr)){
                $result = true;
            }
            return $result;
        }
        
        /*CẬP NHẬT SLUG CÔNG TY*/
        public function CapNhatSlug($id, $slug){
            $qr = "UPDATE congty SET slugcongty = '$slug' WHERE id = $id";
            $result = false;
            if(mysqli_query($this->con, $qr)){
                $result = true;
            }
            return $result;
        }
}
?>