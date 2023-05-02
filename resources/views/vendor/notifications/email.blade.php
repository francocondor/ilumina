@component('mail::message')
{{-- Greeting --}}
@if (! empty($greeting))
# {{ $greeting }}
@else
@if ($level === 'error')
# @lang('Whoops!')
@else
# @lang('Hola!')
@endif
@endif

{{-- Intro Lines --}}

Recibió este correo electrónico porque recibimos una solicitud de restablecimiento de contraseña para su cuenta.


{{-- Action Button --}}
@isset($actionText)
<?php
    switch ($level) {
        case 'success':
        case 'error':
            $color = $level;
            break;
        default:
            $color = 'primary';
    }

    $actionUrl = str_replace("localhost","iluminaarquitectura.com",$actionUrl);



?>

@component('mail::button', ['url' => $actionUrl, 'color' => $color])
Reiniciar contraseña
@endcomponent
@endisset

Este enlace de restablecimiento de contraseña caducará en 60 minutos.<br>
Si no solicitó un restablecimiento de contraseña, no se requiere ninguna otra acción.

{{-- Subcopy --}}
@isset($actionText)
@slot('subcopy')
@lang(
    "Si tiene problemas para hacer clic en el botón Reiniciar contraseña, copie y pegue la URL debajo de\n".
    'en su navegador web: [:actionURL](:actionURL)',
    [
        'actionText' => $actionText,
        'actionURL' => $actionUrl,
    ]
)
@endslot
@endisset
@endcomponent
