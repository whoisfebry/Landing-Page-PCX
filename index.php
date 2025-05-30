<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GenOne Honda</title>
    <link rel="icon" href="img/genone logo.webp" type="image/png">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<?php
if (isset($_GET['status'])) {
    echo "<script>
        document.addEventListener('DOMContentLoaded', function() {";

    if ($_GET['status'] === 'sukses') {
        echo "
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: 'Data berhasil dikirim.',
                confirmButtonText: 'OK',
                width: '400px'
            }).then(() => {
                window.history.replaceState(null, null, window.location.pathname);
            });
        ";
    } elseif ($_GET['status'] === 'gagal') {
        echo "
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: 'Data gagal dikirim.',
                confirmButtonText: 'OK',
                width: '400px'
            }).then(() => {
                window.history.replaceState(null, null, window.location.pathname);
            });
        ";
    }

    echo "});
    </script>";
}
?>

<body>
    <!-- <div id="loader">
        <img src="img/genone logo.webp" alt="Loading..." class="logo-loading" />
    </div> -->
    <div class="container">
        <header class="header">
            <img src="img/genone.webp" alt="GenOne" class="genone">
            <img src="img/honda.webp" alt="Honda" class="honda">
        </header>

        <section class="hero">
            <h2>Udah Kerja capek, Bawa motor <br> bikin tambah pegal</h2>
            <button class="btn red-1">Jangan biarkan badan terus tersiksa</button>
            <button class="btn red-2">Berangkat semangat pulang sengsara.</button>
        </section>

        <section class="testimoni-section">
            <h3>Pulang Kerja Cuma Bisa Rebahan</h3>
            <div class="slider" id="testimonialSlider">
                <!-- Testimoni akan diganti otomatis -->
                <div class="testimoni active">
                    <div class="testimoni-wrapper">
                        <div class="profile-pic-wrapper">
                            <img src="img/foto1.webp" alt="User" class="profile-pic">
                        </div>
                        <div class="testimoni-box">
                            <h4>Abie Ikra Negara</h4>
                            <p class="date">27 Jan, 2025 untuk Honda PCX</p>
                            <i class="fa-solid fa-quote-left quote-icon"></i>
                            <blockquote>
                                Dulu tiap pulang kerja rasanya pinggang pegal banget. Setelah ganti ke Honda PCX 160,
                                posisi duduknya bikin nyaman banget. Perjalanan jauh jadi nggak berasa!
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="testimoni">
                    <div class="testimoni-wrapper">
                        <div class="profile-pic-wrapper">
                            <img src="img/foto2.webp" alt="User" class="profile-pic">
                        </div>
                        <div class="testimoni-box">
                            <h4>Nadia Putri</h4>
                            <p class="date">30 Jan, 2025 untuk Honda PCX</p>
                            <i class="fa-solid fa-quote-left quote-icon"></i>
                            <blockquote>
                                Saya sering bolak-balik antar barang. Motor lama bikin cepat capek. Sekarang pakai Honda
                                PCX 160, handling ringan dan joknya empuk. Nggak nyangka beda banget!
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="testimoni">
                    <div class="testimoni-wrapper">
                        <div class="profile-pic-wrapper">
                            <img src="img/foto3.webp" alt="User" class="profile-pic">
                        </div>
                        <div class="testimoni-box">
                            <h4>Rizky Ardiansyah</h4>
                            <p class="date">2 Feb, 2025 untuk Honda PCX</p>
                            <i class="fa-solid fa-quote-left quote-icon"></i>
                            <blockquote>
                                Awalnya ragu ganti motor, tapi ternyata Honda PCX 160 worth it banget. Badan nggak
                                gampang capek meski motoran seharian. Enak buat harian maupun perjalanan jauh.
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="testimoni">
                    <div class="testimoni-wrapper">
                        <div class="profile-pic-wrapper">
                            <img src="img/foto4.webp" alt="User" class="profile-pic">
                        </div>
                        <div class="testimoni-box">
                            <h4>Sinta Maharani</h4>
                            <p class="date">5 Feb, 2025 untuk Honda PCX</p>
                            <i class="fa-solid fa-quote-left quote-icon"></i>
                            <blockquote>
                                Naik motor lama bikin badan terasa pegal setelah lembur. Sejak pakai PCX 160, motoran
                                jadi lebih santai. Suspensinya empuk, bener-bener bikin nyaman.
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="testimoni">
                    <div class="testimoni-wrapper">
                        <div class="profile-pic-wrapper">
                            <img src="img/foto5.webp" alt="User" class="profile-pic">
                        </div>
                        <div class="testimoni-box">
                            <h4>Agung Pratama</h4>
                            <p class="date">10 Feb, 2025 untuk Honda PCX</p>
                            <i class="fa-solid fa-quote-left quote-icon"></i>
                            <blockquote>
                                Pulang kerja biasanya lelah banget karena posisi duduk motor lama sempit. Setelah
                                upgrade ke Honda PCX 160, postur duduk lebih lega dan nyaman. Jadi lebih semangat kerja!
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="closing">
            <p><strong>PCX 160 itu bukan cuma soal kendaraan,<br>tapi penyelamat tubuh lo tiap pulang kerja.</strong>
            </p>
            <p class="red-text">Karena badan yang capek gak pantas dipaksa naik <br> motor yang bikin makin sengsara.
            </p>
            <button class="btn red-3">Dan saatnya lo buktiin kenyamanan sebenernya...</button>
        </section>

        <section class="features-section">
            <div class="feature-box">
                <div class="feature-item">
                    <span class="icon"><i class="fa-solid fa-circle-check"></i></span>
                    <div>
                        <h4>Duduk Nyaman, Tanpa Pegal</h4>
                        <p>Desain jok & posisi riding ergonomis bikin badan tetap rileks meski macet dan jauh.</p>
                    </div>
                </div>
                <div class="feature-item">
                    <span class="icon"><i class="fa-solid fa-circle-check"></i></span>
                    <div>
                        <h4>Tampilan Gagah, Gaya Naik Kelas</h4>
                        <p>Capek kerja bukan alasan tampil biasa aja. Desain premium PCX bikin kamu tetap stylish
                            kapanpun.</p>
                    </div>
                </div>
                <div class="feature-item">
                    <span class="icon"><i class="fa-solid fa-circle-check"></i></span>
                    <div>
                        <h4>Bagasi Luas, Nggak Ribet Bawa Barang</h4>
                        <p>Helm, tas kerja, atau belanjaan - semua masuk. Pulang kerja jadi lebih praktis.</p>
                    </div>
                </div>
                <div class="feature-item">
                    <span class="icon"><i class="fa-solid fa-circle-check"></i></span>
                    <div>
                        <h4>Mesin Halus, Tarikan Enteng</h4>
                        <p>Teknologi eSP+ bikin tarikan motor responsif dan irit. Nggak bikin capek di jalan.</p>
                    </div>
                </div>
            </div>
            <div class="promo-box">
                <p><strong>Gak perlu terus-terusan tersiksa di jalan.<br>Lo berhak pulang kerja tanpa pegal dan ribet
                        !</strong></p>
                <p class="highlight-text">
                    <span class="icon"><i class="fa-regular fa-hand-point-right"></i></span>
                    <span class="text">Klik tombol di bawah buat cek promo + cicilan ringan mulai 1 JUTAAN!</span>
                </p>
                <button class="btn red-4">Yuk, rasain enaknya naik PCX</button>
            </div>
            <p class="closing-cta">Masih Ragu ?<br>Yang Lain Udah Nikmatin Nyamannya PCX<br>Sekarang Giliran Lo.</p>
        </section>

        <!-- SECTION: BONUS SPESIAL -->
        <section class="promo-header">
            BONUS SPESIAL <br> BUAT LO YANG GAK MAU PEGAL LAGI!
        </section>
        <section class="promo-section">
            <img src="img/excep merah.webp" alt="Motor PCX" class="motor" />
            <div class="cta-button">Biar Gak Pegal, Gua Kasih DP 2 Juta aja!</div>
            <!-- SLIDER BONUS -->
            <div class="bonus-slider">
                <!-- Bonus Item 1: Gloves -->
                <div class="bonus-box active">
                    <img src="img/gloves.webp" alt="Sarung Tangan Riding" class="bonus-image" />
                    <h4 class="bonus-title">Sarung Tangan Riding (Gloves)</h4>
                    <p class="bonus-desc">Genggaman makin mantap & aman.</p>
                </div>
                <!-- Bonus Item 2: Helm -->
                <div class="bonus-box">
                    <img src="img/helm.webp" alt="Helm" class="bonus-image" />
                    <h4 class="bonus-title">Helm Ekslusif Honda</h4>
                    <p class="bonus-desc">Lindungi kepala dengan gaya.</p>
                </div>
                <!-- Bonus Item 3: Holder -->
                <div class="bonus-box">
                    <img src="img/holder.webp" alt="Holder" class="bonus-image" />
                    <h4 class="bonus-title">Holder HP Motor</h4>
                    <p class="bonus-desc">Navigasi jadi lebih mudah & aman waktu riding.</p>
                </div>
            </div>
        </section>

        <section class="tiktok-section">
            <div class="box">
                <div class="live-tiktok">
                    <p class="join-tiktok">
                        Yang lain udah nonton Live TikTok kita &amp; dapet promo spesial, Masa lo mau ketinggalan terus?
                        Catet tanggalnya, gas bareng!
                    </p>
                    <div class="overlap-1">
                        <div class="group">
                            <div class="div">
                                <div class="overlap-group">
                                    <div class="rectangle-1"></div>
                                    <div class="text-wrapper-1">TIKTOK</div>
                                    <img class="ellipse" src="img/tiktok.webp" alt="TikTok Icon" />
                                </div>
                                <div class="live"></div>
                                <div class="text-wrapper-2">Live di</div>
                            </div>
                            <div class="overlap-wrapper">
                                <div class="overlap-2">
                                    <div class="rectangle-2"></div>
                                    <div class="text-wrapper-3">DAPATKAN PENAWARAN SPESIAL</div>
                                    <div class="text-wrapper-4">SAAT LIVE!!</div>
                                    <div class="date">
                                        <div class="overlap-3">
                                            <div class="text-wrapper-5">Sabtu, 10 Mei 2025</div>
                                            <div class="text-wrapper-6">13.00 - 15.00 WIB</div>
                                        </div>
                                        <div class="fluent-date-wrapper">
                                            <i class="fa-solid fa-calendar-days fluent-date"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="overlap-group-wrapper">
                                <div class="overlap-4">
                                    <div class="rectangle-3"></div>
                                    <div class="ellipse-2"></div>
                                    <div class="ellipse-3"></div>
                                    <div class="text-wrapper-7">DISKON 1,7 JUTAAN</div>
                                    <div class="text-wrapper-8">DP 1,9 JUTAAN</div>
                                </div>
                            </div>
                            <div class="text-wrapper-9">PCX</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION: Form Pemesanan -->
        <section class="form-section">
            <div class="form-container">
                <h2>Cuma butuh semenit, buat hidup lo lebih nyaman tanpa pegal di jalan</h2>
                <form action="simpan.php" method="POST" class="card p-4 shadow">
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" placeholder="Tulis nama" required>
                    <label for="no_hp">Nomor Hp</label>
                    <input type="text" id="no_hp" name="no_hp" placeholder="Tulis nomor hp" required>
                    <label for="kota">Pilih Kabupaten/Kota</label>
                    <select id="kota" name="kota" required>
                        <option value="">Pilih...</option>
                        <option value="jakarta pusat">Jakarta Pusat</option>
                        <option value="jakarta barat">Jakarta Barat</option>
                        <option value="jakarta selatan">Jakarta Selatan</option>
                        <option value="jakarta timur">Jakarta Timur</option>
                        <option value="jakarta utara">Jakarta Utara</option>
                        <option value="kepuluan seribu">Kepuluan Seribu</option>
                        <option value="kota bogor">Kota Bogor</option>
                        <option value="kabupaten bogor">Kabupaten Bogor</option>
                        <option value="kota depok">Kota Depok</option>
                        <option value="kota bekasi">Kota Bekasi</option>
                        <option value="kabupaten bekasi">Kabupaten Bekasi</option>
                        <option value="kota tangerang">Kota Tangerang</option>
                        <option value="kabupaten tangerang">Kabupaten Tangerang</option>
                        <option value="kota tangerang selatan">Kota Tangerang Selatan</option>
                    </select>
                    <label for="bi">Apakah ada kendala BI Checking?</label>
                    <select id="bi" name="bi" required>
                        <option value="">Pilih...</option>
                        <option value="ada">Ada</option>
                        <option value="tidak ada">Tidak ada</option>
                    </select>
                    <label for="sumber">Lihat Kita Dari Mana Ya?</label>
                    <select id="sumber" name="sumber" required>
                        <option value="">Pilih...</option>
                        <option value="facebook">Facebook</option>
                        <option value="instagram">Instagram</option>
                        <option value="tiktok">Tiktok</option>
                        <option value="websie">Website</option>
                        <option value="youtube">Youtube</option>
                        <option value="ecommerce">Ecommerce</option>
                        <option value="broadcast">Broadcast</option>
                        <option value="lainnya">Lainnya</option>
                    </select>
                    <button type="submit">Pesan Sekarang</button>
                </form>
            </div>
        </section>

        <section class="faq-section">
            <h2>Pertanyaan Umum</h2>
            <div class="faq">
                <button class="faq-question">Bagaimana cara memesan motor di GenOne Honda?</button>
                <div class="faq-answer">
                    <p>Anda dapat memesan motor dengan mengklik tombol 'Pesan Sekarang' di halaman produk atau
                        menghubungi kami melalui WhatsApp untuk konsultasi langsung.</p>
                </div>
            </div>
            <div class="faq">
                <button class="faq-question">Apakah ada diskon untuk pembelian motor?</button>
                <div class="faq-answer">
                    <p>Ya, kami menawarkan diskon hingga 20% untuk beberapa model motor tertentu. Silakan cek detail
                        promosi di halaman utama atau hubungi kami untuk informasi lebih lanjut.</p>
                </div>
            </div>
            <div class="faq">
                <button class="faq-question">Proses pengajuan kredit seperti apa?</button>
                <div class="faq-answer">
                    <p>Proses pengajuan kredit sangat mudah! Cukup ajukan permohonan melalui WhatsApp, dan tim kami akan
                        membantu Anda sepanjang proses hingga persetujuan kredit.</p>
                </div>
            </div>
            <div class="faq">
                <button class="faq-question">Apakah motor bisa dikirim ke alamat saya?</button>
                <div class="faq-answer">
                    <p>Tentu! Kami menyediakan layanan pengiriman ke seluruh wilayah Indonesia. Pastikan Anda memberikan
                        alamat yang lengkap saat pemesanan.</p>
                </div>
            </div>
        </section>

        <section class="lokasi">
            <h2>Lokasi Kami</h2>
            <p>Temukan dealer GenOne Honda terdekat dengan mudah!</p>
            <div class="map-wrapper">
                <div class="map-container">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4007.5834309969023!2d106.84496987503772!3d-6.228336393759774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f38a4c8a58e5%3A0x3cb2b42323cf1d13!2sHONDA%20TDM%20SAHARJO%20TEBET%20(Dealer%20Motor%20Honda)!5e1!3m2!1sid!2sid!4v1747192978826!5m2!1sid!2sid"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>

        <section class="footer">
            <div class="footer-container">
                <!-- Kolom 1: Logo dan Sosmed -->
                <div class="footer-column">
                    <div class="brand">
                        <img src="img/genone logo.webp" alt="GenOne Honda" class="logo">
                        <h4>GenOne Honda</h4>
                    </div>
                    <p>Dealer Motor Honda Terpercaya</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
                <!-- Kolom 2: Tautan Cepat -->
                <div class="footer-column center-column">
                    <h4>Tautan Cepat</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Promo & Bonus</a></li>
                        <li><a href="#">Testimoni</a></li>
                    </ul>
                </div>
                <!-- Kolom 3: Hubungi Kami -->
                <div class="footer-column">
                    <h4>Hubungi Kami</h4>
                    <ul>
                        <li><i class="fas fa-phone"></i> 081389374541</li>
                        <li><i class="fas fa-envelope"></i> admin@genone.co.id</li>
                        <li><i class="fas fa-map-marker-alt"></i> Jl. Dr. Saharjo No.319, Tebet Bar., Kec. Tebet, Kota
                            Jakarta Selatan, DKI Jakarta 12810</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>© 2025 GenOne Honda. All rights reserved.</p>
            </div>
        </section>
        <!-- WhatsApp Chat Button -->
        <a href="https://wa.me/+621389374541" class="wa-chat-button" target="_blank" aria-label="Chat CS via WhatsApp">
            <img src="img/whatsapp.png" alt="WhatsApp Icon"
                class="wa-icon" />
            <span>Chat CS</span>
        </a>
    </div>

    <!-- <script>
        window.addEventListener("load", function() {
            const loader = document.getElementById("loader");
            const content = document.querySelector(".container");
            // Tambahkan delay agar terlihat
            setTimeout(() => {
                loader.style.opacity = 0;
                setTimeout(() => {
                    loader.style.display = "none";
                    content.style.display = "block";
                }, 500); // waktu untuk fade-out
            }, 1500); // durasi loading (2.5 detik)
        });
    </script> -->

    <script src="script.js"></script>
</body>

</html>