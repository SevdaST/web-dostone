
$(document).ready(function(){
  $("#logo").mouseenter(function(){
        $("#menu").slideDown();
      });
  $("#menu").mouseleave(function(){
      $(this).slideUp();
  });
 
});
  