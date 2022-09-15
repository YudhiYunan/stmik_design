<?php
include "koneksi.php";

if(isset($_POST['save'])){
	$query_input=mysqli_query($koneksi,"insert into kategori(nama)
	values(
	'".$_POST['nama']."')");
	
	if($query_input){
	header('location:view_kategori.php');
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
		<td><input type="submit" name="save" class="btn btn-info"></td>
	</tr>
	<td><a href="view_kategori.php" class="btn btn-info">TAMPILKAN DATA</td>
</table>
</form>
<?php
include('footer.php');