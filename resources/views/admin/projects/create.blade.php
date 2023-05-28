@extends('layouts.auth')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@section('content')
    <div class="container mt-3">
        <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Project Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
            </div>
            <div class="mb-3">
                <label for="summary" class="form-label">Summary</label>
                <textarea class="form-control" id="summary" name="summary" value="{{ old('summary') }}"></textarea>
            </div>

            <label for="types" class="form-label">Types</label>
            <select class="form-select w-50" id="types" name="type_id">
                <option selected>Select a Type</option>
                @foreach ($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>


            <div class="tech my-4">
                <h3 class="fw-light">Technologies</h3>
                <ul class="m-0 p-0 list-unstyled d-flex gap-3">
                    @foreach ($technologies as $technology)

                    <li>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="{{$technology->id}}" id="{{$technology->name}}" name="technologies[]" @checked(in_array($technology->id, old('technologies', [])))>
                            <label class="form-check-label" for="{{$technology->name}}">
                                {{$technology->name}}
                            </label>
                        </div>
                    </li>
                        
                    @endforeach
                </ul>
            </div>




            {{-- fill preview --}}
            <div class="mb-3 d-none" id="file-wrapper">
                <img src="" alt="">
            </div>
            {{-- fill preview --}}

            <div class="mb-3">
                <label for="formFile" class="form-label">Image</label>
                <input class="form-control" type="file" id="image" value="image" name="image">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
