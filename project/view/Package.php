<?php
	include("nav.php");


	include("../controller/regiAction.php");
	

?>
<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="css/style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Customer Registration</title>
	<script src="js/regiValidation.js"></script>

	
</head>
<style>
	a:link, a:visited {
  background-color: #04AA6D;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: red;
}
</style>
<body>

	<h2 align='center'>Give Rating</h2>
	
<div class="main">
	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" novalidate onsubmit="return validate(this);">
		<fieldset>
			<legend>General</legend>

			<h2 align='center'><h2>Product Name : Hp laptop</h2><br>
            <h2 align='center'><h2>Shop Name : Star Tech</h2><br>
            <h2 align='center'><h2>Location : IDB Dhaka</h2><br>
            <h2 align='center'><h2>Price : 50000</h2><br>
			
			<br>

			<label for ="gender">Give ratings</label>
			<input type="radio"  id="male" value="male"<?php echo ($gender == 'male')?'cheked':''?>>
			<label for="male">1*</label>
			<input type="radio"  id="female" value="female" <?php echo ($gender == 'female')?'cheked':''?>>
			<label for="female">2*</label>
			<span id ="genderErrMsg"></span>
			<span><?php echo $genderErrMsg; ?></span>
			<input type="radio"  id="male" value="male"<?php echo ($gender == 'male')?'cheked':''?>>
			<label for="male">3*</label>

			<input type="radio" id="male" value="male"<?php echo ($gender == 'male')?'cheked':''?>>
			<label for="male">4*</label>

			<input type="radio"id="male" value="male"<?php echo ($gender == 'male')?'cheked':''?>>
			<label for="male">5*</label>

			

		</fieldset>
		<input type="submit" name="submit" value="Confirm"><br>
		
		
	</form>
</div>

</body>
</html>
<?php
    include('footer.php');
?>
