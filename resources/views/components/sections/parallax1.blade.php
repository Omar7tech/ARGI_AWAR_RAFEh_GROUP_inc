<section class="relative py-16 md:py-20 lg:py-24 overflow-hidden bg-gray-900 parallax-section-fix">


    <div class="relative z-10 container mx-auto px-4 text-center text-white max-w-4xl">
        <h2 class="text-3xl md:text-4xl font-extrabold leading-tight mb-3">
            Excellence and Integrity Guaranteed
        </h2>
        <p class="text-base text-gray-300 mb-8 max-w-2xl mx-auto leading-relaxed">
            Trustworthy services for your peace of mind. We stand behind our commitment to quality, safety, and
            transparent operations in every project we undertake.
        </p>

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
