<?php 

class Data_barang extends CI_Controller{
    public function index(){
        $data['camp'] = $this->rental_model->get_data('camp')->result();
        $this->load->view('templates_customer/header.php');
        $this->load->view('customer/data_barang',$data);
        $this->load->view('templates_customer/footer.php');
    }

    public function detail_barang($id){
        $data['detail'] = $this->rental_model->ambil_id_barang($id);
        $this->load->view('templates_customer/header.php');
        $this->load->view('customer/detail_barang.php',$data);
        $this->load->view('templates_customer/footer.php');
    }
    
}