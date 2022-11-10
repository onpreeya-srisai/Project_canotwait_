<?php
session_start();
$i = $_GET['i'];
if(isset($_SESSION["cart"])){
    $_SESSION["cart"] = null;
}
?>

<script>
    window.alert("นำสินค้าออกจากตะกร้าทั้งหมดเรียบร้อยแล้ว");
    window.location.replace('bucket.php');
</script>