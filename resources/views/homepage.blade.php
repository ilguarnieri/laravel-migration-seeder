@extends('layouts.layout')

@section('mainContent')

<section id="ticket_wrapper">
    <div class="container">

        <div class="row justify-content-center">                  
            <div class="trains_list p-0 col-12 col-lg-8 d-flex justify-content-between flex-column">              

                {{-- main --}}
                <div class="ticket_main p-2 flex-grow-1">
                    <div class="row row-cols">
                        @foreach($trains as $train)

                        <div class="train-item">
                            <div class="train-head">
                                <h4 class="train-name">{{ $train->company }}</h4>
                                <p class="train-date">{{ $train->date }}</p>
                                <h5>{{ $train->code }}</h5>
                            </div>

                            <div class="train-info">
                                <div class="train-departure">
                                    <h6>Partenza da:</h6>
                                    <p>{{ $train->departure_station }}</p>
                                    <p>{{ $train->departure_time }}</p>
                                </div>

                                <div class="train-arrival">
                                    <h6>Arrivo a:</h6>
                                    <p>{{ $train->arrival_station }}</p>
                                    <p>{{ $train->arrival_time }}</p>
                                </div>
                            </div>

                        </div>

                        @endforeach                       
                    </div>                       
                </div>               
                
            </div>
        </div>
    </div>
</section>
@include('components.offers')

@endsection