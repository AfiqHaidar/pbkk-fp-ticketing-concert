@extends('index')

@section('card-container')
<h1 >List of Concerts</h1>
<ul>
    @foreach ($concerts as $concert)
        <li>
            <strong>{{ $concert->name }}</strong><br>
            Date: {{ $concert->date }}<br>
            Venue: {{ $concert->venue }}
        </li>
    @endforeach
</ul>
@stop