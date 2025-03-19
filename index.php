<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crypto Lampung</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --pepe-green: #00FF93;
            --pepe-dark: #121212;
            --pepe-neon: #00ffff;
        }
        
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap');

        * {
            cursor: none;
            scroll-behavior: smooth;
        }

        body {
            background-color: var(--pepe-dark);
            color: white;
            font-family: 'Orbitron', sans-serif;
            overflow-x: hidden;
        }

        .custom-cursor {
            position: fixed;
            width: 20px;
            height: 20px;
            border: 2px solid var(--pepe-green);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            pointer-events: none;
            z-index: 9999;
            transition: transform 0.1s ease;
        }

        .navbar {
            background: linear-gradient(90deg, rgba(0,0,0,0.8), rgba(18,18,18,0.9));
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }

        .hero-section {
            background: linear-gradient(45deg, #000000, #434343);
            height: 100vh;
            display: flex;
            align-items: center;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero-particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        .btn-custom {
            background: linear-gradient(45deg, var(--pepe-green), var(--pepe-neon));
            color: white;
            border: none;
            padding: 12px 35px;
            border-radius: 50px;
            font-weight: bold;
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(0, 255, 147, 0.3);
        }

        .btn-custom:hover {
            transform: scale(1.1);
            box-shadow: 0 8px 20px rgba(0, 255, 147, 0.5);
        }

        .section {
            padding: 100px 0;
            position: relative;
        }

        .stats-card {
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(0,255,147,0.2);
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }

        .stats-card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0,255,147,0.2);
        }

        .tokenomics-chart {
            background: rgba(255,255,255,0.1);
            border-radius: 15px;
            padding: 30px;
        }

        .social-icons a {
            color: var(--pepe-green);
            margin: 0 15px;
            font-size: 30px;
            transition: all 0.3s ease;
        }

        .social-icons a:hover {
            color: var(--pepe-neon);
            transform: scale(1.2);
        }

        .neon-text {
            text-shadow: 
                0 0 5px var(--pepe-green),
                0 0 10px var(--pepe-green),
                0 0 20px var(--pepe-green);
            animation: glow 1.5s infinite alternate;
        }

        @keyframes glow {
            from {
                text-shadow: 
                    0 0 5px var(--pepe-neon),
                    0 0 10px var(--pepe-neon),
                    0 0 20px var(--pepe-neon);
            }
            to {
                text-shadow: 
                    0 0 10px var(--pepe-neon),
                    0 0 20px var(--pepe-neon),
                    0 0 30px var(--pepe-neon);
            }
        }

        .parallax-bg {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .border-pepe {
            border: 2px solid var(--pepe-green);
            transition: all 0.3s ease;
        }

        .border-pepe:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(0,255,147,0.3);
        }

        .social-links a {
            color: var(--pepe-green);
            margin: 0 10px;
            font-size: 24px;
            transition: color 0.3s ease;
        }

        .social-links a:hover {
            color: var(--pepe-neon);
        }

        .text-pepe {
            color: var(--pepe-green);
        }
    </style>
</head>
<body>
    <!-- Custom Cursor -->
    <div class="custom-cursor" id="customCursor"></div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">$CRLP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#roadmap">Roadmap</a></li>
                    <li class="nav-item"><a class="nav-link" href="#community">Community</a></li>
                    <li class="nav-item">
                        <a class="btn btn-custom ms-3" href="#join">Join Our Community</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="hero-particles" id="heroParticles"></div>
        <div class="container position-relative z-2">
            <h1 class="display-1 mb-4 neon-text">$CRLP</h1>
            <p class="lead mb-4">Komunitas Crypto Pertama di Lampung</p>
            <a href="#about" class="btn btn-custom btn-lg">Learn More</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2 class="mb-4 neon-text">Tentang Crypto Lampung</h2>
                    <p>Menjadi komunitas crypto terdepan di Lampung yang mendorong edukasi, inklusi finansial, dan pengembangan ekosistem crypto dan blockchain yang aman, inovatif, dan berkelanjutan.</p>
                </div>
                <div class="col-md-6">
                    <div class="stats-card">
                        <h4>Sejarah Singkat</h4>
                        <ul class="list-unstyled">
                            <li>waktu awal dibentuk : </li>
                            <li>tempat awal dibentuk : </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Roadmap Section -->
