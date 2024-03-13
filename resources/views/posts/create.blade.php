@extends('layouts.app')



@section('create_form')

    <form method="POST" action="{{ route('posts.store') }}" class="container">

        @csrf

        <div class="mb-3 ">
            <label for="exampleFormControlInput1" class="form-label">Post creator</label>
            <input type="text" class="form-control @error('posted_by') is-invalid @enderror " name="posted_by"
                id="exampleFormControlInput1">

            @error('posted_by')
                <div class="alert alert-danger ">{{ $message }}</div>
            @enderror

        </div>
        <div class="mb-3 ">
            <label for="exampleFormControlInput1" class="form-label">Post title</label>
            <input type="text" class="form-control  @error('title') is-invalid @enderror " name="title"
                id="exampleFormControlInput1">

            @error('title')
                <div class="alert alert-danger ">{{ $message }}</div>
            @enderror


        </div>
        <div class="mb-3 ">
            <label for="exampleFormControlTextarea1" class="form-label">Post description</label>
            <textarea class="form-control @error('description') is-invalid @enderror " name="description"
                id="exampleFormControlTextarea1" rows="3"></textarea>
            @error('description')
                <div class="alert alert-danger ">{{ $message }}</div>
            @enderror


        </div>

        <div class="col-auto ">
            <button type="submit" class="btn btn-success mb-3 ">Create</button>
        </div>

    </form>
@endsection
