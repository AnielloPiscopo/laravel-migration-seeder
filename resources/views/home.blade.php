/*
|--------------------------------------------------------------------------
| Homepage
|--------------------------------------------------------------------------
|
| This is the introductory page of the website
| available to the guest.
|
*/

@extends('layouts.app')

@section('main-content')
    <section id='trains-list'>
        <div class="my_container my_d-flex my_column my_align-center my_justify-center">
            <h2 class="my_text-uppercase my_title">Trains List</h2>
            
            <div class="my_cards-container my_d-flex my_wrap my_justify-center">
                @forelse ($trains as $train)
                    <article class="my_card my_text-center">
                        <a href="{{route(Request::route()->getName()) . '/' . $loop->iteration}}">
                            <ul>
                                <li>Compagnia del treno:{{$train->stringFirstLetterToUppecase($train->company)}}</li>
                                <li>Stazione di arrivo:{{$train->stringFirstLetterToUppecase($train->arrival_station)}}</li>
                                <li>Orario di partenza:{{$train->replaceElementInString('-','/',$train->departure_time)}}</li>
                                <li>Orario di arrivo:{{$train->replaceElementInString('-','/',$train->arrival_time)}}</li>
                                <li>Codice treno:{{$train->train_code}}</li>
                                <li>Numero di vagoni:{{$train->num_of_railways}}</li>
                                <li>E' puntuale:{{$train->is_on_time}}</li>
                                <li>E' stato cancellato:{{$train->was_removed}}</li>
                            </ul>
                        </a>
                    </article>
                @empty
                    <p>La lista è vuota</p>
                @endforelse
            </div>
        </div>
    </section>
@endsection