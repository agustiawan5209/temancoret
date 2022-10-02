@props(['value'])

<div class="label">
    <label {{ $attributes->merge(['class' => 'label-text']) }}>
        {{ $value ?? $slot }}
    </label>
</div>
