
$(document).ready(function(){
  $("#logo2").mouseenter(function(){
        $(this).attr("src","images/hamburopen.jpg");
        $("#menu").slideDown();
      });
  // $("#logo2").click(function(){
        
  //     });
  $("#menu").mouseleave(function(){
      $(this).slideUp();
      $("#logo2").attr("src","images/hamburclose.jpg");
  });
 
});
  