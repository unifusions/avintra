@props(['disabled' => false, 'errorMsg' => ''])


<input {{ $disabled ? 'disabled' : '' }}
    {{ $attributes->class(['form-control', 'is-invalid' => $errorMsg])->merge(['disabled' => false]) }} />

{{-- {{ dd($errorMsg) }} --}}
