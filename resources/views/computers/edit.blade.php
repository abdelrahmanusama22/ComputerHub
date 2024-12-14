@extends('layout')
@section('title', 'Computers Edit')
@section('contant')
    <div class="container text-center">
        <h1>Edit an old Computers </h1>

        <div class="container text-center">
            <div class="form-container">
                <form action="{{ route('computers.update', ['computer' => $computer->id]) }}" method="POST">
                    {{-- دى حاجه زى حمايه عشان تمنع اى حاجه غلط او هاك يوصل للداتا بيز --}}
                    @csrf
                    {{-- ميثود لارفيل بتستعملها عشان المتصفح مش بيفهم  بوت --}}
                    @method('PUT')
                    <div class="mb-3 mt-3">
                        <label for="Computer-Name" class="form-label">Computer Name:</label>
                        {{--  value = to take name from database to edit it --}}

                        <input type="text" class="form-control" id="Computer-Name" placeholder="Enter Computer Name"
                            value="{{ $computer->name }}" name="Computer-Name">
                        {{-- this is method to get error message for user --}}
                        @error('Computer-Name')
                            <div class="form-error">
                                {{-- bultin message for valided --}}
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="Computer-Origian" class="form-label">Computer Origin:</label>
                        {{--  value = to take origian from database to edit it --}}
                        <input type="text" class="form-control" id="Computer-Origian" placeholder="Enter Computer Origin"
                            value="{{ $computer->origin }}" name="Computer-Origian">
                        @error('Computer-Origian')
                            <div class="form-error">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="Computer-Price" class="form-label">Computer Price:</label>
                        {{--  value = to take price from database to edit it --}}
                        <input type="text" class="form-control" id="Computer-Price" placeholder="Enter Computer Price"
                            value="{{ $computer->price }}" name="Computer-Price">
                        @error('Computer-Price')
                            <div class="form-error">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    @endsection
