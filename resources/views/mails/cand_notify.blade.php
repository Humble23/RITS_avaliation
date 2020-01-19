@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            RITS
        @endcomponent
    @endslot

    @slot('subcopy')
        Relatório diário de candidatura para as vagas de DESENVOLVEDOR PHP:

        <strong>{{$count}}</strong> Novos candidatos hoje
        
        Clique aqui para visualizar os dados dos candidatos
        @component('mail::button', ['url' => $link])
        Ir para o painel
        @endcomponent
        Atenciosamente,  
        RITS Bot.
        @component('mail::subcopy')
        @endcomponent
    @endslot


    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            <!-- footer here -->
        @endcomponent
    @endslot
@endcomponent