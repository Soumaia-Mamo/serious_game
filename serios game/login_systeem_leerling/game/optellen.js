const questions = [
    {
        question: "10 + 5 =",
        optionA: "5",
        optionB: "20",
        optionC: "51",
        optionD: "15",
        correctOption: "optionD"
    },

    {
        question: "4 + 3 + 5  =",
        optionA: "22",
        optionB: "12",
        optionC: "9",
        optionD: "10",
        correctOption: "optionB"
    },

    {
        question: " 20 + 20  = ",
        optionA: "22",
        optionB: "26",
        optionC: "12",
        optionD: "40",
        correctOption: "optionD"
    },

    {
        question: "30 + 14  =",
        optionA: "45",
        optionB: "34",
        optionC: "44",
        optionD: "54",
        correctOption: "optionC"
    },

    {
        question: "10 + 52 + 2  =",
        optionA: "44",
        optionB: "34",
        optionC: "13",
        optionD: "64",
        correctOption: "optionD"
    },

    {
        question: "80 + 2 + 12  =",
        optionA: " 94 ",
        optionB: "84",
        optionC: "100 ",
        optionD: "110",
        correctOption: "optionA"
    },

    {
        question: " 100 + 50 = ",
        optionA: "50",
        optionB: "135",
        optionC: "150",
        optionD: "200",
        correctOption: "optionC"
    },

    {
        question: "5 + 4 + 1 + 2 =",
        optionA: "12",
        optionB: "22",
        optionC: "9",
        optionD: "10",
        correctOption: "optionA"
    },

    {
        question: "8 + 8 + 8 =",
        optionA: "28",
        optionB: "20",
        optionC: "16",
        optionD: "24",
        correctOption: "optionD"
    },

    {
        question: "7 + 10 + 3 = ",
        optionA: "30",
        optionB: "15",
        optionC: "10",
        optionD: "20",
        correctOption: "optionD"
    },

    {
        question: "5 + 5 + 2 =",
        optionA: "10",
        optionB: "25",
        optionC: "12",
        optionD: "22",
        correctOption: "optionC"
    },

    {
        question: "10 + 10 + 30 =",
        optionA: "50",
        optionB: "45",
        optionC: "40",
        optionD: "60",
        correctOption: "optionA"
    },


    {
        question: " 40 + 5 + 1 = ",
        optionA: "49",
        optionB: "46",
        optionC: "40",
        optionD: "36",
        correctOption: "optionB"
    },

    {
        question: "100 + 50 = ",
        optionA: "50",
        optionB: "200",
        optionC: "130",
        optionD: "150",
        correctOption: "optionD"
    },

    {
        question: "40 + 5 + 1 + 1 =",
        optionA: "47",
        optionB: "35",
        optionC: "45",
        optionD: "16",
        correctOption: "optionA"
    },

    {
        question: "19 + 2 + 1 + 2 = ",
        optionA: "10",
        optionB: "30",
        optionC: "24",
        optionD: "37",
        correctOption: "optionC"
    },

    {
        question: "5 + 5 + 5 + 5 =",
        optionA: "20",
        optionB: "25",
        optionC: "15",
        optionD: "10",
        correctOption: "optionA"
    },

    {
        question: "10 + 5 + 9 = ",
        optionA: "10",
        optionB: "15",
        optionC: "24",
        optionD: "20",
        correctOption: "optionC"
    },

    { 
        question: " 6 + 6 = ",
        optionA: "20",
        optionB: "13",
        optionC: "10",
        optionD: "12",
        correctOption: "optionD"
    },

    {
        question: "1 + 3 + 5 + 1 = ",
        optionA: "10",
        optionB: "11",
        optionC: "9",
        optionD: "7",
        correctOption: "optionA"
    },

    {
        question: "5 + 5 + 30 + 5 =",
        optionA: "60",
        optionB: "35",
        optionC: "40",
        optionD: "45",
        correctOption: "optionD"
    },

    {
        question: "50 + 1 + 4 = ",
        optionA: "41",
        optionB: "55",
        optionC: "60",
        optionD: "45",
        correctOption: "optionB"
    },

    {
        question: "10 + 9 + 1 + 5 =",
        optionA: "10",
        optionB: "25",
        optionC: "20",
        optionD: "30",
        correctOption: "optionB"
    },

    {
        question: "5 + 10 + 3 + 2 =",
        optionA: "10",
        optionB: "24",
        optionC: "20",
        optionD: "22",
        correctOption: "optionC"
    },

    {
        question: "10 + 10 + 8 =",
        optionA: "98",
        optionB: "30",
        optionC: "28",
        optionD: "36",
        correctOption: "optionC"
    }

]


