jQuery(document).ready(function() {
	setupModals();
});

function setupModals() {
	jQuery(".modal-youtube").modalVideo();

	jQuery(".video").modalVideo({
		channel: "vimeo",
		vimeo: {
			api: false,
			autoplay: 'true',
			loop: 'true'
		}
	});
}
