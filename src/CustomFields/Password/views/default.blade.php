<div class="fv-row {{ $classParent }}">
    @if($field->getLabel())
        <label for="{{ $field->getId() }}" class="form-label">{{ trans($field->getLabel()) }}</label>
    @endif
    <input type="password" name="{{ $field->getName() }}"{!! $field->getAttributeTheme() !!}{!! $field->getThemeData() !!} autocomplete="new-password">
    @if($showInfo && $field->getInfo())
        <small>{{ trans($field->getInfo()) }}</small>
    @endif
    @if($hasErrorTagForm)
        @error($field->getName())
            <div class="text-danger">{{ $message }}</div>
        @enderror
    @endif
</div>
