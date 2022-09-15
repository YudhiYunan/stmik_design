<?php
include ("koneksi1.php");

if(isset($_POST['save'])) {
$query_input=mysqli_query($koneksi,"insert into barang(id_kategori,nama)
values (
'".$_POST['id_kategori']."',
'".$_POST['nama']."')");

if($query_input){
header('location:view_barang.php');
}else{
    echo mysqli_error();
}
}
include('header.php');
?>
<form method="POST">
<table class="table table-bordered" border="1">
    <tr>
        <td>ID Kategori</td>
        <td><input type="text" name="id_kategori" class="form-control" required></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td><input type="text" name="nama" class="form-control" required></td>
    </tr>
    <tr>
        <td><input type="submit" name="save" class="btn btn-info"></td>
    </tr>
    <td><a href="view_barang.php" class="btn btn-info">TAMPILKAN DATA</td>
</table>
</form>
<?php
include('footer.php');
