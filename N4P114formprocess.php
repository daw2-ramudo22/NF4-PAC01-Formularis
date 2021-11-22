<html>
 <head>
  <title>Operacion</title>
 </head>
 <body>
 <?php
$total;
  $total = $_POST['n1']+$_POST['n2']+$_POST['n3'];
 
echo "El total de la suma es: ".$total;
echo "<br>";
print_r($_POST);
?>
 </body>
</html>