$(document).ready(function(){

    var score = 0;

    $("form").submit(function(event) {
        
        //cancels current event (form submission)
        event.preventDefault();
        
        //Get answers
        var answer1 = $("input[name='question1']").val().trim();
        var answer2 = $("input[name='question2']:checked").val();

        
        //Checks if answers are correct
        // Question 1
        if(answer1 === "1994"){
            correctAnswer($("#question1-feedback"));
        }
        else{
            incorrectAnswer($("#question1-feedback"));
        }
        $("#question1-feedback").append("The answer is <strong>1994</strong>");
        
        
    }); //formSubmit
    
    //FUNCTIONS
    //Styles a question as answered correctly
    function correctAnswer(questionFeedback){
        questionFeedback.html("Correct! ");
        questionFeedback.addClass("correct");
        questionFeedback.removeClass("incorrect");
        score++;
    }

    //Styles a question as answered incorrectly
    function incorrectAnswer(questionFeedback){
        questionFeedback.html("Incorrect! ");
        questionFeedback.addClass("incorrect");
        questionFeedback.removeClass("correct");
    }
    
    
}); //documentReady       