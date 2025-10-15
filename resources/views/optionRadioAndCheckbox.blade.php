<label
    class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active d-flex flex-stack text-start p-6 mb-6
    @if (strtolower($field->type) === 'radio')
        btn-active-primary
    @endif
    @if ($field->selected && strtolower($field->type) === 'radio')
    active
    @endif "
    data-bs-toggle="tab"
    data-bs-target="#kt_upgrade_plan_enterprise"
    aria-selected="{{ $field->selected ? 'true' : 'false' }}"
    role="tab">
    <div class="d-flex align-items-center me-2">
        <div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
            <input type="{{ strtolower($field->type) }}" value="{{ $field->value }}" class="form-check-input" name="{{ $field->name }}"
                {{ $field->selected ? 'checked' : '' }}>
        </div>
        <div class="flex-grow-1">
            <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                @if ($field->label)
                    {{ $field->label }}
                @endif
            </div>
        </div>
    </div>
</label>



