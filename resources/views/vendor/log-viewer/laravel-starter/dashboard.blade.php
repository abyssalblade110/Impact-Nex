@extends ('backend.layouts.app')

<?php
$module_icon = "fa-solid fa-list-check";
?>

@section('title') {{ __('Log Viewer Dashboard') }} @endsection

@section('breadcrumbs')
<x-backend-breadcrumbs>
    <x-backend-breadcrumb-item type="active" icon='{{ $module_icon }}'>
        @lang('Log Viewer')
    </x-backend-breadcrumb-item>
</x-backend-breadcrumbs>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-8">
                <h4 class="card-title mb-0">
                    <i class="{{$module_icon}}"></i> @lang('Log Viewer')
                    <small class="text-muted">@lang('Dashboard') </small>
                </h4>
                <div class="small text-muted">
                    @lang('Log Viewer Module')
                </div>
            </div>

            <div class="col-4">
                <div class="btn-toolbar float-end" role="toolbar" aria-label="Toolbar with button groups">
                    <x-backend.buttons.return-back />
                    <a class="btn btn-primary ms-1" href="{{ route('log-viewer::logs.list') }}" type="button">
                        <i class="fas fa-list-ol"></i> @lang('Logs by Date')
                    </a>
                </div>
            </div>
            <!--/.col-->
        </div>
        <!--/.row-->

        <div class="row mt-4">
            <div class="col-md-6 col-lg-3">
                <canvas id="stats-doughnut-chart" height="300" class="mb-3"></canvas>

                <hr>
                <a class="btn btn-primary btn-lg btn-block" href="{{ route('log-viewer::logs.list') }}" type="button">
                    <i class="fas fa-list-ol"></i> @lang('Logs by Date')
                </a>
            </div>

            <div class="col-md-6 col-lg-9">
                <div class="row">
                    @foreach($percents as $level => $item)
                    <div class="col-sm-6 col-md-12 col-lg-4 mb-3">
                        <div class="box level-{{ $level }} {{ $item['count'] === 0 ? 'empty' : '' }}">
                            <div class="box-icon">
                                {!! log_styler()->icon($level) !!}
                            </div>

                            <div class="box-content">
                                <span class="box-text">{{ $item['name'] }}</span>
                                <span class="box-number">
                                    {{ $item['count'] }} entries - {!! $item['percent'] !!} %
                                </span>
                                <div class="progress" style="height: 3px;">
                                    <div class="progress-bar" style="width: {{ $item['percent'] }}%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('after-styles')
@include('log-viewer::laravel-starter.partials.style')
@endpush

@push('after-scripts')
<script type="module" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<script type="module">
    $(function() {
        new Chart(document.getElementById("stats-doughnut-chart"), {
            type: 'doughnut',
            data: {!!$chartData!!},
            options: {
                legend: {
                    position: 'bottom'
                }
            }
        });
    });
</script>
@endpush