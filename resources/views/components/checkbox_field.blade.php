<div class="form-check form-check-custom form-check-solid form-check-sm">
    <input type="checkbox"
           @if($name) name="{{ $name }}" @endif
           class="form-check-input  @if($class) {{ $class }} @endif"
           @if($value) value="{{ $value }}" @endif
           @if($id) id="{{ $id }}" @endif
           @if($checked ?? false) checked @endif/>
    @if($title)
        <label class="form-check-label" @if($id) for="{{ $id }}" @endif>{{ $title }}</label>
    @endif
</div>
