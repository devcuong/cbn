<?php
require 'web/class/Replyer.php';
require 'web/class/CutString.php';
require_once 'web/class/Schema.php';

class Jobs extends Controller
{
    public function __construct()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
    }
    function Index()
    {
        // View
        $this->view("main-template", [
            "Page" => "jobs"]);
    }
}