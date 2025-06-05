function toggleMenu() {
  const menu = document.querySelector(".menu");
  const toggleIcon = document.querySelector(".menu-toggle i");
  
  menu.classList.toggle("active");
  
  if (menu.classList.contains("active")) {
      toggleIcon.classList.remove("fa-bars");
      toggleIcon.classList.add("fa-times");
  } else {
      toggleIcon.classList.remove("fa-times");
      toggleIcon.classList.add("fa-bars");
  }
}

$(document).ready(function () {
  var $grid = $('.portfolio-container').isotope({
      itemSelector: '.portfolio-item',
      layoutMode: 'masonry'
  });

  // Pastikan layout disusun setelah semua gambar dimuat
  $grid.imagesLoaded().progress(function () {
      $grid.isotope('layout');
  });

  // Filter berdasarkan kategori
  $('.filter-button').click(function () {
      var filterValue = $(this).attr('data-filter');
      $grid.isotope({ filter: filterValue });

      // Ganti warna tombol aktif
      $('.filter-button').removeClass('btn-primary').addClass('btn-secondary');
      $(this).removeClass('btn-secondary').addClass('btn-primary');
  });
});

document.getElementById("contactForm").addEventListener("submit", async function(event) {
    event.preventDefault(); // Mencegah form reload

    // Ambil data dari form
    const fullName = document.getElementById("fullName").value;
    const email = document.getElementById("emailAddress").value;
    const phone = document.getElementById("phoneNumber").value;
    const message = document.getElementById("message").value;

    const formData = {
        sender: { name: fullName, email: email },
        to: [{ email: "nitagemilangsolusindo@gmail.com", name: "Admin" }],
        subject: "Pesan dari Website",
        htmlContent: `
            <p><strong>Nama:</strong> ${fullName}</p>
            <p><strong>Email:</strong> ${email}</p>
            <p><strong>Nomor Telepon:</strong> ${phone}</p>
            <p><strong>Pesan:</strong> ${message}</p>
        `
    };

    const apiKey = "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"; // Ganti dengan API Key Brevo

    try {
        const response = await fetch("https://api.brevo.com/v3/smtp/email", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "accept": "application/json",
                "api-key": apiKey
            },
            body: JSON.stringify(formData)
        });

        if (response.ok) {
            document.getElementById("responseMessage").innerText = "Pesan berhasil dikirim!";
            document.getElementById("contactForm").reset(); // Reset form
        } else {
            document.getElementById("responseMessage").innerText = "Gagal mengirim pesan.";
        }
    } catch (error) {
        document.getElementById("responseMessage").innerText = "Terjadi kesalahan.";
    }
});

function myFunction() {
    console.log("Burger menu clicked!");
    var x = document.getElementById("navLinks");
    x.classList.toggle("responsive");
}


