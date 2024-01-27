@props(['url', 'name', 'image' => ''])

<div class="flex flex-col bg-gray-900 border border-gray-600 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700">
    @if ($image)
    <div class="rounded-t-lg overflow-hidden">
        <a href="{{$url}}">
            <img class="rounded-t-lg transform hover:scale-110 duration-300 border-b-2 border-gray-600" src="{{$image}}" alt="{{$name}}">
        </a>
    </div>
    @endif
    <div class="mt-5 px-5">
        <a href="{{$url}}">
            <h5 class="mb-2 sm:mb-4 text-lg sm:text-xl font-semibold tracking-tight text-gray-300">
                {{$name}}
            </h5>
        </a>
    </div>
    <div class="flex-1 px-5 mb-2 sm:mb-4 font-normal text-sm sm:text-base text-gray-400">
        {!! $slot !!}
    </div>
    <div class="px-5 text-end pb-5">
        <a href="{{$url}}" class="inline-flex items-center text-sm outline-none outline-1 outline-gray-800 text-gray-300 hover:text-gray-100 bg-gray-600 hover:bg-blue-500 py-2 px-3 focus:outline-none rounded">
            Access Neural Network
            <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </a>
    </div>
</div>
