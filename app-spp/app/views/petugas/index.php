<div class="row" align="center">
  
<h1>Daftar Petugas</h1>

<table class="table" border="1 px">
    <thead>
      <tr>
        <th> ID Petugas </th>
        <th> Username </th>
        <th> Password </th>
        <th> Nama Petugas </th>
        <th> Level </th>
        <th> Aksi </th>
      </tr>
    </thead>
    <tbody>
        <?php foreach ($data['petugas'] as $petugas) :?>
        <tr>
          <td><?= $petugas['id_petugas'];?></td>
          <td><?= $petugas['username'];?></td>
          <td><?= $petugas['password'];?></td>
          <td><?= $petugas['nama_petugas'];?></td>
          <td><?= $petugas['level'];?></td>
          <td>
            <a href="<?php echo base64_encode('petugas/edit/'.$petugas['id_petugas']); ?>" class="badge badge-primary badge-pill">Edit</a>
            <a href="<?php echo base64_encode('petugas/hapus/'.$petugas['id_petugas']); ?>" onclick="return confirm('Are you sure?');" class="badge badge-primary badge-pill">Hapus</a>
          </td>
        </tr>
       <?php endforeach; ?>
    </tbody>
</table>
<br>
<a href="<?php echo base64_encode('petugas/tambah'); ?>" class="btn btn-success mt-2">Tambah Petugas</a>
<a href="<?php echo base64_encode('home'); ?>" class="btn btn-success mt-2">Home</a>

</div>
