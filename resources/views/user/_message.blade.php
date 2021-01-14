@foreach (['success','danger','warning','info'] as $item)
    @if (session()->has($item))
        <p class="alert alert-{{$item}}">
            {{session()->get($item)}}
        </p>
    @endif
@endforeach