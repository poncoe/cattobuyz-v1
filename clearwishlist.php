<?php
include("koneksi.php");
$sql = "TRUNCATE TABLE wishlist";
$query = mysqli_query($db, $sql);
if($query){
    ?>
    <script type="text/javascript">alert('Reset Wishlist Berhasil!'); document.location.href='wishlist.php';</script>
    <?php
}else{
    ?>
    <script type="text/javascript">alert('Reset Wishlist Gagal!'); document.location.href='wistlist.php';</script>
    <?php
}
?>