<div class="{{ $classParent ?? 'mb-10' }}">
    <label class="form-label d-flex justify-content-between align-items-center">
        @if($field->hasRequired())
            <span class="required">{!! trans($field->getLabel()) !!}</span>
        @else
            <span>{!! trans($field->getLabel()) !!}</span>
        @endif
        @if($showInfo)
            <div class="text-gray-600 fs-7 d-none d-md-block d-lg-none d-xl-block">{!! trans($field->getInfo()) !!}</div>
        @endif
    </label>
    <!-- <input type="email" name="{{ $field->getName() }}"{!! $field->getAttributeTheme() !!}{!! $field->getThemeData() !!}> -->
    <div class="input-group input-group-solid mb-5">
        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2"/>
        <span class="input-group-text" id="basic-addon2">@example.com</span>
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