<div class="mb-10">
    <label class="form-label d-flex justify-content-between align-items-center">
        <span class="required">{{ trans($field->getLabel()) }}</span>
        <div class="text-gray-600 fs-7 d-none d-md-block d-lg-none d-xl-block">{{ trans($field->getInfo()) }}</div>
    </label>
    <input type="text" name="{{ $field->getName() }}"{!! $field->getAttributes() !!}>
    <div class="text-gray-600 fs-7 mt-2 d-md-none d-lg-block d-xl-none">{{ trans($field->getInfo()) }}</div>
</div>
