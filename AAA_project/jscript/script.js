$(document).ready(function(){
var menuClick = 0;
$("#menu").click(function(){
    if (menuClick == 0 )
        {
    $("#navDownfall1").css("display","block");
            menuClick=1;
        }
    else
        {
            $("#navDownfall1").css("display","none");
            menuClick=0;
        }
});//menu clicking function
$("#moveToContact").click(function(){
    
        $("#navDownfall1").css("display","none");
        menuClick=0;
    
    
});

    
});//end of document ready
