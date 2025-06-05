$(document).ready(function () {
    console.log("Document ready!");

    // Inisialisasi Isotope setelah semua gambar dimuat
    var $grid = $('.portofolio-container');

    $grid.imagesLoaded(function () {
        $grid.isotope({
            itemSelector: '.portofolio-item',
            layoutMode: 'masonry',
            percentPosition: true,
            masonry: {
                columnWidth:'.grid-sizer'
            }
        });

        console.log("Isotope initialized after images loaded!");

        // Menjalankan layout ulang setelah delay untuk memastikan tata letak benar
        setTimeout(function () {
            $grid.isotope('layout');
        }, 500);
    });

    // Filter berdasarkan kategori saat tombol diklik
    $('.category-tabs').on('click', '.filter-button', function () {
        var filterValue = $(this).attr('data-filter');

        console.log("Filter clicked:", filterValue);

        // Pastikan filter menggunakan format yang benar
        $grid.isotope({ filter: filterValue });

        // Menjalankan layout ulang setelah filter diterapkan
        setTimeout(function () {
            $grid.isotope('layout');
        }, 300);

        // Ganti kelas 'active' pada tombol
        $('.filter-button').removeClass('active');
        $(this).addClass('active');
    });

    // Jalankan ulang layout saat jendela di-resize
    $(window).on('resize', function () {
        $grid.isotope('layout');
    });
});

function myFunction() {
    console.log("Burger menu clicked!");
    var x = document.getElementById("navLinks");
    x.classList.toggle("responsive");
}

$('.view-more-btn').on('click', function () {
    const title = $(this).data('title');
    const description = $(this).data('description');
    const images = $(this).data('images').split(',');

    $('#projectModalLabel').text(title);
    $('#modalDescription').text(description);

    const $carouselInner = $('#modalCarouselInner');
    $carouselInner.empty();

    images.forEach((imgSrc, index) => {
        const isActive = index === 0 ? 'active' : '';
        const itemHTML = `
            <div class="carousel-item ${isActive}">
                <img src="${imgSrc}" class="d-block w-100" alt="Project image ${index + 1}">
            </div>
        `;
        $carouselInner.append(itemHTML);
    });
});
