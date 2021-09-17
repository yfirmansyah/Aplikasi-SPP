<?php

class Kelas extends Controller {

    public function index(){
        $data['title'] = 'Data Kelas';
        $data['kelas'] = $this->model('Kelas_model')->getAllkelas();
        $this->view('kelas/index', $data);
    }

    public function tambah(){
        $data['title'] = 'Tambah Siswa';  
        $this->view('kelas/tambah', $data);
    }

    public function simpan(){  
        $id_kelas                  = $_POST['id_kelas'];
        $nama_kelas                = $_POST['nama_kelas'];
        $kompetensi_keahlian       = $_POST['kompetensi_keahlian'];
        $data['kelas'] = $this->model('Kelas_model')->tambahKelas($id_kelas, $nama_kelas, $kompetensi_keahlian);
        $data['kelas'] = $this->model('Kelas_model')->getAllkelas();
        $this->view('kelas/index', $data);
    }
    
    public function edit($id){
        $data['title'] = 'Detail Kelas';
        $data['kelas'] = $this->model('Kelas_model')->getAllkelasById($id);
        $this->view('kelas/edit', $data);
    }

    public function update(){  
        $id_kelas                  = $_POST['id_kelas'];
        $nama_kelas                = $_POST['nama_kelas'];
        $kompetensi_keahlian       = $_POST['kompetensi_keahlian'];
        $data['kelas'] = $this->model('Kelas_model')->updateKelas($id_kelas, $nama_kelas, $kompetensi_keahlian);
        $data['kelas'] = $this->model('Kelas_model')->getAllkelas();
        $this->view('kelas/index', $data);
    }

    public function hapus($id){
        $data['kelas'] = $this->model('Kelas_model')->deleteKelas($id);
        $data['kelas'] = $this->model('Kelas_model')->getAllkelas();
        $this->view('kelas/index', $data);
    }
}
