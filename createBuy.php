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
        color: #000
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
        padding-right: 56%;
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
        padding-right: 2%;
    }
    .headDiv .canotPink .canotBucket a {
        color: #000;
        padding: 8px;
    }
    .headDiv .canotPink .canotBucket a i {
        font-size: 24px;
    }
    .headDiv .canotPink .canotBucket a:hover {
        color: #BDE0FE;
    }
    .headDiv .canotPink .canotBucket a:active {
        color: #A2D2FF;
    }

    h1 {
        text-align: center;
        padding: 12px;
    }
    .tableCart {
        margin-left: 148px;
        margin-right: 148px;
        margin-bottom: 8px;
        /* background-color: pink; */
    }
    .tableCart .text1 {
        text-align: center;
        padding-bottom: 8px;
    }
    .tableCart table {
        border-collapse: collapse;
        width: 100%;
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
    .tableCart .text2 {
        text-align: left;
        padding-top: 8px;
    }
    .form {
        margin-left: 148px;
        margin-right: 148px;
        margin-bottom: 8px;
    }
    .form .input {
        display: flex;
        flex-direction: row;
        padding-bottom: 20px;
    }
    .form .input label {
        padding-right:12px;
        font-size: 20px;
    }
    
    .form .buttonPosition button{
        padding: 12px;
        width: 120px;
        background-color: #CDB4DB;
        border: none;
    }
    .form .buttonPosition button:hover {
        background-color: #BDE0FE;
        color: #000;
    }
    .form .buttonPosition button:active {
        background-color: #A2D2FF;
        color: #000;
    }
    
</style>

<body>
<?php
session_start();

//////////// ส่วน head ///////////////////////////////////////
echo "<div class='headDiv'>";
/////////// ส่วน สัญลักษณ์ canotwait_ พื้นหลังสีม่วง /////////////
echo "<div class='canotPulple'>";
    echo "<i class='fa-sharp fa-solid fa-not-equal'></i>";
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
        /////////// ส่วนกลับ Bucket //////////////////////////////////////////
        echo "<div class='canotBucket'>";
            echo '<a href="bucket.php">';
                echo '<i class="fa-solid fa-arrow-left">';
                echo  ' BACK';
                echo '</i>';
            echo '</a>';
        echo "</div>";
        /////////// จบ ส่วนกลับ Bucket //////////////////////////////////////////

    echo "</div>";
   ////////// จบ icon ////////////////////////

echo "</div>";
/////////// จบ ส่วน สีชมพู //////////////////////////////////////

echo "</div>";
//////////////// จบ head /////////////////////////////////////////////

echo "<h1>สรุปรายการสินค้า</h1>";
if(isset($_SESSION["cart"])){
    echo "<div class='tableCart'>";
        $total=0;
        echo "<div class='text1'>";
            echo "<h2>ตะกร้าสินค้า</h2>";
        echo "</div>";
        echo "<table><tr><th>ลำดับ</th><th>id</th><th>name</th><th>description</th><th>price</th></tr>";
            for($i=0;$i<count($_SESSION["cart"]);$i++)
            {
                $item=$_SESSION["cart"][$i];
                echo "<tr><td>".($i+1)."</td>";
                echo "<td>".$item['id']."</td>";
                echo "<td>".$item['name']."</td>";
                echo "<td>".$item['description']."</td>";
                echo "<td>".$item['price']."</td>";
                $total+=$item['price'];
            }
        echo "</table>";
        echo "<div class='text2'>";
            echo "<h3>ราคาสินค้า $total บาท</h3>";
        echo "</div>";
    echo "</div>";
    echo "<h1>กรุณากรอกข้อมูล</h1>";
?>
    <form action="saveProduct.php" method="post">
        <div class="form">
            <div class="input">
                <label for="fname">First name:</label><br>
                <input type="text" id="fname" name="fname" value=""><br>
            </div>
            <div class="input">
                <label for="lname">Last name:</label><br>
                <input type="text" id="lname" name="lname" value=""><br>
            </div>
            <div class="input">
                <label for="address">Address:</label><br>
                <textarea id="address" name="address"  rows="4" cols="50"></textarea><br>
            </div>
            <div class="input">
                <label for="mobile">mobile no.:</label><br>
                <input type="text" id="mobile" name="mobile" value="">
            </div>
            <br>
            <br>
            <div class='buttonPosition'>
                <button>Submit</button>
            </div>
        </div>
    </form> 
<?php
}
?>
</body>
</html>