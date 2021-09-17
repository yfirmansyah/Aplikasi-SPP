<?php

class Siswa_model {
  
    private $table = 'siswa';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getAllsiswa(){
        $this->db->query('SELECT *
        FROM siswa
        INNER JOIN kelas on kelas.id_kelas = siswa.id_kelas
        INNER JOIN spp on spp.id_spp = siswa.id_spp
        ORDER BY nisn ASC;');
        return $this->db->resultSet();
    }

    public function getAllsiswaById($id){
        $this->db->query('SELECT * FROM siswa WHERE nisn=:nisn');
        $this->db->bind('nisn',$id);
        return $this->db->single();
    }

    public function tambahSiswa($nisn, $nis, $nama, $id_kelas, $alamat, $no_telp, $id_spp) {
        $this->db->query('INSERT INTO siswa (nisn, nis, nama, id_kelas, alamat, no_telp, id_spp) VALUES(:nisn, :nis, :nama, :id_kelas, :alamat, :no_telp, :id_spp)');
        $this->db->bind('nisn',$nisn);
        $this->db->bind('nis',$nis);
        $this->db->bind('nama',$nama);
        $this->db->bind('id_kelas',$id_kelas);
        $this->db->bind('alamat',$alamat);
        $this->db->bind('no_telp',$no_telp);
        $this->db->bind('id_spp',$id_spp);
        $this->db->execute();
    }

    public function updateSiswa($nisn, $nis, $nama, $id_kelas, $alamat, $no_telp, $id_spp) {
        $this->db->query('UPDATE ' . $this->table . ' SET nis=:nis, nama=:nama, id_kelas=:id_kelas, alamat=:alamat, no_telp=:no_telp, id_spp=:id_spp WHERE nisn=:nisn');
        $this->db->bind('nisn',$nisn);
        $this->db->bind('nis',$nis);
        $this->db->bind('nama',$nama);
        $this->db->bind('id_kelas',$id_kelas);
        $this->db->bind('alamat',$alamat);
        $this->db->bind('no_telp',$no_telp);
        $this->db->bind('id_spp',$id_spp);
        $this->db->execute();
    }

    public function deleteSiswa($id)
    {
        $this->db->query('DELETE FROM siswa WHERE nisn=:nisn');
        $this->db->bind('nisn',$id);
        $this->db->execute();
    }

}
