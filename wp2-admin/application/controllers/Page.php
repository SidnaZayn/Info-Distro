<?php
class Page extends CI_Controller{

    public function index(){
        $this->load->model('ModelDistro');        
        $data['total_distro'] = $this->ModelDistro->get_jumlah_distro();

        $this->load->view('_partials/header');
        $this->load->view('_partials/sidebar');
        $this->load->view('dashboard',$data);
        $this->load->view('_partials/footer');
    }

    public function list_distro(){
        $this->load->model('ModelDistro');        
        $data['list'] = $this->ModelDistro->get_data();

        $this->load->view('_partials/header');
        $this->load->view('_partials/sidebar');
        $this->load->view('Distro/list-distro',$data);
        $this->load->view('Distro/modal-daftar');
        $this->load->view('_partials/footer');
    }

    public function hapus_distro($id){
        $where = array('id' => $id);
        $this->ModelDistro->hapus_distro($where, 'tb_distro');
        redirect('Page/list_distro');
    }
    
    public function tambah_distro(){
        $nama        = $this->input->post('nama_distro');
        $alamat      = $this->input->post('alamat');
        $no_telp     = $this->input->post('no_telp');
        $longitude   = $this->input->post('longitude');
        $latitude    = $this->input->post('latitude');
        $foto         = $_FILES['foto'];
        if ($foto =''){
            
        }else{
            $config['upload_path'] = './upload';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('foto')){
                echo "Upload Gambar Gagal Coba Lagi !";die();
            }else{
                $foto=$this->upload->data('file_name');
            }             
        }
        $data = array(
            'nama_distro'   => $nama,
            'alamat'        => $alamat,
            'no_telp'       => $no_telp,
            'longitude'     => $longitude,
            'latitude'      => $latitude,
            'foto'          => $foto
        );
        $this->ModelDistro->tambah_distro($data, 'tb_distro');
        redirect('Page/list_distro');
    }
    public function ubah_distro($id){
        $where = array('id' => $id);
        $data['list'] = $this->ModelDistro->ubah_distro($where,'tb_distro');

        $this->load->view('_partials/header');
        $this->load->view('_partials/sidebar');
        $this->load->view('Distro/ubah_distro',$data);
        $this->load->view('_partials/footer');

    }
    public function update_distro(){
        $id        = $this->input->post('id');
        $nama        = $this->input->post('nama');
        $alamat      = $this->input->post('alamat');
        $no_telp     = $this->input->post('no_telp');
        $longitude   = $this->input->post('longitude');
        $latitude    = $this->input->post('latitude');
        $foto         = $_FILES['foto'];
        if ($foto =''){
            
        }else{
            $config['upload_path'] = './upload';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('foto')){
                $data = array(
                    'nama_distro'   => $nama,
                    'alamat'        => $alamat,
                    'no_telp'       => $no_telp,
                    'longitude'     => $longitude,
                    'latitude'      => $latitude,
                );
                $where = array(
                    'id' => $id
                );
                $this->ModelDistro->update_distro($where,$data,'tb_distro');
                redirect('Page/list_distro');
            }else{
                $foto=$this->upload->data('file_name');
            }             
        }
        $data = array(
            'nama_distro'   => $nama,
            'alamat'        => $alamat,
            'no_telp'       => $no_telp,
            'longitude'     => $longitude,
            'latitude'      => $latitude,
            'foto'          => $foto
        );
        $where = array(
            'id' => $id
        );
        $this->ModelDistro->update_distro($where,$data,'tb_distro');
        redirect('Page/list_distro');
    }

}
