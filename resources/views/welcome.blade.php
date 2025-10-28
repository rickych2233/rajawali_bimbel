<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Rajawali Bimbel - Belajar dari TK hingga SMP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="icon" type="image/svg+xml" href="/image/rajawali_bimbel.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --purple: #6f44e4;
            --blue: #44b0e4;
            --cream: #fff6db;
            --navy: #1b2559;
        }

        * {
            font-family: 'Poppins', system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
        }

        body {
            background: radial-gradient(circle at 0% 0%, rgba(68, 176, 228, 0.15) 0%, transparent 45%),
                radial-gradient(circle at 100% 0%, rgba(111, 68, 228, 0.2) 0%, transparent 40%),
                radial-gradient(circle at 50% 100%, rgba(255, 193, 7, 0.15) 0%, transparent 55%),
                #f7f9ff;
            color: var(--navy);
        }

        .navbar {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(12px);
            border-radius: 0 0 24px 24px;
            box-shadow: 0 12px 40px rgba(23, 34, 79, 0.08);
        }

        .navbar-brand {
            font-weight: 700;
            color: var(--navy) !important;
        }

        .btn-primary {
            background: linear-gradient(90deg, var(--blue), var(--purple));
            border: none;
            border-radius: 48px;
            padding: 0.75rem 2rem;
            font-weight: 600;
            box-shadow: 0 16px 30px rgba(111, 68, 228, 0.25);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 22px 44px rgba(68, 176, 228, 0.3);
        }

        .btn-outline-light {
            border-radius: 48px;
            padding: 0.75rem 2rem;
        }

        .section-label {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.35rem 0.9rem;
            border-radius: 999px;
            background: rgba(68, 176, 228, 0.12);
            color: var(--blue);
            font-weight: 600;
            font-size: 0.9rem;
        }

        .hero-section {
            position: relative;
            overflow: hidden;
            margin-top: 1.5rem;
        }

        .hero-section .hero-card {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.95) 0%, rgba(255, 255, 255, 0.85) 100%);
            border-radius: 32px;
            padding: 3rem;
            box-shadow: 0 20px 60px rgba(19, 35, 95, 0.12);
        }

        .hero-section .hero-illustration {
            position: relative;
            background: linear-gradient(135deg, rgba(68, 176, 228, 0.18), rgba(111, 68, 228, 0.25));
            backdrop-filter: blur(8px);
            border-radius: 28px;
            padding: 2.5rem;
            box-shadow: 0 18px 50px rgba(68, 176, 228, 0.2);
        }

        .hero-section .floating-badge {
            position: absolute;
            top: -16px;
            right: 20px;
            background: #fff;
            border-radius: 12px;
            padding: 0.65rem 1rem;
            box-shadow: 0 12px 24px rgba(17, 36, 94, 0.12);
            font-weight: 600;
            font-size: 0.85rem;
        }

        .hero-section .circle-shape,
        .hero-section .blob-shape {
            position: absolute;
            z-index: -1;
        }

        .hero-section .circle-shape {
            width: 320px;
            height: 320px;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.4), transparent 70%);
            top: -120px;
            left: -80px;
        }

        .hero-section .blob-shape {
            width: 280px;
            height: 280px;
            background: linear-gradient(135deg, rgba(255, 214, 102, 0.4), rgba(68, 176, 228, 0.25));
            border-radius: 53% 47% 43% 57% / 64% 48% 52% 36%;
            bottom: -120px;
            right: -70px;
        }

        .stat-card {
            background: #fff;
            border-radius: 18px;
            padding: 1.2rem;
            text-align: center;
            box-shadow: 0 12px 30px rgba(22, 46, 98, 0.12);
            border: 1px solid rgba(68, 176, 228, 0.12);
        }

        .feature-card {
            background: #fff;
            border-radius: 24px;
            padding: 1.8rem;
            height: 100%;
            border: 1px solid rgba(111, 68, 228, 0.08);
            box-shadow: 0 18px 40px rgba(23, 34, 79, 0.08);
        }

        .feature-icon {
            width: 3rem;
            height: 3rem;
            border-radius: 12px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: #fff;
        }

        .feature-icon.purple {
            background: linear-gradient(135deg, #7654f6, #9c6cff);
        }

        .feature-icon.blue {
            background: linear-gradient(135deg, #4ec8f3, #44b0e4);
        }

        .feature-icon.orange {
            background: linear-gradient(135deg, #f6a72e, #ffc86b);
        }

        .feature-icon.green {
            background: linear-gradient(135deg, #13c68b, #7de2bb);
        }

        .program-card {
            background: #fff;
            border-radius: 24px;
            border: 1px solid rgba(111, 68, 228, 0.12);
            padding: 1.8rem;
            box-shadow: 0 14px 32px rgba(21, 45, 99, 0.1);
            position: relative;
            overflow: hidden;
        }

        .program-card::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(111, 68, 228, 0.08), rgba(68, 176, 228, 0.08));
            opacity: 0;
            transition: opacity 0.2s ease;
        }

        .program-card:hover::before {
            opacity: 1;
        }

        .program-card h4 {
            position: relative;
            font-weight: 700;
        }

        .steps-card {
            border-radius: 24px;
            background: linear-gradient(135deg, #fff, rgba(111, 68, 228, 0.08));
            padding: 2rem;
            box-shadow: 0 12px 34px rgba(41, 32, 88, 0.12);
        }

        .steps-card .step {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
        }

        .steps-card .step-number {
            width: 2.5rem;
            height: 2.5rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            background: linear-gradient(135deg, var(--purple), var(--blue));
            color: #fff;
        }

        .testimoni-card {
            background: #fff;
            border-radius: 20px;
            border: 1px solid rgba(23, 34, 79, 0.1);
            box-shadow: 0 18px 42px rgba(17, 40, 105, 0.1);
            padding: 1.8rem;
            position: relative;
        }

        .testimoni-card::after {
            content: "\201C";
            position: absolute;
            top: -32px;
            right: 24px;
            font-size: 5rem;
            color: rgba(111, 68, 228, 0.15);
            font-family: 'Times New Roman', serif;
        }

        .contact-card {
            background: #fff;
            border-radius: 24px;
            padding: 2.5rem;
            box-shadow: 0 18px 48px rgba(21, 38, 97, 0.12);
        }

        .whatsapp-btn {
            background: linear-gradient(135deg, #13c68b, #0aa06f);
            border: none;
            border-radius: 48px;
            padding: 0.75rem 2rem;
            display: inline-flex;
            align-items: center;
            gap: 0.6rem;
            font-weight: 600;
            color: #fff;
            box-shadow: 0 18px 30px rgba(19, 198, 139, 0.25);
        }

        .whatsapp-btn:hover {
            color: #fff;
            opacity: 0.92;
        }

        .custom-divider {
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(111, 68, 228, 0.3), transparent);
            margin: 4rem 0;
        }

        footer {
            margin-top: 4rem;
            padding: 2rem 0 3rem;
            color: rgba(27, 37, 89, 0.7);
            font-size: 0.95rem;
        }

        @media (max-width: 991.98px) {
            .hero-section .hero-card {
                padding: 2rem;
            }

            .hero-section .circle-shape {
                width: 200px;
                height: 200px;
                top: -60px;
                left: -60px;
            }

            .hero-section .blob-shape {
                width: 180px;
                height: 180px;
                bottom: -80px;
                right: -40px;
            }
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg py-3 shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="/image/rajawali_bimbel.svg" alt="Rajawali Bimbel" width="36" height="36" class="me-2">
                Rajawali Bimbel
            </a>
            <div class="d-none d-lg-flex align-items-center gap-3">
                <a class="btn btn-outline-light text-dark" href="#program">Lihat Program</a>
                <a class="btn btn-primary" href="#kontak">Daftar Sekarang</a>
            </div>
        </div>
    </nav>

    <main>
        <section class="hero-section">
            <div class="container position-relative">
                <span class="circle-shape" aria-hidden="true"></span>
                <span class="blob-shape" aria-hidden="true"></span>
                <div class="row align-items-center justify-content-between gy-4">
                    <div class="col-lg-6" data-aos="fade-right">
                        <div class="hero-card">
                            <span class="section-label"><i class="bi bi-stars"></i> Belajar Seru & Terarah</span>
                            <h1 class="display-5 fw-bold mt-3">Temukan Cara Belajar yang Menyenangkan untuk TK, SD,
                                hingga SMP</h1>
                            <p class="text-secondary mt-3">Rajawali Bimbel menghadirkan pendampingan akademik dan
                                karakter oleh pengajar berpengalaman. Materi disusun adaptif mengikuti kurikulum terbaru
                                dengan suasana belajar yang hangat.</p>
                            <div class="d-flex flex-wrap gap-3 mt-4">
                                <a href="#kontak" class="btn btn-primary">Konsultasi Gratis</a>
                                <a href="https://wa.me/6281232308585" class="btn btn-outline-light border-0 text-primary" target="_blank">
                                    <i class="bi bi-whatsapp"></i> Tanyakan Program
                                </a>
                            </div>
                            <div class="row g-3 mt-4">
                                <div class="col-6 col-sm-4">
                                    <div class="stat-card">
                                        <h3 class="fw-bold mb-1">15+</h3>
                                        <small>Siswa Lolos PPDB Favorit</small>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4">
                                    <div class="stat-card">
                                        <h3 class="fw-bold mb-1">98%</h3>
                                        <small>Orang Tua Puas</small>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="stat-card">
                                        <h3 class="fw-bold mb-1">10 th</h3>
                                        <small>Pengalaman Mengajar</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5" data-aos="fade-left">
                        <div class="hero-illustration text-center position-relative">
                            <span class="floating-badge"><i class="bi bi-patch-check-fill text-success"></i>
                                Kurikulum Terbaru</span>
                            <img src="/image/IMG_5820.svg" alt="Ilustrasi Belajar" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="custom-divider"></div>

        <section class="py-5">
            <div class="container" data-aos="fade-up">
                <div class="text-center mb-4">
                    <span class="section-label"><i class="bi bi-magic"></i> Keunggulan Kami</span>
                    <h2 class="mt-3 fw-bold">Mengapa Memilih Rajawali Bimbel?</h2>
                    <p class="text-secondary">Kami mendampingi anak belajar dengan pendekatan yang adaptif, menyenangkan,
                        dan fokus pada pengembangan karakter.</p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-xl-3" data-aos="fade-up" data-aos-delay="50">
                        <div class="feature-card h-100">
                            <span class="feature-icon purple"><i class="bi bi-person-hearts"></i></span>
                            <h4 class="fw-semibold mt-3">Pendampingan Personal</h4>
                            <p class="text-secondary">Evaluasi rutin dan laporan belajar agar orang tua selalu tahu
                                perkembangan anak.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="feature-card h-100">
                            <span class="feature-icon blue"><i class="bi bi-journal-richtext"></i></span>
                            <h4 class="fw-semibold mt-3">Materi Interaktif</h4>
                            <p class="text-secondary">Modul visual, latihan adaptif, dan sesi kuis yang membuat belajar
                                lebih asyik.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3" data-aos="fade-up" data-aos-delay="150">
                        <div class="feature-card h-100">
                            <span class="feature-icon orange"><i class="bi bi-trophy"></i></span>
                            <h4 class="fw-semibold mt-3">Fokus Prestasi</h4>
                            <p class="text-secondary">Program persiapan ujian sekolah, olimpiade, dan PPDB unggulan.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="feature-card h-100">
                            <span class="feature-icon green"><i class="bi bi-people-fill"></i></span>
                            <h4 class="fw-semibold mt-3">Pengajar Hangat</h4>
                            <p class="text-secondary">Guru sabar dengan pengalaman lebih dari 10 tahun mendampingi anak.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5" id="program">
            <div class="container">
                <div class="row align-items-center g-4">
                    <div class="col-lg-5" data-aos="fade-right">
                        <span class="section-label"><i class="bi bi-backpack3"></i> Program Unggulan</span>
                        <h2 class="fw-bold mt-3">Pilihan Kelas Sesuai Tingkat Pendidikan</h2>
                        <p class="text-secondary">Setiap level dirancang dengan fokus yang berbeda: fondasi karakter untuk TK,
                            ketuntasan materi untuk SD, dan penguatan konsep untuk SMP.</p>
                        <div class="steps-card mt-4">
                            <div class="step mb-3">
                                <div class="step-number">1</div>
                                <div>
                                    <h6 class="mb-1">Assesment Awal</h6>
                                    <p class="mb-0 text-secondary">Memahami gaya belajar dan kebutuhan siswa sebelum masuk
                                        kelas.</p>
                                </div>
                            </div>
                            <div class="step mb-3">
                                <div class="step-number">2</div>
                                <div>
                                    <h6 class="mb-1">Sesi Interaktif Mingguan</h6>
                                    <p class="mb-0 text-secondary">Belajar dengan modul visual, eksperimen sederhana, dan
                                        latihan adaptif.</p>
                                </div>
                            </div>
                            <div class="step">
                                <div class="step-number">3</div>
                                <div>
                                    <h6 class="mb-1">Laporan ke Orang Tua</h6>
                                    <p class="mb-0 text-secondary">Update berkala mengenai perkembangan akademik dan karakter
                                        siswa.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7" data-aos="fade-left">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="program-card h-100">
                                    <h4>TK</h4>
                                    <p class="text-secondary">Fokus kemampuan motorik halus, pra-literasi, dan pembentukan
                                        kebiasaan positif melalui permainan.</p>
                                    <ul class="text-secondary mb-0">
                                        <li>Kelas kecil 4-6 murid</li>
                                        <li>Modul fun learning</li>
                                        <li>Orang tua dilibatkan</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="program-card h-100">
                                    <h4>SD</h4>
                                    <p class="text-secondary">Pendalaman materi sekolah, latihan soal adaptif, dan penguatan
                                        karakter disiplin.</p>
                                    <ul class="text-secondary mb-0">
                                        <li>Review PR & ulangan</li>
                                        <li>To-do list personal</li>
                                        <li>Simulasi ujian</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="program-card h-100">
                                    <h4>SMP</h4>
                                    <p class="text-secondary">Penguatan konsep utama dan pemantapan menghadapi AKM dan
                                        PPDB favorit.</p>
                                    <ul class="text-secondary mb-0">
                                        <li>Bimbingan mata pelajaran inti</li>
                                        <li>Bank soal digital</li>
                                        <li>Coaching motivasi</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="program-card h-100">
                                    <h4>Kelas Privat</h4>
                                    <p class="text-secondary">Sesi eksklusif satu guru satu murid untuk kebutuhan khusus
                                        atau persiapan kompetisi.</p>
                                    <ul class="text-secondary mb-0">
                                        <li>Jadwal fleksibel</li>
                                        <li>Target learning outcome</li>
                                        <li>Materi sesuai permintaan</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5">
            <div class="container" data-aos="fade-up">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-illustration h-100">
                            <img src="/image/IMG_5792.svg" alt="Suasana Belajar" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <span class="section-label"><i class="bi bi-building-check"></i> Fasilitas & Kegiatan</span>
                        <h2 class="fw-bold mt-3">Suasana Nyaman, Anak Semakin Semangat</h2>
                        <p class="text-secondary">Dari ruang kelas yang cerah hingga sesi fun day setiap bulan, kami
                            memastikan anak merasa aman dan antusias untuk belajar.</p>
                        <div class="row g-3 mt-3">
                            <div class="col-sm-6">
                                <div class="feature-card p-3 h-100">
                                    <span class="feature-icon blue"><i class="bi bi-palette"></i></span>
                                    <h6 class="fw-semibold mt-2">Ruang Belajar Kreatif</h6>
                                    <p class="text-secondary mb-0">Dilengkapi papan interaktif dan sudut baca.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="feature-card p-3 h-100">
                                    <span class="feature-icon purple"><i class="bi bi-music-note-beamed"></i></span>
                                    <h6 class="fw-semibold mt-2">Class Break Seru</h6>
                                    <p class="text-secondary mb-0">Ice breaking, eksperimen, dan kegiatan kolaboratif.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5">
            <div class="container" data-aos="fade-up">
                <div class="text-center mb-4">
                    <span class="section-label"><i class="bi bi-chat-heart"></i> Cerita Orang Tua</span>
                    <h2 class="fw-bold mt-3">Testimoni Hangat dari Keluarga Rajawali</h2>
                </div>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="testimoni-card h-100">
                            <p class="mb-4 text-secondary">“Anak saya jadi lebih bertanggung jawab dengan jadwal belajarnya.
                                Guru-gurunya perhatian dan memberikan update berkala.”</p>
                            <div class="fw-semibold">Ibu Raina</div>
                            <small class="text-secondary">Orang Tua Siswa SD</small>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="testimoni-card h-100">
                            <p class="mb-4 text-secondary">“Gurunya sabar, telaten, dan berhasil membuat anak saya lebih
                                percaya diri saat menghadapi ujian sekolah.”</p>
                            <div class="fw-semibold">Ibu Hany</div>
                            <small class="text-secondary">Orang Tua Siswa TK</small>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="testimoni-card h-100">
                            <p class="mb-4 text-secondary">“Setelah ikut program SMP, nilai matematika anak saya melonjak dan
                                ia diterima di sekolah favorit pilihannya.”</p>
                            <div class="fw-semibold">Ibu Siska</div>
                            <small class="text-secondary">Orang Tua Siswa SMP</small>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5" id="kontak">
            <div class="container" data-aos="fade-up">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="contact-card">
                            <div class="row g-4 align-items-center">
                                <div class="col-md-6">
                                    <span class="section-label"><i class="bi bi-envelope-paper-heart"></i> Hubungi Kami</span>
                                    <h2 class="fw-bold mt-3">Siap Dampingi Anak Anda Belajar</h2>
                                    <p class="text-secondary">Konsultasikan kebutuhan belajar anak secara gratis. Tim kami akan
                                        membantu memilihkan program terbaik dan jadwal yang paling nyaman.</p>
                                    <ul class="list-unstyled text-secondary mb-4">
                                        <li class="mb-2"><i class="bi bi-envelope-check text-primary me-2"></i>
                                            info@bimbelcerdas.id</li>
                                        <li><i class="bi bi-telephone text-primary me-2"></i> +62 812-3230-8585</li>
                                    </ul>
                                    <a href="https://wa.me/6281232308585" class="whatsapp-btn" target="_blank">
                                        <i class="bi bi-whatsapp"></i> Hubungi via WhatsApp
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <div class="ratio ratio-4x3 rounded-4 overflow-hidden shadow-sm">
                                        <iframe src="https://www.google.com/maps?q=-6.962241,110.4067976&hl=id&z=17&output=embed"
                                            style="border:0;" allowfullscreen="" loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                    <p class="mt-3 mb-0"><a href="https://maps.app.goo.gl/td7nYrEqQNT6S8bY8" target="_blank" class="text-primary fw-semibold">Lihat rute di Google Maps</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="text-center">
        <p class="mb-0">© 2025 Rajawali Bimbel. Semua hak dilindungi.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
            duration: 700,
            easing: 'ease-out-quart'
        });
    </script>
</body>

</html>
