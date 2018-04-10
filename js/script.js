$(function(){
    var qbutton = document.getElementById('ques');
    var quesbox = $('#ques');
    var answbox = $('#answ');
    qbutton.onclick = function(){   
        
        //go to box
        var xx = document.getElementById("ques").offsetTop;        
        var qbox = document.getElementById("qbox");
        qbox.scrollTop = xx-10;
        
        //go to box
        var yy = document.getElementById("answ").offsetTop;  
        var abox = document.getElementById("abox");
        abox.scrollTop = yy-10;

        //change color
        quesbox.css("background-color", "#fac200");
        answbox.css("background-color", "#fac200");
        quesbox.css("color", "white");    
        $("#answ p").css("color", "white");        
        $("#answ h6").css("color", "white");
    }

});

