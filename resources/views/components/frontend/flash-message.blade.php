@foreach (session('flash_notification', collect())->toArray() as $message)

    @if ($message['level'] == "success")
        <div class="p-4 my-4 text-sm font-semibold border border-green-600 text-green-600 rounded-lg bg-green-900 dark:bg-gray-800 dark:text-green-400" role="alert">
            {!! $message['message'] !!}
        </div>
    @elseif ($message['level'] == "danger")
        <div class="p-4 my-4 text-sm font-semibold border border-red-600 text-red-600 rounded-lg bg-red-900 dark:bg-gray-800 dark:text-red-400" role="alert">
            {!! $message['message'] !!}
        </div>
    @elseif ($message['level'] == "warning")
        <div class="p-4 my-4 text-sm font-semibold border border-yellow-600 text-yellow-600 rounded-lg bg-yellow-900 dark:bg-gray-800 dark:text-yellow-300" role="alert">
            {!! $message['message'] !!}
        </div>
    @elseif ($message['level'] == "info")
        <div class="p-4 my-4 text-sm font-semibold border border-blue-600 text-blue-600 rounded-lg bg-blue-900 dark:bg-gray-800 dark:text-blue-400" role="alert">
            {!! $message['message'] !!}
        </div>
    @else
        <div class="p-4 my-4 text-sm font-semibold border border-gray-600 text-gray-600 rounded-lg bg-gray-900 dark:bg-gray-800 dark:text-gray-300" role="alert">
            {!! $message['message'] !!}
            {{ $message['level'] }}
        </div>
    @endif

@endforeach

{{ session()->forget('flash_notification') }}
