$(document).ready(function(){
    
    var score = 0;
    var attempts = 0;
    var lastScore = 0;
    
    // $("#feedback").css("display","none");
    
    $("form").submit(function(event) {
        
        event.preventDefault(); //cancels current event (form submission)
        
        var answer1 = $("input[name='question1']").val().trim();
        var answer2 = $("input[name='question2']").val().trim();

        // Question 1
        if (answer1 == "4"){
            correctAnswer($("#question1-feedback"));
        }else{
            incorrectAnswer($("#question1-feedback"));
        }
        $("#question1-feedback").append("The answer is 4!");
        
        
        // Question 2
        if (answer2 == "5"){
            correctAnswer($("#question2-feedback"));
        }else{
            incorrectAnswer($("#question2-feedback"));
        }
        $("#question2-feedback").append("The answer is 5!");
        
        //hides submit button
        $("input[type='submit']").css("display","none");
        
        //displays score, last attempt, and number of attempts
        $("#score").append(score);
        $("#waiting").html("<img src='img/loading.gif' alt='submitting data' />");
        $("input[type='submit']").css("display","none");

        // Submits and stores score, retrieves average score
        $.ajax({
            type : "post",
            url  : "submitScores.php",            
            // dataType : "json",
            data : {"score":score},            
            success : function(data){
                // console.log(data);
                $("#prevScore").html(data.lastScore);
                $("#times").html(data.attempts);
                // $("#feedback").css("display","block");
                // $("#waiting").html("");
                // $("input[type='submit]").css("display","");
            },
            complete: function(data,status) { //optional, used for debugging purposes
            alert(status);
            }

        });//AJAX
        
        

    }); //formSubmit
    
    lastScore = score;
    
    //increments number of attempts
    attempts++;

    //Styles a question as answered correctly
    function correctAnswer(questionFeedback){
        questionFeedback.css("color","green");
        questionFeedback.html("Correct! ");
        score++;
    }

    //Styles a question as answered incorrectly
    function incorrectAnswer(questionFeedback){
        questionFeedback.css("color","red");
        questionFeedback.html("Incorrect! ");
    }

    
}); //documentReady 