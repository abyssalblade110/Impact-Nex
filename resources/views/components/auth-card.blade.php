@props(["extra"=>""])

<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-800">
    <div class="text-center">
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-gray-900 border border-gray-700 shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>

    <div class="mt-4 text-gray-400">
        {{ $extra }}
    </div>
</div>
