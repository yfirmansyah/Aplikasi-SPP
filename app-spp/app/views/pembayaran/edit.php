<div class="row" align="center">
  
  <h1>Edit Pembayaran</h1>

  <form action="<?php echo base64_encode('pembayaran/update'); ?>" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="id_petugas" value="<?= $data['pembayaran']['id_petugas']; ?>">
  ID Petugas <br>
    <input type="number" value="<?= $data['pembayaran']['id_petugas']; ?>" required disabled><br>
  Username <br>
    <input type="text" name="username" value="<?= $data['pembayaran']['username']; ?>" required><br>
    Password <br>
    <input type="text" name="password" value="<?= $data['pembayaran']['password']; ?>" required><br>
    Nama Petugas <br>
    <input type="text" name="nama_petugas" value="<?= $data['pembayaran']['nama_petugas']; ?>" required><br>
    Level <br>
    <select class="form-control" name="level">
        <option value="">Pilih</option>
        <option value="1">Administrator</option>
        <option value="2">Petugas</option>
    </select>
    <br><br>

    <input type="submit" value="simpan" class="btn btn-success mt-2">
    <a href="<?php echo base64_encode('pembayaran'); ?>" class="btn btn-primary mt-2">Kembali</a>
  </form>

</div>