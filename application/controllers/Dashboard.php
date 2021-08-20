<?php 
class Dashboard extends CI_Controller {
    public function index()
    {
        $data = array(
            "header" => "Dashboard",
            "page" => "Dashboard"
        );
        $this->load->view("layout/main",$data);
    }
}