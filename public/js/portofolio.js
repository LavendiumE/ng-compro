$(document).ready(function () {
    console.log("Portfolio ready");

    const $grid = $('.portofolio-container');

    /* INIT ISOTOPE AFTER IMAGE LOAD */
    $grid.imagesLoaded(function () {
        $grid.isotope({
            itemSelector: '.portofolio-item',
            layoutMode: 'masonry',
            percentPosition: true,
            masonry: {
                columnWidth: '.grid-sizer'
            }
        });

        setTimeout(function () {
            $grid.isotope('layout');
        }, 300);
    });

    /* FILTER BUTTON */
    $('.category-tabs').on('click', '.filter-button', function () {
        const filterValue = $(this).attr('data-filter');

        $grid.isotope({
            filter: filterValue
        });

        $('.filter-button').removeClass('active');
        $(this).addClass('active');

        setTimeout(function () {
            $grid.isotope('layout');
        }, 250);
    });

    /* RESIZE SAFE */
    let resizeTimer;
    $(window).on('resize', function () {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function () {
            $grid.isotope('layout');
        }, 250);
    });

    /* MODAL VIEW MORE */
    $('.view-more-btn').on('click', function () {
        const title = $(this).data('title');
        const description = $(this).data('description');
        const images = $(this).data('images').split(',');

        $('#projectModalLabel').text(title);
        $('#modalDescription').text(description);

        const $carouselInner = $('#modalCarouselInner');
        $carouselInner.empty();

        images.forEach((imgSrc, index) => {
            const activeClass = index === 0 ? 'active' : '';

            const item = `
                <div class="carousel-item ${activeClass}">
                    <img src="${imgSrc.trim()}" class="d-block w-100" alt="Project image ${index + 1}">
                </div>
            `;

            $carouselInner.append(item);
        });

        /* RESET CAROUSEL TO FIRST SLIDE */
        const carouselElement = document.querySelector('#projectCarousel');
        const carousel = bootstrap.Carousel.getOrCreateInstance(carouselElement);
        carousel.to(0);
    });

    /* MOBILE MENU */
    window.myFunction = function () {
        const nav = document.getElementById("navLinks");
        nav.classList.toggle("responsive");
    };
});