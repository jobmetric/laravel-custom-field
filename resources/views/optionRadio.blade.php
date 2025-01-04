<label
    class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6
    @if ($field->selected)
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
                @if (isset($field->label) && $field->label)
                    {{ $field->label }}
                @endif
                @if (isset($field->tag) && $field->tag)
                    <span class="badge badge-light-success ms-2 py-2 px-3 fs-7">{{ $field->tag }}</span>
                @endif
            </div>
            @if (isset($field->discription) && $field->discription)
                <div class="fw-semibold opacity-75">
                    {{ $field->discription }}
                </div>
            @endif
        </div>
    </div>
    @if (isset($field->extraContent) && $field->extraContent)
        <div class="ms-5">
            <span class="fs-3x fw-bold" data-value="{{ $field->extraContent }}">{{ $field->extraContent }}</span>
            @if (isset($field->metaInfo) && $field->metaInfo)
                <span class="fs-7 opacity-50">/
                    <span data-value="{{ $field->metaInfo }}">{{ $field->metaInfo }}</span>
                </span>
            @endif
        </div>
    @endif
</label>
