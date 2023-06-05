$(document).ready(function(){
    var jdiv1 = $(".headiv1");
    var jdiv2 = $(".headiv2");
    var intervalId;

    function startToggle() {
        intervalId = setInterval(function() {
            jdiv1.slideToggle({ "left": "100%" }, 500);
            jdiv2.slideToggle({ "left": "0" }, 500);
        }, 5000);
      }
    
      function stopToggle() {
        clearInterval(intervalId);
      }
    
      jdiv1.hover(stopToggle, startToggle);
      jdiv2.hover(stopToggle, startToggle);

      startToggle();

    /*setInterval(function() {
        div1.slideToggle({ "left": "100%" }, 500);
        div2.slideToggle({ "left": "0" }, 500);
    }, 3000);
    $(".headiv1").hover(function(){
        $("this").stopToggle();
        $(".headiv2").stopToggle();},function(){
            $("this").startToggle();
            $(".headiv2").startToggle();
    });
    $(".headiv2").hover(function(){
        $("this").stopToggle();
        $(".headiv1").stopToggle();},function(){
            $("this").startToggle();
            $(".headiv1").startToggle();
    });*/
});

$(document).ready(function(){
    $(".headiv1").hover(function(){
        $(".leftslide1").show();
        $(".rightslide1").show();},function() {
            $(".leftslide1").hide();
            $(".rightslide1").hide();
    });
    $(".headiv2").hover(function(){
        $(".leftslide2").show();
        $(".rightslide2").show();},function() {
            $(".leftslide2").hide();
            $(".rightslide2").hide();
    });
    $(".leftslide1").click(function(){
        $(".headiv1").toggle();
        $(".headiv2").toggle();
    });
    $(".rightslide1").click(function(){
        $(".headiv1").toggle();
        $(".headiv2").toggle();
    });
    $(".leftslide2").click(function(){
        $(".headiv1").toggle();
        $(".headiv2").toggle();
    });
    $(".rightslide2").click(function(){
        $(".headiv1").toggle();
        $(".headiv2").toggle();
    });
    /*$(".div2").hover(
        function() {
          $(this).find(".text1").css("visibility", "visible");
        },
        function() {
          $(this).find(".text1").css("visibility", "hidden");
        }
      );*/
});