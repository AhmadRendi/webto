@include('template/Header')

<!-- ===== NAVBAR ===== -->
<nav class="navbar bg-primary navbar-expand-lg fixed-top" id="landingNav">
    <div class="container">
        <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="#">
            <div class="lp-logo-box"><i class="fas fa-bolt"></i></div>
            Webto
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center gap-1">
                <li class="nav-item"><a class="nav-link" href="#hero">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="#layanan">Layanan</a></li>
                <li class="nav-item"><a class="nav-link" href="#tentang">Tentang</a></li>
                <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
                <li class="nav-item ms-lg-2">
                    <a class="btn btn-login px-4 rounded-pill" href="{{ route('auth') }}" id="btnLogin">
                        <i class="fas fa-sign-in-alt me-1"></i> Login
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- ===== HERO ===== -->
<section class="mt-5" id="hero">
    <div class="container">
        <div class="row align-items-center py-5">
            <div class="col-lg-6">
                <p class="text-uppercase fw-semibold text-primary ls-wide mb-2"
                    style="letter-spacing:2px; font-size:.85rem;">
                    Selamat Datang di Webto
                </p>
                <h1 class="display-4 fw-bold lh-sm mb-3">
                    Kelola Bisnis Anda<br>
                    <span class="text-primary">Lebih Mudah</span>
                </h1>
                <p class="lead text-muted mb-4" style="max-width:480px;">
                    Platform sederhana untuk mengelola pesanan, produk, dan laporan keuangan —
                    semua dalam satu tempat.
                </p>
                <div class="d-flex gap-3 flex-wrap">
                    <a href="#kontak" class="btn btn-primary btn-lg px-4 rounded-pill">
                        Hubungi Kami <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                    <a href="#layanan" class="btn btn-outline-secondary btn-lg px-4 rounded-pill">
                        Pelajari Lebih
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== LAYANAN ===== -->
<section class="bg-light" id="layanan">
    <div class="container">
        <div class="text-center mb-5">
            <p class="text-primary fw-semibold text-uppercase" style="letter-spacing:2px; font-size:.85rem;">Layanan
                Kami</p>
            <h2 class="fw-bold">Apa yang Bisa Kami Bantu?</h2>
        </div>

        <div class="row g-4">

        </div>
    </div>
</section>

<!-- ===== TENTANG ===== -->
<section id="tentang">
    <div class="container py-3">
        <div class="text-center mb-5">
            <p class="text-primary fw-semibold text-uppercase" style="letter-spacing:2px; font-size:.85rem;">Tentang
                Kami</p>
            <h2 class="fw-bold">Dipercaya Oleh Ratusan Bisnis</h2>
            <p class="text-muted mx-auto mt-3" style="max-width:600px;">
                Sejak 2020, kami berkomitmen membantu usaha kecil hingga menengah untuk mengelola operasional dengan lebih efisien. Melalui platform yang intuitif dan terintegrasi, Webto hadir sebagai solusi untuk mempercepat pertumbuhan bisnis Anda, mengotomatisasi pekerjaan rutin, dan menyajikan data yang akurat demi keputusan bisnis yang lebih baik.
            </p>
        </div>

        <div class="row g-4">

        </div>
    </div>
</section>

<!-- ===== KONTAK ===== -->
<section class="py-3 bg-light" id="kontak">
    <div class="container py-5">
        <div class="row g-5">
            <!-- Info Kontak -->
            <div class="col-lg-5">
                <p class="text-primary fw-semibold text-uppercase" style="letter-spacing:2px; font-size:.85rem;">Hubungi
                    Kami</p>
                <h2 class="fw-bold mb-3">Ada Pertanyaan?</h2>
                <p class="text-muted mb-4">
                    Isi formulir di samping atau hubungi kami langsung. Tim kami akan merespon dalam 1x24 jam.
                </p>

                <div class="d-flex align-items-start gap-3 mb-3">
                    <div class="lp-contact-icon"><i class="fas fa-location-dot"></i></div>
                    <div>
                        <h6 class="fw-semibold mb-0">Alamat</h6>
                        <p class="text-muted mb-0" style="font-size:.9rem;">Jl. Teknologi No. 42, Jakarta Selatan</p>
                    </div>
                </div>
                <div class="d-flex align-items-start gap-3 mb-3">
                    <div class="lp-contact-icon"><i class="fas fa-phone"></i></div>
                    <div>
                        <h6 class="fw-semibold mb-0">Telepon</h6>
                        <p class="text-muted mb-0" style="font-size:.9rem;">+62 21 1234 5678</p>
                    </div>
                </div>
                <div class="d-flex align-items-start gap-3 mb-4">
                    <div class="lp-contact-icon"><i class="fas fa-envelope"></i></div>
                    <div>
                        <h6 class="fw-semibold mb-0">Email</h6>
                        <p class="text-muted mb-0" style="font-size:.9rem;">hello@webto.id</p>
                    </div>
                </div>
            </div>

            <!-- Form Kontak -->
            <div class="col-lg-7">
                <div class="lp-form-card">
                    <form id="contactForm">
                        @csrf
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label class="form-label fw-medium" for="contactName">Nama Lengkap</label>
                                <input type="text" class="form-control" id="contactName" name="name"
                                    placeholder="Nama Anda" required>
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label fw-medium" for="contactEmail">Email</label>
                                <input type="email" class="form-control" id="contactEmail" name="email"
                                    placeholder="nama@email.com" required>
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label fw-medium" for="contactPhone">No. Telepon</label>
                                <input type="tel" class="form-control" id="contactPhone" name="phone"
                                    placeholder="+62 812 xxxx xxxx">
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label fw-medium" for="contactSubject">Subjek</label>
                                <select class="form-select" id="contactSubject" name="subject" required>
                                    <option value="" disabled selected>Pilih subjek</option>
                                    <option value="general">Pertanyaan Umum</option>
                                    <option value="partnership">Kerjasama</option>
                                    <option value="support">Bantuan Teknis</option>
                                    <option value="pricing">Informasi Harga</option>
                                    <option value="other">Lainnya</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-medium" for="contactMessage">Pesan</label>
                                <textarea class="form-control" id="contactMessage" name="message" rows="5"
                                    placeholder="Ceritakan kebutuhan Anda..." required></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary px-5 py-2 rounded-pill"
                                    id="btnSubmitContact">
                                    <i class="fas fa-paper-plane me-2"></i> Kirim Pesan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== FOOTER ===== -->