<section id="roadmap" class="section bg-dark">
    <div class="container">
        <h2 class="text-center mb-5 neon-text">Roadmap Komunitas Crypto Lampung</h2>
        <div class="roadmap-timeline position-relative">
            <div class="row">
                <div class="col-12">
                    <div class="roadmap-container">
                        <!-- Fase 1: Pembentukan & Edukasi -->
                        <div class="roadmap-item left">
                            <div class="roadmap-content">
                                <h3>Fase 1: Pembentukan & Edukasi 🌱</h3>
                                <ul>
                                    <li>🤝 Pembentukan Struktur Komunitas</li>
                                    <li>📚 Program Edukasi Blockchain Dasar</li>
                                    <li>🌐 Launching Website Resmi</li>
                                    <li>📱 Pembukaan Kanal Komunikasi Resmi</li>
                                    <li>🎓 Workshop Crypto Pemula</li>
                                </ul>
                                <span class="roadmap-date">Q1 2024</span>
                            </div>
                        </div>

                        <!-- Fase 2: Pengembangan Jaringan -->
                        <div class="roadmap-item right">
                            <div class="roadmap-content">
                                <h3>Fase 2: Pengembangan Jaringan 🌍</h3>
                                <ul>
                                    <li>🤝 Kerjasama dengan Perguruan Tinggi Lampung</li>
                                    <li>💼 Inisiasi Program Magang Blockchain</li>
                                    <li>🏢 Networking dengan Pelaku Bisnis Lokal</li>
                                    <li>📊 Seminar Blockchain untuk UMKM</li>
                                    <li>🌟 Program Mentor Crypto Profesional</li>
                                </ul>
                                <span class="roadmap-date">Q2 2024</span>
                            </div>
                        </div>

                        <!-- Fase 3: Inovasi Lokal -->
                        <div class="roadmap-item left">
                            <div class="roadmap-content">
                                <h3>Fase 3: Inovasi Lokal 💡</h3>
                                <ul>
                                    <li>🚀 Hackathon Blockchain Lampung</li>
                                    <li>💰 Pendanaan Startup Blockchain Lokal</li>
                                    <li>🤖 Inkubasi Proyek Blockchain Inovatif</li>
                                    <li>🌐 Platform Kolaborasi Digital</li>
                                    <li>📈 Program Akselerasi Startup Crypto</li>
                                </ul>
                                <span class="roadmap-date">Q3 2024</span>
                            </div>
                        </div>

                        <!-- Fase 4: Ekosistem Blockchain -->
                        <div class="roadmap-item right">
                            <div class="roadmap-content">
                                <h3>Fase 4: Ekosistem Blockchain 🌐</h3>
                                <ul>
                                    <li>🏛️ Advokasi Regulasi Crypto Daerah</li>
                                    <li>🤝 Kerjasama Pemerintah Daerah</li>
                                    <li>💼 Program Sertifikasi Blockchain</li>
                                    <li>🌍 Konferensi Blockchain Nasional</li>
                                    <li>🚀 Pembentukan Hub Inovasi Crypto</li>
                                </ul>
                                <span class="roadmap-date">Q4 2024</span>
                            </div>
                        </div>

                        <!-- Fase 5: Transformasi Digital -->
                        <div class="roadmap-item left">
                            <div class="roadmap-content">
                                <h3>Fase 5: Transformasi Digital 🚀</h3>
                                <ul>
                                    <li>🌐 Ekosistem Blockchain Terintegrasi</li>
                                    <li>📚 Pusat Edukasi Crypto Terdepan</li>
                                    <li>💡 Inovasi Berkelanjutan</li>
                                    <li>🤝 Jaringan Internasional</li>
                                    <li>🏆 Lampung sebagai Hub Crypto Indonesia</li>
                                </ul>
                                <span class="roadmap-date">2025</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Visi & Misi Section -->
        <div class="row mt-5">
            <div class="col-md-6">
                <div class="card bg-dark text-white">
                    <div class="card-body">
                        <h4 class="card-title neon-text">Visi</h4>
                        <p>Menjadi komunitas crypto terdepan di Lampung yang mendorong edukasi, inklusi finansial, pengembangan ekosistem crypto dan blockchain yang aman, inovatif, dan berkelanjutan.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card bg-dark text-white">
                    <div class="card-body">
                        <h4 class="card-title neon-text">Misi</h4>
                        <ul class="list-unstyled">
                            <li>🤝 Mengembangkan Komunitas yang Solid</li>
                            <li>🌐 Membangun Jaringan Kuat</li>
                            <li>📚 Berbagi Pengalaman dan Pengetahuan</li>
                            <li>💡 Mendukung Inovasi Lokal</li>
                            <li>🚀 Mendorong Kolaborasi Blockchain</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Community Section -->
    <section id="community" class="section">
        <div class="container text-center">
            <h2 class="mb-5 neon-text">Gabung Bersama Komunitas Crypto Lampung</h2>
            <div class="social-icons">
                <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="#" target="_blank"><i class="fab fa-telegram"></i></a>
                <a href="#" target="_blank"><i class="fab fa-discord"></i></a>
            </div>
        </div>
    </section>

    <!-- Founders Section -->
    <section id="founders" class="section bg-dark">
        <div class="container">
            <h2 class="text-center mb-5 neon-text">The Founder</h2>
            <div class="row">
                <!-- Founder Cards -->
                <div class="col-md-3 mb-4">
                    <div class="card bg-transparent text-white border-pepe">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcrwMvUgClCnBNDMfiBcopM8BgT74epXtu0g&s" class="card-img-top" alt="Founder 1">
                        <div class="card-body text-center">
                            <h5 class="card-title">Alex "Meme King" Rodriguez</h5>
                            <p class="card-text">Blockchain Strategist</p>
                            <div class="social-links">
                                <a href="#" class="text-pepe"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="text-pepe"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card bg-transparent text-white border-pepe">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcrwMvUgClCnBNDMfiBcopM8BgT74epXtu0g&s" class="card-img-top" alt="Founder 2">
                        <div class="card-body text-center">
                            <h5 class="card-title">Emma "Crypto Queen" Chen</h5>
                            <p class="card-text">Marketing Genius</p>
                            <div class="social-links">
                                <a href="#" class="text-pepe"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="text-pepe"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card bg-transparent text-white border-pepe">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcrwMvUgClCnBNDMfiBcopM8BgT74epXtu0g&s" class="card-img-top" alt="Founder 3">
                        <div class="card-body text-center">
                            <h5 class="card-title">Jake "Tech Wizard" Thompson</h5>
                            <p class="card-text">Lead Developer</p>
                            <div class="social-links">
                                <a href="#" class="text-pepe"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="text-pepe"><i class="fab fa-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card bg-transparent text-white border-pepe">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcrwMvUgClCnBNDMfiBcopM8BgT74epXtu0g&s" class="card-img-top" alt="Founder 4">
                        <div class="card-body text-center">
                            <h5 class="card-title">Sophia "Community Leader" Kim</h5>
                            <p class="card-text">Community Manager</p>
                            <div class="social-links">
                                <a href="#" class="text-pepe"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="text-pepe"><i class="fab fa-discord"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Website Developers Section -->
    <section id="developers" class="section">
        <div class="container">
            <h2 class="text-center mb-5 neon-text">Website Development Team</h2>
            <div class="row justify-content-center">
                <div class="col-md-4 text-center">
                    <div class="card bg-dark text-white mb-4">
                        <div class="card-body">
                            <h4 class="card-title">Lead Web Developer</h4>
                            <p class="card-text">
                                <strong>Nama: Darma Wijaya</strong><br>
                            </p>
                            <div class="social-links">
                                <a href="#" class="text-pepe"><i class="fab fa-github"></i></a>
                                <a href="#" class="text-pepe"><i class="fab fa-linkedin"></i></a>
                                <a href="#" class="text-pepe"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark py-4">
        <div class="container text-center">
            <p>&copy; 2025 $CRLP. All Rights Reserved.</p>
            <small>Disclaimer: Kami Ada Untuk Melakukan Edukasi.</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tsparticles@2.1.0/tsparticles.min.js"></script>
    <script>
        // Custom Cursor
        document.addEventListener('mousemove', (e) => {
            const cursor = document.getElementById('customCursor');
            cursor.style.left = e.clientX + 'px';
            cursor.style.top = e.clientY + 'px';
        });

        // Particle Effect
        tsParticles.load("heroParticles", {
            particles: {
                number: { value: 80, density: { enable: true, value_area: 800 } },
                color: { value: "#00FF93" },
                shape: { type: "circle" },
                opacity: { value: 0.5, random: false },
                size: { value: 3, random: true },
                line_linked: { enable: true, distance: 150, color: "#00FF93", opacity: 0.4, width: 1 },
                move: { enable: true, speed: 2, direction: "none", random: false, straight: false, out_mode: "out" }
            },
            interactivity: {
                detect_on: "canvas",
                events: { onhover: { enable: true, mode: "repulse" } },
                modes: { repulse: { distance: 100, duration: 0.4 } }
            },
            retina_detect: true
        });
    </script>
</body>
</html>