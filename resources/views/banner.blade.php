<x-app title="cpx - Run Composer Packages Effortlessly">

    <section id="hero" class="relative flex flex-col justify-center px-6 mx-auto text-center isolate max-w-7xl md:px-8">
        <div class="relative isolate">
            <div class="absolute inset-x-0 overflow-hidden -top-40 -z-10 transform-gpu blur-3xl sm:-top-80" aria-hidden="true">
                <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-indigo-500 via-orange-500 to-blue-500 opacity-20 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>

            <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
            aria-hidden="true">
                <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-indigo-500 via-orange-500 to-blue-500 opacity-20 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>

            <h1 class="relative py-6 mt-5 mb-3 text-5xl font-extrabold leading-none tracking-tighter text-transparent -translate-y-4 text-balance sm:text-6xl md:text-7xl lg:text-8xl bg-gradient-to-r from-indigo-500 via-orange-500 to-blue-500 bg-clip-text">
                cpx
            </h1>
        </div>
        <p class="mb-6 text-2xl tracking-tight text-gray-400 -translate-y-4 text-balance md:text-xl">
            The entire PHP ecosystem, always at your fingertips
        </p>
        <div class="max-w-[44ch] mx-auto text-center">
            <x-terminal text="['composer global require cpx/cpx']" />
        </div>
    </section>

</x-app>
