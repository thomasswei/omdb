<?php require_once("function.php"); ?>
<?php

while($movie!="exit"){
	echo "Enter Movie Name: ";
	$movie = urlencode(trim(fgets(STDIN,1024)));

	if ($movie == "exit"){
		echo"goodbye \n";

	}else{
		$get = file_get_contents("https://www.omdbapi.com/?t=".$movie."&apikey=".$apikey."");
		$json = json_decode($get, true);
			
		$rotten = $json['Ratings']['1']['Value'];
		$tittle = $json['Title'];
		
		echo "Title :" .$tittle."\n";
		echo "Rotten Tomatoes Rating :" ;
		
		omdb_rotten($movie);
		echo "\n\n";
	}
}

?>
