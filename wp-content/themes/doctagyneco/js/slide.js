
jQuery(document).ready(function() {
	/* project */
	var swiper = new Swiper('.home-portfolio2', {
		nextButton: '.portfolio2-next',
        prevButton: '.portfolio2-prev',
        slidesPerView: '4',
		spaceBetween: 10,
		autoplay: 2500,
		//loop:true,
		breakpoints: {
            1040: {
                slidesPerView: 2,
                spaceBetween: 40
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            480: {
                slidesPerView: 1,
                spaceBetween: 10
            }
        }
    });
	
	/* Blog */
	var swiper = new Swiper('.home-blog', {
		nextButton: '.blog-next',
        prevButton: '.blog-prev',
        slidesPerView: '3',
		spaceBetween: 20,
		autoplay:2500,
		//loop:true,
		breakpoints: {
            1040: {
                slidesPerView: 3,
                spaceBetween: 40
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            480: {
                slidesPerView: 1,
                spaceBetween: 10
            }
        }
    });
	
	/* Client */
	var swiper = new Swiper('.home-client', {
		nextButton: '.client-next',
        prevButton: '.client-prev',
        slidesPerView: '5',
		spaceBetween: 0,
		autoplay:2500,
		//loop:true,
		breakpoints: {
			1200: {
                slidesPerView: 5,
                spaceBetween: 50
            },
            1040: {
                slidesPerView: 4,
                spaceBetween: 40
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            480: {
                slidesPerView: 1,
                spaceBetween: 10
            }
        }
    });
});
