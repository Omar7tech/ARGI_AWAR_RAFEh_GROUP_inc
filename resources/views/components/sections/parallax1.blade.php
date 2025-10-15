<section class="relative py-16 md:py-20 lg:py-24 overflow-hidden parallax-section">
    <!-- Animated Grid Overlay -->
    <div class="absolute inset-0 opacity-5 pointer-events-none z-0">
        <div class="absolute inset-0"
            style="background-image: linear-gradient(rgba(6, 182, 212, 0.5) 1px, transparent 1px), linear-gradient(90deg, rgba(6, 182, 212, 0.5) 1px, transparent 1px); background-size: 60px 60px;">
        </div>
    </div>

    <!-- Content -->
    <div class="relative z-10 container mx-auto px-4 text-center text-white max-w-4xl">
        <h2 class="text-3xl md:text-4xl font-extrabold leading-tight mb-3">
            Excellence and Integrity
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-teal-400">
                Guaranteed
            </span>
        </h2>
        <p class="text-base text-gray-300 mb-8 max-w-2xl mx-auto leading-relaxed">
            Trustworthy services for your peace of mind. We stand behind our commitment to quality, safety, and
            transparent operations in every project we undertake.
        </p>
    </div>

    <style>
        .parallax-section {
            position: relative;
            z-index: 1;
            background-color: #111827;
        }

        .parallax-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url('https://lirp.cdn-website.com/23d1995d/dms3rep/multi/opt/1-1920w-1920w.webp');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;

            z-index: -1;
        }

        .parallax-section::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to bottom, rgba(17, 24, 39, 0.7), rgba(17, 24, 39, 0.85));
            z-index: -1;
        }

        /* Mobile fallback */
        @media (max-width: 768px) {
            .parallax-section::before {
                background-attachment: scroll;
            }
        }
    </style>
</section>
