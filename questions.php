<?php 
    include ( 'db_connection.php' ); 
?>
<?php
    //Postavljanje broja pitanja
    $number = (int) $_GET['n'];

    //Get pitanje
    $query = "SELECT * FROM questions 
            WHERE question_number = $number";

    //Get rezultat
    $result = $dbc->query($query) or die ($dbc->error.__LINE__);
    $question = $result->fetch_assoc();



    //Get izbor
    $query = "SELECT * FROM choices 
            WHERE question_number = $number";

    //Get rezultat
    $choices = $dbc->query($query) or die ($dbc->error.__LINE__);
    

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Quiz</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
    <header>
        <div class="container">
            <h1>Formula 1 Quiz</h1>
        </div>
    </header>
    <main>
        <div class="container">
           <div class="current-question">Question 1 of 5</div>
           <p class="question">
               <?php echo $question['text']; ?>
           </p>
           <form method="post" action="proces.php">
                <ul class="choices">
                    <?php while ($row = $choices->fetch_assoc()) : ?>
                        <li><input type="radio" name="choice" value="<?php echo $row['id']; ?>" /><?php echo $row['text']; ?></li>
                    <?php endwhile; ?>
                </ul>
               <input type="submit" value="Submit" />
           </form>
        </div>
    </main>
    <footer>
        <div class="container">
            Copyright &copy Ivan
        </div>
    </footer>

</body>
</html>
