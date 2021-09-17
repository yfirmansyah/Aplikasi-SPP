<?php

class Petugas extends Controller {

    public function index(){
        $data['title'] = 'Data Kelas';
        $data['petugas'] = $this->model('Petugas_model')->getAllpetugas();
        $this->view('petugas/index', $data);
    }

    public function tambah(){
        $data['title'] = 'Tambah Petugas'; 	 
        $this->view('petugas/tambah', $data);
    }

    public function simpan(){  
        $id_petugas      = $_POST['id_petugas'];
        $username        = $_POST['username'];
        $password        = $_POST['password'];
        $nama_petugas    = $_POST['nama_petugas'];
        $level           = $_POST['level'];
        $data['petugas'] = $this->model('Petugas_model')->tambahPetugas($id_petugas,$username,$password,$nama_petugas,$level);
        $data['petugas'] = $this->model('Petugas_model')->getAllpetugas();
        $this->view('petugas/index', $data);
    }
    
    public function edit($id){
        $data['title'] = 'Detail Petugas';
        $data['petugas'] = $this->model('Petugas_model')->getAllPetugasById($id);
        $this->view('petugas/edit', $data);
    }

    public function update(){  
        $id_petugas      = $_POST['id_petugas'];
        $username        = $_POST['username'];
        $password        = $_POST['password'];
        $nama_petugas    = $_POST['nama_petugas'];
        $level           = $_POST['level'];
        $data['petugas'] = $this->model('Petugas_model')->updatePetugas($id_petugas,$username,$password,$nama_petugas,$level);
        $data['petugas'] = $this->model('Petugas_model')->getAllpetugas();
        $this->view('petugas/index', $data);
    }

    public function hapus($id){
        $data['petugas'] = $this->model('Petugas_model')->deletePetugas($id);
        $data['petugas'] = $this->model('Petugas_model')->getAllpetugas();
        $this->view('petugas/index', $data);
    }
}
