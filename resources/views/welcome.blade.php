<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>REX_TOR | Profil Personal</title>
</head>
<body class="bg-gray-50 text-gray-900 font-sans antialiased selection:bg-blue-600 selection:text-white">

    <!-- Memanggil Header -->
    @include('partials.header')

    <!-- Konten Utama (space-y-20 dihapus agar tidak ada jarak antar section) -->
    <main class="container mx-auto px-6 py-12 mb-20">

        <!-- PANEL: Beranda -->
        <section id="beranda" class="section-card bg-white p-12 md:p-20 rounded-[2rem] shadow-xl border border-gray-100 flex flex-col md:flex-row items-center gap-10 scroll-mt-24">
            <div class="md:w-1/2 space-y-6">
                <div class="inline-block px-4 py-1.5 bg-blue-100 text-blue-700 font-bold rounded-full text-sm tracking-wide">
                    👋 Selamat Datang
                </div>
                <h1 class="text-5xl md:text-6xl font-black text-black leading-tight">
                    Halo, Saya <span class="text-blue-600">Tegar</span>
                </h1>
                <p class="text-xl text-gray-600 font-medium leading-relaxed">
                    Saya seorang pengembang digital yang berfokus pada pembuatan solusi modern dengan desain yang bersih dan kode yang terstruktur.
                </p>
                <div class="pt-4">
                    <a href="#contact" class="px-8 py-4 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-full transition shadow-lg shadow-blue-600/30">
                        Mulai Kolaborasi
                    </a>
                </div>
            </div>
            <div class="md:w-1/2 flex justify-center">
                <!-- Placeholder Foto Profil -->
                <div class="w-72 h-72 bg-gradient-to-tr from-blue-600 to-blue-300 rounded-[2rem] rotate-3 shadow-2xl flex items-center justify-center overflow-hidden border-4 border-white">
                    <span class="text-white text-5xl font-black -rotate-3">FOTO</span>
                </div>
            </div>
        </section>

        <!-- PANEL: Tentang -->
        <section id="tentang" class="section-card bg-black text-white p-12 md:p-16 rounded-[2rem] shadow-xl relative overflow-hidden scroll-mt-24">
            <!-- Dekorasi Biru -->
            <div class="absolute -top-20 -right-20 w-72 h-72 bg-blue-600 rounded-full blur-[80px] opacity-40"></div>
            
            <div class="relative z-10 max-w-3xl">
                <h2 class="text-4xl font-black mb-6 flex items-center gap-4">
                    <span class="w-12 h-2 bg-blue-600 rounded-full"></span> Tentang Saya
                </h2>
                <p class="text-lg text-gray-300 leading-relaxed mb-6 font-medium">
                    Sebagai seorang yang antusias terhadap teknologi, saya memiliki minat besar dalam menciptakan produk digital yang tidak hanya fungsional, tetapi juga memberikan pengalaman pengguna yang luar biasa. 
                </p>
                <p class="text-lg text-gray-300 leading-relaxed font-medium">
                    Keseharian saya melibatkan pemecahan masalah yang kompleks menjadi antarmuka yang sederhana dan indah. Saya percaya bahwa desain dan kode harus berjalan beriringan.
                </p>
            </div>
        </section>

        <!-- PANEL: Project -->
        <section id="project" class="section-card bg-white p-12 md:p-16 rounded-[2rem] shadow-xl border border-gray-100 scroll-mt-24">
            <h2 class="text-4xl font-black text-black mb-10 flex items-center gap-4">
                <span class="w-12 h-2 bg-blue-600 rounded-full"></span> Project Terbaru
            </h2>
            
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Project Card 1 -->
                <div class="group bg-gray-50 rounded-3xl p-8 border border-gray-200 hover:border-blue-600 hover:shadow-2xl hover:shadow-blue-600/10 transition duration-300">
                    <div class="w-full h-48 bg-gray-200 rounded-2xl mb-6 overflow-hidden flex items-center justify-center">
                        <span class="text-gray-400 font-bold">Thumbnail Project</span>
                    </div>
                    <h3 class="text-2xl font-bold text-black mb-3 group-hover:text-blue-600 transition">Aplikasi E-Commerce</h3>
                    <p class="text-gray-600 font-medium">Platform jual beli modern dengan fitur real-time dan dashboard analitik yang komprehensif.</p>
                </div>

                <!-- Project Card 2 -->
                <div class="group bg-gray-50 rounded-3xl p-8 border border-gray-200 hover:border-blue-600 hover:shadow-2xl hover:shadow-blue-600/10 transition duration-300">
                    <div class="w-full h-48 bg-gray-200 rounded-2xl mb-6 overflow-hidden flex items-center justify-center">
                        <span class="text-gray-400 font-bold">Thumbnail Project</span>
                    </div>
                    <h3 class="text-2xl font-bold text-black mb-3 group-hover:text-blue-600 transition">Sistem Manajemen Sekolah</h3>
                    <p class="text-gray-600 font-medium">Sistem informasi untuk memantau kehadiran, nilai, dan aktivitas siswa berbasis web.</p>
                </div>
            </div>
        </section>

        <!-- PANEL: Pengalaman -->
        <section id="pengalaman" class="section-card bg-blue-50 p-12 md:p-16 rounded-[2rem] shadow-xl border border-blue-100 scroll-mt-24">
            <h2 class="text-4xl font-black text-black mb-12 flex items-center gap-4">
                <span class="w-12 h-2 bg-blue-600 rounded-full"></span> Pengalaman
            </h2>
            
            <div class="space-y-8 relative before:absolute before:inset-0 before:ml-5 before:-translate-x-px md:before:mx-auto md:before:translate-x-0 before:h-full before:w-1 before:bg-blue-200">
                <!-- Timeline Item 1 -->
                <div class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group is-active">
                    <div class="flex items-center justify-center w-10 h-10 rounded-full border-4 border-blue-50 bg-blue-600 shadow shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2 z-10"></div>
                    <div class="w-[calc(100%-4rem)] md:w-[calc(50%-2.5rem)] p-6 rounded-2xl bg-white shadow-lg border border-gray-100">
                        <div class="text-blue-600 font-black text-sm mb-1">2024 - Sekarang</div>
                        <h3 class="font-black text-xl text-black">Web Developer</h3>
                        <p class="text-gray-600 mt-2 font-medium">Bekerja di perusahaan teknologi mengembangkan aplikasi web menggunakan Laravel dan Vue.js.</p>
                    </div>
                </div>

                <!-- Timeline Item 2 -->
                <div class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group is-active">
                    <div class="flex items-center justify-center w-10 h-10 rounded-full border-4 border-blue-50 bg-black shadow shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2 z-10"></div>
                    <div class="w-[calc(100%-4rem)] md:w-[calc(50%-2.5rem)] p-6 rounded-2xl bg-white shadow-lg border border-gray-100">
                        <div class="text-gray-500 font-black text-sm mb-1">2022 - 2024</div>
                        <h3 class="font-black text-xl text-black">Freelance Programmer</h3>
                        <p class="text-gray-600 mt-2 font-medium">Menyelesaikan berbagai proyek pembuatan website profil perusahaan dan sistem kasir.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- PANEL: Keahlian -->
        <section id="keahlian" class="section-card bg-white p-12 md:p-16 rounded-[2rem] shadow-xl border border-gray-100 scroll-mt-24">
            <div class="text-center max-w-2xl mx-auto mb-10">
                <h2 class="text-4xl font-black text-black mb-4 justify-center flex items-center gap-4">
                    Keahlian Teknis
                </h2>
                <p class="text-gray-600 font-medium">Teknologi dan alat yang saya gunakan sehari-hari untuk membangun produk digital.</p>
            </div>
            
            <div class="flex flex-wrap justify-center gap-4">
                <span class="px-6 py-3 bg-gray-50 border border-gray-200 text-black rounded-2xl text-lg font-bold shadow-sm hover:border-blue-600 hover:text-blue-600 transition cursor-default">Laravel PHP</span>
                <span class="px-6 py-3 bg-gray-50 border border-gray-200 text-black rounded-2xl text-lg font-bold shadow-sm hover:border-blue-600 hover:text-blue-600 transition cursor-default">Tailwind CSS</span>
                <span class="px-6 py-3 bg-blue-600 border border-blue-600 text-white rounded-2xl text-lg font-bold shadow-md cursor-default">JavaScript / Alpine.js</span>
                <span class="px-6 py-3 bg-gray-50 border border-gray-200 text-black rounded-2xl text-lg font-bold shadow-sm hover:border-blue-600 hover:text-blue-600 transition cursor-default">MySQL Database</span>
                <span class="px-6 py-3 bg-gray-50 border border-gray-200 text-black rounded-2xl text-lg font-bold shadow-sm hover:border-blue-600 hover:text-blue-600 transition cursor-default">Git & GitHub</span>
                <span class="px-6 py-3 bg-black border border-black text-white rounded-2xl text-lg font-bold shadow-md cursor-default">UI/UX Design</span>
            </div>
        </section>

        <!-- PANEL: Contact -->
        <section id="contact" class="section-card bg-gradient-to-br from-black to-blue-900 text-white p-12 md:p-20 rounded-[2rem] shadow-2xl scroll-mt-24 text-center">
            <h2 class="text-4xl font-black mb-6">Punya Ide Brilian?</h2>
            <p class="text-xl text-blue-200 mb-10 max-w-2xl mx-auto font-medium">
                Saya selalu terbuka untuk mendiskusikan pekerjaan desain, proyek pengembangan, atau peluang kemitraan.
            </p>
            <a href="mailto:email@example.com" class="inline-block px-10 py-5 bg-blue-600 hover:bg-white hover:text-blue-600 text-white font-black text-lg rounded-full transition-all duration-300 shadow-xl shadow-blue-600/50">
                Kirim Pesan Email
            </a>
        </section>

    </main>

    <!-- Memanggil Footer -->
    @include('partials.footer')

    <!-- JavaScript untuk efek Highlight Menu Navigasi -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const sections = document.querySelectorAll("section.section-card");
            const navLinks = document.querySelectorAll(".nav-link");

            function updateNavHighlight() {
                let currentScroll = window.scrollY;
                let currentSectionId = "";

                // Cari section mana yang sedang aktif di layar
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.offsetHeight;
                    
                    if (currentScroll >= (sectionTop - 150)) {
                        currentSectionId = section.getAttribute("id");
                    }
                });

                // Hapus dan tambahkan class highlight pada menu
                navLinks.forEach(link => {
                    link.classList.remove('text-blue-600', 'bg-blue-50', 'font-black');
                    link.classList.add('text-gray-600', 'font-semibold');

                    if (link.getAttribute("href") === `#${currentSectionId}`) {
                        link.classList.add('text-blue-600', 'bg-blue-50', 'font-black');
                        link.classList.remove('text-gray-600', 'font-semibold');
                    }
                });
            }

            // Jalankan saat scroll dan saat halaman pertama kali dimuat
            window.addEventListener('scroll', updateNavHighlight);
            updateNavHighlight();
        });
    </script>
</body>
</html>
