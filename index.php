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
        background: #FFC8DD;
        /* background: #FFF; */
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
        /* width: 14.8%; */
        width: 148px;
    }
    .headDiv .canotPulple i {
        align-self: center;
        font-size: 56px;
        justify-content: center;
    }
    .headDiv .canotPink {
        background-color: #FFAFCC;
        display: flex;
        flex: 1;
        flex-direction: row;
        align-items: center;
        /* width: 85.2%; */
    }
    .headDiv .canotPink .canotText {
        padding-left: 4%;
        padding-right: 60%;
    }
    .headDiv .canotPink .canotText h1 {
        font-family: 'Autour One';
        font-size: 40px;
    }
    .headDiv .canotPink .canotIcon {
        display: flex;
        flex: 1;
        flex-direction: row;
        justify-content: flex-end;
    }
    .headDiv .canotPink .canotBucket {
        display: flex;
        flex: 1;
        padding-right: 2%;
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
    .headDiv .canotPink .canotAcount {
        display: flex;
        flex: 1;
        padding-right: 2%;
    }
    .headDiv .canotPink .canotAcount a {
        color: #000;
        padding: 8px;
    }
    .headDiv .canotPink .canotAcount a:hover {
        color: #BDE0FE;
    }
    .headDiv .canotPink .canotAcount a:active {
        color: #A2D2FF;
    }
    .headDiv .canotPink .canotAcount i {
        font-size: 32px;
    }

    .mySlide {
        box-sizing: border-box;
        background-color: #FFC8DD;
        align-items: center;
        padding-bottom: 12px;
    }
    .slideShow {
        max-width: 800px;
        position: relative;
        margin: auto;
    }
    .slidePic {
        display: none;
    }
    .fade {
        animation-name: fade;
        animation-duration: 1.5s;
    }
    @keyframes .fade {
        from {opacity: .4} 
        to {opacity: 1}
    }
    .numbertext{
        color: black;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }
    .slidePic img{
        vertical-align: middle;
    }
    .dot {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #FFAFCC;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
    }
    @media only screen and (max-width: 300px) {
        .text {font-size: 11px}
    }
    .active {
        background-color: #CDB4DB;
    }
    .tableClass {
        width: 100%;
        /* padding-top: 12px; */
        /* background-color: #FFAFCC; */
        background-color: #FFF;
    }
    .tableClass table{
        border-collapse: collapse;
        width: 100%;
        justify-content: center;
    }
    .tableClass th,td {
        border: 2px solid #A2D2FF;
        text-align: center;
        font-size: 20px;
        padding: 8px;
    }
    .tableClass tr:hover {
        background-color: #BDE0FE;
    }
    .tableClass img {
        width: 300px;
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

    
    @media only screen and (max-width: 1000px) {
            .headDiv {
            background-color: #FFAFCC;
            display: flex;
            flex: 1;
            flex-direction: row;
            height: 74px;
            align-items: center;
            width: 100%;
        }
        .headDiv .canotPulple {
            background-color: #CDB4DB;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            width: 7.4%;
            /* width: 148px; */
        }
        .headDiv .canotPulple i {
            align-self: center;
            font-size: 40px;
            justify-content: center;
        }
        .headDiv .canotPink {
            background-color: #FFAFCC;
            display: flex;
            flex: 1;
            flex-direction: row;
            align-items: center;
            width: 83.6%;
        }
        .headDiv .canotPink .canotText {
            /* padding-left: 2%; */
            justify-content: flex-start;
            padding-right: 40%;
        }
        .headDiv .canotPink .canotText h1 {
            font-family: 'Autour One';
            font-size: 24px;
        }
        .headDiv .canotPink .canotIcon {
            display: flex;
            flex: 1;
            flex-direction: row;
            justify-content: flex-end;
        }
        .headDiv .canotPink .canotBucket {
            display: flex;
            flex: 1;
            justify-content: flex-end;
            padding-right: 2%;
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
            font-size: 24px;
        }
        .headDiv .canotPink .canotAcount {
            display: flex;
            flex: 1;
            justify-content: flex-end;
            padding-right: 2%;
        }
        .headDiv .canotPink .canotAcount a {
            color: #000;
            padding: 8px;
        }
        .headDiv .canotPink .canotAcount a:hover {
            color: #BDE0FE;
        }
        .headDiv .canotPink .canotAcount a:active {
            color: #A2D2FF;
        }
        .headDiv .canotPink .canotAcount i {
            font-size: 24px;
        }

        .mySlide {
            box-sizing: border-box;
            background-color: #FFC8DD;
            align-items: center;
            padding-bottom: 12px;
        }
        .slideShow {
            max-width: 200px;
            position: relative;
            margin: auto;
        }
        .slidePic {
            display: none;
        }
        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }
        @keyframes .fade {
            from {opacity: .4} 
            to {opacity: 1}
        }
        .numbertext{
            color: black;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }
        .slidePic img{
            vertical-align: middle;
        }
        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #FFAFCC;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }
        .mySlide {
            box-sizing: border-box;
            background-color: #FFC8DD;
            align-items: center;
        }
        .slideShow {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }
        .active {
            background-color: #CDB4DB;
        }

        .tableClass {
            width: 100%;
            /* padding-top: 12px; */
            /* background-color: #FFAFCC; */
            background-color: #FFF;
        }
        .tableClass table{
            border-collapse: collapse;
            width: 100%;
            justify-content: center;
        }
        .tableClass th,td {
            border: 2px solid #A2D2FF;
            text-align: center;
            font-size: 16px;
            padding: 2px;
        }
        .tableClass tr:hover {
            background-color: #BDE0FE;
        }
        .tableClass img {
            width: 100px;
        }

        .page {
            padding-top: 12px;
        }
        .page .changePage {
            text-align:center;
            font-size: 12px;
        }
        .page .callPage {
            text-align:center;
            font-size: 12px;
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
            /* padding: 12; */
            /* text-align: left; */
        }
        footer .footLeft h2 {
            font-size: 20px;
        }
        footer .footLeft .icon a i{
            font-size: 24px;
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
        }
        footer .footRight p {
            font-size: 12px;
        }
        footer .footRight h2 {
            font-size: 20px;
        }
    }
    
</style>
<body>
<?php
    session_start();
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
        /////////// จบ ตัวหนังสือ Canotwait_ /////////////////////////////
        
        echo "<div class='canotIcon'>";

        /////////// ส่วน Bucket //////////////////////////////////////////
            echo "<div class='canotBucket'>";
                echo '<a href="bucket.php">';
                    echo '<i class="fa-solid fa-cart-shopping"></i>';
                echo '</a>';
            echo "</div>";
        /////////// จบ ส่วน Bucket //////////////////////////////////////////

        /////////// ส่วน Account //////////////////////////////////////////
            echo "<div class='canotAcount'>";
                echo '<a href="account.php">';
                    echo '<i class="fa-solid fa-user"></i>';
                echo '</a>';
            echo "</div>";
        /////////// จบ ส่วน Account //////////////////////////////////////////
            echo "</div>";
        echo "</div>";
    /////////// จบ ส่วน สีชมพู //////////////////////////////////////
    echo "</div>";
//////////////// จบ head /////////////////////////////////////////////

//////////////// Slide Show /////////////////////////////////////////////////
    echo "<div class='mySlide'>";	
        echo "<div class='slideShow'>";
        ////////////////// รูปที่ 1 ///////////////////////////////////
            echo '<div class="slidePic fade">';
                echo '<div class="numbertext">1 / 3</div>';
                echo '<img src="https://i.ibb.co/rsRKcDj/LINE-ALBUM-Canotwait-220726.jpg" style="width:100%;height: 400px;">';
            echo '</div>';
        ////////////////// รูปที่ 2 ///////////////////////////////////
            echo '<div class="slidePic fade">';
                echo '<div class="numbertext">2 / 3</div>';
                echo '<img src="https://i.ibb.co/B4WGVtQ/0048xmjely1gurj6arhfgj61900u0q9b02.jpg" style="width:100%;height: 400px;">';
            echo '</div>';
        ////////////////// รูปที่ 3 ///////////////////////////////////
            echo '<div class="slidePic fade">';
                echo '<div class="numbertext">3 / 3</div>';
                echo '<img src="https://i.ibb.co/SVLdGkr/410969.jpg" style="width:100%;height: 400px;">';
            echo '</div>';
        ////////////////// จบ รูปภาพ ///////////////////////////////////
        echo "</div>";
        echo "<br>";
        //////////////// จบ Slide Show /////////////////////////////////////////////////
        ////////////////// เลือกลำดับรูปผ่าน dot //////////////////////////////
        echo '<div style="text-align:center">';
            echo '<span class="dot"></span>';
            echo '<span class="dot"></span>';
            echo '<span class="dot"></span>';
        echo '</div>';
        ////////////////// จบ เลือกลำดับรูปผ่าน dot //////////////////////////////
    echo '</div>';

    /////////////////////// เริ่ม สินค้า ////////////////////////////////////////
    ////////////////////// table //////////////////////////////////////////////////
    if(mysqli_num_rows($result)>0){
        echo "<div class='tableClass'>";
        echo "<table border=1>";
        echo "<tr>";
        echo "<th>id</th>";
        echo "<th>name</th>";
        echo "<th>description</th>";
        echo "<th>price</th>";
        echo "<th>picture</th>";
        echo "<th>ใส่สินค้า</th></tr>";

        while($row=mysqli_fetch_assoc($result)){
        echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>";
        echo $row["description"]."</td><td>".$row["price"]."</td><td>";
        echo "<img src='".$row["picture"]." alt=".$row["picture"]."' ></td><td>";
        echo "<a href='addProduct.php?id=".$row["id"]."'>ใส่ตระกร้า</a></td>";
        }

        echo "</table>";
        echo "</div>";
    }else{
        echo "0 results";
        echo "</div>";
    }
    ////////////////////// จบ table //////////////////////////////////////////////////
    ///////////////////// change page ////////////////////////////////////////////////
    echo "<div class='page'>";
    echo "<div class='changePage'>";
    if($pageNow>0){
        echo "<a href='index.php?page=$p_pages'>PREVIOUS</a>";
    }

    for($i=0;$i<ceil($numrow/$per_page);$i++){
        echo "<a href='index.php?page=$i'>[".($i+1)."]</a>";
    }

    if($n_pages<ceil($numrow/$per_page)){
        echo "<a href='index.php?page=$n_pages'>NEXT</a>";
    }
    echo "</div>";
        echo "<div class='callPage'>";
            echo "<p>page ".($pageNow+1)."</p>";
        echo "</div>";
    echo "</div>";
    ///////////////////// จบ change page ////////////////////////////////////////////////


    
    mysqli_close($con);
    /////////////////////// จบ สินค้า ////////////////////////////////////////
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

<!-- /////////////////////////// สคริปทำ สไลด์ //////////////////////////////////// -->
<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("slidePic");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<!-- /////////////////////////// จบ สคริปทำ สไลด์ //////////////////////////////////// -->
</body>
</html>