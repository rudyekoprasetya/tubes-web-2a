<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Profil pribadi dan galeri karya.">
    <title>Profil Saya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --ink: #26352f;
            --muted: #6d7a73;
            --paper: #f7f7f2;
            --accent: #c97755;
            --soft-green: #e7eee6;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 5rem;
        }

        body {
            background: var(--paper);
            color: var(--ink);
            font-family: system-ui, -apple-system, "Segoe UI", sans-serif;
        }

        .navbar {
            background: rgba(247, 247, 242, .94);
            backdrop-filter: blur(12px);
        }

        .navbar-brand {
            color: var(--ink);
            font-weight: 750;
            letter-spacing: -.04em;
        }

        .nav-link {
            color: var(--muted);
            font-size: .94rem;
            font-weight: 600;
        }

        .nav-link:hover,
        .nav-link:focus {
            color: var(--accent);
        }

        .hero {
            min-height: 76vh;
            padding-top: 7rem;
            padding-bottom: 5rem;
        }

        .eyebrow {
            color: var(--accent);
            font-size: .78rem;
            font-weight: 750;
            letter-spacing: .16em;
            text-transform: uppercase;
        }

        .hero h1 {
            max-width: 650px;
            font-size: clamp(2.8rem, 7vw, 5.7rem);
            font-weight: 750;
            letter-spacing: -.075em;
            line-height: .98;
        }

        .hero-copy {
            max-width: 490px;
            color: var(--muted);
            font-size: 1.08rem;
            line-height: 1.8;
        }

        .profile-frame {
            position: relative;
            max-width: 410px;
            margin: 0 auto;
        }

        .profile-frame::before {
            position: absolute;
            z-index: 0;
            top: 1rem;
            right: -1rem;
            bottom: -1rem;
            left: 1rem;
            border: 1px solid #d6ddd4;
            border-radius: 48% 48% 1.5rem 1.5rem;
            content: "";
        }

        .profile-image {
            position: relative;
            z-index: 1;
            width: 100%;
            height: 480px;
            border-radius: 48% 48% 1.5rem 1.5rem;
            object-fit: cover;
        }

        .section-space {
            padding-top: 6rem;
            padding-bottom: 6rem;
        }

        .section-title {
            font-size: clamp(2rem, 4vw, 3rem);
            font-weight: 720;
            letter-spacing: -.055em;
        }

        .gallery-card {
            overflow: hidden;
            border: 0;
            border-radius: 1rem;
            background: transparent;
        }

        .gallery-card img {
            width: 100%;
            height: 300px;
            border-radius: 1rem;
            object-fit: cover;
            transition: transform .35s ease;
        }

        .gallery-card:hover img {
            transform: scale(1.035);
        }

        .about-panel {
            border-radius: 1.5rem;
            background: var(--soft-green);
        }

        .about-copy {
            max-width: 680px;
            color: var(--muted);
            font-size: 1.05rem;
            line-height: 1.9;
        }

        .footer {
            color: var(--muted);
        }

        @media (max-width: 767.98px) {
            .hero {
                min-height: auto;
                padding-top: 6rem;
            }

            .profile-image {
                height: 390px;
            }

            .section-space {
                padding-top: 4.5rem;
                padding-bottom: 4.5rem;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-md sticky-top border-bottom">
        <div class="container py-2">
            <a class="navbar-brand" href="#home">profil<span style="color: var(--accent)">.</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavigation" aria-controls="mainNavigation" aria-expanded="false" aria-label="Buka navigasi">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavigation">
                <div class="navbar-nav ms-auto gap-md-4">
                    <a class="nav-link" href="#home">Home</a>
                    <a class="nav-link" href="#gallery">Gallery</a>
                    <a class="nav-link" href="#about">About</a>
                </div>
            </div>
        </div>
    </nav>

    <main>
        <section class="hero container" id="home">
            <div class="row align-items-center g-5">
                <div class="col-lg-7">
                    <p class="eyebrow mb-4">Halo, selamat datang</p>
                    <h1 class="mb-4">Saya <span style="color: var(--accent)">Nama Anda.</span></h1>
                    <p class="hero-copy mb-4">Saya seorang kreator yang senang mengabadikan cerita, menemukan inspirasi dari hal-hal sederhana, dan membagikannya melalui karya.</p>
                    <a class="btn btn-dark rounded-pill px-4 py-2" href="#about">Kenali saya <span aria-hidden="true">→</span></a>
                </div>
                <div class="col-lg-5">
                    <div class="profile-frame">
                        <img
                            class="profile-image"
                            src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&amp;fit=crop&amp;w=900&amp;q=85"
                            alt="Potret profil"
                        >
                    </div>
                </div>
            </div>
        </section>

        <section class="section-space container" id="gallery">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end gap-3 mb-4">
                <div>
                    <p class="eyebrow mb-2">Pilihan cerita</p>
                    <h2 class="section-title mb-0">Gallery</h2>
                </div>
                <p class="text-secondary mb-1">Beberapa momen dan inspirasi favorit saya.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <figure class="gallery-card mb-0">
                        <img src="https://images.unsplash.com/photo-1470252649378-9c29740c9fa8?auto=format&amp;fit=crop&amp;w=800&amp;q=85" alt="Pemandangan matahari terbit di alam" loading="lazy">
                    </figure>
                </div>
                <div class="col-md-4">
                    <figure class="gallery-card mb-0">
                        <img src="https://images.unsplash.com/photo-1470770841072-f978cf4d019e?auto=format&amp;fit=crop&amp;w=800&amp;q=85" alt="Danau dan pegunungan yang tenang" loading="lazy">
                    </figure>
                </div>
                <div class="col-md-4">
                    <figure class="gallery-card mb-0">
                        <img src="https://images.unsplash.com/photo-1441974231531-c6227db76b6e?auto=format&amp;fit=crop&amp;w=800&amp;q=85" alt="Jalur kecil di tengah hutan" loading="lazy">
                    </figure>
                </div>
            </div>
        </section>

        <section class="section-space container" id="about">
            <div class="about-panel p-4 p-md-5">
                <div class="row align-items-center g-4">
                    <div class="col-lg-4">
                        <p class="eyebrow mb-2">Sedikit tentang saya</p>
                        <h2 class="section-title mb-0">About</h2>
                    </div>
                    <div class="col-lg-8">
                        <p class="about-copy mb-0">Halo! Saya <strong>Nama Anda</strong>. Saya tertarik pada fotografi, desain, dan perjalanan. Bagi saya, setiap pengalaman punya cerita yang menarik untuk dibagikan. Halaman ini adalah ruang kecil untuk memperkenalkan diri dan menyimpan momen-momen yang saya sukai.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer container py-4 border-top text-center">
        <small>&copy; {{ date('Y') }} Nama Anda. Dibuat dengan Bootstrap.</small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
