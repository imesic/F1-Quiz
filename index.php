<?php
    include ( 'db_connection.php' );
?>
<?php 
//Total broj pitanja
$query = 'SELECT * FROM questions';

//Get rezultat
$results = $dbc->query($query) or die ($dbc->error.__LINE__);
$total = $results->num_rows;


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
            <h2>Test Your F1 Knowledge</h2>
            <p>This is a multiple choice quiz to your knowledge of F1</p>
            <ul>
                <li>Number of Questions:<?php echo $total; ?> </li>
            </ul>
            <a href="questions.php?n=1" class="start-button">Start Quiz</a>
        </div>
    </main>
    <footer>
        <div class="container">
            Copyright &copy Ivan
        </div>
    </footer>

</body>
</html>
