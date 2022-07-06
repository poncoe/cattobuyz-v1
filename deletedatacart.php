<?php 
include 'koneksi.php';
$id = mysqli_real_escape_string($db,$_GET['id']);
$query="DELETE from cart where id='$id'";
$hapus=mysqli_query($db, $query);
	if($hapus==true){
	?>
	<script type="text/javascript">alert('Data Berhasil Dihapus!'); document.location.href='cart.php';</script>
	<?php
	} else {
	?>
	<script type="text/javascript">alert('Gagal!'); document.location.href='cart.php';</script>
	<?php
}
?>