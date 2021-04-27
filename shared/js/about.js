var top="";

$(document).ready(function(){	
    var targetOffset = $('#slide_panel').offset().top;
    $('.x_close').click(function() {
    $('#sec1,#sec2,#sec3,#sec4').slideUp(1000,"linear");   
    $('html,body').animate({scrollTop: targetOffset }, "fast");
            
    })
    });
    
    $(document).ready(function(){	
    var targetOffset = $('#sec1').offset().top;
    $('#sec1').hide();    
    $('.bnr1').click(function() {						   
    $('#sec1').slideDown(1000,"linear"); 
    $('#sec2,#sec3,#sec4').slideUp();  
    $('html,body').animate({scrollTop: targetOffset }, "fast");
    })
    });
    
   

    
    $(document).ready(function(){	
    var targetOffset = $('#sec2').offset().top;
    $('#sec2').hide();    
    $('.bnr3').click(function() {						   
    $('#sec2').slideDown(1000,"linear"); 
    $('#sec1,#sec3,#sec4').slideUp();  
    $('html,body').animate({scrollTop: targetOffset }, "fast");
             
    })
    });
    
    
    
    
    $(document).ready(function(){	
    var targetOffset = $('#sec3').offset().top;
    $('#sec3').hide();    
    $('.bnr2').click(function() {						   
    $('#sec3').slideDown(1000,"linear"); 
    $('#sec1,#sec2,#sec4').slideUp();  
    $('html,body').animate({scrollTop: targetOffset }, "fast");
             
    })
    });
    
    $(document).ready(function(){	
    var targetOffset = $('#sec4').offset().top;
    $('#sec4').hide();    
    $('.bnr4').click(function() {						   
    $('#sec4').slideDown(1000,"linear"); 
    $('#sec1,#sec2,#sec3').slideUp();  
    $('html,body').animate({scrollTop: targetOffset }, "fast");
             
    })
    });
    