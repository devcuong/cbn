<?php
 require_once 'web/class/Server.php';
 require_once 'web/class/CutString.php';
 require_once 'web/class/Schema.php';
class Schools extends Controller
{
    
    public function __construct()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
    }

    function Index($a = NULL)
    {
        // View
        $this->view("main-template", [
            "Page" => "schools"
        ]);
    }
}
?>