<section class="relative py-12 md:py-16 overflow-hidden values-section">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-br from-gray-900/85 via-gray-900/80 to-gray-800/85"></div>
    </div>

    <!-- Subtle Grid Pattern -->
    <div class="absolute inset-0 opacity-5 z-0">
        <div class="absolute inset-0" style="background-image: linear-gradient(rgba(20, 184, 166, 0.5) 1px, transparent 1px), linear-gradient(90deg, rgba(20, 184, 166, 0.5) 1px, transparent 1px); background-size: 50px 50px;"></div>
    </div>

    <div class="relative z-10 container mx-auto px-4 max-w-6xl">

        <!-- Compact Header -->
        <div class="text-center mb-8">
            <span class="inline-block px-3 py-1 bg-teal-500/20 border border-teal-500/30 text-teal-400 rounded-full text-xs font-semibold tracking-wider uppercase mb-3">
                Our Foundation
            </span>
            <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight text-white mb-2">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-teal-400 to-cyan-400">Values</span> That Drive Us
            </h2>
        </div>

        <!-- Content Box with Glassmorphism -->
        <div class="relative backdrop-blur-sm bg-white/10 border border-white/20 rounded-2xl shadow-2xl overflow-hidden">
            <div class="grid grid-cols-1 lg:grid-cols-2 divide-y lg:divide-y-0 lg:divide-x divide-white/10">

                <!-- Left Column -->
                <div class="p-6 md:p-8">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 rounded-lg bg-teal-500/20 border border-teal-500/30 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-teal-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-teal-400">Commitment & Local Focus</h3>
                    </div>
                    <div class="space-y-3 text-sm text-gray-300 leading-relaxed">
                        <p>
                            Awar Rafeh Group Companies is committed to delivering excellence in every project. Situated in the
                            Washington Metropolitan area, where the vibrant culture meets historical landmarks, we understand
                            the unique needs of the local community.
                        </p>
                        <p>
                            Our approach emphasizes <span class="text-teal-400 font-semibold">customer satisfaction</span> and <span class="text-teal-400 font-semibold">innovative solutions</span>,
                            ensuring your project is completed efficiently and effectively.
                        </p>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="p-6 md:p-8">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 rounded-lg bg-cyan-500/20 border border-cyan-500/30 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-cyan-400">Integrity & Lasting Relationships</h3>
                    </div>
                    <div class="space-y-3 text-sm text-gray-300 leading-relaxed">
                        <p class="font-semibold">
                            We believe in building long-lasting relationships with our clients by providing services that
                            <span class="text-cyan-400">exceed expectations</span>.
                        </p>
                        <p>
                            Our dedication to quality and integrity is reflected in every aspect of our work, building
                            the trust necessary for every successful project foundation.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <style>
        .values-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url('{{ asset('images/values2.jpg') }}');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;

            z-index: 0;
        }

        @media (max-width: 768px) {
            .values-section::before {
                background-attachment: scroll;
            }
        }
    </style>
</section>
