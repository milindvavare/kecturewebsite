<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php 
$conn = mysqli_connect('localhost', 'root', '', 'dms_shopping');




$sql = "SELECT * FROM products WHERE product_id = '".$_GET['pid']."'";



$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {       	 
foreach ($result as $row) {
   $price =  $row['price'];
}
}
?>

















   
    <img src="img/products/<?=$_GET['pimg']?>">

    <h1><?=$_GET['pname']?></h1>

    <h2 style="color:blue;font-size: 100px;"><?=$price?></h2>

</body>
</html>