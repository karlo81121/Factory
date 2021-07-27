<?php

    $dbhost = "localhost";
    $dbusername = "najjaciUser";
    $dbpassword = "ltdh-101fm8112";
    $dbname = "jela";

    $con = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname) or die("Nije moguće povezati se na server.");

?>


<!DOCTYPE html>
<html>

    <head>

        <title>Jela Svijeta</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <link rel="stylesheet" href="početna.css">

    </head>

<body>


    <div class="traka">
        <a href="početna.php"><i><h1>Jela Svijeta</h1></i></a>
    </div>


    <form action="pretrazi.php" method="GET">
        <input type="text" name="tags" id="tags" placeholder="Želim nešto određeno... ">
        <label for="broj_objava">Prikaz po stranici: </label>
        <input type="text" name="broj_objava" id="broj_objava" placeholder="Broj" value="5">
        <input type="submit" name="pretrazi" id="pretrazi" value="Pretraži">
    </form>


    <a href="kreiranje.html">
        <button id="dodaj_jelo">Dodaj jelo</button>
    </a>

    <div id="google_prevoditelj">

        <script type="text/javascript">

            function googleTranslateElementInit(){
                new google.translate.TranslateElement({pageLanguage: 'hr'}, 'google_prevoditelj');
            }

        </script>

        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    </div>


    <hr class="pocetna_linija">


    <div id="kutija">

<?php

    $index = 1;

    $sql = "SELECT * FROM jelo;"; 
    $result = mysqli_query($con, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){

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
    else {

?>

            <p><?php echo 'Nema objavljenih jela.'; ?></p>

<?php

         }

?>  

    </div>

</body>

</html>