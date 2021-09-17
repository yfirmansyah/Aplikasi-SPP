<div class="row" align="center">
  
  <h1>Edit Kelas</h1>

  <form action="<?php echo base64_encode('kelas/update'); ?>" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id_kelas" value="<?= $data['kelas']['id_kelas']; ?>">
    ID Kelas <br>
    <input type="number" value="<?= $data['kelas']['id_kelas']; ?>" required disabled><br>
    Nama Kelas <br>
    <input type="text" name="nama_kelas" value="<?= $data['kelas']['nama_kelas']; ?>" required ><br>
    Kompetensi Keahlian <br>
    <input type="text" name="kompetensi_keahlian" value="<?= $data['kelas']['kompetensi_keahlian']; ?>" required><br>
    <br>

    <input type="submit" value="simpan" class="btn btn-success mt-2">
    <a href="<?php echo base64_encode('kelas'); ?>" class="btn btn-primary mt-2">Kembali</a>
  </form>

</div>
