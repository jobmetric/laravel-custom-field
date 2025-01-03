<div class="{{ $classParent ?? 'mb-10' }}">
    {!! $field->getThemeOptions() !!}
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



