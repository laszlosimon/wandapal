$(function() {




$(".half+.half").mouseenter(function(){
    $(".half+.half")
        .css({'opacity':'1',
              'background-size': 'auto 110%',
              'transition' : 'opacity 1s ease-in-out',
              'transition':'background-size .7s ease-in-out'
             })
    

});






$(".half+.half").mouseleave(function(){
    $(".half+.half").css({'opacity':'0.7','background-size': 'auto 100%'})
    
    ;
                    
});





$(".red").mouseenter(function(){
    $(".red").css({'opacity':'1',
                   'background-size': 'auto 110%',
                   'transition' : 'opacity 2s ease-in-out',
                   'transition':'background-size .7s ease-in-out'
                   });
  
    
    
    
});
  



$(".red").mouseleave(function(){
    $(".red").css({'opacity':'0.7','background-size': 'auto 100%'});
});




});


