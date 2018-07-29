//FUNCTIONS
function answer1(){
    var response = document.createElement('DIV');
    $(response).addClass('question1');

    if (($("#answer1").val())==4){
        $(response).append();
    }else{
        $(response).append('Incorrect')
    }
    
}

function answer2(){
    var response = document.createElement('text');
    $(response).addClass('response1');
    
    var answer = $("#answer1").val();
    if (answer==5)
    $(response).append('Correct');
    else
    $(response).append('Incorrect')
}


//LISTENER
$("form").on("submit", function() {
    alert("form submitted")
    answer1();
    answer2();
    });
