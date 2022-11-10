<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a72db9916c.js" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Autour One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Trirong' rel='stylesheet'>
    <title>Canotwait_</title>
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        font-family: 'Autour One','Trirong',arial, sans-serif;
        /* max-width: 100%; */
    }
    body {
        /* background: #FFC8DD; */
        background: #FFF;
        /* background-color: #FFAFCC; */
    }
    .headDiv {
        background-color: #FFAFCC;
        display: flex;
        flex: 1;
        flex-direction: row;
        height: 148px;
        align-items: center;
        /* margin: 0; */
    }
    .headDiv .canotPulple {
        background-color: #CDB4DB;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 148px;
        width: 148px;
    }
    .headDiv .canotPulple i {
        align-self: center;
        font-size: 56px;
        justify-content: center;
        /* color: #000; */
    }
    .headDiv .canotPink {
        background-color: #FFAFCC;
        display: flex;
        flex: 1;
        flex-direction: row;
        align-items: center;
    }
    .headDiv .canotPink .canotText {
        padding-left: 4%;
        padding-right: 60%;
        color: #000;
    }
    .headDiv .canotPink .canotText h1 {
        font-family: 'Autour One';
        font-size: 40px;
    }
    .headDiv .canotPink .canotIcon {
        display: flex;
        flex-direction: row;
    }
    .headDiv .canotPink .canotBucket {
        padding-right: 4%;
        padding-left: 2%;
    }
    .headDiv .canotPink .canotBucket a {
        color: #000;
        padding: 8px;
    }
    .headDiv .canotPink .canotBucket a:hover {
        color: #BDE0FE;
    }
    .headDiv .canotPink .canotBucket a:active {
        color: #A2D2FF;
    }
    .headDiv .canotPink .canotBucket a i {
        font-size: 32px;
    }
    .headDiv .canotPink .acount {
        padding-left: 4%;
    }
    .headDiv .canotPink .acount a {
        color: #000;
        padding: 8px;
    }
    .headDiv .canotPink .acount a:hover {
        color: #BDE0FE;
    }
    .headDiv .canotPink .acount a:active {
        color: #A2D2FF;
    }
    .headDiv .canotPink .acount a i {
        font-size: 32px;
    }

    .h h1 {
        text-align: center;
        padding-top: 20px;
    }

    .count p {
        text-align: left;
        padding-left: 12px;
        padding-bottom: 12px;
    }

    .product {
        margin-left: 148px;
        margin-right: 148px;
        /* margin-bottom: 8px; */
    }
    .product table {
        border-collapse: collapse;
        width: 100%;
    }
    .product th,td {
        border: 4px solid #A2D2FF;
        text-align: center;
        font-size: 20px;
        padding: 8px;
        background-color: #fff;
    }
    .card {
        background-color: #FFAFCC;
        margin: 12px;
        padding: 20px;
        border-radius: 10px;
    }

    h2 {
        text-align: center;
        /* padding-top: 20px; */
    }

    .page {
        padding-top: 12px;
    }
    .page .changePage {
        text-align:center;
        font-size: 16px;
    }
    .page .callPage {
        text-align:center;
        font-size: 16px;
        padding-top: 8px;
        padding-bottom: 12px;
    }

    footer {
        display: flex;
        flex: 1;
        flex-direction: row;
        align-content: space-evenly;
        padding: 12px;
        padding-top: 12px;
        background-color: #CDB4DB;
        color: black;
    }
    footer .footLeft {
        display: flex;
        flex: 1;
        flex-direction: column;
        padding-left:12px;
        padding-top: 12px;
    }
    footer h2 {
        text-align: left;
    }
    footer .footLeft .icon a i{
        font-size: 32px;
        padding-right: 12px;
    }
    footer .footLeft .icon a:hover {
        color: #A2D2FF;
    }
    footer .footLeft .icon a:active {
        color: #BDE0FE;
    }
    footer .footRight {
        display: flex;
        flex: 1;
        flex-direction: column;
        /* padding-top: 2px; */
    }
    footer .footRight p {
        font-size: 16px;
    }
</style>

<body>
    
<?php
session_start();
// เชื่อมต่อฐานข้อมูล
$servername="localhost";
$username="root";
$password="12345678";
$dbname="shop";
$per_page = 5;

//////////// ส่วน head ///////////////////////////////////////
echo "<div class='headDiv'>";
/////////// ส่วน สัญลักษณ์ canotwait_ พื้นหลังสีม่วง /////////////
echo "<div class='canotPulple'>";
    // echo '<a href="index.php">';
        echo "<i class='fa-sharp fa-solid fa-not-equal'></i>";
    // echo '</a>';
echo "</div>";
/////////// จบ ส่วน สัญลักษณ์ canotwait_ พื้นหลังสีม่วง /////////////

/////////// ส่วน สีชมพู //////////////////////////////////////
echo "<div class='canotPink'>";
    /////////// ตัวหนังสือ Canotwait_ /////////////////////////////
    echo "<div class='canotText'>";
        echo "<h1>CANOTWAIT_</h1>";
    echo "</div>";
   ////////// จบ ตัวหนังสือ Canotwait_ /////////////////////////////
   ////////// icon ////////////////////////
    echo "<div class='canotIcon'>";
        /////////// ส่วน Bucket //////////////////////////////////////////
        echo "<div class='canotBucket'>";
            echo '<a href="bucket.php">';
                echo '<i class="fa-solid fa-cart-shopping"></i>';
            echo '</a>';
        echo "</div>";
        /////////// จบ ส่วน Bucket //////////////////////////////////////////
        /////////// ส่วน Account //////////////////////////////////////////
        echo "<div class='acount'>";
            echo '<a href="index.php">';
                echo '<i class="fa-solid fa-house"></i>';
            echo '</a>';
        echo "</div>";
        /////////// จบ ส่วน Account //////////////////////////////////////////

    echo "</div>";
   ////////// จบ icon ////////////////////////

