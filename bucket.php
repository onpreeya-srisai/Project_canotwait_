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
    
    
    .tableCart table {
        border-collapse: collapse;
        width: 100%;
    }
    .tableCart h1 {
        /* border: 2px solid #dddddd; */
        text-align: center;
        padding-top: 50px;
        padding-bottom: 20px;
        /* font-size: 20px; */
    }
    .tableCart h4 {
        /* border: 2px solid #dddddd; */
        text-align: center;
        /* font-size: 20px; */
    }
    .tableCart th,td {
        border: 2px solid #A2D2FF;
        text-align: center;
        font-size: 20px;
        padding: 8px;
    }
    .tableCart tr:hover {
        background-color: #BDE0FE;
    }
    .tableCart button{
        border: none;
        color: white;
        padding: 16px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 24px;
        /* margin: 4px 2px; */
        transition-duration: 0.4s;
        cursor: pointer;
        width: 100%;
    }
    .tableCart button:hover {
        background-color: #CDB4DB;
        color: white;
    }
    .tableCart .buttonPosition{
        float: center;
    }
    
</style>

<body>
<?php
    session_start();

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
                    echo '<a href="index.php">';
                        echo '<i class="fa-solid fa-house"></i>';
                    echo '</a>';
                echo "</div>";
                /////////// จบ ส่วน Bucket //////////////////////////////////////////
                /////////// ส่วน Account //////////////////////////////////////////
                echo "<div class='acount'>";
                    echo '<a href="account.php">';
                        echo '<i class="fa-solid fa-user"></i>';
                    echo '</a>';
                echo "</div>";
                /////////// จบ ส่วน Account //////////////////////////////////////////
    
            echo "</div>";
           ////////// จบ icon ////////////////////////

        echo "</div>";
        /////////// จบ ส่วน สีชมพู //////////////////////////////////////

    echo "</div>";
    //////////////// จบ head /////////////////////////////////////////////

    $servername = "localhost";
    $username = "root";
    $password = "12345678";
    $dbname = "shop";
    $per_page = 10;


    if(isset($_GET["page"])) $start_page=$_GET["page"]*$per_page;
    else $start_page=0;

    $con=mysqli_connect($servername,$username,$password,$dbname);
    if(!$con) die("Connnect mysql database fail!!".mysqli_connect_error());
    // echo "Connect mysql successfully!";
    
    $sql="SELECT * FROM product";
    $result=mysqli_query($con,$sql);
    $numrow=mysqli_num_rows($result);
    // echo "<br>".$numrow." Records<br>";
    
    // echo $_GET["page"]."<br>";
    $pageNow = $_GET["page"];
    $n_pages =$pageNow+1;
    $p_pages =$pageNow-1;
    // echo ceil($numrow/$per_page)."<br>";

    $sql="SELECT * FROM product LIMIT $start_page,$per_page";
    $result=mysqli_query($con,$sql);


    if(isset($_SESSION["cart"]))
    {
        $total=0;
        $totalChack=0;

        for($i=0;$i<count($_SESSION["cart"]);$i++)
        {
            $item=$_SESSION["cart"][$i];
            $totalChack+=$item['price'];
        }

        if($totalChack==0){
            echo "<div class='tableCart'>";
            echo "<h1>คุณยังไม่ได้เพิ่มรายการสินค้า</h1>";
        echo "</div>";
        }else{
            echo "<div class='tableCart'>";
                echo "<h1>ตะกร้าสินค้า</h1>";
                echo "<a href='delAllProduct.php'>";
                    echo "<h4 style='text-align:right'>ลบรายการสินค้าทั้งหมดทั้งหมด</h4>";
                echo "</a>";
                echo "<table><tr><th>ลำดับ</th><th>id</th><th>name</th><th>description</th><th>price</th><th>ลบรายการสินค้า</th></tr>";
                    for($i=0;$i<count($_SESSION["cart"]);$i++)
                    {
                        $item=$_SESSION["cart"][$i];
                        echo "<tr><td>".($i+1)."</td>";
                            echo "<td>".$item['id']."</td>";
                            echo "<td>".$item['name']."</td>";
                            echo "<td>".$item['description']."</td>";
                            echo "<td>".$item['price']."</td>";
                            echo "<td><a href='delProduct.php?i=".$i.">'";
                            echo "<font color='red'>x</font></a></td>";
                        echo "</tr>";
                        $total+=$item['price'];
                    }
                echo "</table>";
                echo "<h1>ราคาสินค้า $total บาท</h1>";
                echo "<div class='buttonPosition'>";
                echo "<a href='createBuy.php'>";
                    echo "<button>";
                        echo "<p style='color:#000'>บันทึกการทำรายการ</p>";
                    echo "</button>";
                    echo "</a>";
                echo "</div>";
            echo "</div>";
        }
    }else{
        echo "<div class='tableCart'>";
            echo "<h1>คุณยังไม่ได้เพิ่มรายการสินค้า</h1>";
        echo "</div>";
    }

    mysqli_close($con);
?>
</body>
</html>