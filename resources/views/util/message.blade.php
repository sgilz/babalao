@php(
    $alerts = [
        'success',
        'danger',
        'warning',
        'info',
        'primary',
        'secondary',
        'light',
        'dark'
        ]
)
@foreach ($alerts as $alert)
    @if($message = Session::get($alert))
    <div class="alert alert-{{$alert}} alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>    
        <strong>{{ $message }}</strong>
    </div>
    @endif
@endforeach