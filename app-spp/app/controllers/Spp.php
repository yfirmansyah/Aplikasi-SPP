<?php

class Spp extends Controller {

    public function index(){
        $data['title'] = 'Data Kelas';
        $data['spp'] = $this->model('Spp_model')->getAllspp();
        $this->view('spp/index', $data);
    }

    public function tambah(){
        $data['title'] = 'Tambah Spp';  
        $this->view('spp/tambah', $data);
    }

    public function simpan(){  
        $id_spp     = $_POST['id_spp'];
        $tahun      = $_POST['tahun'];
        $nominal    = $_POST['nominal'];
        $data['spp'] = $this->model('Spp_model')->tambahSpp($id_spp, $tahun, $nominal);
        $data['spp'] = $this->model('Spp_model')->getAllspp();
        $this->view('spp/index', $data);
    }

    public function edit($id){
        $data['title'] = 'Detail SPP';
        $data['spp'] = $this->model('Spp_model')->getAllsppById($id);
        $this->view('spp/edit', $data);
    }

    public function update(){  
        $id_spp     = $_POST['id_spp'];
        $tahun      = $_POST['tahun'];
        $nominal    = $_POST['nominal'];
        $data['spp'] = $this->model('Spp_model')->updateSpp($id_spp, $tahun, $nominal);
        $data['spp'] = $this->model('Spp_model')->getAllspp();
        $this->view('spp/index', $data);
    }

    public function hapus($id){
        $data['spp'] = $this->model('Spp_model')->deleteSpp($id);
        $data['spp'] = $this->model('Spp_model')->getAllspp();
        $this->view('spp/index', $data);
    }
}
