@extends('layouts.main')

@section('main-content')

    <h1>Nome Studente</h1>

    <div class="student">
        <header>
        <img src="{{ $student['img'] }}" alt="{{ $student['nome'] }}">
            <div class="info">
                <h3>{{ $student['nome'] }} ({{ $student['eta'] }} anni)</h3>
                <h4>
                    Assunt{{ ( $student['genere'] == 'm') ? 'o' : 'a' }}
                    da: {{ $student['azienda'] }} come {{ $student['ruolo'] }}
                </h4>
            </div>
        </header>  
        <p>{{ $student['descrizione'] }}</p>
    </div>

@endsection