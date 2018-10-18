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
            <h2>Add A Question</h2>
            <form method="post" action="add.php">
                <p>
                    <label>Question Number: </label>
                    <input type="number" name="question_number" />
                </p>
                <p>
                    <label>Question Text: </label>
                    <input type="text" name="question_text" />
                </p>
                <p>
                    <label>Choice #1: </label>
                    <input type="text" name="choice1" />
                </p>
                <p>
                    <label>Choice #2: </label>
                    <input type="text" name="choice2" />
                </p>
                <p>
                    <label>Choice #3: </label>
                    <input type="text" name="choice3" />
                </p>
                <p>
                    <label>Choice #4: </label>
                    <input type="text" name="choice4" />
                </p>
                <p>
                    <label>Choice #5: </label>
                    <input type="text" name="choice5" />
                </p>
                <p>
                    <label>Correct Choice Number: </label>
                    <input type="number" name="correct_choice" />
                </p>
                <p>
                <input type="submit" name="" value="Submit">
                <p/>

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
