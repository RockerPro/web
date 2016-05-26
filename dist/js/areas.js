	 $(document).ready(function() {

	 	/*tecnologia*/
		$(".hidee5").hide();
		$("#t1").show();	
		$(".itemm5").click(function() {
			var lol  =  $(this).data("cont");
			$(".hidee5").hide();		
			$("#"+lol).fadeIn();
			$(".itemm5").css("color","black");
			$(".itemm5").css("list-style","none");
			$(".itemm5").css("background","#d0d0d0");
			$(this).css("background","#0082c4");		
			$(this).css("color","white");		
		});
		/*comunicaciones*/
		$(".hidee").hide();
		$("#i1").show();	
		$(".itemm").click(function() {
			var lol  =  $(this).data("cont");
			$(".hidee").hide();		
			$("#"+lol).fadeIn();
			$(".itemm").css("color","black");
			$(".itemm").css("list-style","none");		
			$(".itemm").css("background","#d0d0d0");
			$(this).css("background","#0082c4");		
			$(this).css("color","white");		
		});
		/*energia*/
		$(".hidee2").hide();
		$("#e1").show();	
		$(".itemm2").click(function() {
			var lol2  =  $(this).data("cont");
			$(".hidee2").hide();		
			$("#"+lol2).fadeIn();
			$(".itemm2").css("color","black");
			$(".itemm2").css("list-style","none");	
			$(".itemm2").css("background","#d0d0d0");
			$(this).css("background","#0082c4");		
			$(this).css("color","white");		
		});

		/*SOLUCIONES MOVILES*/
		$(".hidee3").hide();
		$("#s1").show();	
		$(".itemm3").click(function() {
			var lol3  =  $(this).data("cont");
			$(".hidee3").hide();		
			$("#"+lol3).fadeIn();
			$(".itemm3").css("color","black");
			$(".itemm3").css("list-style","none");	
			$(".itemm3").css("background","#d0d0d0");
			$(this).css("background","#0082c4");		
			$(this).css("color","white");	
		});
		/*consultoria y emprendimiento*/
		$(".hidee4").hide();
		$("#ce2").show();	
		$(".itemm4").click(function() {
			var lol4  =  $(this).data("cont");
			$(".hidee4").hide();		
			$("#"+lol4).fadeIn();
			$(".itemm4").css("color","black");
			$(".itemm4").css("list-style","none");	
			// $(this).css("list-style","url(dist/img2/punto.png)");		
			$(this).css("color","#004375");		
		});
	
	});
