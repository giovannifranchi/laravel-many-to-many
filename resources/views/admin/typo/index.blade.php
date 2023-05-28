@extends('layouts.auth')

@section('content')

<div class="container">

    <h1 class="my-3">Types List</h1>

    <a href="{{route('admin.types.create')}}" class="btn btn-success mt-3">Add Type</a>



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
                <td>{{$type->id}}</td>
                <td>{{$type->name}}</td>
                <td>{{$type->slug}}</td>
                <td>
                    <div class="d-flex gap-2">
                        <a href="" class="btn btn-info">Details</a>
                        <a href="" class="btn btn-warning">Edit</a>
    
                    </div>
                </td>
            </tr>            
            @endforeach
        </tbody>
    
    </table>
</div>
    
@endsection