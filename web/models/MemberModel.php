<?php
class MemberModel extends DB{
    // Lấy member
    public function LayUserBangUsernameVaPassword($username){
        $qr = "SELECT * FROM member WHERE username = ".mysqli_real_escape_string($this->con, $username);
        return mysqli_query($this->con, $qr);
    }
}
?>
