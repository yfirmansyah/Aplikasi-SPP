<?php 
error_reporting(error_reporting() & ~E_NOTICE)
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Beranda</title>
</head>
<body>
<table width="100%" height="100%" border="1">
    <tr height="5%">
        <td align="center">
            <a href="<?php echo base64_encode('kelas'); ?>">Kelas</a>
            <a href="<?php echo base64_encode('spp'); ?>">SPP</a>
            <a href="<?php echo base64_encode('siswa'); ?>">Siswa</a>
            <a href="<?php echo base64_encode('petugas'); ?>">Petugas</a>
            <a href="<?php echo base64_encode('pembayaran'); ?>">Pembayaran</a>
        </td>
    </tr>
    <tr height="95%">
        <td valign="top" align="center">
            <?php
                $id_menu = base64_decode($_GET["id"]);
                if($id_menu=='kelas')
                {
                    include('kelas.php');
                }
                elseif($id_menu=='spp')
                {
                    include('spp.php');
                }
                elseif($id_menu=='siswa')
                {
                    include('siswa.php');
                }
                elseif($id_menu=='petugas')
                {
                    include('petugas.php');
                }
                elseif($id_menu=='pembayaran')
                {
                    include('pembayaran.php');
                }
            ?>
        </td>
    </tr>
</table>
</body>
</html>