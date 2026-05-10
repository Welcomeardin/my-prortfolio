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
      background-color: #EDE9E6;
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
      background: linear-gradient(92deg, #EDE9E6 0%, #EDE9E6 100%);
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
        transform: translateX(-100%);
      }
    }

    .marquee-container {
      overflow: hidden;
      width: 100%;
    }

    .marquee {
      display: flex;
      animation: marquee 20s linear infinite;
      white-space: nowrap;
    }

    .marquee:hover {
      animation-play-state: paused;
    }

    .marquee-item {
      flex: 0 0 auto;
      padding: 0 2rem;
      display: flex;
      align-items: center;
      gap: 1rem;
    }
  </style>
</head>

<body class="antialiased">

  <main class="max-w-[1280px] mx-auto px-8 md:px-16 lg:px-20 bg-[#EDE9E6] overflow-hidden relative border-l border-r border-[#C9996B]/30" style="border-image: linear-gradient(to bottom, #C9996B, transparent) 1;">

    <!-- ========== NAVBAR WITH CONTAINER LINES ========== -->
    <nav class="sticky top-0 z-50 bg-[#EDE9E6]/95 backdrop-blur-sm border-b border-[#C9996B]/20 -mx-8 md:-mx-16 lg:-mx-20">
      <div class="px-8 md:px-16 lg:px-20 py-4 flex items-center justify-between relative">
        <!-- LEFT LINE -->
        <div class="absolute left-0 top-1/2 -translate-y-1/2 w-6 h-[1px] bg-gradient-to-r from-transparent to-[#C9996B]"></div>

        <!-- LOGO/BRAND -->
        <div class="flex items-center gap-2 relative z-10">
          <div class="w-10 h-10 bg-[#5C766D] rounded-full flex items-center justify-center text-white font-bold text-sm">WA</div>
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
          <a href="hire.php" class="px-5 py-2 bg-[#5C766D] text-white rounded-full text-sm font-semibold hover:bg-[#4a625a] transition duration-200">Hire me</a>
        </div>

        <!-- MOBILE MENU (Dropdown) -->
        <div id="mobile-menu" class="hidden absolute top-full left-0 right-0 bg-[#EDE9E6]/98 backdrop-blur-sm border-b border-[#C9996B]/20 md:hidden">
          <div class="px-8 py-4 flex flex-col gap-4">
            <a href="index.php" class="text-[#5C4F4A] hover:text-[#C9996B] transition font-medium text-sm">Home</a>
            <a href="about.php" class="text-[#5C4F4A] hover:text-[#C9996B] transition font-medium text-sm">About me</a>
            <a href="skills.php" class="text-[#5C4F4A] hover:text-[#C9996B] transition font-medium text-sm">Skills</a>
            <a href="work.php" class="text-[#5C4F4A] hover:text-[#C9996B] transition font-medium text-sm">Work</a>
            <a href="hire.php" class="px-5 py-2 bg-[#5C766D] text-white rounded-full text-sm font-semibold hover:bg-[#4a625a] transition duration-200 text-center">Hire me</a>
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

    <!-- ========== HERO SECTION: Umuzi inspired + medium centered image ========== -->
    <div class="flex flex-col lg:flex-row w-full relative items-center justify-between gap-12 lg:gap-8 py-20 lg:py-28">
      <!-- LEFT IMAGE: smaller, centered -->
      <div class="lg:w-1/4 w-2/5 mx-auto lg:mx-0 lg:ml-8 relative rounded-full">
        <div class="w-full aspect-square bg-cover bg-center bg-no-repeat overflow-hidden shadow-lg rounded-full"
          style="background-image: url('img/me.jpg'); background-size: cover; background-position: center;">
          <div class="w-full h-full bg-gradient-to-r from-[#5C766D]/20 via-transparent to-transparent"></div>
        </div>
      </div>

      <!-- RIGHT TEXT SECTION (hero content) -->
      <div class="lg:w-3/5 w-full px-8 md:px-12 py-8 lg:py-0 flex flex-col justify-center bg-[#EDE9E6] relative">
        <div class="max-w-xl mx-auto lg:mx-0">
          <div class="inline-flex items-center gap-2 mb-2 mt-3">
            <span class="w-10 h-[2px] bg-[#C9996B]"></span>
            <span class="text-[#5C766D] text-sm uppercase tracking-[0.2em] font-semibold">Web Developer</span>
          </div>
          <h1 class="text-5xl md:text-6xl lg:text-7xl font-extrabold tracking-tight text-[#5C4F4A] leading-[1.15]">
            Welcome Ardin
          </h1>
          <p class="text-xl md:text-2xl text-[#5C4F4A]/85 mt-5 font-medium border-l-4 border-[#C9996B] pl-6">
            Web Designer & Developer
          </p>
          <p class="text-[#5C4F4A]/70 mt-6 text-lg leading-relaxed max-w-md">
            Creating beautiful and functional websites for clients around the world. Documenting my journey with OpenClaw — where AI meets practical automation.
          </p>
          <div class="flex flex-wrap gap-5 mt-10">
            <a href="work.php" class="group inline-flex items-center gap-2 px-8 py-3.5 bg-[#5C766D] text-white font-semibold rounded-full shadow-md hover:bg-[#4a625a] transition-all duration-200 btn-pulse">
              Explore work <i class="fas fa-arrow-right text-sm group-hover:translate-x-1 transition"></i>
            </a>
            <a href="https://github.com/Welcomeardin" class="inline-flex items-center gap-2 px-7 py-3.5 bg-white/80 backdrop-blur-sm text-[#5C4F4A] font-medium rounded-full border border-[#C9996B]/40 hover:bg-white hover:shadow-sm transition">
              <i class="fab fa-github"></i> GitHub
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- ========== TRUST / CLIENTS SECTION (inspired by "LSI NOUS FONT CONFIANCE" from Umuzi) ========== -->
    <div class="py-10 border-y border-[#C9996B]/20 bg-white mt-2 -mx-8 md:-mx-16 lg:-mx-20">
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
    <div class="py-20 lg:py-28 bg-[#EDE9E6]">
      <div>
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
            <div>
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

              <!-- Badges -->
              <div class="flex flex-wrap gap-2">
                <span class="px-4 py-2 bg-[#5C766D]/10 border border-[#5C766D]/20 rounded-full text-xs font-bold text-[#5C766D]">TAILWIND CSS</span>
                <span class="px-4 py-2 bg-[#5C766D]/10 border border-[#5C766D]/20 rounded-full text-xs font-bold text-[#5C766D]">REACT</span>
                <span class="px-4 py-2 bg-[#5C766D]/10 border border-[#5C766D]/20 rounded-full text-xs font-bold text-[#5C766D]">FIGMA</span>
              </div>
            </div>

            <!-- Right Column - Image -->
            <div class="relative">
              <div class="bg-[#EDE9E6] rounded-lg overflow-hidden shadow-lg border border-[#C9996B]/10">
                <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?auto=format&fit=crop&w=800&q=80" 
                     class="w-full h-full object-cover" 
                     alt="Web Design and Development">
              </div>
              <div class="absolute -bottom-4 -left-4 bg-white border border-[#C9996B]/20 rounded-lg p-4 shadow-lg">
                <p class="font-bold text-[#5C766D] text-sm">"Design is not just what it looks like."</p>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>

    <section id="skills" style="padding:5rem 2rem; background:var(--bg);">
        <div style="max-width:1100px; margin:0 auto;">
            <div style="text-align:center; margin-bottom:3rem;">
                <div style="display:inline-block; padding:0.4rem 1.2rem; background:var(--white); border:1px solid var(--surface); border-radius:999px; font-size:0.75rem; font-weight:700; color:var(--muted); text-transform:uppercase; letter-spacing:0.05em; margin-bottom: 1.5rem;">
                    CORE CAPABILITIES
                </div>
                <div class="display" style="font-size:clamp(2rem, 5vw, 3.2rem);">
                    My <em>Technical</em> Stack
                </div>
            </div>

            <div class="skills-split-container">
                <!-- LEFT: Visual Orbit -->
                <div class="skills-orbit-container">
                    <div class="orbit-ring orbit-ring-outer"></div>
                    <div class="orbit-ring orbit-ring-accent"></div>
                    <div class="orbit-ring orbit-ring-inner"></div>

                    <div class="orbit-center">
                        <div class="orbit-center-inner">EN</div>
                    </div>

                    <div class="orbit-spin">
                        <div class="orbit-pod" style="top:0%;left:50%;">
                            <i class="devicon-amazonwebservices-original" style="color:#FF9900;"></i>
                        </div>
                        <div class="orbit-pod" style="top:34%;left:98%;">
                            <i class="devicon-kubernetes-plain" style="color:#326CE5;"></i>
                        </div>
                        <div class="orbit-pod" style="top:90%;left:80%;">
                            <i class="devicon-python-plain" style="color:#3776AB;"></i>
                        </div>
                        <div class="orbit-pod" style="top:90%;left:20%;">
                            <i class="devicon-terraform-plain" style="color:#623CE4;"></i>
                        </div>
                        <div class="orbit-pod" style="top:34%;left:2%;">
                            <i class="devicon-docker-plain" style="color:#2496ED;"></i>
                        </div>
                    </div>
                </div>

                <!-- RIGHT: Technical Descriptions -->
                <div class="skills-expertise">
                    <div class="skill-desc-block">
                        <div class="skill-desc-title">
                            <i data-feather="cloud"></i>
                            Cloud Architecture
                        </div>
                        <div class="skill-desc-text">
                            Architecting high-availability AWS ecosystems using Well-Architected frameworks for global-scale stability.
                        </div>
                    </div>

                    <div class="skill-desc-block">
                        <div class="skill-desc-title">
                            <i data-feather="box"></i>
                            K8s & Orchestration
                        </div>
                        <div class="skill-desc-text">
                            Production-grade Kubernetes management with focus on zero-downtime deployments and auto-scaling logic.
                        </div>
                    </div>

                    <div class="skill-desc-block">
                        <div class="skill-desc-title">
                            <i data-feather="database"></i>
                            Data Systems
                        </div>
                        <div class="skill-desc-text">
                            Designing distributed data pipelines and self-healing storage solutions for massive-scale datasets.
                        </div>
                    </div>

                    <div class="skill-desc-block">
                        <div class="skill-desc-title">
                            <i data-feather="cpu"></i>
                            Automation / IaC
                        </div>
                        <div class="skill-desc-text">
                            End-to-end automation with Terraform and Python to eliminate manual toil and ensure consistency.
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
              <span class="text-xl font-bold tracking-tight">Welcome Ardin</span>
            </div>
            <p class="text-[#EDE9E6]/80 text-sm leading-relaxed">
              Software engineer & AI product builder. Building useful tools for African languages & communities. OpenClaw core contributor.
            </p>
            <div class="flex gap-4 mt-6">
              <a href="https://github.com/Welcomeardin" target="_blank" class="text-[#EDE9E6]/70 hover:text-[#C9996B] transition text-xl"><i class="fab fa-github"></i></a>
              <a href="https://twitter.com/Welcomeardin" target="_blank" class="text-[#EDE9E6]/70 hover:text-[#C9996B] transition text-xl"><i class="fab fa-twitter"></i></a>
              <a href="https://linkedin.com/in/welcomeardin" target="_blank" class="text-[#EDE9E6]/70 hover:text-[#C9996B] transition text-xl"><i class="fab fa-linkedin-in"></i></a>
              <a href="https://welcomeardin.hashnode.dev/" target="_blank" class="text-[#EDE9E6]/70 hover:text-[#C9996B] transition text-xl"><i class="fas fa-rss"></i></a>
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

          <!-- resources / posts -->
          <div>
            <h4 class="font-bold text-white text-md mb-4 border-l-3 border-[#C9996B] pl-3">Explore</h4>
            <ul class="space-y-2 text-sm">
              <li><a href="#" class="text-[#EDE9E6]/80 hover:text-[#C9996B] transition">All posts</a></li>
              <li><a href="#" class="text-[#EDE9E6]/80 hover:text-[#C9996B] transition">OpenClaw guides</a></li>
              <li><a href="#" class="text-[#EDE9E6]/80 hover:text-[#C9996B] transition">AI automation</a></li>
              <li><a href="#" class="text-[#EDE9E6]/80 hover:text-[#C9996B] transition">RSS feed</a></li>
            </ul>
          </div>

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
          <p>© 2026 Welcome Ardin — Web Developer & AI Product Engineer. Built with Ardin welcome</p>
          <div class="flex gap-5 mt-3 md:mt-0">
            <a href="#" class="hover:text-[#C9996B] transition">Privacy</a>
            <a href="#" class="hover:text-[#C9996B] transition">Imprint</a>
            <a href="#" class="hover:text-[#C9996B] transition">Status</a>
          </div>
        </div>
      </div>
    </footer>
  </main>
</body>

</html>