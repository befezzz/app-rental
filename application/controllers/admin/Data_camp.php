<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Data_camp extends CI_Controller
{
    public function index()
    {
        $data['camp'] = $this->rental_model->get_data('camp')->result();
        $data['type'] = $this->rental_model->get_data('type')->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/Data_camp', $data);
        $this->load->view('templates_admin/footer');
    }
    public function tambah_barang()
    {
        $data['type'] = $this->rental_model->get_data('type')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_tambah_barang', $data);
        $this->load->view('templates_admin/footer');
    }
    public function tambah_barang_aksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->tambah_barang();
        } else {
            $kode_type                      = $this->input->post('kode_type');
            $merk                           = $this->input->post('merk');
            $warna                          = $this->input->post('warna');
            $keterangan                     = $this->input->post('keterangan');
            $status                         = $this->input->post('status');
            $harga                         = $this->input->post('harga');
            $denda                         = $this->input->post('denda');
            $gambar                         = $_FILES['gambar']['name'];
            if ($gambar = '') {
            } else {
                $config['upload_path']     =  './assets/upload';
                $config['allowed_types']     = 'jpg|jpeg|png|tiff';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('gambar')) {
                    echo "Gambar Mobil Gagal di Upload!";
                } else {
                    $gambar = $this->upload->data('file_name');
                }
            }

            $data = array(
                'kode_type'             => $kode_type,
                'merk'                  => $merk,
                'warna'                 => $warna,
                'keterangan'            => $keterangan,
                'status'                => $status,
                'harga'                => $harga,
                'denda'                => $denda,
                'gambar'                => $gambar
            );
            $this->rental_model->insert_data($data, 'camp');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data berhasil di tambahkan!
                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
            redirect('admin/data_camp');
        }
    }

    public function update_barang($id)
    {
        $where = array('id_barang' => $id);
        $data['camp'] = $this->db->query("SELECT * FROM camp mb, type tp WHERE mb.kode_type = tp.kode_type AND mb.id_barang='$id'")->result();
        $data['type'] = $this->rental_model->get_data('type')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_update_barang', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update_barang_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update_barang('$id');
        } else {
            $id                             = $this->input->post('id_barang');
            $kode_type                      = $this->input->post('kode_type');
            $merk                           = $this->input->post('merk');
            $warna                          = $this->input->post('warna');
            $keterangan                     = $this->input->post('keterangan');
            $status                         = $this->input->post('status');
            $harga                         = $this->input->post('harga');
            $denda                         = $this->input->post('denda');
            $gambar                         = $_FILES['gambar']['name'];
            if ($gambar) {
                $config['upload_path']     =  './assets/upload/rental';
                $config['allowed_types']     = 'jpg|jpeg|png|tiff';

                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $gambar = $this->upload->data('file_name');
                    $this->db->set('gambar', $gambar);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $data = array(
                'kode_type'             => $kode_type,
                'merk'                  => $merk,
                'warna'                 => $warna,
                'keterangan'            => $keterangan,
                'status'                => $status,
                'status'                => $status,
                'harga'                => $harga,
                'denda'                => $denda,
            );

            $where = array(
                'id_barang' => $id
            );
            $this->rental_model->update_data('camp', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                         Data berhasil diupdate!
                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
            redirect('admin/data_camp');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('kode_type', 'kode type', 'required');
        $this->form_validation->set_rules('merk', 'merk', 'required');
        $this->form_validation->set_rules('warna', 'warna', 'required');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'required');
        $this->form_validation->set_rules('status', 'status', 'required');
        $this->form_validation->set_rules('harga', 'harga', 'required');
        $this->form_validation->set_rules('denda', 'denda', 'required');
    }

    public function detail_barang($id)
    {
        $data['detail'] = $this->rental_model->ambil_id_barang($id);
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/detail_barang', $data);
        $this->load->view('templates_admin/footer');
    }

    public function delete_barang($id)
    {
        $where = array('id_barang' => $id);
        $this->rental_model->delete_data($where, 'camp');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
             Data berhasil dihapus!
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
        redirect('admin/data_camp');
    }
}
