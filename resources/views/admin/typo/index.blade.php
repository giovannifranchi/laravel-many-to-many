@extends('layouts.auth')

@include('partials.message')

@section('content')
    <div class="container">

        <h1 class="my-3">Types List</h1>

        <a href="{{ route('admin.types.create') }}" class="btn btn-success mt-3">Add Type</a>
        

        <table class="table my-5">

            <thead>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Slug</th>
                <th scope="col">Action</th>
            </thead>
            <tbody>
                @foreach ($types as $type)
                    <tr>
                        <td>{{ $type->id }}</td>
                        <td>{{ $type->name }}</td>
                        <td>{{ $type->slug }}</td>
                        <td>
                            <div class="d-flex gap-2">
                                <a href="{{route('admin.types.show', $type)}}" class="btn btn-info">Details</a>
                                <a href="{{route('admin.types.edit', $type)}}" class="btn btn-warning">Edit</a>
                                <button class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#modal{{ $type->id }}">Delete</button>
                            </div>
                        </td>
                        {{-- modal --}}
                        <div class="modal" tabindex="-1" id="modal{{ $type->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">You are deleting Type #{{ $type->id }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Are you sure you want to delete this Type?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <form action="{{ route('admin.types.destroy', $type) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
@endsection
