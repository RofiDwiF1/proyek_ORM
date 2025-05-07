<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIPADUKA</title>
    @vite('resources/css/app.css')
    <style>
      /* Dark mode styles */
      body.dark {
        background-color: #1a202c;
        color: #cbd5e0;
      }
      
      body.dark nav, body.dark footer {
        background-color: #2d3748;
        color: #cbd5e0;
      }
      
      /* Sidebar styles */
      .sidebar {
        height: 100%;
        width: 250px;
        position: fixed;
        top: 0;
        left: 0;
        background-color: white;
        box-shadow: 2px 0 5px rgba(0,0,0,0.1);
        transition: all 0.3s;
        z-index: 999;
      }
      
      body.dark .sidebar {
        background-color: #2d3748;
      }
      
      .sidebar.close {
        width: 78px;
      }
      
      .sidebar-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 20px 16px;
        border-bottom: 1px solid #e2e8f0;
      }
      
      body.dark .sidebar-header {
        border-bottom: 1px solid #4a5568;
      }
      
      .sidebar-links {
        padding: 20px 0;
      }
      
      .sidebar-link {
        display: flex;
        align-items: center;
        padding: 12px 16px;
        color: #4a5568;
        text-decoration: none;
        transition: all 0.3s;
      }
      
      .sidebar-link:hover {
        background-color: #f7fafc;
        color: #3182ce;
      }
      
      body.dark .sidebar-link {
        color: #cbd5e0;
      }
      
      body.dark .sidebar-link:hover {
        background-color: #4a5568;
        color: #63b3ed;
      }
      
      .sidebar-link .icon {
        margin-right: 12px;
      }
      
      .sidebar.close .link-text {
        display: none;
      }
      
      .main-content {
        margin-left: 250px;
        transition: all 0.3s;
      }
      
      .main-content.sidebar-closed {
        margin-left: 78px;
      }
      
      .top-bar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 16px 24px;
        background-color: white;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
      }
      
      body.dark .top-bar {
        background-color: #2d3748;
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
      
      .toggle-btn {
        background: none;
        border: none;
        cursor: pointer;
        color: #4a5568;
      }
      
      body.dark .toggle-btn {
        color: #cbd5e0;
      }
    </style>
</head>
<body class="bg-gray-100">
    <!-- Sidebar -->
    <nav class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <button class="toggle-btn" id="sidebarToggle">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M15 18l-6-6 6-6"/>
                </svg>
            </button>
        </div>
        <div class="sidebar-links">
            <a href="{{ route('dashboard') }}" class="sidebar-link">
                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="3" y="3" width="7" height="7"></rect>
                    <rect x="14" y="3" width="7" height="7"></rect>
                    <rect x="14" y="14" width="7" height="7"></rect>
                    <rect x="3" y="14" width="7" height="7"></rect>
                </svg>
                <span class="link-text">Dashboard</span>
            </a>
            <a href="{{ route('companies.index') }}" class="sidebar-link">
                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                    <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                </svg>
                <span class="link-text">Companies</span>
            </a>
            <a href="{{ route('employees.index') }}" class="sidebar-link">
                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>
                <span class="link-text">Employees</span>
            </a>
            <a href="{{ route('skills.index') }}" class="sidebar-link">
                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>
                </svg>
                <span class="link-text">Skills</span>
            </a>
            <a href="http://localhost:8000/" class="sidebar-link">
                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M19 12H5M12 19l-7-7 7-7"/>
                </svg>
                <span class="link-text">Kembali</span>
            </a>
        </div>
    </nav>

    <!-- Main content -->
    <div class="main-content" id="mainContent">
        <div class="top-bar">
            <div class="text-xl font-bold">SIPADUKA</div>
            <button id="darkModeToggle" class="dark-mode-toggle" aria-label="Toggle dark mode">
                <svg id="iconSun" class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="5"></circle>
                    <line x1="12" y1="1" x2="12" y2="3"></line>
                    <line x1="12" y1="21" x2="12" y2="23"></line>
                    <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                    <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                    <line x1="1" y1="12" x2="3" y2="12"></line>
                    <line x1="21" y1="12" x2="23" y2="12"></line>
                    <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                    <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                </svg>
                <svg id="iconMoon" class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display:none;">
                    <path d="M21 12.79A9 9 0 0 1 12.21 3 7 7 0 0 0 12 17a7 7 0 0 0 9-4.21z"></path>
                </svg>
            </button>
        </div>

        <main class="py-6 px-6">
            @yield('content')
        </main>
    </div>

    <script>
      const darkModeToggle = document.getElementById('darkModeToggle');
      const iconSun = document.getElementById('iconSun');
      const iconMoon = document.getElementById('iconMoon');
      const sidebar = document.getElementById('sidebar');
      const mainContent = document.getElementById('mainContent');
      const sidebarToggle = document.getElementById('sidebarToggle');

      function setDarkMode(enabled) {
        if (enabled) {
          document.body.classList.add('dark');
          iconSun.style.display = 'none';
          iconMoon.style.display = 'inline';
          localStorage.setItem('darkMode', 'enabled');
        } else {
          document.body.classList.remove('dark');
          iconSun.style.display = 'inline';
          iconMoon.style.display = 'none';
          localStorage.setItem('darkMode', 'disabled');
        }
      }

      darkModeToggle.addEventListener('click', () => {
        const isDark = document.body.classList.contains('dark');
        setDarkMode(!isDark);
      });

      sidebarToggle.addEventListener('click', () => {
        sidebar.classList.toggle('close');
        mainContent.classList.toggle('sidebar-closed');
        
        // Change toggle icon direction
        if (sidebar.classList.contains('close')) {
          sidebarToggle.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>';
        } else {
          sidebarToggle.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>';
        }
      });

      window.onload = () => {
        const darkModeSetting = localStorage.getItem('darkMode');
        setDarkMode(darkModeSetting === 'enabled');
        
        // Check for sidebar state in localStorage
        const sidebarState = localStorage.getItem('sidebarState');
        if (sidebarState === 'closed') {
          sidebar.classList.add('close');
          mainContent.classList.add('sidebar-closed');
          sidebarToggle.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>';
        }
      };
    </script>
</body>
</html>
