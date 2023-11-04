<?php
class Rental extends CI_Controller{
    public function tambah_rental($id){
        $data['detail'] = $this->rental_model->ambil_id_barang($id);
        $this->load->view('templates_customer/header.php');
        $this->load->view('customer/tambah_rental.php',$data);
        $this->load->view('templates_customer/footer.php');
    }

    public function tambah_rental_aksi(){
        $id_customer        = $this->session->userdata('id_customer');
        $id_barang          = $this->input->post('id_barang');
        $tanggal_rental     = $this->input->post('tanggal_rental');
        $tanggal_kembali    = $this->input->post('tanggal_kembali');
        $harga              = $this->input->post('harga');
        $denda              = $this->input->post('denda');

        $data = array(
            'id_customer'                           => $id_customer,
            'id_barang'                             => $id_barang,
            'tanggal_rental'                        => $tanggal_rental,
            'tanggal_kembali'                       => $tanggal_kembali,
            'harga'                                 => $harga,
            'denda'                                 => $denda,
            'tanggal_pengembalian'                  => '-',
            'status_pengembalian'                   => 'belum kembali',
            'status_rental'                         => 'belum selesai',
            'total_denda'                           => '0'
        );

        $this->rental_model->insert_data($data,'transaksi');

        $status = array(
            'status' => '0'
        );
        $id = array(
            'id_barang' => $id_barang
        );

        $this->rental_model->update_data('camp',$status,$id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Transaksi Berhasil, Silahkan Checkout!
                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
            redirect('customer/data_barang');

    }

}