<?php

class Siswa extends Controller {

    public function index(){
        $data['title'] = 'Data Siswa';
        $data['siswa'] = $this->model('Siswa_model')->getAllsiswa();
        $this->view('siswa/index', $data);
    }

    public function tambah(){
        $data['title'] = 'Tambah Siswa';  
        $data['kelas'] = $this->model('Kelas_model')->getAllkelas();	
        $data['spp'] = $this->model('Spp_model')->getAllspp();	
        $this->view('siswa/tambah', $data);
    }

    public function simpan(){  
        $nisn       = $_POST['nisn'];
        $nis        = $_POST['nis'];
        $nama       = $_POST['nama'];
        $id_kelas   = $_POST['id_kelas'];
        $alamat     = $_POST['alamat'];
        $no_telp    = $_POST['no_telp'];
        $id_spp     = $_POST['id_spp'];
        $data['siswa'] = $this->model('Siswa_model')->tambahSiswa($nisn,$nis,$nama,$id_kelas,$alamat,$no_telp,$id_spp);
        $data['siswa'] = $this->model('Siswa_model')->getAllsiswa();
        $this->view('siswa/index', $data);
    }

    public function edit($id){
        $data['title'] = 'Detail Siswa';
        $data['siswa'] = $this->model('Siswa_model')->getAllSiswaById($id);
        $data['kelas'] = $this->model('Kelas_model')->getAllkelas();	
        $data['spp'] = $this->model('Spp_model')->getAllspp();	
        $this->view('siswa/edit', $data);
    } 

    public function update() {  
        $nisn       = $_POST['nisn'];
        $nis        = $_POST['nis'];
        $nama       = $_POST['nama'];
        $id_kelas   = $_POST['id_kelas'];
        $alamat     = $_POST['alamat'];
        $no_telp    = $_POST['no_telp'];
        $id_spp     = $_POST['id_spp'];
        $data['siswa'] = $this->model('Siswa_model')->updateSiswa($nisn,$nis,$nama,$id_kelas,$alamat,$no_telp,$id_spp);
        $data['siswa'] = $this->model('Siswa_model')->getAllsiswa();
        $this->view('siswa/index', $data);
    }

    public function hapus($id){
        $data['siswa'] = $this->model('Siswa_model')->deleteSiswa($id);
        $data['siswa'] = $this->model('Siswa_model')->getAllsiswa();
        $this->view('siswa/index', $data);
    }
}
