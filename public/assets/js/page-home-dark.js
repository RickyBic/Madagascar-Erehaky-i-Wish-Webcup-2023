$(document).ready(function () {

	// Custom JavaScript for the dark homepage

	// Initiate counters effect
	$(".pa-counterskills").counterUp({ delay: 20, time: 2200 });

	// Initiate and customize particles.js effect
	particlesJS("particles-js", {
		"particles": {
			"number": {
				"value": 90,
				"density": {
					"enable": true,
					"value_area": 800
				}
			},
			"color": {
				"value": "FFFFFF"
			},
			"shape": {
				"type": "circle",
				"stroke": {
					"width": 0,
					"color": "#FFFFFF"
				},
				"polygon": {
					"nb_sides": 5
				},
				"image": {
					"src": "img/github.svg",
					"width": 100,
					"height": 100
				}
			},
			"opacity": {
				"value": 0.15,
				"random": false,
				"anim": {
					"enable": false,
					"speed": 1,
					"opacity_min": 0.1,
					"sync": false
				}
			},
			"size": {
				"value": 5,
				"random": true,
				"anim": {
					"enable": false,
					"speed": 40,
					"size_min": 0.1,
					"sync": false
				}
			},
			"line_linked": {
				"enable": true,
				"distance": 150,
				"color": "FFFFFF",
				"opacity": 0.1,
				"width": 1
			},
			"move": {
				"enable": true,
				"speed": 1,
				"direction": "none",
				"random": false,
				"straight": false,
				"out_mode": "out",
				"bounce": false,
				"attract": {
					"enable": false,
					"rotateX": 600,
					"rotateY": 1200
				}
			}
		},
		"interactivity": {
			"detect_on": "canvas",
			"events": {
				"onhover": {
					"enable": true,
					"mode": "grab"
				},
				"onclick": {
					"enable": true,
					"mode": "bubble"
				},
				"resize": true
			},
			"modes": {
				"grab": {
					"distance": 350,
					"line_linked": {
						"opacity": 0.65
					}
				},
				"bubble": {
					"distance": 350,
					"size": 12,
					"duration": 1.542946703372556,
					"opacity": 0.9,
					"speed": 3
				},
				"repulse": {
					"distance": 350,
					"duration": 0.4
				},
				"push": {
					"particles_nb": 4
				},
				"remove": {
					"particles_nb": 2
				}
			}
		},
		"retina_detect": true
	});

	// Initiate typed.js text effect (done custom for each typed text effect)
	$(".animated-text-effect").typed({
		// Enter your texts here, these texts are applied to dark homepages
		strings: ["Avez-vous rêvé?^", "Prédisez l'avenir.^", "Onirix, l'IA du futur.^"],
		contentType: "text",
		typeSpeed: 30,
		loop: true,
		backDelay: 1200,
		showCursor: true,
		startDelay: 3200, // PRELOADER -- comment-out this line if you stop using page preloader
		cursorChar: "|"
	});
	$(".animated-text-effect2").typed({
		// Enter your texts here, these texts are applied to dark homepages
		strings: ["\"Bonjour, je m'appelle Onirix, je suis né le 13 Janvier 2098 dans le centre de recherche de l'IIR(Institut International des Rêves). Je suis doté de technologies de pointe en matière de reconnaissance de motifs et de traitement du langage naturel pour identifier les thèmes clés, les images et les émotions présents dans les rêves. je peux ainsi vous aider à mieux comprendre votre subconscient, à reconnaître les motifs récurrents dans vos rêves et à interpréter la signification de ces derniers.\"^"],
		contentType: "text",
		typeSpeed: 0.01,
		loop: true,
		backDelay: 1200,
		showCursor: true,
		startDelay: 3200, // PRELOADER -- comment-out this line if you stop using page preloader
		cursorChar: "|"
	});

});