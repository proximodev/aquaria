document.addEventListener("DOMContentLoaded", function(event){
	
	console.log("DOM loaded");
	window.addEventListener("load", function(e){

		gsap.to('.my-element', {
			rotation: 360,
			duration: 2,
			ease: 'bounce.out'
		})
		
		console.log("window loaded");
	}, false);
	
});