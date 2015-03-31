
function run() {
	
	
	/* -------------------------------------
	HERE YOUR CODE
	---------------------------------------- */
	console.log("run");
	
	$.material.init();

	if($(".flexslider").length>0){	
		
		$('.flexslider').flexslider({controlNav: false});	
	}
	
	
	/* -------------------------------------
	END YOUR CODE
	---------------------------------------- */
	  
}