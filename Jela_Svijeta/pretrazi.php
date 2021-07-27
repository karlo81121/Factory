<?php 

    $host = "localhost";
	$dbusername = "najjaciUser";
	$dbpassword = "ltdh-101fm8112";
	$dbname = "jela";

	$connection = new mysqli($host, $dbusername, $dbpassword, $dbname);

	if(mysqli_connect_error()){
		die('Neuspješno povezivanje ('.mysqli_connect_errno() .') '.mysqli_connect_error());
	}

    if(isset($_GET['tags'])){
        $pretrazi = $_GET['tags'];

    $sql = "SELECT * FROM jelo WHERE Tagovi LIKE '%$pretrazi%' ";

?>

    <br><br><br><br><br><br>

<?php

    $query = mysqli_query($connection, $sql) or die('Nije moguće pretražiti');

    $result = mysqli_query($connection, $sql);
    $resultCheck = mysqli_num_rows($result);

    $broj_objava = $_GET['broj_objava'];

    if($pretrazi == NULL){
        header('Location: prazan_unos.html');
    }

?>


<!DOCTYPE html>
<html>

    <head>

        <title>Želim nešto određeno...</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <link rel="stylesheet" href="pretrazi.css">

    </head>

<body>

    <div class="traka">
            <a href="početna.php"><i><h1>Jela Svijeta</h1></i></a>
    </div>


    <a href="početna.php"><button id="povratak">Povratak</button></a>


    <hr class="pocetna_linija">


    <div id="google_prevoditelj">

        <script type="text/javascript">

            function googleTranslateElementInit(){
                new google.translate.TranslateElement({pageLanguage: 'hr'}, 'google_prevoditelj');
            }

        </script>

        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    </div>


    <div id="kutija">

<?php

    $index = 1;


    if($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){


            if($index <= $broj_objava){

?>

                <i><h2><?php echo $index; ?>. <?php echo $row['Naziv']; ?></h2></i>
                <p><i><b>Kategorija: </b></i><?php echo  $row['Kategorija'] ?></p>

                <p><i><b>Broj sastojaka: </b></i><?php echo $row['Broj_sastojaka'] ?></p>

                <i><p><b>Sastojci: </b></i>
                    <?php echo $row['Sastojci']; ?>
                </p>

                <i><p><b>Opis: </b></i>
                    <?php echo $row['Opis']; ?>
                </p>

                <i><p><b>Tagovi: </b></i>
                    <?php echo $row['Tagovi']; ?>
                </p>

                <br>

                <hr class="granica">

                <br>
                    
<?php 

    $index++; 

            } 

        }
    }
    else {

?>

        <p>
            <?php echo 'Nema objavljenih jela.'; ?>
        </p>

<?php

        }
    }

?>

    </div>


</body>
</html>