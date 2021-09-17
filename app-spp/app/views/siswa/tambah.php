<div class="row" align="center">
  
  <h1>Tambah Siswa</h1>

  <form action="<?php echo base64_encode('siswa/simpan'); ?>" method="POST" enctype="multipart/form-data">
    NISN <br>
    <input type="number" name="nisn" required><br>
    NIS <br>
    <input type="number" name="nis" required><br>
    Nama <br>
    <input type="text" name="nama" required><br>
    Kelas <br>
    <select class="form-control" name="id_kelas">
        <option value="">Pilih</option>
          <?php foreach ($data['kelas'] as $row) :?>
        <option value="<?= $row['id_kelas']; ?>"><?= $row['nama_kelas'].' - '.$row['kompetensi_keahlian']; ?></option>
      <?php endforeach; ?>
    </select><br>
    Alamat <br>
    <input type="text" name="alamat" required><br>
    No Tlp <br>
    <input type="number" name="no_telp" required><br>
    SPP <br>
    <select class="form-control" name="id_spp">
        <option value="">Pilih</option>
          <?php foreach ($data['spp'] as $row) :?>
        <option value="<?= $row['id_spp']; ?>"><?= $row['tahun'].' - '.$row['nominal']; ?></option>
      <?php endforeach; ?>
    </select><br>
    <br>

    <input type="submit" value="simpan" class="btn btn-success mt-2">
    <a href="<?php echo base64_encode('siswa'); ?>" class="btn btn-primary mt-2">Kembali</a>
  </form>

</div>
