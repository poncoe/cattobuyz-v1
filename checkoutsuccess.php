<?php
include("koneksi.php");
$sql = "TRUNCATE TABLE cart";
$query = mysqli_query($db, $sql);
if($query){
    ?>
    <script type="text/javascript">alert('Pembayaran Berhasil, Terimakasih Sudah Berbelanja di Cattobuyz!'); document.location.href='cart.php';</script>
    <?php
}else{
    ?>
    <script type="text/javascript">alert('Pembayaran Gagal!'); document.location.href='cart.php';</script>
    <?php
}
?>