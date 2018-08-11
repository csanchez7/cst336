$( document ).ready(function() {
    $('p').hide();
    
    var api = "https://api.openweathermap.org/data/2.5/weather?&units=imperial&q=";
    var apiKey = "&APPID=b80cd089388b17de28719cd340b57e99";
    
    $("form").submit(function(){
        $('.query').empty();
        event.preventDefault();
        var city = $("#search-term").val();
        var url = api+city+apiKey;
        console.log(url)
        ajaxCall(url);
        $('p').show();
        event.preventDefault();
    });
});

function ajaxCall(url){
    var $query = $('.query'); 
    
    $.ajax({
      type: 'GET',
      url: url,
      success: function(data){
            $query.append('<h4 id="current">The temperature in '+ data.name +' is '+ Math.round(data.main.temp) +'°F.</h4>');
            $("#current").css('color','black');
            $query.append('<h4 id="high">The high today will be '+ Math.round(data.main.temp_max) +'°F.</h4>');
            $("#high").css('color','#fc4b2f');
            $query.append('<h4 id="low">The low today will be '+ Math.round(data.main.temp_min) +'°F.</h4>');
            $("#low").css('color','#35bfff');
      },
      error: function(){
          $query.append('<h4 id="error">city not found</h4>');
            $("#error").css('color','black');
      }
    });
}
