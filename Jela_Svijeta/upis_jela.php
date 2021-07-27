<?php

    $naziv = filter_input(INPUT_POST, 'naziv');
    $kategorija = filter_input(INPUT_POST, 'kategorija');
    $brojsastojaka = filter_input(INPUT_POST, 'broj_sastojaka');
	$sastojci = filter_input(INPUT_POST, 'sastojci');
    $opis = filter_input(INPUT_POST, 'opis');
    $tagovi = filter_input(INPUT_POST, 'tag');
          
    $host = "localhost";
	$dbusername = "najjaciUser";
	$dbpassword = "ltdh-101fm8112";
	$dbname = "jela";

	$connection = new mysqli($host, $dbusername, $dbpassword, $dbname);

		if(mysqli_connect_error()){
			die('Neuspješno povezivanje ('.mysqli_connect_errno() .') '.mysqli_connect_error());
		}
		else {
			$sql = "INSERT INTO jelo (naziv, kategorija, broj_sastojaka, sastojci, opis, tagovi) VALUES ('$naziv','$kategorija','$brojsastojaka','$sastojci','$opis','$tagovi')";
				
            if($connection->query($sql)){
				header('Location: uspjesno_dodano_jelo.html');
			}
			else{
				echo "Error: ".$sql."<br>".$connection->error;
			}

			$connection->close();
		}

?>