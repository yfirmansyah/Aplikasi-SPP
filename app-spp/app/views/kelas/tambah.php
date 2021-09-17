<div class="row" align="center">
  
  <h1>Tambah Kelas</h1>

  <form action="<?php echo base64_encode('kelas/simpan'); ?>" method="POST" enctype="multipart/form-data">
    ID Kelas <br>
    <input type="number" name="id_kelas" required><br>
    Nama Kelas <br>
    <input type="text" name="nama_kelas" required><br>
    Kompetensi Keahlian <br>
    <input type="text" name="kompetensi_keahlian" required><br>
    <br>

    <input type="submit" value="simpan" class="btn btn-success mt-2">
    <a href="<?php echo base64_encode('kelas'); ?>" class="btn btn-primary mt-2">Kembali</a>
  </form>

</div>
