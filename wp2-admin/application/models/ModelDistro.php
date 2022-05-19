<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelDistro extends CI_Model{

    public function get_data(){
        return $this->db->get('tb_distro')->result_array();
    }

    public function tambah_distro($data,$table){
        return $this->db->insert($table,$data);
    }

    public function hapus_distro($where,$table){
        $this->db->where($where);
        return $this->db->delete($table);
    }

    public function ubah_distro($where,$table){
        return $this->db->get_where($table,$where)->result_array();
    }

    public function update_distro($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function get_jumlah_distro(){
        $query = $this->db->get('tb_distro');
        if($query->num_rows()>0)
        {
          return $query->num_rows();
        }
        else
        {
          return 0;
        }    }
}

?>