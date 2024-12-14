@extends('layout')
@section('title','Computers Detalis')
@section('contant')
<div class="container text-center">
    <h1>Computers detalis</h1>

        {{ $computers['name'] }} is from <strong>{{ $computers['origin'] }} </strong><strong>{{ $computers['price'] }}$</strong>


</div>
<div>
    <a class="edit-button" href="{{route('computers.edit',$computers->id )}}">Edit</a>

</div>
<div>
    <form action="{{route('computers.destroy',$computers->id )}}" method="POST">
        @csrf
        @method('DELETE')
        <input class="delete-button" type="submit" value=" delete">
    </form>

</div>
@endsection