<footer class="footer text-white">
    <div class="container">
        <div class="row g-4 mb-4">
            <div class="col-lg-4">
                <a href="#" class="d-flex align-items-center gap-2 text-white text-decoration-none fw-bold fs-5 mb-3">
                    <div class="lp-logo-box text-white"><i class="fas fa-bolt"></i></div>
                    Webto
                </a>
                <p class="text-muted" style="font-size:.95rem;">
                    Solusi digital terbaik untuk membantu operasional bisnis Anda tumbuh lebih efisien setiap hari. Mulai dari manajemen stok, pesanan, hingga laporan keuangan terintegrasi, semuanya jadi lebih mudah bersama Webto.
                </p>
            </div>
            <div class="col-6 col-lg-2">
                <h6 class="fw-bold mb-3 text-black">Perusahaan</h6>
                <ul class="list-unstyled lp-footer-links">
                    <li><a href="#tentang" class="text-white-50 text-decoration-none">Tentang Kami</a></li>
                    <li><a href="#" class="text-white-50 text-decoration-none">Karir</a></li>
                    <li><a href="#" class="text-white-50 text-decoration-none">Blog</a></li>
                </ul>
            </div>
            <div class="col-6 col-lg-2">
                <h6 class="fw-bold mb-3 text-black">Layanan</h6>
                <ul class="list-unstyled lp-footer-links">
                    <li><a href="#" class="text-white-50 text-decoration-none">Analisis Data</a></li>
                    <li><a href="#" class="text-white-50 text-decoration-none">Invoice</a></li>
                    <li><a href="#" class="text-white-50 text-decoration-none">Manajemen</a></li>
                </ul>
            </div>
            <div class="col-6 col-lg-2">
                <h6 class="fw-bold mb-3 text-black">Bantuan</h6>
                <ul class="list-unstyled lp-footer-links">
                    <li><a href="#" class="text-white-50 text-decoration-none">Pusat Bantuan</a></li>
                    <li><a href="#" class="text-white-50 text-decoration-none">Dokumentasi</a></li>
                    <li><a href="#kontak" class="text-white-50 text-decoration-none">Kontak</a></li>
                </ul>
            </div>
            <div class="col-6 col-lg-2">
                <h6 class="fw-bold mb-3 text-black">Legal</h6>
                <ul class="list-unstyled lp-footer-links">
                    <li><a href="#" class="text-white-50 text-decoration-none">Privasi</a></li>
                    <li><a href="#" class="text-white-50 text-decoration-none">Syarat & Ketentuan</a></li>
                </ul>
            </div>
        </div>
        <hr class="border-white-50">
        <div class="d-flex flex-column flex-sm-row justify-content-center align-items-center gap-2 pt-2">
            <small class="text-muted">&copy; {{ date('Y') }} Webto. Seluruh hak cipta dilindungi.</small>
        </div>
    </div>
</footer>

<!-- Toast -->
<div class="position-fixed bottom-0 end-0 p-3" style="z-index:9999;">
    <div class="toast align-items-center text-bg-success border-0 rounded-3" id="successToast" role="alert">
        <div class="d-flex">
            <div class="toast-body fw-medium">
                <i class="fas fa-check-circle me-2"></i> Pesan berhasil dikirim!
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
        </div>
    </div>
</div>

@include('template/Footer')