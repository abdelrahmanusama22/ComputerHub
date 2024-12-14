@extends('layout')
@section('title', 'Computers Detalis')
@section('contant')
    <div class="container text-center">
        <h1>Computers detalis</h1>
        <ul>
            @if (count($computers) > 0)


            @foreach ($computers as $computer)
            <a href="{{ route('computers.show', ['computer' => $computer['id']]) }}">
                <li>
                    {{ $computer['name'] }} is from <strong>{{ $computer['origin'] }} </strong><strong>{{ $computer['price'] }} </strong>
                </li>
            </a>
        @endforeach

        </ul>
             @else
        <p> There are No Computers Display</p>
        @endif

    </div>
@endsection
