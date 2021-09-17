<?php

class Pembayaran_model {
  
    private $table = 'pembayaran';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllpembayaran() {
        $this->db->query('SELECT *
        FROM pembayaran
        INNER JOIN petugas on petugas.id_petugas = pembayaran.id_petugas
        INNER JOIN spp on spp.id_spp = pembayaran.id_spp
        ORDER BY id_pembayaran ASC');
        return $this->db->resultSet();
    }

    public function getAllPembayaranId($id) {
        $this->db->query('SELECT * FROM pembayaran WHERE id_pembayaran=:id_pembayaran');
        $this->db->bind('id_pembayaran',$id);
        return $this->db->single();
    }

    public function tambahPembayaran($id_pembayaran, $id_petugas, $nisn, $tgl_bayar, $bulan_dibayar, $tahun_dibayar, $id_spp, $jumlah_bayar) {
        $this->db->query('INSERT INTO pembayaran (id_pembayaran, id_petugas, nisn, tgl_bayar, bulan_dibayar, tahun_dibayar, id_spp, jumlah_bayar) VALUES(:id_pembayaran, :id_petugas, :nisn, :tgl_bayar, :bulan_dibayar, :tahun_dibayar, :id_spp, :jumlah_bayar)');
        $this->db->bind('id_pembayaran',$id_pembayaran);
        $this->db->bind('id_petugas',$id_petugas);
        $this->db->bind('nisn',$nisn);
        $this->db->bind('tgl_bayar',$tgl_bayar);
        $this->db->bind('bulan_dibayar',$bulan_dibayar);
        $this->db->bind('tahun_dibayar',$tahun_dibayar);
        $this->db->bind('id_spp',$id_spp);
        $this->db->bind('jumlah_bayar',$jumlah_bayar);
        $this->db->execute();
    }

    public function updatePembayaran($id_pembayaran, $id_petugas, $nisn, $tgl_bayar, $bulan_dibayar, $tahun_dibayar, $id_spp, $jumlah_bayar) {
        $this->db->query('UPDATE pembayaran SET nama=:nama, jurusan=:jurusan WHERE nim=:nim');
        $this->db->bind('id_pembayaran',$id_pembayaran);
        $this->db->bind('id_petugas',$id_petugas);
        $this->db->bind('nisn',$nisn);
        $this->db->bind('tgl_bayar',$tgl_bayar);
        $this->db->bind('bulan_dibayar',$bulan_dibayar);
        $this->db->bind('tahun_dibayar',$tahun_dibayar);
        $this->db->bind('id_spp',$id_spp);
        $this->db->bind('jumlah_bayar',$jumlah_bayar);
        $this->db->execute();
    }

    public function deletePembayaran($id) {
        $this->db->query('DELETE FROM pembayaran WHERE id_pembayaran=:id_pembayaran');
        $this->db->bind('id_pembayaran',$id);
        $this->db->execute();
    }

    }
