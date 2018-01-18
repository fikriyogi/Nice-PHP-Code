<?php
include "koneksi.php";
$a="DELETE from mhsasia WHERE id='$_GET[id]'";
$b=mysqli_query($koneksi,$a);
echo "<script>alert('Data Telah Di Hapus');document.location='index.php'</script>";
?>