@extends('app')

@section('title', 'Services Page')

@section('content')
    <h1>Welcome to laravel 6 from services</h1>

    <ul>
       @forelse($services as $service)
           <li>{{$service}}</li>
        @empty
            <li>No Services Available</li>
        @endforelse
       
    </ul>
@endsection