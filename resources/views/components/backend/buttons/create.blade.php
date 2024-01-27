@props(["route"=>"", "icon"=>"fas fa-plus-circle", "title"=>"Create", "small"=>"", "class"=>""])

@if($route)
<a href='{{$route}}'
    class='btn btn-success m-1 {{($small=='true')? 'btn-sm' : ''}} {{$class}}'
    data-toggle="tooltip"
    title="{{ __($title) }}">
    <i class="{{$icon}}"></i>
    {{ $slot }}
</a>
@else
<button type="submit"
    class='btn btn-success m-1 {{($small=='true')? 'btn-sm' : ''}} {{$class}}'
    data-toggle="tooltip"
    title="{{ __($title) }}">
    <i class="{{$icon}}"></i>
    {{ $slot }}
</button>
@endif
