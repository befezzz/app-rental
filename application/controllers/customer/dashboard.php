<?php

class Dashboard extends CI_Controller
{
    // public function __construct()
    // {
    //     parent::__construct();
    //     cek_logged();
    // }
    public function index()
    {
        $data['camp'] = $this->rental_model->get_data('camp')->result();
        $this->load->view('templates_customer/header.php');
        $this->load->view('customer/dashboard.php', $data);
        $this->load->view('templates_customer/footer.php');
    }
}
