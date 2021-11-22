<html>
 <head>
  <title>Opciones</title>
 </head>
 <body>
	<form action="" method="post">
		<select name="selector">
			<option value="1"><?php echo $_POST['input1'];?></option>
			<option value="2"><?php echo $_POST['input2'];?></option>
			<option value="3"><?php echo $_POST['input3'];?></option>
			<option value="4"><?php echo $_POST['input4'];?></option>
			<option value="5"><?php echo $_POST['input5'];?></option>
		</select>
	</form>
	<?php print_r($_POST); ?>
 </body>
</html>