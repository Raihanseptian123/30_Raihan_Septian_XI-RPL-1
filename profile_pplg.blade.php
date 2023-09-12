<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
</head>
<body>
    <nav class="navbar">
    <div class="profile-picture">
            <img src="{{ asset('img/logo.jpg') }}" alt="Foto Profil">
        </div>
        <ul class="nav-list">
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Tentang Kami</a></li>
            <li><a href="#">Layanan</a></li>
            <li><a href="#">Kontak</a></li>
        </ul>
    </nav>
    <header class="header">
        <h1 class="header-title">Selamat Datang di Website Kami</h1>
        <p class="header-subtitle">Ini adalah header contoh untuk proyek Anda</p>
    </header>
    <div class="intro">
        <h1>Selamat Datang di Website Kami</h1>
        <p>Ini adalah halaman contoh dengan intro teks. Anda dapat menambahkan konten Anda di sini.</p>
    </div>

    <div class="box-container">
        <!-- Kotak 1 -->
        <section class="box">
            <h2>Kotak 1</h2>
            <p>Isi dari kotak 1.</p>
        </section>

        <!-- Kotak 2 -->
        <section class="box">
            <h2>Kotak 2</h2>
            <p>Isi dari kotak 2.</p>
        </section>

        <!-- Kotak 3 -->
        <section class="box">
            <h2>Kotak 3</h2>
            <p>Isi dari kotak 3.</p>
        </section>
    </div>

   <!-- Footer -->
   <footer class="footer">
        <p>&copy; 2023 Nama Anda - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac massa urna. Nullam bibendum id ipsum vel lacinia.</p>
    </footer>
</body>
</html>
