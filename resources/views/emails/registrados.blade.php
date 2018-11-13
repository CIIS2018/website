@component('mail::message')

Estimado(a):

## <p style="color: blue;text-transform: uppercase; font-weight: bold;">{{$name}} {{$lastname}}</p>

<p style="font-style: italic">{{$institute}}</p>

Le damos la bienvenida al <p style="font-weight: bold;">XIX CONGRESO INTERNACIONAL DE INFORMÁTICA Y SISTEMAS - CIIS 2018.</p>

Su código de inscripción es: <span style="background-color: yellow;color: red; ">00{{$id}}</span>, conserve su código para la entrega de sus materiales y control de asistencia.

Agradeceremos verificar la correcta consignación de su nombre, para efecto de la emisión de su certificado como asistente del evento; en el caso existiera alguna observación favor comunicarlo por este medio.

Atte.

## Comité de Registro de Inscripción
<p style="font-style: italic">XIX CONGRESO INTERNACIONAL DE INFORMÁTICA Y SISTEMAS</p>

@endcomponent
