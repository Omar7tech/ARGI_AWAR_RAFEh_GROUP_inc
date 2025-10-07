<section class="relative py-10 transition-colors duration-300">
  <!-- Soft Diagonal Cross Grid Left Fade Background -->
  <div
    class="absolute inset-0 pointer-events-none hidden sm:block"
    style="
      background-image:
        linear-gradient(45deg, transparent 49%, #f5f5f5 49%, #f5f5f5 51%, transparent 51%),
        linear-gradient(-45deg, transparent 49%, #f5f5f5 49%, #f5f5f5 51%, transparent 51%);
      background-size: 40px 40px;
      -webkit-mask-image: radial-gradient(ellipse 70% 100% at 0% 50%, #000 25%, transparent 70%);
      mask-image: radial-gradient(ellipse 70% 100% at 0% 50%, #000 25%, transparent 70%);
      opacity: 0.18;
    "
  ></div>

  <div class="relative container mx-auto px-4 max-w-6xl">
    <div class="grid lg:grid-cols-2 gap-10 items-center">

      <!-- Image Column -->
      <div class="relative">
        <!-- Softer Glow -->
        <div class="absolute inset-0 bg-gradient-to-br from-cyan-400/5 to-teal-400/5 dark:from-cyan-300/3 dark:to-teal-300/3 rounded-3xl blur-2xl scale-105"></div>

        <div class="relative flex items-center justify-center p-6">
          <img
            class="w-full h-auto drop-shadow-xl transform hover:scale-105 transition-all duration-500"
            src="{{ asset('icons/workers-nobg.png') }}"
            alt="Strong foundation construction"
          />
        </div>
      </div>

      <!-- Content Column -->
      <div class="space-y-4">
        <div
          class="inline-block px-4 py-1.5 bg-cyan-100 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-300 text-sm font-semibold rounded-full mb-2"
        >
          Licensed Commercial Contractor
        </div>

        <h2
          class="text-3xl md:text-4xl font-extrabold leading-tight text-gray-900 dark:text-white"
        >
          Secure Your Foundation with
          <span class="relative inline-block">
            <span
              class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-600 to-teal-600 dark:from-cyan-400 dark:to-teal-400"
              >Precision</span
            >
            <span
              class="absolute bottom-0 left-0 w-full h-1 bg-gradient-to-r from-cyan-600 to-teal-600 dark:from-cyan-400 dark:to-teal-400 opacity-30"
            ></span>
          </span>
        </h2>

        <p class="text-base text-gray-600 dark:text-gray-400 leading-relaxed">
          Enhancing properties across the Washington Metropolitan Area with
          expertise and dedication.
        </p>

        <div class="grid gap-3 pt-2">
          <div
            class="flex items-start gap-3 p-3 rounded-lg bg-white dark:bg-gray-800/50 border border-gray-200 dark:border-gray-700"
          >
            <svg
              class="w-6 h-6 text-cyan-600 dark:text-cyan-400 flex-shrink-0 mt-0.5"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M5 13l4 4L19 7"
              />
            </svg>
            <div>
              <p class="text-sm text-gray-700 dark:text-gray-300">
                <span
                  class="font-bold text-cyan-600 dark:text-cyan-400"
                  >Awar Group Companies</span
                >
                blends expertise with exceptional service, built on
                <span class="font-semibold"
                  >promptness, punctuality, and professionalism</span
                >.
              </p>
            </div>
          </div>

          <div
            class="flex items-start gap-3 p-3 rounded-lg bg-white dark:bg-gray-800/50 border border-gray-200 dark:border-gray-700"
          >
            <svg
              class="w-6 h-6 text-teal-600 dark:text-teal-400 flex-shrink-0 mt-0.5"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"
              />
            </svg>
            <div>
              <p class="text-sm text-gray-700 dark:text-gray-300">
                Clear communication and high-quality care—you're not just a
                client, you're part of our community.
              </p>
            </div>
          </div>
        </div>

        <div class="pt-3 flex flex-wrap gap-3">
          <button
            class="inline-flex items-center px-5 py-2.5 text-sm font-semibold text-white bg-gradient-to-r from-cyan-600 to-teal-600 hover:from-cyan-700 hover:to-teal-700 dark:from-cyan-500 dark:to-teal-500 dark:hover:from-cyan-600 dark:hover:to-teal-600 rounded-lg shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-300"
          >
            Start Your Project
            <svg
              class="w-4 h-4 ml-2"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M13 7l5 5m0 0l-5 5m5-5H6"
              />
            </svg>
          </button>

          <button
            class="inline-flex items-center px-5 py-2.5 text-sm font-semibold text-cyan-700 dark:text-cyan-300 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 border-2 border-cyan-600 dark:border-cyan-400 rounded-lg transition-all duration-300"
          >
            Learn More
          </button>
        </div>
      </div>
    </div>
  </div>
</section>
