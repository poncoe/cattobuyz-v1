
<?php
include("koneksi.php");
$sql = "INSERT INTO wishlist (img, nameproduct, price) VALUE ('petcargos.jpeg', 'Pet Cargo', 80)";
$query = mysqli_query($db, $sql);
if($query){
    ?>
    <script type="text/javascript">alert('Data Berhasil Ditambahkan!'); document.location.href='index.php';</script>
    <?php
}else{
    ?>
    <script type="text/javascript">alert('Data Gagal Ditambahkan!'); document.location.href='index.php';</script>
    <?php
}
?>