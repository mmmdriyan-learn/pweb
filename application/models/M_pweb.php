<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Pweb extends CI_Model {
    function read(){
        $this->db->order_by('nama_barang','asc');
        return $this->db->get('barang')->result_array();
    }

    function create(){
        $kd_brg = $this->input->post('kd_barang');
        $nm_brg = $this->input->post('nama_barang');
        $stk = $this->input->post('stok');
        $hrg = $this->input->post('harga');
        $data = [
            'kd_barang' => $kd_brg,
            'nama_barang' => $nm_brg,
            'stok' => $stk,
            'harga' => $hrg
        ];

        $this->db->insert('barang', $data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('pesan', 'Ditambah');
            redirect('pweb','refresh');
        }
    }

    function get_row($id){
        return $this->db->get_where('barang', ['kd_barang' => $id])->row_array();
    }

    function update(){
        $kd_brg = $this->input->post('kd_barang');
        $nm_brg = $this->input->post('nama_barang');
        $stk = $this->input->post('stok');
        $hrg = $this->input->post('harga');
        $data = [
            'kd_barang' => $kd_brg,
            'nama_barang' => $nm_brg,
            'stok' => $stk,
            'harga' => $hrg
        ];

        $this->db->where('kd_barang', $this->input->post('kd_barang'));
        $this->db->update('barang', $data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('pesan', 'Diubah');
            redirect('pweb','refresh');
        }
    }
    
    function delete($id) {
        $this->db->where('kd_barang',$id);
        $this->db->delete('barang');
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('pesan', 'Dihapus');
            redirect('pweb','refresh');
        }
    }
}