<?php
// connect to mysqli
$db = mysqli_connect('localhost', 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');

//make sure you're using the correct database
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));


$fecha_actual = date("Y-m-d");
$review =$_POST['review'];
$comment =$_POST['comment'];
$rating =$_POST['rating'];

$review_movie_id=$_GET['movie_id'];

$query = <<<ENDSQL
INSERT INTO reviews
   	(review_movie_id, review_date, reviewer_name, review_comment, review_rating)
VALUES
    	("$review_movie_id","$fecha_actual","$review","$comment","$rating")
ENDSQL;

echo $query;

mysqli_query($db,$query) or die(mysqli_error($db));


echo 'INSERT successfully!
	<br>
	 <form action="http://localhost/N3P308details.php?movie_id=$id" method="post">
		<input type="submit" name="submit" value="Submit" />
	 </form>
';

?>  