<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelDistro extends CI_Model{

    public function get_data(){
        return $this->db->get('tb_distro')->result_array();
    }
}

?>