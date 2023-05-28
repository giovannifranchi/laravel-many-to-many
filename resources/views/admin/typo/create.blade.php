@extends('layouts.auth')

@section('content')

<div class="container">
    <form action="{{route('admin.types.store')}}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label for="name" class="form-label">Type Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
    </div>
    
    </form>
</div>
    
@endsection