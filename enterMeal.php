<?php

    $name = filter_input(INPUT_POST, 'name');
    $category = filter_input(INPUT_POST, 'category');
    $number_of_ingredients = filter_input(INPUT_POST, 'number_of_ingredients');
	$ingredients = filter_input(INPUT_POST, 'ingredients');
    $description = filter_input(INPUT_POST, 'description');
    $tags = filter_input(INPUT_POST, 'tag');
          
    include 'databaseConnection.php';

	$sql = "INSERT INTO jelo (naziv, kategorija, broj_sastojaka, sastojci, opis, tagovi) VALUES ('$name','$category','$number_of_ingredients','$ingredients','$description','$tags')";
				
    if($connection->query($sql)){
		header('Location: successfullyAddedMeal.html');
	}
	else{
		echo "Error: ".$sql."<br>".$connection->error;
	}

	$connection->close();

?>