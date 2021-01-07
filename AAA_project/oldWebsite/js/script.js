$(document).ready(function(){
  $("#modalShow").click(function(){
    $("#emailformmodal").css("display","block");
}); //end show modal
 $("#modalClose").click(function(){
    $("#emailformmodal").css("display","none");
});  //end close modal
/* window.addEventListener('mouseup',function(){
       var box = document.getElementById('emailformmodal');
     var box2 = document.getElementsByTagName('input');

       if(event.target != box && event.target != box2 && event.target.parentNode != box){
      $("#emailformmodal").css("display","none");
     }
   });*/
   //end click out of window

});//end of document ready
