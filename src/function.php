<?php require_once("p@ssword.php"); ?>

<?php
function omdb_rotten($movie){

	global $apikey;
	
	$get = file_get_contents("https://www.omdbapi.com/?t=".$movie."&apikey=".$apikey."");
	$json = json_decode($get, true);
	$rotten = $json['Ratings']['1']['Value'];

	echo $rotten;

}

?>

