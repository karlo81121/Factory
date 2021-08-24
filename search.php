<?php 

    include 'databaseConnection.php';

    if(isset($_GET['tags'])){
        $search = $_GET['tags'];

    $sql = "SELECT * FROM jelo WHERE Tagovi LIKE '%$search%' ";

?>

    <br><br><br><br><br><br>

<?php

    $query = mysqli_query($connection, $sql) or die('Cannot search.');

    $result = mysqli_query($connection, $sql);
    $resultCheck = mysqli_num_rows($result);

    $number_of_posts = $_GET['number_of_posts'];

    if($search == NULL){
        header('Location: emptyInput.html');
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

    <div class="line">
            <a href="index.php"><i><h1>Jela Svijeta</h1></i></a>
    </div>


    <a href="index.php"><button id="comeback">Povratak</button></a>


    <hr class="start_line">


    <div id="box">

<?php

    $index = 1;


    if($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){


            if($index <= $number_of_posts){

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