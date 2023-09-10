<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta name="viewport" charset="utf-8" content="device-width, initial-scale = 1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style type="text/css">
	.link1{
		background-color: gold;
		color:black;
 	}
</style>
<body>
			<div class="menutop">
		<img class="imgmb" src="logo/mb.png">
<?php
include 'Dbase.php';
?>
<div class="headerad">
	<h1 class="hedec"></h1>MB SHOP</h1>
	</div>
<div class="menulink">
	<a class="link1" href="index.php">HOME</a>
	<a class="link2" href="create/index.php">SIGN UP</a>
	<a class="link3" href="login/index.php">SIGN IN</a>
	<a class="link4" href="about/aboutus.php">CONTACTS</a>
	</div>
</div>
	<hr>
	<div class="bottom-side">
	<h3>Hi there! <span class="handring">We are about to serve you</span></h3>
<?php
	$query = mysqli_query($conn,"SELECT * FROM tblproductinfo");
    if (mysqli_num_rows($query)>0) {
    	while ($row=mysqli_fetch_assoc($query)) {
    		?>
    		<div class="productlist">
    			<p><?php echo $row["product_name"]; ?></p>
    			<img class="img" src="product/<?php echo $row["product_image"];?>">
    			<p>COST &#36;<?php echo $row["product_cost"];?></p>
    		</div>
    		<?php
    	}
    }else{
    	echo "<p class = 'infoMessage'>No product is uploaded this moment</p>";
    }
	?>
</div>
</body>
</html>