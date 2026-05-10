<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <title>Lionel Kubwimana · Software Engineer & AI Product Builder</title>
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
          <div class="w-10 h-10 bg-[#5C766D] rounded-full flex items-center justify-center text-white font-bold text-sm">LK</div>
          <span class="hidden sm:inline font-bold text-[#5C4F4A] text-sm">Lionel</span>
        </div>

        <!-- NAVIGATION BUTTONS -->
        <div class="flex items-center gap-3 md:gap-6 relative z-10">
          <a href="#" class="text-[#5C4F4A] hover:text-[#C9996B] transition font-medium text-sm">Home</a>
          <a href="#" class="text-[#5C4F4A] hover:text-[#C9996B] transition font-medium text-sm">About me</a>
          <a href="#" class="text-[#5C4F4A] hover:text-[#C9996B] transition font-medium text-sm">Blog</a>
          <a href="#" class="px-5 py-2 bg-[#5C766D] text-white rounded-full text-sm font-semibold hover:bg-[#4a625a] transition duration-200">Hire me</a>
        </div>

        <!-- RIGHT LINE -->
        <div class="absolute right-0 top-1/2 -translate-y-1/2 w-6 h-[1px] bg-gradient-to-l from-transparent to-[#C9996B]"></div>
      </div>
    </nav>

    <!-- ========== HERO SECTION: Umuzi inspired + medium centered image ========== -->
    <div class="flex flex-col lg:flex-row w-full relative items-center justify-between gap-12 lg:gap-8">
      <!-- LEFT IMAGE: smaller, centered -->
      <div class="lg:w-1/3 w-1/2 mx-auto lg:mx-0 relative">
        <div class="h-[300px] lg:h-[360px] w-full bg-cover bg-center bg-no-repeat  overflow-hidden shadow-lg"
          style="background-image: url('avatar.jpeg'); background-size: cover;">
          <div class="w-full h-full bg-gradient-to-r from-[#5C766D]/20 via-transparent to-transparent"></div>
        </div>
      </div>

      <!-- RIGHT TEXT SECTION (hero content) -->
      <div class="lg:w-3/5 w-full px-8 md:px-12 py-8 lg:py-0 flex flex-col justify-center bg-[#EDE9E6] relative">
        <div class="max-w-xl mx-auto lg:mx-0">
          <div class="inline-flex items-center gap-2 mb-2 mt-3">
            <!-- <span class="w-10 h-[2px] bg-[#C9996B]"></span> -->
            <span class="text-[#5C766D] text-sm uppercase tracking-[0.2em] font-semibold">AI Product Engineer</span>
          </div>
          <h1 class="text-5xl md:text-6xl lg:text-7xl font-extrabold tracking-tight text-[#5C4F4A] leading-[1.15]">
            Lionel Kubwimana
          </h1>
          <p class="text-xl md:text-2xl text-[#5C4F4A]/85 mt-5 font-medium border-l-4 border-[#C9996B] pl-6">
            Software Engineer & AI Product Builder
          </p>
          <p class="text-[#5C4F4A]/70 mt-6 text-lg leading-relaxed max-w-md">
            Building useful products for African languages & communities. Documenting my journey with OpenClaw — where AI meets practical automation.
          </p>
          <div class="flex flex-wrap gap-5 mt-10">
            <a href="#" class="group inline-flex items-center gap-2 px-8 py-3.5 bg-[#5C766D] text-white font-semibold rounded-full shadow-md hover:bg-[#4a625a] transition-all duration-200 btn-pulse">
              Explore work <i class="fas fa-arrow-right text-sm group-hover:translate-x-1 transition"></i>
            </a>
            <a href="#" class="inline-flex items-center gap-2 px-7 py-3.5 bg-white/80 backdrop-blur-sm text-[#5C4F4A] font-medium rounded-full border border-[#C9996B]/40 hover:bg-white hover:shadow-sm transition">
              <i class="fab fa-github"></i> GitHub
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- ========== TRUST / CLIENTS SECTION (inspired by "LSI NOUS FONT CONFIANCE" from Umuzi) ========== -->
    <div class="py-10 border-y border-[#C9996B]/20 bg-[#EDE9E6]/90 mt-2 -mx-8 md:-mx-16 lg:-mx-20">
      <div class="px-8 md:px-16 lg:px-20 text-center">
        <p class="text-xs uppercase tracking-[0.2em] text-[#5C766D] font-semibold mb-8">Trusted by builders & innovators</p>

        <!-- MARQUEE SLIDER -->
        <div class="marquee-container">
          <div class="marquee">
            <!-- OpenClaw -->
            <div class="marquee-item">
              <svg class="w-8 h-8 text-[#C9996B]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
              </svg>
              <span class="font-semibold text-[#5C4F4A] text-sm">OPENCLAW</span>
            </div>

            <!-- DeepSeek -->
            <div class="marquee-item">
              <svg class="w-8 h-8 text-[#5C766D]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
              </svg>
              <span class="font-semibold text-[#5C4F4A] text-sm">DEEPSEEK</span>
            </div>

            <!-- Vercel -->
            <div class="marquee-item">
              <svg class="w-8 h-8 text-[#000]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
              </svg>
              <span class="font-semibold text-[#5C4F4A] text-sm">VERCEL</span>
            </div>

            <!-- GitHub -->
            <div class="marquee-item">
              <svg class="w-8 h-8 text-[#333]" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v 3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"></path>
              </svg>
              <span class="font-semibold text-[#5C4F4A] text-sm">GITHUB</span>
            </div>

            <!-- African Tech Hub -->
            <div class="marquee-item">
              <svg class="w-8 h-8 text-[#D4A574]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h.5A2.5 2.5 0 0016 5.5V3.935m0 2.946a24.881 24.881 0 00-5.083-6.396m12.083 6.396a24.882 24.882 0 00-5.083-6.396"></path>
              </svg>
              <span class="font-semibold text-[#5C4F4A] text-sm">AFRICAN TECH HUB</span>
            </div>

            <!-- Duplicate for seamless loop -->
            <div class="marquee-item">
              <svg class="w-8 h-8 text-[#C9996B]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
              </svg>
              <span class="font-semibold text-[#5C4F4A] text-sm">OPENCLAW</span>
            </div>

            <div class="marquee-item">
              <svg class="w-8 h-8 text-[#5C766D]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
              </svg>
              <span class="font-semibold text-[#5C4F4A] text-sm">DEEPSEEK</span>
            </div>

            <div class="marquee-item">
              <svg class="w-8 h-8 text-[#000]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
              </svg>
              <span class="font-semibold text-[#5C4F4A] text-sm">VERCEL</span>
            </div>

            <div class="marquee-item">
              <svg class="w-8 h-8 text-[#333]" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v 3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"></path>
              </svg>
              <span class="font-semibold text-[#5C4F4A] text-sm">GITHUB</span>
            </div>

            <div class="marquee-item">
              <svg class="w-8 h-8 text-[#D4A574]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h.5A2.5 2.5 0 0016 5.5V3.935m0 2.946a24.881 24.881 0 00-5.083-6.396m12.083 6.396a24.882 24.882 0 00-5.083-6.396"></path>
              </svg>
              <span class="font-semibold text-[#5C4F4A] text-sm">AFRICAN TECH HUB</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ========== TWO COLUMN POSTS SECTION (blog preview with "view more" button, modern cards) ========== -->
    <div class="py-20 lg:py-28 bg-[#EDE9E6]">
      <div>
        <!-- section header inspired by Umuzi "comment nous faisons passer vos idées" vibe -->
        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-end gap-4 border-b border-[#C9996B]/30 pb-7 mb-12">
          <div>
            <div class="flex items-center gap-2 mb-2">
              <i class="fas fa-pen-fade text-[#C9996B] text-xl"></i>
              <span class="text-[#5C766D] text-sm font-bold uppercase tracking-wider">Latest stories</span>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-[#5C4F4A] tracking-tight">From the dev log</h2>
            <p class="text-[#5C4F4A]/70 mt-2 max-w-xl">Automation, AI agents, and real-world lessons from building OpenClaw.</p>
          </div>
          <a href="#" class="text-[#C9996B] font-semibold flex items-center gap-2 hover:gap-3 transition-all duration-200 group">
            <span>All posts</span> <i class="fas fa-arrow-right group-hover:translate-x-1 transition"></i>
          </a>
        </div>

        <!-- TABLE-LIKE POSTS LAYOUT -->
        <div class="space-y-0">
          <!-- Post 1 -->
          <div class="border-b border-dashed border-[#C9996B]/40 py-6">
            <div class="flex justify-between items-start mb-3">
              <div>
                <h3 class="text-lg font-bold text-[#5C4F4A] leading-tight">How Our AI Automation Silently Burned $10/month in Tokens – and How We Fixed It</h3>
                <p class="text-[#5C4F4A]/70 mt-2 text-sm">Unexpected token drain taught us critical lessons about monitoring agent loops. Diagnosis, real-time alerts, and cost optimization.</p>
              </div>
              <a href="#" class="text-[#C9996B] font-semibold text-sm hover:text-[#5C766D] transition whitespace-nowrap ml-4">Read →</a>
            </div>
            <div class="text-xs text-[#5C766D] font-semibold">Apr 21, 2026 · 5 min read</div>
          </div>

          <!-- Post 2 -->
          <div class="border-b border-dashed border-[#C9996B]/40 py-6">
            <div class="flex justify-between items-start mb-3">
              <div>
                <h3 class="text-lg font-bold text-[#5C4F4A] leading-tight">Extending open‑source agent automation to multiple repositories</h3>
                <p class="text-[#5C4F4A]/70 mt-2 text-sm">Scaling autonomous AI workflows across codebases without losing context, using OpenClaw orchestration.</p>
              </div>
              <a href="#" class="text-[#C9996B] font-semibold text-sm hover:text-[#5C766D] transition whitespace-nowrap ml-4">Learn →</a>
            </div>
            <div class="text-xs text-[#5C766D] font-semibold">Apr 21, 2026 · 4 min read</div>
          </div>

          <!-- Post 3 -->
          <div class="border-b border-dashed border-[#C9996B]/40 py-6">
            <div class="flex justify-between items-start mb-3">
              <div>
                <h3 class="text-lg font-bold text-[#5C4F4A] leading-tight">Why We Skipped OpenRouter & Stick With DeepSeek‑v3.2</h3>
                <p class="text-[#5C4F4A]/70 mt-2 text-sm">Performance, cost control, and reliability — the rationale behind our direct DeepSeek integration for agent workflows.</p>
              </div>
              <a href="#" class="text-[#C9996B] font-semibold text-sm hover:text-[#5C766D] transition whitespace-nowrap ml-4">View →</a>
            </div>
            <div class="text-xs text-[#5C766D] font-semibold">Apr 20, 2026 · 3 min read</div>
          </div>

          <!-- Post 4 -->
          <div class="border-b border-dashed border-[#C9996B]/40 py-6">
            <div class="flex justify-between items-start mb-3">
              <div>
                <h3 class="text-lg font-bold text-[#5C4F4A] leading-tight">Automating Our AI Team: Self-Assigning Workflow with OpenClaw Cron</h3>
                <p class="text-[#5C4F4A]/70 mt-2 text-sm">Building a fully autonomous agent that assigns itself tasks using cron schedules — zero human intervention.</p>
              </div>
              <a href="#" class="text-[#C9996B] font-semibold text-sm hover:text-[#5C766D] transition whitespace-nowrap ml-4">Read →</a>
            </div>
            <div class="text-xs text-[#5C766D] font-semibold">Apr 19, 2026 · 6 min read</div>
          </div>
        </div>

      </div>
    </div>


    <!-- ========== CONTACT & CTA SECTION ========== -->
    <div class="py-24 border-t border-[#C9996B]/30 -mx-8 md:-mx-16 lg:-mx-20 px-8 md:px-16 lg:px-20 mt-10">
      <div class="text-center">
        <h2 class="text-3xl md:text-5xl font-bold text-[#5C4F4A] tracking-tight">Ready to build something impactful?</h2>
        <p class="text-[#5C4F4A]/75 text-lg mt-6 max-w-xl mx-auto">Let’s collaborate on AI automation, open-source tools, or your next digital product.</p>

        <div class="flex flex-wrap gap-10 justify-center mt-12">
          <!-- GITHUB LINK -->
          <a href="https://github.com/lionel-k" target="_blank" class="flex items-center gap-4 text-[#5C4F4A] hover:text-[#5C766D] transition-all group">
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
          <a href="mailto:lionel@kubwimana.me" class="flex items-center gap-4 text-[#5C4F4A] hover:text-[#5C766D] transition-all group">
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
              <div class="w-9 h-9 bg-[#C9996B] rounded-full flex items-center justify-center text-white font-bold text-lg">LK</div>
              <span class="text-xl font-bold tracking-tight">Lionel Kubwimana</span>
            </div>
            <p class="text-[#EDE9E6]/80 text-sm leading-relaxed">
              Software engineer & AI product builder. Building useful tools for African languages & communities. OpenClaw core contributor.
            </p>
            <div class="flex gap-4 mt-6">
              <a href="#" class="text-[#EDE9E6]/70 hover:text-[#C9996B] transition text-xl"><i class="fab fa-github"></i></a>
              <a href="#" class="text-[#EDE9E6]/70 hover:text-[#C9996B] transition text-xl"><i class="fab fa-twitter"></i></a>
              <a href="#" class="text-[#EDE9E6]/70 hover:text-[#C9996B] transition text-xl"><i class="fab fa-linkedin-in"></i></a>
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
            <p class="text-sm text-[#EDE9E6]/80 flex items-center gap-2 mb-2"><i class="far fa-envelope text-[#C9996B]"></i> lionel@kubwimana.me</p>
            <p class="text-sm text-[#EDE9E6]/80 flex items-center gap-2"><i class="fab fa-github-alt"></i> lionel-k</p>
            <div class="mt-6">
              <a href="#" class="inline-flex items-center gap-2 bg-[#C9996B]/20 backdrop-blur-sm px-5 py-2.5 rounded-full text-sm text-white border border-[#C9996B]/40 hover:bg-[#C9996B]/40 transition">
                <i class="fas fa-podcast"></i> subscribe via RSS
              </a>
            </div>
          </div>
        </div>

        <div class="border-t border-[#EDE9E6]/20 mt-14 pt-7 flex flex-col md:flex-row justify-between items-center text-xs text-[#EDE9E6]/60">
          <p>© 2026 Lionel Kubwimana — Software Engineer & AI Product Builder. Built with Ardin wel</p>
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