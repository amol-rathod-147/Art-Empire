const questions = [
    {
        question: "Which of the following are not a type of brush?",
        optionA: "Filbert Brush",
        optionB: "Chair Brush",
        optionC: "Egbert Brush  ",
        optionD: "Flat Brush",
        correctOption: "optionB"
    },

    {
        question: "Which of the following is not a art tool? ",
        optionA: "Brush",
        optionB: "Paints",
        optionC: "Knife",
        optionD: "Bottle",
        correctOption: "optionD"
    },

    {
        question: "In ……………. paintbrushes, both the handle and the bristles are rounded.",
        optionA: "Fan Brush  ",
        optionB: "Angular Brush  ",
        optionC: "Round Brush ",
        optionD: "Bright Brush",
        correctOption: "optionC"
    },

    {
        question: "Many artists rely on which kind of brushes for touching up their finished artwork.",
        optionA: "Pointed Round Brush  ",
        optionB: "Filbert Brush  ",
        optionC: "Angular Brush ",
        optionD: "Wash Brush",
        correctOption: "optionA"
    },

    {
        question: "A ……………..looks square, and most tend to have medium or long hairs. It’s perfect when you need to cover a lot of space and more control than a wash brush provides.",
        optionA: "Bright Brush  ",
        optionB: "Wash Brush ",
        optionC: "Flat Brush  ",
        optionD: "square Brush",
        correctOption: "optionC"
    },

    {
        question: " Which of the following brush is the alternative to the flat brush.?",
        optionA: "Bright Brush  ",
        optionB: "Filbert Brush ",
        optionC: "Fan Brush",
        optionD: "square Brush",
        correctOption: "optionC"
    },

    {
        question: "Which of the following are a type of pencils? ?",
        optionA: "Carbon pencil  ",
        optionB: "Charcoal Pencil ",
        optionC: "graphite pencil",
        optionD: "All of the Mention",
        correctOption: "optionD"
    },

    {
        question: " Which of the following pencil is similar to the ballpoint pen ?",
        optionA: "Carpenter Pencil  ",
        optionB: "Mechanical Pencil ",
        optionC: "Charcoal Pencil  ",
        optionD: "Watercolor Pencil",
        correctOption: "optionB"
    },

    {
        question: "……………….. are made from colored pastels, chalk, and charcoal with an oil or wax-based core that contains binding agents, additives, and pigments.",
        optionA: "Watercolor Pencil  ",
        optionB: "Wax pencil ",
        optionC: "markers  ",
        optionD: "colored pencils or crayons",
        correctOption: "optionD"
    },

    {
        question: "Neon night paint is referred to the which of the following paint ?",
        optionA: "Acrylic Paint  ",
        optionB: "Body Paint ",
        optionC: "Blacklight Paint ",
        optionD: "Spray Paint",
        correctOption: "optionC"
    },

    {
        question: "One of the advantage of Fabric Paint is.?",
        optionA: "It create custom designs and patterns.",
        optionB: "It will fade easily.",
        optionC: "It is fast drying Paint",
        optionD: "None of these",
        correctOption: "optionA"
    },

    {
        question: "Which of the following paint is not reactivated with water once it has dried?",
        optionA: "Watercolor ",
        optionB: "Gouache Paint  ",
        optionC: "Ink Wash Paint ",
        optionD: "Oil Paint",
        correctOption: "optionB"
    },

    {
        question: " Which of the following paint is famous for the wall painting and car painting?",
        optionA: "Spray Paint  ",
        optionB: "Oil Paint ",
        optionC: "Pastel Paint  ",
        optionD: "Crayons",
        correctOption: "optionA"
    },

    {
        question: "Which of the following is not a type of knife?",
        optionA: "Spatula",
        optionB: "scraper ",
        optionC: "curved blade",
        optionD: "cutter",
        correctOption: "optionD"
    },

    {
        question: " ……………… that is used for scraping, lifting and removing paint from the canvas.",
        optionA: "Curved Blade  ",
        optionB: "Throwel",
        optionC: "Canvas Scraper  ",
        optionD: "Serrated Edge",
        correctOption: "optionC"
    },

    {
        question: "Which of the following are a traditional type of arts?",
        optionA: "Warli Painting   ",
        optionB: "Pattachitra Painting  ",
        optionC: "Kalamkari Painting  ",
        optionD: "All of the Mention.",
        correctOption: "optionD"
    },

    {
        question: "Mysore Painting is the traditional Painting of which of the following state?",
        optionA: "Karnataka",
        optionB: "Rajasthan",
        optionC: "Gujrat  ",
        optionD: "West Bengal",
        correctOption: "optionA"
    },

    {
        question: "Rajasthan state’s art is?",
        optionA: "Mughal Painting   ",
        optionB: "cheriyal scrolls  ",
        optionC: "Rajput Painting   ",
        optionD: "Pichwai Painting",
        correctOption: "optionC"
    },

    {
        question: "Abstract art is also called as ........ ?",
        optionA: "Cartoon Art  ",
        optionB: "Zental Art ",
        optionC: "Nonobjective Art  ",
        optionD: "Abstract Art",
        correctOption: "optionC"
    },

    {
        question: " Which of the following are a type of drawing ?",
        optionA: "Mandala Art  ",
        optionB: "Sand Art",
        optionC: "Zental Art ",
        optionD: "Abstract Art",
        correctOption: "optionA"
    },



]


