$(document).ready(function () {

	// Custom JavaScript for the Blog Page

	// Initiate typed.js text effect (done custom for each typed text effect)
	$(".animated-text-effect").typed({
		strings: ["Achat de l'article^"],
		contentType: "text",
		typeSpeed: 10,
		loop: true,
		backDelay: 1200,
		showCursor: true,
		startDelay: 3200, // PRELOADER -- comment-out this line if you stop using page preloader
		cursorChar: "|"
	});
	$(".animated-text-effect2").typed({
		strings: ["Prédictions^"],
		contentType: "text",
		typeSpeed: 10,
		loop: true,
		backDelay: 1200,
		showCursor: true,
		startDelay: 3200, // PRELOADER -- comment-out this line if you stop using page preloader
		cursorChar: "|"
	});

});