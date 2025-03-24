document.addEventListener("DOMContentLoaded", function(event){
	console.log("DOM loaded");

	window.addEventListener("load", function(e){




		const lottieElements = document.querySelectorAll(".lottie-animation");

		lottieElements.forEach((element) => {
			const animationPath = element.dataset.animationPath;

			const animation = lottie.loadAnimation({
				container: element,
				renderer: 'svg',
				loop: true, 
				autoplay: false,
				path: animationPath
			});

			  animation.setSpeed(1.5); // Lottie animation speed

			  ScrollTrigger.create({
				// markers: true,
			  	trigger: element, 
			  	start: "top 90%",
			  	end: "bottom 0%", 
			  	onEnter: () => animation.play(),
			  	onLeave: () => {
			  		animation.goToAndStop(0, true); 
			  	},
			  	onEnterBack: () => animation.play(),
			  	onLeaveBack: () => {
			  		animation.goToAndStop(0, true); 
			  	},
			  });
			});






// // Make sure GSAP and ScrollTrigger are properly imported or linked in your HTML file

// 		gsap.registerPlugin(ScrollTrigger);

// 		ScrollTrigger.create({
//     trigger: '.section_home_3_column_product_block_inner_item',
//     start: 'top center',  
//     onEnter: function() {
//         document.querySelector('.section_home_3_column_product_block_inner_item').classList.add('your-class'); // Add your class here
//     },
//     onLeaveBack: function() {
//         document.querySelector('.section_home_3_column_product_block_inner_item').classList.remove('your-class'); // Remove the class when the element leaves the viewport again on scroll up
//     }
// });




		// gsap.registerPlugin(ScrollTrigger);

		// const elements = document.querySelectorAll('.section_home_3_column_product_block_inner_item');

		// elements.forEach((elem, i) => {
		// 	gsap.fromTo(
		// 		elem,
		// 		{ opacity: 0 },
		// 		{
		// 			opacity: 1,
		// 			duration: 4,
		// 			delay: i,
		// 			ease: Power4.easeInOut,
		// 			scrollTrigger: {
		// 				// markers:true,
		// 				trigger: elem,
		// 				start:"top 100%",
		// 				end:"bottom 50%", 
		// 				toggleActions:"restart complete reverse reverse",
		// 				scrub: true,
		// 			},
		// 		}
		// 		);
		// });


		// gsap.to('.section_block_title', {
		// 	scrollTrigger: {
		// //		markers:true,
		// 		trigger: ".section_block_title",
		// 		start:"top 55%",
		// 		end:"bottom 25%", 
		// 		toggleActions: "play complete reverse reset"
		// 	},
		// 	rotation: 5,
		// 	duration: 1,
		// 	ease: 'none'
		// });


		// gsap.from(".herman", {
		// 	duration:2, 
		// 	x:"50vw", 
		// 	rotation:0, 
		// 	ease:"linear", 
		// 	scrollTrigger: {
		// 		trigger:".herman",
		// 	//	markers:true,
		// 		start:"top 55%",
		// 		end:"bottom 25%", 
		// 		toggleActions:"play pause reverse reverse"

		// 	}
		// });








		console.log("window loaded");
	}, false);

});
