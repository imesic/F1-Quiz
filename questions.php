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
           <p class="question">Which driver leads by winning titles ?</p>
           <form method="post" action="proces.php">
                <ul class="choices">
                    <li><input type="radio" name="choice" value="1">Ayrton Senna</li>
                    <li><input type="radio" name="choice" value="1">Juan Manuel Fangio</li>
                    <li><input type="radio" name="choice" value="1">Michael Schumacher</li>
                    <li><input type="radio" name="choice" value="1">Lewis Hamilton</li>
                    <li><input type="radio" name="choice" value="1">Jackie Stewart</li>
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
