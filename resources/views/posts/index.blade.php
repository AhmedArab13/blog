@extends('layouts.app')



@section('dsfsdf')
    <br>

    <div class="container">

        <a href="{{ route('posts.create') }}" class=" btn btn-success">Create post</a>

    </div>



    <table class="table container mt-5">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Posted_by</th>
                <th scope="col">Created_at</th>
                <th scope="col">Options</th>

            </tr>
        </thead>
        <tbody>




            {{-- we can not foreach on object in php but we can do it in elequent object only  in laravel --}}

            @foreach ($posts as $post)
                {{--
            $posts -> array of model object
            $post --> model object --}}

                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <th scope="row">{{ $post->title }}</th>
                    <td colspan="1">{{ $post->posted_by }}</td>
                    <td colspan="1">{{ $post->created_at }}</td>
                    <td>
                        <a href="{{ route('posts.show', ['post' => $post['id']]) }}" class=" btn btn-success">View</a>
                        <a href="{{ route('posts.update' , ['post' => $post['id']]) }}" class=" btn btn-primary">Edit</a>
                        <a href="#" class=" btn btn-danger">Delete</a>
                    </td>


                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
