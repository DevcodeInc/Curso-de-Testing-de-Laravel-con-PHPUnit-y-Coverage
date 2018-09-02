@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => 'www.jaja.com'])
            Se creo una nueva categoria con el nombre {{ $categoria->name}}
        @endcomponent
    @endslot


    {{-- Intro Lines --}}
    @foreach ($introLines as $line)
        {{ $line }}

    @endforeach

    {{-- Action Button --}}
    @isset($actionText)
        <?php
        switch ($level) {
            case 'success':
                $color = 'green';
                break;
            case 'error':
                $color = 'red';
                break;
            default:
                $color = 'blue';
        }
        ?>
        @component('mail::button', ['url' => $actionUrl, 'color' => $color])
            {{ $actionText }}
        @endcomponent
    @endisset


    {{-- Body --}}
    @component('mail::table')
        <ul> {{ $categoria->name }}
            <li><b>Nombre: </b>{{ $categoria->name }}</li>
            <li><b>Comentario: </b>{{ $categoria->comment }}</li>
            <li><b>Orden: </b> {{ $categoria->order }}</li>
        </ul>
    @endcomponent

    {{-- Outro Lines --}}
    @foreach ($outroLines as $line)
        {{ $line }}
    @endforeach

    {{-- Subcopy --}}
    @isset($subcopy)
        @slot('subcopy')
            @component('mail::subcopy')
                {{ $subcopy }}
            @endcomponent
        @endslot
    @endisset
    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            © {{ date('Y') }} {{ config('app.name') }}. Laravel avanzado DEVCODELA!
        @endcomponent
    @endslot
@endcomponent