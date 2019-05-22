<?php require_once("function.php"); ?>

<?php

if(isset($_POST['submit'])){
	
	$movie = urlencode($_POST['movie']);

	$get = file_get_contents("https://www.omdbapi.com/?t=".$movie."&apikey=".$apikey."");
	
	$json = json_decode($get, true);
	
	//Uncomment to see all data and structure
	//echo "<pre>";
	//print_r($json);
	//echo "</pre>";
	
	
	$rotten = $json['Ratings']['1']['Value'];
	$tittle = $json['Title'];
	
	
	
	echo "Title :" .$tittle."<br/>";
	
	echo "Rotten Tomatoes Rating :" ;
	
	omdb_rotten($movie);

} 
?>



<form action="index.php" method= "POST">
Movie Name: <input type="text" name="movie">
<input type="submit" name="submit">
</form>