echo "</div>";
/////////// จบ ส่วน สีชมพู //////////////////////////////////////

echo "</div>";
//////////////// จบ head /////////////////////////////////////////////
echo "<div class='h'>";
echo "<h1>ประวัติการซื้อสินค้า</h1>";
echo "</div>";

if(isset($_GET["page"])) $start_page=$_GET["page"]*$per_page;
else $start_page=0;

$con=mysqli_connect($servername,$username,$password,$dbname);
if(!$con) die("Connnect mysql database fail!!".mysqli_connect_error());
// echo "Connect mysql successfully!";

$sql3 = "SELECT * FROM order_product";
$result=mysqli_query($con,$sql3);
$numrow=mysqli_num_rows($result);

$pageNow = $_GET["page"];
$n_pages =$pageNow+1;
$p_pages =$pageNow-1;

echo "<div class='count'>";
    echo "<p>รายการสินค้าทั้งหมดที่สั่งซื้อ : ".mysqli_num_rows($result)."</p>";
echo "</div>";

$sql1 = "SELECT * FROM order_product LIMIT $start_page,$per_page";
$allCus=mysqli_query($con,$sql1);


if(mysqli_num_rows($allCus)>0){
    echo "<div class='product'>";
    while($row=mysqli_fetch_assoc($allCus)){
        echo "<div class='card'>";
            $order = $row['id'];
            echo "<p>Name : ".$row['fname']." ".$row['lname']."</p>";
            echo "<p> Address : ".$row['address']."</p>";
            echo "<p>Mobile : ".$row['moblie']."</p>";
            echo "<p>Order : ".$row['id']."</p>";
            echo "<p>Date : ".$row['order_date']."</p>";
            echo "<br>";

            $sql2="SELECT  * FROM  order_detail INNER JOIN product ON product.id = order_detail.product_id
                    INNER JOIN order_product ON order_detail.order_id = order_product.id WHERE order_product.id = $order";
            $productList=mysqli_query($con,$sql2);
            
            if(mysqli_num_rows($productList)>0){
                $total = 0;
                echo "<table border=1>
                    <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>description</th>
                    <th>price</th>
                    </tr>";
                while($row=mysqli_fetch_assoc($productList)){
                    echo "<tr>
                        <td>".$row["product_id"]."</td>
                        <td>".$row["name"]."</td>
                        <td>".$row["description"]."</td>
                        <td>".$row["price"]."</td>
                        <tr>";
                        $total += $row["price"];
                    }
                    echo "</table>";
                    echo "<br>";
                    echo "<h3>ราคาสินค้า $total บาท</h3>";
            }else{
                echo "0 results";
            }
        echo "</div>";
    }
    echo "</div>";

    ///////////////////// change page ////////////////////////////////////////////////
    echo "<div class='page'>";
    echo "<div class='changePage'>";
    if($pageNow>0){
        echo "<a href='account.php?page=$p_pages'>PREVIOUS</a>";
    }

    for($i=0;$i<ceil($numrow/$per_page);$i++){
        echo "<a href='account.php?page=$i'>[".($i+1)."]</a>";
    }

    if($n_pages<ceil($numrow/$per_page)){
        echo "<a href='account.php?page=$n_pages'>NEXT</a>";
    }
    echo "</div>";
        echo "<div class='callPage'>";
            echo "<p>page ".($pageNow+1)."</p>";
        echo "</div>";
    echo "</div>";
    ///////////////////// จบ change page ////////////////////////////////////////////////
   
}else{
    echo "0 results";
}
echo "<h2><a href='index.php'>สั่งสินค้าอีกครั้ง</a></h2>";

/////////////////////// footer //////////////////////////////////////////
echo "<footer>";
echo "<div class='footLeft'>";
    echo "<h2>Follow Me</h2><br/>";
    echo "<div class='icon'>";
        echo "<a href='https://www.facebook.com/thaiqueensofwilliamchan'>";
            echo '<i class="fa-brands fa-facebook"></i>';
        echo "</a>";
        echo "<a href='https://weibo.com/n/William%E5%A8%81%E5%BB%89%E9%99%88%E4%BC%9F%E9%9C%86'>";
            echo '<i class="fa-brands fa-weibo"></i>';
        echo "</a>";
        echo "<a href='https://www.instagram.com/williamchanwaiting/'>";
            echo '<i class="fa-brands fa-instagram"></i>';
        echo "</a>";
    echo "</div>";
echo "</div>";
echo "<div class='footRight'>";
    echo "<h2>About Me</h2><br/>";
    echo "<p>Product owner : William Chan</p>";
    echo '<p>Powered by : Onpreeya Srisai 6230301067</p>';
echo "</div>";
echo "</footer>";
/////////////////////// จบ footer //////////////////////////////////////////
?>
</body>
</html>