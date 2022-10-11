@extends('layouts.default')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>All my Posts</h1>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Created</th>
                            <th scope="col">Edit</th>
                            <th scope="col">View</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$post->title}}</td>
                            <td>{{$post->created_at}}</td>
                            <td><a href="/edit-post/{{$post->slug}}"><i class="fa-solid fa-pen-to-square"></i></a></td>
                            <td>
                                <a  data-toggle="modal" data-target="#exampleModal">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{$post->title}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h3>Excrept</h3>
                <p>{{$post->excerpt}}</p>
                <h3 class="mt-2">Body</h3>
                <p>{{$post->body}}</p>
            </div>
            <div class="modal-footer">
                {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button> --}}
            </div>
        </div>
    </div>
</div>
@endsection