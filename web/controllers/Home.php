<?php
 require_once 'web/class/Server.php';
 require_once 'web/class/CutString.php';
 require_once 'web/class/Schema.php';
class Home extends Controller
{
    
    public $CongTyModel;
    
    public $ReviewModel;
    
    public $NewsModel;
    
    
    
    public function __construct()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $this->CongTyModel = $this->model("CongTyModel");
        $this->ReviewModel = $this->model("ReviewModel");
        $this->NewsModel = $this->model("NewsModel");
    }

    function Index($a = NULL)
    {
        // View
        $this->view("main-template", [
            "Page" => "main-home"
        ]);
    }
}
?>