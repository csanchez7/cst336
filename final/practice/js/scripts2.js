var question1;
var question2;

$(document).ready(function(){
    
    question1 = document.createElement("DIV");
    $(question1).attr('id', 'question1-feedback');
    $("#question1-feedback").css({
        "background-color":"yellow",
        width:"300px"
    });

    $("form").submit(function(event) {
        
        event.preventDefault(); //cancels current event (form submission)
        
        var answer1 = $("input[name='question1']").val().trim();
        console.log(answer1);
        
        if (answer1 === "4"){
            correctAnswer($("#question1-feedback"));
        }else{
            incorrectAnswer($("#question1-feedback"));
        }
        $("#question1-feedback").append("The answer is 4!");
        
    }); //formSubmit

    //Styles a question as answered correctly
    function correctAnswer(questionFeedback){
        questionFeedback.css("color","green");
        questionFeedback.html("Correct!");
        score++;
    }

    //Styles a question as answered incorrectly
    function incorrectAnswer(questionFeedback){
        questionFeedback.css("color","red");
        questionFeedback.html("Incorrect!");
    }
    

    
}); //documentReady 