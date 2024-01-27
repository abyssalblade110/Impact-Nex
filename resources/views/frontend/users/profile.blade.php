@extends('frontend.layouts.app')

@section('title')
    @if(is_object($module_name_singular))
        {{ $module_name_singular->name }}'s Profile
    @else
        User Profile
    @endif
@endsection

@section('content')

<div class="grid grid-cols-1 sm:grid-cols-3 gap-4 max-w-7xl mx-auto px-4 sm:px-6 py-10">
    <div class="col-span-1">
        <!-- ... (unchanged code) ... -->
        @if ($userprofile->url_website)
            <a class="text-blue-800 hover:text-gray-800" target="_blank" href="{{ $userprofile->url_website }}">
                {{ $userprofile->url_website }}
            </a>
        @else
            <a class="text-blue-800 hover:text-gray-800" href="{{ route('frontend.users.profile', encode_id(optional($module_name_singular)->id)) }}">
                {{ route('frontend.users.profile', encode_id(optional($module_name_singular)->id)) }}
            </a>
        @endif
        <!-- ... (unchanged code) ... -->
    </div>
    <div class="col-span-2">
        <div class="mb-8 p-6 bg-white border shadow-lg rounded-lg">
            <h3 class="text-xl font-semibold">
                Profile
            </h3>

            <div class="flex justify-between p-4">
                <div class="">
                    <span class="font-semibold">{{ label_case('first_name') }}: </span>
                    <span class="">{{ optional($module_name_singular)->first_name }}</span>
                </div>
                <div class="">
                    <span class="font-semibold">{{ label_case('last_name') }}: </span>
                    <span class="">{{ optional($module_name_singular)->last_name }}</span>
                </div>
            </div>

            @auth
            @if (auth()->user()->id == optional($module_name_singular)->id)
            <div class="flex justify-between p-4">
                <!-- ... (unchanged code) ... -->
                <div class="">
                    <span class="font-semibold">{{ label_case('date_of_birth') }}: </span>
                    <span class="">{{ optional(optional($module_name_singular)->date_of_birth)->toFormattedDateString() }}</span>
                </div>
                <div class="">
                    <span class="font-semibold">{{ label_case('gender') }}: </span>
                    <span class="">{{ optional($module_name_singular)->gender }}</span>
                </div>
            </div>
            @endif
            @endauth

            <div class="flex flex-col justify-between p-4">
                <div class="font-semibold">
                    {{ label_case('bio') }}
                </div>
                <div class="">
                    {{ $userprofile->bio }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('after-scripts')
<script type="module" src="https://cdn.jsdelivr.net/npm/sharer.js@latest/sharer.min.js"></script>
@endpush
