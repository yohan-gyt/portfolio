const navSlide = () => {
	const burger = document.querySelector(".burger");
	const nav = document.querySelector(".nav-links");
	const navLinks = document.querySelectorAll(".nav-links li");
	const allNavLinks = document.querySelectorAll(".nav-links a");

	burger.addEventListener("click", () => {
		//Toggle Nav
		if (window.innerWidth <= 1080) {
			nav.classList.toggle("nav-active");

			//Animate Links
			navLinks.forEach((link, index) => {
				if (link.style.animation) {
					link.style.animation = "";
				} else {
					link.style.animation = `navLinkFade 0.5s ease forwards ${
						index / 6 + 0.5
					}s`;
				}
			});

			//Burger Animation
			burger.classList.toggle("toggle");
		}
	});

	allNavLinks.forEach((link) => {
		link.addEventListener("click", () => {
			//Toggle Nav
			if (window.innerWidth <= 1080) {
				nav.classList.toggle("nav-active");

				//  Animate Links
				navLinks.forEach((link, index) => {
					if (link.style.animation) {
						link.style.animation = "";
					} else {
						link.style.animation = `navLinkFade 0.5s ease forwards ${
							index / 7 + 0.5
						}s`;
					}
				});
				//  Burger Animation
				burger.classList.toggle("toggle");
			}
		});
	});
};

navSlide();
