@extends('layout')
@section('title','Computers create')
@section('contant')
<div class="container text-center">
    <h1>Computers create</h1>

<div class="container text-center">
    <div class="form-container">
        <form action="{{ route('computers.store') }}" method="post">
            {{-- دى حاجه زى حمايه عشان تمنع اى حاجه غلط او هاك يوصل للداتا بيز --}}
            @csrf
            <div class="mb-3 mt-3">
                <label for="Computer-Name" class="form-label">Computer Name:</label>
                <input type="text" class="form-control" id="Computer-Name" placeholder="Enter Computer Name" value="{{ old('Computer-Name') }}"  name="Computer-Name">
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
                {{-- value old for if لو كتب القيمه بعدعا حصل خطا فى باقى القيم تفضل القيمه دى مكتوبه --}}
                <input type="text" class="form-control" id="Computer-Origian" placeholder="Enter Computer Origin" value="{{ old('Computer-Origian') }}" name="Computer-Origian">
                @error('Computer-Origian')
                <div class="form-error">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="Computer-Price" class="form-label">Computer Price:</label>
                <input type="text" class="form-control" id="Computer-Price" placeholder="Enter Computer Price" value="{{ old('Computer-Price') }}" name="Computer-Price">
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
