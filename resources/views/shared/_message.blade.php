@foreach(['danger', 'warning', 'success', 'info'] as $type)
  @if(session()->has($type))
    <div class="flash-message container">
      <p class="alert alert-{{ $type }}">
        {{ session()->get($type) }}
      </p>
    </div>
  @endif
@endforeach
