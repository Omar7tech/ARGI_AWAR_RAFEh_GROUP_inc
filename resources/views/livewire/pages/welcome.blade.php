<div class="">
    <x-hero.main />


    <x-sections.secure-foundation />
    <x-sections.solutions-services />
    <section class="relative py-16 md:py-20 lg:py-24 overflow-hidden bg-gray-900 parallax-section-fix">


        <div class="relative z-10 container mx-auto px-4 text-center text-white max-w-4xl">
            <h2 class="text-3xl md:text-4xl font-extrabold leading-tight mb-3">
                Excellence and Integrity Guaranteed
            </h2>
            <p class="text-base text-gray-300 mb-8 max-w-2xl mx-auto leading-relaxed">
                Trustworthy services for your peace of mind. We stand behind our commitment to quality, safety, and
                transparent operations in every project we undertake.
            </p>

            <a href="#"
                class="inline-flex items-center justify-center px-8 py-3.5 text-base font-semibold text-white bg-gradient-to-r from-teal-600 to-cyan-600 rounded-lg shadow-xl hover:shadow-teal-500/50 transition-all duration-300 hover:scale-[1.03]">
                Get Started
                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3">
                    </path>
                </svg>
            </a>
        </div>
        <style>
            .parallax-section-fix {
                position: relative;
                z-index: 1;
            }
            .parallax-section-fix::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-image: url('{{ asset('images/parallax-con.jpg') }}');
                background-size: cover;
                background-position: center;
                background-attachment: fixed;
                opacity: 0.30;
                background-color: rgba(0, 0, 0, 0.7);
                z-index: -1;
            }
        </style>
    </section>
    <x-sections.industries-we-serve />
    <x-sections.awar-group-advantage />
    <x-sections.values-drive-us />

</div>
