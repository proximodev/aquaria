jQuery(document).ready(function ($) {

	var animationPaths = document.querySelectorAll('.lottie-animation');

	animationPaths.forEach(function(animationPath) {
		var dataAnimationPath = animationPath.getAttribute('data-animation-path');
		var animationContainer = animationPath;

		var animData = {
			container: animationContainer,
			renderer: 'svg',
			loop: true,
			autoplay: true,
			path: dataAnimationPath
		};

		var anim = lottie.loadAnimation(animData);
	});


});
