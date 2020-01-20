@extends('app')

@section('title', 'Service')

@section('content')
    <h1>Welcome to Laravel 6 from Service</h1>

    <ul>
        <!-- @foreach($services as $services)
            <li>{{ $services }}</li>
        @endforeach -->
            
        @forelse ($services as $service)
            <li>{{ $services }}</li>
        @empty
            <p>No Service</p>
        @endforelse
    </ul>
@endsection