<?php 
include 'koneksi.php';
$id = mysqli_real_escape_string($db,$_GET['id']);
$query="DELETE from wishlist where id='$id'";
$hapus=mysqli_query($db, $query);
	if($hapus==true){
	?>
	<script type="text/javascript">alert('Data Berhasil Dihapus!'); document.location.href='wishlist.php';</script>
	<?php
	} else {
	?>
	<script type="text/javascript">alert('Gagal!'); document.location.href='wishlist.php';</script>
	<?php
}
?>