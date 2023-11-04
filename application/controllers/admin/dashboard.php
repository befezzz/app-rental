<?php 

class Dashboard extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            cek_logged();
        }
    public function index(){
        $this->load->view('templates_admin/header.php');
        $this->load->view('templates_admin/sidebar.php');
        $this->load->view('admin/dashboard.php');
        $this->load->view('templates_admin/footer.php');
    }
}