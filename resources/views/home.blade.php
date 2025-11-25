<x-layouts.main-app title="Welcome to SKI MAGANG">
    @vite('resources/js/lottie.js')

    <section class="relative flex min-h-[80vh] flex-col items-center justify-center px-4 pb-12 overflow-hidden">
        <div class="absolute inset-0 gradient-mesh"></div>
        <div class="absolute top-20 left-10 w-72 h-72 bg-purple-300/30 dark:bg-purple-600/20 rounded-full blur-3xl animate-float"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-blue-300/30 dark:bg-blue-600/20 rounded-full blur-3xl animate-float" style="animation-delay: -3s;"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-indigo-300/20 dark:bg-indigo-600/10 rounded-full blur-3xl"></div>

        <div class="relative z-10 w-full max-w-xl text-center">
            <div class="glass-card p-8 mb-8 mx-auto inline-block">
                <x-lottie-animation id="hero-animation" src="{{ asset('lotties/hero-animation.lottie') }}" class="size-64 mx-auto"/>
            </div>
            <h1 class="mb-4 text-4xl font-bold text-gray-900 md:text-5xl dark:text-white leading-tight">
                Find the <span class="bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">Right Internship</span> for Your Future
            </h1>
            <p class="mb-8 text-lg text-gray-600 dark:text-gray-300 max-w-md mx-auto">
                Explore curated internship opportunities tailored for vocational students.
            </p>
            <a href="{{ route('internships.index') }}"
               class="inline-block glass-button-primary px-8 py-4 text-lg font-semibold rounded-2xl transition-all duration-300 hover:scale-105 hover:shadow-[0_8px_30px_rgba(99,102,241,0.4)]">
                I'm Ready!
            </a>
        </div>
    </section>

    <section class="relative px-4 py-20">
        <div class="mx-auto max-w-5xl">
            <h2 class="mb-12 text-center text-3xl font-bold text-gray-900 md:text-4xl dark:text-white">
                Why Choose <span class="bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">SKI MAGANG</span>?
            </h2>
            <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                <div class="glass-card flex flex-col items-center p-8 text-center group hover:scale-[1.02] transition-all duration-300">
                    <div class="mb-6 p-4 rounded-2xl bg-gradient-to-br from-blue-500/20 to-indigo-500/20 group-hover:from-blue-500/30 group-hover:to-indigo-500/30 transition-all duration-300">
                        <flux:icon name="bookmark" class="h-10 w-10 text-blue-600 dark:text-blue-400"/>
                    </div>
                    <h3 class="mb-3 text-xl font-semibold text-gray-900 dark:text-white">Curated Opportunities</h3>
                    <p class="text-gray-600 dark:text-gray-300">All internships are selected and updated for vocational students, ensuring relevance and quality.</p>
                </div>
                <div class="glass-card flex flex-col items-center p-8 text-center group hover:scale-[1.02] transition-all duration-300">
                    <div class="mb-6 p-4 rounded-2xl bg-gradient-to-br from-pink-500/20 to-rose-500/20 group-hover:from-pink-500/30 group-hover:to-rose-500/30 transition-all duration-300">
                        <flux:icon name="heart" class="h-10 w-10 text-pink-500 dark:text-pink-400"/>
                    </div>
                    <h3 class="mb-3 text-xl font-semibold text-gray-900 dark:text-white">Bookmark & Like</h3>
                    <p class="text-gray-600 dark:text-gray-300">Easily bookmark and like internships to keep track of your favorites and never miss an opportunity.</p>
                </div>
                <div class="glass-card flex flex-col items-center p-8 text-center group hover:scale-[1.02] transition-all duration-300">
                    <div class="mb-6 p-4 rounded-2xl bg-gradient-to-br from-amber-500/20 to-yellow-500/20 group-hover:from-amber-500/30 group-hover:to-yellow-500/30 transition-all duration-300">
                        <flux:icon name="bolt" class="h-10 w-10 text-amber-500 dark:text-amber-400"/>
                    </div>
                    <h3 class="mb-3 text-xl font-semibold text-gray-900 dark:text-white">Fast & Easy Access</h3>
                    <p class="text-gray-600 dark:text-gray-300">Quickly discover, search, and apply for internships with a user-friendly interface designed for students.</p>
                </div>
            </div>
        </div>
    </section>
</x-layouts.main-app>
