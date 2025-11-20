@if (session($type))
    <div class="{{$style}}" role="alert">
        <strong>{{ session($type) }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif
