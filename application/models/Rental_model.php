<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Rental_model extends CI_Model
{

    public function get_data($table)
    {
        return $this->db->get($table);
    }

    public function get_where($where,$table){
        return $this->db->get_where($table,$where);
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update_data($table, $data, $where)
    {
        $this->db->where($where);
        $this->db->update($table, $data, $where);
    }

    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function ambil_id_barang($id)
    {
        $hasil = $this->db->where('id_barang', $id)->get('camp');
        if ($hasil->num_rows() > 0) {
            return $hasil->result();
        } else {
            return false;
        }
    }

    public function cek_login()
    {
        $username = set_value('username');
        $password = set_value('password');
        $result = $this->db
            ->where('username', $username)
            ->where('password', md5($password))
            ->limit(1)
            ->get('customer');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return FALSE;
        }
    }

    public function update_password($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function downloadpembayaran($id)
    {
        $query = $this->db->get_where('transaksi', array('id_rental' => $id));
        return $query->row_array();
    }
}
