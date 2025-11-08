document.addEventListener("DOMContentLoaded", () => {
  const popup = document.getElementById("welcomePopup");
  const closeBtn = document.getElementById("closePopup");

  // Cek apakah popup sudah pernah muncul di sesi ini
  const popupShown = sessionStorage.getItem("popupShown");

  // Jika belum pernah muncul, tampilkan sekali
  if (!popupShown) {
    setTimeout(() => {
      popup.classList.add("active");
      sessionStorage.setItem("popupShown", "true"); // Tandai sudah pernah tampil di sesi ini
    }, 800);
  }

  // Tutup popup ketika tombol X diklik
  closeBtn.addEventListener("click", () => {
    popup.classList.remove("active");
  });
});



// =======================
// SOUND WELCOME (aman: play setelah popup ditutup)
// =======================
document.addEventListener("DOMContentLoaded", function () {
  const popup = document.getElementById("welcomePopup");
  const closeBtn = document.getElementById("closePopup");
  const audio = document.getElementById("welcomeAudio");

  // Cek apakah sudah pernah diputar di sesi ini
  const soundPlayed = sessionStorage.getItem("soundPlayed");

  if (popup && closeBtn && audio && !soundPlayed) {
    closeBtn.addEventListener("click", () => {
      // Atur volume 30%
      audio.volume = 1.0;

      // Delay 2 detik setelah popup ditutup
      setTimeout(() => {
        audio.play().catch(() => {
          console.log("Autoplay dicegah browser.");
        });
      }, 1000);

      // Tandai agar tidak terulang
      localStorage.setItem("soundPlayed", "true");
    });
  }
});


// Toggle menu mobile
const toggle = document.getElementById('menu-toggle');
const menu = document.querySelector('nav ul');

toggle.addEventListener('click', () => {
  menu.classList.toggle('active');
  toggle.classList.toggle('open');

  if (toggle.classList.contains('open')) {
    toggle.innerHTML = '<i class="fas fa-times"></i>';
  } else {
    toggle.innerHTML = '<i class="fas fa-bars"></i>';
  }
});

// Highlight halaman aktif berdasarkan URL
const currentLocation = location.href;
const menuItems = document.querySelectorAll('nav ul li a');

menuItems.forEach(link => {
  if (link.href === currentLocation) {
    link.classList.add('active');
  } else {
    link.classList.remove('active');
  }
});

// ===== SLIDER OTOMATIS DAN NAVIGASI MANUAL =====
let slides = document.querySelectorAll(".slide");
let currentSlide = 0;
const intervalTime = 4000; // <-- ganti durasi (ms)
let slideInterval;

// Fungsi ganti slide
function showSlide(index) {
  slides.forEach((slide, i) => {
    slide.classList.remove("active");
    if (i === index) slide.classList.add("active");
  });
  currentSlide = index;
}

// Fungsi berikut / sebelumnya
function nextSlide() {
  currentSlide = (currentSlide + 1) % slides.length;
  showSlide(currentSlide);
}

function prevSlide() {
  currentSlide = (currentSlide - 1 + slides.length) % slides.length;
  showSlide(currentSlide);
}

// Tombol navigasi
document.querySelector(".next").addEventListener("click", nextSlide);
document.querySelector(".prev").addEventListener("click", prevSlide);

// Auto play
slideInterval = setInterval(nextSlide, intervalTime);

// =======================
// JS: Statistik Sekolah (Animasi Angka)
// =======================
document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll(".counter");

  const animateCounter = (counter) => {
    const target = +counter.getAttribute("data-target");
    const speed = 220; // kecepatan animasi (semakin kecil = lebih cepat)
    const increment = target / speed;
    let count = 0;

    const updateCount = () => {
      count += increment;
      if (count < target) {
        counter.innerText = Math.floor(count).toLocaleString();
        requestAnimationFrame(updateCount);
      } else {
        counter.innerText = target.toLocaleString();
      }
    };
    updateCount();
  };

  // Jalankan animasi hanya saat bagian ini muncul di layar
  const section = document.querySelector(".stats-section");
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        counters.forEach(counter => animateCounter(counter));
        observer.disconnect();
      }
    });
  }, { threshold: 0.1 });

  observer.observe(section);


  
  
});

