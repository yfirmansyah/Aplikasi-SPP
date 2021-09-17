<div class="row" align="center">
  
  <h1>Tambah SPP</h1>

  <form action="<?php echo base64_encode('spp/simpan'); ?>" method="POST" enctype="multipart/form-data">
    ID Spp <br>
    <input type="number" name="id_spp" required><br>
    Tahun <br>
    <input type="number" name="tahun" required><br>
    Nominal <br>
    <input type="number" name="nominal" required><br>
    <br>

    <input type="submit" value="simpan" class="btn btn-success mt-2">
    <a href="<?php echo base64_encode('spp'); ?>" class="btn btn-primary mt-2">Kembali</a>
  </form>

</div>
