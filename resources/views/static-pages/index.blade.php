@extends('layouts.main')

@section('main-content')

{{-- Jumbotrone --}}
<div class="jumbo">
    {{-- description --}}
    <div class="jumbo-text">
        <h2>Diventa sviluppatore web</h2>

        <h3>Trasformiamo la tua passione in una carriera. Se non trovi lavoro, ti rimborsiamo.</h3>

        <ul>
            <li>6 mesi di corso intensivo online in diretta</li>
            <li>Nessuna competenza di programmazione richiesta</li>
            <li>Siamo certi del tuo successo, altrimenti ti rimborsiamo</li>
        </ul>
    </div>
    {{-- image --}}
    <div class="jumbo-img">
        <img src="https://www.boolean.careers/images/homepage/pc-black-gif.gif" alt="Boolean Image">
    </div>
</div>
    
@endsection