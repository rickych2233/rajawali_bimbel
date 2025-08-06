<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Rajawali Bimbel - Belajar dari TK hingga SMP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/svg+xml" href="/image/rajawali_bimbel.svg">
    <style>
        body {
            background: linear-gradient(135deg, #f8fafc 0%, #e0e7ff 100%);
        }

        .navbar {
            background: linear-gradient(90deg, #6f44e4 0%, #44b0e4 100%) !important;
        }

        .navbar-brand,
        .navbar-brand img {
            color: #fff !important;
        }

        .card {
            border-radius: 1.5rem;
            box-shadow: 0 4px 24px rgba(111, 68, 228, 0.08);
        }

        .btn-primary {
            background: linear-gradient(90deg, #44b0e4 0%, #6f44e4 100%);
            border: none;
            border-radius: 2rem;
            font-weight: bold;
        }

        .btn-primary:hover {
            background: linear-gradient(90deg, #6f44e4 0%, #44b0e4 100%);
        }

        .section-title {
            font-family: 'Comic Sans MS', 'Comic Sans', cursive;
            color: #6f44e4;
            font-size: 2.2rem;
            font-weight: bold;
        }

        .testimoni-card {
            background: #fffbe7;
            border: 2px solid #ffe066;
        }

        .icon-section {
            background: #e0f7fa;
            border-radius: 1.5rem;
            padding: 1.5rem 0;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="/image/rajawali_bimbel.svg" alt="Rajawali Bimbel" width="36" height="36"
                    class="me-2">
                Rajawali Bimbel
            </a>
        </div>
    </nav>

    <div class="hero d-flex align-items-center justify-content-center mt-3">
        <h1 class="section-title text-center mb-4">Rajawali Bimbel</h1>
    </div>
    <div class="d-flex justify-content-center">
        <p>Belajar lebih mudah untuk TK, SD, dan SMP. Didampingi oleh guru berpengalaman!</p>
    </div>
    <div class="d-flex justify-content-center">
        <a href="#kontak" class="btn btn-primary mt-3">Daftar Sekarang</a>
    </div>

    <div class="container jenjang mt-5">
        <h2 class="text-center mb-4">Program Unggulan</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card p-3 text-center">
                    <h4>TK</h4>
                    <p>Pembelajaran dasar membaca, menulis, berhitung, dan motorik.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 text-center">
                    <h4>SD</h4>
                    <p>Bimbingan semua mata pelajaran sesuai kurikulum nasional.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 text-center">
                    <h4>SMP</h4>
                    <p>Persiapan ujian sekolah dan pemantapan konsep pelajaran utama.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Section Gambar Dekoratif dalam Card -->
    <section class="container my-5" data-aos="fade-up">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="card shadow-sm h-50">
                    <div class="card-body text-center">
                        <img src="/image/IMG_5792.svg" alt="Dekorasi 1" style="max-width:100%; height:auto;">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow-sm h-50">
                    <div class="card-body text-center">
                        <img src="/image/IMG_5820.svg" alt="Dekorasi 2" style="max-width:100%; height:auto;">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Testimoni</h2>
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <p class="mb-3">\"Anak saya jadi lebih bertanggung jawab dalam hal pelajaran.\"</p>
                        <div class="text-end text-muted small"><strong>Ibu Raina</strong><br><span>Orang Tua
                                Siswa</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <p class="mb-3">\"Gurunya sabar dan murid juga ditanamkan untuk tanggung jawa, kompetitif dan
                            tertib.\"
                        </p>
                        <div class="text-end text-muted small"><strong>Ibu Hany</strong><br><span>Orang Tua Siswa</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <p class="mb-3">\"Anak saya lebih memiliki kesadaran untuk belajar.\"</p>
                        <div class="text-end text-muted small"><strong>Ibu Siska</strong><br><span>Orang Tua
                                Siswa</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5" id="kontak">
            <h2 class="text-center mb-4">Kontak Kami</h2>
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <p><strong>Email:</strong> info@bimbelcerdas.id</p>
                    <p><strong>WhatsApp:</strong> +62 812-3230-8585</p>
                    <a href="https://wa.me/6281232308585" class="btn btn-success">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            viewBox="0 0 24 24" style="vertical-align:middle; margin-right:8px;">
                            <path
                                d="M17.472 14.382c-.297-.149-1.758-.867-2.031-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.151-.174.2-.298.3-.497.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.5-.669-.51-.173-.008-.372-.01-.571-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.095 3.2 5.076 4.363.709.306 1.262.489 1.694.626.712.227 1.36.195 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.617h-.001a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.999-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.455 4.436-9.89 9.893-9.89 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.995c-.003 5.456-4.438 9.891-9.895 9.891m8.413-18.306A11.815 11.815 0 0 0 12.05.001C5.495 0 .049 5.445.046 12c0 2.12.555 4.191 1.607 6.006L.057 24l6.184-1.616A11.933 11.933 0 0 0 12.051 24c6.554 0 11.901-5.446 11.904-12.002a11.82 11.82 0 0 0-3.47-8.305" />
                        </svg>
                        Hubungi Sekarang
                    </a>
                    <div class="mt-4">
                        <iframe src="https://www.google.com/maps?q=Jl.+Pasirmas+Timur+III+no.25,+Semarang&output=embed" width="100%" height="300" style="border:0; border-radius:1rem;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <p class="mt-2"><a href="https://www.google.com/maps/search/Jl.+Pasirmas+Timur+III+no.25/@-6.9620427,110.4025979,17z?entry=ttu&g_ep=EgoyMDI1MDgwMy4wIKXMDSoASAFQAw%3D%3D" target="_blank">Lihat di Google Maps</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>

<!-- Contoh penggunaan class baru pada judul section -->
<div class="footer text-center mt-5">
    <p>© 2025 Bimbel Cerdas. All rights reserved.</p>
</div>
