<div class="{{ $classParent ?? 'mb-10' }}">
    <div class="fv-row" data-kt-password-meter="true">
        <div class="mb-1">
            <label class="form-label d-flex justify-content-between align-items-center fw-semibold fs-6 mb-2">
                @if($field->hasRequired())
                    <span class="required">{!! trans($field->getLabel()) !!}</span>
                @else
                    <span>{!! trans($field->getLabel()) !!}</span>
                @endif
                @if($showInfo)
                    <div class="text-gray-600 fs-7 d-none d-md-block d-lg-none d-xl-block">{!! trans($field->getInfo()) !!}</div>
                @endif
            </label>
            <!-- <input type="password" name="{{ $field->getName() }}"{!! $field->getAttributeTheme() !!}> -->  
            <div class="position-relative mb-3">
                <input class="form-control form-control-lg form-control-solid"
                    type="password" placeholder="" name="new_password" autocomplete="off" />
                <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                    data-kt-password-meter-control="visibility">
                        <i class="ki-duotone ki-eye-slash fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                        <i class="ki-duotone ki-eye d-none fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                </span>
            </div>
            <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
            </div>
        </div>
        @if($showInfo)
            <div class="text-gray-600 fs-7 mt-2 d-md-none d-lg-block d-xl-none">{!! trans($field->getInfo()) !!}</div>
        @endif
    </div>
    @if($hasErrorTagForm)
        @error($field->getNameDot())
            <div class="{{ $errorTagClass ?? 'custom-field-error' }} text-danger fs-7 mt-2">{{ $message }}</div>
        @enderror
    @endif
    @if($hasErrorTagJs)
        <div class="{{ $errorTagClass ?? 'custom-field-error' }} text-danger fs-7 mt-2" data-name="{{ $field->getNameDot() }}"></div>
    @endif
</div>
