jQuery(document).ready(function() {

    $(".navMenu a").click(function(e){
        function hideMenu(){
            $(".mainMenu").css("left", "-300px");
            $(".mainMenu").animate({right:'50'}, 300);
        }
        $("#menuIcon").show();
        setTimeout(hideMenu, 300);
        e.preventDefault();
        var href = $(this).attr('href');
        $("#mainPage").load(href + "#mainPage");
    
    });
    
    
	$("#menuIcon").click(function(){
        $(".mainMenu").css("left","0px");
        function showMenu(){
            $(".mainMenu").css("-webkit-clip-path", "polygon(0 0, 100% 0, 100% 100%, 0% 100%)");
            $(".mainMenu").animate({right:'-100'}, 300);
           
        }
         $("#menuIcon").hide();
        setTimeout(showMenu, 100);
    });
    
    $("#close").click(function(){
        $(".mainMenu").css("-webkit-clip-path", "polygon(0 0, 0% 0, 100% 100%, 0% 100%)");
        function hideMenu(){
            $(".mainMenu").css("left", "-300px");
            $(".mainMenu").animate({right:'50'}, 300);
        }
        $("#menuIcon").show();
        setTimeout(hideMenu, 300);
        
        function originalLayout(){
            $(".mainMenu").css("-webkit-clip-path", "polygon(0 0, 100% 0, 0% 100%, 0% 100%)");
        }
        
        setTimeout(originalLayout, 600)
    });
    

    
});