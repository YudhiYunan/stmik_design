<?php
include ("koneksi1.php");

if(isset($_POST['save'])) {
$query_input=mysqli_query($koneksi,"insert into anggota(nama,alamat,no_tlp)
values (
'".$_POST['nama']."',
'".$_POST['alamat']."',
'".$_POST['no_tlp']."')");

if($query_input){
header('location:view_anggota.php');
}else{
    echo mysqli_error();
}
}
include('header.php');
?>
<form method="POST">
<table class="table table-bordered" border="1">
  <tr>
    <td>Nama</td>
		<td><input type="text" name="nama" class="form-control" required></td>
	</tr>	
	<tr>
    <td>Alamat</td>
		<td><input type="text" name="alamat" class="form-control" required></td>
	</tr>	
	<tr>
    <td>No Telepon</td>
		<td><input type="text" name="no_tlp" class="form-control" required></td>
	</tr>	
	<tr>
		<td><input type="submit" name="save" class="btn btn-info"></td>
		</tr>
        <td><a href="view_anggota.php" class="btn btn-info">TAMPILKAN DATA</td>
</table>
</form>
<?php
include('footer.php');
