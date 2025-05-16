// TESTIMONI
let currentIndex = 0;
const testimonials = document.querySelectorAll('.testimoni');

function showTestimonial(index) {
    testimonials.forEach((item, i) => {
        item.classList.remove('active');
        if (i === index) {
            item.classList.add('active');
        }
    });
}

function nextTestimonial() {
    currentIndex = (currentIndex + 1) % testimonials.length;
    showTestimonial(currentIndex);
}

// Set interval untuk slide otomatis
setInterval(nextTestimonial, 3000);

// Tampilkan testimoni pertama saat halaman dimuat
showTestimonial(currentIndex);

// PROMO
document.addEventListener("DOMContentLoaded", function () {
    const boxes = document.querySelectorAll(".bonus-box");
    let currentBox = 0;

    setInterval(() => {
        boxes[currentBox].classList.remove("active");
        currentBox = (currentBox + 1) % boxes.length;
        boxes[currentBox].classList.add("active");
    }, 3000); // Ganti slide setiap 3 detik
});

// FAQ
document.addEventListener("DOMContentLoaded", function () {
    const faqs = document.querySelectorAll(".faq");

    faqs.forEach(faq => {
        faq.querySelector(".faq-question").addEventListener("click", () => {
            faq.classList.toggle("open");
        });
    });
});

// window.addEventListener('load', function () {
//     const loader = document.getElementById('loader');
//     const main = document.getElementById('main-content');
//     loader.style.opacity = '0';
//     setTimeout(() => {
//         loader.style.display = 'none';
//         main.style.display = 'block';
//     }, 600000); // waktu fade out
// });

