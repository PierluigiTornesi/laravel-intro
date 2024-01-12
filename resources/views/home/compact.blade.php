
@extends('layouts.app')

@section('content')
    <h1>{{ $title }}</h1>
    <h2>Example by {{ $name }}</h2>

    @if ($like_blade)
        <h3>Mi piace blade</h3>
    @else
        <h3>Blade non mi piace</h3>
    @endif

    <h3>Lista di studenti</h3>
    {{-- <ul>
        @foreach ($students as $student)
            <li>
                {{$student['name']}}  {{$student['lastname']}}
                @if ($loop->last)
                    .
                @else
                    ,
                @endif
            </li>
            
        @endforeach
    </ul> --}}



    {{-- if con all'interno foreach --}}
    {{-- verifichiamo prima se esiste qualcosa dentro l'array , nel caso si stampa il valore , altrimenti messaggio che é vuoto --}}
    <h4>Con if e foreach</h4>
    <ul>
        @if (count($students) > 0)
            @foreach ($students as $student)
            <li>
                {{$student['name']}}  {{$student['lastname']}}
                @if ($loop->last)
                    .
                @else
                    ,
                @endif
            </li>
            
            @endforeach
        @else
            <li>
                Non abbiamo trovato nessun risultato
            </li>
        @endif
    </ul>



    {{-- forelse --}}
    {{-- fa la stessa cosa del blocco di codice sopra ma senza gli if e foreach, cosi é molto piú pulito e leggibile --}}
    <h4>Con forelse</h4>
    <ul>
        @forelse ($students as $student)
            <li>
                {{$student['name']}}
                {{$student['lastname']}}
                {{-- se é ultio elemento metto . altrimenti metto virgola --}}
                @if ($loop->last)
                    .
                @else
                    ,
                @endif
            </li>
        @empty
            <li>Non abbiamo trovato nessuno studente</li>
        @endforelse
    </ul>
        
    {{-- esempio di php --}}
    @php
        echo 'esempio di php su laravel';
    @endphp


    <h4>Go back to <a href="/about">about</a></h4>
@endsection
    
