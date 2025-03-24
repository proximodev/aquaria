jQuery(document).ready(function ($) {
	let player = document.getElementById("firstLottie");

	if (player) {
		player.addEventListener("ready", () => {
			LottieInteractivity.create({
				player: "#firstLottie",
				mode: "scroll",
				container: ".second-section",
				actions: [
				{
					visibility: [0, 1.0],
					type: "seek",
					frames: [50, 300]
				}
				]
			});
		});
	} else {
		// console.error("Unable to find the element with ID 'firstLottie'.");
	}
});
