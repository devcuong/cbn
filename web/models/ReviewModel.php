<?php
class ReviewModel extends DB{
    // Lấy review bằng id school
    public function LayReviewBangIdSchool($iDSchool){
        $qr = "SELECT review.id AS review_id, review.reviewer AS review_reviewer, review.about AS review_about, review.sao AS review_sao, review.noidung AS review_noidung, review.school AS review_school, review.thoigian AS review_thoigian, reply.id AS reply_id, reply.review AS reply_review, reply.data AS reply_data FROM review LEFT JOIN reply on reply.review = review.id WHERE review.school = $iDSchool ORDER BY review.id DESC";
        return mysqli_query($this->con, $qr);
        //return $qr;
    }
    
    // Lấy review bằng id review
    public function LayReviewBangIdReview($iDReview){
        $qr = "SELECT review.id AS review_id, review.reviewer AS review_reviewer, review.about AS review_about, review.sao AS review_sao, review.noidung AS review_noidung, review.thoigian AS review_thoigian, school.id AS school_id, school.tenschool AS school_tenschool, school.slugschool AS school_slugschool, congty.logo AS school_logo, school.luotdanhgia AS school_luotdanhgia, school.rate AS school_rate, school.diachi AS school_diachi FROM review LEFT JOIN school ON review.school = school.id WHERE review.id = $iDReview";
        return mysqli_query($this->con, $qr);
    }
    
    // Lấy 15 review mới nhất
    public function Lay15ReviewMoiNhat(){
        $qr = "SELECT school.id, review.reviewer, school.tenschool, school.slugschool, review.thoigian, review.sao, review.noidung FROM review LEFT JOIN school ON review.school = school.id ORDER BY review.thoigian DESC LIMIT 15";
        return mysqli_query($this->con, $qr);
    }
    
    // Thêm review
    public function ThemReview($reviewer,$position, $rate, $noidung, $congty, $thoigian){
        $qr= "INSERT INTO review (reviewer, position, rate, noidung, congty, thoigian) VALUES(?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($this->con);
        $result = 0;
        if(!mysqli_stmt_prepare($stmt, $qr)){
            echo "SQL statement failed";
        }else{
            mysqli_stmt_bind_param($stmt, "ssssss", $reviewer, $position, $rate, $noidung, $congty, $thoigian);
            $result = mysqli_stmt_execute($stmt);
        }
        return $result;
        //return $qr;
    }
    
    // Lấy tất cả review
    public function LayTatCaReview(){
        $qr = "SELECT * FROM review";
        return mysqli_query($this->con, $qr);
    }
    
    // Lấy review để phân trang
    public function LayReviewPhanTrang($iDCongTy ,$soReviewBoQua, $soReviewMoiTrang){
        $qr = "SELECT review.id AS review_id, review.reviewer AS review_reviewer, review.position AS review_position, review.rate AS review_rate, review.noidung AS review_noidung, review.congty AS review_congty, review.thoigian AS review_thoigian, reply.id AS reply_id, reply.idreview AS reply_idreview, reply.data AS reply_data FROM review LEFT JOIN reply on reply.idreview = review.id WHERE review.congty = $iDCongTy ORDER BY review.id DESC LIMIT ".$soReviewBoQua.','.$soReviewMoiTrang;
        return mysqli_query($this->con, $qr);
       // return $qr;
    }
    
    // Lấy review để phân trang quản trị
    public function LayReviewPhanTrangQuanTri($soReviewBoQua, $soReviewMoiTrang){
        $qr = "SELECT * from review ORDER BY id DESC LIMIT ".$soReviewBoQua.','.$soReviewMoiTrang;
        return mysqli_query($this->con, $qr);
        // return $qr;
    }
    
    // Xóa review theo ID công ty
    public function XoaReview($iDCongTy){
        $qr = "DELETE FROM review WHERE congty = '$iDCongTy'";
        $result = false;
        if(mysqli_query($this->con, $qr)){
            $result = true;
        }
        return $result;
    }
    
    // Xóa review theo id review
    public function XoaReviewBoiIdReview($idReview){
        $qr = "DELETE FROM review WHERE id = $idReview";
        $result = false;
        if(mysqli_query($this->con, $qr)){
            $result = true;
        }
        return $result;
    }
}
?>