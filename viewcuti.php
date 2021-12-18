<?php
include ("koneksi.php");
$query_view=mysqli_query($koneksi,"select * from datacuti");

?>
</br>
<a href="anggota.php" class="btn btn-danger">Tambah Anggota</a>
<a href="halaman.php" class="btn btn-danger">Menu</a>
<table class="table table-bordered" border="1">
    <tr>
        <td>No</td>
        <td>Nama</td>
        <td>Jabatan</td>
        <td>Departemen</td>
        <td>Alasan Cuti</td>
        <td>Mulai Cuti</td>
        <td>Berakhir Cuti</td>
    </tr>

<?php
$no=1;
while($tampil=mysqli_fetch_array($query_view)){?>
    <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $tampil ['nama'];?></td>
        <td><?php echo $tampil ['jabatan'];?></td>
        <td><?php echo $tampil ['departemen'];?></td>
        <td><?php echo $tampil ['alasancuti'];?></td>
        <td><?php echo $tampil ['mulaicuti'];?></td>
        <td><?php echo $tampil ['berakhircuti'];?></td>        
    </tr>
<?php } ?>
</tale>