let shuffledQuestions = [] //empty array to hold shuffled selected questions

function handleQuestions() { 
    //function to shuffle and push 10 questions to shuffledQuestions array
    while (shuffledQuestions.length <= 9) {
        const random = questions[Math.floor(Math.random() * questions.length)]
        if (!shuffledQuestions.includes(random)) {
            shuffledQuestions.push(random)
        }
    }
}


let questionNumber = 1
let playerScore = 0  
let wrongAttempt = 0 
let indexNumber = 0

// function for displaying next question in the array to dom
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
    const currentQuestion = shuffledQuestions[indexNumber] //gets current Question 
    const currentQuestionAnswer = currentQuestion.correctOption //gets current Question's answer
    const options = document.getElementsByName("option"); //gets all elements in dom with name of 'option' (in this the radio inputs)
    let correctOption = null

    options.forEach((option) => {
        if (option.value === currentQuestionAnswer) {
            //get's correct's radio input with correct answer
            correctOption = option.labels[0].id
        }
    })
   
    //checking to make sure a radio input has been checked or an option being chosen
    if (options[0].checked === false && options[1].checked === false && options[2].checked === false && options[3].checked == false) {
        document.getElementById('option-modal').style.display = "flex"
    }

    //checking if checked radio button is same as answer
    options.forEach((option) => {
        if (option.checked === true && option.value === currentQuestionAnswer) {
            document.getElementById(correctOption).style.backgroundColor = "green"
            playerScore++
            indexNumber++
            //set to delay question number till when next question loads
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
            //set to delay question number till when next question loads
            setTimeout(() => {
                questionNumber++
            }, 1000)
        }
    })
}



//called when the next button is called
function handleNextQuestion() {
    checkForAnswer()
    unCheckRadioButtons()
    //delays next question displaying for a second
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

//sets options background back to null after display the right/wrong colors
function resetOptionBackground() {
    const options = document.getElementsByName("option");
    options.forEach((option) => {
        document.getElementById(option.labels[0].id).style.backgroundColor = ""
    })
}

// unchecking all radio buttons for next question(can be done with map or foreach loop also)
function unCheckRadioButtons() {
    const options = document.getElementsByName("option");
    for (let i = 0; i < options.length; i++) {
        options[i].checked = false;
    }
}

// function for when all questions being answered
function handleEndGame() {
    let remark = null
    let remarkColor = null

    // condition check for player remark and remark color
    if (playerScore <= 3) {
        remark = "Bad Grades, Keep Practicing."
        remarkColor = "red"
    }
    else if (playerScore >= 4 && playerScore < 7) {
        remark = "Average Grades, You can do better."
        remarkColor = "orange"
    }
    else if (playerScore >= 7) {
        remark = "Excellent, Keep the good work going."
        remarkColor = "green"
    }
    const playerGrade = (playerScore / 10) * 100

    //data to display to score board
    document.getElementById('remarks').innerHTML = remark
    document.getElementById('remarks').style.color = remarkColor
    document.getElementById('grade-percentage').innerHTML = playerGrade
    document.getElementById('wrong-answers').innerHTML = wrongAttempt
    document.getElementById('right-answers').innerHTML = playerScore
    document.getElementById('score-modal').style.display = "flex"

}

//closes score modal and resets game
function closeScoreModal() {
    questionNumber = 1
    playerScore = 0
    wrongAttempt = 0
    indexNumber = 0
    shuffledQuestions = []
    NextQuestion(indexNumber)
    document.getElementById('score-modal').style.display = "none"
}

//function to close warning modal
function closeOptionModal() {
    document.getElementById('option-modal').style.display = "none"
}