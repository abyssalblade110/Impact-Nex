<footer class="text-center bg-gray-900">
    <div class="max-w-screen-xl px-4 py-12 mx-auto sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto space-y-6">
            <div class="flex justify-center space-x-6">

                <a class="text-blue-500 hover:text-opacity-75" href="{{ setting('twitter_url') }}" target="_blank" rel="noopener noreferrer" aria-label="Twitter">
                    <i class="fab fa-twitter text-2xl"></i>
                </a>

                <a class="text-pink-600 hover:text-opacity-75" href="{{ setting('instagram_url') }}" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                    <i class="fab fa-instagram text-2xl"></i>
                </a>

                <a class="text-blue-600 hover:text-opacity-75" href="{{ setting('facebook_url') }}" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                    <i class="fab fa-facebook text-2xl"></i>
                </a>

                <a class="text-green-700 hover:text-opacity-75" href="{{ setting('whatsapp_url') }}" target="_blank" rel="noopener noreferrer" aria-label="Whatsapp">
                    <i class="fab fa-whatsapp text-2xl"></i>
                </a>

                <a class="text-red-500 hover:text-opacity-75" href="{{ setting('youtube_url') }}" target="_blank" rel="noopener noreferrer" aria-label="Youtube">
                    <i class="fab fa-youtube text-2xl"></i>
                </a>

                <a class="text-gray-700 hover:text-opacity-75" href="{{ setting('website_url') }}" target="_blank" rel="noopener noreferrer" aria-label="Website">
                    <i class="fas fa-globe text-2xl"></i>
                </a>
            </div>

            <nav class="relative flex flex-wrap justify-center gap-8 p-8 text-sm font-bold border-2 border-cyan-600 rounded-xl">
                <a class="hover:text-cyan-300" href="https://pawndelta.com" target="_blank" rel="noopener noreferrer">
                    PAWN DELTA
                </a>

                <a class="hover:text-cyan-300" href="/blog" target="_blank" rel="noopener noreferrer">
                    Blog
                </a>

                <a class="hover:text-cyan-300" href="/portfolio" target="_blank" rel="noopener noreferrer">
                    Portfolio
                </a>
            </nav>

            <p class="max-w-lg mx-auto text-xs text-gray-400">
               "Join us in creating a tidal wave of positive impact. Let your cause resonate in the digital realm, where stories become catalysts for change. CauseWave Hub is not just a platform; it's a movement,
               empowering organizations to ride the waves of compassion, awareness, and support.
                Dive into the current of change and make your cause known – because every ripple counts."
            </p>

            <p class="text-xs font-medium text-gray-500">
                &copy; {{ app_name() }}, {!! setting('footer_text') !!}
            </p>
        </div>
    </div>
</footer>
