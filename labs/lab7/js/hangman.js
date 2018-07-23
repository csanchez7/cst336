//VARIABLES
var selectedWord = "";
var selectedHint = "";
var board = [];
var remainingGuesses = 6;
var words = ["snake", "monkey", "beetle"];
// Creating an array of available letters
var alphabet = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 
                'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 
                'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];

//LISTENER
window.onload = startGame();

$(".letter").click(function(){
  console.log($(this).attr("id"));
});

//FUNCTIONS
function initBoard(){
    for (var letter in selectedWord){
        board.push("_");
    }
}

function startGame(){
    pickWord();
    initBoard();
    createLetters();
    updateBoard();
}

function pickWord(){
    var randomInt = Math.floor(Math.random() * words.length);
    selectedWord = words[randomInt];
}

//create the letters inside the letters div
function createLetters(){
    for (var letter of alphabet) {
        $("#letters").append("<button class='letter' id='" + letter + "'>" + letter + "</button>");
    }
}

function updateBoard(){
    for (var letter of board) {
        document.getElementById("word").innerHTML += letter + " ";
    }
}