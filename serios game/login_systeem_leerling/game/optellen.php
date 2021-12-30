<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welkom</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="game.css">

    <style>
    body {
        font: 14px sans-serif;
        text-align: center;
    }
    </style>
</head>

<body onload="NextQuestion(0)">
    <h1 class="my-5">Hoi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b> begint hier je optellen QUIZ
    </h1>

    <main>
        <!-- creating a modal for when quiz ends -->
        <div class="modal-container" id="score-modal">

            <div class="modal-content-container">

                <h1>Gefeliciteerd, Quiz voltooid.</h1>

                <div class="grade-details">
                    <p>Verkeerde antwoorden: <span id="wrong-answers"></span></p>
                    <p>Juiste antwoorden: <span id="right-answers"></span></p>
                    <p>Cijfer : <span id="grade-percentage"></span>%</p>
                    <p><span id="remarks"></span></p>
                </div>

                <div class="modal-button-container">
                    <button onclick="closeScoreModal()">Doorgaan </button>
                </div>

            </div>
        </div>
        <!-- end of modal of quiz details-->

        <div class="game-quiz-container">

            <div class="game-details-container">
                <h1>Score : <span id="player-score"></span> / 10</h1>
                <h1> Vragen : <span id="question-number"></span> / 10</h1>
            </div>

            <div class="game-question-container">
                <h1 id="display-question"></h1>
            </div>

            <div class="game-options-container">

                <div class="modal-container" id="option-modal">

                    <div class="modal-content-container">
                        <h1>Kies een optie </h1>

                        <div class="modal-button-container">
                            <button onclick="closeOptionModal()">Doorgaan</button>
                        </div>

                    </div>

                </div>

                <span>
                    <input type="radio" id="option-one" name="option" class="radio" value="optionA" />
                    <label for="option-one" class="option" id="option-one-label"></label>
                </span>


                <span>
                    <input type="radio" id="option-two" name="option" class="radio" value="optionB" />
                    <label for="option-two" class="option" id="option-two-label"></label>
                </span>


                <span>
                    <input type="radio" id="option-three" name="option" class="radio" value="optionC" />
                    <label for="option-three" class="option" id="option-three-label"></label>
                </span>


                <span>
                    <input type="radio" id="option-four" name="option" class="radio" value="optionD" />
                    <label for="option-four" class="option" id="option-four-label"></label>
                </span>


            </div>

            <div class="next-button-container">
                <button onclick="handleNextQuestion()">Volgende vraag</button>
            </div>

        </div>
    </main>
    <script src="optellen.js"></script>
</body>

</html>