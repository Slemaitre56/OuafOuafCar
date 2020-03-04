
$(function(){

    $(".arrowDown").mouseenter(function(){
      $("#hide").show();
    });
    $(".arrowDown").mouseleave(function(){
        $("#hide").hide();
      });

    $(".arrowUp").mouseenter(function(){
        $("#hideProprio").show();
        $(".infoTrajet").hide();
      });
      $(".arrowUp").mouseleave(function(){
        $("#hideProprio").hide();
        $(".infoTrajet").show();
      });
  });