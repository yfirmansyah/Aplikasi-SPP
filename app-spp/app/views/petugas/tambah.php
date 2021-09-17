<div class="row" align="center">
  
  <h1>Tambah Petugas</h1>

  <form action="<?php echo base64_encode('petugas/simpan'); ?>" method="POST" enctype="multipart/form-data">
    ID Petugas <br>
    <input type="number" name="id_petugas" required><br>
    Username <br>
    <input type="text" name="username" required><br>
    Password <br>
    <input type="text" name="password" required><br>
    Nama Petugas <br>
    <input type="text" name="nama_petugas" required><br>
    Level <br>
    <select class="form-control" name="level">
        <option value="">Pilih</option>
        <option value="1">Administrator</option>
        <option value="2">Petugas</option>
    </select>
    <br><br>

    <input type="submit" value="simpan" class="btn btn-success mt-2">
    <a href="<?php echo base64_encode('petugas'); ?>" class="btn btn-primary mt-2">Kembali</a>
  </form>

</div>
