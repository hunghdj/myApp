<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #ccc; 
        }
        .container {
            width: 1500px;
            height: 700px;
            background-color: white;
            border-radius: 1.5rem;
            margin: 0 auto;
        }
        h3 {
            margin-left: 3rem;
            font-size: 2rem;
        }
        .content {
            display: flex;
        }
        .img a img{
            width: 450px;
            height: 420px;
            margin-left: 2rem;
        }
        .btn {
            text-align: center;
        }
        button {
            padding: 7px 60px;
            cursor: pointer;
        }
        .info_product {
            width: 500px;
            margin-left: 2rem;
        }
    </style>
</head>
<body>
    <div class="container">
 <div class="row">
   <?php 
            include ('connect.php');
            $id = $_GET['id'];
            $sqlSelect = "select * from product where Product_ID='$id'";

            $runSql = mysqli_query($con, $sqlSelect);
            $runSql = mysqli_query($con, $sqlSelect);
            while ($row = mysqli_fetch_array($runSql)) {
            $product_ID    = $row['Product_ID'];
            $product_name  = $row['Product_Name'];
            $product_price = $row['Product_Price'];   
            $product_img   = $row['Product_Description'];   
            $categori_ID   = $row['Categori_ID'];          
            $info = $row['info'];
            echo "
            <div class='container'> 
            <h3>$product_name</h3>  
            <div class='content'>
                <div class='img'>
                    <a href='#'><img src='$product_img'></a>
                   <div class='btn'>
                        <form action='cart.php?action=add' method='POST'>
                            <input type='text' name='quantity['$id']'value='1' size='2'>
                           <button type='submit'>Add to card</button>
                        </form>
                   </div> 
                </div>
                <div class='info_product'>
                <h1>Thông tin chi tiết</h1>
                   $info 
                </div>
            </div>
            </div>
            " ;     
        }    
    ?>
</div>
</div>
</body>
</html>