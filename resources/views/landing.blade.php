<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMAN 28 Homepage</title>

    <style>
        body { margin: 0; font-family: Arial, sans-serif; }

        /* NAVBAR */
        nav {
            background: #0B1936;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 40px;
        }

        nav .menu a {
            color: white;
            margin-left: 20px;
            text-decoration: none;
        }

        nav .login-btn {
            background: #2563EB;
            padding: 10px 20px;
            border-radius: 30px;
            text-decoration: none;
            color: white;
            font-weight: bold;
        }

        /* HERO */
        .hero {
            height: 90vh;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 0 20px;

            background: 
                linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                url('{{ asset('images/sman28.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .hero h1 {
            font-size: 48px;
            max-width: 90%;
        }

        .hero p {
            font-size: 20px;
            margin-top: 10px;
        }

        .hero .explore-btn {
            margin-top: 20px;
            background: white;
            color: #1E3A8A;
            padding: 12px 25px;
            border-radius: 20px;
            text-decoration: none;
            font-weight: bold;
        }

        @media (max-width: 768px) {
            .hero h1 { font-size: 32px; }
            .hero p { font-size: 16px; }
        }

        /* SECTION STYLING */
        section {
            padding: 60px 20px;
            text-align: center;
        }

        section h2 {
            color: #0B1936;
            margin-bottom: 20px;
        }

        section p {
            max-width: 800px;
            margin: 0 auto 20px;
            font-size: 1.1rem;
            line-height: 1.6;
        }

        section:nth-child(even) {
            background: #f8f9fa;
        }
    </style>
</head>
<body>

    <nav>
        <div class="logo"><b>SMAN 28 Jakarta</b></div>
        <div class="menu">
            <a href="#beranda">Beranda</a>
            <a href="#biodata">Biodata</a>
            <a href="#sejarah">Sejarah</a>
            <a href="#kontak">Kontak</a>
            <a class="login-btn" href="{{ route('login') }}">Login</a>
        </div>
    </nav>

    <div class="hero">
        <h1>Selamat Datang di SMAN 28 Jakarta</h1>
        <p>TAQWA, CERDAS, SANTUN, PRESTASI</p>
        <a class="explore-btn" href="#biodata">Jelajahi Lebih Lanjut</a>
    </div>

    <!-- BERANDA -->
    <section id="beranda">
        <h2>Beranda</h2>
        <p>SMAN 28 Jakarta adalah sekolah unggulan yang berkomitmen mencetak generasi muda yang taqwa, cerdas, santun, dan berprestasi.</p>
    </section>

    <!-- BIODATA -->
    <section id="biodata">
        <h2>Biodata Sekolah</h2>
        <div style="max-width: 800px; margin: 20px auto; text-align: left; line-height: 1.6;">
            <p><strong>Nama Sekolah:</strong> SMA Negeri 28 Jakarta</p>
            <p><strong>Alamat:</strong> Jl. Raya Ragunan No.33, RT.5/RW.7, Jati Padang, Ps. Minggu, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12540</p>
            <p><strong>Visi:</strong> Menjadi sekolah unggulan yang menghasilkan lulusan berakhlak mulia, berilmu, dan berprestasi.</p>
            <p><strong>Misi:</strong> Mewujudkan lingkungan belajar yang kondusif, inovatif, dan berbasis teknologi.</p>
        </div>
    </section>

    <!-- SEJARAH -->
    <section id="sejarah">
        <h2>Sejarah SMAN 28 Jakarta</h2>
        <p>SMAN 28 Jakarta didirikan pada tahun 1985 sebagai salah satu sekolah menengah atas negeri di Jakarta Selatan. 
        Sejak awal berdiri, sekolah ini telah menjadi pusat pendidikan berkualitas tinggi bagi masyarakat sekitar.</p>
    </section>

    <!-- KONTAK -->
    <section id="kontak">
        <h2>Kontak Kami</h2>
        <div style="max-width: 800px; margin: 20px auto; text-align: center; line-height: 1.6;">
            <p><strong>Telepon:</strong> (021) 788-XXXX</p>
            <p><strong>Email:</strong> info@sman28jakarta.sch.id</p>
            <p><strong>Instagram:</strong> @sman28jakarta</p>
            <p><strong>Alamat:</strong> Jl. Raya Ragunan No.33, Jakarta Selatan</p>
        </div>
    </section>

    <!-- SMOOTH SCROLL SCRIPT -->
    <script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
    </script>

</body>
</html>