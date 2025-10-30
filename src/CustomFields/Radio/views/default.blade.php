<div class="{{ $classParent ?? 'mb-10' }}">
    <div class="col-lg-12 mb-10 mb-lg-0">
        <div class="nav flex-column" role="tablist">
            {!! $field->getThemeOptions() !!}
        </div>
    </div>
    @if($showInfo)
        <div class="text-gray-600 fs-7 mt-2 d-md-none d-lg-block d-xl-none">{!! trans($field->getInfo()) !!}</div>
    @endif
    @if($hasErrorTagForm)
        @error($field->getNameDot())
            <div class="{{ $errorTagClass ?? 'custom-field-error' }} text-danger fs-7 mt-2">{{ $message }}</div>
        @enderror
    @endif
    @if($hasErrorTagJs)
        <div class="{{ $errorTagClass ?? 'custom-field-error' }} text-danger fs-7 mt-2" data-name="{{ $field->getNameDot() }}"></div>
    @endif
</div>