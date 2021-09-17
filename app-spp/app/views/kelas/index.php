<div class="row" align="center">
  
<h1>Daftar Kelas</h1>

<table class="table" border="1 px">
    <thead>
      <tr>
        <th> ID Kelas </th>
        <th> Nama Kelas </th>
        <th> Kompetensi Keahlian </th>
        <th> Aksi </th>
      </tr>
    </thead>
    <tbody>
        <?php foreach ($data['kelas'] as $kelas) :?>
        <tr>
          <td><?= $kelas['id_kelas'];?></td>
          <td><?= $kelas['nama_kelas'];?></td>
          <td><?= $kelas['kompetensi_keahlian'];?></td>
          <td>
            <a href="<?php echo base64_encode('kelas/edit/'.$kelas['id_kelas']); ?>" class="badge badge-primary badge-pill">Edit</a>
            <a href="<?php echo base64_encode('kelas/hapus/'.$kelas['id_kelas']); ?>" onclick="return confirm('Are you sure?');" class="badge badge-primary badge-pill">Hapus</a>
          </td>
        </tr>
       <?php endforeach; ?>
    </tbody>
</table>
<br>
<a href="<?php echo base64_encode('kelas/tambah'); ?>" class="btn btn-success mt-2">Tambah Kelas</a>
<a href="<?php echo base64_encode('home'); ?>" class="btn btn-success mt-2">Home</a>
</div>
