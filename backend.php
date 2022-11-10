<?php
$query = $_GET['q'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<style type="text/css">
	body{
		background: #fbeda0;
	}
	.div1{
		margin-top: 10%;
		width: 100%;
		height: 300px;
		background: white;
		display: inline-flex;
		overflow-x: auto;

	}
	.products{
		width: 220px;
		height: 260px;
		background: skyblue;
		margin-bottom: 10px;
		margin-left: 20px;
	}
</style>
<body>

	<div class="div1">
<?php
$conn = mysqli_connect('localhost', 'root', '', 'dms_shopping');

$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {       	 
foreach ($result as $row) {
?>


<a href="view_products.php?pid=<?=$row['product_id']?>&pimg=<?=$row['image']?>&pname=<?=$row['product_name']?>&pprice=<?=$row['price']?>&mrp=<?=$row['mrp']?>">






	

<div class="products-box">
<br>
<div class="products">
	<center><br><img style="width:80px;height: 70px;" src="img/products/<?=$row['image']?>"></center>
	<h4><?php echo $row['product_name']; ?></h4>
	<h4><?php echo $row['price']; ?></h4>
		<h4><?php echo $row['mrp']; ?></h4>


</div>
</div>
</a>



<?php        
}
}

?> 

</div>


</body>
</html>




