@extends('layouts.app')

@section('main-content')
    <section id='trains-list'>
        <div class="my_container my_d-flex my_column my_align-center my_justify-center">
            <h2 class="my_text-uppercase my_title">Trains List</h2>
            
            <div class="my_cards-container my_d-flex my_wrap my_justify-center">
                @forelse ($trains as $train)
                    <article class="my_card my_text-center" title="Titolo Originale :{{$train->original_title}}">
                        <a href="{{route(Request::route()->getName()) . '/' . $loop->iteration}}">
                            <ul>
                                <li>{{$train->company}}</li>
                                <li>{{$train->arrival_station}}</li>
                                <li>{{$train->departure_time}}</li>
                                <li>{{$train->arrival_time}}</li>
                                <li>{{$train->train_code}}</li>
                                <li>{{$train->num_of_railways}}</li>
                                <li>{{$train->is_on_time}}</li>
                                <li>{{$train->was_removed}}</li>
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