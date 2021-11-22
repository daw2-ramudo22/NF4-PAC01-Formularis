<?php

$id = $_GET['movie_id'];

echo '<html>
     <head>
     <title>Insertar una review</title>
     </head>
     <body>
        <h1>Review</h1>
     <form action="http://localhost/N4P111formprocess.php?movie_id=$id" method="post">
     <table>
     <tr>
	<tr>
        <td>Reviewer</td>
        <td><input type="text" name="review" /></td>
        </tr>
	<tr>
        <td>Rating</td>
        <td><input type="number" name="rating" /></td>
        </tr>
        <tr>
        <td>Comments</td>
        <td>
            <textarea name="comment" rows="5" cols="60"></textarea>
        </td>
        </tr>
        <tr>
        <td colspan="2" style="text-align: center">
        <input type="submit" name="submit" value="Submit" />
        </td>
        </tr>
     </table>
     </form>
     </body>
     </html>';

?>