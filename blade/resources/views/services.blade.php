@extends('layouts.landing')

@section('title', 'Services')

@section('content')
    <h1>Services</h1>
    <div class="cards">
        @component('_components.card')
            @slot('title', 'Service 1')
            @slot('content', 'lorem ipsum dolor sit amet consectetur adipisicing elit.')
        @endcomponent
        @component('_components.card')
            @slot('title', 'Service 2')
            @slot('content', 'lorem ipsum dolor sit amet consectetur adipisicing elit.')
        @endcomponent
        @component('_components.card')
            @slot('title', 'Service 3')
            @slot('content', 'lorem ipsum dolor sit amet consectetur adipisicing elit.')
        @endcomponent
        @component('_components.card')
            @slot('title', 'Service 4')
            @slot('content', 'lorem ipsum dolor sit amet consectetur adipisicing elit.')
        @endcomponent
    </div>
@endsection