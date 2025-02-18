<label class="form-label d-flex justify-content-between align-items-center">
    @if($title)
        <span @if($required ?? false) class="required" @endif>{{ $title }}</span>
    @endif
    @if($info)
        <div class="text-gray-600 fs-7 d-none d-md-block d-lg-none d-xl-block">{{ $info }}</div>
    @endif
</label>
<input type="number"
       @if($name) name="{{ $name }}" @endif
       @if($placeholder) placeholder="{{ $placeholder }}" @endif
       @if($value) value="{{ $value }}" @endif
       @if($id) id="{{ $id }}" @endif
       class="form-control @if($class) {{ $class }} @endif"
       @if($dataName) data-name="{{ $dataName }}" @endif>
@if($title)
    <div class="text-gray-600 fs-7 mt-2 d-md-none d-lg-block d-xl-none">{{ $title }}</div>
@endif
