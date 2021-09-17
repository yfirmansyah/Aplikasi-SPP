<?php

class Petugas_model {
  
    private $table = 'petugas';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllpetugas() {
        $this->db->query('SELECT * FROM petugas');
        return $this->db->resultSet();
    }

    public function getAllPetugasById($id) {
        $this->db->query('SELECT * FROM petugas WHERE id_petugas=:id_petugas');
        $this->db->bind('id_petugas',$id);
        return $this->db->single();
    }

    public function tambahPetugas($id_petugas, $username, $password, $nama_petugas, $level) {
        $this->db->query('INSERT INTO petugas (id_petugas, username, password, nama_petugas, level) VALUES(:id_petugas, :username, :password, :nama_petugas,)');
        $this->db->bind('id_petugas',$id_petugas);
        $this->db->bind('username',$username);
        $this->db->bind('password',$password);
        $this->db->bind('nama_petugas',$nama_petugas);
        $this->db->bind('level',$level);
        $this->db->execute();
    }

    public function updatePetugas($id_petugas, $username, $password, $nama_petugas, $level) {
        $this->db->query('UPDATE petugas SET username=:username, password=:password, nama_petugas=:nama_petugas, level=:level WHERE id_petugas=:id_petugas');
        $this->db->bind('id_petugas',$id_petugas);
        $this->db->bind('username',$username);
        $this->db->bind('password',$password);
        $this->db->bind('nama_petugas',$nama_petugas);
        $this->db->bind('level',$level);
        $this->db->execute();
    }

    public function deletePetugas($id) {
        $this->db->query('DELETE FROM petugas WHERE id_petugas=:id_petugas');
        $this->db->bind('id_petugas',$id);
        $this->db->execute();
    }

    }
