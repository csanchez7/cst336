//VARIABLES
var selectedWord = "";
var selectedHint = "";
var board = [];
var remainingGuesses = 6;
var words = [{word:"snake", hint: "It's a reptile"},
            {word:"monkey", hint: "It's a mammal"},
            {word:"beetle", hint: "It's an insect"}];
// Creating an array of available letters
var alphabet = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 
                'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 
                'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
var alreadyGuessed;

if(sessionStorage.getItem('alreadyGuessed')){
    alreadyGuessed = JSON.parse(sessionStorage.getItem('alreadyGuessed'));
}else{
    alreadyGuessed = [];
}

//LISTENER
window.onload = startGame();

$(".letter").click(function(){
  checkLetter($(this).attr("id"));
  disableButton($(this));
});

$(".replayBtn").on("click", function() {
    location.reload();
});

$(".hintButton").on("click", function(){
    $(".hint").show();
    $(this).hide();
    disableButton($(this));
    remainingGuesses -= 1;
    updateMan();
});


//FUNCTIONS
function startGame(){
    pickWord();
    initBoard();
    createLetters();
    updateBoard();
    showGuessedWords();
}

function pickWord(){
    var randomInt = Math.floor(Math.random() * words.length);
    selectedWord = words[randomInt].word.toUpperCase();
    selectedHint = words[randomInt].hint;
}

function initBoard(){
    for (var letter in selectedWord){
        board.push("_");
    }
}

//create the letters inside the letters div
function createLetters(){
    for (var letter of alphabet) {
        $("#letters").append("<button class='letter' id='" + letter + "'>" + letter + "</button>");
    }
}

function updateBoard(){
    $("#word").empty();
    
    for (var i=0; i<board.length;i++) {
        $("#word").append(board[i] + " ");
    }
    
    $("#word").append("<br />");
    $("#word").append("<span class='hint'>Hint: " + selectedHint + "</span>");
}

function checkLetter(letter){
    var positions = new Array();
    
    for (var i=0;i < selectedWord.length;i++){
        console.log(selectedWord)
        if (letter == selectedWord[i]){
            positions.push(i);
        }
    }
    
    if (positions.length > 0) {
        updateWord(positions, letter);
        
        //check to see if this is a winning guess
        if(!board.includes('_')){
            endGame(true);
        }
        
    }else{
        remainingGuesses -= 1;
        updateMan();
    }
    if (remainingGuesses <= 0){
        endGame(false);
    }
}

function updateWord(positions, letter){
    for (var pos of positions){
        board[pos] = letter;
    }
    updateBoard();
}

//calculates and updates the image for the stick man
function updateMan(){
    $("#hangImg").attr("src","img/stick_" + (6-remainingGuesses) + ".png");
}

function endGame(win) {
    $("#letters").hide();
    
    if (win){
        $('#won').show();
        alreadyGuessed.push(selectedWord);
        sessionStorage.setItem('alreadyGuessed', JSON.stringify(alreadyGuessed));
    }else{
        $('#lost').show();
    }
}

function disableButton(btn){
    btn.prop("disabled",true);
    btn.attr("class", "btn btn-danger");
}

function showGuessedWords(){
    if(alreadyGuessed.length > 0){
        $("#alreadyGuessed").append("<h4>Guessed Words</h4>");
        for(word of alreadyGuessed) {
            $("#alreadyGuessed").append("<p>" + word + "</p>");
        }
    }
}