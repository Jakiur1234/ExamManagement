@if(session('success'))
    <x-success-message message="{{session('success')}}" />
@endif
@if(session('danger'))
    <x-error-message message="{{session('danger')}}" />
@endif
