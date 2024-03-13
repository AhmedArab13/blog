


@extends('layouts.app')

@section('edit')


{{-- <form method="POST" action="{{ route('posts.update',$post->id) }}">
    @csrf
    @method('PUT')
    <!-- Your form fields for editing post details -->
    <input type="text" name="title" value="{{ $post->title }}" placeholder="title">
    <textarea name="description"  >{{ $post->description }}</textarea>
    <!-- Submit button -->
    <button type="submit">Update Post</button>
</form> --}}



@if ($post)


<form method="POST" action="{{ route('posts.update',$post->id) }}" class="container">


    @csrf
    @method('PUT')

    <div class="mb-3 ">
        <label for="exampleFormControlInput1" class="form-label">Post creator</label>
        <input type="text" class="form-control" value="{{ $post->posted_by }}" @error('posted_by') is-invalid @enderror " name="posted_by"
            id="exampleFormControlInput1" disabled>



    </div>
    <div class="mb-3 ">
        <label for="exampleFormControlInput1" class="form-label">Post title</label>


        <input type="text" class="form-control  @error('title') is-invalid @enderror " name="title" value="{{ $post->title }}"
            id="exampleFormControlInput1">

        @error('title')
            <div class="alert alert-danger ">{{ $message }}</div>
        @enderror


    </div>
    <div class="mb-3 ">
        <label for="exampleFormControlTextarea1" class="form-label">Post description</label>


        <textarea class="form-control @error('description') is-invalid @enderror " name="description"
            id="exampleFormControlTextarea1" rows="3"> {{ $post->description }}</textarea>
        @error('description')
            <div class="alert alert-danger ">{{ $message }}</div>
        @enderror


    </div>

    <div class="col-auto ">
        <button type="submit" class="btn btn-success mb-3 ">Update post</button>
    </div>


</form>



@else



<div class="container">


    <h2 class="mb-5 container">
        Sorry, There is no posts to edit  .. Do you want to create a post ?
    </h2>


    <a href="{{ route('posts.create') }}" class=" btn btn-success">Create post</a>

</div>




    @endif


@endsection
