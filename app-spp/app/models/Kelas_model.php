<?php

class Kelas_model {
  
    private $table = 'kelas';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllkelas() {
        $this->db->query('SELECT * FROM kelas');
        return $this->db->resultSet();
    }

    public function getAllkelasById($id) {
        $this->db->query('SELECT * FROM kelas WHERE id_kelas=:id_kelas');
        $this->db->bind('id_kelas',$id);
        return $this->db->single();
    }

    public function tambahKelas($id_kelas, $nama_kelas, $kompetensi_keahlian) {
        $this->db->query('INSERT INTO kelas (id_kelas, nama_kelas, kompetensi_keahlian) VALUES(:id_kelas, :nama_kelas, :kompetensi_keahlian)');
        $this->db->bind('id_kelas',$id_kelas);
        $this->db->bind('nama_kelas',$nama_kelas);
        $this->db->bind('kompetensi_keahlian',$kompetensi_keahlian);
        $this->db->execute();
    }

    public function updateKelas($id_kelas, $nama_kelas, $kompetensi_keahlian) {
        $this->db->query('UPDATE kelas SET nama_kelas=:nama_kelas, kompetensi_keahlian=:kompetensi_keahlian WHERE id_kelas=:id_kelas');
        $this->db->bind('id_kelas',$id_kelas);
        $this->db->bind('nama_kelas',$nama_kelas);
        $this->db->bind('kompetensi_keahlian',$kompetensi_keahlian);
        $this->db->execute();
    }

    public function deleteKelas($id) {
        $this->db->query('DELETE FROM kelas WHERE id_kelas=:id_kelas');
        $this->db->bind('id_kelas',$id);
        $this->db->execute();
    }

    }
