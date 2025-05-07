<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SIPADUKA</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=poppins:300,400,500,600" rel="stylesheet" />
        <link href="https://fonts.bunny.net/css?family=montserrat:500,600,700" rel="stylesheet" />

        <!-- Styles -->
        <style>
            body {
                font-family: 'Poppins', sans-serif;
                background-color: #f8f9fa;
                color: #495057;
                margin: 0;
                padding: 0;
            }
            
            .container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 20px;
                min-height: 100vh;
                display: flex;
                flex-direction: column;
            }
            
            .navbar {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 15px 0;
            }
            
            .logo {
                font-family: 'Montserrat', sans-serif;
                font-weight: 700;
                font-size: 28px;
                color: #6c63ff;
                text-decoration: none;
            }
            
            .nav-links {
                display: flex;
                gap: 20px;
            }
            
            .nav-link {
                color: #6c757d;
                text-decoration: none;
                font-size: 15px;
                transition: color 0.3s;
                padding: 8px 15px;
                border-radius: 6px;
            }
            
            .nav-link:hover {
                color: #6c63ff;
                background-color: #f0f0ff;
            }
            
            .nav-link.primary {
                background-color: #6c63ff;
                color: white;
            }
            
            .nav-link.primary:hover {
                background-color: #5a52d5;
                color: white;
            }
            
            .hero {
                display: flex;
                flex-direction: row;
                align-items: center;
                justify-content: space-between;
                margin-top: 50px;
                flex: 1;
            }
            
            .hero-content {
                flex: 1;
                padding-right: 40px;
            }
            
            .hero-title {
                font-family: 'Montserrat', sans-serif;
                font-size: 42px;
                font-weight: 700;
                color: #343a40;
                margin-bottom: 20px;
                line-height: 1.2;
            }
            
            .hero-subtitle {
                font-size: 18px;
                color: #6c757d;
                margin-bottom: 30px;
                line-height: 1.6;
            }
            
            .hero-image {
                flex: 1;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            
            .hero-image img {
                max-width: 100%;
                height: auto;
                border-radius: 10px;
                box-shadow: 0 10px 30px rgba(108, 99, 255, 0.1);
            }
            
            .cta-button {
                display: inline-block;
                background-color: #6c63ff;
                color: white;
                padding: 12px 30px;
                border-radius: 8px;
                font-size: 16px;
                font-weight: 500;
                text-decoration: none;
                transition: all 0.3s;
                border: none;
                cursor: pointer;
                box-shadow: 0 4px 6px rgba(108, 99, 255, 0.2);
            }
            
            .cta-button:hover {
                background-color: #5a52d5;
                transform: translateY(-2px);
                box-shadow: 0 6px 8px rgba(108, 99, 255, 0.25);
            }
            
            .features {
                margin-top: 40px;
                margin-bottom: 40px;
            }
            
            .feature-item {
                display: flex;
                align-items: center;
                margin-bottom: 20px;
            }
            
            .feature-icon {
                width: 40px;
                height: 40px;
                background-color: #f0f0ff;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-right: 15px;
                color: #6c63ff;
                font-size: 18px;
            }
            
            .feature-text {
                font-size: 16px;
                color: #495057;
            }
            
            @media (max-width: 768px) {
                .hero {
                    flex-direction: column-reverse;
                    text-align: center;
                }
                
                .hero-content {
                    padding-right: 0;
                    margin-top: 30px;
                }
                
                .feature-item {
                    justify-content: center;
                }
            }
      /* Dark mode styles */
      body.dark {
        background-color: #1a202c;
        color: #cbd5e0;
      }
      body.dark nav, body.dark footer {
        background-color: #2d3748;
        color: #cbd5e0;
      }
      body.dark a:hover {
        color: #63b3ed;
      }
      .dark-mode-toggle {
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 6px;
        padding: 6px 10px;
        border-radius: 6px;
        background-color: #e2e8f0;
        color: #1a202c;
        transition: background-color 0.3s, color 0.3s;
        border: none;
        font-size: 14px;
        font-weight: 600;
      }
      .dark-mode-toggle:hover {
        background-color: #cbd5e0;
      }
      body.dark .dark-mode-toggle {
        background-color: #4a5568;
        color: #cbd5e0;
      }
      body.dark .dark-mode-toggle:hover {
        background-color: #2d3748;
      }
      .icon {
        width: 18px;
        height: 18px;
        fill: currentColor;
      }
        </style>
    </head>
    <body>
        <div class="container">
            <nav class="navbar">
                <a href="/" class="logo">SIPADUKA</a>
                
                <div class="nav-links">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="nav-link">Login</a>
                            
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="nav-link primary">Register</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </nav>
            
            <div class="hero">
                <div class="hero-content">
                    <h1 class="hero-title">Solusi Terpadu untuk Manajemen Tenaga Kerja</h1>
                    <p class="hero-subtitle">Kelola data dan kemampuan pekerja kamu lewat sistem yang kece, efisien, dan serba digital.</p>
                    
                    <a href="{{ url('/dashboard') }}" class="cta-button">Mulai Sekarang</a>
                    
                    <div class="features">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                            </div>
                            <div class="feature-text">Kelola anggota perusahaan dengan mudah</div>
                        </div>
                        
                        <div class="feature-item">
                            <div class="feature-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                            </div>
                            <div class="feature-text">Pantau data pekerja dalam satu perusahaan</div>
                        </div>
                        
                        <div class="feature-item">
                            <div class="feature-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path></svg>
                            </div>
                            <div class="feature-text">Tingkatkan transparansi dan akuntabilitas</div>
                        </div>
                    </div>
                </div>
                
                <div class="hero-image">
                    <img src="https://img.freepik.com/free-vector/community-concept-illustration_114360-1033.jpg" alt="Ilustrasi Organisasi Masyarakat">
                </div>
            </div>
        </div>
    </body>
</html>
