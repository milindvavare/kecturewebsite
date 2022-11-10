<?php
date_default_timezone_set('Asia/Kolkata');
$conn = mysqli_connect('localhost', 'root', '', 'dms_shopping');

$productDateTime = date('Y-m-d H:i:s');

$sql = "INSERT INTO products(product_name, price, prime_rate, discount, mrp, image, categories, brand, model, available_qty, datetime, description, status) VALUES ('Canon SLR Camera (Black) with EF S18-55 is II Lens', '1200', '1199', '10', '3000', '', 'Camera', 'Cannon', 'EF S18-55', '10', '$productDateTime', 'Sensor: APS-C CMOS Sensor with 24.1 MP (high resolution for large prints and image cropping). Transmission frequency (central frequency):Frequency: 2 412 to 2 462MHz.', 'Active')";

if(mysqli_query($conn, $sql)){
	echo "Data Stored";
}
else{
	echo "Error";
}





?>