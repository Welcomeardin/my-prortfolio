<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <title>Welcome Ardin · Web Designer & Developer</title>
  <!-- Tailwind CSS + Google Fonts -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Century+Gothic:ital,wght@0,400;0,700;1,400&family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&display=swap" rel="stylesheet">
  <style>
    * {
      font-family: 'Inter', system-ui, -apple-system, sans-serif;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: 'Century Gothic', 'Inter', system-ui, sans-serif;
    }

    body {
      background-color: #ffffff;
    }

    .card-hover {
      transition: all 0.3s cubic-bezier(0.2, 0, 0, 1);
    }

    .card-hover:hover {
      transform: translateY(-6px);
      box-shadow: 0 20px 35px -12px rgba(92, 79, 74, 0.15);
    }

    .btn-pulse:active {
      transform: scale(0.96);
    }

    .hero-gradient-mask {
      background: linear-gradient(92deg, #ffffff 0%, #ffffff 100%);
    }

    @media (min-width: 1024px) {
      .hero-image-clip {
        clip-path: inset(0 0 0 0);
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
      }
    }

    .stats-card {
      transition: all 0.2s ease;
    }

    .border-gold-light {
      border-color: rgba(201, 153, 107, 0.25);
    }

    /* Marquee animation */
    @keyframes marquee {
      0% {
        transform: translateX(0);
      }

      100% {
        transform: translateX(-50%);
      }
    }

    .marquee-container {
      overflow: hidden;
      width: 100%;
      position: relative;
    }

    .marquee {
      display: flex;
      width: max-content;
      animation: marquee 30s linear infinite;
    }

    .marquee:hover {
      animation-play-state: paused;
    }

    .border-dashed-gold {
      border-top: 1px dashed rgba(201, 153, 107, 0.5);
      border-bottom: 1px dashed rgba(201, 153, 107, 0.5);
    }

    .marquee-item {
      flex: 0 0 auto;
      padding: 0 2rem;
      display: flex;
      align-items: center;
      gap: 1rem;
    }

    /* Skills Orbit Animation */
    .skills-orbit-container {
      position: relative;
      width: 100%;
      aspect-ratio: 1/1;
      max-width: 400px;
      margin: 0 auto;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .orbit-ring {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      border-radius: 50%;
      border: 1px solid rgba(201, 153, 107, 0.1);
    }

    .orbit-ring-outer {
      width: 100%;
      height: 100%;
    }

    .orbit-ring-accent {
      width: 75%;
      height: 75%;
      border: 2px dashed #C9996B;
      opacity: 0.3;
    }

    .orbit-ring-inner {
      width: 50%;
      height: 50%;
    }

    .orbit-spin {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      animation: orbitSpin 40s linear infinite;
    }

    .orbit-pod {
      position: absolute;
      width: 60px;
      height: 60px;
      background: white;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 8px 25px rgba(92, 79, 74, 0.1);
      border: 2px solid #C9996B;
      transform: translate(-50%, -50%);
      transition: all 0.3s ease;
    }

    .orbit-pod:hover {
      transform: translate(-50%, -50%) scale(1.2);
      box-shadow: 0 12px 35px rgba(201, 153, 107, 0.3);
      z-index: 10;
    }

    .orbit-pod i {
      font-size: 1.8rem;
      color: #5C766D;
      animation: orbitCounterSpin 40s linear infinite;
    }

    .orbit-center {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 10;
      width: 100px;
      height: 100px;
      background: #5C766D;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 15px 40px rgba(92, 118, 109, 0.2);
      border: 3px solid #C9996B;
    }

    .orbit-center-inner {
      color: white;
      font-family: 'Century Gothic', sans-serif;
      font-weight: 800;
      font-size: 1.2rem;
      text-align: center;
    }

    @keyframes orbitSpin {
      from {
        transform: rotate(0deg);
      }

      to {
        transform: rotate(360deg);
      }
    }

    @keyframes orbitCounterSpin {
      from {
        transform: rotate(0deg);
      }

      to {
        transform: rotate(-360deg);
      }
    }

    .skills-split-container {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 4rem;
      align-items: center;
    }

    @media (max-width: 1024px) {
      .skills-split-container {
        grid-template-columns: 1fr;
        gap: 3rem;
        text-align: center;
      }
    }

    .skill-desc-block {
      margin-bottom: 2rem;
    }

    .skill-desc-title {
      font-family: 'Century Gothic', sans-serif;
      font-weight: 700;
      font-size: 1.2rem;
      color: #5C766D;
      margin-bottom: 0.5rem;
      display: flex;
      align-items: center;
      gap: 0.75rem;
    }

    .skill-desc-title i {
      color: #C9996B;
      font-size: 1.3rem;
    }

    .skill-desc-text {
      font-family: 'Inter', sans-serif;
      font-size: 1rem;
      line-height: 1.6;
      color: #5C4F4A;
      border-left: 3px solid #C9996B;
      padding-left: 1.5rem;
      margin-left: 0.5rem;
    }

    /* 3D Perspective Grid Styles */
    .hero-3d-container {
      perspective: 800px;
      position: relative;
      background: #fbfaf8;
      overflow: hidden;
      min-height: 85vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .grid-tunnel {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      transform-style: preserve-3d;
      pointer-events: none;
    }

    .grid-plane {
      position: absolute;
      background-image:
        radial-gradient(circle at 1px 1px, rgba(0, 0, 0, 0.08) 1.5px, transparent 0),
        linear-gradient(rgba(0, 0, 0, 0.04) 1px, transparent 1px),
        linear-gradient(90deg, rgba(0, 0, 0, 0.04) 1px, transparent 1px);
      background-size: 60px 60px;
      width: 400%;
      height: 400%;
      top: -150%;
      left: -150%;
    }

    .plane-bottom {
      transform: rotateX(90deg) translateZ(350px);
    }

    .plane-top {
      transform: rotateX(-90deg) translateZ(350px);
    }

    .plane-left {
      transform: rotateY(90deg) translateZ(640px);
    }

    .plane-right {
      transform: rotateY(-90deg) translateZ(640px);
    }

    /* Status Badge Style */
    .status-badge {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      padding: 8px 24px;
      background: white;
      border: 1px solid rgba(0, 0, 0, 0.06);
      border-radius: 100px;
      font-size: 0.85rem;
      font-weight: 500;
      color: #666;
      margin-bottom: 2.5rem;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.02);
    }

    .status-dot {
      width: 10px;
      height: 10px;
      background-color: #00D26A;
      border-radius: 50%;
      box-shadow: 0 0 8px rgba(0, 210, 106, 0.4);
    }

    /* Umuzi Style Buttons */
    .btn-umuzi-primary {
      background-color: #FF6B00;
      color: white;
      padding: 1.1rem 2.8rem;
      border-radius: 12px;
      font-weight: 800;
      transition: all 0.3s ease;
      box-shadow: 0 10px 25px -5px rgba(255, 107, 0, 0.4);
      display: inline-block;
    }

    .btn-umuzi-primary:hover {
      transform: translateY(-3px);
      box-shadow: 0 15px 30px -5px rgba(255, 107, 0, 0.5);
      filter: brightness(1.1);
    }

    .btn-umuzi-secondary {
      background-color: white;
      color: #1a1a1a;
      padding: 1.1rem 2.8rem;
      border-radius: 12px;
      font-weight: 800;
      border: 1px solid rgba(0, 0, 0, 0.15);
      transition: all 0.3s ease;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
      display: inline-block;
    }

    .btn-umuzi-secondary:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      border-color: rgba(0, 0, 0, 0.3);
    }

    .hero-title {
      font-family: 'Century Gothic', sans-serif;
      font-weight: 900;
      letter-spacing: -0.05em;
      line-height: 1.05;
      color: #1a1a1a;
      font-size: 5.5rem;
    }

    @media (max-width: 768px) {
      .hero-title {
        font-size: 3.5rem;
      }
    }

    .hero-title em {
      font-style: italic;
      font-weight: 400;
      font-family: "Playfair Display", serif;
      color: #333;
    }

    /* 3D Utilities */
    .perspective-lg {
      perspective: 1500px;
    }

    .preserve-3d {
      transform-style: preserve-3d;
    }

    .hover-3d {
      transition: transform 0.6s cubic-bezier(0.2, 0, 0, 1);
    }

    .hover-3d:hover {
      transform: rotateY(12deg) rotateX(6deg);
    }

    .translate-z-20 {
      transform: translateZ(20px);
    }

    .-translate-z-20 {
      transform: translateZ(-20px);
    }
  </style>
</head>

<body class="antialiased">

  <main class="max-w-[1280px] mx-auto px-8 md:px-16 lg:px-20 bg-white overflow-hidden relative border-l border-r border-[#C9996B]/30" style="border-image: linear-gradient(to bottom, #C9996B, transparent) 1;">

    <!-- ========== NAVBAR WITH CONTAINER LINES ========== -->
    <nav class="sticky top-0 z-50 bg-white/95 backdrop-blur-sm border-b border-[#C9996B]/20 -mx-8 md:-mx-16 lg:-mx-20">
      <div class="px-8 md:px-16 lg:px-20 py-4 flex items-center justify-between relative">
        <!-- LEFT LINE -->
        <div class="absolute left-0 top-1/2 -translate-y-1/2 w-6 h-[1px] bg-gradient-to-r from-transparent to-[#C9996B]"></div>

        <!-- LOGO/BRAND -->
        <div class="flex items-center gap-2 relative z-10">
          <div class="w-10 h-10 bg-[#5C766D] rounded-lg flex items-center justify-center text-white font-bold text-sm"><img src="img/me.jpg" alt="" class="rounded-lg w-10 h-10"></div>
          <span class="hidden sm:inline font-bold text-[#5C4F4A] text-sm">Ardin</span>
        </div>

        <!-- HAMBURGER MENU BUTTON (Mobile) -->
        <button id="menu-toggle" class="md:hidden relative z-20 flex items-center justify-center w-10 h-10">
          <svg class="w-6 h-6 text-[#5C4F4A]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>

        <!-- NAVIGATION BUTTONS (Desktop) -->
        <div id="nav-menu" class="hidden md:flex items-center gap-3 md:gap-6 relative z-10">
          <a href="index.php" class="text-[#5C4F4A] hover:text-[#C9996B] transition font-medium text-sm">Home</a>
          <a href="about.php" class="text-[#5C4F4A] hover:text-[#C9996B] transition font-medium text-sm">About me</a>
          <a href="skills.php" class="text-[#5C4F4A] hover:text-[#C9996B] transition font-medium text-sm">Skills</a>
          <a href="work.php" class="text-[#5C4F4A] hover:text-[#C9996B] transition font-medium text-sm">Work</a>
          <a href="hire.php" class="px-5 py-2 bg-[#E2E8CE] text-black rounded-lg text-sm font-semibold hover:bg-[#4a625a] transition duration-200">Hire me</a>
        </div>

        <!-- MOBILE MENU (Dropdown) -->
        <div id="mobile-menu" class="hidden absolute top-full left-0 right-0 bg-white/98 backdrop-blur-sm border-b border-[#C9996B]/20 md:hidden">
          <div class="px-8 py-4 flex flex-col gap-4">
            <a href="index.php" class="text-[#5C4F4A] hover:text-[#C9996B] transition font-medium text-sm">Home</a>
            <a href="about.php" class="text-[#5C4F4A] hover:text-[#C9996B] transition font-medium text-sm">About me</a>
            <a href="skills.php" class="text-[#5C4F4A] hover:text-[#C9996B] transition font-medium text-sm">Skills</a>
            <a href="work.php" class="text-[#5C4F4A] hover:text-[#C9996B] transition font-medium text-sm">Work</a>
            <a href="hire.php" class="px-5 py-2 bg-[#E2E8CE] text-black rounded-lg text-sm font-semibold hover:bg-[#4a625a] transition duration-200 text-center">Hire me</a>
          </div>
        </div>

        <!-- RIGHT LINE -->
        <div class="absolute right-0 top-1/2 -translate-y-1/2 w-6 h-[1px] bg-gradient-to-l from-transparent to-[#C9996B]"></div>
      </div>
    </nav>

    <script>
      const menuToggle = document.getElementById('menu-toggle');
      const mobileMenu = document.getElementById('mobile-menu');
      const menuIcon = menuToggle.querySelector('svg');

      menuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');

        // Rotate hamburger icon
        if (mobileMenu.classList.contains('hidden')) {
          menuIcon.style.transform = 'rotate(0deg)';
        } else {
          menuIcon.style.transform = 'rotate(90deg)';
        }
      });

      // Close menu when a link is clicked
      const mobileLinks = mobileMenu.querySelectorAll('a');
      mobileLinks.forEach(link => {
        link.addEventListener('click', () => {
          mobileMenu.classList.add('hidden');
          menuIcon.style.transform = 'rotate(0deg)';
        });
      });
    </script>

    <!-- ========== HERO SECTION: 3D Perspective Grid ========== -->
    <div class="hero-3d-container -mx-8 md:-mx-16 lg:-mx-20 border-b border-[#C9996B]/20">
      <!-- GRID TUNNEL -->
      <div class="grid-tunnel">
        <div class="grid-plane plane-top"></div>
        <div class="grid-plane plane-bottom"></div>
        <div class="grid-plane plane-left"></div>
        <div class="grid-plane plane-right"></div>
      </div>

      <!-- CENTER CONTENT -->
      <div class="relative z-10 text-center px-6">
        <!-- Status Badge (Match Image) -->
        <div class="status-badge">
          <div class="status-dot"></div>
          Web Design & Web Developer !
        </div>

        <h1 class="hero-title">
          Welcome <em>Ardin</em>
        </h1>
        <p class="text-[#5C4F4A]/60 text-lg md:text-xl mt-8 max-w-2xl mx-auto leading-relaxed font-medium">
          Creating beautiful and functional websites for clients around the world. <br class="hidden md:block">
          Documenting my journey with OpenClaw — where AI meets practical automation.
        </p>

        <div class="flex flex-wrap items-center justify-center gap-6 mt-12">
          <a href="work.php" class="py-3 px-6 bg-[#FF7F11] text-white rounded-lg font-semibold hover:bg-[#4a625a] transition duration-200">
            Let's get to work
          </a>
          <a href="hire.php" class="py-3 px-6 bg-white text-black rounded-lg font-semibold  transition duration-200">
            Download CV
          </a>
        </div>
      </div>
    </div>

    <!-- ========== TRUST / CLIENTS SECTION (inspired by "LSI NOUS FONT CONFIANCE" from Umuzi) ========== -->
    <div class="py-10 border-dashed-gold bg-white mt-10 -mx-8 md:-mx-16 lg:-mx-20">
      <div class="px-8 md:px-16 lg:px-20 text-center">
        <p class="text-xs uppercase tracking-[0.2em] text-[#5C766D] font-semibold mb-8">Trusted by builders & innovators</p>

        <!-- MARQUEE SLIDER -->
        <div class="marquee-container">
          <div class="marquee">
            <!-- Imuhira -->
            <div class="marquee-item">
              <img src="img/imuhira.jpg" alt="Imuhira" class="h-16 object-contain">
            </div>

            <!-- Add your client logos here -->
            <div class="marquee-item">
              <img src="img/zawatu.png" alt="Client 1" class="h-16 object-contain">
            </div>

            <div class="marquee-item">
              <img src="img/duka-link.jpg" alt="Client 2" class="h-16 object-contain">
            </div>

            <div class="marquee-item">
              <img src="img/easymanager.png" alt="Client 3" class="h-16 object-contain">
            </div>

            <div class="marquee-item">
              <img src="img/imuhira.jpg" alt="Client 4" class="h-16 object-contain">
            </div>

            <div class="marquee-item">
              <img src="img/zawatu.png" alt="Client 5" class="h-16 object-contain">
            </div>

            <!-- Duplicate for seamless loop -->
            <div class="marquee-item">
              <img src="img/imuhira.jpg" alt="Imuhira" class="h-16 object-contain">
            </div>

            <div class="marquee-item">
              <img src="img/zawatu.png" alt="Client 1" class="h-16 object-contain">
            </div>

            <div class="marquee-item">
              <img src="img/duka-link.jpg" alt="Client 2" class="h-16 object-contain">
            </div>

            <div class="marquee-item">
              <img src="img/easymanager.png" alt="Client 3" class="h-16 object-contain">
            </div>

            <div class="marquee-item">
              <img src="img/imuhira.jpg" alt="Client 4" class="h-16 object-contain">
            </div>

            <div class="marquee-item">
              <img src="img/zawatu.png" alt="Client 5" class="h-16 object-contain">
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ========== ABOUT SECTION ========== -->
    <div class="bg-[#fbfaf8] border-y border-dashed border-[#C9996B]/40 -mx-8 md:-mx-16 lg:-mx-20 py-20 lg:py-28 mt-10">
      <div class="w-full px-8 md:px-16 lg:px-20">
        <!-- section header -->
        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-end gap-4 border-b border-[#C9996B]/30 pb-7 mb-12">
          <div>
            <div class="flex items-center gap-2 mb-2">
              <i class="fas fa-pen-fade text-[#C9996B] text-xl"></i>
              <span class="text-[#5C766D] text-sm font-bold uppercase tracking-wider">What I Do</span>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-[#5C4F4A] tracking-tight">About Me</h2>
            <p class="text-[#5C4F4A]/70 mt-2 max-w-xl">I'm a passionate web designer and developer with a focus on creating beautiful, functional, and user-centered digital experiences.</p>
          </div>
        </div>

        <!-- ABOUT CONTENT -->
        <section class="py-8">
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Left Column - Text -->
            <div class="bg-white/40 backdrop-blur-sm p-6 md:p-8 rounded-2xl border border-white/50 shadow-sm">
              <h3 class="text-2xl md:text-3xl font-bold text-[#5C4F4A] mb-4">
                Designing & Building<br><em class="text-[#C9996B]">Digital Experiences</em>
              </h3>
              <p class="text-[#5C4F4A]/80 leading-relaxed mb-4 text-lg">
                I'm a web designer and developer specializing in creating beautiful, responsive websites and applications that solve real problems. With a keen eye for design and strong development skills, I bridge the gap between aesthetics and functionality.
              </p>
              <p class="text-[#5C4F4A]/80 leading-relaxed mb-6 text-lg">
                I work with brands and businesses to create digital products that are not just visually stunning, but also intuitive and performant. From concept to deployment, I ensure every project meets the highest standards.
              </p>

              <!-- Services/Skills Grid -->
              <div class="grid grid-cols-2 gap-3 mb-6">
                <div class="flex items-center gap-2">
                  <i class="fas fa-check text-[#5C766D] font-bold"></i>
                  <span class="text-[#5C4F4A] font-medium text-sm">UI/UX Design</span>
                </div>
                <div class="flex items-center gap-2">
                  <i class="fas fa-check text-[#5C766D] font-bold"></i>
                  <span class="text-[#5C4F4A] font-medium text-sm">Web Development</span>
                </div>
                <div class="flex items-center gap-2">
                  <i class="fas fa-check text-[#5C766D] font-bold"></i>
                  <span class="text-[#5C4F4A] font-medium text-sm">Responsive Design</span>
                </div>
                <div class="flex items-center gap-2">
                  <i class="fas fa-check text-[#5C766D] font-bold"></i>
                  <span class="text-[#5C4F4A] font-medium text-sm">Frontend Development</span>
                </div>
                <div class="flex items-center gap-2">
                  <i class="fas fa-check text-[#5C766D] font-bold"></i>
                  <span class="text-[#5C4F4A] font-medium text-sm">Performance Optimization</span>
                </div>
                <div class="flex items-center gap-2">
                  <i class="fas fa-check text-[#5C766D] font-bold"></i>
                  <span class="text-[#5C4F4A] font-medium text-sm">Brand Integration</span>
                </div>
              </div>
            </div>

            <!-- Right Column - Image -->
            <div class="relative perspective-lg">
              <div class="relative hover-3d preserve-3d">
                <div class="bg-[#EDE9E6]/50 backdrop-blur-sm overflow-hidden shadow-2xl border-4 border-white rounded-3xl">
                  <img src="web_design_cube_concept_1778721529356.png"
                    class="w-full h-full object-cover"
                    alt="Web Design Cube Concept">
                </div>
                <!-- 3D Decorative elements -->
                <div class="absolute -bottom-6 -right-6 bg-[#5C766D] text-white p-6 rounded-2xl shadow-xl translate-z-20 hidden md:block border-4 border-white">
                  <p class="font-bold text-lg">99.9% Focus</p>
                  <p class="text-xs opacity-80 uppercase tracking-widest">Quality Driven</p>
                </div>
                <div class="absolute -top-6 -left-6 bg-white border border-[#C9996B]/20 rounded-2xl p-4 shadow-xl -translate-z-20">
                  <p class="font-bold text-[#5C766D] text-sm">"Design is not just what it looks like."</p>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>

    <!-- ========== SKILLS SECTION ========== -->
    <div class="py-20 lg:py-28 bg-[#fbfaf8] border-y border-dashed border-[#C9996B]/40 -mx-8 md:-mx-16 lg:-mx-20 px-8 md:px-16 lg:px-20 mt-10">
      <div>
        <!-- Dashed line separator -->
        <div class="flex items-center justify-center">
          <span class="px-6 text-[#5C766D] font-bold text-sm uppercase tracking-wider">Skills I Have</span>
        </div>

        <!-- section header -->
        <div class="text-center mb-16">
          <h2 class="text-3xl md:text-4xl font-bold text-[#5C4F4A] tracking-tight">My <em class="text-[#C9996B]">Technical</em> Stack</h2>
        </div>

        <div class="skills-split-container">
          <!-- LEFT: Visual Orbit -->
          <div class="skills-orbit-container">
            <div class="orbit-ring orbit-ring-outer"></div>
            <div class="orbit-ring orbit-ring-accent"></div>
            <div class="orbit-ring orbit-ring-inner"></div>

            <div class="orbit-center">
              <div class="orbit-center-inner">SKILLS</div>
            </div>

            <div class="orbit-spin">
              <div class="orbit-pod" style="top:0%;left:50%;">
                <i class="fab fa-laravel" style="color:#FF2D20;"></i>
              </div>
              <div class="orbit-pod" style="top:16%;left:85%;">
                <i class="fab fa-react" style="color:#61DAFB;"></i>
              </div>
              <div class="orbit-pod" style="top:50%;left:95%;">
                <i class="fab fa-html5" style="color:#E34C26;"></i>
              </div>
              <div class="orbit-pod" style="top:84%;left:85%;">
                <i class="fab fa-js" style="color:#F7DF1E;"></i>
              </div>
              <!-- <div class="orbit-pod" style="top:84%;left:85%;">
                <i class="fas fa-wind" style="color:#06B6D4;"></i>
              </div> -->
              <div class="orbit-pod" style="top:100%;left:50%;">
                <i class="fab fa-bootstrap" style="color:#7952B3;"></i>
              </div>
              <div class="orbit-pod" style="top:84%;left:15%;">
                <i class="fab fa-css3-alt" style="color:#1572B6;"></i>
              </div>
              <div class="orbit-pod" style="top:50%;left:5%;">
                <i class="fab fa-github" style="color:#181717;"></i>
              </div>
              <div class="orbit-pod" style="top:16%;left:15%;">
                <i class="fab fa-php" style="color:#777BB4;"></i>
              </div>
              <div class="orbit-pod" style="top:30%;left:50%;">
                <i class="fas fa-database" style="color:#4479A1;"></i>
              </div>
              <div class="orbit-pod" style="top:70%;left:50%;">
                <i class="fas fa-infinity" style="color:#FF6B35;"></i>
              </div>

            </div>
          </div>

          <!-- RIGHT: Technical Descriptions -->
          <div class="skills-expertise">
            <div class="skill-desc-block">
              <div class="skill-desc-title">
                <i class="fas fa-layer-group"></i>
                Frontend Development
              </div>
              <div class="skill-desc-text">
                Building responsive, interactive user interfaces with React, HTML, CSS, and modern frameworks like Tailwind CSS and Bootstrap.
              </div>
            </div>

            <div class="skill-desc-block">
              <div class="skill-desc-title">
                <i class="fas fa-server"></i>
                Backend Development
              </div>
              <div class="skill-desc-text">
                Creating robust server-side applications with PHP and Laravel, managing databases with MySQL, and implementing RESTful APIs.
              </div>
            </div>

            <div class="skill-desc-block">
              <div class="skill-desc-title">
                <i class="fas fa-code-branch"></i>
                Version Control
              </div>
              <div class="skill-desc-text">
                Managing code versions and collaboration using Git and GitHub, ensuring clean, maintainable codebases for team projects.
              </div>
            </div>

            <div class="skill-desc-block">
              <div class="skill-desc-title">
                <i class="fas fa-rocket"></i>
                DevOps & CI/CD
              </div>
              <div class="skill-desc-text">
                Implementing continuous integration and deployment pipelines to automate testing, building, and deployment processes.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- PROJECTS -->
    <section id="projects" class="bg-[#fbfaf8] border-y border-dashed border-[#C9996B]/40 -mx-8 md:-mx-16 lg:-mx-20 px-8 md:px-16 lg:px-20 mt-10 py-20 lg:py-28">
      <div style="max-width:1100px;margin:0 auto;">
        <div style="text-align:center;margin-top:3.5rem;">
          <p class="px-6 text-[#5C766D] font-bold text-sm uppercase tracking-wider">
            FEATURED WORK
          </p>
          <h2 class="text-3xl md:text-4xl font-bold text-[#5C4F4A] tracking-tight mb-6">My Projects</h2>
        </div>

        <!-- PROJECTS TABLE GRID -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 border-t border-l border-dashed border-[#C9996B]/30">

          <!-- PROJECT -->
          <div class="border-r border-b border-dashed border-[#C9996B]/30 bg-white/40 hover:bg-white transition-colors duration-300">
            <div style="background:#fff;height:220px;position:relative;overflow:hidden;">
              <img src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?auto=format&fit=crop&w=800&q=80" style="width:100%;height:100%;object-fit:cover;" alt="Laravel Web Application">
              <div style="position:absolute;bottom:0.75rem;left:0.75rem;display:flex;gap:0.4rem;">
                <span style="background:[#5C766D];color:#fff;font-size:0.65rem;padding:0.2rem 0.6rem;border-radius:999px;font-weight:600;text-transform:uppercase;">Laravel</span>
                <span style="background:[#C9996B];color:#fff;font-size:0.65rem;padding:0.2rem 0.6rem;border-radius:999px;font-weight:600;text-transform:uppercase;">Full Stack</span>
              </div>
            </div>
            <div style="padding:1.5rem;flex-grow:1;display:flex;flex-direction:column;">
              <div style="font-weight:800;font-size:1rem;text-transform:uppercase;letter-spacing:0.03em;margin-bottom:0.6rem;">E-Commerce Platform</div>
              <p style="color:[#5C4F4A];font-size:0.88rem;line-height:1.7;margin-bottom:1.5rem;">Built a complete e-commerce platform with Laravel, MySQL, and Tailwind CSS. Features include user authentication, payment integration, and admin dashboard.</p>
              <div style="margin-top:auto;display:flex;align-items:center;justify-content:space-between;">
                <div style="display:flex;gap:0.5rem;">
                  <i class="fab fa-laravel" style="font-size:1.3rem;color:#FF2D20;" title="Laravel"></i>
                  <i class="fab fa-php" style="font-size:1.3rem;color:#777BB4;" title="PHP"></i>
                  <i class="fas fa-database" style="font-size:1.3rem;color:#4479A1;" title="MySQL"></i>
                </div>
                <a href="https://github.com/Welcomeardin" style="color:[#5C766D];font-size:0.8rem;font-weight:600;text-decoration:none;display:flex;align-items:center;gap:0.3rem;">
                  View Project <i class="fas fa-external-link-alt" style="width:13px;height:13px;"></i>
                </a>
              </div>
            </div>
          </div>

          <!-- PROJECT 2: REACT DASHBOARD -->
          <!-- PROJECT -->
          <div class="border-r border-b border-dashed border-[#C9996B]/30 bg-white/40 hover:bg-white transition-colors duration-300">
            <div style="background:#fff;height:220px;position:relative;overflow:hidden;">
              <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=800&q=80" style="width:100%;height:100%;object-fit:cover;" alt="React Dashboard">
              <div style="position:absolute;bottom:0.75rem;left:0.75rem;display:flex;gap:0.4rem;">
                <span style="background:[#5C766D];color:#fff;font-size:0.65rem;padding:0.2rem 0.6rem;border-radius:999px;font-weight:600;text-transform:uppercase;">React</span>
                <span style="background:[#C9996B];color:#fff;font-size:0.65rem;padding:0.2rem 0.6rem;border-radius:999px;font-weight:600;text-transform:uppercase;">Dashboard</span>
              </div>
            </div>
            <div style="padding:1.5rem;flex-grow:1;display:flex;flex-direction:column;">
              <div style="font-weight:800;font-size:1rem;text-transform:uppercase;letter-spacing:0.03em;margin-bottom:0.6rem;">Analytics Dashboard</div>
              <p style="color:[#5C4F4A];font-size:0.88rem;line-height:1.7;margin-bottom:1.5rem;">Developed a responsive analytics dashboard with React, Tailwind CSS, and Chart.js. Features real-time data visualization and interactive components.</p>
              <div style="margin-top:auto;display:flex;align-items:center;justify-content:space-between;">
                <div style="display:flex;gap:0.5rem;">
                  <i class="fab fa-react" style="font-size:1.3rem;color:#61DAFB;" title="React"></i>
                  <i class="fab fa-js" style="font-size:1.3rem;color:#F7DF1E;" title="JavaScript"></i>
                  <i class="fas fa-wind" style="font-size:1.3rem;color:#06B6D4;" title="Tailwind CSS"></i>
                </div>
                <a href="https://github.com/Welcomeardin" style="color:[#5C766D];font-size:0.8rem;font-weight:600;text-decoration:none;display:flex;align-items:center;gap:0.3rem;">
                  View Project <i class="fas fa-external-link-alt" style="width:13px;height:13px;"></i>
                </a>
              </div>
            </div>
          </div>

          <!-- PROJECT 3: PORTFOLIO WEBSITE -->
          <!-- PROJECT -->
          <div class="border-r border-b border-dashed border-[#C9996B]/30 bg-white/40 hover:bg-white transition-colors duration-300">
            <div style="background:#fff;height:220px;position:relative;overflow:hidden;">
              <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=800&q=80" style="width:100%;height:100%;object-fit:cover;" alt="Portfolio Website">
              <div style="position:absolute;bottom:0.75rem;left:0.75rem;display:flex;gap:0.4rem;">
                <span style="background:[#5C766D];color:#fff;font-size:0.65rem;padding:0.2rem 0.6rem;border-radius:999px;font-weight:600;text-transform:uppercase;">HTML/CSS</span>
                <span style="background:[#C9996B];color:#fff;font-size:0.65rem;padding:0.2rem 0.6rem;border-radius:999px;font-weight:600;text-transform:uppercase;">Responsive</span>
              </div>
            </div>
            <div style="padding:1.5rem;flex-grow:1;display:flex;flex-direction:column;">
              <div style="font-weight:800;font-size:1rem;text-transform:uppercase;letter-spacing:0.03em;margin-bottom:0.6rem;">Personal Portfolio</div>
              <p style="color:[#5C4F4A];font-size:0.88rem;line-height:1.7;margin-bottom:1.5rem;">Created a modern, responsive portfolio website using HTML, CSS, Bootstrap, and JavaScript. Features smooth animations and mobile-first design.</p>
              <div style="margin-top:auto;display:flex;align-items:center;justify-content:space-between;">
                <div style="display:flex;gap:0.5rem;">
                  <i class="fab fa-html5" style="font-size:1.3rem;color:#E34C26;" title="HTML5"></i>
                  <i class="fab fa-css3-alt" style="font-size:1.3rem;color:#1572B6;" title="CSS3"></i>
                  <i class="fab fa-bootstrap" style="font-size:1.3rem;color:#7952B3;" title="Bootstrap"></i>
                </div>
                <a href="https://github.com/Welcomeardin" style="color:[#5C766D];font-size:0.8rem;font-weight:600;text-decoration:none;display:flex;align-items:center;gap:0.3rem;">
                  View Project <i class="fas fa-external-link-alt" style="width:13px;height:13px;"></i>
                </a>
              </div>
            </div>
          </div>

          <!-- PROJECT 4 CI/CD PIPELINE -->
          <!-- PROJECT -->
          <div class="border-r border-b border-dashed border-[#C9996B]/30 bg-white/40 hover:bg-white transition-colors duration-300">
            <div style="background:#fff;height:220px;position:relative;overflow:hidden;">
              <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?auto=format&fit=crop&w=800&q=80" style="width:100%;height:100%;object-fit:cover;" alt="CI/CD Pipeline">
              <div style="position:absolute;bottom:0.75rem;left:0.75rem;display:flex;gap:0.4rem;">
                <span style="background:[#5C766D];color:#fff;font-size:0.65rem;padding:0.2rem 0.6rem;border-radius:999px;font-weight:600;text-transform:uppercase;">DevOps</span>
                <span style="background:[#C9996B];color:#fff;font-size:0.65rem;padding:0.2rem 0.6rem;border-radius:999px;font-weight:600;text-transform:uppercase;">CI/CD</span>
              </div>
            </div>
            <div style="padding:1.5rem;flex-grow:1;display:flex;flex-direction:column;">
              <div style="font-weight:800;font-size:1rem;text-transform:uppercase;letter-spacing:0.03em;margin-bottom:0.6rem;">Automated CI/CD Pipeline</div>
              <p style="color:[#5C4F4A];font-size:0.88rem;line-height:1.7;margin-bottom:1.5rem;">Implemented a complete CI/CD pipeline using GitHub Actions. Features automated testing, deployment staging, and production releases with rollback capabilities.</p>
              <div style="margin-top:auto;display:flex;align-items:center;justify-content:space-between;">
                <div style="display:flex;gap:0.5rem;">
                  <i class="fab fa-github" style="font-size:1.3rem;color:#181717;" title="GitHub"></i>
                  <i class="fas fa-infinity" style="font-size:1.3rem;color:#FF6B35;" title="CI/CD"></i>
                  <i class="fab fa-docker" style="font-size:1.3rem;color:#2496ED;" title="Docker"></i>
                </div>
                <a href="https://github.com/Welcomeardin" style="color:[#5C766D];font-size:0.8rem;font-weight:600;text-decoration:none;display:flex;align-items:center;gap:0.3rem;">
                  View Project <i class="fas fa-external-link-alt" style="width:13px;height:13px;"></i>
                </a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- ========== CONTACT & CTA SECTION ========== -->
    <div class="py-24 border-t border-[#C9996B]/30 -mx-8 md:-mx-16 lg:-mx-20 px-8 md:px-16 lg:px-20 mt-10">
      <div class="text-center">
        <h2 class="text-3xl md:text-5xl font-bold text-[#5C4F4A] tracking-tight">Ready to build something impactful?</h2>
        <p class="text-[#5C4F4A]/75 text-lg mt-6 max-w-xl mx-auto">Let’s collaborate on AI automation, open-source tools, or your next digital product.</p>

        <div class="flex flex-wrap gap-10 justify-center mt-12">
          <!-- GITHUB LINK -->
          <a href="https://github.com/Welcomeardin" target="_blank" class="flex items-center gap-4 text-[#5C4F4A] hover:text-[#5C766D] transition-all group">
            <div class="w-14 h-14 rounded-full border border-[#C9996B]/40 flex items-center justify-center group-hover:bg-[#C9996B]/10 transition-all">
              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v 3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"></path>
              </svg>
            </div>
            <div class="text-left">
              <p class="text-[10px] uppercase tracking-[0.2em] text-[#5C766D] font-bold">Follow work</p>
              <span class="font-bold text-lg tracking-tight">GitHub</span>
            </div>
          </a>

          <!-- EMAIL LINK -->
          <a href="mailto:welcomeardin@gmail.com" class="flex items-center gap-4 text-[#5C4F4A] hover:text-[#5C766D] transition-all group">
            <div class="w-14 h-14 rounded-full border border-[#C9996B]/40 flex items-center justify-center group-hover:bg-[#C9996B]/10 transition-all">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
              </svg>
            </div>
            <div class="text-left">
              <p class="text-[10px] uppercase tracking-[0.2em] text-[#5C766D] font-bold">Say hello</p>
              <span class="font-bold text-lg tracking-tight">Email me</span>
            </div>
          </a>
        </div>
      </div>
    </div>

    <!-- ========== FOOTER: based on both designs (Umuzi navigation style + personal branding) ========== -->
    <footer class="bg-[#5C4F4A] text-[#EDE9E6] pt-16 pb-8 mt-4 -mx-8 md:-mx-16 lg:-mx-20">
      <div class="px-8 md:px-16 lg:px-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
          <!-- brand column -->
          <div class="lg:col-span-1">
            <div class="flex items-center gap-2 mb-4">
              <div class="w-9 h-9 bg-[#C9996B] rounded-full flex items-center justify-center text-white font-bold text-lg">WA</div>
              <span class="text-xl font-bold tracking-tight">Welcone Ardin</span>
            </div>
            <p class="text-[#EDE9E6]/80 text-sm leading-relaxed">
              Software engineer & AI product builder. Building useful tools for African languages & communities. OpenClaw core contributor.
            </p>
            <div class="flex gap-4 mt-6">
              <a href="https://github.com/Welcomeardin" class="text-[#EDE9E6]/70 hover:text-[#C9996B] transition text-xl"><i class="fab fa-github"></i></a>
              <a href="#" class="text-[#EDE9E6]/70 hover:text-[#C9996B] transition text-xl"><i class="fab fa-twitter"></i></a>
              <a href="https://www.linkedin.com/in/arakaza-ardin/" class="text-[#EDE9E6]/70 hover:text-[#C9996B] transition text-xl"><i class="fab fa-linkedin-in"></i></a>
              <a href="#" class="text-[#EDE9E6]/70 hover:text-[#C9996B] transition text-xl"><i class="fas fa-rss"></i></a>
            </div>
          </div>

          <!-- Navigation (Umuzi style) -->
          <div>
            <h4 class="font-bold text-white text-md mb-4 border-l-3 border-[#C9996B] pl-3">Navigation</h4>
            <ul class="space-y-2 text-sm">
              <li><a href="#" class="text-[#EDE9E6]/80 hover:text-[#C9996B] transition flex items-center gap-2"><i class="fas fa-chevron-right text-[10px]"></i>Accueil</a></li>
              <li><a href="#" class="text-[#EDE9E6]/80 hover:text-[#C9996B] transition flex items-center gap-2"><i class="fas fa-chevron-right text-[10px]"></i>Services</a></li>
              <li><a href="#" class="text-[#EDE9E6]/80 hover:text-[#C9996B] transition flex items-center gap-2"><i class="fas fa-chevron-right text-[10px]"></i>Contact</a></li>
              <li><a href="#" class="text-[#EDE9E6]/80 hover:text-[#C9996B] transition flex items-center gap-2"><i class="fas fa-chevron-right text-[10px]"></i>Blog / Documents</a></li>
            </ul>
          </div>

          <!-- resources / posts
          <div>
            <h4 class="font-bold text-white text-md mb-4 border-l-3 border-[#C9996B] pl-3">Explore</h4>
            <ul class="space-y-2 text-sm">
              <li><a href="#" class="text-[#EDE9E6]/80 hover:text-[#C9996B] transition">All posts</a></li>
              <li><a href="#" class="text-[#EDE9E6]/80 hover:text-[#C9996B] transition">OpenClaw guides</a></li>
              <li><a href="#" class="text-[#EDE9E6]/80 hover:text-[#C9996B] transition">AI automation</a></li>
              <li><a href="#" class="text-[#EDE9E6]/80 hover:text-[#C9996B] transition">RSS feed</a></li>
            </ul>
          </div> -->

          <!-- contact + social from original -->
          <div>
            <h4 class="font-bold text-white text-md mb-4 border-l-3 border-[#C9996B] pl-3">Connect</h4>
            <p class="text-sm text-[#EDE9E6]/80 flex items-center gap-2 mb-2"><i class="far fa-envelope text-[#C9996B]"></i> welcomeardin@gmail.com</p>
            <p class="text-sm text-[#EDE9E6]/80 flex items-center gap-2"><i class="fab fa-github-alt"></i> Welcomeardin</p>
            <div class="mt-6">
              <a href="#" class="inline-flex items-center gap-2 bg-[#C9996B]/20 backdrop-blur-sm px-5 py-2.5 rounded-full text-sm text-white border border-[#C9996B]/40 hover:bg-[#C9996B]/40 transition">
                <i class="fas fa-podcast"></i> subscribe via RSS
              </a>
            </div>
          </div>
        </div>

        <div class="border-t border-[#EDE9E6]/20 mt-14 pt-7 flex flex-col md:flex-row justify-between items-center text-xs text-[#EDE9E6]/60">
          <p>© 2026 Welcone Ardin — Software Engineer & AI Product Builder. Built with Ardin wel</p>
          <div class="flex gap-5 mt-3 md:mt-0">
            <a href="#" class="hover:text-[#C9996B] transition">Privacy</a>
            <a href="#" class="hover:text-[#C9996B] transition">Imprint</a>
            <a href="#" class="hover:text-[#C9996B] transition">Status</a>
          </div>
        </div>
      </div>
    </footer>
  </main>

  <script>
    // Disable right-click
    document.addEventListener('contextmenu', function(e) {
      e.preventDefault();
      return false;
    });

    // Disable text selection
    document.addEventListener('selectstart', function(e) {
      e.preventDefault();
      return false;
    });

    // Disable drag
    document.addEventListener('dragstart', function(e) {
      e.preventDefault();
      return false;
    });

    // Disable F12, Ctrl+U, Ctrl+Shift+I, Ctrl+Shift+J, Ctrl+Shift+C
    document.addEventListener('keydown', function(e) {
      if (e.keyCode === 123 || // F12
        (e.ctrlKey && e.keyCode === 85) || // Ctrl+U
        (e.ctrlKey && e.shiftKey && e.keyCode === 73) || // Ctrl+Shift+I
        (e.ctrlKey && e.shiftKey && e.keyCode === 74) || // Ctrl+Shift+J
        (e.ctrlKey && e.shiftKey && e.keyCode === 67)) { // Ctrl+Shift+C
        e.preventDefault();
        e.stopPropagation();
        return false;
      }
    });

    // Disable view source via Ctrl+U in all browsers
    document.onkeydown = function(e) {
      if (e.ctrlKey && e.keyCode === 85) {
        e.preventDefault();
        return false;
      }
    };

    // Clear console on load
    console.clear();
    console.log('%c⚠️ WARNING! ⚠️', 'color: red; font-size: 20px; font-weight: bold;');
    console.log('%cThis is a browser feature intended for developers. Viewing or copying this code is prohibited.', 'color: red; font-size: 14px;');
    console.log('%c© 2026 Welcome Ardin - All Rights Reserved', 'color: #5C766D; font-size: 12px; font-weight: bold;');
  </script>

</body>

</html>