<?php
include("koneksi.php");

if(isset($_POST['save'])){
$query_input=mysqli_query($koneksi,"insert into datacuti(nip,nama,jabatan,departemen,alasancuti,mulaicuti,berakhircuti)
values(
'".$_POST['nip']."',
'".$_POST['nama']."',
'".$_POST['jabatan']."',
'".$_POST['departemen']."',
'".$_POST['alasancuti']."',
'".$_POST['mulaicuti']."',
'".$_POST['berakhircuti']."')");

if($query_input){
header('location:viewcuti.php');
}else{
	echo mysqli_error();
}
}
?>
<form method="POST" action="">
<table class="table table-dark">

	<tr>
    <td>NIP</td>
    <td>:</td>
	<td><input class="form-control"
    placeholder="masukan NIP"
    aria-label="default input example"
    type="varchar"
    name="nip"></td>
    </tr>

    <tr>
    <td>Nama</td>
    <td>:</td>
	<td><input class="form-control"
    placeholder="masukan nama"
    aria-label="default input example"
    type="varchar"
    name="nama"></td>
    </tr>

	<tr>
    <td>Jabatan</td>
    <td>:</td>
    <td><select name="jabatan">
      <option value="">--Pilih--</option>
      <option value="manager">Manager</option>
      <option value="supervisor">Supervisor</option>
      <option value="leader">Leader</option>
      <option value="staff">Staff</option>
      <option value="admin">Admin</option>
    </tr>

	<tr>
    <td>Departemen</td>
    <td>:</td>
	<td><select name="departemen">
    <option value="">--Pilih--</option>
    <option value="hrd">Hrd</option>
    <option value="produksi">Produksi</option>
    <option value="marketing">Marketing</option>
    </select></td>
    </tr>

    <tr>
    <td>Alasan Cuti</td>
    <td>:</td>
    <td><input class="form-control"
    placeholder="alasan cuti"
    aria-label="default input example"
    type="varchar"
    name="alasancuti"></td>
    </td>
    </tr>
                   
    <tr>
    <td>Mulai Cuti</td>
    <td>:</td>
    <td><input type="date"  name="mulaicuti"></td>
    </tr>

    <tr>
    <td>Berakhir Cuti</td>
    <td>:</td>
    <td><input type="date"  name="berakhircuti"></td>
    </tr>

	<tr>
    <td>
        <input type="submit" name="save" value="Ajukan Cuti"class="btn btn-success btn-block"/>
        <input type="reset" name="reset" value="Batal"class="btn btn-success btn-block"/>
    </td>

	<td><a class="btn btn-success"
    href="viewcuti.php"
    role="button">menampilkan data</a></td>
	</tr>

</table>
</form>