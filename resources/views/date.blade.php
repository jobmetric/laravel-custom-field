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
    <!-- <input type="date" name="{{ $field->getName() }}"{!! $field->getAttributeTheme() !!}> -->
    <div class="input-group" id="kt_td_picker_date_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
        <input id="kt_td_picker_date_only_input" type="text" class="form-control" data-td-target="#kt_td_picker_date_only"/>
        <span class="input-group-text" data-td-target="#kt_td_picker_date_only" data-td-toggle="datetimepicker">
            <i class="ki-duotone ki-calendar fs-2"><span class="path1"></span><span class="path2"></span></i>
        </span>
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