let shuffledQuestions = [] 

function handleQuestions() { 
    
    while (shuffledQuestions.length <= 9) {
        const random = questions[Math.floor(Math.random() * questions.length)]
        if (!shuffledQuestions.includes(random)) {
            shuffledQuestions.push(random)
        }
    }
}


let questionNumber = 1 
let wrongAttempt = 0 
let indexNumber = 0 


function NextQuestion(index) {
    handleQuestions()
    const currentQuestion = shuffledQuestions[index]
    document.getElementById("question-number").innerHTML = questionNumber
    document.getElementById("player-score").innerHTML = playerScore
    document.getElementById("display-question").innerHTML = currentQuestion.question;
    document.getElementById("option-one-label").innerHTML = currentQuestion.optionA;
    document.getElementById("option-two-label").innerHTML = currentQuestion.optionB;
    document.getElementById("option-three-label").innerHTML = currentQuestion.optionC;
    document.getElementById("option-four-label").innerHTML = currentQuestion.optionD;

}


function checkForAnswer() {
    const currentQuestion = shuffledQuestions[indexNumber] 
    const currentQuestionAnswer = currentQuestion.correctOption 
    const options = document.getElementsByName("option"); 
    let correctOption = null

    options.forEach((option) => {
        if (option.value === currentQuestionAnswer) {
           
            correctOption = option.labels[0].id
        }
    })

    if (options[0].checked === false && options[1].checked === false && options[2].checked === false && options[3].checked == false) {
        document.getElementById('option-modal').style.display = "flex"
    }

    options.forEach((option) => {
        if (option.checked === true && option.value === currentQuestionAnswer) {
            document.getElementById(correctOption).style.backgroundColor = "green"
            playerScore++ 
            indexNumber++ 
            setTimeout(() => {
                questionNumber++
            }, 1000)
        }

        else if (option.checked && option.value !== currentQuestionAnswer) {
            const wrongLabelId = option.labels[0].id
            document.getElementById(wrongLabelId).style.backgroundColor = "red"
            document.getElementById(correctOption).style.backgroundColor = "green"
            wrongAttempt++
            indexNumber++
           
            setTimeout(() => {
                questionNumber++
            }, 1000)
        }
    })
}



function handleNextQuestion() {
    checkForAnswer() 
    unCheckRadioButtons()
   
    setTimeout(() => {
        if (indexNumber <= 9) {

            NextQuestion(indexNumber)
        }
        else {
            handleEndGame()
        }
        resetOptionBackground()
    }, 1000);
}


function resetOptionBackground() {
    const options = document.getElementsByName("option");
    options.forEach((option) => {
        document.getElementById(option.labels[0].id).style.backgroundColor = ""
    })
}

function unCheckRadioButtons() {
    const options = document.getElementsByName("option");
    for (let i = 0; i < options.length; i++) {
        options[i].checked = false;
    }
}


function handleEndGame() {
    let remark = null
    let remarkColor = null

    if (playerScore <= 3) {
        remark = "Blijf oefenen ."
        remarkColor = "red"
    }
    else if (playerScore >= 4 && playerScore < 7) {
        remark = "je kunt het beter."
        remarkColor = "orange"
    }
    else if (playerScore >= 7) {
        remark = "Uitstekend, ga zo door."
        remarkColor = "green"
    }
    const playerGrade = (playerScore / 10) * 100

    document.getElementById('remarks').innerHTML = remark
    document.getElementById('remarks').style.color = remarkColor
    document.getElementById('grade-percentage').innerHTML = playerGrade
    document.getElementById('wrong-answers').innerHTML = wrongAttempt
    document.getElementById('right-answers').innerHTML = playerScore
    document.getElementById('score-modal').style.display = "flex"

}

function closeScoreModal() {
    questionNumber = 1
    playerScore = 0
    wrongAttempt = 0
    indexNumber = 0
    shuffledQuestions = []
    NextQuestion(indexNumber)
    document.getElementById('score-modal').style.display = "none"
}

function closeOptionModal() {
    document.getElementById('option-modal').style.display = "none"
}