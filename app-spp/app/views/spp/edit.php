<div class="row" align="center">
  
  <h1>Edit SPP</h1>

  <form action="<?php echo base64_encode('spp/update'); ?>" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id_spp" value="<?= $data['spp']['id_spp']; ?>">
    ID SPP <br>
    <input type="number" value="<?= $data['spp']['id_spp']; ?>" required disabled><br>
    Tahun <br>
    <input type="number" name="tahun" value="<?= $data['spp']['tahun']; ?>" required ><br>
    Nominal <br>
    <input type="number" name="nominal" value="<?= $data['spp']['nominal']; ?>" required><br>
    <br>

    <input type="submit" value="simpan" class="btn btn-success mt-2">
    <a href="<?php echo base64_encode('spp'); ?>" class="btn btn-primary mt-2">Kembali</a>
  </form>

</div>
