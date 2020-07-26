<?php
class MemberModel extends DB{
    // Lấy member
    public function LayUserBangUsernameVaPassword($username, $password){
        $qr = "SELECT * FROM member WHERE username = ".mysqli_real_escape_string($this->con, $username)." AND password = ".mysqli_real_escape_string($this->con, $password);
        //return mysqli_query($this->con, $qr);
        return $qr;
    }
}
?>
