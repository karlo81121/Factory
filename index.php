<?php

    include 'databaseConnection.php';

?>


<!DOCTYPE html>
<html>

    <head>

        <title>Jela Svijeta</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <link rel="stylesheet" href="index.css">

    </head>

<body>


    <div class="line">
        <a href="index.php"><i><h1>Jela Svijeta</h1></i></a>
    </div>


    <form action="search.php" method="GET">
        <input type="text" name="tags" id="tags" placeholder="Želim nešto određeno... ">
        <label for="number_of_posts">Prikaz po stranici: </label>
        <input type="text" name="number_of_posts" id="number_of_posts" placeholder="Broj" value="5">
        <input type="submit" name="search" id="search" value="Pretraži">
    </form>


    <a href="createMeal.html">
        <button id="add_meal">Dodaj jelo</button>
    </a>


    <hr class="start_line">


    <div id="box">

<?php

    $index = 1;

    $sql = "SELECT * FROM jelo;"; 
    $result = mysqli_query($connection, $sql);
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

            <hr class="border">

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