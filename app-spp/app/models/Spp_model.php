<?php

class Spp_model {
  
    private $table = 'spp';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllspp() {
        $this->db->query('SELECT * FROM spp');
        return $this->db->resultSet();
    }

    public function getAllSppById($id) {
        $this->db->query('SELECT * FROM spp WHERE id_spp=:id_spp');
        $this->db->bind('id_spp',$id);
        return $this->db->single();
    }

    public function tambahSpp($id_spp, $tahun, $nominal) {
        $this->db->query('INSERT INTO spp (id_spp, tahun, nominal) VALUES(:id_spp, :tahun, :nominal)');
        $this->db->bind('id_spp',$id_spp);
        $this->db->bind('tahun',$tahun);
        $this->db->bind('nominal',$nominal);
        $this->db->execute();
    }

    public function updateSpp($id_spp, $tahun, $nominal) {
        $this->db->query('UPDATE spp SET tahun=:tahun, nominal=:nominal WHERE id_spp=:id_spp');
        $this->db->bind('id_spp',$id_spp);
        $this->db->bind('tahun',$tahun);
        $this->db->bind('nominal',$nominal);
        $this->db->execute();
    }

    public function deleteSpp($id) {
        $this->db->query('DELETE FROM spp WHERE id_spp=:id_spp');
        $this->db->bind('id_spp',$id);
        $this->db->execute();
    }

    }
