$( document ).ready(function() {


	var heightWindow= $(window).height();
		var heightPreheader = $('#preHeader').height();
		var heightHeaderImage = $('.headerImage').height();
		var heigthToggleResponsive = $('.toggleResponsive').height();
		var scrollWidth =  window.innerWidth - document.documentElement.clientWidth;

		
	
		
		var heigthToggle= heightWindow - (heightPreheader + heightHeaderImage+heigthToggleResponsive	);
		
		console.log(heigthToggle);







		if(window.innerWidth < 991){


			
			$('.header-containerItemsResponsive').height(heigthToggle);
			
			
			var click=1;

			$('.buttonResponsive').click(function(){
				
				$(this).toggleClass('open');
				if(click==0){				
					$('.header-containerItemsResponsive').css('display','none');
					$(this).css('margin-right','0px');
					$("body").removeClass("no_scroll");
					click=1;
				}else{

					$('.header-containerItemsResponsive').css({'display':'block','margin-top':heigthToggleResponsive+'px'});
					$(this).css('margin-right',scrollWidth+'px');
					$("body").addClass("no_scroll");

					click=0;
				}

				console.log(click);
			});
			
			
		
		}

	

		

	
	


	
	

	
});