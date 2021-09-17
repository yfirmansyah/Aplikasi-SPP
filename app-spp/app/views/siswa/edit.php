<div class="row" align="center">
  
  <h1>Edit Siswa</h1>

  <form action="<?php echo base64_encode('siswa/update'); ?>" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="nisn" value="<?= $data['kelas']['nisn']; ?>">
  NISN <br>
    <input type="number" value="<?= $data['siswa']['nisn']; ?>" required disabled><br>
  NIS <br>
    <input type="number" name="nis" value="<?= $data['siswa']['nis']; ?>" required><br>
    Nama Siswa <br>
    <input type="text" name="nama" value="<?= $data['siswa']['nama']; ?>" required><br>
    Kelas <br>
    <select class="form-control" name="id_kelas">
        <option value="">Pilih</option>
            <?php foreach ($data['kelas'] as $row) :?>
        <option value="<?= $row['id_kelas']; ?>" <?php if($data['siswa']['id_kelas'] == $row['id_kelas']) { echo "selected"; } ?>><?= $row['nama_kelas']; ?></option>
        <?php endforeach; ?>
    </select><br>
    Alamat <br>
    <input type="text" name="alamat" value="<?= $data['siswa']['alamat']; ?>" required><br>
    No Telp <br>
    <input type="number" name="no_telp" value="<?= $data['siswa']['no_telp']; ?>" required><br>
    Tahun SPP <br>
    <select class="form-control" name="id_spp">
        <option value="">Pilih</option>
            <?php foreach ($data['spp'] as $row) :?>
        <option value="<?= $row['id_spp']; ?>" <?php if($data['siswa']['id_spp'] == $row['id_spp']) { echo "selected"; } ?>><?= $row['tahun'].' - '.$row['nominal']; ?></option>
        <?php endforeach; ?>
    </select><br>
    <br>

    <input type="submit" value="simpan" class="btn btn-success mt-2">
    <a href="<?php echo base64_encode('siswa'); ?>" class="btn btn-primary mt-2">Kembali</a>
  </form>

</div>