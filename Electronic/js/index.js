 
			$(document).ready(function() {
				//responsive menu toggle
				$("#menutoggle").click(function() {
					$('.xs-menu').toggleClass('displaynone');

					});
				//add active class on menu
				
			//drop down menu	
					$(".drop-down").hover(function() {
						$('.mega-menu').addClass('display-on');
					});
					$(".drop-down").mouseleave(function() {
						$('.mega-menu').removeClass('display-on');
					});
                
                //drop down menu 2	
					$(".drop-down2").hover(function() {
						$('.mega-menu2').addClass('display-on');
					});
					$(".drop-down2").mouseleave(function() {
						$('.mega-menu2').removeClass('display-on');
					});
                // li a hover change Catagory image
                 $("#1").hover(function(){
                    $('#p_pic').css("background-image", "url(images/Laptop-PNG-HD.png)"); 
                 },
                function(){
                $('#p_pic').css("background-image", "url(Reliance_electronic2.png)"); 
                 }); 
                $("#2").hover(function(){
                    $('#p_pic').css("background-image", "url(images/mobile.png)"); 
                 },
                function(){
                $('#p_pic').css("background-image", "url(Reliance_electronic2.png)"); 
                 }); 
                 $("#3").hover(function(){
                    $('#p_pic').css("background-image", "url(images/tablets.png)"); 
                 },
                function(){
                $('#p_pic').css("background-image", "url(Reliance_electronic2.png)"); 
                 }); 
                    $("#4").hover(function(){
                    $('#p_pic').css("background-image", "url(images/cpu.png)"); 
                 },
                function(){
                $('#p_pic').css("background-image", "url(Reliance_electronic2.png)"); 
                 }); 
                $("#5").hover(function(){
                    $('#p_pic').css("background-image", "url(images/led.png)"); 
                 },
                function(){
                $('#p_pic').css("background-image", "url(Reliance_electronic2.png)"); 
                 }); 
			 $("#6").hover(function(){
                    $('#p_pic').css("background-image", "url(images/camera.png)"); 
                 },
                function(){
                $('#p_pic').css("background-image", "url(Reliance_electronic2.png)"); 
                 });
                
                   // li a hover change Brand image
                 $("#11").hover(function(){
                    $('#p_pic2').css("background-image", "url(images/samsung.png)"); 
                 },
                function(){
                $('#p_pic2').css("background-image", "url(Reliance_electronic2.png)"); 
                 }); 
                $("#12").hover(function(){
                    $('#p_pic2').css("background-image", "url(images/dell.png)"); 
                 },
                function(){
                $('#p_pic2').css("background-image", "url(Reliance_electronic2.png)"); 
                 }); 
                 $("#13").hover(function(){
                    $('#p_pic2').css("background-image", "url(images/Sony.png)"); 
                 },
                function(){
                $('#p_pic2').css("background-image", "url(Reliance_electronic2.png)"); 
                 }); 
                    $("#14").hover(function(){
                    $('#p_pic2').css("background-image", "url(images/lg.png)"); 
                 },
                function(){
                $('#p_pic2').css("background-image", "url(Reliance_electronic2.png)"); 
                 }); 
                $("#15").hover(function(){
                    $('#p_pic2').css("background-image", "url(images/hp.png)"); 
                 },
                function(){
                $('#p_pic2').css("background-image", "url(Reliance_electronic2.png)"); 
                 }); 
			 $("#16").hover(function(){
                    $('#p_pic2').css("background-image", "url(images/apple.png)"); 
                 },
                function(){
                $('#p_pic2').css("background-image", "url(Reliance_electronic2.png)"); 
                 });
                $("#17").hover(function(){
                    $('#p_pic2').css("background-image", "url(images/Lenovo-Logo-PNG-File.png)"); 
                 },
                function(){
                $('#p_pic2').css("background-image", "url(Reliance_electronic2.png)"); 
                 });

                
			});